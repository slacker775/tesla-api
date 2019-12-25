<?php
namespace Tesla\Tests;

use PHPUnit\Framework\TestCase;
use Tesla\Client;
use Tesla\Api\Model\GetVehiclesResponse;

class ReadingTest extends TestCase
{
    public function testItWorksOnGetVehiclesWithCorrectToken()
    {
        $httpClient = Client::createHttpClient($_SERVER['TESLA_TOKEN']);        
        $client = Client::create($httpClient);
        
        $response = $client->getVehicles();
        
        self::assertInstanceOf(GetVehiclesResponse::class, $response);
    }
}