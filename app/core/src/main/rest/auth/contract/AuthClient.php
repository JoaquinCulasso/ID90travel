<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\auth\contract;

use Id90travel\core\src\main\rest\auth\model\User;
use Id90travel\core\src\main\rest\auth\model\UserAuth;

interface AuthClient
{
    /**
     * @param UserAuth $userAuth
     * @return User
     */
    function authUser(UserAuth $userAuth): User;
}