# Laravel SIASN PERENCANAAN

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kanekescom/laravel-siasn-perencanaan.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-perencanaan)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-perencanaan/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kanekescom/laravel-siasn-perencanaan/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-perencanaan/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kanekescom/laravel-siasn-perencanaan/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kanekescom/laravel-siasn-perencanaan.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-perencanaan)

This library is the abstraction of SIASN PERENCANAAN for access from applications written with Laravel PHP Framework.

## Support us

Want to provide tangible support? Use the following platform to contribute to open-source software developers. Every contribution you make is a significant boost to continue building and enhancing technology that benefits everyone.

- Buy Me a Coffee https://s.id/hadibmac
- Patreon https://s.id/hadipatreon
- Saweria https://s.id/hadisaweria

We highly appreciate you sending us a few cups of coffee to accompany us while writing code. Super thanks.

## Use pro version

We also offer a professional version. We're excited for you to try it out, as it allows us to consistently deliver high-quality software. Don't hesitate to contact us at kanekescom@gmail.com for further information.

- Laravel SIASN Referensi Panel
- Laravel SIASN SIMPEG Panel
- SIMPEGDA App

## Installation

You can install the package via composer:

```bash
composer require kanekescom/laravel-siasn-perencanaan
```

You can publish and run the migrations with:

```bash
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="siasn-perencanaan-config"
```

Or, all installations can be completed with the install command:

```bash
php artisan siasn-perencanaan:install
```

## Usage

### Rincian Formasi

Import rincian formasi to database via csv file exported from SIASN Perencanaan

```bash
php artisan siasn-perencanaan:import-rincian-formasi {filePath}
```

## Testing

```bash
composer test
```

## Our other cool packages

Need a package for other BKN's Web Service APIs? Consider installing our packages for seamless integration.

### Referensi APIs

- Laravel SIASN Referensi API as API client.
  
```bash
composer require kanekescom/laravel-siasn-referensi-api
```

- Laravel SIASN Referensi as backend.
  
```bash
composer require kanekescom/laravel-siasn-referensi
```
</details>

### SIASNAPI-SIMPEG APIs

- Laravel SIASN SIMPEG API as API client.
  
```bash
composer require kanekescom/laravel-siasn-simpeg-api
```

- Laravel SIASN SIMPEG as backend.
  
```bash
composer require kanekescom/laravel-siasn-simpeg
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Achmad Hadi Kurnia](https://github.com/kanekescom)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
