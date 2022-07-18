<?php

use DesignPatternsPhp8\Structural\Flyweight\ModalExample\ModalStack;

require_once __DIR__ . '/../../../../bootstrap.php';

$modalStack = new ModalStack();

$modalStack
    ->addModal(
        title: 'List of images',
        body: '...',
        width: 200,
        height: 600,
        autoClose: false
    )
    ->addModal(
        title: 'List of videos',
        body: '...',
        width: 200,
        height: 600,
        autoClose: false
    )
    ->addModal(
        title: 'List of audios',
        body: '...',
        width: 400,
        height: 450,
        autoClose: false
    );