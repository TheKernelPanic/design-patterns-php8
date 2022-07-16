<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation;

final class LastLoginCheckerMiddleware extends Middleware
{
    /**
     * @param User $user
     * @return bool
     */
    public function check(User $user): bool
    {
        echo "Check last data login date\n";

        return parent::check(user: $user);
    }
}