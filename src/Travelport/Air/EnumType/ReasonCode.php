<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReasonCode EnumType
 * @subpackage Enumerations
 */
class ReasonCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'Schedule'
     * @return string 'Schedule'
     */
    const VALUE_SCHEDULE = 'Schedule';
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
    /**
     * Return allowed values
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_SCHEDULE
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRICE,
            self::VALUE_SCHEDULE,
            self::VALUE_BOTH,
        ];
    }
}
