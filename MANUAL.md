# MANUAL

The MANUAL.md will guide you about the installation and configuration of following application in a proper way so do follow the provided steps given below so that you will not face any issue when installing and configuring the following application.

## Table of contents
- [Prerequisite](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#prerequisite)
- [Part 1: Installation](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#part-1-installation)
- [Part 2: Update to the latest version](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#part-2-update-to-the-latest-version)
- [Part 3: Configuration](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#part-3-configuration)
    - [Part 3.1: Configure Database](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#part-31-configure-database)
    - [Part 3.2: Configure profile photo](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#part-32-configure-profile-photo)
    - [Part 3.3: Multi authentication](https://github.com/henZ1010/upmeal/blob/main/MANUAL.md#part-33-multi-authentication)

## Prerequisite

Tools // Applications that required to use in order to run the following application:
- PHP dependency: 
    - Composer
- Web server:
    - XAMPP // LAMPP
- Any code editor or IDE that supports PHP such as Visual Studio Code and PhpStorm.

## Part 1: Installation

Step 1: Clone the following repository in the command prompt // terminal into your machine.

    $ git clone https://github.com/henZ1010/upmeal-app.git
    
Step 2: Navigate to your cloned repository folder.

    $ cd upmeal-app
    
Step 3: Install Composer in the cloned repository folder.

    $ composer install
    
Step 4: Copy and paste the .env.example file in the cloned repository folder.

Step 5: Rename the copied .env.example file into .env file.

Step 6: Generate a new application key in the command prompt // terminal in the cloned repository folder.

    $ php artisan key:generate --show

Step 7: Copy the application key and paste it in the .env file

Step 8: Create a new database called upmeal in the phpmyadmin.

Step 9: Migrate the database by executing the command that shown as below in the command prompt // terminal.

    $ php artisan migrate

Step 10: Run the following application in the command prompt // terminal in the cloned repository folder.

    $ php artisan serve

Step 11: Open the localhost link, http://127.0.0.1:8000 to run the following application.

Step 12: Configure some stuff that required to take note on README.md in order to ensure certain features can function well. 

Step 13: Enjoy 😉

## Part 2: Update to the latest version

Step 1: Run the following command to update the application to the latest version.

    $ composer update

Step 2: Once done, run the following command to see the latest version of the application.

    $ php artisan --version

## Part 3: Configuration

### Part 3.1: Configure Database

Note: This configuration applies for the MySQL DBMS

Step 1: Make sure you had installed the following application.

Step 2: Navigate to the phpmyadmin site.

Step 3: Create a new database called upmeal.

Step 4: Enjoy 😉

### Part 3.2: Configure profile photo

Step 1: Make sure you had installed the following application and created a new database.

Step 2: Run the following command to create a symbolic link in the application's public directory which will allow the user's profile photo to be served by the application

    $ php artisan storage:link
    
Step 3: Run the following command to optimize the application.

    $ php artisan optimize
    
Step 4: Once done, you may try to register or login the account to identify the existance of the profile photo.

Step 5: Enjoy 😉

### Part 3.3: Multi authentication

Step 1: Make sure you had installed the following application and created database for the application.

Step 2: Create an admin account.

Step 3: Create a new user.

Step 4: Navigate to the user table which located in the following database and change the user type of the admin account from USR to ADM.

Step 5: Login to the admin account and you will able to view the admin dashboard.

Step 6: Enjoy 😉
