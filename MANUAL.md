# MANUAL

The MANUAL.md will guide you about the installation and configuration of following application in a proper way so do follow the provided steps given below so that you will not face any issue when installing and configuring the following application.

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

## Part 2: Configuration

### Part 2.1: Configure profile photo

Step 1: Make sure you had installed the following application via the INSTALL.md.

Step 2: Run the following command to create a symbolic link in the application's public directory which will allow the user's profile photo to be served by the application

    $ php artisan storage-link
    
Step 3: Run the following command to optimize the application.

    $ php artisan optimize
    
Step 4: Once done, you may try to register or login the account to identify the existance of the profile photo.

Step 5: Enjoy 😉
