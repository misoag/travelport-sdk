<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeCarrierCode EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the type of booking codes (Primary or Secondary)
 * @subpackage Enumerations
 */
class TypeCarrierCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Primary'
     * @return string 'Primary'
     */
    const VALUE_PRIMARY = 'Primary';
    /**
     * Constant for value 'Secondary'
     * @return string 'Secondary'
     */
    const VALUE_SECONDARY = 'Secondary';
    /**
     * Return allowed values
     * @uses self::VALUE_PRIMARY
     * @uses self::VALUE_SECONDARY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRIMARY,
            self::VALUE_SECONDARY,
        ];
    }
}
