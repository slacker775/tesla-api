<?php
namespace Tesla\Tests;

use PHPUnit\Framework\TestCase;
use Tesla\Client;
use Tesla\Api\Model\GetVehiclesResponse;
use Tesla\ClientFactory;

class ReadingTest extends TestCase
{
    public function testItWorksOnGetVehiclesWithCorrectToken()
    {
        $client = ClientFactory::create($_SERVER['TESLA_TOKEN']);
        
        $response = $client->getVehicles();
        
        self::assertInstanceOf(GetVehiclesResponse::class, $response);
    }
}