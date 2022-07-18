<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Flyweight\ModalExample;

class ModalConfiguration
{
    /**
     * @param int $width
     * @param int $height
     * @param bool $autoClose
     */
    public function __construct(
        private int $width,
        private int $height,
        private bool $autoClose
    )
    {
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return bool
     */
    public function isAutoClose(): bool
    {
        return $this->autoClose;
    }
}