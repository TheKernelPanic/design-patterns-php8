<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

interface NotificationFactory
{
    /**
     * @return NotificationSender
     */
    public function createSender(): NotificationSender;

    /**
     * @return NotificationTemplate
     */
    public function createTemplate(): NotificationTemplate;
}