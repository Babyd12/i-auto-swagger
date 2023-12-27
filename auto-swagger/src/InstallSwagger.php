<?php

namespace Mcire\AutoSwagger;

class InstallSwagger
{
    public static function handle()
    {
        // Exécuter les commandes d'installation de Swagger depuis la racine du projet
        exec('composer require darkaonline/l5-swagger');
        exec('php artisan vendor:publish --provider="L5Swagger\\L5SwaggerServiceProvider"');
        exec('php artisan l5-swagger:generate');
    }
}
