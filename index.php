<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Acme\Request;
use GuzzleHttp\Client;

$httpClient = new Client([
    'base_uri' => 'https://www.ozbargain.com.au/deals',
    'timeout' => 4.0,
]);

$request = new Request($httpClient, 'OzBargain', 'eBay');
$request->displayResults();
