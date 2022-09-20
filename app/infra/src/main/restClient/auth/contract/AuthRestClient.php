<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\contract;

use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\restClient\auth\dto\UserAuthDTO;
use Id90travel\infra\src\main\restClient\auth\dto\UserDTO;

class AuthRestClient
{

    private HttpRequest $httpRequest;


    /**
     * @param HttpRequest $httpRequest
     */
    public function __construct(HttpRequest $httpRequest)
    {
        $this->httpRequest = $httpRequest;
    }

    /**
     * @param UserAuthDTO $userAuthDTO
     * @return UserDTO
     */
    public function userAuth(UserAuthDTO $userAuthDTO): UserDTO
    {
        $this->httpRequest->setOption(CURLOPT_URL, 'https://beta.id90travel.com/session');
        $this->httpRequest->setOption(CURLOPT_POST, true);
        $this->httpRequest->setOption(CURLOPT_SSL_VERIFYPEER, false);
        $this->httpRequest->setOption(CURLOPT_RETURNTRANSFER, true);
        $this->httpRequest->setOption(CURLOPT_POSTFIELDS, json_encode($userAuthDTO, JSON_PRETTY_PRINT));
        $this->httpRequest->setOption(CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = $this->httpRequest->execute();
        $this->httpRequest->close();

        $code = $this->httpRequest->getInfo(CURLINFO_HTTP_CODE);
        if ($code > 399) {
            $this->httpRequest->validateError($code, $response);
        }

        $dataUser = json_decode($response, true);
        $dataUser = $dataUser['member'];
        return UserDTO::fromJson($dataUser);
    }


}