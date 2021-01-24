<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'IMELBO2077');

// Project repository
set('repository', 'https://github.com/draqwerty/laravel');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('production')
  ->hostname('119.18.27.84')
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
    'artisan:queue:restart',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);
