<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVehicleLocation EnumType
 * Meta information extracted from the WSDL
 * - documentation: The type of location requested, such as resort, city center.
 * @subpackage Enumerations
 */
class TypeVehicleLocation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Terminal'
     * @return string 'Terminal'
     */
    const VALUE_TERMINAL = 'Terminal';
    /**
     * Constant for value 'ShuttleOnAirport'
     * @return string 'ShuttleOnAirport'
     */
    const VALUE_SHUTTLE_ON_AIRPORT = 'ShuttleOnAirport';
    /**
     * Constant for value 'ShuttleOffAirport'
     * @return string 'ShuttleOffAirport'
     */
    const VALUE_SHUTTLE_OFF_AIRPORT = 'ShuttleOffAirport';
    /**
     * Constant for value 'RailwayStation'
     * @return string 'RailwayStation'
     */
    const VALUE_RAILWAY_STATION = 'RailwayStation';
    /**
     * Constant for value 'Hotel'
     * @return string 'Hotel'
     */
    const VALUE_HOTEL = 'Hotel';
    /**
     * Constant for value 'CarDealer'
     * @return string 'CarDealer'
     */
    const VALUE_CAR_DEALER = 'CarDealer';
    /**
     * Constant for value 'CityCenterDowntown'
     * @return string 'CityCenterDowntown'
     */
    const VALUE_CITY_CENTER_DOWNTOWN = 'CityCenterDowntown';
    /**
     * Constant for value 'EastOfCityCenter'
     * @return string 'EastOfCityCenter'
     */
    const VALUE_EAST_OF_CITY_CENTER = 'EastOfCityCenter';
    /**
     * Constant for value 'SouthOfCityCenter'
     * @return string 'SouthOfCityCenter'
     */
    const VALUE_SOUTH_OF_CITY_CENTER = 'SouthOfCityCenter';
    /**
     * Constant for value 'WestOfCityCenter'
     * @return string 'WestOfCityCenter'
     */
    const VALUE_WEST_OF_CITY_CENTER = 'WestOfCityCenter';
    /**
     * Constant for value 'NorthOfCityCenter'
     * @return string 'NorthOfCityCenter'
     */
    const VALUE_NORTH_OF_CITY_CENTER = 'NorthOfCityCenter';
    /**
     * Constant for value 'PortOrFerry'
     * @return string 'PortOrFerry'
     */
    const VALUE_PORT_OR_FERRY = 'PortOrFerry';
    /**
     * Constant for value 'NearResort'
     * @return string 'NearResort'
     */
    const VALUE_NEAR_RESORT = 'NearResort';
    /**
     * Constant for value 'Airport'
     * @return string 'Airport'
     */
    const VALUE_AIRPORT = 'Airport';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_TERMINAL
     * @uses self::VALUE_SHUTTLE_ON_AIRPORT
     * @uses self::VALUE_SHUTTLE_OFF_AIRPORT
     * @uses self::VALUE_RAILWAY_STATION
     * @uses self::VALUE_HOTEL
     * @uses self::VALUE_CAR_DEALER
     * @uses self::VALUE_CITY_CENTER_DOWNTOWN
     * @uses self::VALUE_EAST_OF_CITY_CENTER
     * @uses self::VALUE_SOUTH_OF_CITY_CENTER
     * @uses self::VALUE_WEST_OF_CITY_CENTER
     * @uses self::VALUE_NORTH_OF_CITY_CENTER
     * @uses self::VALUE_PORT_OR_FERRY
     * @uses self::VALUE_NEAR_RESORT
     * @uses self::VALUE_AIRPORT
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TERMINAL,
            self::VALUE_SHUTTLE_ON_AIRPORT,
            self::VALUE_SHUTTLE_OFF_AIRPORT,
            self::VALUE_RAILWAY_STATION,
            self::VALUE_HOTEL,
            self::VALUE_CAR_DEALER,
            self::VALUE_CITY_CENTER_DOWNTOWN,
            self::VALUE_EAST_OF_CITY_CENTER,
            self::VALUE_SOUTH_OF_CITY_CENTER,
            self::VALUE_WEST_OF_CITY_CENTER,
            self::VALUE_NORTH_OF_CITY_CENTER,
            self::VALUE_PORT_OR_FERRY,
            self::VALUE_NEAR_RESORT,
            self::VALUE_AIRPORT,
            self::VALUE_UNKNOWN,
        ];
    }
}
