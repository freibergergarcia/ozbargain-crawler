<?php

namespace Acme;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

class Request
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
     * @var
     */
    private $results;

    /**
     * Request constructor.
     * @param Client $client
     * @param $title
     * @param $searchTerm
     * @throws Exception
     */
    public function __construct(Client $client, $title, $searchTerm)
    {
        $this->crawler = new Crawler();
        $this->resultsList = new ResultsList($title, $searchTerm);
        $this->searchOffers = new Search($client, $this->crawler, $this->resultsList);

        try {
            $this->searchOffers->searchBargains('/');
        } catch (GuzzleException $e) {
            throw new Exception("Something went wrong: " . $e->getMessage());
        }
    }

    public function displayResults()
    {
        $this->results = $this->resultsList->getResultsList();

        if (!empty($this->results)) {
            echo "Searching " . $this->resultsList->getTitle() . " for: " . $this->resultsList->getSearchTerm() . PHP_EOL;
            foreach ($this->results as $result) {
                echo $result->title . PHP_EOL;
            }
            echo PHP_EOL;
        }
    }
}
