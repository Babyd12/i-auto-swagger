<?php

namespace Mcire\L5AutoSwagger\Commands;

use Composer\Script\Event;

class InstallSwagger
{
    public static function handle(Event $event)
    {
        $io = $event->getIO();
        $io->write('Installing Swagger...');

        // Commandes d'installation de Swagger
        passthru('composer require darkaonline/l5-swagger');
        passthru('php artisan vendor:publish --provider="L5Swagger\L5SwaggerServiceProvider"');
        passthru('php artisan l5-swagger:generate');

        $io->write('Swagger installed successfully.');
    }
}
