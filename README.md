## Eva Dev Challenge ##

Dev Requirements
1. PHP V8.0.*
2. Mysql
3. Composer 2.0.*
4. Node 12.14^

To run the project on local
1. Copy the .env.example to .env file
    1. `php artisan generate:key`
2. Change DB creds in .env file
3. Run following commands for migrations
    1. `php artisan migrate --seed`
This will create the database and an admin user.

#### Login User ####
Url: http://127.0.0.1:8000/login <br> 
username: doejohn@gmail.com <br>
password: Password@123 <br>

<br>

#### Register New User ####
Url: http://127.0.0.1:8000/register <br> 
As per requirement only user older than 18 years can register. 

## Run the project locally ##
To start server on localhost. Run the following command <br>
`php artisan serve`
