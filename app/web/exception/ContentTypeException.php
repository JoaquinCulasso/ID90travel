<?php

namespace Id90travel\web\exception;

class ContentTypeException extends \Exception
{


    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }

    public function __toString(): string
    {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($this->code);

        return $this->message;
    }


}