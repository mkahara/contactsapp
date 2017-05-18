# Contacts App
> A Laravel Application to manage contacts.

# Framework/Libraries Used
- Laravel 5.4
- Fontawesome 4.5.0
- Bootstrap v3.3.6
- Laravel Socialite

## Requirements
- PHP 7.0+
- MySQL 5+

## Installation
- Clone the repository
  ```bash
   git clone https://github.com/mkahara/contactsapp.git
  ```
- Consider the facebook (auth) callback url. On the local machine, I used http://localhost/contactsapp/public
- Run migration to create the database
- Create .env file contains all the credentials (database and facebook auth)
- Install the dependencies
  ```bash
   composer install
  ```
- Open the project directory and run the below
  ```bash
   php artisan migrate
  ```
- Generate an application key
  ```bash
   php artisan key:generate
  ```
- Steps
- [X] Sign Up to the application
  - [x] Any email address is fine since there is not email verification added
- [x] Create new contact details by filling appropriate inputs.
- [x] Form validation for saving contact details is handled by Laravel

## Contributing

I will continue adding more The application is welcome to any contribution in terms of ideas.

## Vulnerabilities

In case you discover any vulnerabilities within the app, kindly email me at samsoft12@gmail.com

## License

This application is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).