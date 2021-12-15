<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Proxy\ExampleGeocode;

interface Geocoder
{
    /**
     * @param float $latitude
     * @param float $longitude
     * @return string
     */
    public function getAddress(float $latitude, float $longitude): string;
}