<?php

namespace Acme;

use Acme\Contracts\RequestInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

final class Request implements RequestInterface
{
    /**
     * @var Crawler
     */
    private $crawler;

    /**
     * @var ResultsList
     */
    private $resultsList;

    /**
     * @var Search
     */
    private $searchOffers;

    /**
     * @var ResultsList[]
     */
    private $results;

    /**
     * Request constructor.
     * @param Client $client
     * @param $title
     * @param $searchTerm
     * @throws GuzzleException
     */
    public function __construct(Client $client, $title, $searchTerm)
    {
        $this->crawler = new Crawler();
        $this->resultsList = new ResultsList($title, $searchTerm);
        $this->searchOffers = new Search($client, $this->crawler, $this->resultsList);

        $this->searchOffers->searchUrl('/');
    }

    public function displayResults(): void
    {
        $this->results = $this->resultsList->getResultsList();

        if (!empty($this->results)) {
            echo "Searching " . $this->resultsList->getTitle() . " for: " .
                $this->resultsList->getSearchTerm() . PHP_EOL;
            foreach ($this->results as $result) {
                echo $result->getTitle() . PHP_EOL;
            }
            echo PHP_EOL;
        }
    }
}
