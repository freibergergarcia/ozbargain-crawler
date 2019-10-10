<?php

namespace Acme;

use Acme\Contracts\ResultInterface;

final class Result implements ResultInterface
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
