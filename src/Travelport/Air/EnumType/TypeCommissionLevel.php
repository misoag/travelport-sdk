<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeCommissionLevel EnumType
 * Meta information extracted from the WSDL
 * - documentation: ATA/IATA Standard commission level.
 * @subpackage Enumerations
 */
class TypeCommissionLevel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Recalled'
     * @return string 'Recalled'
     */
    const VALUE_RECALLED = 'Recalled';
    /**
     * Constant for value 'Fare'
     * @return string 'Fare'
     */
    const VALUE_FARE = 'Fare';
    /**
     * Constant for value 'Penalty'
     * @return string 'Penalty'
     */
    const VALUE_PENALTY = 'Penalty';
    /**
     * Return allowed values
     * @uses self::VALUE_RECALLED
     * @uses self::VALUE_FARE
     * @uses self::VALUE_PENALTY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RECALLED,
            self::VALUE_FARE,
            self::VALUE_PENALTY,
        ];
    }
}
