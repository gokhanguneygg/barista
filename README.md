# Barista - Form Builder for Laravel

It builds forms for you. Yeah, I know Laravel has built in form support yet this package make the process even simpler.

### Requirements

- Barista works with PHP 5.6 or above.

### Installation

```bash
$ composer require gguney/barista
```

### Usage
Add package's service provider to your cofig/app.php

```php
...
        Barista\BaristaProvider::class,
...
		    'aliases' => [
...


        'Barista' => Barista\Facades\Barista::class,
    ],
...
```

### Author

Gökhan Güney - <gokhanguneygg@gmail.com><br />

### License

Konnex is licensed under the MIT License - see the `LICENSE` file for details
