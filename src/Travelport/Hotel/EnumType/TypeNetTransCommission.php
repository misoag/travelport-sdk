<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeNetTransCommission EnumType
 * Meta information extracted from the WSDL
 * - documentation: X stands for Unknown. To support any other value than A,B,C and P. | P stands for Payment Bureau | C stands for Poor. | B stands for Good. | A stands for Excellent. | Type to support net trans commission indicator. Supported for 1G
 * and 1V provider.
 * @subpackage Enumerations
 */
class TypeNetTransCommission extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'X'
     * @return string 'X'
     */
    const VALUE_X = 'X';
    /**
     * Return allowed values
     * @uses self::VALUE_A
     * @uses self::VALUE_B
     * @uses self::VALUE_C
     * @uses self::VALUE_P
     * @uses self::VALUE_X
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_A,
            self::VALUE_B,
            self::VALUE_C,
            self::VALUE_P,
            self::VALUE_X,
        ];
    }
}
