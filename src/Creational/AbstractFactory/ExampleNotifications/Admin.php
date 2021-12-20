<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

class Admin implements User
{
    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return 'admin@service.ext';
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return '000-000-000';
    }
}