<?php

declare(strict_types=1);

namespace Acme;

class ResultsList
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
     * @param Result $result
     */
    public function addResult(Result $result): void
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
