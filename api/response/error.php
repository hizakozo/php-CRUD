<?php

class ErrorResponse
{
    public $message;

    /**
     * Error constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


}