<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareGuarantee EnumType
 * Meta information extracted from the WSDL
 * - documentation: The status of a fare
 * @subpackage Enumerations
 */
class TypeFareGuarantee extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Auto'
     * Meta information extracted from the WSDL
     * - documentation: Automatically generated
     * @return string 'Auto'
     */
    const VALUE_AUTO = 'Auto';
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: Agent has overridden default(s)
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'ManualFare'
     * Meta information extracted from the WSDL
     * - documentation: Fare has been constructed by agent
     * @return string 'ManualFare'
     */
    const VALUE_MANUAL_FARE = 'ManualFare';
    /**
     * Constant for value 'Guaranteed'
     * Meta information extracted from the WSDL
     * - documentation: Fare is guaranteed
     * @return string 'Guaranteed'
     */
    const VALUE_GUARANTEED = 'Guaranteed';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: Invalid fare, e.g. due to name or itinerary change
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'Restored'
     * Meta information extracted from the WSDL
     * - documentation: Ticketed stored fare has been restored
     * @return string 'Restored'
     */
    const VALUE_RESTORED = 'Restored';
    /**
     * Constant for value 'Ticketed'
     * @return string 'Ticketed'
     */
    const VALUE_TICKETED = 'Ticketed';
    /**
     * Constant for value 'Unticketable'
     * Meta information extracted from the WSDL
     * - documentation: Unable to ticket
     * @return string 'Unticketable'
     */
    const VALUE_UNTICKETABLE = 'Unticketable';
    /**
     * Constant for value 'Reprice'
     * Meta information extracted from the WSDL
     * - documentation: Need requote to ticket
     * @return string 'Reprice'
     */
    const VALUE_REPRICE = 'Reprice';
    /**
     * Constant for value 'Expired'
     * Meta information extracted from the WSDL
     * - documentation: Expired fare due to older fare guarantee date typically older than 7 days
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
    /**
     * Constant for value 'AutoUsingPrivateFare'
     * Meta information extracted from the WSDL
     * - documentation: Agency private fares that are not guaranteed
     * @return string 'AutoUsingPrivateFare'
     */
    const VALUE_AUTO_USING_PRIVATE_FARE = 'AutoUsingPrivateFare';
    /**
     * Constant for value 'GuaranteedUsingAirlinePrivateFare'
     * Meta information extracted from the WSDL
     * - documentation: Guaranteed fare using Airline private fare that was filed with a fare distributor.
     * @return string 'GuaranteedUsingAirlinePrivateFare'
     */
    const VALUE_GUARANTEED_USING_AIRLINE_PRIVATE_FARE = 'GuaranteedUsingAirlinePrivateFare';
    /**
     * Constant for value 'Airline'
     * Meta information extracted from the WSDL
     * - documentation: Fare guaranteed by Airline.
     * @return string 'Airline'
     */
    const VALUE_AIRLINE = 'Airline';
    /**
     * Constant for value 'GuaranteeExpired'
     * Meta information extracted from the WSDL
     * - documentation: Guaranteed fare recently got expired as ticketing hadn't been done within a time frame typically midnight local time of POS .
     * @return string 'GuaranteeExpired'
     */
    const VALUE_GUARANTEE_EXPIRED = 'GuaranteeExpired';
    /**
     * Constant for value 'AgencyPrivateFareNoOverride'
     * Meta information extracted from the WSDL
     * - documentation: Agency Private Fare with no rules override
     * @return string 'AgencyPrivateFareNoOverride'
     */
    const VALUE_AGENCY_PRIVATE_FARE_NO_OVERRIDE = 'AgencyPrivateFareNoOverride';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: To handle new enumerations added by provider but currently not recognized by API
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTO
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_MANUAL_FARE
     * @uses self::VALUE_GUARANTEED
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_RESTORED
     * @uses self::VALUE_TICKETED
     * @uses self::VALUE_UNTICKETABLE
     * @uses self::VALUE_REPRICE
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_AUTO_USING_PRIVATE_FARE
     * @uses self::VALUE_GUARANTEED_USING_AIRLINE_PRIVATE_FARE
     * @uses self::VALUE_AIRLINE
     * @uses self::VALUE_GUARANTEE_EXPIRED
     * @uses self::VALUE_AGENCY_PRIVATE_FARE_NO_OVERRIDE
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUTO,
            self::VALUE_MANUAL,
            self::VALUE_MANUAL_FARE,
            self::VALUE_GUARANTEED,
            self::VALUE_INVALID,
            self::VALUE_RESTORED,
            self::VALUE_TICKETED,
            self::VALUE_UNTICKETABLE,
            self::VALUE_REPRICE,
            self::VALUE_EXPIRED,
            self::VALUE_AUTO_USING_PRIVATE_FARE,
            self::VALUE_GUARANTEED_USING_AIRLINE_PRIVATE_FARE,
            self::VALUE_AIRLINE,
            self::VALUE_GUARANTEE_EXPIRED,
            self::VALUE_AGENCY_PRIVATE_FARE_NO_OVERRIDE,
            self::VALUE_UNKNOWN,
        ];
    }
}
