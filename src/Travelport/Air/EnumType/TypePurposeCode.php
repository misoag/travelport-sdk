<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePurposeCode EnumType
 * Meta information extracted from the WSDL
 * - documentation: List of valid Purpose Codes.
 * @subpackage Enumerations
 */
class TypePurposeCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Business'
     * Meta information extracted from the WSDL
     * - documentation: Business
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Pleasure'
     * Meta information extracted from the WSDL
     * - documentation: Pleasure
     * @return string 'Pleasure'
     */
    const VALUE_PLEASURE = 'Pleasure';
    /**
     * Constant for value 'CharterService'
     * Meta information extracted from the WSDL
     * - documentation: Charter Service
     * @return string 'CharterService'
     */
    const VALUE_CHARTER_SERVICE = 'CharterService';
    /**
     * Return allowed values
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_PLEASURE
     * @uses self::VALUE_CHARTER_SERVICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUSINESS,
            self::VALUE_PLEASURE,
            self::VALUE_CHARTER_SERVICE,
        ];
    }
}
