<?php

declare(strict_types=1);

namespace Id90travel\infra\src\test\restClient\auth;

use Id90travel\core\src\main\common\exception\IdUserDomainException;
use Id90travel\core\src\main\rest\auth\model\UserAuth;
use Id90travel\infra\src\main\common\http\exception\UnauthorizedException;
use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\restClient\auth\adapter\AuthRestClientImpl;
use Id90travel\infra\src\main\restClient\auth\contract\AuthRestClient;
use Id90travel\infra\src\main\restClient\auth\mapper\UserAuthMapper;
use Id90travel\infra\src\main\restClient\auth\mapper\UserMapper;

use PHPUnit\Framework\MockObject\MockObject;
use \PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{

    private static UserMapper $userMapper;
    private static UserAuthMapper $userAuthMapper;

    /**
     * @test
     * @throws IdUserDomainException
     */
    public function userAuthSuccess()
    {
        $userMapper = $this->getUserMapper();
        $userAuthMapper = $this->getUserAuthMapper();
        $curlHttpRequestMock = $this->getCurlRequestMock();

        /** @noinspection PhpParamsInspection */
        $authRestClientMock = new AuthRestClient($curlHttpRequestMock);
        $curlHttpRequestMock->method('execute')->willReturn(file_get_contents(APP_DIRECTORY . '/infra/src/test/resource/json/userAuthSuccessResponse.json'));
        $authRestClientImpl = new AuthRestClientImpl($authRestClientMock, $userMapper, $userAuthMapper);
        $user = $authRestClientImpl->authUser(new UserAuth('666', 'userValid', '456789', '1'));
        $this->assertEquals('userValid', $user->getUsername());
        $this->assertEquals('666', $user->getAirline());
        $this->assertEquals('Joaco', $user->getFirstName());
    }

    /**
     * @test
     * @throws IdUserDomainException
     */
    public function userAuthUnauthorizedException()
    {
        $userMapper = $this->getUserMapper();
        $userAuthMapper = $this->getUserAuthMapper();
        $curlHttpRequestMock = $this->getCurlRequestMock();
        /** @noinspection PhpParamsInspection */
        $authRestClientMock = new AuthRestClient($curlHttpRequestMock);
        $curlHttpRequestMock->method('execute')->willReturn('{"error":"Invalid Username or Password"}');
        $curlHttpRequestMock->method('getInfo')->willReturn(401);
        $curlHttpRequestMock->method('validateError')->willThrowException(new UnauthorizedException('{"error":"Invalid Username or Password"}', 401));
        $authRestClientImpl = new AuthRestClientImpl($authRestClientMock, $userMapper, $userAuthMapper);
        $this->expectException(UnauthorizedException::class);
        $this->expectExceptionMessage('{"error":"Invalid Username or Password"}');
        $authRestClientImpl->authUser(new UserAuth('ID90', 'fakeUser', 'pass', '1'));
    }

    /**
     * @return MockObject
     */
    private function getCurlRequestMock(): MockObject
    {
        return $this->createMock(HttpRequest::class);
    }

    /**
     * @return UserMapper
     */
    private function getUserMapper(): UserMapper
    {
        if (!isset($this::$userMapper)) {
            return $this::$userMapper = new UserMapper();
        }
        return $this::$userMapper;
    }

    /**
     * @return UserAuthMapper
     */
    private function getUserAuthMapper(): UserAuthMapper
    {
        if (!isset($this::$userAuthMapper)) {
            return $this::$userAuthMapper = new UserAuthMapper();
        }
        return $this::$userAuthMapper;
    }

}