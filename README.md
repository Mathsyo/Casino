# My PHP Framework with Laravel 8.x

## What is Laravel 8.x ?
https://laravel.com/


## Important files and folder
 * /routes : Routes
 * /app/Models : Models
 * /resources/views : Views
 * /app/Http/Controllers : Controllers

## Installation
 * Créer un dossier dans lequel seront copiés les fichiers (ex:"Ordonnance")
 * `git clone <github repository URL> [.]`
     * le `[.]` est utile à la fin si, dans l'invite de commande, on se trouve dans le dossier  créé au préalable 
 * `composer update`
 * déplacer le fihcier '.env.example' à '.env' (ou le renommer)
 * Modifier les configurations dans le fichier '.env' 
     * Nottament pour la base de données, donc dans les premières lignes qui commencent pas "DB_" 
 * `php artisan key:generate`
 * `php artisan storage:link`
 * `php artisan migrate`
 * `php artisan db:seed --class=PermissionTableSeeder`
 * `php artisan serve`
     * Permet de lancer le serveur, une commande similaire peut être utilisée également : `php -S 127.0.0.1:8000 server.php [-d display_errors=1]`
         * Ajouter `[-d display_errors=1]` pour afficher les erreurs

Post::factory()->count(50)->create()

## A faire 
 [] Faire une review des vues pour les nettoyer
 [] Idem sur les controllers
 [] Recherche de patient, améliorer le truc
 [] 




Post::factory()->count(50)->create()