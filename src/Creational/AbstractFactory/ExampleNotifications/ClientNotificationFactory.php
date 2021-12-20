<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

class ClientNotificationFactory implements NotificationFactory
{
    /**
     * @return NotificationSender
     */
    public function createSender(): NotificationSender
    {
        return new EmailNotificationSender();
    }

    /**
     * @return NotificationTemplate
     */
    public function createTemplate(): NotificationTemplate
    {
        return new HTMLNotificationTemplate();
    }
}