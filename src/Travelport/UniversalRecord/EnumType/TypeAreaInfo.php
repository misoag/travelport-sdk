<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAreaInfo EnumType
 * Meta information extracted from the WSDL
 * - documentation: The type of area category, such as AirportMain, AirportSecondary.
 * @subpackage Enumerations
 */
class TypeAreaInfo extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AirportMain'
     * @return string 'AirportMain'
     */
    const VALUE_AIRPORT_MAIN = 'AirportMain';
    /**
     * Constant for value 'AirportSecondary'
     * @return string 'AirportSecondary'
     */
    const VALUE_AIRPORT_SECONDARY = 'AirportSecondary';
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
     * Constant for value 'RailwayStation'
     * @return string 'RailwayStation'
     */
    const VALUE_RAILWAY_STATION = 'RailwayStation';
    /**
     * Return allowed values
     * @uses self::VALUE_AIRPORT_MAIN
     * @uses self::VALUE_AIRPORT_SECONDARY
     * @uses self::VALUE_CITY_CENTER_DOWNTOWN
     * @uses self::VALUE_EAST_OF_CITY_CENTER
     * @uses self::VALUE_SOUTH_OF_CITY_CENTER
     * @uses self::VALUE_WEST_OF_CITY_CENTER
     * @uses self::VALUE_NORTH_OF_CITY_CENTER
     * @uses self::VALUE_PORT_OR_FERRY
     * @uses self::VALUE_NEAR_RESORT
     * @uses self::VALUE_RAILWAY_STATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AIRPORT_MAIN,
            self::VALUE_AIRPORT_SECONDARY,
            self::VALUE_CITY_CENTER_DOWNTOWN,
            self::VALUE_EAST_OF_CITY_CENTER,
            self::VALUE_SOUTH_OF_CITY_CENTER,
            self::VALUE_WEST_OF_CITY_CENTER,
            self::VALUE_NORTH_OF_CITY_CENTER,
            self::VALUE_PORT_OR_FERRY,
            self::VALUE_NEAR_RESORT,
            self::VALUE_RAILWAY_STATION,
        ];
    }
}
