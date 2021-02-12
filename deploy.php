<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/rsync.php';


set('application', 'IMELBO2077');
set('ssh_multiplexing', true);
set('repository', 'https://github.com/draqwerty/laravel');


set('rsync_src', function () {
    return __DIR__;
});


// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);
set('http_user', 'devuser');

set('writable_mode', 'chmod');


add('rsync', [
    'exclude' => [
        '.git',
        '/.env',
        '/storage/',
        '/vendor/',
        '/node_modules/',
        '.github',
        'deploy.php',
        '/public/wdisplay'
    ],
]);

// Hosts
host('production')
  ->hostname('159.196.4.231')
  ->stage('production')
  ->user('root')
  ->set('deploy_path', '/var/www/html');

host('staging')
  ->hostname('119.18.27.84')
  ->stage('staging')
  ->user('root')
  ->set('deploy_path', '/var/www/weather-staging');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

task('wdisplay', function () {
    run('ln -nfs --relative /var/www/html/wdisplay {{release_path}}/public/wdisplay');
});

task('deploy:secrets', function () {
    file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
    upload('.env', get('deploy_path') . '/shared');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
//before('deploy:symlink', 'artisan:migrate');

desc('Deploy the application');

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync',
    'deploy:secrets',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'artisan:migrate',
    //'artisan:queue:restart',
    'deploy:symlink',
    'wdisplay',
    'deploy:unlock',
    'cleanup',
]);
