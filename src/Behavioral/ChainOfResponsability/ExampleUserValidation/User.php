<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation;

use DateTimeInterface;

class User
{
    /**
     * @var DateTimeInterface|null
     */
    private DateTimeInterface|null $lastLogin;

    /**
     * @param string $emailAddress
     * @param string $password
     * @param bool $status
     */
    public function __construct(
        private string $emailAddress,
        private string $password,
        private bool $status = false
    )
    {
        $this->lastLogin = null;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param DateTimeInterface|null $lastLogin
     */
    public function setLastLogin(?DateTimeInterface $lastLogin): void
    {
        $this->lastLogin = $lastLogin;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getLastLogin(): ?DateTimeInterface
    {
        return $this->lastLogin;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }
}