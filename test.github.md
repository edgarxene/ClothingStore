# laravel-5-1-boilerplate
A simple base Laravel 5.1 project using bootstrap.

#Install
1. clone this project in the root directory
2. >> `$ composer install`
3. >> `$ php artisan key:generate`
4. setup your database credentials (using .env file)
5. >> php `$ php artisan migrate`
5. Have fun

#About

- This project uses Bootstrap 3
- implement [barryvdh Laravel debugbar](https://github.com/barryvdh/laravel-dompdf)
- implement [StydeNet blade pagination](https://github.com/StydeNet/blade-pagination)
- Laravel collective 5.1
- en/es language files

#auth

- To register go to path/auth/register
- To login go to path/auth/login
- logout in path/auth/logout

#bootstrap templating

* base layout: /resources/views/app.blade.php
* partials : /resources/views/partials
  * layout
    * navbar.blade.php
    * errors.blade.php
  * auth
    * login.blade.php
    * register.blade.php
* home : /resources/views/home.blade.php

#Passwrod recovery
You can to setup your email credentials to use this feature
by looking the official  [Laravel 5.1 mail documentation](http://laravel.com/docs/5.1/mail).
please specify email and sender name on the .env file
`
SENDER_NAME=noreply
SENDER_ADDRES=no@reply.com
`

#Important! 
Issue report and pull requests are welcome!

I like to invite you to visit my website on [Jefferochoa.com.ve](http://jefferochoa.com.ve)
