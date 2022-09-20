<?php

namespace Id90travel\infra\src\main\common\http\exception;

class UnauthorizedException extends \Exception
{


    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }

    public function __toString(): string
    {
        $refer = $_SERVER['HTTP_REFERER'];
        $error = json_encode('?error=Invalid Username or Password');
        header("Location: $refer" . $error);
        return '"Invalid Username or Password"';
    }

    public function getException()
    {
        print $this;
    }
}