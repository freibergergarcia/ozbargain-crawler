<?php

declare(strict_types=1);

namespace Acme;

class TextHelper
{
    public static function searchResult(string $textContext, string $search): bool
    {
        return strpos($textContext, $search) ? true : false;
    }
}
