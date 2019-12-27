<?php

namespace Tesla\Api\Endpoint;

class ToggleChargePort extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $vehicle_id;
    /**
     * Opens the charge port. Does not close the charge port (for now...). This endpoint also unlocks the charge port if it's locked.
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
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{vehicle_id}'), array($this->vehicle_id), '/api/1/vehicles/{vehicle_id}/command/charge_port_door_open');
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
     * @return null|\Tesla\Api\Model\CommandResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Tesla\\Api\\Model\\CommandResponse', 'json');
        }
    }
}