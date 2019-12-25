<?php

namespace Tesla\Api\Endpoint;

class GetVehicleData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $vehicle_id;
    /**
     * Returns all vehicle ∂ata, potentially cached
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
        return str_replace(array('{vehicle_id}'), array($this->vehicle_id), '/api/1/vehicles/{vehicle_id}/data');
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
     * @throws \Tesla\Api\Exception\GetVehicleDataRequestTimeoutException
     *
     * @return null|\Tesla\Api\Model\VehicleDataResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Tesla\\Api\\Model\\VehicleDataResponse', 'json');
        }
        if (408 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Tesla\Api\Exception\GetVehicleDataRequestTimeoutException($serializer->deserialize($body, 'Tesla\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
}