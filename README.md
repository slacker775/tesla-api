# slacker775/tesla-api
Tesla API for PHP

This package provides an easy to use API client for the Tesla (as in the auto/solar manufacturer) API.  With this API, you can poll car status, configuration, etc.

# Basic Usage


Get OAuth Token:
```
    $apiClient = Client::create();
    $clientId = '81527cff06843c8634fdc09e8ac0abefb46ac849f38fe1e431c2ef2106796384';
    $clientSecret = 'c7257eb71a564034f9419ee651c7d0e5f7aa6bfbd18bafb5c5c033b093bb2fa3';
    $email = 'joe@example.com';
    $password = 'password';

    $auth = new CreateAccessTokenRequest();
    $auth->setClientId($clientId)
        ->setClientSecret($clientSecret)
        ->setEmail($email)
        ->setPassword($password)
        ->setGrantType('password');

    $authResponse = $apiClient->createOauthToken($auth);
    printf("Token = %s\n", $authResponse->getAccessToken());
```

Use API:

```
    $token = 'xxxxxx';

    $httpClient = Client::createHttpClient($token, new HttpJournal());
    $apiClient = Client::create($httpClient);

    $vehicles = $apiClient->getVehicles();
    dump($vehicles);
```    
# TODO

* Add proper OAuth2 support via league/oauth2-client
