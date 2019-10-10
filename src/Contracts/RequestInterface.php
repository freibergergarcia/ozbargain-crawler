<?php

namespace Acme\Contracts;

interface RequestInterface
{
    /**
     * @return void
     */
    public function displayResults(): void;
}