<?php

namespace Mcire\AutoSwagger;

class InstallSwagger
{
    public static function handle()
    {
        // Contenu du fichier à créer
        $content = "<?php echo 'Installation de Swagger effectuée avec succès.'; ?>";

        // Chemin du fichier à créer à la racine du projet
        $filePath = realpath(__DIR__ . '/../../../../') . '/installer-swagger.php';

        // Crée le fichier et écrit le contenu
        file_put_contents($filePath, $content);

        // Exécute le fichier créé
        exec("php $filePath");
    }
}
