<?php

namespace Tesla;

use Http\Client\Common\PluginClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\Bearer;
use Psr\Http\Client\ClientInterface;
use Tesla\Api\Client;

class ClientFactory
{

    public static function create(string $token, ClientInterface $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://owner-api.teslamotors.com/');
        $pluginClient = new PluginClient($httpClient, [
            new AddPathPlugin($uri),
            new AddHostPlugin($uri),
            new AuthenticationPlugin(new Bearer($token))
        ]);

        return Client::create($pluginClient);
    }
}