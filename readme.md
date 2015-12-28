## Mustard Feedback module

[![StyleCI](https://styleci.io/repos/45991298/shield?style=flat)](https://styleci.io/repos/45991298)
[![Build Status](https://travis-ci.org/hamjoint/mustard-feedback.svg)](https://travis-ci.org/hamjoint/mustard-feedback)
[![Total Downloads](https://poser.pugx.org/hamjoint/mustard-feedback/d/total.svg)](https://packagist.org/packages/hamjoint/mustard-feedback)
[![Latest Stable Version](https://poser.pugx.org/hamjoint/mustard-feedback/v/stable.svg)](https://packagist.org/packages/hamjoint/mustard-feedback)
[![Latest Unstable Version](https://poser.pugx.org/hamjoint/mustard-feedback/v/unstable.svg)](https://packagist.org/packages/hamjoint/mustard-feedback)
[![License](https://poser.pugx.org/hamjoint/mustard-feedback/license.svg)](https://packagist.org/packages/hamjoint/mustard-feedback)

User feedback support for [Mustard](http://withmustard.org/), the open source marketplace platform.

### Installation

#### Via Composer (using Packagist)

```sh
composer require hamjoint/mustard-feedback
```

Then add the Service Provider to config/app.php:

```php
Hamjoint\Mustard\Feedback\Providers\MustardFeedbackServiceProvider::class
```

### Licence

Mustard is free and gratis software licensed under the [GPL3 licence](https://www.gnu.org/licenses/gpl-3.0). This allows you to use Mustard for commercial purposes, but any derivative works (adaptations to the code) must also be released under the same licence. Mustard is built upon the [Laravel framework](http://laravel.com), which is licensed under the [MIT licence](http://opensource.org/licenses/MIT).
