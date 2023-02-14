<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeBooking EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of booking
 * @subpackage Enumerations
 */
class TypeBooking extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SSR'
     * @return string 'SSR'
     */
    const VALUE_SSR = 'SSR';
    /**
     * Constant for value 'Auxillary Segment'
     * @return string 'Auxillary Segment'
     */
    const VALUE_AUXILLARY_SEGMENT = 'Auxillary Segment';
    /**
     * Constant for value 'Available for Display/Pricing'
     * @return string 'Available for Display/Pricing'
     */
    const VALUE_AVAILABLE_FOR_DISPLAY_PRICING = 'Available for Display/Pricing';
    /**
     * Constant for value 'Contact Carrier for Booking'
     * @return string 'Contact Carrier for Booking'
     */
    const VALUE_CONTACT_CARRIER_FOR_BOOKING = 'Contact Carrier for Booking';
    /**
     * Constant for value 'No Booking Required'
     * @return string 'No Booking Required'
     */
    const VALUE_NO_BOOKING_REQUIRED = 'No Booking Required';
    /**
     * Constant for value 'Apply booking per service'
     * @return string 'Apply booking per service'
     */
    const VALUE_APPLY_BOOKING_PER_SERVICE = 'Apply booking per service';
    /**
     * Return allowed values
     * @uses self::VALUE_SSR
     * @uses self::VALUE_AUXILLARY_SEGMENT
     * @uses self::VALUE_AVAILABLE_FOR_DISPLAY_PRICING
     * @uses self::VALUE_CONTACT_CARRIER_FOR_BOOKING
     * @uses self::VALUE_NO_BOOKING_REQUIRED
     * @uses self::VALUE_APPLY_BOOKING_PER_SERVICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SSR,
            self::VALUE_AUXILLARY_SEGMENT,
            self::VALUE_AVAILABLE_FOR_DISPLAY_PRICING,
            self::VALUE_CONTACT_CARRIER_FOR_BOOKING,
            self::VALUE_NO_BOOKING_REQUIRED,
            self::VALUE_APPLY_BOOKING_PER_SERVICE,
        ];
    }
}
