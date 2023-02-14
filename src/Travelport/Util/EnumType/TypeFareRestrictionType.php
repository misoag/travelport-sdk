<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareRestrictionType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The type of fare restriction
 * @subpackage Enumerations
 */
class TypeFareRestrictionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DayOfWeek'
     * @return string 'DayOfWeek'
     */
    const VALUE_DAY_OF_WEEK = 'DayOfWeek';
    /**
     * Constant for value 'FlightTimeOfDay'
     * @return string 'FlightTimeOfDay'
     */
    const VALUE_FLIGHT_TIME_OF_DAY = 'FlightTimeOfDay';
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
    /**
     * Return allowed values
     * @uses self::VALUE_DAY_OF_WEEK
     * @uses self::VALUE_FLIGHT_TIME_OF_DAY
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAY_OF_WEEK,
            self::VALUE_FLIGHT_TIME_OF_DAY,
            self::VALUE_BOTH,
        ];
    }
}
