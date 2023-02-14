<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareDiscount EnumType
 * Meta information extracted from the WSDL
 * - documentation: Fare Discount Calculation Method
 * @subpackage Enumerations
 */
class TypeFareDiscount extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BaseReCalcUSTaxes'
     * @return string 'BaseReCalcUSTaxes'
     */
    const VALUE_BASE_RE_CALC_USTAXES = 'BaseReCalcUSTaxes';
    /**
     * Constant for value 'BaseNoReCalcUSTaxes'
     * @return string 'BaseNoReCalcUSTaxes'
     */
    const VALUE_BASE_NO_RE_CALC_USTAXES = 'BaseNoReCalcUSTaxes';
    /**
     * Constant for value 'BaseTax'
     * @return string 'BaseTax'
     */
    const VALUE_BASE_TAX = 'BaseTax';
    /**
     * Return allowed values
     * @uses self::VALUE_BASE_RE_CALC_USTAXES
     * @uses self::VALUE_BASE_NO_RE_CALC_USTAXES
     * @uses self::VALUE_BASE_TAX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BASE_RE_CALC_USTAXES,
            self::VALUE_BASE_NO_RE_CALC_USTAXES,
            self::VALUE_BASE_TAX,
        ];
    }
}
