<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVarianceIndicator EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type code for Variance.
 * @subpackage Enumerations
 */
class TypeVarianceIndicator extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Early'
     * @return string 'Early'
     */
    const VALUE_EARLY = 'Early';
    /**
     * Constant for value 'Late'
     * @return string 'Late'
     */
    const VALUE_LATE = 'Late';
    /**
     * Return allowed values
     * @uses self::VALUE_EARLY
     * @uses self::VALUE_LATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EARLY,
            self::VALUE_LATE,
        ];
    }
}
