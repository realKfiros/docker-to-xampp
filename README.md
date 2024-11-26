# Friendship ended with XAMPP! Now docker is my best friend
![Packagist Version](https://img.shields.io/packagist/v/kfiros/xampp-to-docker)

This is a simple docker-compose setup for local PHP development environment. It includes the following services:
* PHP - `php:8.2-apache`
* MySQL - `mysql:8.0`
* phpMyAdmin - `phpmyadmin/phpmyadmin`
* xdebug (preconfigured to work with PhpStorm)

## Requirements
* [Docker desktop](https://www.docker.com/products/docker-desktop)
* [Docker compose](https://docs.docker.com/compose/install/)
* [Composer](https://getcomposer.org/download/)

## Environment setup
Run the following commands to setup the project:
```bash
composer create-project kfiros/xampp-to-docker [project-name]
```
Alternatively you can copy the files to a directory or clone the repository.

## Usage
1. Run `docker compose up` if you have docker 3.6 or newer, or `docker-compose up` if you have an older version.
2. Open your browser and navigate to `http://localhost` to see the magic (and `http://localhost:8081` for phpMyAdmin).

## MySQL gotchas
* The MySQL data is stored in the `mysql-data` directory. If you want to reset the database, you can delete this directory.
* To access the MySQL database from your code, the host is `host.docker.internal` and not `127.0.0.1`.

I have taken inspiration from [jlucky/docker-php-dev-env](https://github.com/jlucki/docker-php-dev-env/tree/master) that does the same thing but with `nginx` instead of `apache`. I have also added `phpMyAdmin` to the setup.
