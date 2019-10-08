<?php

declare(strict_types=1);

namespace Acme;

class Result
{
    /**
     * @var string
     */
    private $title;

    /**
     * Result constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = trim($title);
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
