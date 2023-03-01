<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeTransportMode EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration of all Train Transport Modes
 * @subpackage Enumerations
 */
class TypeTransportMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Bicycle'
     * @return string 'Bicycle'
     */
    const VALUE_BICYCLE = 'Bicycle';
    /**
     * Constant for value 'Boat'
     * @return string 'Boat'
     */
    const VALUE_BOAT = 'Boat';
    /**
     * Constant for value 'Bus'
     * @return string 'Bus'
     */
    const VALUE_BUS = 'Bus';
    /**
     * Constant for value 'Cable Car'
     * @return string 'Cable Car'
     */
    const VALUE_CABLE_CAR = 'Cable Car';
    /**
     * Constant for value 'Car'
     * @return string 'Car'
     */
    const VALUE_CAR = 'Car';
    /**
     * Constant for value 'Carriage'
     * @return string 'Carriage'
     */
    const VALUE_CARRIAGE = 'Carriage';
    /**
     * Constant for value 'Courtesy car'
     * @return string 'Courtesy car'
     */
    const VALUE_COURTESY_CAR = 'Courtesy car';
    /**
     * Constant for value 'Helicopter'
     * @return string 'Helicopter'
     */
    const VALUE_HELICOPTER = 'Helicopter';
    /**
     * Constant for value 'Limousine'
     * @return string 'Limousine'
     */
    const VALUE_LIMOUSINE = 'Limousine';
    /**
     * Constant for value 'Metro'
     * @return string 'Metro'
     */
    const VALUE_METRO = 'Metro';
    /**
     * Constant for value 'Monorail'
     * @return string 'Monorail'
     */
    const VALUE_MONORAIL = 'Monorail';
    /**
     * Constant for value 'Motorbike'
     * @return string 'Motorbike'
     */
    const VALUE_MOTORBIKE = 'Motorbike';
    /**
     * Constant for value 'Pack Animal'
     * @return string 'Pack Animal'
     */
    const VALUE_PACK_ANIMAL = 'Pack Animal';
    /**
     * Constant for value 'Plane'
     * @return string 'Plane'
     */
    const VALUE_PLANE = 'Plane';
    /**
     * Constant for value 'Rental Car'
     * @return string 'Rental Car'
     */
    const VALUE_RENTAL_CAR = 'Rental Car';
    /**
     * Constant for value 'Rickshaw'
     * @return string 'Rickshaw'
     */
    const VALUE_RICKSHAW = 'Rickshaw';
    /**
     * Constant for value 'Shuttle'
     * @return string 'Shuttle'
     */
    const VALUE_SHUTTLE = 'Shuttle';
    /**
     * Constant for value 'Subway'
     * @return string 'Subway'
     */
    const VALUE_SUBWAY = 'Subway';
    /**
     * Constant for value 'Sedan Chair'
     * @return string 'Sedan Chair'
     */
    const VALUE_SEDAN_CHAIR = 'Sedan Chair';
    /**
     * Constant for value 'Taxi'
     * @return string 'Taxi'
     */
    const VALUE_TAXI = 'Taxi';
    /**
     * Constant for value 'Train'
     * @return string 'Train'
     */
    const VALUE_TRAIN = 'Train';
    /**
     * Constant for value 'Trolley'
     * @return string 'Trolley'
     */
    const VALUE_TROLLEY = 'Trolley';
    /**
     * Constant for value 'Tube'
     * @return string 'Tube'
     */
    const VALUE_TUBE = 'Tube';
    /**
     * Constant for value 'Walk'
     * @return string 'Walk'
     */
    const VALUE_WALK = 'Walk';
    /**
     * Constant for value 'Water Taxi'
     * @return string 'Water Taxi'
     */
    const VALUE_WATER_TAXI = 'Water Taxi';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Car/Rush hour'
     * @return string 'Car/Rush hour'
     */
    const VALUE_CAR_RUSH_HOUR = 'Car/Rush hour';
    /**
     * Constant for value 'Taxi/Rush hour'
     * @return string 'Taxi/Rush hour'
     */
    const VALUE_TAXI_RUSH_HOUR = 'Taxi/Rush hour';
    /**
     * Constant for value 'No Transportation'
     * @return string 'No Transportation'
     */
    const VALUE_NO_TRANSPORTATION = 'No Transportation';
    /**
     * Constant for value 'Express Train'
     * @return string 'Express Train'
     */
    const VALUE_EXPRESS_TRAIN = 'Express Train';
    /**
     * Constant for value 'Public'
     * @return string 'Public'
     */
    const VALUE_PUBLIC = 'Public';
    /**
     * Constant for value 'Ship/Ferry'
     * @return string 'Ship/Ferry'
     */
    const VALUE_SHIP_FERRY = 'Ship/Ferry';
    /**
     * Constant for value 'Underground'
     * @return string 'Underground'
     */
    const VALUE_UNDERGROUND = 'Underground';
    /**
     * Constant for value 'Tram/light rail'
     * @return string 'Tram/light rail'
     */
    const VALUE_TRAM_LIGHT_RAIL = 'Tram/light rail';
    /**
     * Constant for value 'Shared Taxi'
     * @return string 'Shared Taxi'
     */
    const VALUE_SHARED_TAXI = 'Shared Taxi';
    /**
     * Return allowed values
     * @uses self::VALUE_BICYCLE
     * @uses self::VALUE_BOAT
     * @uses self::VALUE_BUS
     * @uses self::VALUE_CABLE_CAR
     * @uses self::VALUE_CAR
     * @uses self::VALUE_CARRIAGE
     * @uses self::VALUE_COURTESY_CAR
     * @uses self::VALUE_HELICOPTER
     * @uses self::VALUE_LIMOUSINE
     * @uses self::VALUE_METRO
     * @uses self::VALUE_MONORAIL
     * @uses self::VALUE_MOTORBIKE
     * @uses self::VALUE_PACK_ANIMAL
     * @uses self::VALUE_PLANE
     * @uses self::VALUE_RENTAL_CAR
     * @uses self::VALUE_RICKSHAW
     * @uses self::VALUE_SHUTTLE
     * @uses self::VALUE_SUBWAY
     * @uses self::VALUE_SEDAN_CHAIR
     * @uses self::VALUE_TAXI
     * @uses self::VALUE_TRAIN
     * @uses self::VALUE_TROLLEY
     * @uses self::VALUE_TUBE
     * @uses self::VALUE_WALK
     * @uses self::VALUE_WATER_TAXI
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_CAR_RUSH_HOUR
     * @uses self::VALUE_TAXI_RUSH_HOUR
     * @uses self::VALUE_NO_TRANSPORTATION
     * @uses self::VALUE_EXPRESS_TRAIN
     * @uses self::VALUE_PUBLIC
     * @uses self::VALUE_SHIP_FERRY
     * @uses self::VALUE_UNDERGROUND
     * @uses self::VALUE_TRAM_LIGHT_RAIL
     * @uses self::VALUE_SHARED_TAXI
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BICYCLE,
            self::VALUE_BOAT,
            self::VALUE_BUS,
            self::VALUE_CABLE_CAR,
            self::VALUE_CAR,
            self::VALUE_CARRIAGE,
            self::VALUE_COURTESY_CAR,
            self::VALUE_HELICOPTER,
            self::VALUE_LIMOUSINE,
            self::VALUE_METRO,
            self::VALUE_MONORAIL,
            self::VALUE_MOTORBIKE,
            self::VALUE_PACK_ANIMAL,
            self::VALUE_PLANE,
            self::VALUE_RENTAL_CAR,
            self::VALUE_RICKSHAW,
            self::VALUE_SHUTTLE,
            self::VALUE_SUBWAY,
            self::VALUE_SEDAN_CHAIR,
            self::VALUE_TAXI,
            self::VALUE_TRAIN,
            self::VALUE_TROLLEY,
            self::VALUE_TUBE,
            self::VALUE_WALK,
            self::VALUE_WATER_TAXI,
            self::VALUE_OTHER,
            self::VALUE_CAR_RUSH_HOUR,
            self::VALUE_TAXI_RUSH_HOUR,
            self::VALUE_NO_TRANSPORTATION,
            self::VALUE_EXPRESS_TRAIN,
            self::VALUE_PUBLIC,
            self::VALUE_SHIP_FERRY,
            self::VALUE_UNDERGROUND,
            self::VALUE_TRAM_LIGHT_RAIL,
            self::VALUE_SHARED_TAXI,
        ];
    }
}
