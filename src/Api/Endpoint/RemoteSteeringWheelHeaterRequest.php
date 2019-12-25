<?php

namespace Tesla\Api\Endpoint;

class RemoteSteeringWheelHeaterRequest extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $vehicle_id;
    /**
     * Toggle the steering wheel heater
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\RemoteSteeringWheelHeaterRequest $requestBody 
     */
    public function __construct(string $vehicleId, \Tesla\Api\Model\RemoteSteeringWheelHeaterRequest $requestBody)
    {
        $this->vehicle_id = $vehicleId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{vehicle_id}'), array($this->vehicle_id), '/api/1/vehicles/{vehicle_id}/command/remote_steering_wheel_heater_request');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Tesla\Api\Model\RemoteSteeringWheelHeaterRequest) {
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
     * @return null|\Tesla\Api\Model\CommandResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Tesla\\Api\\Model\\CommandResponse', 'json');
        }
    }
}