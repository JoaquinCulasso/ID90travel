<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\mapper;

use Id90travel\core\src\main\common\exception\IdUserDomainException;
use Id90travel\core\src\main\rest\auth\model\User;
use Id90travel\core\src\main\rest\auth\model\UserId;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\auth\dto\UserDTO;

class UserMapper implements AbstractMapper
{


    /**
     * @param object $T
     * @return User
     * @throws IdUserDomainException
     * @throws DtoToDomainException
     */
    function mapToDomain(object $T): User
    {
        if ($T instanceof UserDTO) {
            return new User(
                new UserId($T->getId()),
                $T->getApiId(),
                $T->getAirline(),
                $T->getUsername(),
                $T->getFirstName(),
                $T->getLastName(),
                $T->getEmail(),
                $T->getDateOfHire(),
                $T->getEmployeeNumber(),
                $T->getStatus(),
                $T->getStation(),
                $T->getPasswordDigest(),
                $T->getMemberType(),
                $T->getToken(),
                $T->getState(),
                $T->getStateChangedAt(),
                $T->isAcceptTermsOfService(),
                $T->getLang(),
                $T->getIdentityId(),
                $T->getId90UserId(),
                $T->getOrganizationId(),
                $T->getCurrency(),
                $T->getTutorialShown(),
                $T->getUtmSource(),
                $T->getUtmMedium(),
                $T->getConfirmationToken(),
                $T->getConfirmedAt(),
                $T->getConfirmationSentAt(),
                $T->getCreatedAt(),
                $T->getVerificationEmail(),
                $T->getAffiliation(),
                $T->isReviewSent(),
                $T->isAppDownloaded(),
                $T->getDeleteRequested(),
                $T->getEmailOptOut(),
                $T->getProfileImageUrl(),
                $T->getPasswordUpdatedAt(),
                $T->getUtmCampaign(),
                $T->isReviewDenied(),
                $T->getMfaSkipped()
            );
        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN user ' . $T, 500);
    }


    function mapToEntity(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }

    function mapToDTO(object $T)
    {
        // TODO: Implement mapToDTO() method.
    }
}