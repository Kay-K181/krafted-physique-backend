sudo /usr/local/mysql/support-files/mysql.server start

php artisan serve

Copy .env.example to a new file .env and set the following:

```
DB_CONNECTION=mysql
DB_PASSWORD=password
```

Run the following command:

````php artisan key:generate````

Run the migrations and the seeder:

```
php artisan migrate
php artisan db:seed
php artisan db:seed --class=MuscleGroupSeeders
```
