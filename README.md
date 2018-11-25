KiwiChat
===================

Composer
-------------

- Download the installer to the current directory

> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');".

----------
- Verify the installer SHA-384

>php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;".

----------
- Run the installer
>php composer-setup.php

----------
- Remove the installer

>php -r "unlink('composer-setup.php');"

----------

- Adding Composer to your PATH variable

>sudo mv composer.phar /usr/local/bin/composer


Composer site  [here][1]


Laravel
-------------

Download the Laravel installer using Composer:	

> composer global require "laravel/installer"

Make sure to place composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. 

> macOS: $HOME/.composer/vendor/bin

- Creat a new project
>composer create-project --prefer-dist laravel/laravel newProject

Laravel site  [here][2]
