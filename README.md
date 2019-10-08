# ozbargain-crawler

Simple http crawler using OzBargain as an example

## Getting Started

Just clone the repository in you local machine
```
$ git clone https://github.com/freibergergarcia/ozbargain-crawler.git
```

### Requirements

* PHP 7.2
* Composer

### Installing

To install all dependencies just run

```
$ composer update
```

You might need to create the /tmp folder to log unit tests

```
$ sudo mkdir tmp
```

### Usage

See an example on index.php or:

```php
require_once __DIR__ . '/vendor/autoload.php';

use Acme\Request;
use GuzzleHttp\Client;

$httpClient = new Client([
    'base_uri' => 'https://www.ozbargain.com.au/deals',
    'timeout' => 3.0
]);

$request = new Request($httpClient, 'OzBargain', 'eBay');
$request->displayResults();
```

## Running application
```
$ php index.php
```


## Running tests

```
$ vendor/bin/phpunit
```

## Running insights

```
$ vendor/bin/phpinsights
```

## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](LICENSE) file for details

