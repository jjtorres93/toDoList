#!/bin/bash

#deploy to do list
artisan schema:dump
php artisan optimize:clear
composer clear-cachephp

#preparing the database
git pull
composer update
php artisan
php artisan migrate
php artisan migrate:status
php artisan serve