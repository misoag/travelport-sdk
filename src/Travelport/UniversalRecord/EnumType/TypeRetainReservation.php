<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRetainReservation EnumType
 * Meta information extracted from the WSDL
 * - documentation: Retain the Reservation (do not cancel) in the the event of a schedule or price change
 * @subpackage Enumerations
 */
class TypeRetainReservation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Schedule'
     * @return string 'Schedule'
     */
    const VALUE_SCHEDULE = 'Schedule';
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SCHEDULE
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_SCHEDULE,
            self::VALUE_PRICE,
            self::VALUE_BOTH,
        ];
    }
}
