<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProduct EnumType
 * Meta information extracted from the WSDL
 * - documentation: Available product types
 * @subpackage Enumerations
 */
class TypeProduct extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Air'
     * @return string 'Air'
     */
    const VALUE_AIR = 'Air';
    /**
     * Constant for value 'Vehicle'
     * @return string 'Vehicle'
     */
    const VALUE_VEHICLE = 'Vehicle';
    /**
     * Constant for value 'Hotel'
     * @return string 'Hotel'
     */
    const VALUE_HOTEL = 'Hotel';
    /**
     * Constant for value 'Rail'
     * @return string 'Rail'
     */
    const VALUE_RAIL = 'Rail';
    /**
     * Constant for value 'Cruise'
     * @return string 'Cruise'
     */
    const VALUE_CRUISE = 'Cruise';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_AIR
     * @uses self::VALUE_VEHICLE
     * @uses self::VALUE_HOTEL
     * @uses self::VALUE_RAIL
     * @uses self::VALUE_CRUISE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AIR,
            self::VALUE_VEHICLE,
            self::VALUE_HOTEL,
            self::VALUE_RAIL,
            self::VALUE_CRUISE,
            self::VALUE_OTHER,
        ];
    }
}
