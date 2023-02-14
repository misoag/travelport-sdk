<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProfileApplicability EnumType
 * Meta information extracted from the WSDL
 * - documentation: The applicability of the profile or profile template value.
 * @subpackage Enumerations
 */
class TypeProfileApplicability extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Always'
     * @return string 'Always'
     */
    const VALUE_ALWAYS = 'Always';
    /**
     * Constant for value 'Optional'
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Never'
     * @return string 'Never'
     */
    const VALUE_NEVER = 'Never';
    /**
     * Return allowed values
     * @uses self::VALUE_ALWAYS
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_NEVER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALWAYS,
            self::VALUE_OPTIONAL,
            self::VALUE_NEVER,
        ];
    }
}
