# Job Portal
Job Portal : Add, manage, and categorize job listings. Searchable &amp; filterable ajax powered job listings added to your pages. 🎯

## Install the following Xampp, Visual Studio Code and Composer:
- Download <a href="https://www.apachefriends.org/download.html" target="_blank">Xampp</a>
- Download <a href="https://code.visualstudio.com/download" target="_blank">VS Code</a>
- Download <a href="https://getcomposer.org/download" target="_blank">Composer</a>

## Run Job Portal (Build in Laravel)
- Open Xampp to start `Apache` and `MySQL`
- Create a database locally `http://localhost/phpmyadmin` named `JobPortal`
- Import the database `SQL` file given in `JobPortal/Database` into `JobPortal`
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the project folder in `Visual Studio Code` and `Open Terminal`
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`
