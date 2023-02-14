<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProviderToken EnumType
 * Meta information extracted from the WSDL
 * - documentation: List of known hosts with terminal access
 * @subpackage Enumerations
 */
class TypeProviderToken extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sabre'
     * @return string 'Sabre'
     */
    const VALUE_SABRE = 'Sabre';
    /**
     * Return allowed values
     * @uses self::VALUE_SABRE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SABRE,
        ];
    }
}
