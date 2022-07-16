<?php
declare(strict_types=1);


use DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation\CheckPasswordMiddleware;
use DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation\EnabledAccountMiddleware;
use DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation\LastLoginCheckerMiddleware;
use DesignPatternsPhp8\Behavioral\ChainOfResponsability\ExampleUserValidation\User;

require_once __DIR__ . '/../../../../bootstrap.php';


$enabledAccountMiddleware = new EnabledAccountMiddleware();

$enabledAccountMiddleware
    ->link(new CheckPasswordMiddleware())
    ->link(new LastLoginCheckerMiddleware());

$enabledAccountMiddleware->check(
    new User(
        emailAddress: 'something@service.ext',
        password: '123456'
    )
);