<?php

declare(strict_types=1);

namespace Id90travel\web\controller;

use Id90travel\core\src\main\common\exception\AirlinesNotFoundException;
use Id90travel\core\src\main\rest\airline\service\ConsultAirline;
use Id90travel\web\dto\AirlineLoginDTO;

class AirlineController
{

    private ConsultAirline $consultAirline;

    /**
     * @param ConsultAirline $consultAirline
     */
    public function __construct(ConsultAirline $consultAirline)
    {
        $this->consultAirline = $consultAirline;
    }


    /**
     * @throws AirlinesNotFoundException
     */
    public function findAllAirlines(): void
    {
        $airlines = $this->consultAirline->findAllAirlines();
        $display_names = array();
        foreach ($airlines as $value) {
            $display_names[] = new AirlineLoginDTO($value->getDisplayName());
        }

        header('Content-Type: application/json; charset=utf-8');
        http_response_code(200);
        echo json_encode($display_names);
        exit();
    }

}