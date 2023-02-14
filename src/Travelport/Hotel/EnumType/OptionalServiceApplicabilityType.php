<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OptionalServiceApplicabilityType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The different levels at which an optional service may be applied
 * @subpackage Enumerations
 */
class OptionalServiceApplicabilityType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Itinerary'
     * @return string 'Itinerary'
     */
    const VALUE_ITINERARY = 'Itinerary';
    /**
     * Constant for value 'Passenger'
     * @return string 'Passenger'
     */
    const VALUE_PASSENGER = 'Passenger';
    /**
     * Constant for value 'Segment'
     * @return string 'Segment'
     */
    const VALUE_SEGMENT = 'Segment';
    /**
     * Constant for value 'PassengerSegment'
     * @return string 'PassengerSegment'
     */
    const VALUE_PASSENGER_SEGMENT = 'PassengerSegment';
    /**
     * Constant for value 'PassengerOD'
     * Meta information extracted from the WSDL
     * - documentation: PassengerOD stands for passenger origin destination.
     * @return string 'PassengerOD'
     */
    const VALUE_PASSENGER_OD = 'PassengerOD';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_ITINERARY
     * @uses self::VALUE_PASSENGER
     * @uses self::VALUE_SEGMENT
     * @uses self::VALUE_PASSENGER_SEGMENT
     * @uses self::VALUE_PASSENGER_OD
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITINERARY,
            self::VALUE_PASSENGER,
            self::VALUE_SEGMENT,
            self::VALUE_PASSENGER_SEGMENT,
            self::VALUE_PASSENGER_OD,
            self::VALUE_OTHER,
        ];
    }
}
