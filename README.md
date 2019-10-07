# A Laravel route to clear application cache

[![Latest Stable Version](https://poser.pugx.org/abzudev/laravel-cache-clear/v/stable?format=flat-square)](https://packagist.org/packages/abzudev/laravel-cache-clear)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/abzudev/laravel-cache-clear/master.svg?style=flat-square)](https://travis-ci.org/abzudev/laravel-cache-clear)
[![StyleCI](https://styleci.io/repos/212548340/shield)](https://styleci.io/repos/212548340)
[![Total Downloads](https://img.shields.io/packagist/dt/abzudev/laravel-cache-clear.svg?style=flat-square)](https://packagist.org/packages/abzudev/laravel-cache-clear)

This Laravel package adds a GET/POST route which can be used to clear an application's cache.


## Installation

To install this package simply run:

``` bash
composer require abzudev/laravel-cache-clear
```

If you are using Laravel 5.5+ then the package will register itself automatically.

Alternatively, you will need to add the CacheClearServiceProvider to the list of providers in app.php.

To check if the package is installed correctly, simply run:

``` bash
php artisan route:list
```

and check that the route exists.

Example:

![Application route list](https://raw.githubusercontent.com/abzudev/laravel-cache-clear/master/screenshots/routelist.jpg)

## Usage

Once the package has been successfully installed, you can clear your application's cache 
by visiting the url `https://yourwebsitesurl.com/cc` or doing a POST request to `https://yourwebsiteurl.com/cc`.

Below are screenshots of what is expected with each method:

GET:

![GET request example](https://raw.githubusercontent.com/abzudev/laravel-cache-clear/master/screenshots/GET.jpg)

POST:

![POST request example](https://raw.githubusercontent.com/abzudev/laravel-cache-clear/master/screenshots/POST.jpg)

## Testing

Run the tests with:

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email jeandrew.swart@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
