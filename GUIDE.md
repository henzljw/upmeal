# Guide

The GUIDE.md will guide you about the configuration of following application in a proper way so do follow the provided steps given below so that you will not face any issue when installing the following application.

## Profile photo

Step 1: Make sure you had installed the following application via the INSTALL.md.

Step 2: Run the following command to create a symbolic link in the application's public directory which will allow the user's profile photo to be served by the application

    $ php artisan storage-link
    
Step 3: Run the following command to optimize the application.

    $ php artisan optimize
    
Step 4: Once done, you may try to register or login the account to identify the existance of the profile photo.

Step 5: Enjoy 😉
