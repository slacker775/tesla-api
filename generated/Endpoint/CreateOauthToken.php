<?php

namespace Tesla\Api\Endpoint;

class CreateOauthToken extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * Performs the login. Takes in an plain text email and password, matching the owner's login information for [https://my.teslamotors.com/user/login](https://my.teslamotors.com/user/login).
    Returns a `access_token` which is passed along as a header with all future requests to authenticate the user.
    You must provide the `Authorization: Bearer {access_token}` header in all other requests.
    The current client ID and secret are [available here](http://pastebin.com/YiLPDggh)
    *
    * @param \Tesla\Api\Model\CreateAccessTokenRequest $requestBody 
    */
    public function __construct(\Tesla\Api\Model\CreateAccessTokenRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/oauth/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Tesla\Api\Model\CreateAccessTokenRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Tesla\Api\Model\CreateAccessTokenResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Tesla\\Api\\Model\\CreateAccessTokenResponse', 'json');
        }
    }
}