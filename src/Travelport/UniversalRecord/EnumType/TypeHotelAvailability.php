<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeHotelAvailability EnumType
 * Meta information extracted from the WSDL
 * - documentation: Unknown | On request | Available, but not for the rates requested | NotAvailable | Hotel is Available | Availability status of hotel
 * @subpackage Enumerations
 */
class TypeHotelAvailability extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'NotAvailable'
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'AvailableForOtherRates'
     * @return string 'AvailableForOtherRates'
     */
    const VALUE_AVAILABLE_FOR_OTHER_RATES = 'AvailableForOtherRates';
    /**
     * Constant for value 'OnRequest'
     * @return string 'OnRequest'
     */
    const VALUE_ON_REQUEST = 'OnRequest';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_AVAILABLE_FOR_OTHER_RATES
     * @uses self::VALUE_ON_REQUEST
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABLE,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_AVAILABLE_FOR_OTHER_RATES,
            self::VALUE_ON_REQUEST,
            self::VALUE_UNKNOWN,
        ];
    }
}
