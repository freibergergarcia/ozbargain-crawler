<?php

namespace Acme;

use Acme\Contracts\ResultInterface;
use Acme\Contracts\ResultsListInterface;

final class ResultsList implements ResultsListInterface
{
    /**
     * @var array
     */
    private $results;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $searchTerm;

    /**
     * ResultsList constructor.
     * @param string $title
     * @param string $searchTerm
     */
    public function __construct(string $title, string $searchTerm)
    {
        $this->results = [];
        $this->title = $title;
        $this->searchTerm = $searchTerm;
    }

    /**
     * @param ResultInterface $result
     */
    public function addResult(ResultInterface $result)
    {
        $this->results[] = $result;
    }

    /**
     * @return array
     */
    public function getResultsList(): array
    {
        return $this->results;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSearchTerm(): string
    {
        return $this->searchTerm;
    }
}
