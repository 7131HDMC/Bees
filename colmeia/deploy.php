<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Bees');

// Project repository
set('repository', 'https://github.com/7131HDMC/Bees');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('18.218.249.157')
    ->set('deploy_path', '/var/www/beeslgbt.com/Bees/colmeia');    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

