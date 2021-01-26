<?php
namespace Deployer;

require 'recipe/laravel.php';
//require 'recipe/rsync.php';

// Hosts
$startTime = microtime(true);

host('production')
    ->hostname('119.18.27.84')
    ->stage('production')
    ->user('deployer')
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/html/weather')
    ->set('branch', 'master');

host('staging')
    ->hostname('119.18.27.84')
    ->stage('staging')
    ->user('deployer')
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/html/weather-staging')
    ->set('branch', 'master');


set('releases_list', function () {
    return explode("\n", run('ls -dt {{deploy_path}}/releases/*'));
});

set('keep_releases', 5);

// Project name
set('application', 'IMELBO2077');

// Project repository
set('repository', 'https://github.com/draqwerty/laravel');



task('create:release', function () {
    $i = 0;

    do {
        $releasePath = '{{deploy_path}}/releases/' . date('m_d_H_i_') . $i++;
    } while (run("if [ -d $releasePath ]; then echo exists; fi;") == 'exists');

    run("mkdir $releasePath");
    set('release_path', $releasePath);

    writeln("Release path: $releasePath");
});


task('update:code', function () {
    run("git clone -b {{branch}} -q --depth 1 {{repository}} {{release_path}}");
});

task('create:symlinks', function () {
    // Link .env.
    run("ln -nfs {{deploy_path}}/static/.env {{release_path}}");

    // Link storage.
    run("ln -nfs {{deploy_path}}/static/storage {{release_path}}");

    // Link vendor.
    run("ln -nfs {{deploy_path}}/static/vendor {{release_path}}");
});

task('update:vendors', function () {
    cd('{{release_path}}');
    writeln('<info>  Updating npm</info>');
    run('npm-cache install npm --no-dev');

    writeln('<info>  Updating composer</info>');
    run('composer install --no-dev');
});

task('update:permissions', function () {
    run('chmod -R a+w {{release_path}}/bootstrap/cache');
    run('chown -R {{user}}:{{user}} {{release_path}} -h');
});

task('compile:assets', function () {
    cd('{{release_path}}');
    run('npm run prod');
    run('rm -rf {{release_path}}/node_modules');
});

task('optimize', function () {
    run('php {{release_path}}/artisan cache:clear');
    run('php {{release_path}}/artisan view:clear');
    run('php {{release_path}}/artisan config:clear');
    run('php {{release_path}}/artisan config:cache');
});

task('site:down', function () {
    writeln(sprintf('<info>%s</info>', run('php {{release_path}}/artisan down')));
});

task('migrate:db', function () {
    writeln(sprintf('  <info>%s</info>', run('php {{release_path}}/artisan migrate --force --no-interaction')));
});

task('update:release_symlink', function () {
    run('cd {{deploy_path}} && if [ -e live ]; then rm live; fi');
    run('cd {{deploy_path}} && if [ -h live ]; then rm live; fi');

    run('ln -nfs {{release_path}} {{deploy_path}}/live');
});

task('site:up', function () {
    writeln(sprintf('  <info>%s</info>', run('php {{deploy_path}}/live/artisan up')));
});

task('clear:opcache', function(){
    run('cachetool opcache:reset --fcgi=/var/run/php/php7.2-fpm.sock');
});

task('cleanup', function () {
    $releases = get('releases_list');
    $keep = get('keep_releases');

    while ($keep-- > 0) {
        array_shift($releases);
    }

    foreach ($releases as $release) {
        run("rm -rf $release");
    }
});

task('notify:done', function () use ($startTime) {
    $seconds = intval(microtime(true) - $startTime);
    $minutes = substr('0' . intval($seconds / 60), -2);
    $seconds %= 60;
    $seconds = substr('0' . $seconds, -2);

    shell_exec("osascript -e 'display notification \"It took: $minutes:$seconds\" with title \"Deploy Finished\"'");
    shell_exec('say deployment finished');
});

task('rollback', function () {
    $releases = get('releases_list');

    if (isset($releases[1])) {
        writeln(sprintf('<error>%s</error>', run('php {{deploy_path}}/live/artisan down')));

        $releaseDir = $releases[1];
        run("ln -nfs $releaseDir {{deploy_path}}/live");
        run("rm -rf {$releases[0]}");

        writeln("Rollback to `{$releases[1]}` release was successful.");
        writeln(sprintf('  <error>%s</error>', run("php {{deploy_path}}/live/artisan up")));
    } else {
        writeln('  <comment>No more releases you can revert to.</comment>');
    }
});

task('deploy', [
    'confirm',
    'create:release',
    'update:code',
    'create:symlinks',
    'update:vendors',
    'update:permissions',
    'compile:assets',
    'optimize',
    'site:down',
    'migrate:db',
    'update:release_symlink',
    'site:up',
    //'clear:opcache',
    'cleanup',
    'notify:done'
]);
