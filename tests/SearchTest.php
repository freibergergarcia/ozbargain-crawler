<?php

namespace Acme;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class SearchTest extends TestCase
{
    private $url = 'https://www.ozbargain.com.au/deals';
    private $searchOffers;
    private $httpClient;
    private $response;
    private $crawler;
    private $resultList;

    protected function setUp(): void
    {
        $this->httpClient = new Client([
            'base_uri' => $this->url,
            'timeout' => 2.0
        ]);

        $this->crawler = new Crawler();
        $this->resultList = new ResultsList('OzBargain', 'FlyBuys');
        $this->searchOffers = new Search($this->httpClient, $this->crawler, $this->resultList);
    }

    public function testIfStatusCodeIsSuccessful()
    {
        $this->response = $this->httpClient->request('GET', $this->url);

        self::assertEquals(200, $this->response->getStatusCode());
    }

    public function testIfAnyElementsFound()
    {
        $this->response = $this->httpClient->request('GET', $this->url);

        $this->crawler->addHtmlContent($this->response->getBody());
        $bargains = $this->crawler->filter('.maincontent h2.title');

        self::assertIsObject($bargains->getNode(0));
    }

    public function testIfResultListIsTypeOfResultList()
    {
        self::assertInstanceOf(ResultsList::class, $this->resultList);
    }
}
