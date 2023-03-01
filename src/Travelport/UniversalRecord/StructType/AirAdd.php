<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirAdd StructType
 * @subpackage Structs
 */
class AirAdd extends AbstractStructBase
{
    /**
     * The ReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $ReservationLocatorCode;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:AccountingRemark
     * @var \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    public ?array $AccountingRemark = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\UniversalRecord\StructType\CreditCardAuth[]
     */
    public ?array $CreditCardAuth = null;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:DeliveryInfo
     * @var \Travelport\UniversalRecord\StructType\DeliveryInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment[]
     */
    public ?array $Payment = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\UniversalRecord\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The AutoSeatAssignment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: air_v52_0:AutoSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\AutoSeatAssignment|null
     */
    public ?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $AutoSeatAssignment = null;
    /**
     * The SpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:SpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    public ?array $SpecificSeatAssignment = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The AirPricingTicketingModifiers
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - ref: air_v52_0:AirPricingTicketingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]
     */
    public ?array $AirPricingTicketingModifiers = null;
    /**
     * The OptionalServicesInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: air_v52_0:OptionalServicesInfo
     * @var \Travelport\UniversalRecord\StructType\OptionalServicesInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $OptionalServicesInfo = null;
    /**
     * The AirPricingPayment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingPayment
     * @var \Travelport\UniversalRecord\StructType\AirPricingPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirPricingPayment $AirPricingPayment = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:PocketItineraryRemark
     * @var \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    public ?array $PocketItineraryRemark = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    public ?array $ThirdPartyInformation = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[]
     */
    public ?array $AirSegmentPricingModifiers = null;
    /**
     * The TravelComplianceData
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:TravelComplianceData
     * @var \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    public ?array $TravelComplianceData = null;
    /**
     * The BrandInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:BrandInfo
     * @var \Travelport\UniversalRecord\StructType\BrandInfo[]
     */
    public ?array $BrandInfo = null;
    /**
     * The InvoluntaryChange
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | SupplierLocator | AirSegment | AirPricingInfo | CreditCardAuth | DeliveryInfo | Payment | SSR | LoyaltyCard | AutoSeatAssignment | SpecificSeatAssignment | GeneralRemark | FeeInfo | HostToken |
     * AirPricingTicketingModifiers | OptionalServicesInfo | AirPricingPayment | AssociatedRemark | PocketItineraryRemark | ThirdPartyInformation | AirSegmentPricingModifiers | TravelComplianceData | BrandInfo | InvoluntaryChange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: air_v52_0:InvoluntaryChange
     * @var \Travelport\UniversalRecord\StructType\InvoluntaryChange|null
     */
    public ?\Travelport\UniversalRecord\StructType\InvoluntaryChange $InvoluntaryChange = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The RestrictWaitlist
     * Meta information extracted from the WSDL
     * - documentation: Restrict Update if it sells a Waitlisted AirSegment. Provider: 1G,1V,1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $RestrictWaitlist = null;
    /**
     * Constructor method for AirAdd
     * @uses AirAdd::setReservationLocatorCode()
     * @uses AirAdd::setAccountingRemark()
     * @uses AirAdd::setSupplierLocator()
     * @uses AirAdd::setAirSegment()
     * @uses AirAdd::setAirPricingInfo()
     * @uses AirAdd::setCreditCardAuth()
     * @uses AirAdd::setDeliveryInfo()
     * @uses AirAdd::setPayment()
     * @uses AirAdd::setSSR()
     * @uses AirAdd::setLoyaltyCard()
     * @uses AirAdd::setAutoSeatAssignment()
     * @uses AirAdd::setSpecificSeatAssignment()
     * @uses AirAdd::setGeneralRemark()
     * @uses AirAdd::setFeeInfo()
     * @uses AirAdd::setHostToken()
     * @uses AirAdd::setAirPricingTicketingModifiers()
     * @uses AirAdd::setOptionalServicesInfo()
     * @uses AirAdd::setAirPricingPayment()
     * @uses AirAdd::setAssociatedRemark()
     * @uses AirAdd::setPocketItineraryRemark()
     * @uses AirAdd::setThirdPartyInformation()
     * @uses AirAdd::setAirSegmentPricingModifiers()
     * @uses AirAdd::setTravelComplianceData()
     * @uses AirAdd::setBrandInfo()
     * @uses AirAdd::setInvoluntaryChange()
     * @uses AirAdd::setBookingTravelerRef()
     * @uses AirAdd::setRestrictWaitlist()
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo
     * @param \Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @param \Travelport\UniversalRecord\StructType\BrandInfo[] $brandInfo
     * @param \Travelport\UniversalRecord\StructType\InvoluntaryChange $involuntaryChange
     * @param string $bookingTravelerRef
     * @param bool $restrictWaitlist
     */
    public function __construct(string $reservationLocatorCode, ?array $accountingRemark = null, ?array $supplierLocator = null, ?array $airSegment = null, ?array $airPricingInfo = null, ?array $creditCardAuth = null, ?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null, ?array $payment = null, ?array $sSR = null, ?array $loyaltyCard = null, ?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment = null, ?array $specificSeatAssignment = null, ?array $generalRemark = null, ?array $feeInfo = null, ?array $hostToken = null, ?array $airPricingTicketingModifiers = null, ?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo = null, ?\Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment = null, ?array $associatedRemark = null, ?array $pocketItineraryRemark = null, ?array $thirdPartyInformation = null, ?array $airSegmentPricingModifiers = null, ?array $travelComplianceData = null, ?array $brandInfo = null, ?\Travelport\UniversalRecord\StructType\InvoluntaryChange $involuntaryChange = null, ?string $bookingTravelerRef = null, ?bool $restrictWaitlist = false)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setAccountingRemark($accountingRemark)
            ->setSupplierLocator($supplierLocator)
            ->setAirSegment($airSegment)
            ->setAirPricingInfo($airPricingInfo)
            ->setCreditCardAuth($creditCardAuth)
            ->setDeliveryInfo($deliveryInfo)
            ->setPayment($payment)
            ->setSSR($sSR)
            ->setLoyaltyCard($loyaltyCard)
            ->setAutoSeatAssignment($autoSeatAssignment)
            ->setSpecificSeatAssignment($specificSeatAssignment)
            ->setGeneralRemark($generalRemark)
            ->setFeeInfo($feeInfo)
            ->setHostToken($hostToken)
            ->setAirPricingTicketingModifiers($airPricingTicketingModifiers)
            ->setOptionalServicesInfo($optionalServicesInfo)
            ->setAirPricingPayment($airPricingPayment)
            ->setAssociatedRemark($associatedRemark)
            ->setPocketItineraryRemark($pocketItineraryRemark)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setAirSegmentPricingModifiers($airSegmentPricingModifiers)
            ->setTravelComplianceData($travelComplianceData)
            ->setBrandInfo($brandInfo)
            ->setInvoluntaryChange($involuntaryChange)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setRestrictWaitlist($restrictWaitlist);
    }
    /**
     * Get ReservationLocatorCode value
     * @return string
     */
    public function getReservationLocatorCode(): string
    {
        return $this->ReservationLocatorCode;
    }
    /**
     * Set ReservationLocatorCode value
     * @param string $reservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setReservationLocatorCode(string $reservationLocatorCode): self
    {
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \Travelport\UniversalRecord\StructType\AccountingRemark[]|null
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark ?? null;
    }
    /**
     * Set AccountingRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        if (is_null($accountingRemark) || (is_array($accountingRemark) && empty($accountingRemark))) {
            unset($this->AccountingRemark);
        } else {
            $this->AccountingRemark = $accountingRemark;
        }
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]|null
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator ?? null;
    }
    /**
     * Set SupplierLocator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        if (is_null($supplierLocator) || (is_array($supplierLocator) && empty($supplierLocator))) {
            unset($this->SupplierLocator);
        } else {
            $this->SupplierLocator = $supplierLocator;
        }
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]|null
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment ?? null;
    }
    /**
     * Set AirSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        if (is_null($airSegment) || (is_array($airSegment) && empty($airSegment))) {
            unset($this->AirSegment);
        } else {
            $this->AirSegment = $airSegment;
        }
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo[]|null
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo ?? null;
    }
    /**
     * Set AirPricingInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        if (is_null($airPricingInfo) || (is_array($airPricingInfo) && empty($airPricingInfo))) {
            unset($this->AirPricingInfo);
        } else {
            $this->AirPricingInfo = $airPricingInfo;
        }
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirPricingInfo(\Travelport\UniversalRecord\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\UniversalRecord\StructType\CreditCardAuth[]|null
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth ?? null;
    }
    /**
     * Set CreditCardAuth value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        if (is_null($creditCardAuth) || (is_array($creditCardAuth) && empty($creditCardAuth))) {
            unset($this->CreditCardAuth);
        } else {
            $this->CreditCardAuth = $creditCardAuth;
        }
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToCreditCardAuth(\Travelport\UniversalRecord\StructType\CreditCardAuth $item): self
    {
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\UniversalRecord\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\UniversalRecord\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo ?? null;
    }
    /**
     * Set DeliveryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setDeliveryInfo(?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        if (is_null($deliveryInfo) || (is_array($deliveryInfo) && empty($deliveryInfo))) {
            unset($this->DeliveryInfo);
        } else {
            $this->DeliveryInfo = $deliveryInfo;
        }
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment[]|null
     */
    public function getPayment(): ?array
    {
        return $this->Payment ?? null;
    }
    /**
     * Set Payment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setPayment(?array $payment = null): self
    {
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\UniversalRecord\StructType\SSR[]|null
     */
    public function getSSR(): ?array
    {
        return $this->SSR ?? null;
    }
    /**
     * Set SSR value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setSSR(?array $sSR = null): self
    {
        if (is_null($sSR) || (is_array($sSR) && empty($sSR))) {
            unset($this->SSR);
        } else {
            $this->SSR = $sSR;
        }
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SSR $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToSSR(\Travelport\UniversalRecord\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard[]|null
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard ?? null;
    }
    /**
     * Set LoyaltyCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        if (is_null($loyaltyCard) || (is_array($loyaltyCard) && empty($loyaltyCard))) {
            unset($this->LoyaltyCard);
        } else {
            $this->LoyaltyCard = $loyaltyCard;
        }
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get AutoSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment|null
     */
    public function getAutoSeatAssignment(): ?\Travelport\UniversalRecord\StructType\AutoSeatAssignment
    {
        return $this->AutoSeatAssignment ?? null;
    }
    /**
     * Set AutoSeatAssignment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAutoSeatAssignment(?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment = null): self
    {
        if (is_null($autoSeatAssignment) || (is_array($autoSeatAssignment) && empty($autoSeatAssignment))) {
            unset($this->AutoSeatAssignment);
        } else {
            $this->AutoSeatAssignment = $autoSeatAssignment;
        }
        
        return $this;
    }
    /**
     * Get SpecificSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]|null
     */
    public function getSpecificSeatAssignment(): ?array
    {
        return $this->SpecificSeatAssignment ?? null;
    }
    /**
     * Set SpecificSeatAssignment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        if (is_null($specificSeatAssignment) || (is_array($specificSeatAssignment) && empty($specificSeatAssignment))) {
            unset($this->SpecificSeatAssignment);
        } else {
            $this->SpecificSeatAssignment = $specificSeatAssignment;
        }
        
        return $this;
    }
    /**
     * Add item to SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item): self
    {
        $this->SpecificSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]|null
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark ?? null;
    }
    /**
     * Set GeneralRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        if (is_null($generalRemark) || (is_array($generalRemark) && empty($generalRemark))) {
            unset($this->GeneralRemark);
        } else {
            $this->GeneralRemark = $generalRemark;
        }
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeFeeInfo[]|null
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo ?? null;
    }
    /**
     * Set FeeInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        if (is_null($feeInfo) || (is_array($feeInfo) && empty($feeInfo))) {
            unset($this->FeeInfo);
        } else {
            $this->FeeInfo = $feeInfo;
        }
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken[]|null
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken ?? null;
    }
    /**
     * Set HostToken value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setHostToken(?array $hostToken = null): self
    {
        if (is_null($hostToken) || (is_array($hostToken) && empty($hostToken))) {
            unset($this->HostToken);
        } else {
            $this->HostToken = $hostToken;
        }
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingTicketingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]|null
     */
    public function getAirPricingTicketingModifiers(): ?array
    {
        return $this->AirPricingTicketingModifiers ?? null;
    }
    /**
     * Set AirPricingTicketingModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirPricingTicketingModifiers(?array $airPricingTicketingModifiers = null): self
    {
        if (is_null($airPricingTicketingModifiers) || (is_array($airPricingTicketingModifiers) && empty($airPricingTicketingModifiers))) {
            unset($this->AirPricingTicketingModifiers);
        } else {
            $this->AirPricingTicketingModifiers = $airPricingTicketingModifiers;
        }
        
        return $this;
    }
    /**
     * Add item to AirPricingTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirPricingTicketingModifiers(\Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item): self
    {
        $this->AirPricingTicketingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get OptionalServicesInfo value
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo|null
     */
    public function getOptionalServicesInfo(): ?\Travelport\UniversalRecord\StructType\OptionalServicesInfo
    {
        return $this->OptionalServicesInfo ?? null;
    }
    /**
     * Set OptionalServicesInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setOptionalServicesInfo(?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo = null): self
    {
        if (is_null($optionalServicesInfo) || (is_array($optionalServicesInfo) && empty($optionalServicesInfo))) {
            unset($this->OptionalServicesInfo);
        } else {
            $this->OptionalServicesInfo = $optionalServicesInfo;
        }
        
        return $this;
    }
    /**
     * Get AirPricingPayment value
     * @return \Travelport\UniversalRecord\StructType\AirPricingPayment|null
     */
    public function getAirPricingPayment(): ?\Travelport\UniversalRecord\StructType\AirPricingPayment
    {
        return $this->AirPricingPayment ?? null;
    }
    /**
     * Set AirPricingPayment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirPricingPayment(?\Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment = null): self
    {
        if (is_null($airPricingPayment) || (is_array($airPricingPayment) && empty($airPricingPayment))) {
            unset($this->AirPricingPayment);
        } else {
            $this->AirPricingPayment = $airPricingPayment;
        }
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark[]|null
     */
    public function getAssociatedRemark(): ?array
    {
        return $this->AssociatedRemark ?? null;
    }
    /**
     * Set AssociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        if (is_null($associatedRemark) || (is_array($associatedRemark) && empty($associatedRemark))) {
            unset($this->AssociatedRemark);
        } else {
            $this->AssociatedRemark = $associatedRemark;
        }
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get PocketItineraryRemark value
     * @return \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]|null
     */
    public function getPocketItineraryRemark(): ?array
    {
        return $this->PocketItineraryRemark ?? null;
    }
    /**
     * Set PocketItineraryRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setPocketItineraryRemark(?array $pocketItineraryRemark = null): self
    {
        if (is_null($pocketItineraryRemark) || (is_array($pocketItineraryRemark) && empty($pocketItineraryRemark))) {
            unset($this->PocketItineraryRemark);
        } else {
            $this->PocketItineraryRemark = $pocketItineraryRemark;
        }
        
        return $this;
    }
    /**
     * Add item to PocketItineraryRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToPocketItineraryRemark(\Travelport\UniversalRecord\StructType\PocketItineraryRemark $item): self
    {
        $this->PocketItineraryRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]|null
     */
    public function getThirdPartyInformation(): ?array
    {
        return $this->ThirdPartyInformation ?? null;
    }
    /**
     * Set ThirdPartyInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        if (is_null($thirdPartyInformation) || (is_array($thirdPartyInformation) && empty($thirdPartyInformation))) {
            unset($this->ThirdPartyInformation);
        } else {
            $this->ThirdPartyInformation = $thirdPartyInformation;
        }
        
        return $this;
    }
    /**
     * Add item to ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[]|null
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers ?? null;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        if (is_null($airSegmentPricingModifiers) || (is_array($airSegmentPricingModifiers) && empty($airSegmentPricingModifiers))) {
            unset($this->AirSegmentPricingModifiers);
        } else {
            $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        }
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirSegmentPricingModifiers(\Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item): self
    {
        $this->AirSegmentPricingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get TravelComplianceData value
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData[]|null
     */
    public function getTravelComplianceData(): ?array
    {
        return $this->TravelComplianceData ?? null;
    }
    /**
     * Set TravelComplianceData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        if (is_null($travelComplianceData) || (is_array($travelComplianceData) && empty($travelComplianceData))) {
            unset($this->TravelComplianceData);
        } else {
            $this->TravelComplianceData = $travelComplianceData;
        }
        
        return $this;
    }
    /**
     * Add item to TravelComplianceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        $this->TravelComplianceData[] = $item;
        
        return $this;
    }
    /**
     * Get BrandInfo value
     * @return \Travelport\UniversalRecord\StructType\BrandInfo[]|null
     */
    public function getBrandInfo(): ?array
    {
        return $this->BrandInfo ?? null;
    }
    /**
     * Set BrandInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\BrandInfo[] $brandInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setBrandInfo(?array $brandInfo = null): self
    {
        if (is_null($brandInfo) || (is_array($brandInfo) && empty($brandInfo))) {
            unset($this->BrandInfo);
        } else {
            $this->BrandInfo = $brandInfo;
        }
        
        return $this;
    }
    /**
     * Add item to BrandInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BrandInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToBrandInfo(\Travelport\UniversalRecord\StructType\BrandInfo $item): self
    {
        $this->BrandInfo[] = $item;
        
        return $this;
    }
    /**
     * Get InvoluntaryChange value
     * @return \Travelport\UniversalRecord\StructType\InvoluntaryChange|null
     */
    public function getInvoluntaryChange(): ?\Travelport\UniversalRecord\StructType\InvoluntaryChange
    {
        return $this->InvoluntaryChange ?? null;
    }
    /**
     * Set InvoluntaryChange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\InvoluntaryChange $involuntaryChange
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setInvoluntaryChange(?\Travelport\UniversalRecord\StructType\InvoluntaryChange $involuntaryChange = null): self
    {
        if (is_null($involuntaryChange) || (is_array($involuntaryChange) && empty($involuntaryChange))) {
            unset($this->InvoluntaryChange);
        } else {
            $this->InvoluntaryChange = $involuntaryChange;
        }
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get RestrictWaitlist value
     * @return bool|null
     */
    public function getRestrictWaitlist(): ?bool
    {
        return $this->RestrictWaitlist;
    }
    /**
     * Set RestrictWaitlist value
     * @param bool $restrictWaitlist
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setRestrictWaitlist(?bool $restrictWaitlist = false): self
    {
        $this->RestrictWaitlist = $restrictWaitlist;
        
        return $this;
    }
}
