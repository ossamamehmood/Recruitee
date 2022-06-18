# Job Portal
Find your dream job here
Various career opportunities await you. Find the right career and connect with companies anytime, anywhere. 🎯

## Login Functionalities
- You can Logiin directly as per your account status `JobSeeeker` or `Company`
- `Forget Password`

## Register Functionalities
Welcome to JobPortal!
First of all, what do you want to do?

### Looking for a job
- Show your abilities and qualities as a talent in an easy way. So that recruiters can see if you can be one of the candidates for a job interview.
- `Register as Seeker`

### Looking for a candidate
- Recruiting candidates is indeed a challenge. We therefore understand that a job recruiter can require multiple job recruitment platforms.
- `Register as Company`

## Job Seekers
Find and get better job opportunities according to skills and location.
- Applicant on Job
- Search Jobs as candidate
- Update his/her profile
- Upload Resume

## Company
Post job advertisements to connect with the most potential job seekers.
- View applicant on Jobs
- Post Job as company
- Edit Job Requirements or Cancel
- Accept/Reject Candidate

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
- Run `composer install` , ```php composer.phar install``` , `composer update` , `composer install --ignore-platform-reqs`
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`
