<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for vehicleRateModifiers EnumType
 * Meta information extracted from the WSDL
 * - documentation: Rate modifiers for the vehicle
 * @subpackage Enumerations
 */
class VehicleRateModifiers extends AbstractStructEnumBase
{
    /**
     * Constant for value 'G'
     * @return string 'G'
     */
    const VALUE_G = 'G';
    /**
     * Constant for value 'Q'
     * @return string 'Q'
     */
    const VALUE_Q = 'Q';
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
    /**
     * Return allowed values
     * @uses self::VALUE_G
     * @uses self::VALUE_Q
     * @uses self::VALUE_T
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_G,
            self::VALUE_Q,
            self::VALUE_T,
        ];
    }
}
