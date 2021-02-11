<?php


class SuccessResponse
{
    public $message;

    /**
     * SuccessResponse constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


}