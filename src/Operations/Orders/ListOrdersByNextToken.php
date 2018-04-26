<?php

namespace AmazonMWSAPI\Operations\Orders;

use AmazonMWSAPI\Sections\Orders;

class ListOrdersByNextToken extends Orders
{

    protected static $requestQuota = 30;
    protected static $restoreRate = 2;
    protected static $restoreRateTime = 1;
    protected static $restoreRateTimePeriod = "minute";
    protected static $method = "POST";
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/orders-2013-09-01/Orders_ListOrdersByNextToken.html";
    protected static $requiredParameters = [];
    protected static $parameters = [
        "NextToken" => [
            "required"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}