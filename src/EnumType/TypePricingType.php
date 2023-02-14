<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePricingType EnumType
 * @subpackage Enumerations
 */
class TypePricingType extends AbstractStructEnumBase
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
     * Constant for value 'LowestQuote'
     * @return string 'LowestQuote'
     */
    const VALUE_LOWEST_QUOTE = 'LowestQuote';
    /**
     * Return allowed values
     * @uses self::VALUE_CLASS_BOOKED
     * @uses self::VALUE_LOWEST_CLASS
     * @uses self::VALUE_LOWEST_QUOTE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CLASS_BOOKED,
            self::VALUE_LOWEST_CLASS,
            self::VALUE_LOWEST_QUOTE,
        ];
    }
}
