<?php

namespace AmazonMWSAPI\Sellers;

class ListMarketplaceParticipations extends Sellers
{

    protected static $requestQuota = 15;
    protected static $restoreRate = 1;
    protected static $restoreRateTime = 1;
    protected static $restoreRateTimePeriod = "minute";
    protected static $method = "POST";
    protected static $curlParameters = [];
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/sellers/Sellers_ListMarketplaceParticipations.html";
    protected static $requiredParameters = [];
    protected static $allowedParameters = [];
    protected static $parameters = [
        "SellerId" => [
            "required"
        ]
    ];

    public static $exampleListMarketplaceParticipations = [

    ];

}