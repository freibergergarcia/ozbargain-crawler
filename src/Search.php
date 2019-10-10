<?php

namespace Acme;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

final class Search
{
    /**
     * @var ClientInterface
     */
    private $httpClient;
    /**
     * @var Crawler
     */
    private $crawler;

    /**
     * @var ResultsList
     */
    private $resultList;

    /**
     * Search constructor.
     * @param ClientInterface $httpClient
     * @param Crawler $crawler
     * @param ResultsList $resultList
     */
    public function __construct(ClientInterface $httpClient, Crawler $crawler, ResultsList $resultList)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
        $this->resultList = $resultList;
    }

    /**
     * @param string $url
     * @throws GuzzleException
     */
    public function searchBargains(string $url): void
    {
        $request = $this->httpClient->request('GET', $url);
        $content = $request->getBody();

        $this->crawler->addHtmlContent($content);
        $bargains = $this->crawler->filter('.maincontent h2.title');

        foreach ($bargains as $bargain) {
            $isValidResult = TextHelper::searchResult($bargain->textContent, $this->resultList->getSearchTerm());
            if ($isValidResult === true) {
                $this->resultList->addResult(
                    new Result($bargain->textContent)
                );
            }
        }
    }
}
