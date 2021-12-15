<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Proxy\ExampleGeocode;

use function md5, array_key_exists;

class CachingGeocoder implements Geocoder
{
    /**
     * @var array<string>
     */
    private array $cache;

    /**
     * @param SimpleGeocoder $geocoder
     */
    public function __construct(
        private SimpleGeocoder $geocoder
    ) {
        $this->cache = [];
    }

    /**
     * @param float $latitude
     * @param float $longitude
     * @return string
     */
    public function getAddress(float $latitude, float $longitude): string
    {
        $digest = md5("$latitude}{$longitude}");

        if (!array_key_exists($digest, $this->cache)) {
            echo "Write data into cache \n";
            $this->cache[$digest] = $this->geocoder->getAddress(
                latitude: $latitude,
                longitude: $longitude
            );
        } else {
            echo "Fetch data from cache \n";
        }
        return $this->cache[$digest];
    }
}