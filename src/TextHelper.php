<?php

namespace Acme;

final class TextHelper
{
    public static function searchResult(string $textContext, string $search): bool
    {
        return strpos($textContext, $search) ? true : false;
    }
}
