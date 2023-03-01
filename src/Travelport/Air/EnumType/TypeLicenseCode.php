<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeLicenseCode EnumType
 * Meta information extracted from the WSDL
 * - documentation: The type of license assigned to an agent.
 * @subpackage Enumerations
 */
class TypeLicenseCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Standard Plus'
     * @return string 'Standard Plus'
     */
    const VALUE_STANDARD_PLUS = 'Standard Plus';
    /**
     * Constant for value 'Enterprise'
     * @return string 'Enterprise'
     */
    const VALUE_ENTERPRISE = 'Enterprise';
    /**
     * Constant for value 'TE Only'
     * @return string 'TE Only'
     */
    const VALUE_TE_ONLY = 'TE Only';
    /**
     * Constant for value 'uAPI'
     * @return string 'uAPI'
     */
    const VALUE_U_API = 'uAPI';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_STANDARD_PLUS
     * @uses self::VALUE_ENTERPRISE
     * @uses self::VALUE_TE_ONLY
     * @uses self::VALUE_U_API
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDARD,
            self::VALUE_STANDARD_PLUS,
            self::VALUE_ENTERPRISE,
            self::VALUE_TE_ONLY,
            self::VALUE_U_API,
        ];
    }
}
