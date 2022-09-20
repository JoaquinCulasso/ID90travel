<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\auth\service;

use Id90travel\core\src\main\common\exception\MissingAirlineCodeException;
use Id90travel\core\src\main\common\exception\MissingPasswordException;
use Id90travel\core\src\main\common\exception\MissingUsernameException;
use Id90travel\core\src\main\rest\auth\contract\AuthClient;
use Id90travel\core\src\main\rest\auth\model\User;
use Id90travel\core\src\main\rest\auth\model\UserAuth;

/**
 * Use case User Authentication
 */
class UserAuthentication
{

    private AuthClient $authClient;

    /**
     * @param AuthClient $authClient
     */
    public function __construct(AuthClient $authClient)
    {
        $this->authClient = $authClient;
    }

    /**
     * @param UserAuth $userAuth
     * @return User
     * @throws MissingAirlineCodeException
     * @throws MissingPasswordException
     * @throws MissingUsernameException
     */
    public function userAuth(UserAuth $userAuth): User
    {
        $this->validate($userAuth);
        return $this->authClient->authUser($userAuth);
    }

    /**
     * @throws MissingAirlineCodeException
     * @throws MissingUsernameException
     * @throws MissingPasswordException
     */
    private function validate(UserAuth $userAuth): void
    {

        if (empty($userAuth->getAirline())) {
            throw new MissingAirlineCodeException();
        }

        if (empty($userAuth->getUsername())) {
            throw new MissingUsernameException();
        }

        if (empty($userAuth->getPassword())) {
            throw new MissingPasswordException();
        }

    }


}