<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePricingMethod EnumType
 * Meta information extracted from the WSDL
 * - documentation: The method at which the pricing data was acquired
 * @subpackage Enumerations
 */
class TypePricingMethod extends AbstractStructEnumBase
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
     * - documentation: Expired fare, older than 7 days
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
     * - documentation: Fare created as a result of Claim PNR which transfers data to GDS for ticketing purposes.
     * @return string 'Airline'
     */
    const VALUE_AIRLINE = 'Airline';
    /**
     * Constant for value 'AgentAssisted'
     * Meta information extracted from the WSDL
     * - documentation: Fare is created using Agent Asisted Pricing. | Worldspan TKG FAX Line Documentation - AGENT ASSISTEDPRICED
     * @return string 'AgentAssisted'
     */
    const VALUE_AGENT_ASSISTED = 'AgentAssisted';
    /**
     * Constant for value 'VerifyPrice'
     * Meta information extracted from the WSDL
     * - documentation: Verify existing saved price on PNR . | Worldspan TKG FAX Line Documentation - AWAITING PRICE VERIFICATION
     * @return string 'VerifyPrice'
     */
    const VALUE_VERIFY_PRICE = 'VerifyPrice';
    /**
     * Constant for value 'AltSegmentRemovedReprice'
     * Meta information extracted from the WSDL
     * - documentation: ALT Segment removed, Reprice pricing. | Worldspan TKG FAX Line Documentation - AWAITING REPRICING ALT SEGS RMVD
     * @return string 'AltSegmentRemovedReprice'
     */
    const VALUE_ALT_SEGMENT_REMOVED_REPRICE = 'AltSegmentRemovedReprice';
    /**
     * Constant for value 'AuxiliarySegmentRemovedReprice'
     * Meta information extracted from the WSDL
     * - documentation: AUX Segment removed, Reprice pricing. | Worldspan TKG FAX Line Documentation - AWAITING REPRICING AUX SEGS REMOVED
     * @return string 'AuxiliarySegmentRemovedReprice'
     */
    const VALUE_AUXILIARY_SEGMENT_REMOVED_REPRICE = 'AuxiliarySegmentRemovedReprice';
    /**
     * Constant for value 'DuplicateSegmentRemovedReprice'
     * Meta information extracted from the WSDL
     * - documentation: Duplicate Segment removed, Reprice pricing. | Worldspan TKG FAX Line Documentation - AWAITING REPRICING DUPE SEGS REMOVED
     * @return string 'DuplicateSegmentRemovedReprice'
     */
    const VALUE_DUPLICATE_SEGMENT_REMOVED_REPRICE = 'DuplicateSegmentRemovedReprice';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: Any other kind of Pricing Method which is not supported by API.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'GuaranteedUsingAgencyPrivateFare'
     * Meta information extracted from the WSDL
     * - documentation: Guaranteed fare using Agency private fare that was filed with a fare distributor.
     * @return string 'GuaranteedUsingAgencyPrivateFare'
     */
    const VALUE_GUARANTEED_USING_AGENCY_PRIVATE_FARE = 'GuaranteedUsingAgencyPrivateFare';
    /**
     * Constant for value 'AutoRapidReprice'
     * Meta information extracted from the WSDL
     * - documentation: Auto priced by rapid reprice. Provider 1P FCI code 4 .
     * @return string 'AutoRapidReprice'
     */
    const VALUE_AUTO_RAPID_REPRICE = 'AutoRapidReprice';
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
     * @uses self::VALUE_AGENT_ASSISTED
     * @uses self::VALUE_VERIFY_PRICE
     * @uses self::VALUE_ALT_SEGMENT_REMOVED_REPRICE
     * @uses self::VALUE_AUXILIARY_SEGMENT_REMOVED_REPRICE
     * @uses self::VALUE_DUPLICATE_SEGMENT_REMOVED_REPRICE
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_GUARANTEED_USING_AGENCY_PRIVATE_FARE
     * @uses self::VALUE_AUTO_RAPID_REPRICE
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
            self::VALUE_AGENT_ASSISTED,
            self::VALUE_VERIFY_PRICE,
            self::VALUE_ALT_SEGMENT_REMOVED_REPRICE,
            self::VALUE_AUXILIARY_SEGMENT_REMOVED_REPRICE,
            self::VALUE_DUPLICATE_SEGMENT_REMOVED_REPRICE,
            self::VALUE_UNKNOWN,
            self::VALUE_GUARANTEED_USING_AGENCY_PRIVATE_FARE,
            self::VALUE_AUTO_RAPID_REPRICE,
        ];
    }
}
