<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMCOFeeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The available Airline service fee types for an MCO
 * @subpackage Enumerations
 */
class TypeMCOFeeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CURRENTLY'
     * @return string 'CURRENTLY'
     */
    const VALUE_CURRENTLY = 'CURRENTLY';
    /**
     * Constant for value 'UNDEFINED'
     * @return string 'UNDEFINED'
     */
    const VALUE_UNDEFINED = 'UNDEFINED';
    /**
     * Return allowed values
     * @uses self::VALUE_CURRENTLY
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CURRENTLY,
            self::VALUE_UNDEFINED,
        ];
    }
}
