<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeStayUnit EnumType
 * Meta information extracted from the WSDL
 * - documentation: Units for the Length of Stay
 * @subpackage Enumerations
 */
class TypeStayUnit extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Minutes'
     * @return string 'Minutes'
     */
    const VALUE_MINUTES = 'Minutes';
    /**
     * Constant for value 'Hours'
     * @return string 'Hours'
     */
    const VALUE_HOURS = 'Hours';
    /**
     * Constant for value 'Days'
     * @return string 'Days'
     */
    const VALUE_DAYS = 'Days';
    /**
     * Constant for value 'Months'
     * @return string 'Months'
     */
    const VALUE_MONTHS = 'Months';
    /**
     * Constant for value 'Monday'
     * @return string 'Monday'
     */
    const VALUE_MONDAY = 'Monday';
    /**
     * Constant for value 'Tuesday'
     * @return string 'Tuesday'
     */
    const VALUE_TUESDAY = 'Tuesday';
    /**
     * Constant for value 'Wednesday'
     * @return string 'Wednesday'
     */
    const VALUE_WEDNESDAY = 'Wednesday';
    /**
     * Constant for value 'Thursday'
     * @return string 'Thursday'
     */
    const VALUE_THURSDAY = 'Thursday';
    /**
     * Constant for value 'Friday'
     * @return string 'Friday'
     */
    const VALUE_FRIDAY = 'Friday';
    /**
     * Constant for value 'Saturday'
     * @return string 'Saturday'
     */
    const VALUE_SATURDAY = 'Saturday';
    /**
     * Constant for value 'Sunday'
     * @return string 'Sunday'
     */
    const VALUE_SUNDAY = 'Sunday';
    /**
     * Return allowed values
     * @uses self::VALUE_MINUTES
     * @uses self::VALUE_HOURS
     * @uses self::VALUE_DAYS
     * @uses self::VALUE_MONTHS
     * @uses self::VALUE_MONDAY
     * @uses self::VALUE_TUESDAY
     * @uses self::VALUE_WEDNESDAY
     * @uses self::VALUE_THURSDAY
     * @uses self::VALUE_FRIDAY
     * @uses self::VALUE_SATURDAY
     * @uses self::VALUE_SUNDAY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MINUTES,
            self::VALUE_HOURS,
            self::VALUE_DAYS,
            self::VALUE_MONTHS,
            self::VALUE_MONDAY,
            self::VALUE_TUESDAY,
            self::VALUE_WEDNESDAY,
            self::VALUE_THURSDAY,
            self::VALUE_FRIDAY,
            self::VALUE_SATURDAY,
            self::VALUE_SUNDAY,
        ];
    }
}
