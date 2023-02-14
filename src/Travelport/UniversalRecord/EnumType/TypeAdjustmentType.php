<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAdjustmentType EnumType
 * @subpackage Enumerations
 */
class TypeAdjustmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Amount'
     * @return string 'Amount'
     */
    const VALUE_AMOUNT = 'Amount';
    /**
     * Constant for value 'Percentage'
     * @return string 'Percentage'
     */
    const VALUE_PERCENTAGE = 'Percentage';
    /**
     * Return allowed values
     * @uses self::VALUE_AMOUNT
     * @uses self::VALUE_PERCENTAGE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AMOUNT,
            self::VALUE_PERCENTAGE,
        ];
    }
}
