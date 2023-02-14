<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAssessIndicator EnumType
 * Meta information extracted from the WSDL
 * - documentation: The type of AssessIndicator
 * @subpackage Enumerations
 */
class TypeAssessIndicator extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MileageAndCurrency'
     * @return string 'MileageAndCurrency'
     */
    const VALUE_MILEAGE_AND_CURRENCY = 'MileageAndCurrency';
    /**
     * Constant for value 'MileageOrCurrency'
     * @return string 'MileageOrCurrency'
     */
    const VALUE_MILEAGE_OR_CURRENCY = 'MileageOrCurrency';
    /**
     * Return allowed values
     * @uses self::VALUE_MILEAGE_AND_CURRENCY
     * @uses self::VALUE_MILEAGE_OR_CURRENCY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MILEAGE_AND_CURRENCY,
            self::VALUE_MILEAGE_OR_CURRENCY,
        ];
    }
}
