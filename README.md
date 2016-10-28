# coding-standards

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This repository contains the [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) configuration for PHP 
coding standards used for projects we build. The file is an extension on the PSR-2 defaults. And can be used by any PHP 
project.

## Install

Via Composer

``` bash
$ composer require polderknowledge/coding-standards
```

## Usage

Set the standard attribute in your build script to:

```xml
<phpcodesniffer standard="${project.basedir}/vendor/polderknowledge/coding-standards/PolderKnowledge/ruleset.xml">
    <!-- rest of your phpcodesniffer target -->
</phpcodesniffer>
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please report them via [HackerOne](https://hackerone.com/polderknowledge) 
instead of using the issue tracker or e-mail.

## Community

We have an IRC channel where you can find us every now and then. We're on the Freenode network in the
channel #polderknowledge.

## Credits

- [Polder Knowledge][link-author]
- [All Contributors][link-contributors]

## License

Please see [LICENSE.md][link-license] for the license of this application.

[ico-version]: https://img.shields.io/packagist/v/polderknowledge/coding-standards.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/polderknowledge/coding-standards/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/polderknowledge/coding-standards.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/polderknowledge/coding-standards.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/polderknowledge/coding-standards.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/polderknowledge/coding-standards
[link-travis]: https://travis-ci.org/polderknowledge/coding-standards
[link-scrutinizer]: https://scrutinizer-ci.com/g/polderknowledge/coding-standards/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/polderknowledge/coding-standards
[link-downloads]: https://packagist.org/packages/polderknowledge/coding-standards
[link-author]: https://polderknowledge.com
[link-contributors]: ../../contributors
[link-license]: LICENSE.md
