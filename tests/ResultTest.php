<?php

namespace Acme\Tests;

use Acme\Result;
use PHPUnit\Framework\TestCase;

class ResultTest extends TestCase
{
    public function testResultMustCreateAndTrimTheTitle()
    {
        $result = new Result("Sample <br> this is an great offer /n iPhone <span>11</span> for 100 AUD.");

        static::assertTrue($this->isHtml($result->getTitle()));
    }

    public function isHtml(string $title): bool
    {
        return $title != strip_tags($title) ? true : false;
    }
}
