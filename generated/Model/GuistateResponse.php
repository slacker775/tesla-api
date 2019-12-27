<?php

namespace Tesla\Api\Model;

class GuistateResponse
{
    /**
     * 
     *
     * @var GuiState
     */
    protected $response;
    /**
     * 
     *
     * @return GuiState
     */
    public function getResponse() : GuiState
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param GuiState $response
     *
     * @return self
     */
    public function setResponse(GuiState $response) : self
    {
        $this->response = $response;
        return $this;
    }
}