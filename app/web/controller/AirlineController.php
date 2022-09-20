<?php

declare(strict_types=1);

namespace Id90travel\web\controller;

use Id90travel\core\src\main\common\exception\AirlinesNotFoundException;
use Id90travel\core\src\main\rest\airline\service\ConsultAirline;
use Id90travel\web\dto\AirlineLoginDTO;
use Id90travel\web\view\View;

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

    public function __invoke($request)
    {
        $this->findAllAirlines();
    }

    /**
     * @return AirlineLoginDTO[]
     * @throws AirlinesNotFoundException
     */
    public function findAllAirlines()
    {
        $airlines = $this->consultAirline->findAllAirlines();
        $display_names = array();
        foreach ($airlines as $value) {
            $display_names[] = new AirlineLoginDTO($value->getDisplayName());
        }

        return $display_names;
    }

}