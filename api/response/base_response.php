<?php


class base_response
{
    private $err;
    private $result;

    /**
     * index constructor.
     * @param $err
     * @param $result
     */
    public function __construct($err, $result)
    {
        $this->err = $err;
        $this->result = $result;
    }

    public function get_json() {
        $arr = array(
            'err'=>$this->err,
            'result'=>$this->result
        );
        return json_encode($arr);
    }
}
