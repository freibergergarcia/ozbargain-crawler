<?php

namespace Acme;

class TextHelper
{
    /**
     * @param string $textContext
     * @param string $search
     * @return bool
     */
    public static function searchResult(string $textContext, string $search): bool
    {
        return (strpos($textContext, $search)) ? true : false;
    }
}
