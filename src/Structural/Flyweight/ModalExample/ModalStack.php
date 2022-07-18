<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Flyweight\ModalExample;

use function get_defined_vars, implode, md5, array_key_exists;

class ModalStack
{
    /**
     * @var Modal[]
     */
    private array $stack;

    /**
     * @var array
     */
    private array $configurations;

    /**
     *
     */
    public function __construct()
    {
        $this->stack = [];
        $this->configurations = [];
    }

    /**
     * @param string $title
     * @param string $body
     * @param int $width
     * @param int $height
     * @param bool $autoClose
     * @return $this
     */
    public function addModal(
        string $title,
        string $body,
        int $width,
        int $height,
        bool $autoClose
    ): self
    {
        $configuration = $this->getConfiguration(
            width: $width,
            height: $height,
            autoClose: $autoClose
        );
        $this->stack[] = new Modal(
            title: $title,
            body: $body,
            configuration: $configuration
        );

        return $this;
    }

    /**
     * @param int $width
     * @param int $height
     * @param bool $autoClose
     * @return ModalConfiguration
     */
    private function getConfiguration(int $width, int $height, bool $autoClose): ModalConfiguration
    {
        $key = $this->getKey(configurationData: get_defined_vars());

        if (!array_key_exists($key, $this->configurations)) {
            $this->configurations[$key] = new ModalConfiguration(
                width: $width,
                height: $height,
                autoClose: $autoClose
            );
        }
        return $this->configurations[$key];
    }

    /**
     * @param array $configurationData
     * @return string
     */
    private function getKey(array $configurationData): string
    {
        return md5(implode('_', $configurationData));
    }
}