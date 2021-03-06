<?php

namespace Tests\Feeds;

use Tests\Feeds\FeedsTest;
use AmazonMWSAPI\Helpers\Helpers;
use AmazonMWSAPI\Feeds\GetFeedSubmissionList;

class GetFeedSubmissionTest extends FeedsTest
{

    public function testGetFeedSubmissionList()
    {

        $this->apiObject .= "GetFeedSubmissionList";

        $requestParameters = GetFeedSubmissionList::$exampleGetFeedSubmissionList;

        $this->testObject = Helpers::test(
            $this->apiObject,
            $requestParameters,
            $this->print,
            $this->testPerformance,
            $this->iterations
        );

        $curlParameters = $this->testObject->getCurlParameters();

        $this->assertArrayHasKey("SellerId", $curlParameters);

    }

}