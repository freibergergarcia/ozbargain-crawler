<?php
require_once __DIR__ . '/vendor/autoload.php';

use Acme\Request;
use GuzzleHttp\Client;


$httpClient = new Client([
    'base_uri' => 'https://www.ozbargain.com.au/deals',
    'timeout' => 2.0
]);

$request = new Request($httpClient, 'OzBargain', 'Nancy Ganz');
$request->displayResults();

$request = new Request($httpClient, 'OzBargain', 'Van Heusen');
$request->displayResults();

$request = new Request($httpClient, 'OzBargain', 'Calvin Klein');
$request->displayResults();

$request = new Request($httpClient, 'OzBargain', 'Tommy Hilfiger');
$request->displayResults();

$request = new Request($httpClient, 'OzBargain', 'eBay');
$request->displayResults();
