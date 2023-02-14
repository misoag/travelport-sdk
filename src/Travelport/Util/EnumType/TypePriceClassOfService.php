<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePriceClassOfService EnumType
 * @subpackage Enumerations
 */
class TypePriceClassOfService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ClassBooked'
     * @return string 'ClassBooked'
     */
    const VALUE_CLASS_BOOKED = 'ClassBooked';
    /**
     * Constant for value 'LowestClass'
     * @return string 'LowestClass'
     */
    const VALUE_LOWEST_CLASS = 'LowestClass';
    /**
     * Return allowed values
     * @uses self::VALUE_CLASS_BOOKED
     * @uses self::VALUE_LOWEST_CLASS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CLASS_BOOKED,
            self::VALUE_LOWEST_CLASS,
        ];
    }
}
