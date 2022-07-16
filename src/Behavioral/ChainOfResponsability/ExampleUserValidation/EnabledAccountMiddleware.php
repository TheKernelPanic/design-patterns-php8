<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation;

final class EnabledAccountMiddleware extends Middleware
{
    /**
     * @param User $user
     * @return bool
     */
    public function check(User $user): bool
    {
        echo "Check enable account\n";

        return parent::check($user);
    }
}