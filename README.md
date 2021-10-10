# Broker Project ERP
This project is created using Laravel 8.54 API Resource.
##### PHP 7.4 is required!

#### Following are the Models
* User
* Propiedades
* Vendeor
* Comprador
* SolicitudVisita
* VendedorPropiedad

#### Usage
Clone the project via git clone or download the zip file.

##### .env
Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.
##### Composer Install
cd into the project directory via terminal and run the following  command to install composer packages.
###### `composer install`

##### Generate Key
then run the following command to generate fresh key.
###### `php artisan key:generate`

##### Larvel Breeze is used like a starter scaffolding
if you need run the following command to install Breeze
###### `php artisan breeze:install `
##### Run Migration
then run the following command to create migrations in the databbase.
###### `php artisan migrate`
##### Run Seeders for dummy data
then run the following command to create migrations in the databbase.
###### `php artisan db:seed`

### Authenticate

* Login GET `http://localhost:8000/api/login` 
    use this credentials: {"email":"admin@admin.cl", "password":"admin"}

