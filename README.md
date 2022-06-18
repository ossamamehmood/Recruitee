# Job Portal
Job Portal : Add, manage, and categorize job listings. Searchable &amp; filterable ajax powered job listings added to your pages.

## Install the following Xampp, Vs Code and Composer:
- Download Xampp: https://www.apachefriends.org/download.html
- Download Visual Studio Code https://code.visualstudio.com/download
- Download Composer https://getcomposer.org/download/

## Run Job Portal (Build in Laravel)
- Open Xampp to start `Apache` and `MySQL`
- Create a database locally named `http://localhost/phpmyadmin`
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the project foldr in `Visual Studio Code` and `Open Terminal`
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`
