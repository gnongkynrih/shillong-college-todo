https://github.com/gnongkynrih/shillong-college-todo

XAMPP
composer -->getcomposer.org
nodejs --> https://nodejs.org/en/download/
Workbench/Dbeaver/phpmyadmin --> IDE for database
vscode --> IDE for coding

FOR CSS FRAMEWORK WE WILL USE
TAILWINDCSS AND
FLOWBITE
https://flowbite.com/docs/getting-started/laravel/
install flowbite--> npm install flowbite --save
in app.blade.php file add this line in the head

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

composer config -g github-oauth.github.com your-token

if you are downloading from github. after download run the command
https://github.com/gnongkynrih/st-marys-laravel

git clone https://github.com/gnongkynrih/st-marys-laravel.git

1. npm install
2. composer install
   if you have already downloaded earlier (cloned)
   then don't download again but go to the project folder and run this command
   git pull origin master

nodejs --> https://nodejs.org/en/download/
composer ---> https://getcomposer.org
php
mysql
vscode
XAMPP
Laravel - -PHP Framework
--> Livewire
CSS --> tailwindCSS is a CSS framework
JS --> AlpineJS

.env file -- is the place where we store configuration
eg, database name, username, password
sample...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=password of the username

TO create a new project run the command
1.composer create-project larave/laravel projectName
After creating the project we run the command from within the project folder
2.npm install --> install all the packages/modules
3.npm run dev

TO run a server
4.php artisan serve

//TO USE LIVEWIRE install livewire
composer require livewire/livewire

intall tailwindcss
npm install tailwindcss @tailwindcss/vite
npm install @tailwindcss/forms --save-dev
npm run dev

TO CREATE LIVEWIRE COMPONENT
php artisan make:livewire componentname

MVC --> Model View Controller
View --> is what we see
view is inside resources folder

model --> table
model is inside app/Models folder
in laravel field id by default is primary key and auto increment
controller --> interaction between model and view
controller is inside app/Http/Controllers folder

In our layout file add this line inside html->head
@vite(['resources/css/app.css', 'resources/js/app.js'])

https://tailwindcss.com/docs

To create livewire page
php artisan make:livewire LivewireName

https://wireui.dev/
how to install
composer require wireui/wireui
in resources/css/app.css add the following

@import '../../vendor/wireui/wireui/ts/global.css';
@source '../../vendor/wireui/wireui';

npm run build

to make configuration changes we use the .env file
eg. to make db connection we can use .env
DB_CONNECTION

TO MIGRATE THE TABLE WE USE THE COMMAND
php artisan migrate

TO MAKE A MODEL WITH MIGRATION
php artisan make:model ModelName -m
(model name is singular and starts with capital)

TO CREATE A MIGRATION FILE (in case we need to update the table)
php artisan make:migration add_column_name_to_table_name --table=table_name
eg php artisan make:migration add_date_of_completion_to_tasks_table --table=tasks
eg. php artisan make:migration add_column_user_id_to_table_tasks --table=tasks
WE WILL USE CHARTJS FOR GRAPHS AND CHARTS
chartjs.org
Installation:
npm install chart.js

TO CREATE RELATIONSHIP BETWEEN TABLES WE DEFINE THE RELATIONSHIP IN THE MODEL

TO LINK THE STORAGE PATH SO THAT IT CAN BE ACCESSIBLE
php artisan storage:link

TO SEND EMAIL
//we create a mailable class
php artisan make:mail SendForgotPasswordEmail

//we create a mail view
php artisan make:view send-forgot-password-email

//Use mailhog SMTP server for testing
https://github.com/mailhog/MailHog
after installing run the mailhog server using the command
mailhog
//in .env file add the following
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

//TO CHECK YOUR EMAIL
http://localhost:8025

USER AUTHENTICATION AND AUTHORIZATION
https://spatie.be/docs/laravel-permission/v6/installation-laravel

install laravel-permission
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan migrate

Add the necessary trait to your User model:
App\Models\User.php
use Spatie\Permission\Traits\HasRoles;
Add the trait to the User model:
class User extends Authenticatable
{
use HasRoles;

}

CREATE SEEDER
php artisan make:seeder RoleSeeder

To run/execute the seeder
php artisan db:seed --class=RoleSeeder

//To create user seeder
php artisan make:seeder UserSeeder
