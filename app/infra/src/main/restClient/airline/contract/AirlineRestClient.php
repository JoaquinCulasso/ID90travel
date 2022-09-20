<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\airline\contract;

use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\restClient\airline\dto\AirlineDTO;

class AirlineRestClient
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
     * @return AirlineDTO[]
     */
    function findAllAirlines(): array
    {
        $this->httpRequest->setOption(CURLOPT_URL, 'https://beta.id90travel.com/airlines');
        $this->httpRequest->setOption(CURLOPT_SSL_VERIFYPEER, false);
        $this->httpRequest->setOption(CURLOPT_RETURNTRANSFER, true);

        $response = $this->httpRequest->execute();
        $this->httpRequest->close();

        $code = $this->httpRequest->getInfo(CURLINFO_HTTP_CODE);
        if($code > 399){
            $this->httpRequest->validateError($code, $response);
        }

        $dataAirlines = json_decode($response, true);

        $arrayAirlines = array();
        foreach ($dataAirlines as $airline) {
            $arrayAirlines[] = AirlineDTO::fromJson($airline);
        }

        return $arrayAirlines;
    }

}