<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeCoachClassType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Values for accommodation class.
 * @subpackage Enumerations
 */
class TypeCoachClassType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'First Class'
     * @return string 'First Class'
     */
    const VALUE_FIRST_CLASS = 'First Class';
    /**
     * Constant for value 'Standard Class'
     * @return string 'Standard Class'
     */
    const VALUE_STANDARD_CLASS = 'Standard Class';
    /**
     * Constant for value 'First and Standard Class'
     * @return string 'First and Standard Class'
     */
    const VALUE_FIRST_AND_STANDARD_CLASS = 'First and Standard Class';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_FIRST_CLASS
     * @uses self::VALUE_STANDARD_CLASS
     * @uses self::VALUE_FIRST_AND_STANDARD_CLASS
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FIRST_CLASS,
            self::VALUE_STANDARD_CLASS,
            self::VALUE_FIRST_AND_STANDARD_CLASS,
            self::VALUE_OTHER,
        ];
    }
}
