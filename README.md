# Project Requirements

Following are the requirements for the project

- Laravel 9.9.0 or greater.
- PHP 8.0.2 or greater.
- MYSQL 8.0.28 is recommended
- Composer 2 is recommended.

## Optional Requirement
Laragon [https://laragon.org/download/]

I recommend using laragon's inbuilt virtual host for serving the project https://school.test

or can run
```bash
php artisan serve
```

## Steps
-  Clone the repo ``` gh repo clone navaneeth-raman-bhaskar/school ```
- Run ```composer install --no-dev -o```
- For Performance run
- - ``` php artisan optimize ```
- - ``` php artisan view:cache ```
- All the front end dependencies are injected via CDN so no need to use laravel mix
