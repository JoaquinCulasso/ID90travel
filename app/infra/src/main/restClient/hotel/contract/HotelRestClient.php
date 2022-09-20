<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\contract;

use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\restClient\hotel\dto\HotelDTO;
use Id90travel\infra\src\main\restClient\hotel\dto\HotelFilterDTO;

class HotelRestClient
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
     * @param HotelFilterDTO $hotelFilterDTO
     * @return HotelDTO[]
     */
    public function findAllHotels(HotelFilterDTO $hotelFilterDTO): array
    {
        $query = http_build_query($hotelFilterDTO);
        $query = str_replace('guests', 'guests[]', $query);
        $url = 'https://beta.id90travel.com/api/v1/hotels?' . $query;

        $this->httpRequest->setOption(CURLOPT_URL, $url);
        $this->httpRequest->setOption(CURLOPT_SSL_VERIFYPEER, false);
        $this->httpRequest->setOption(CURLOPT_RETURNTRANSFER, true);
        $response = $this->httpRequest->execute();
        $this->httpRequest->close();

        $code = $this->httpRequest->getInfo(CURLINFO_HTTP_CODE);
        if ($code > 399) {
            $this->httpRequest->validateError($code, $response);
        }

        $dataHotels = json_decode($response, true);
        $dataHotels = $dataHotels['hotels'];
        $hotelDTOS = array();
        foreach ($dataHotels as $hotel) {
            $hotelDTOS[] = HotelDTO::fromJson($hotel);
        }
        return $hotelDTOS;
    }


}