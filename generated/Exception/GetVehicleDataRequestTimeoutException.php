<?php

namespace Tesla\Api\Exception;

class GetVehicleDataRequestTimeoutException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Tesla\Api\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Timeout', 408);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}