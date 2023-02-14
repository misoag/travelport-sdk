<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeTrinary EnumType
 * Meta information extracted from the WSDL
 * - documentation: Extension of boolean, that allows for unknown values.
 * @subpackage Enumerations
 */
class TypeTrinary extends AbstractStructEnumBase
{
    /**
     * Constant for value 'true'
     * @return string 'true'
     */
    const VALUE_TRUE = 'true';
    /**
     * Constant for value 'false'
     * @return string 'false'
     */
    const VALUE_FALSE = 'false';
    /**
     * Constant for value 'unknown'
     * @return string 'unknown'
     */
    const VALUE_UNKNOWN = 'unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_TRUE
     * @uses self::VALUE_FALSE
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TRUE,
            self::VALUE_FALSE,
            self::VALUE_UNKNOWN,
        ];
    }
}
