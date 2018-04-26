<?php

namespace AmazonMWSAPI\Operations\Reports;

use AmazonMWSAPI\Sections\Reports;

class GetReport extends Reports
{

    protected static $requestQuota = 15;
    protected static $restoreRate = 1;
    protected static $restoreRateTime = 1;
    protected static $restoreRateTimePeriod = "minute";
    protected static $hourlyRequestQuota = 60;
    protected static $method = "POST";
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/reports/Reports_GetReport.html";
    protected static $requiredParameters = [];
    protected static $parameters = [
        "ReportId" => [
            "required"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}