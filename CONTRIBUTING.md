## Contributing
When contributing to this repository, please first discuss the change you wish to make via issue, email, or any other method with the owner of this repository before making a change.

Please note we have a code of conduct, please follow it in all your interactions with the project.

## Pull Request Process
- Ensure that your changes comply with the project's coding guidelines and that it's sufficiently documented.
- After sending the pull request to the dev branch, create a new ticket with the commit number and URL, adding a description of the new change in the web application.er sending the pull request to the dev branch.
https://foroworkers.sistemaspymesjc.online/community/contribution
- Update the README.md with details of changes to the interface, this includes new environment variables, exposed ports, useful file locations and container parameters.
- Target the develop branch for your Pull Requests as this is were new changes are introduced.
- After being successfully reviewed pull requests will be merged to develop branch and will finally be included in an upcoming release.

## Steps Laravel Project:

- Option 1: Install with Composer

```bash
$ composer create-project sistemaspymesjc/foroworkers
``` 

- Option 2: Clone Project

```bash
$ git clone https://github.com/sistemaspymesjc/foroworkers.git
``` 

- Pull Project Dev Branch

```bash
$ git pull dev
``` 
- Navigate to the root of the Laravel project

```bash
$ cd foroworkers
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
$ php artisan key:generate
``` 

```bash
First Step  Create New Database in .env file Example: foroworkers


database connection

DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

for sending emails example sandbox mailtrap

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=yourusername
MAIL_PASSWORD=yourpass
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="youremail@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"
```

```bash
$ php artisan migrate:fresh --seed
```
```bash
$ php artisan storage:link
```
```bash
$ php artisan optimize:clear
```

```bash
$ php artisan config:clear
``` 
- Run server

```bash
$ php artisan serve
```



## Access Web-App:


_Admin: admin@gmail.com
_Pass: Test1234

_User: user@gmail.com
_Pass: Test1234
