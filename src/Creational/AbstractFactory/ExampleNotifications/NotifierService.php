<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

class NotifierService
{
    /**
     * @param User $user
     */
    public function __construct(
        private User $user
    ) {}

    /**
     * @param NotificationFactory $factory
     */
    public function notity(NotificationFactory $factory): void
    {
        $template = $factory->createTemplate();
        $sender = $factory->createSender();

        $sender->send(
            user: $this->user,
            data: $template->create(
                subject: 'Hi!!',
                body: 'Something has happened'
            )
        );
    }
}