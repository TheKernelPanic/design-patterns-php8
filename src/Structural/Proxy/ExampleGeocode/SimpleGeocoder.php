<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Proxy\ExampleGeocode;

class SimpleGeocoder implements Geocoder
{
    /**
     * @param float $latitude
     * @param float $longitude
     * @return string
     */
    public function getAddress(float $latitude, float $longitude): string
    {
        echo "Fetch data from Http request... \n";

        return 'P.O. Box 283 8562 Fusce Rd. Frederick Nebraska 20620 (372) 587-2335';
    }
}