<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareRuleType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The valid rule types
 * @subpackage Enumerations
 */
class TypeFareRuleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'short'
     * @return string 'short'
     */
    const VALUE_SHORT = 'short';
    /**
     * Constant for value 'long'
     * @return string 'long'
     */
    const VALUE_LONG = 'long';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SHORT
     * @uses self::VALUE_LONG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_SHORT,
            self::VALUE_LONG,
        ];
    }
}
