<?php

namespace AmazonMWSAPI\FulfillmentInboundShipment;

class UpdateInboundShipment extends FulfillmentInboundShipment
{

    protected static $requestQuota = 30;
    protected static $restoreRate = 2;
    protected static $restoreRateTime = 1;
    protected static $restoreRateTimePeriod = "second";
    protected static $method = "POST";
    protected static $curlParameters = [];
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/fba_inbound/FBAInbound_UpdateInboundShipment.html";
    protected static $requiredParameters = [];
    protected static $allowedParameters = [];
    protected static $parameters = [
        "ShipmentId" => [
            "required"
        ],
        "InboundShipmentHeader" => [
            "format" => "InboundShipmentHeader",
            "required"
        ],
        "InboundShipmentItems" => [
            "format" => "InboundShipmentItem",
            "required"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}