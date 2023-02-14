<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeReqSeat EnumType
 * @subpackage Enumerations
 */
class TypeReqSeat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Any'
     * @return string 'Any'
     */
    const VALUE_ANY = 'Any';
    /**
     * Constant for value 'Aisle'
     * @return string 'Aisle'
     */
    const VALUE_AISLE = 'Aisle';
    /**
     * Constant for value 'Bulkhead'
     * @return string 'Bulkhead'
     */
    const VALUE_BULKHEAD = 'Bulkhead';
    /**
     * Constant for value 'Exit'
     * @return string 'Exit'
     */
    const VALUE_EXIT = 'Exit';
    /**
     * Constant for value 'Window'
     * @return string 'Window'
     */
    const VALUE_WINDOW = 'Window';
    /**
     * Constant for value 'Middle'
     * @return string 'Middle'
     */
    const VALUE_MIDDLE = 'Middle';
    /**
     * Return allowed values
     * @uses self::VALUE_ANY
     * @uses self::VALUE_AISLE
     * @uses self::VALUE_BULKHEAD
     * @uses self::VALUE_EXIT
     * @uses self::VALUE_WINDOW
     * @uses self::VALUE_MIDDLE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ANY,
            self::VALUE_AISLE,
            self::VALUE_BULKHEAD,
            self::VALUE_EXIT,
            self::VALUE_WINDOW,
            self::VALUE_MIDDLE,
        ];
    }
}
