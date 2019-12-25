<?php

namespace Tesla\Api\Endpoint;

class GetVehicle extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $vehicle_id;
    /**
     * Retrieve a specific vehicle
     *
     * @param string $vehicleId The id of the Vehicle.
     */
    public function __construct(string $vehicleId)
    {
        $this->vehicle_id = $vehicleId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{vehicle_id}'), array($this->vehicle_id), '/api/1/vehicles/{vehicle_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\Tesla\Api\Model\VehicleResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Tesla\\Api\\Model\\VehicleResponse', 'json');
        }
    }
}