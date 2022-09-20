<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\common\mapper;

interface AbstractMapper
{
    function mapToDomain(object $T);

    function mapToEntity(object $T);

    function mapToDTO(object $T);

}