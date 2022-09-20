<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\dto;

class UserAuthDTO implements \JsonSerializable
{

    private string $airline;
    private string $username;
    private string $password;
    private string $remember_me;

    /**
     * @param string $airline
     * @param string $username
     * @param string $password
     * @param string $remember_me
     */
    public function __construct(string $airline, string $username, string $password, string $remember_me)
    {
        $this->airline = $airline;
        $this->username = $username;
        $this->password = $password;
        $this->remember_me = $remember_me;
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
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRememberMe(): string
    {
        return $this->remember_me;
    }

    /**
     * @param string $remember_me
     */
    public function setRememberMe(string $remember_me): void
    {
        $this->remember_me = $remember_me;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'airline' => $this->airline,
            'username' => $this->username,
            'password' => $this->password,
            'remember_me' => $this->remember_me
        ];
    }
}