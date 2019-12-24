<?php
declare(strict_types = 1);

namespace Tesla;

use Tesla\Api\Client as BaseClient;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Message\Authentication\Bearer;

class Client extends BaseClient
{

    static public function createHttpClient(string $token)
    {
        $httpClient = Psr18ClientDiscovery::find();
        $plugins = array();
        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://owner-api.teslamotors.com/');
        $plugins[] = new AddHostPlugin($uri);
        $plugins[] = new AddPathPlugin($uri);
        $plugins[] = new AuthenticationPlugin(new Bearer($token));
        return new \Http\Client\Common\PluginClient($httpClient, $plugins);
    }
}