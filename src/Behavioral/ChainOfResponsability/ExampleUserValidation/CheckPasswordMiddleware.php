<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation;

final class CheckPasswordMiddleware extends Middleware
{
    /**
     * @param User $user
     * @return bool
     */
    public function check(User $user): bool
    {
        echo "Check password \n";

        return parent::check(user: $user);
    }
}