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
##@##:~/ozbargain-crawler$ vendor/bin/phpinsights
 9/9 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

[2019-10-10 03:10:32] `/ozbargain-crawler`

                                                                              
        94.7%                86.1%                95.7%                91.3%  
                                                                              

        Code               Complexity          Architecture            Style

Score scale: ◼ 1-49 ◼ 50-79 ◼ 80-100

[CODE] 94.7 pts within 150 lines

Comments .......................................................... 55.3 %
Classes ........................................................... 28.0 %
Functions .......................................................... 0.0 %
Globally .......................................................... 16.7 %

[COMPLEXITY] 86.1 pts with average of 1.42 cyclomatic complexity

[ARCHITECTURE] 95.7 pts within 9 files

Classes ........................................................... 55.6 %
Interfaces ........................................................ 33.3 %
Globally .......................................................... 11.1 %
Traits ............................................................. 0.0 %

[MISC] 91.3 pts on coding style and 0 security issues encountered
```


## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](LICENSE) file for details

