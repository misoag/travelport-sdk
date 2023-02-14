<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeBillingDetailsDataType EnumType
 * @subpackage Enumerations
 */
class TypeBillingDetailsDataType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Alpha'
     * @return string 'Alpha'
     */
    const VALUE_ALPHA = 'Alpha';
    /**
     * Constant for value 'Numeric'
     * @return string 'Numeric'
     */
    const VALUE_NUMERIC = 'Numeric';
    /**
     * Constant for value 'AlphaNumeric'
     * @return string 'AlphaNumeric'
     */
    const VALUE_ALPHA_NUMERIC = 'AlphaNumeric';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Return allowed values
     * @uses self::VALUE_ALPHA
     * @uses self::VALUE_NUMERIC
     * @uses self::VALUE_ALPHA_NUMERIC
     * @uses self::VALUE_DATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALPHA,
            self::VALUE_NUMERIC,
            self::VALUE_ALPHA_NUMERIC,
            self::VALUE_DATE,
        ];
    }
}
