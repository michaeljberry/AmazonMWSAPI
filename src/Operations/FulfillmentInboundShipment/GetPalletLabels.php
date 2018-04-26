<?php

namespace AmazonMWSAPI\Operations\FulfillmentInboundShipment;

use AmazonMWSAPI\Sections\FulfillmentInboundShipment;

class GetPalletLabels extends FulfillmentInboundShipment
{

    protected static $requestQuota = 30;
    protected static $restoreRate = 2;
    protected static $restoreRateTime = 1;
    protected static $restoreRateTimePeriod = "second";
    protected static $method = "POST";
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/fba_inbound/FBAInbound_GetPalletLabels.html";
    protected static $requiredParameters = [];
    protected static $parameters = [
        "ShipmentId" => [
            "required"
        ],
        "PageType" => [
            "required",
            "validWith" => [
                "PackageLabel_Letter_2",
                "PackageLabel_Letter_6",
                "PackageLabel_A4_2",
                "PackageLabel_A4_4",
                "PackageLabel_Plain_Paper"
            ]
        ],
        "NumberOfPallets" => [
            "required"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}