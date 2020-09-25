# Useful tools to help you with your next Laravel package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/radiocubito/laravel-package-tools.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-package-tools)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/radiocubito/laravel-package-tools/run-tests?label=tests)](https://github.com/radiocubito/laravel-package-tools/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/radiocubito/laravel-package-tools.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-package-tools)

> This package is entirely based on BeyondCodes's laravel-package-tools(https://github.com/beyondcode/laravel-package-tools) package.

Gives you the make: commands that you know and love from Laravel - outside of Laravel. Ready to use in your next package.

## Installation

You can install the package via composer:

```bash
composer require radiocubito/laravel-package-tools
```

## Usage

You can use this package from the root of the package that you are developing. You can use the pkg-tools binary to create and scaffold new classes.

The package will automatically detect your namespace from your composer.json autoload configuration and apply it to the generated files.

## Available commands

``` bash
./vendor/bin/pkg-tools make:command name [--command=] [--force]

./vendor/bin/pkg-tools make:request name [--force]

./vendor/bin/pkg-tools make:job name [--sync] [--force]

./vendor/bin/pkg-tools make:event name [--force]

./vendor/bin/pkg-tools make:notification name [--force]

./vendor/bin/pkg-tools make:rule name [--force]
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Oliver Jiménez-Servín](https://github.com/oliverds)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
