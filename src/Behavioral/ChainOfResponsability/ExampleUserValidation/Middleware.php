<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation;

abstract class Middleware
{
    /**
     * @var Middleware
     */
    private Middleware $next;

    /**
     * @param Middleware $next
     * @return Middleware
     */
    public function link(Middleware $next): Middleware
    {
        $this->next = $next;

        return $next;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function check(User $user): bool
    {
        if (!isset($this->next)) {
            return true;
        }
        return $this->next->check(user: $user);
    }
}