<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVarianceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type code for Variance.
 * @subpackage Enumerations
 */
class TypeVarianceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Actual'
     * @return string 'Actual'
     */
    const VALUE_ACTUAL = 'Actual';
    /**
     * Constant for value 'Estimated'
     * @return string 'Estimated'
     */
    const VALUE_ESTIMATED = 'Estimated';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'Diversion'
     * @return string 'Diversion'
     */
    const VALUE_DIVERSION = 'Diversion';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTUAL
     * @uses self::VALUE_ESTIMATED
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_DIVERSION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTUAL,
            self::VALUE_ESTIMATED,
            self::VALUE_CANCELED,
            self::VALUE_DIVERSION,
        ];
    }
}
