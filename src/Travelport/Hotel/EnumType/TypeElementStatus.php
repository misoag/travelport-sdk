<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeElementStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Values to specify the state of the element. "A" refers to "Add" , "M" refers to "Modified" and "C" refers to error conditions when value provided in "Key" attribute is not retained in response
 * @subpackage Enumerations
 */
class TypeElementStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Return allowed values
     * @uses self::VALUE_A
     * @uses self::VALUE_M
     * @uses self::VALUE_C
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_A,
            self::VALUE_M,
            self::VALUE_C,
        ];
    }
}
