# PartiuMCZ
Backend API

## Installation
`git clone https://github.com/kenionatan/partiu-mcz-backend.git`

### Install composer dependencies:
`composer install`

### Create .env file:
`cp .env.example .env`

### Generate an app encryption key:
`php artisan key:generate`

### Create an empty database for our application.

### In the .env file, add database information to allow Laravel to connect to the database

### Migrate the database:
`php artisan migrate`

### Start:
`php artisan serve`