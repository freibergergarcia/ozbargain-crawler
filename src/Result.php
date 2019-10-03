<?php

namespace Acme;

class Result
{
    /**
     * @var string
     */
    public $title;

    public function __construct(string $title)
    {
        $this->title = trim($title);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
