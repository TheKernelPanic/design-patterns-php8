<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

class BackofficeNotificationFactory implements NotificationFactory
{
    /**
     * @return NotificationSender
     */
    public function createSender(): NotificationSender
    {
        return new WhatsappNotificationSender();
    }

    /**
     * @return NotificationTemplate
     */
    public function createTemplate(): NotificationTemplate
    {
        return new TextPlainNotificationTemplate();
    }
}