<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

interface NotificationTemplate
{
    /**
     * @param string $subject
     * @param string $body
     * @return string
     */
    public function create(string $subject, string $body): string;
}