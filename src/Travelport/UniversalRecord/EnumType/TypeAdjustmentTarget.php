<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAdjustmentTarget EnumType
 * @subpackage Enumerations
 */
class TypeAdjustmentTarget extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Base'
     * @return string 'Base'
     */
    const VALUE_BASE = 'Base';
    /**
     * Constant for value 'Total'
     * @return string 'Total'
     */
    const VALUE_TOTAL = 'Total';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_BASE
     * @uses self::VALUE_TOTAL
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BASE,
            self::VALUE_TOTAL,
            self::VALUE_OTHER,
        ];
    }
}
