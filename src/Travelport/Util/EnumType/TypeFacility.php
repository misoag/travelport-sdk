<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFacility EnumType
 * @subpackage Enumerations
 */
class TypeFacility extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Seat'
     * @return string 'Seat'
     */
    const VALUE_SEAT = 'Seat';
    /**
     * Constant for value 'Aisle'
     * @return string 'Aisle'
     */
    const VALUE_AISLE = 'Aisle';
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_SEAT
     * @uses self::VALUE_AISLE
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEAT,
            self::VALUE_AISLE,
            self::VALUE_OPEN,
            self::VALUE_UNKNOWN,
        ];
    }
}
