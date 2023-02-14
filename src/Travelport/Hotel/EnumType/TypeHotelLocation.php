<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeHotelLocation EnumType
 * @subpackage Enumerations
 */
class TypeHotelLocation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'City'
     * @return string 'City'
     */
    const VALUE_CITY = 'City';
    /**
     * Constant for value 'Airport'
     * @return string 'Airport'
     */
    const VALUE_AIRPORT = 'Airport';
    /**
     * Return allowed values
     * @uses self::VALUE_CITY
     * @uses self::VALUE_AIRPORT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CITY,
            self::VALUE_AIRPORT,
        ];
    }
}
