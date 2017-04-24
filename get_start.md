# Laravel5 Get start

## git clone...
git clone or [Download ZIP](https://github.com/osamuya/laravel5/archive/master.zip)
````
git clone ssh://git@github.com:osamuya/laravel5.git
````

## make .env
````
cd /LARAVEL5_PROJECT
cp -p .env.example .env
php artisan key:generate
````
## Setting for file permission

````
cd /LARAVEL5_PROJECT
chmod 777 bootstrap/cache
chmod 777 storage/logs
chmod 777 storage/logs
chmod 777 storage/framework/cache
chmod 777 storage/framework/views
````
