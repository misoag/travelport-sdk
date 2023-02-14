<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeCommissionModifier EnumType
 * Meta information extracted from the WSDL
 * - documentation: Optional commission modifier.
 * @subpackage Enumerations
 */
class TypeCommissionModifier extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FarePercent'
     * Meta information extracted from the WSDL
     * - documentation: Commission percentage applied to the fare
     * @return string 'FarePercent'
     */
    const VALUE_FARE_PERCENT = 'FarePercent';
    /**
     * Constant for value 'FareAmount'
     * Meta information extracted from the WSDL
     * - documentation: Commission amount applied to the fare
     * @return string 'FareAmount'
     */
    const VALUE_FARE_AMOUNT = 'FareAmount';
    /**
     * Constant for value 'CommissionAmount'
     * Meta information extracted from the WSDL
     * - documentation: Specific commission amount to be applied
     * @return string 'CommissionAmount'
     */
    const VALUE_COMMISSION_AMOUNT = 'CommissionAmount';
    /**
     * Constant for value 'LessStandardCommission'
     * Meta information extracted from the WSDL
     * - documentation: Indicates commission percentage applied to the fare less the standard commission
     * @return string 'LessStandardCommission'
     */
    const VALUE_LESS_STANDARD_COMMISSION = 'LessStandardCommission';
    /**
     * Constant for value 'StandardPlusSupplementaryPercent'
     * Meta information extracted from the WSDL
     * - documentation: Indicates commission percentage includes standard and supplementary commission
     * @return string 'StandardPlusSupplementaryPercent'
     */
    const VALUE_STANDARD_PLUS_SUPPLEMENTARY_PERCENT = 'StandardPlusSupplementaryPercent';
    /**
     * Constant for value 'SupplementaryPercent'
     * Meta information extracted from the WSDL
     * - documentation: Supplementary commission percent which is applied to the fare
     * @return string 'SupplementaryPercent'
     */
    const VALUE_SUPPLEMENTARY_PERCENT = 'SupplementaryPercent';
    /**
     * Constant for value 'SupplementaryAmount'
     * Meta information extracted from the WSDL
     * - documentation: Supplementary commission amount which is applied to the fare
     * @return string 'SupplementaryAmount'
     */
    const VALUE_SUPPLEMENTARY_AMOUNT = 'SupplementaryAmount';
    /**
     * Return allowed values
     * @uses self::VALUE_FARE_PERCENT
     * @uses self::VALUE_FARE_AMOUNT
     * @uses self::VALUE_COMMISSION_AMOUNT
     * @uses self::VALUE_LESS_STANDARD_COMMISSION
     * @uses self::VALUE_STANDARD_PLUS_SUPPLEMENTARY_PERCENT
     * @uses self::VALUE_SUPPLEMENTARY_PERCENT
     * @uses self::VALUE_SUPPLEMENTARY_AMOUNT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FARE_PERCENT,
            self::VALUE_FARE_AMOUNT,
            self::VALUE_COMMISSION_AMOUNT,
            self::VALUE_LESS_STANDARD_COMMISSION,
            self::VALUE_STANDARD_PLUS_SUPPLEMENTARY_PERCENT,
            self::VALUE_SUPPLEMENTARY_PERCENT,
            self::VALUE_SUPPLEMENTARY_AMOUNT,
        ];
    }
}
