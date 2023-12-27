<?php

namespace Mcire\L5AutoSwagger\Commands;

use Composer\Script\Event;

class InstallSwagger
{
    public static function handle()
    {
        // $io = $event->getIO();
        // $io->write('Installing Swagger...');

        // Commandes d'installation de Swagger
        exec('composer require darkaonline/l5-swagger');
        exec('php artisan vendor:publish --provider="L5Swagger\L5SwaggerServiceProvider"');
        exec('php artisan l5-swagger:generate');
        
        system('composer require darkaonline/l5-swagger');
        system('php artisan vendor:publish --provider="L5Swagger\\L5SwaggerServiceProvider"');
        system('php artisan l5-swagger:generate');

        // $io->write('Swagger installed successfully.');
    }
}
