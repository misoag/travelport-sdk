<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ReservationLocatorCode;
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
    protected ?array $AccountingRemark = null;
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
    protected ?array $SupplierLocator = null;
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
    protected ?array $AirSegment = null;
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
    protected ?array $AirPricingInfo = null;
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
    protected ?array $CreditCardAuth = null;
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
    protected ?\Travelport\UniversalRecord\StructType\DeliveryInfo $DeliveryInfo = null;
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
    protected ?array $Payment = null;
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
    protected ?array $SSR = null;
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
    protected ?array $LoyaltyCard = null;
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
    protected ?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $AutoSeatAssignment = null;
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
    protected ?array $SpecificSeatAssignment = null;
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
    protected ?array $GeneralRemark = null;
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
    protected ?array $FeeInfo = null;
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
    protected ?array $HostToken = null;
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
    protected ?array $AirPricingTicketingModifiers = null;
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
    protected ?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $OptionalServicesInfo = null;
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
    protected ?\Travelport\UniversalRecord\StructType\AirPricingPayment $AirPricingPayment = null;
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
    protected ?array $AssociatedRemark = null;
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
    protected ?array $PocketItineraryRemark = null;
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
    protected ?array $ThirdPartyInformation = null;
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
    protected ?array $AirSegmentPricingModifiers = null;
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
    protected ?array $TravelComplianceData = null;
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
    protected ?array $BrandInfo = null;
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
    protected ?\Travelport\UniversalRecord\StructType\InvoluntaryChange $InvoluntaryChange = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The RestrictWaitlist
     * Meta information extracted from the WSDL
     * - documentation: Restrict Update if it sells a Waitlisted AirSegment. Provider: 1G,1V,1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RestrictWaitlist = null;
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
        // validation for constraint: string
        if (!is_null($reservationLocatorCode) && !is_string($reservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorCode, true), gettype($reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountingRemarkForArrayConstraintFromSetAccountingRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$airAddAccountingRemarkItem instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
                $invalidValues[] = is_object($airAddAccountingRemarkItem) ? get_class($airAddAccountingRemarkItem) : sprintf('%s(%s)', gettype($airAddAccountingRemarkItem), var_export($airAddAccountingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAccountingRemarkForChoiceConstraintFromSetAccountingRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AccountingRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AccountingRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AccountingRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkArrayErrorMessage = self::validateAccountingRemarkForArrayConstraintFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($accountingRemarkChoiceErrorMessage = self::validateAccountingRemarkForChoiceConstraintFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($accountingRemark) && count($accountingRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($accountingRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($accountingRemark) && count($accountingRemark) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($accountingRemark)), __LINE__);
        }
        if (is_null($accountingRemark) || (is_array($accountingRemark) && empty($accountingRemark))) {
            unset($this->AccountingRemark);
        } else {
            $this->AccountingRemark = $accountingRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAccountingRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAccountingRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AccountingRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AccountingRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAccountingRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AccountingRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AccountingRemark)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierLocatorForArrayConstraintFromSetSupplierLocator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$airAddSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($airAddSupplierLocatorItem) ? get_class($airAddSupplierLocatorItem) : sprintf('%s(%s)', gettype($airAddSupplierLocatorItem), var_export($airAddSupplierLocatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSupplierLocatorForChoiceConstraintFromSetSupplierLocator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SupplierLocator can\'t be set as the property %s is already set. Only one property must be set among these properties: SupplierLocator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SupplierLocator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierLocatorArrayErrorMessage = self::validateSupplierLocatorForArrayConstraintFromSetSupplierLocator($supplierLocator))) {
            throw new InvalidArgumentException($supplierLocatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($supplierLocatorChoiceErrorMessage = self::validateSupplierLocatorForChoiceConstraintFromSetSupplierLocator($supplierLocator))) {
            throw new InvalidArgumentException($supplierLocatorChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($supplierLocator) && count($supplierLocator) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($supplierLocator)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($supplierLocator) && count($supplierLocator) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($supplierLocator)), __LINE__);
        }
        if (is_null($supplierLocator) || (is_array($supplierLocator) && empty($supplierLocator))) {
            unset($this->SupplierLocator);
        } else {
            $this->SupplierLocator = $supplierLocator;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSupplierLocator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToSupplierLocator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SupplierLocator can\'t be set as the property %s is already set. Only one property must be set among these properties: SupplierLocator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
            throw new InvalidArgumentException(sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSupplierLocator($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SupplierLocator)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->SupplierLocator)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentForArrayConstraintFromSetAirSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airAddAirSegmentItem instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airAddAirSegmentItem) ? get_class($airAddAirSegmentItem) : sprintf('%s(%s)', gettype($airAddAirSegmentItem), var_export($airAddAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirSegmentForChoiceConstraintFromSetAirSegment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegment can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($airSegmentChoiceErrorMessage = self::validateAirSegmentForChoiceConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airSegment) && count($airSegment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airSegment)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airSegment) && count($airSegment) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airSegment)), __LINE__);
        }
        if (is_null($airSegment) || (is_array($airSegment) && empty($airSegment))) {
            unset($this->AirSegment);
        } else {
            $this->AirSegment = $airSegment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirSegment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirSegment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegment can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirSegment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirSegment)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirSegment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoForArrayConstraintFromSetAirPricingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddAirPricingInfoItem) {
            // validation for constraint: itemType
            if (!$airAddAirPricingInfoItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfo) {
                $invalidValues[] = is_object($airAddAirPricingInfoItem) ? get_class($airAddAirPricingInfoItem) : sprintf('%s(%s)', gettype($airAddAirPricingInfoItem), var_export($airAddAirPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirPricingInfoForChoiceConstraintFromSetAirPricingInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirPricingInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoArrayErrorMessage = self::validateAirPricingInfoForArrayConstraintFromSetAirPricingInfo($airPricingInfo))) {
            throw new InvalidArgumentException($airPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($airPricingInfoChoiceErrorMessage = self::validateAirPricingInfoForChoiceConstraintFromSetAirPricingInfo($airPricingInfo))) {
            throw new InvalidArgumentException($airPricingInfoChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airPricingInfo) && count($airPricingInfo) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airPricingInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airPricingInfo) && count($airPricingInfo) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airPricingInfo)), __LINE__);
        }
        if (is_null($airPricingInfo) || (is_array($airPricingInfo) && empty($airPricingInfo))) {
            unset($this->AirPricingInfo);
        } else {
            $this->AirPricingInfo = $airPricingInfo;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirPricingInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirPricingInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirPricingInfo(\Travelport\UniversalRecord\StructType\AirPricingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfo) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirPricingInfo($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirPricingInfo) && count($this->AirPricingInfo) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirPricingInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirPricingInfo) && count($this->AirPricingInfo) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirPricingInfo)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setCreditCardAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardAuth method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardAuthForArrayConstraintFromSetCreditCardAuth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddCreditCardAuthItem) {
            // validation for constraint: itemType
            if (!$airAddCreditCardAuthItem instanceof \Travelport\UniversalRecord\StructType\CreditCardAuth) {
                $invalidValues[] = is_object($airAddCreditCardAuthItem) ? get_class($airAddCreditCardAuthItem) : sprintf('%s(%s)', gettype($airAddCreditCardAuthItem), var_export($airAddCreditCardAuthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardAuth property can only contain items of type \Travelport\UniversalRecord\StructType\CreditCardAuth, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreditCardAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardAuth method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreditCardAuthForChoiceConstraintFromSetCreditCardAuth($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CreditCardAuth can\'t be set as the property %s is already set. Only one property must be set among these properties: CreditCardAuth, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CreditCardAuth value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardAuthArrayErrorMessage = self::validateCreditCardAuthForArrayConstraintFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($creditCardAuthChoiceErrorMessage = self::validateCreditCardAuthForChoiceConstraintFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($creditCardAuth)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($creditCardAuth)), __LINE__);
        }
        if (is_null($creditCardAuth) || (is_array($creditCardAuth) && empty($creditCardAuth))) {
            unset($this->CreditCardAuth);
        } else {
            $this->CreditCardAuth = $creditCardAuth;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToCreditCardAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCreditCardAuth method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToCreditCardAuth($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CreditCardAuth can\'t be set as the property %s is already set. Only one property must be set among these properties: CreditCardAuth, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToCreditCardAuth(\Travelport\UniversalRecord\StructType\CreditCardAuth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CreditCardAuth) {
            throw new InvalidArgumentException(sprintf('The CreditCardAuth property can only contain items of type \Travelport\UniversalRecord\StructType\CreditCardAuth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToCreditCardAuth($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->CreditCardAuth)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->CreditCardAuth)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setDeliveryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeliveryInfoForChoiceConstraintFromSetDeliveryInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DeliveryInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: DeliveryInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeliveryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setDeliveryInfo(?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($deliveryInfoChoiceErrorMessage = self::validateDeliveryInfoForChoiceConstraintFromSetDeliveryInfo($deliveryInfo))) {
            throw new InvalidArgumentException($deliveryInfoChoiceErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddPaymentItem) {
            // validation for constraint: itemType
            if (!$airAddPaymentItem instanceof \Travelport\UniversalRecord\StructType\Payment) {
                $invalidValues[] = is_object($airAddPaymentItem) ? get_class($airAddPaymentItem) : sprintf('%s(%s)', gettype($airAddPaymentItem), var_export($airAddPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePaymentForChoiceConstraintFromSetPayment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Payment can\'t be set as the property %s is already set. Only one property must be set among these properties: Payment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Payment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($paymentChoiceErrorMessage = self::validatePaymentForChoiceConstraintFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($payment) && count($payment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($payment)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($payment) && count($payment) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($payment)), __LINE__);
        }
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPayment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToPayment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Payment can\'t be set as the property %s is already set. Only one property must be set among these properties: Payment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToPayment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Payment) && count($this->Payment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Payment)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Payment) && count($this->Payment) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Payment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRForArrayConstraintFromSetSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddSSRItem) {
            // validation for constraint: itemType
            if (!$airAddSSRItem instanceof \Travelport\UniversalRecord\StructType\SSR) {
                $invalidValues[] = is_object($airAddSSRItem) ? get_class($airAddSSRItem) : sprintf('%s(%s)', gettype($airAddSSRItem), var_export($airAddSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSR property can only contain items of type \Travelport\UniversalRecord\StructType\SSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSR method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSSRForChoiceConstraintFromSetSSR($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SSR can\'t be set as the property %s is already set. Only one property must be set among these properties: SSR, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SSR value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setSSR(?array $sSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRArrayErrorMessage = self::validateSSRForArrayConstraintFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($sSRChoiceErrorMessage = self::validateSSRForChoiceConstraintFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($sSR) && count($sSR) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($sSR)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($sSR) && count($sSR) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($sSR)), __LINE__);
        }
        if (is_null($sSR) || (is_array($sSR) && empty($sSR))) {
            unset($this->SSR);
        } else {
            $this->SSR = $sSR;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSSR method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToSSR($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SSR can\'t be set as the property %s is already set. Only one property must be set among these properties: SSR, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SSR $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToSSR(\Travelport\UniversalRecord\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \Travelport\UniversalRecord\StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSSR($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SSR) && count($this->SSR) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SSR)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->SSR) && count($this->SSR) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->SSR)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$airAddLoyaltyCardItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($airAddLoyaltyCardItem) ? get_class($airAddLoyaltyCardItem) : sprintf('%s(%s)', gettype($airAddLoyaltyCardItem), var_export($airAddLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLoyaltyCardForChoiceConstraintFromSetLoyaltyCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LoyaltyCard can\'t be set as the property %s is already set. Only one property must be set among these properties: LoyaltyCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($loyaltyCardChoiceErrorMessage = self::validateLoyaltyCardForChoiceConstraintFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($loyaltyCard)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($loyaltyCard)), __LINE__);
        }
        if (is_null($loyaltyCard) || (is_array($loyaltyCard) && empty($loyaltyCard))) {
            unset($this->LoyaltyCard);
        } else {
            $this->LoyaltyCard = $loyaltyCard;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToLoyaltyCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToLoyaltyCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LoyaltyCard can\'t be set as the property %s is already set. Only one property must be set among these properties: LoyaltyCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToLoyaltyCard($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->LoyaltyCard)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->LoyaltyCard)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAutoSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAutoSeatAssignment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAutoSeatAssignmentForChoiceConstraintFromSetAutoSeatAssignment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AutoSeatAssignment can\'t be set as the property %s is already set. Only one property must be set among these properties: AutoSeatAssignment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AutoSeatAssignment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAutoSeatAssignment(?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment = null): self
    {
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($autoSeatAssignmentChoiceErrorMessage = self::validateAutoSeatAssignmentForChoiceConstraintFromSetAutoSeatAssignment($autoSeatAssignment))) {
            throw new InvalidArgumentException($autoSeatAssignmentChoiceErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSpecificSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificSeatAssignment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecificSeatAssignmentForArrayConstraintFromSetSpecificSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddSpecificSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$airAddSpecificSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
                $invalidValues[] = is_object($airAddSpecificSeatAssignmentItem) ? get_class($airAddSpecificSeatAssignmentItem) : sprintf('%s(%s)', gettype($airAddSpecificSeatAssignmentItem), var_export($airAddSpecificSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSpecificSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificSeatAssignment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSpecificSeatAssignmentForChoiceConstraintFromSetSpecificSeatAssignment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecificSeatAssignment can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecificSeatAssignment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SpecificSeatAssignment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specificSeatAssignmentArrayErrorMessage = self::validateSpecificSeatAssignmentForArrayConstraintFromSetSpecificSeatAssignment($specificSeatAssignment))) {
            throw new InvalidArgumentException($specificSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($specificSeatAssignmentChoiceErrorMessage = self::validateSpecificSeatAssignmentForChoiceConstraintFromSetSpecificSeatAssignment($specificSeatAssignment))) {
            throw new InvalidArgumentException($specificSeatAssignmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($specificSeatAssignment) && count($specificSeatAssignment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($specificSeatAssignment)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($specificSeatAssignment) && count($specificSeatAssignment) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($specificSeatAssignment)), __LINE__);
        }
        if (is_null($specificSeatAssignment) || (is_array($specificSeatAssignment) && empty($specificSeatAssignment))) {
            unset($this->SpecificSeatAssignment);
        } else {
            $this->SpecificSeatAssignment = $specificSeatAssignment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToSpecificSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSpecificSeatAssignment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToSpecificSeatAssignment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecificSeatAssignment can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecificSeatAssignment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSpecificSeatAssignment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SpecificSeatAssignment) && count($this->SpecificSeatAssignment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SpecificSeatAssignment)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->SpecificSeatAssignment) && count($this->SpecificSeatAssignment) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->SpecificSeatAssignment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkForArrayConstraintFromSetGeneralRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$airAddGeneralRemarkItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
                $invalidValues[] = is_object($airAddGeneralRemarkItem) ? get_class($airAddGeneralRemarkItem) : sprintf('%s(%s)', gettype($airAddGeneralRemarkItem), var_export($airAddGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGeneralRemarkForChoiceConstraintFromSetGeneralRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GeneralRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: GeneralRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($generalRemarkChoiceErrorMessage = self::validateGeneralRemarkForChoiceConstraintFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($generalRemark) && count($generalRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($generalRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($generalRemark) && count($generalRemark) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($generalRemark)), __LINE__);
        }
        if (is_null($generalRemark) || (is_array($generalRemark) && empty($generalRemark))) {
            unset($this->GeneralRemark);
        } else {
            $this->GeneralRemark = $generalRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToGeneralRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToGeneralRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GeneralRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: GeneralRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToGeneralRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->GeneralRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->GeneralRemark)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeInfoForArrayConstraintFromSetFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddFeeInfoItem) {
            // validation for constraint: itemType
            if (!$airAddFeeInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($airAddFeeInfoItem) ? get_class($airAddFeeInfoItem) : sprintf('%s(%s)', gettype($airAddFeeInfoItem), var_export($airAddFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFeeInfoForChoiceConstraintFromSetFeeInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FeeInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: FeeInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FeeInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeInfoArrayErrorMessage = self::validateFeeInfoForArrayConstraintFromSetFeeInfo($feeInfo))) {
            throw new InvalidArgumentException($feeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($feeInfoChoiceErrorMessage = self::validateFeeInfoForChoiceConstraintFromSetFeeInfo($feeInfo))) {
            throw new InvalidArgumentException($feeInfoChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($feeInfo) && count($feeInfo) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($feeInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($feeInfo) && count($feeInfo) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($feeInfo)), __LINE__);
        }
        if (is_null($feeInfo) || (is_array($feeInfo) && empty($feeInfo))) {
            unset($this->FeeInfo);
        } else {
            $this->FeeInfo = $feeInfo;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToFeeInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToFeeInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FeeInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: FeeInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeFeeInfo) {
            throw new InvalidArgumentException(sprintf('The FeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToFeeInfo($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->FeeInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->FeeInfo)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostTokenForArrayConstraintFromSetHostToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddHostTokenItem) {
            // validation for constraint: itemType
            if (!$airAddHostTokenItem instanceof \Travelport\UniversalRecord\StructType\HostToken) {
                $invalidValues[] = is_object($airAddHostTokenItem) ? get_class($airAddHostTokenItem) : sprintf('%s(%s)', gettype($airAddHostTokenItem), var_export($airAddHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHostTokenForChoiceConstraintFromSetHostToken($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HostToken can\'t be set as the property %s is already set. Only one property must be set among these properties: HostToken, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HostToken value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($hostTokenChoiceErrorMessage = self::validateHostTokenForChoiceConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hostToken) && count($hostToken) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hostToken)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($hostToken) && count($hostToken) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($hostToken)), __LINE__);
        }
        if (is_null($hostToken) || (is_array($hostToken) && empty($hostToken))) {
            unset($this->HostToken);
        } else {
            $this->HostToken = $hostToken;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHostToken method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHostToken($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HostToken can\'t be set as the property %s is already set. Only one property must be set among these properties: HostToken, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHostToken($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HostToken) && count($this->HostToken) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HostToken)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->HostToken) && count($this->HostToken) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->HostToken)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingTicketingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingTicketingModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingTicketingModifiersForArrayConstraintFromSetAirPricingTicketingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddAirPricingTicketingModifiersItem) {
            // validation for constraint: itemType
            if (!$airAddAirPricingTicketingModifiersItem instanceof \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers) {
                $invalidValues[] = is_object($airAddAirPricingTicketingModifiersItem) ? get_class($airAddAirPricingTicketingModifiersItem) : sprintf('%s(%s)', gettype($airAddAirPricingTicketingModifiersItem), var_export($airAddAirPricingTicketingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingTicketingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingTicketingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingTicketingModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirPricingTicketingModifiersForChoiceConstraintFromSetAirPricingTicketingModifiers($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingTicketingModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingTicketingModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirPricingTicketingModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirPricingTicketingModifiers(?array $airPricingTicketingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingTicketingModifiersArrayErrorMessage = self::validateAirPricingTicketingModifiersForArrayConstraintFromSetAirPricingTicketingModifiers($airPricingTicketingModifiers))) {
            throw new InvalidArgumentException($airPricingTicketingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($airPricingTicketingModifiersChoiceErrorMessage = self::validateAirPricingTicketingModifiersForChoiceConstraintFromSetAirPricingTicketingModifiers($airPricingTicketingModifiers))) {
            throw new InvalidArgumentException($airPricingTicketingModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airPricingTicketingModifiers) && count($airPricingTicketingModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airPricingTicketingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airPricingTicketingModifiers) && count($airPricingTicketingModifiers) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airPricingTicketingModifiers)), __LINE__);
        }
        if (is_null($airPricingTicketingModifiers) || (is_array($airPricingTicketingModifiers) && empty($airPricingTicketingModifiers))) {
            unset($this->AirPricingTicketingModifiers);
        } else {
            $this->AirPricingTicketingModifiers = $airPricingTicketingModifiers;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirPricingTicketingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirPricingTicketingModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirPricingTicketingModifiers($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingTicketingModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingTicketingModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirPricingTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirPricingTicketingModifiers(\Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirPricingTicketingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirPricingTicketingModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirPricingTicketingModifiers) && count($this->AirPricingTicketingModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirPricingTicketingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirPricingTicketingModifiers) && count($this->AirPricingTicketingModifiers) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirPricingTicketingModifiers)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setOptionalServicesInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalServicesInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOptionalServicesInfoForChoiceConstraintFromSetOptionalServicesInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property OptionalServicesInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: OptionalServicesInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set OptionalServicesInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setOptionalServicesInfo(?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo = null): self
    {
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($optionalServicesInfoChoiceErrorMessage = self::validateOptionalServicesInfoForChoiceConstraintFromSetOptionalServicesInfo($optionalServicesInfo))) {
            throw new InvalidArgumentException($optionalServicesInfoChoiceErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingPayment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirPricingPaymentForChoiceConstraintFromSetAirPricingPayment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingPayment can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingPayment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirPricingPayment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirPricingPayment(?\Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment = null): self
    {
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($airPricingPaymentChoiceErrorMessage = self::validateAirPricingPaymentForChoiceConstraintFromSetAirPricingPayment($airPricingPayment))) {
            throw new InvalidArgumentException($airPricingPaymentChoiceErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$airAddAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($airAddAssociatedRemarkItem) ? get_class($airAddAssociatedRemarkItem) : sprintf('%s(%s)', gettype($airAddAssociatedRemarkItem), var_export($airAddAssociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAssociatedRemarkForChoiceConstraintFromSetAssociatedRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AssociatedRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AssociatedRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AssociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($associatedRemarkChoiceErrorMessage = self::validateAssociatedRemarkForChoiceConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($associatedRemark) && count($associatedRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($associatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($associatedRemark) && count($associatedRemark) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($associatedRemark)), __LINE__);
        }
        if (is_null($associatedRemark) || (is_array($associatedRemark) && empty($associatedRemark))) {
            unset($this->AssociatedRemark);
        } else {
            $this->AssociatedRemark = $associatedRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAssociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAssociatedRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AssociatedRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AssociatedRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAssociatedRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AssociatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AssociatedRemark)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPocketItineraryRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPocketItineraryRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePocketItineraryRemarkForArrayConstraintFromSetPocketItineraryRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddPocketItineraryRemarkItem) {
            // validation for constraint: itemType
            if (!$airAddPocketItineraryRemarkItem instanceof \Travelport\UniversalRecord\StructType\PocketItineraryRemark) {
                $invalidValues[] = is_object($airAddPocketItineraryRemarkItem) ? get_class($airAddPocketItineraryRemarkItem) : sprintf('%s(%s)', gettype($airAddPocketItineraryRemarkItem), var_export($airAddPocketItineraryRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PocketItineraryRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPocketItineraryRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPocketItineraryRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePocketItineraryRemarkForChoiceConstraintFromSetPocketItineraryRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PocketItineraryRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: PocketItineraryRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PocketItineraryRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setPocketItineraryRemark(?array $pocketItineraryRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($pocketItineraryRemarkArrayErrorMessage = self::validatePocketItineraryRemarkForArrayConstraintFromSetPocketItineraryRemark($pocketItineraryRemark))) {
            throw new InvalidArgumentException($pocketItineraryRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($pocketItineraryRemarkChoiceErrorMessage = self::validatePocketItineraryRemarkForChoiceConstraintFromSetPocketItineraryRemark($pocketItineraryRemark))) {
            throw new InvalidArgumentException($pocketItineraryRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($pocketItineraryRemark) && count($pocketItineraryRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($pocketItineraryRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($pocketItineraryRemark) && count($pocketItineraryRemark) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($pocketItineraryRemark)), __LINE__);
        }
        if (is_null($pocketItineraryRemark) || (is_array($pocketItineraryRemark) && empty($pocketItineraryRemark))) {
            unset($this->PocketItineraryRemark);
        } else {
            $this->PocketItineraryRemark = $pocketItineraryRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToPocketItineraryRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPocketItineraryRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToPocketItineraryRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PocketItineraryRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: PocketItineraryRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PocketItineraryRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToPocketItineraryRemark(\Travelport\UniversalRecord\StructType\PocketItineraryRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PocketItineraryRemark) {
            throw new InvalidArgumentException(sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PocketItineraryRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToPocketItineraryRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PocketItineraryRemark) && count($this->PocketItineraryRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PocketItineraryRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->PocketItineraryRemark) && count($this->PocketItineraryRemark) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->PocketItineraryRemark)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyInformation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThirdPartyInformationForArrayConstraintFromSetThirdPartyInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$airAddThirdPartyInformationItem instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($airAddThirdPartyInformationItem) ? get_class($airAddThirdPartyInformationItem) : sprintf('%s(%s)', gettype($airAddThirdPartyInformationItem), var_export($airAddThirdPartyInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\ThirdPartyInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateThirdPartyInformationForChoiceConstraintFromSetThirdPartyInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ThirdPartyInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: ThirdPartyInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ThirdPartyInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($thirdPartyInformationArrayErrorMessage = self::validateThirdPartyInformationForArrayConstraintFromSetThirdPartyInformation($thirdPartyInformation))) {
            throw new InvalidArgumentException($thirdPartyInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($thirdPartyInformationChoiceErrorMessage = self::validateThirdPartyInformationForChoiceConstraintFromSetThirdPartyInformation($thirdPartyInformation))) {
            throw new InvalidArgumentException($thirdPartyInformationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($thirdPartyInformation) && count($thirdPartyInformation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($thirdPartyInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($thirdPartyInformation) && count($thirdPartyInformation) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($thirdPartyInformation)), __LINE__);
        }
        if (is_null($thirdPartyInformation) || (is_array($thirdPartyInformation) && empty($thirdPartyInformation))) {
            unset($this->ThirdPartyInformation);
        } else {
            $this->ThirdPartyInformation = $thirdPartyInformation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToThirdPartyInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToThirdPartyInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ThirdPartyInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: ThirdPartyInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
            throw new InvalidArgumentException(sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\ThirdPartyInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToThirdPartyInformation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->ThirdPartyInformation) && count($this->ThirdPartyInformation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->ThirdPartyInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->ThirdPartyInformation) && count($this->ThirdPartyInformation) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->ThirdPartyInformation)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirSegmentPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentPricingModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentPricingModifiersForArrayConstraintFromSetAirSegmentPricingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddAirSegmentPricingModifiersItem) {
            // validation for constraint: itemType
            if (!$airAddAirSegmentPricingModifiersItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers) {
                $invalidValues[] = is_object($airAddAirSegmentPricingModifiersItem) ? get_class($airAddAirSegmentPricingModifiersItem) : sprintf('%s(%s)', gettype($airAddAirSegmentPricingModifiersItem), var_export($airAddAirSegmentPricingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentPricingModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirSegmentPricingModifiersForChoiceConstraintFromSetAirSegmentPricingModifiers($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegmentPricingModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegmentPricingModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentPricingModifiersArrayErrorMessage = self::validateAirSegmentPricingModifiersForArrayConstraintFromSetAirSegmentPricingModifiers($airSegmentPricingModifiers))) {
            throw new InvalidArgumentException($airSegmentPricingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($airSegmentPricingModifiersChoiceErrorMessage = self::validateAirSegmentPricingModifiersForChoiceConstraintFromSetAirSegmentPricingModifiers($airSegmentPricingModifiers))) {
            throw new InvalidArgumentException($airSegmentPricingModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airSegmentPricingModifiers) && count($airSegmentPricingModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airSegmentPricingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airSegmentPricingModifiers) && count($airSegmentPricingModifiers) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airSegmentPricingModifiers)), __LINE__);
        }
        if (is_null($airSegmentPricingModifiers) || (is_array($airSegmentPricingModifiers) && empty($airSegmentPricingModifiers))) {
            unset($this->AirSegmentPricingModifiers);
        } else {
            $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirSegmentPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirSegmentPricingModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirSegmentPricingModifiers($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegmentPricingModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegmentPricingModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToAirSegmentPricingModifiers(\Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirSegmentPricingModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirSegmentPricingModifiers) && count($this->AirSegmentPricingModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirSegmentPricingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirSegmentPricingModifiers) && count($this->AirSegmentPricingModifiers) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirSegmentPricingModifiers)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelComplianceDataForArrayConstraintFromSetTravelComplianceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddTravelComplianceDataItem) {
            // validation for constraint: itemType
            if (!$airAddTravelComplianceDataItem instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
                $invalidValues[] = is_object($airAddTravelComplianceDataItem) ? get_class($airAddTravelComplianceDataItem) : sprintf('%s(%s)', gettype($airAddTravelComplianceDataItem), var_export($airAddTravelComplianceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTravelComplianceDataForChoiceConstraintFromSetTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelComplianceData can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelComplianceData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TravelComplianceData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelComplianceDataArrayErrorMessage = self::validateTravelComplianceDataForArrayConstraintFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($travelComplianceDataChoiceErrorMessage = self::validateTravelComplianceDataForChoiceConstraintFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($travelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($travelComplianceData)), __LINE__);
        }
        if (is_null($travelComplianceData) || (is_array($travelComplianceData) && empty($travelComplianceData))) {
            unset($this->TravelComplianceData);
        } else {
            $this->TravelComplianceData = $travelComplianceData;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'BrandInfo',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelComplianceData can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelComplianceData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to TravelComplianceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
            throw new InvalidArgumentException(sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToTravelComplianceData($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->TravelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->TravelComplianceData)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setBrandInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBrandInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBrandInfoForArrayConstraintFromSetBrandInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAddBrandInfoItem) {
            // validation for constraint: itemType
            if (!$airAddBrandInfoItem instanceof \Travelport\UniversalRecord\StructType\BrandInfo) {
                $invalidValues[] = is_object($airAddBrandInfoItem) ? get_class($airAddBrandInfoItem) : sprintf('%s(%s)', gettype($airAddBrandInfoItem), var_export($airAddBrandInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BrandInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BrandInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBrandInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBrandInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBrandInfoForChoiceConstraintFromSetBrandInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BrandInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: BrandInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BrandInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BrandInfo[] $brandInfo
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setBrandInfo(?array $brandInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($brandInfoArrayErrorMessage = self::validateBrandInfoForArrayConstraintFromSetBrandInfo($brandInfo))) {
            throw new InvalidArgumentException($brandInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($brandInfoChoiceErrorMessage = self::validateBrandInfoForChoiceConstraintFromSetBrandInfo($brandInfo))) {
            throw new InvalidArgumentException($brandInfoChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($brandInfo) && count($brandInfo) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($brandInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($brandInfo) && count($brandInfo) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($brandInfo)), __LINE__);
        }
        if (is_null($brandInfo) || (is_array($brandInfo) && empty($brandInfo))) {
            unset($this->BrandInfo);
        } else {
            $this->BrandInfo = $brandInfo;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToBrandInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToBrandInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToBrandInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'InvoluntaryChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BrandInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: BrandInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to BrandInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BrandInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function addToBrandInfo(\Travelport\UniversalRecord\StructType\BrandInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BrandInfo) {
            throw new InvalidArgumentException(sprintf('The BrandInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BrandInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToBrandInfo($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->BrandInfo) && count($this->BrandInfo) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->BrandInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->BrandInfo) && count($this->BrandInfo) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->BrandInfo)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setInvoluntaryChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoluntaryChange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateInvoluntaryChangeForChoiceConstraintFromSetInvoluntaryChange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'SupplierLocator',
            'AirSegment',
            'AirPricingInfo',
            'CreditCardAuth',
            'DeliveryInfo',
            'Payment',
            'SSR',
            'LoyaltyCard',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'GeneralRemark',
            'FeeInfo',
            'HostToken',
            'AirPricingTicketingModifiers',
            'OptionalServicesInfo',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'AirSegmentPricingModifiers',
            'TravelComplianceData',
            'BrandInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property InvoluntaryChange can\'t be set as the property %s is already set. Only one property must be set among these properties: InvoluntaryChange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set InvoluntaryChange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoluntaryChange $involuntaryChange
     * @return \Travelport\UniversalRecord\StructType\AirAdd
     */
    public function setInvoluntaryChange(?\Travelport\UniversalRecord\StructType\InvoluntaryChange $involuntaryChange = null): self
    {
        // validation for constraint: choice(AccountingRemark, SupplierLocator, AirSegment, AirPricingInfo, CreditCardAuth, DeliveryInfo, Payment, SSR, LoyaltyCard, AutoSeatAssignment, SpecificSeatAssignment, GeneralRemark, FeeInfo, HostToken, AirPricingTicketingModifiers, OptionalServicesInfo, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, ThirdPartyInformation, AirSegmentPricingModifiers, TravelComplianceData, BrandInfo, InvoluntaryChange)
        if ('' !== ($involuntaryChangeChoiceErrorMessage = self::validateInvoluntaryChangeForChoiceConstraintFromSetInvoluntaryChange($involuntaryChange))) {
            throw new InvalidArgumentException($involuntaryChangeChoiceErrorMessage, __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($restrictWaitlist) && !is_bool($restrictWaitlist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restrictWaitlist, true), gettype($restrictWaitlist)), __LINE__);
        }
        $this->RestrictWaitlist = $restrictWaitlist;
        
        return $this;
    }
}
