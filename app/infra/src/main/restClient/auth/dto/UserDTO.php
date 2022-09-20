<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\dto;

use Id90travel\core\src\main\rest\auth\model\User;

class UserDTO implements \JsonSerializable
{
    private int $id;
    private string $api_id;
    private string $airline;
    private string $username;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $date_of_hire;
    private string $employee_number;
    private string $status;
    private string $station;
    private string $password_digest;
    private string $member_type;
    private string $token;
    private string $state;
    private string $state_changed_at;
    private bool $accept_terms_of_service;
    private string $lang;
    private int $identity_id;
    private int $id90_user_id;
    private int $organization_id;
    private string $currency;
    private string $tutorial_shown;
    private string $utm_source;
    private string $utm_medium;
    private string $confirmation_token;
    private string $confirmed_at;
    private string $confirmation_sent_at;
    private string $created_at;
    private string $verification_email;
    private string $affiliation;
    private bool $review_sent;
    private bool $app_downloaded;
    private string $delete_requested;
    private string $email_opt_out;
    private string $profile_image_url;
    private string $password_updated_at;
    private string $utm_campaign;
    private bool $review_denied;
    private string $mfa_skipped;

    /**
     * @param int $id
     * @param string $api_id
     * @param string $airline
     * @param string $username
     * @param string $first_name
     * @param string $last_name
     * @param string $email
     * @param string $date_of_hire
     * @param string $employee_number
     * @param string $status
     * @param string $station
     * @param string $password_digest
     * @param string $member_type
     * @param string $token
     * @param string $state
     * @param string $state_changed_at
     * @param bool $accept_terms_of_service
     * @param string $lang
     * @param int $identity_id
     * @param int $id90_user_id
     * @param int $organization_id
     * @param string $currency
     * @param string $tutorial_shown
     * @param string $utm_source
     * @param string $utm_medium
     * @param string $confirmation_token
     * @param string $confirmed_at
     * @param string $confirmation_sent_at
     * @param string $created_at
     * @param string $verification_email
     * @param string $affiliation
     * @param bool $review_sent
     * @param bool $app_downloaded
     * @param string $delete_requested
     * @param string $email_opt_out
     * @param string $profile_image_url
     * @param string $password_updated_at
     * @param string $utm_campaign
     * @param bool $review_denied
     * @param string $mfa_skipped
     */
    public function __construct(int $id, string $api_id, string $airline, string $username, string $first_name, string $last_name, string $email, string $date_of_hire, string $employee_number, string $status, string $station, string $password_digest, string $member_type, string $token, string $state, string $state_changed_at, bool $accept_terms_of_service, string $lang, int $identity_id, int $id90_user_id, int $organization_id, string $currency, string $tutorial_shown, string $utm_source, string $utm_medium, string $confirmation_token, string $confirmed_at, string $confirmation_sent_at, string $created_at, string $verification_email, string $affiliation, bool $review_sent, bool $app_downloaded, string $delete_requested, string $email_opt_out, string $profile_image_url, string $password_updated_at, string $utm_campaign, bool $review_denied, string $mfa_skipped)
    {
        $this->id = $id;
        $this->api_id = $api_id;
        $this->airline = $airline;
        $this->username = $username;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->date_of_hire = $date_of_hire;
        $this->employee_number = $employee_number;
        $this->status = $status;
        $this->station = $station;
        $this->password_digest = $password_digest;
        $this->member_type = $member_type;
        $this->token = $token;
        $this->state = $state;
        $this->state_changed_at = $state_changed_at;
        $this->accept_terms_of_service = $accept_terms_of_service;
        $this->lang = $lang;
        $this->identity_id = $identity_id;
        $this->id90_user_id = $id90_user_id;
        $this->organization_id = $organization_id;
        $this->currency = $currency;
        $this->tutorial_shown = $tutorial_shown;
        $this->utm_source = $utm_source;
        $this->utm_medium = $utm_medium;
        $this->confirmation_token = $confirmation_token;
        $this->confirmed_at = $confirmed_at;
        $this->confirmation_sent_at = $confirmation_sent_at;
        $this->created_at = $created_at;
        $this->verification_email = $verification_email;
        $this->affiliation = $affiliation;
        $this->review_sent = $review_sent;
        $this->app_downloaded = $app_downloaded;
        $this->delete_requested = $delete_requested;
        $this->email_opt_out = $email_opt_out;
        $this->profile_image_url = $profile_image_url;
        $this->password_updated_at = $password_updated_at;
        $this->utm_campaign = $utm_campaign;
        $this->review_denied = $review_denied;
        $this->mfa_skipped = $mfa_skipped;
    }

    public static function fromDomain(User $user)
    {
        return new UserDTO(
            $user->getId()->getId(),
            $user->getApiId(),
            $user->getAirline(),
            $user->getUsername(),
            $user->getFirstName(),
            $user->getLastName(),
            $user->getEmail(),
            $user->getDateOfHire(),
            $user->getEmployeeNumber(),
            $user->getStatus(),
            $user->getStation(),
            $user->getPasswordDigest(),
            $user->getMemberType(),
            $user->getToken(),
            $user->getState(),
            $user->getStateChangedAt(),
            $user->isAcceptTermsOfService(),
            $user->getLang(),
            $user->getIdentityId(),
            $user->getId90UserId(),
            $user->getOrganizationId(),
            $user->getCurrency(),
            $user->getTutorialShown(),
            $user->getUtmSource(),
            $user->getUtmMedium(),
            $user->getConfirmationToken(),
            $user->getConfirmedAt(),
            $user->getConfirmationSentAt(),
            $user->getCreatedAt(),
            $user->getVerificationEmail(),
            $user->getAffiliation(),
            $user->isReviewSent(),
            $user->isAppDownloaded(),
            $user->getDeleteRequested(),
            $user->getEmailOptOut(),
            $user->getProfileImageUrl(),
            $user->getPasswordUpdatedAt(),
            $user->getUtmCampaign(),
            $user->isReviewDenied(),
            $user->getMfaSkipped()
        );

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
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getApiId(): string
    {
        return $this->api_id;
    }

    /**
     * @param string $api_id
     */
    public function setApiId(string $api_id): void
    {
        $this->api_id = $api_id;
    }

    /**
     * @return string
     */
    public function getAirline(): string
    {
        return $this->airline;
    }

    /**
     * @param string $airline
     */
    public function setAirline(string $airline): void
    {
        $this->airline = $airline;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getDateOfHire(): string
    {
        return $this->date_of_hire;
    }

    /**
     * @param string $date_of_hire
     */
    public function setDateOfHire(string $date_of_hire): void
    {
        $this->date_of_hire = $date_of_hire;
    }

    /**
     * @return string
     */
    public function getEmployeeNumber(): string
    {
        return $this->employee_number;
    }

    /**
     * @param string $employee_number
     */
    public function setEmployeeNumber(string $employee_number): void
    {
        $this->employee_number = $employee_number;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStation(): string
    {
        return $this->station;
    }

    /**
     * @param string $station
     */
    public function setStation(string $station): void
    {
        $this->station = $station;
    }

    /**
     * @return string
     */
    public function getPasswordDigest(): string
    {
        return $this->password_digest;
    }

    /**
     * @param string $password_digest
     */
    public function setPasswordDigest(string $password_digest): void
    {
        $this->password_digest = $password_digest;
    }

    /**
     * @return string
     */
    public function getMemberType(): string
    {
        return $this->member_type;
    }

    /**
     * @param string $member_type
     */
    public function setMemberType(string $member_type): void
    {
        $this->member_type = $member_type;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getStateChangedAt(): string
    {
        return $this->state_changed_at;
    }

    /**
     * @param string $state_changed_at
     */
    public function setStateChangedAt(string $state_changed_at): void
    {
        $this->state_changed_at = $state_changed_at;
    }

    /**
     * @return bool
     */
    public function isAcceptTermsOfService(): bool
    {
        return $this->accept_terms_of_service;
    }

    /**
     * @param bool $accept_terms_of_service
     */
    public function setAcceptTermsOfService(bool $accept_terms_of_service): void
    {
        $this->accept_terms_of_service = $accept_terms_of_service;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return int
     */
    public function getIdentityId(): int
    {
        return $this->identity_id;
    }

    /**
     * @param int $identity_id
     */
    public function setIdentityId(int $identity_id): void
    {
        $this->identity_id = $identity_id;
    }

    /**
     * @return int
     */
    public function getId90UserId(): int
    {
        return $this->id90_user_id;
    }

    /**
     * @param int $id90_user_id
     */
    public function setId90UserId(int $id90_user_id): void
    {
        $this->id90_user_id = $id90_user_id;
    }

    /**
     * @return int
     */
    public function getOrganizationId(): int
    {
        return $this->organization_id;
    }

    /**
     * @param int $organization_id
     */
    public function setOrganizationId(int $organization_id): void
    {
        $this->organization_id = $organization_id;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getTutorialShown(): string
    {
        return $this->tutorial_shown;
    }

    /**
     * @param string $tutorial_shown
     */
    public function setTutorialShown(string $tutorial_shown): void
    {
        $this->tutorial_shown = $tutorial_shown;
    }

    /**
     * @return string
     */
    public function getUtmSource(): string
    {
        return $this->utm_source;
    }

    /**
     * @param string $utm_source
     */
    public function setUtmSource(string $utm_source): void
    {
        $this->utm_source = $utm_source;
    }

    /**
     * @return string
     */
    public function getUtmMedium(): string
    {
        return $this->utm_medium;
    }

    /**
     * @param string $utm_medium
     */
    public function setUtmMedium(string $utm_medium): void
    {
        $this->utm_medium = $utm_medium;
    }

    /**
     * @return string
     */
    public function getConfirmationToken(): string
    {
        return $this->confirmation_token;
    }

    /**
     * @param string $confirmation_token
     */
    public function setConfirmationToken(string $confirmation_token): void
    {
        $this->confirmation_token = $confirmation_token;
    }

    /**
     * @return string
     */
    public function getConfirmedAt(): string
    {
        return $this->confirmed_at;
    }

    /**
     * @param string $confirmed_at
     */
    public function setConfirmedAt(string $confirmed_at): void
    {
        $this->confirmed_at = $confirmed_at;
    }

    /**
     * @return string
     */
    public function getConfirmationSentAt(): string
    {
        return $this->confirmation_sent_at;
    }

    /**
     * @param string $confirmation_sent_at
     */
    public function setConfirmationSentAt(string $confirmation_sent_at): void
    {
        $this->confirmation_sent_at = $confirmation_sent_at;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getVerificationEmail(): string
    {
        return $this->verification_email;
    }

    /**
     * @param string $verification_email
     */
    public function setVerificationEmail(string $verification_email): void
    {
        $this->verification_email = $verification_email;
    }

    /**
     * @return string
     */
    public function getAffiliation(): string
    {
        return $this->affiliation;
    }

    /**
     * @param string $affiliation
     */
    public function setAffiliation(string $affiliation): void
    {
        $this->affiliation = $affiliation;
    }

    /**
     * @return bool
     */
    public function isReviewSent(): bool
    {
        return $this->review_sent;
    }

    /**
     * @param bool $review_sent
     */
    public function setReviewSent(bool $review_sent): void
    {
        $this->review_sent = $review_sent;
    }

    /**
     * @return bool
     */
    public function isAppDownloaded(): bool
    {
        return $this->app_downloaded;
    }

    /**
     * @param bool $app_downloaded
     */
    public function setAppDownloaded(bool $app_downloaded): void
    {
        $this->app_downloaded = $app_downloaded;
    }

    /**
     * @return string
     */
    public function getDeleteRequested(): string
    {
        return $this->delete_requested;
    }

    /**
     * @param string $delete_requested
     */
    public function setDeleteRequested(string $delete_requested): void
    {
        $this->delete_requested = $delete_requested;
    }

    /**
     * @return string
     */
    public function getEmailOptOut(): string
    {
        return $this->email_opt_out;
    }

    /**
     * @param string $email_opt_out
     */
    public function setEmailOptOut(string $email_opt_out): void
    {
        $this->email_opt_out = $email_opt_out;
    }

    /**
     * @return string
     */
    public function getProfileImageUrl(): string
    {
        return $this->profile_image_url;
    }

    /**
     * @param string $profile_image_url
     */
    public function setProfileImageUrl(string $profile_image_url): void
    {
        $this->profile_image_url = $profile_image_url;
    }

    /**
     * @return string
     */
    public function getPasswordUpdatedAt(): string
    {
        return $this->password_updated_at;
    }

    /**
     * @param string $password_updated_at
     */
    public function setPasswordUpdatedAt(string $password_updated_at): void
    {
        $this->password_updated_at = $password_updated_at;
    }

    /**
     * @return string
     */
    public function getUtmCampaign(): string
    {
        return $this->utm_campaign;
    }

    /**
     * @param string $utm_campaign
     */
    public function setUtmCampaign(string $utm_campaign): void
    {
        $this->utm_campaign = $utm_campaign;
    }

    /**
     * @return bool
     */
    public function isReviewDenied(): bool
    {
        return $this->review_denied;
    }

    /**
     * @param bool $review_denied
     */
    public function setReviewDenied(bool $review_denied): void
    {
        $this->review_denied = $review_denied;
    }

    /**
     * @return string
     */
    public function getMfaSkipped(): string
    {
        return $this->mfa_skipped;
    }

    /**
     * @param string $mfa_skipped
     */
    public function setMfaSkipped(string $mfa_skipped): void
    {
        $this->mfa_skipped = $mfa_skipped;
    }

    /**
     * @param $json
     * @return UserDTO
     */
    public static function fromJson($json): UserDTO
    {
        return new self(
            $json['id'],
            $json['api_id'],
            $json['airline'],
            $json['username'],
            $json['first_name'],
            $json['last_name'],
            $json['email'],
            $json['date_of_hire'] ?? '',
            $json['employee_number'],
            $json['status'] ?? '',
            $json['station'] ?? '',
            $json['password_digest'] ?? '',
            $json['member_type'],
            $json['token'] ?? '',
            $json['state'],
            $json['state_changed_at'] ?? '',
            $json['accept_terms_of_service'],
            $json['lang'],
            $json['identity_id'],
            $json['id90_user_id'],
            $json['organization_id'],
            $json['currency'],
            $json['tutorial_shown'],
            $json['utm_source'] ?? '',
            $json['utm_medium'] ?? '',
            $json['confirmation_token'] ?? '',
            $json['confirmed_at'],
            $json['confirmation_sent_at'] ?? '',
            $json['created_at'],
            $json['verification_email'],
            $json['affiliation'],
            $json['review_sent'],
            $json['app_downloaded'],
            $json['delete_requested'] ?? '',
            $json['email_opt_out'],
            $json['profile_image_url'] ?? '',
            $json['password_updated_at'] ?? '',
            $json['utm_campaign'] ?? '',
            $json['review_denied'],
            $json['mfa_skipped'] ?? ''
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'api_id' => $this->api_id,
            'airline' => $this->airline,
            'username' => $this->username,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'date_of_hire' => $this->date_of_hire,
            'employee_number' => $this->employee_number,
            'status' => $this->status,
            'station' => $this->station,
            'password_digest' => $this->password_digest,
            'member_type' => $this->member_type,
            'token' => $this->token,
            'state' => $this->state,
            'state_changed_at' => $this->state_changed_at,
            'accept_terms_of_service' => $this->accept_terms_of_service,
            'lang' => $this->lang,
            'identity_id' => $this->identity_id,
            'id90_user_id' => $this->id90_user_id,
            'organization_id' => $this->organization_id,
            'currency' => $this->currency,
            'tutorial_shown' => $this->tutorial_shown,
            'utm_source' => $this->utm_source,
            'utm_medium' => $this->utm_medium,
            'confirmation_token' => $this->confirmation_token,
            'confirmed_at' => $this->confirmed_at,
            'confirmation_sent_at' => $this->confirmation_sent_at,
            'created_at' => $this->created_at,
            'verification_email' => $this->verification_email,
            'affiliation' => $this->affiliation,
            'review_sent' => $this->review_sent,
            'app_downloaded' => $this->app_downloaded,
            'delete_requested' => $this->delete_requested,
            'email_opt_out' => $this->email_opt_out,
            'profile_image_url' => $this->profile_image_url,
            'password_updated_at' => $this->password_updated_at,
            'utm_campaign' => $this->utm_campaign,
            'review_denied' => $this->review_denied,
            'mfa_skipped' => $this->mfa_skipped
        ];
    }
}