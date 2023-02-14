<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeReportingType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The valid reporting types
 * @subpackage Enumerations
 */
class TypeReportingType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AvailabilityFailure'
     * @return string 'AvailabilityFailure'
     */
    const VALUE_AVAILABILITY_FAILURE = 'AvailabilityFailure';
    /**
     * Constant for value 'PriceDiscrepancies'
     * @return string 'PriceDiscrepancies'
     */
    const VALUE_PRICE_DISCREPANCIES = 'PriceDiscrepancies';
    /**
     * Constant for value 'MarriageDiscrepancies'
     * @return string 'MarriageDiscrepancies'
     */
    const VALUE_MARRIAGE_DISCREPANCIES = 'MarriageDiscrepancies';
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'ScheduleDiscrepancies'
     * @return string 'ScheduleDiscrepancies'
     */
    const VALUE_SCHEDULE_DISCREPANCIES = 'ScheduleDiscrepancies';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABILITY_FAILURE
     * @uses self::VALUE_PRICE_DISCREPANCIES
     * @uses self::VALUE_MARRIAGE_DISCREPANCIES
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_SCHEDULE_DISCREPANCIES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABILITY_FAILURE,
            self::VALUE_PRICE_DISCREPANCIES,
            self::VALUE_MARRIAGE_DISCREPANCIES,
            self::VALUE_SUCCESS,
            self::VALUE_SCHEDULE_DISCREPANCIES,
        ];
    }
}
