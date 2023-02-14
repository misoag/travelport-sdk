<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeCommissionType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of possible commission.
 * @subpackage Enumerations
 */
class TypeCommissionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Flat'
     * @return string 'Flat'
     */
    const VALUE_FLAT = 'Flat';
    /**
     * Constant for value 'PercentBase'
     * @return string 'PercentBase'
     */
    const VALUE_PERCENT_BASE = 'PercentBase';
    /**
     * Constant for value 'PercentTotal'
     * @return string 'PercentTotal'
     */
    const VALUE_PERCENT_TOTAL = 'PercentTotal';
    /**
     * Return allowed values
     * @uses self::VALUE_FLAT
     * @uses self::VALUE_PERCENT_BASE
     * @uses self::VALUE_PERCENT_TOTAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FLAT,
            self::VALUE_PERCENT_BASE,
            self::VALUE_PERCENT_TOTAL,
        ];
    }
}
