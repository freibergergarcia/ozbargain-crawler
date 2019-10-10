<?php

namespace Acme\Contracts;

interface ResultsListInterface
{
    /**
     * @param ResultInterface $result
     */
    public function addResult(ResultInterface $result);

    /**
     * @return array
     */
    public function getResultsList(): array;
}
