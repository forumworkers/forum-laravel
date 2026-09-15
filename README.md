## Introduction

Laravel open source forum to manage online communities.

## About
A powerful Open Source Business Forum that can be installed on your server.Open source Laravel Forum

- Follow the creator Jonathan Castro:
    - YouTube: **[youtube.com/@joncastdev](https://youtube.com/@joncastdev)** — Videos every week
    - Twitch: **[twitch.tv/joncastdev](https://twitch.tv/joncastdev)** — Live coding on Mondays, Wednesdays, and Fridays at 9PM UTC
    - LinkedIn: **[linkedin.com/in/joncastdev](https://www.linkedin.com/in/joncastdev)**
    - Instagram: **[instagram.com/joncastdev](https://www.instagram.com/joncastdev)**
    - Tiktok: **[tiktok.com/@joncastdev](https://www.tiktok.com/@joncastdev)**

## Starting

_These instructions will allow you to get a copy of the project running on your local machine for development and testing purposes._


## Setup

- PHP 8.3 >=
- PostgreSQL (Or MySQL)
- [Composer](https://getcomposer.org/)

## Additional details on dependencies

Assuming you're running Ubuntu, and then install all dependencies from the following list:

sudo apt-get install php8.3 php8.3-pgsql php8.3-mysql php8.3-intl php8.3-json php8.3-mbstring

## Installation

The following steps are meant to be used on a development server.

-  Clone Project

```bash
$ git clone https://github.com/joncastdev/forum-laravel.git
``` 

- Pull Project Dev Branch

```bash
$ git pull dev
``` 
- Navigate to the root of the Laravel project

```bash
$ cd forum-laravel
``` 
- Setup vendor libraries 

```bash
$ composer install
```

- Copy .env.example config and generate Key project 

```bash
$ cp .env.example .env
``` 
```bash
$ php artisan migrate:fresh --seed
```
```bash
$ php artisan storage:link
```

```bash
$ php artisan key:generate
``` 

- Run server

```bash
$ php artisan serve
```


## Access:

_Admin: admin@gmail.com
_Pass: Test1234

_User: free@gmail.com
_Pass: Test1234

_User: vip@gmail.com
_Pass: Test1234

## Technologies 🛠️

* [Laravel 13](https://laravel.com/docs/13.x)
* [Email Tool](https://mailtrap.io?ref=jonathan61)  


## Author ✒️

* **Jonathan Castro** - *Software Engineer* - [joncastdev](https://github.com/joncastdev)


## Support

_joncastdev@gmail.com_

* If you would like a business forum with many extra features, please contact us with your requirements and budget. Thank you.


## Donations

* [Paypal](https://www.paypal.com/paypalme/programadorjonathan) - Thank you very much for your contribution.

* [Ko-Fi](https://ko-fi.com/foroworkers) - Thank you very much for your contribution.

* [Patreon](https://www.patreon.com/c/foroworkers) - Thank you very much for your contribution.



