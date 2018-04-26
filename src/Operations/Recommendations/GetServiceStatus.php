<?php

namespace AmazonMWSAPI\Operations\Recommendations;

use AmazonMWSAPI\Sections\Recommendations;

class GetServiceStatus extends Recommendations
{

    protected static $requestQuota = 2;
    protected static $restoreRate = 1;
    protected static $restoreRateTime = 5;
    protected static $restoreRateTimePeriod = "minute";
    protected static $method = "POST";
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/recommendations/Recommendations_GetServiceStatus.html";
    protected static $requiredParameters = [];
    protected static $parameters = [
        "SellerId" => [
            "required"
        ]
    ];

}