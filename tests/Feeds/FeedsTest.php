<?php

namespace Tests\Feeds;

use Tests\TestCase;

abstract class FeedsTest extends TestCase
{

    public function setUp()
    {

        parent::setUp();

        $this->apiObject = "\\AmazonMWSAPI\Operations\Feeds\\";

    }

}