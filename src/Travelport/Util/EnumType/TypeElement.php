<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeElement EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the list of available data types for modifications
 * @subpackage Enumerations
 */
class TypeElement extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Payment'
     * @return string 'Payment'
     */
    const VALUE_PAYMENT = 'Payment';
    /**
     * Constant for value 'CreditCardAuthorization'
     * @return string 'CreditCardAuthorization'
     */
    const VALUE_CREDIT_CARD_AUTHORIZATION = 'CreditCardAuthorization';
    /**
     * Constant for value 'DeliveryInfo'
     * @return string 'DeliveryInfo'
     */
    const VALUE_DELIVERY_INFO = 'DeliveryInfo';
    /**
     * Constant for value 'FormOfPayment'
     * @return string 'FormOfPayment'
     */
    const VALUE_FORM_OF_PAYMENT = 'FormOfPayment';
    /**
     * Constant for value 'ActionStatus'
     * @return string 'ActionStatus'
     */
    const VALUE_ACTION_STATUS = 'ActionStatus';
    /**
     * Constant for value 'OSI'
     * @return string 'OSI'
     */
    const VALUE_OSI = 'OSI';
    /**
     * Constant for value 'GeneralRemark'
     * @return string 'GeneralRemark'
     */
    const VALUE_GENERAL_REMARK = 'GeneralRemark';
    /**
     * Constant for value 'UnassociatedRemark'
     * @return string 'UnassociatedRemark'
     */
    const VALUE_UNASSOCIATED_REMARK = 'UnassociatedRemark';
    /**
     * Constant for value 'AccountingRemark'
     * @return string 'AccountingRemark'
     */
    const VALUE_ACCOUNTING_REMARK = 'AccountingRemark';
    /**
     * Constant for value 'PostScript'
     * @return string 'PostScript'
     */
    const VALUE_POST_SCRIPT = 'PostScript';
    /**
     * Constant for value 'AirReservationAirSegmentUpdate'
     * @return string 'AirReservationAirSegmentUpdate'
     */
    const VALUE_AIR_RESERVATION_AIR_SEGMENT_UPDATE = 'AirReservationAirSegmentUpdate';
    /**
     * Constant for value 'AirSegment'
     * @return string 'AirSegment'
     */
    const VALUE_AIR_SEGMENT = 'AirSegment';
    /**
     * Constant for value 'PhoneNumber'
     * @return string 'PhoneNumber'
     */
    const VALUE_PHONE_NUMBER = 'PhoneNumber';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'LoyaltyCard'
     * @return string 'LoyaltyCard'
     */
    const VALUE_LOYALTY_CARD = 'LoyaltyCard';
    /**
     * Constant for value 'SSR'
     * @return string 'SSR'
     */
    const VALUE_SSR = 'SSR';
    /**
     * Constant for value 'SeatAssignment'
     * @return string 'SeatAssignment'
     */
    const VALUE_SEAT_ASSIGNMENT = 'SeatAssignment';
    /**
     * Constant for value 'SpecificSeatAssignment'
     * @return string 'SpecificSeatAssignment'
     */
    const VALUE_SPECIFIC_SEAT_ASSIGNMENT = 'SpecificSeatAssignment';
    /**
     * Constant for value 'AutoSeatAssignment'
     * @return string 'AutoSeatAssignment'
     */
    const VALUE_AUTO_SEAT_ASSIGNMENT = 'AutoSeatAssignment';
    /**
     * Constant for value 'AirPricingInfo'
     * @return string 'AirPricingInfo'
     */
    const VALUE_AIR_PRICING_INFO = 'AirPricingInfo';
    /**
     * Constant for value 'VehicleSpecialRequest'
     * @return string 'VehicleSpecialRequest'
     */
    const VALUE_VEHICLE_SPECIAL_REQUEST = 'VehicleSpecialRequest';
    /**
     * Constant for value 'SpecialEquipment'
     * @return string 'SpecialEquipment'
     */
    const VALUE_SPECIAL_EQUIPMENT = 'SpecialEquipment';
    /**
     * Constant for value 'XMLRemark'
     * @return string 'XMLRemark'
     */
    const VALUE_XMLREMARK = 'XMLRemark';
    /**
     * Constant for value 'Address'
     * @return string 'Address'
     */
    const VALUE_ADDRESS = 'Address';
    /**
     * Constant for value 'TicketingModifiers'
     * @return string 'TicketingModifiers'
     */
    const VALUE_TICKETING_MODIFIERS = 'TicketingModifiers';
    /**
     * Constant for value 'Guarantee'
     * @return string 'Guarantee'
     */
    const VALUE_GUARANTEE = 'Guarantee';
    /**
     * Constant for value 'DeliveryAddress'
     * @return string 'DeliveryAddress'
     */
    const VALUE_DELIVERY_ADDRESS = 'DeliveryAddress';
    /**
     * Constant for value 'ServiceFeeInfo'
     * @return string 'ServiceFeeInfo'
     */
    const VALUE_SERVICE_FEE_INFO = 'ServiceFeeInfo';
    /**
     * Constant for value 'LinkedUniversalRecord'
     * @return string 'LinkedUniversalRecord'
     */
    const VALUE_LINKED_UNIVERSAL_RECORD = 'LinkedUniversalRecord';
    /**
     * Constant for value 'NameRemark'
     * @return string 'NameRemark'
     */
    const VALUE_NAME_REMARK = 'NameRemark';
    /**
     * Constant for value 'PassiveSegment'
     * @return string 'PassiveSegment'
     */
    const VALUE_PASSIVE_SEGMENT = 'PassiveSegment';
    /**
     * Constant for value 'PaymentInformation'
     * @return string 'PaymentInformation'
     */
    const VALUE_PAYMENT_INFORMATION = 'PaymentInformation';
    /**
     * Constant for value 'CustomerID'
     * @return string 'CustomerID'
     */
    const VALUE_CUSTOMER_ID = 'CustomerID';
    /**
     * Constant for value 'DriversLicense'
     * @return string 'DriversLicense'
     */
    const VALUE_DRIVERS_LICENSE = 'DriversLicense';
    /**
     * Constant for value 'AssociatedRemark'
     * @return string 'AssociatedRemark'
     */
    const VALUE_ASSOCIATED_REMARK = 'AssociatedRemark';
    /**
     * Constant for value 'CollectionAddress'
     * @return string 'CollectionAddress'
     */
    const VALUE_COLLECTION_ADDRESS = 'CollectionAddress';
    /**
     * Constant for value 'HotelSpecialRequest'
     * @return string 'HotelSpecialRequest'
     */
    const VALUE_HOTEL_SPECIAL_REQUEST = 'HotelSpecialRequest';
    /**
     * Constant for value 'CorporateDiscountID'
     * @return string 'CorporateDiscountID'
     */
    const VALUE_CORPORATE_DISCOUNT_ID = 'CorporateDiscountID';
    /**
     * Constant for value 'CommissionRemark'
     * @return string 'CommissionRemark'
     */
    const VALUE_COMMISSION_REMARK = 'CommissionRemark';
    /**
     * Constant for value 'PocketItineraryRemark'
     * @return string 'PocketItineraryRemark'
     */
    const VALUE_POCKET_ITINERARY_REMARK = 'PocketItineraryRemark';
    /**
     * Constant for value 'CustomizedNameData'
     * @return string 'CustomizedNameData'
     */
    const VALUE_CUSTOMIZED_NAME_DATA = 'CustomizedNameData';
    /**
     * Constant for value 'InvoiceRemark'
     * @return string 'InvoiceRemark'
     */
    const VALUE_INVOICE_REMARK = 'InvoiceRemark';
    /**
     * Constant for value 'ThirdPartyInformation'
     * @return string 'ThirdPartyInformation'
     */
    const VALUE_THIRD_PARTY_INFORMATION = 'ThirdPartyInformation';
    /**
     * Constant for value 'TravelCompliance'
     * @return string 'TravelCompliance'
     */
    const VALUE_TRAVEL_COMPLIANCE = 'TravelCompliance';
    /**
     * Constant for value 'ReviewBooking'
     * @return string 'ReviewBooking'
     */
    const VALUE_REVIEW_BOOKING = 'ReviewBooking';
    /**
     * Constant for value 'ConsolidatorRemark'
     * @return string 'ConsolidatorRemark'
     */
    const VALUE_CONSOLIDATOR_REMARK = 'ConsolidatorRemark';
    /**
     * Constant for value 'BookingTraveler'
     * @return string 'BookingTraveler'
     */
    const VALUE_BOOKING_TRAVELER = 'BookingTraveler';
    /**
     * Constant for value 'AppliedProfile'
     * @return string 'AppliedProfile'
     */
    const VALUE_APPLIED_PROFILE = 'AppliedProfile';
    /**
     * Constant for value 'TripName'
     * @return string 'TripName'
     */
    const VALUE_TRIP_NAME = 'TripName';
    /**
     * Constant for value 'TravelPurpose'
     * @return string 'TravelPurpose'
     */
    const VALUE_TRAVEL_PURPOSE = 'TravelPurpose';
    /**
     * Constant for value 'BookingConfirmation'
     * @return string 'BookingConfirmation'
     */
    const VALUE_BOOKING_CONFIRMATION = 'BookingConfirmation';
    /**
     * Constant for value 'Brand'
     * @return string 'Brand'
     */
    const VALUE_BRAND = 'Brand';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYMENT
     * @uses self::VALUE_CREDIT_CARD_AUTHORIZATION
     * @uses self::VALUE_DELIVERY_INFO
     * @uses self::VALUE_FORM_OF_PAYMENT
     * @uses self::VALUE_ACTION_STATUS
     * @uses self::VALUE_OSI
     * @uses self::VALUE_GENERAL_REMARK
     * @uses self::VALUE_UNASSOCIATED_REMARK
     * @uses self::VALUE_ACCOUNTING_REMARK
     * @uses self::VALUE_POST_SCRIPT
     * @uses self::VALUE_AIR_RESERVATION_AIR_SEGMENT_UPDATE
     * @uses self::VALUE_AIR_SEGMENT
     * @uses self::VALUE_PHONE_NUMBER
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_LOYALTY_CARD
     * @uses self::VALUE_SSR
     * @uses self::VALUE_SEAT_ASSIGNMENT
     * @uses self::VALUE_SPECIFIC_SEAT_ASSIGNMENT
     * @uses self::VALUE_AUTO_SEAT_ASSIGNMENT
     * @uses self::VALUE_AIR_PRICING_INFO
     * @uses self::VALUE_VEHICLE_SPECIAL_REQUEST
     * @uses self::VALUE_SPECIAL_EQUIPMENT
     * @uses self::VALUE_XMLREMARK
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_TICKETING_MODIFIERS
     * @uses self::VALUE_GUARANTEE
     * @uses self::VALUE_DELIVERY_ADDRESS
     * @uses self::VALUE_SERVICE_FEE_INFO
     * @uses self::VALUE_LINKED_UNIVERSAL_RECORD
     * @uses self::VALUE_NAME_REMARK
     * @uses self::VALUE_PASSIVE_SEGMENT
     * @uses self::VALUE_PAYMENT_INFORMATION
     * @uses self::VALUE_CUSTOMER_ID
     * @uses self::VALUE_DRIVERS_LICENSE
     * @uses self::VALUE_ASSOCIATED_REMARK
     * @uses self::VALUE_COLLECTION_ADDRESS
     * @uses self::VALUE_HOTEL_SPECIAL_REQUEST
     * @uses self::VALUE_CORPORATE_DISCOUNT_ID
     * @uses self::VALUE_COMMISSION_REMARK
     * @uses self::VALUE_POCKET_ITINERARY_REMARK
     * @uses self::VALUE_CUSTOMIZED_NAME_DATA
     * @uses self::VALUE_INVOICE_REMARK
     * @uses self::VALUE_THIRD_PARTY_INFORMATION
     * @uses self::VALUE_TRAVEL_COMPLIANCE
     * @uses self::VALUE_REVIEW_BOOKING
     * @uses self::VALUE_CONSOLIDATOR_REMARK
     * @uses self::VALUE_BOOKING_TRAVELER
     * @uses self::VALUE_APPLIED_PROFILE
     * @uses self::VALUE_TRIP_NAME
     * @uses self::VALUE_TRAVEL_PURPOSE
     * @uses self::VALUE_BOOKING_CONFIRMATION
     * @uses self::VALUE_BRAND
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYMENT,
            self::VALUE_CREDIT_CARD_AUTHORIZATION,
            self::VALUE_DELIVERY_INFO,
            self::VALUE_FORM_OF_PAYMENT,
            self::VALUE_ACTION_STATUS,
            self::VALUE_OSI,
            self::VALUE_GENERAL_REMARK,
            self::VALUE_UNASSOCIATED_REMARK,
            self::VALUE_ACCOUNTING_REMARK,
            self::VALUE_POST_SCRIPT,
            self::VALUE_AIR_RESERVATION_AIR_SEGMENT_UPDATE,
            self::VALUE_AIR_SEGMENT,
            self::VALUE_PHONE_NUMBER,
            self::VALUE_EMAIL,
            self::VALUE_LOYALTY_CARD,
            self::VALUE_SSR,
            self::VALUE_SEAT_ASSIGNMENT,
            self::VALUE_SPECIFIC_SEAT_ASSIGNMENT,
            self::VALUE_AUTO_SEAT_ASSIGNMENT,
            self::VALUE_AIR_PRICING_INFO,
            self::VALUE_VEHICLE_SPECIAL_REQUEST,
            self::VALUE_SPECIAL_EQUIPMENT,
            self::VALUE_XMLREMARK,
            self::VALUE_ADDRESS,
            self::VALUE_TICKETING_MODIFIERS,
            self::VALUE_GUARANTEE,
            self::VALUE_DELIVERY_ADDRESS,
            self::VALUE_SERVICE_FEE_INFO,
            self::VALUE_LINKED_UNIVERSAL_RECORD,
            self::VALUE_NAME_REMARK,
            self::VALUE_PASSIVE_SEGMENT,
            self::VALUE_PAYMENT_INFORMATION,
            self::VALUE_CUSTOMER_ID,
            self::VALUE_DRIVERS_LICENSE,
            self::VALUE_ASSOCIATED_REMARK,
            self::VALUE_COLLECTION_ADDRESS,
            self::VALUE_HOTEL_SPECIAL_REQUEST,
            self::VALUE_CORPORATE_DISCOUNT_ID,
            self::VALUE_COMMISSION_REMARK,
            self::VALUE_POCKET_ITINERARY_REMARK,
            self::VALUE_CUSTOMIZED_NAME_DATA,
            self::VALUE_INVOICE_REMARK,
            self::VALUE_THIRD_PARTY_INFORMATION,
            self::VALUE_TRAVEL_COMPLIANCE,
            self::VALUE_REVIEW_BOOKING,
            self::VALUE_CONSOLIDATOR_REMARK,
            self::VALUE_BOOKING_TRAVELER,
            self::VALUE_APPLIED_PROFILE,
            self::VALUE_TRIP_NAME,
            self::VALUE_TRAVEL_PURPOSE,
            self::VALUE_BOOKING_CONFIRMATION,
            self::VALUE_BRAND,
        ];
    }
}
