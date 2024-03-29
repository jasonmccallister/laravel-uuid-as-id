# Use UUID as ID in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jasonmccallister/laravel-uuid-as-id.svg?style=flat-square)](https://packagist.org/packages/jasonmccallister/laravel-uuid-as-id)
[![Total Downloads](https://img.shields.io/packagist/dt/jasonmccallister/laravel-uuid-as-id.svg?style=flat-square)](https://packagist.org/packages/jasonmccallister/laravel-uuid-as-id)

This is a simple trait that will override the key on an eloquent model to create a UUID instead of an integer.

## Installation

You can install the package via composer:

```bash
composer require jasonmccallister/laravel-uuid-as-id
```

## Usage

Update your models to use the trait, and you are done!

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JasonMcCallister\UuidAsId\Traits\UuidAsId;

class SomeModel extends Model
{
    use UuidAsId;

    // the rest of your model's code
}
```

### Testing

```bash
composer test
```

## Credits

- [Jason McCallister](https://github.com/jasonmccallister)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
