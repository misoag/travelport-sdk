<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVehicleCategory EnumType
 * Meta information extracted from the WSDL
 * - documentation: The category of vehicle
 * @subpackage Enumerations
 */
class TypeVehicleCategory extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Car'
     * @return string 'Car'
     */
    const VALUE_CAR = 'Car';
    /**
     * Constant for value 'Van'
     * @return string 'Van'
     */
    const VALUE_VAN = 'Van';
    /**
     * Constant for value 'SUV'
     * @return string 'SUV'
     */
    const VALUE_SUV = 'SUV';
    /**
     * Constant for value 'Convertible'
     * @return string 'Convertible'
     */
    const VALUE_CONVERTIBLE = 'Convertible';
    /**
     * Constant for value 'Truck'
     * @return string 'Truck'
     */
    const VALUE_TRUCK = 'Truck';
    /**
     * Constant for value 'StationWagon'
     * @return string 'StationWagon'
     */
    const VALUE_STATION_WAGON = 'StationWagon';
    /**
     * Constant for value 'Pickup'
     * @return string 'Pickup'
     */
    const VALUE_PICKUP = 'Pickup';
    /**
     * Constant for value 'AllTerrain'
     * @return string 'AllTerrain'
     */
    const VALUE_ALL_TERRAIN = 'AllTerrain';
    /**
     * Constant for value 'Recreational'
     * @return string 'Recreational'
     */
    const VALUE_RECREATIONAL = 'Recreational';
    /**
     * Constant for value 'Sport'
     * @return string 'Sport'
     */
    const VALUE_SPORT = 'Sport';
    /**
     * Constant for value 'Special'
     * @return string 'Special'
     */
    const VALUE_SPECIAL = 'Special';
    /**
     * Constant for value 'ExtendedCabPickup'
     * @return string 'ExtendedCabPickup'
     */
    const VALUE_EXTENDED_CAB_PICKUP = 'ExtendedCabPickup';
    /**
     * Constant for value 'RegularCabPickup'
     * @return string 'RegularCabPickup'
     */
    const VALUE_REGULAR_CAB_PICKUP = 'RegularCabPickup';
    /**
     * Constant for value 'SpecialOffer'
     * @return string 'SpecialOffer'
     */
    const VALUE_SPECIAL_OFFER = 'SpecialOffer';
    /**
     * Constant for value 'Coupe'
     * @return string 'Coupe'
     */
    const VALUE_COUPE = 'Coupe';
    /**
     * Constant for value 'Monospace'
     * @return string 'Monospace'
     */
    const VALUE_MONOSPACE = 'Monospace';
    /**
     * Constant for value 'Roadster'
     * @return string 'Roadster'
     */
    const VALUE_ROADSTER = 'Roadster';
    /**
     * Constant for value 'Crossover'
     * @return string 'Crossover'
     */
    const VALUE_CROSSOVER = 'Crossover';
    /**
     * Constant for value 'Motorcycle'
     * @return string 'Motorcycle'
     */
    const VALUE_MOTORCYCLE = 'Motorcycle';
    /**
     * Constant for value 'Limo'
     * @return string 'Limo'
     */
    const VALUE_LIMO = 'Limo';
    /**
     * Constant for value 'Motorhome'
     * @return string 'Motorhome'
     */
    const VALUE_MOTORHOME = 'Motorhome';
    /**
     * Constant for value 'TwoWheelVehicle'
     * @return string 'TwoWheelVehicle'
     */
    const VALUE_TWO_WHEEL_VEHICLE = 'TwoWheelVehicle';
    /**
     * Constant for value 'CommercialVanOrTruck'
     * @return string 'CommercialVanOrTruck'
     */
    const VALUE_COMMERCIAL_VAN_OR_TRUCK = 'CommercialVanOrTruck';
    /**
     * Return allowed values
     * @uses self::VALUE_CAR
     * @uses self::VALUE_VAN
     * @uses self::VALUE_SUV
     * @uses self::VALUE_CONVERTIBLE
     * @uses self::VALUE_TRUCK
     * @uses self::VALUE_STATION_WAGON
     * @uses self::VALUE_PICKUP
     * @uses self::VALUE_ALL_TERRAIN
     * @uses self::VALUE_RECREATIONAL
     * @uses self::VALUE_SPORT
     * @uses self::VALUE_SPECIAL
     * @uses self::VALUE_EXTENDED_CAB_PICKUP
     * @uses self::VALUE_REGULAR_CAB_PICKUP
     * @uses self::VALUE_SPECIAL_OFFER
     * @uses self::VALUE_COUPE
     * @uses self::VALUE_MONOSPACE
     * @uses self::VALUE_ROADSTER
     * @uses self::VALUE_CROSSOVER
     * @uses self::VALUE_MOTORCYCLE
     * @uses self::VALUE_LIMO
     * @uses self::VALUE_MOTORHOME
     * @uses self::VALUE_TWO_WHEEL_VEHICLE
     * @uses self::VALUE_COMMERCIAL_VAN_OR_TRUCK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CAR,
            self::VALUE_VAN,
            self::VALUE_SUV,
            self::VALUE_CONVERTIBLE,
            self::VALUE_TRUCK,
            self::VALUE_STATION_WAGON,
            self::VALUE_PICKUP,
            self::VALUE_ALL_TERRAIN,
            self::VALUE_RECREATIONAL,
            self::VALUE_SPORT,
            self::VALUE_SPECIAL,
            self::VALUE_EXTENDED_CAB_PICKUP,
            self::VALUE_REGULAR_CAB_PICKUP,
            self::VALUE_SPECIAL_OFFER,
            self::VALUE_COUPE,
            self::VALUE_MONOSPACE,
            self::VALUE_ROADSTER,
            self::VALUE_CROSSOVER,
            self::VALUE_MOTORCYCLE,
            self::VALUE_LIMO,
            self::VALUE_MOTORHOME,
            self::VALUE_TWO_WHEEL_VEHICLE,
            self::VALUE_COMMERCIAL_VAN_OR_TRUCK,
        ];
    }
}
