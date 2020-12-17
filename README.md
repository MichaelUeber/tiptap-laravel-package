# A Laravel package to use tiptap editor.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/michaelueber/tiptap.svg?style=flat-square)](https://packagist.org/packages/michaelueber/tiptap)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/michaelueber/tiptap/run-tests?label=tests)](https://github.com/michaelueber/tiptap/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/michaelueber/tiptap.svg?style=flat-square)](https://packagist.org/packages/michaelueber/tiptap)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require michaelueber/tiptap
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Michaelueber\Tiptap\TiptapServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Michaelueber\Tiptap\TiptapServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$tiptap = new Michaelueber\Tiptap();
echo $tiptap->echoPhrase('Hello, Michaelueber!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael Becker](https://github.com/michaelueber)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
