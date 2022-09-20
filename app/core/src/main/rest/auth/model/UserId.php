<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\auth\model;

use Id90travel\core\src\main\common\exception\IdUserDomainException;

class UserId
{

    private int $id;

    /**
     * @param int $id
     * @throws IdUserDomainException
     */
    public function __construct(int $id)
    {
        if($id < 0){
            throw new IdUserDomainException("User id is invalid " .$id);
        }
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @throws IdUserDomainException
     */
    public function setId(int $id): void
    {
        if($id < 0){
            throw new IdUserDomainException("User id is invalid " .$id);
        }
        $this->id = $id;
    }

}