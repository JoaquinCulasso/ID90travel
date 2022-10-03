<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\mapper;

use Id90travel\core\src\main\rest\auth\model\UserAuth;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\restClient\auth\dto\UserAuthDTO;

use Id90travel\infra\src\main\common\mapper\AbstractMapper;

class UserAuthMapper implements AbstractMapper
{

    function mapToDomain(object $T)
    {
        // TODO: Implement mapToDomain() method.
    }

    function mapToEntity(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }

    /**
     * @param object $T
     * @return UserAuthDTO
     */
    function mapToDTO(object $T): UserAuthDTO
    {
        if ($T instanceof UserAuth) {
            return new UserAuthDTO(
                $T->getAirline(),
                $T->getUsername(),
                $T->getPassword(),
                $T->getRememberMe()
            );
        }
        throw new DtoToDomainException('Exception converting DOMAIN to DTO userAuth' . $T, 500);
    }
}