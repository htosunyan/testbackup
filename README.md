# Database backup app

Run composer
````
$ composer install
````

Create ``.env`` file if not exists and setup database credentials
````
$ cp .env.example .env
````

Run migrations for test tables
````
$ php artisan migrate
````

Check config/backup.php file. This file is configured to work on Linux.
If you are running the app on windows server, you have to change values for
``mysql_path`` and ``mysqldump_path`` based on the example in this file.
