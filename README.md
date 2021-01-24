# PHP MVC

This a MVC(Model-View-Controller) pattern based project written in PHP, this is a currently running project.

### Installation!

> Clone the repository and follow the steps.

1. Install XAMPP.
2. Start Apache and MySQL.
3. Go to localhost:80/phpmyadmin.
4. Create a database with name: mvc_framework.
5. Move to the root folder in terminal and run the following command:
    ```sh
    composer install 
    ```
6. When the installation finished, rename the .env.example file to .env.
7. Then you can run the project with:
    ```sh
    php -S localhost:8000
    ```
    
### Routes
|Route |Description|
|---|---|
|/contact|You will be able to submit contact data here|
|/register|Register page for new users|
|/login|Login page for the registered users|

### Composer

Used dependencies for this project:

* Autoload - It helps to load the class in PHP
* PHP dotenv -  Enables to use 'secret variables' in the .env file.

