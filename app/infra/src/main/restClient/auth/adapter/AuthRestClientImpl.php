<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\adapter;

use Id90travel\core\src\main\common\exception\IdUserDomainException;
use Id90travel\core\src\main\rest\auth\contract\AuthClient;
use Id90travel\core\src\main\rest\auth\model\User;
use Id90travel\core\src\main\rest\auth\model\UserAuth;
use Id90travel\infra\src\main\restClient\auth\contract\AuthRestClient;
use Id90travel\infra\src\main\restClient\auth\mapper\UserAuthMapper;
use Id90travel\infra\src\main\restClient\auth\mapper\UserMapper;

class AuthRestClientImpl implements AuthClient
{

    private AuthRestClient $authRestClient;
    private UserMapper $userMapper;
    private UserAuthMapper $userAuthMapper;

    /**
     * @param AuthRestClient $authRestClient
     * @param UserMapper $userMapper
     * @param UserAuthMapper $userAuthMapper
     */
    public function __construct(AuthRestClient $authRestClient, UserMapper $userMapper, UserAuthMapper $userAuthMapper)
    {
        $this->authRestClient = $authRestClient;
        $this->userMapper = $userMapper;
        $this->userAuthMapper = $userAuthMapper;
    }


    /**
     * @throws IdUserDomainException
     */
    function authUser(UserAuth $userAuth): User
    {
        $userDTO = $this->authRestClient->userAuth($this->userAuthMapper->mapToDTO($userAuth));
        return $this->userMapper->mapToDomain($userDTO);
    }
}