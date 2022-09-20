<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\airline\model;

class Airline
{

    private AirlineId $id;
    private string $name;
    private string $code;
    private bool $sign_in_available;
    private bool $sign_up_available;
    private string $display_name;
    private bool $is_commercial;
    private bool $employee_number_required;
    private bool $partner;
    private string $lang;
    private string $currency;
    private array $email_domains;
    private string $airline_blog_uri;
    private string $white_label_url;

    /**
     * @param AirlineId $id
     * @param string $name
     * @param string $code
     * @param bool $sign_in_available
     * @param bool $sign_up_available
     * @param string $display_name
     * @param bool $is_commercial
     * @param bool $employee_number_required
     * @param bool $partner
     * @param string $lang
     * @param string $currency
     * @param array $email_domains
     * @param string $airline_blog_uri
     * @param string $white_label_url
     */
    public function __construct(AirlineId $id, string $name, string $code, bool $sign_in_available, bool $sign_up_available, string $display_name, bool $is_commercial, bool $employee_number_required, bool $partner, string $lang, string $currency, array $email_domains, string $airline_blog_uri, string $white_label_url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->sign_in_available = $sign_in_available;
        $this->sign_up_available = $sign_up_available;
        $this->display_name = $display_name;
        $this->is_commercial = $is_commercial;
        $this->employee_number_required = $employee_number_required;
        $this->partner = $partner;
        $this->lang = $lang;
        $this->currency = $currency;
        $this->email_domains = $email_domains;
        $this->airline_blog_uri = $airline_blog_uri;
        $this->white_label_url = $white_label_url;
    }

    /**
     * @return AirlineId
     */
    public function getId(): AirlineId
    {
        return $this->id;
    }

    /**
     * @param AirlineId $id
     */
    public function setId(AirlineId $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return bool
     */
    public function isSignInAvailable(): bool
    {
        return $this->sign_in_available;
    }

    /**
     * @param bool $sign_in_available
     */
    public function setSignInAvailable(bool $sign_in_available): void
    {
        $this->sign_in_available = $sign_in_available;
    }

    /**
     * @return bool
     */
    public function isSignUpAvailable(): bool
    {
        return $this->sign_up_available;
    }

    /**
     * @param bool $sign_up_available
     */
    public function setSignUpAvailable(bool $sign_up_available): void
    {
        $this->sign_up_available = $sign_up_available;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->display_name;
    }

    /**
     * @param string $display_name
     */
    public function setDisplayName(string $display_name): void
    {
        $this->display_name = $display_name;
    }

    /**
     * @return bool
     */
    public function isIsCommercial(): bool
    {
        return $this->is_commercial;
    }

    /**
     * @param bool $is_commercial
     */
    public function setIsCommercial(bool $is_commercial): void
    {
        $this->is_commercial = $is_commercial;
    }

    /**
     * @return bool
     */
    public function isEmployeeNumberRequired(): bool
    {
        return $this->employee_number_required;
    }

    /**
     * @param bool $employee_number_required
     */
    public function setEmployeeNumberRequired(bool $employee_number_required): void
    {
        $this->employee_number_required = $employee_number_required;
    }

    /**
     * @return bool
     */
    public function isPartner(): bool
    {
        return $this->partner;
    }

    /**
     * @param bool $partner
     */
    public function setPartner(bool $partner): void
    {
        $this->partner = $partner;
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
     * @return array
     */
    public function getEmailDomains(): array
    {
        return $this->email_domains;
    }

    /**
     * @param array $email_domains
     */
    public function setEmailDomains(array $email_domains): void
    {
        $this->email_domains = $email_domains;
    }

    /**
     * @return string
     */
    public function getAirlineBlogUri(): string
    {
        return $this->airline_blog_uri;
    }

    /**
     * @param string $airline_blog_uri
     */
    public function setAirlineBlogUri(string $airline_blog_uri): void
    {
        $this->airline_blog_uri = $airline_blog_uri;
    }

    /**
     * @return string
     */
    public function getWhiteLabelUrl(): string
    {
        return $this->white_label_url;
    }

    /**
     * @param string $white_label_url
     */
    public function setWhiteLabelUrl(string $white_label_url): void
    {
        $this->white_label_url = $white_label_url;
    }

}