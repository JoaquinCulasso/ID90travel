<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\common\http;

interface HttpRequest
{
    public function setOption($name, $value);
    public function execute();
    public function getInfo($name);
    public function close();
    public function getHandle();
    public function validateError($code, $message);
}