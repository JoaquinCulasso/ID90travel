<?php

namespace Id90travel\infra\src\main\common\http;

use Id90travel\infra\src\main\common\http\exception\BadRequestException;
use Id90travel\infra\src\main\common\http\exception\ForbiddenException;
use Id90travel\infra\src\main\common\http\exception\InternalServerErrorException;
use Id90travel\infra\src\main\common\http\exception\NotFoundException;
use Id90travel\infra\src\main\common\http\exception\UnauthorizedException;

class CurlRequest implements HttpRequest
{
    private \CurlHandle $handle;

    public function __construct()
    {
        $this->handle = curl_init();
    }

    public function setOption($name, $value)
    {
        curl_setopt($this->handle, $name, $value);

    }

    public function execute(): bool|string
    {
        return curl_exec($this->handle);
    }

    public function getInfo($name)
    {
        return curl_getinfo($this->handle, $name);
    }

    public function close()
    {
        curl_close($this->handle);
    }

    public function getHandle(): \CurlHandle
    {
        return $this->handle;
    }

    /**
     * @throws BadRequestException
     * @throws UnauthorizedException
     * @throws ForbiddenException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     */
    public function validateError($code, $message) : void
    {

            match ($code){
                400 => throw new BadRequestException($message, $code),
                401 => throw new UnauthorizedException($message, $code),
                403 => throw new ForbiddenException($message, $code),
                404 => throw new NotFoundException($message, $code),
                default => throw new InternalServerErrorException($message, $code),
            };
    }
}