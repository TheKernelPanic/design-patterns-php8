<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

class WhatsappNotificationSender implements NotificationSender
{
    /**
     * @param User $user
     * @param string $data
     * @return bool
     */
    public function send(User $user, string $data): bool
    {
        echo "Sending whatsapp notification to {$user->getPhoneNumber()}\n";

        return true;
    }
}