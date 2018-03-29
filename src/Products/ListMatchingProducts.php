<?php

namespace AmazonMWSAPI\Products;

class ListMatchingProducts extends Products
{

    protected static $requestQuota = 20;
    protected static $restoreRate = 1;
    protected static $restoreRateTime = 5;
    protected static $restoreRateTimePeriod = "second";
    protected static $hourlyRequestQuota = 720;
    protected static $method = "POST";
    private static $curlParameters = [];
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/products/Products_ListMatchingProducts.html";
    protected static $requiredParameters = [];
    protected static $allowedParameters = [];
    protected static $parameters = [
        "MarketplaceId" => [
            "required"
        ],
        "Query" => [
            "required"
        ],
        "QueryContextId" => [
            "format" => "QueryContextId"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}