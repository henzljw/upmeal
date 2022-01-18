# Installation

The INSTALL.md will guide you about the installation of following application in a proper way so do follow the provided steps given below so that you will not face any issue when installing the following application.

## Steps

Step 1: Clone the following repository in the command prompt // terminal into your machine.

    $ git clone https://github.com/henZ1010/upmeal-app.git
    
Step 2: Navigate to your cloned repository folder.

    $ cd upmeal-app
    
Step 3: Install Composer in the cloned repository folder.

    $ composer install
    
Step 4: Copy and paste the .env.example file in the cloned repository folder.

Step 5: Rename the copied .env.example file into .env file.

Step 6: Generate a new application key in the command prompt // terminal in the cloned repository folder.

    $ php artisan key:generate

Step 7: Create a new database called upmeal in the phpmyadmin.

Step 8: Migrate the database by executing the command that shown as below in the command prompt // terminal.

    $ php artisan migrate

Step 9: Run the following application in the command prompt // terminal in the cloned repository folder.

    $ php artisan serve

Step 10: Open the localhost link, http://127.0.0.1:8000 to run the following application.

Step 11: Configure some stuff that required to take note on README.md in order to ensure certain features can function well. 

Step 12: Enjoy 😉
