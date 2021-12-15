<?php

use DesignPatternsPhp8\Structural\Proxy\ExampleGeocode\CachingGeocoder;
use DesignPatternsPhp8\Structural\Proxy\ExampleGeocode\Geocoder;
use DesignPatternsPhp8\Structural\Proxy\ExampleGeocode\SimpleGeocoder;

require_once __DIR__ . '/../../../../bootstrap.php';

function clientCode(Geocoder $geocoder) {
    $geocoder->getAddress(latitude: 40.416775, longitude: -3.703790);
    $geocoder->getAddress(latitude: 40.416775, longitude: -3.703790);
}

$simpleGeocoder = new SimpleGeocoder();

clientCode(geocoder: $simpleGeocoder);

echo "\n\n";

$cachingGeocoder = new CachingGeocoder(geocoder: $simpleGeocoder);
clientCode(geocoder: $cachingGeocoder);