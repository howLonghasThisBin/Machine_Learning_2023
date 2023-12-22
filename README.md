<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tools Used

- [Laravel](https://github.com/laravel)
- [Rubix ML](https://github.com/RubixML/ML)

## Installation

## Requirements

For system requirements, [Check Laravel Requirement](https://laravel.com/docs/9.x/deployment#server-requirements)

## Clone the repository from github.

    > git clone https://github.com/howLonghasThisBin/Machine_Learning_2023 [YourDirectoryName]

The command installs the project in a directory named `YourDirectoryName`. You can choose a different
directory name if you want.

## Install dependencies

Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

    > cd YourDirectoryName
    > composer install

## Config file

- If you don't plan to make changes, skip to Database.
- SQLite is set beforehand.

Configure `.env` file as needed. 

1. Set your database credentials in your `.env` file

## Database

Laravel will create the tables by using the command below.

1. `php artisan migrate`

## Install Node Dependencies

1. `npm install` to install node dependencies

## Install Required Packages

1. `composer install`
   
## Run Server

1. `php artisan serve` 
1. Visit `localhost:8000` in your browser.

- On the page, Register for an account to proceed. 
- It can be anything.
- Login to check the UI.

## Issues

- There is a problem getting the input to calculate for its classification.
- Issue with routing to PredictController, which is where the classification happens.
- PredcitController can be found in the following directory: `app>Http>Controllers>PredcitController`
