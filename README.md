# OO-Stripe-PHP

[![Latest Version](https://img.shields.io/packagist/v/oo-money/oo-stripe-php.svg?style=flat-square)](https://packagist.org/packages/oo-money/oo-stripe-php)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)

A lightweight PHP wrapper for Stripe's PHP SDK, providing an object-oriented interface for more readable and structured access to Stripe objects. `oo-stripe-php` allows you to work with Stripe data in a more streamlined way by transforming raw data fields into useful objects, such as `DateTime`.

## Features

- Provides dynamic getters for Stripe properties, transforming specific fields into objects (e.g., timestamps to `DateTime`).
- Uses traits for flexible and reusable getter transformations.
- Lightweight and focused on improving developer experience without altering underlying [Stripe API](https://docs.stripe.com/api) behavior.

[//]: # (## Installation)
[//]: # ()
[//]: # (Install the package via Composer:)
[//]: # ()
[//]: # (```bash)
[//]: # (composer require oo-money/oo-stripe-php)
[//]: # (```)
## Usage

### Dynamic Getters
The DynamicGetterTrait allows you to access properties dynamically, with the option to transform specific types (e.g., converting timestamps to DateTime).

```php
// Assuming `created` is a timestamp, `getCreated` will return a DateTime object.
$creationDate = $invoice->getCreated();
echo $creationDate->format('Y-m-d H:i:s');

```

### API Documentation
For details on all available fields and methods, refer to the [Stripe API documentation](https://docs.stripe.com/api) for each object type. oo-stripe-php aims to enhance the standard Stripe objects with a more object-oriented interface but otherwise mirrors the structure of Stripe’s SDK.

## Contributing
Feel free to submit issues, fork the repository, and send pull requests. Please ensure that your contributions adhere to the existing code style and include relevant tests.

### Running Tests
1. Install dependencies, including PHPUnit:

```bash
composer install
```

2. Run tests:
```bash
/vendor/bin/phpunit (or: make test)
```

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

---

Note: This project is not affiliated with Stripe, Inc. It’s a community-driven enhancement for developers using the Stripe PHP SDK.
