<?php

declare(strict_types=1);

namespace Id90travel\web\controller;

use Id90travel\core\src\main\rest\auth\model\UserAuth;
use Id90travel\core\src\main\rest\auth\service\UserAuthentication;
use Id90travel\infra\src\main\restClient\auth\dto\UserAuthDTO;
use Id90travel\infra\src\main\restClient\auth\dto\UserDTO;


class AuthController
{

    private UserAuthentication $userAuthentication;

    /**
     * @param UserAuthentication $userAuthentication
     */
    public function __construct(UserAuthentication $userAuthentication)
    {
        $this->userAuthentication = $userAuthentication;
    }


    public function userAuth(UserAuthDTO $userAuthDTO): bool|string
    {
        require_once __DIR__ . '/../../../bootstrap.php';
        $userAuth = new UserAuth(
            $userAuthDTO->getAirline(),
            $userAuthDTO->getUsername(),
            $userAuthDTO->getPassword(),
            $userAuthDTO->getRememberMe()
        );

        $user = $this->userAuthentication->userAuth($userAuth);

        $userDTO = UserDTO::fromDomain($user);
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($userDTO);
    }


}