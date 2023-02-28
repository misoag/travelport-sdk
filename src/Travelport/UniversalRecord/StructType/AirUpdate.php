<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpdate StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticketing modifiers to be updated.
 * @subpackage Structs
 */
class AirUpdate extends AbstractStructBase
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
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountingRemark
     * @var \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\UniversalRecord\StructType\CreditCardAuth[]
     */
    protected ?array $CreditCardAuth = null;
    /**
     * The AirPricingAdjustment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingAdjustment
     * @var \Travelport\UniversalRecord\StructType\AirPricingAdjustment[]
     */
    protected ?array $AirPricingAdjustment = null;
    /**
     * The AirPricingTicketingModifiers
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: air_v52_0:AirPricingTicketingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]
     */
    protected ?array $AirPricingTicketingModifiers = null;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:DeliveryInfo
     * @var \Travelport\UniversalRecord\StructType\DeliveryInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The AirSegmentSpecialUpdate
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirSegmentSpecialUpdate
     * @var \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate $AirSegmentSpecialUpdate = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\UniversalRecord\StructType\SSR[]
     */
    protected ?array $SSR = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The AutoSeatAssignment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
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
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:SpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    protected ?array $SpecificSeatAssignment = null;
    /**
     * The AirPricingPayment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
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
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:PocketItineraryRemark
     * @var \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    protected ?array $PocketItineraryRemark = null;
    /**
     * The OptionalServicesInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: air_v52_0:OptionalServicesInfo
     * @var \Travelport\UniversalRecord\StructType\OptionalServicesInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $OptionalServicesInfo = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    protected ?array $ThirdPartyInformation = null;
    /**
     * The TravelComplianceData
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | AirSegment | CreditCardAuth | AirPricingAdjustment | AirPricingTicketingModifiers | DeliveryInfo | AirSegmentSpecialUpdate | LoyaltyCard | SSR | GeneralRemark | AutoSeatAssignment | SpecificSeatAssignment |
     * AirPricingPayment | AssociatedRemark | PocketItineraryRemark | OptionalServicesInfo | ThirdPartyInformation | TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:TravelComplianceData
     * @var \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    protected ?array $TravelComplianceData = null;
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
     * - documentation: Restrict Update if it modifies a Waitlisted AirSegment. Provider: 1G,1V,1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RestrictWaitlist = null;
    /**
     * Constructor method for AirUpdate
     * @uses AirUpdate::setReservationLocatorCode()
     * @uses AirUpdate::setAccountingRemark()
     * @uses AirUpdate::setAirSegment()
     * @uses AirUpdate::setCreditCardAuth()
     * @uses AirUpdate::setAirPricingAdjustment()
     * @uses AirUpdate::setAirPricingTicketingModifiers()
     * @uses AirUpdate::setDeliveryInfo()
     * @uses AirUpdate::setAirSegmentSpecialUpdate()
     * @uses AirUpdate::setLoyaltyCard()
     * @uses AirUpdate::setSSR()
     * @uses AirUpdate::setGeneralRemark()
     * @uses AirUpdate::setAutoSeatAssignment()
     * @uses AirUpdate::setSpecificSeatAssignment()
     * @uses AirUpdate::setAirPricingPayment()
     * @uses AirUpdate::setAssociatedRemark()
     * @uses AirUpdate::setPocketItineraryRemark()
     * @uses AirUpdate::setOptionalServicesInfo()
     * @uses AirUpdate::setThirdPartyInformation()
     * @uses AirUpdate::setTravelComplianceData()
     * @uses AirUpdate::setBookingTravelerRef()
     * @uses AirUpdate::setRestrictWaitlist()
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\UniversalRecord\StructType\AirPricingAdjustment[] $airPricingAdjustment
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @param \Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate $airSegmentSpecialUpdate
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @param string $bookingTravelerRef
     * @param bool $restrictWaitlist
     */
    public function __construct(string $reservationLocatorCode, ?array $accountingRemark = null, ?array $airSegment = null, ?array $creditCardAuth = null, ?array $airPricingAdjustment = null, ?array $airPricingTicketingModifiers = null, ?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null, ?\Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate $airSegmentSpecialUpdate = null, ?array $loyaltyCard = null, ?array $sSR = null, ?array $generalRemark = null, ?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment = null, ?array $specificSeatAssignment = null, ?\Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment = null, ?array $associatedRemark = null, ?array $pocketItineraryRemark = null, ?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo = null, ?array $thirdPartyInformation = null, ?array $travelComplianceData = null, ?string $bookingTravelerRef = null, ?bool $restrictWaitlist = false)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setAccountingRemark($accountingRemark)
            ->setAirSegment($airSegment)
            ->setCreditCardAuth($creditCardAuth)
            ->setAirPricingAdjustment($airPricingAdjustment)
            ->setAirPricingTicketingModifiers($airPricingTicketingModifiers)
            ->setDeliveryInfo($deliveryInfo)
            ->setAirSegmentSpecialUpdate($airSegmentSpecialUpdate)
            ->setLoyaltyCard($loyaltyCard)
            ->setSSR($sSR)
            ->setGeneralRemark($generalRemark)
            ->setAutoSeatAssignment($autoSeatAssignment)
            ->setSpecificSeatAssignment($specificSeatAssignment)
            ->setAirPricingPayment($airPricingPayment)
            ->setAssociatedRemark($associatedRemark)
            ->setPocketItineraryRemark($pocketItineraryRemark)
            ->setOptionalServicesInfo($optionalServicesInfo)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setTravelComplianceData($travelComplianceData)
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
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
        foreach ($values as $airUpdateAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$airUpdateAccountingRemarkItem instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
                $invalidValues[] = is_object($airUpdateAccountingRemarkItem) ? get_class($airUpdateAccountingRemarkItem) : sprintf('%s(%s)', gettype($airUpdateAccountingRemarkItem), var_export($airUpdateAccountingRemarkItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkArrayErrorMessage = self::validateAccountingRemarkForArrayConstraintFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($accountingRemarkChoiceErrorMessage = self::validateAccountingRemarkForChoiceConstraintFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($accountingRemark) && count($accountingRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($accountingRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountingRemark) && count($accountingRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountingRemark)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAccountingRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AccountingRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountingRemark)), __LINE__);
        }
        $this->AccountingRemark[] = $item;
        
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
        foreach ($values as $airUpdateAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airUpdateAirSegmentItem instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airUpdateAirSegmentItem) ? get_class($airUpdateAirSegmentItem) : sprintf('%s(%s)', gettype($airUpdateAirSegmentItem), var_export($airUpdateAirSegmentItem, true));
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
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($airSegmentChoiceErrorMessage = self::validateAirSegmentForChoiceConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airSegment) && count($airSegment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airSegment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
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
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirSegment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirSegment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
        $this->AirSegment[] = $item;
        
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
        foreach ($values as $airUpdateCreditCardAuthItem) {
            // validation for constraint: itemType
            if (!$airUpdateCreditCardAuthItem instanceof \Travelport\UniversalRecord\StructType\CreditCardAuth) {
                $invalidValues[] = is_object($airUpdateCreditCardAuthItem) ? get_class($airUpdateCreditCardAuthItem) : sprintf('%s(%s)', gettype($airUpdateCreditCardAuthItem), var_export($airUpdateCreditCardAuthItem, true));
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
            'AirSegment',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardAuthArrayErrorMessage = self::validateCreditCardAuthForArrayConstraintFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($creditCardAuthChoiceErrorMessage = self::validateCreditCardAuthForChoiceConstraintFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($creditCardAuth)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($creditCardAuth)), __LINE__);
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
            'AirSegment',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToCreditCardAuth(\Travelport\UniversalRecord\StructType\CreditCardAuth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CreditCardAuth) {
            throw new InvalidArgumentException(sprintf('The CreditCardAuth property can only contain items of type \Travelport\UniversalRecord\StructType\CreditCardAuth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToCreditCardAuth($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->CreditCardAuth)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CreditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingAdjustment value
     * @return \Travelport\UniversalRecord\StructType\AirPricingAdjustment[]|null
     */
    public function getAirPricingAdjustment(): ?array
    {
        return $this->AirPricingAdjustment ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingAdjustment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingAdjustment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingAdjustmentForArrayConstraintFromSetAirPricingAdjustment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airUpdateAirPricingAdjustmentItem) {
            // validation for constraint: itemType
            if (!$airUpdateAirPricingAdjustmentItem instanceof \Travelport\UniversalRecord\StructType\AirPricingAdjustment) {
                $invalidValues[] = is_object($airUpdateAirPricingAdjustmentItem) ? get_class($airUpdateAirPricingAdjustmentItem) : sprintf('%s(%s)', gettype($airUpdateAirPricingAdjustmentItem), var_export($airUpdateAirPricingAdjustmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingAdjustment property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingAdjustment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingAdjustment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirPricingAdjustmentForChoiceConstraintFromSetAirPricingAdjustment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'AirSegment',
            'CreditCardAuth',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingAdjustment can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingAdjustment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirPricingAdjustment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingAdjustment[] $airPricingAdjustment
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAirPricingAdjustment(?array $airPricingAdjustment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingAdjustmentArrayErrorMessage = self::validateAirPricingAdjustmentForArrayConstraintFromSetAirPricingAdjustment($airPricingAdjustment))) {
            throw new InvalidArgumentException($airPricingAdjustmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($airPricingAdjustmentChoiceErrorMessage = self::validateAirPricingAdjustmentForChoiceConstraintFromSetAirPricingAdjustment($airPricingAdjustment))) {
            throw new InvalidArgumentException($airPricingAdjustmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airPricingAdjustment) && count($airPricingAdjustment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airPricingAdjustment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingAdjustment) && count($airPricingAdjustment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingAdjustment)), __LINE__);
        }
        if (is_null($airPricingAdjustment) || (is_array($airPricingAdjustment) && empty($airPricingAdjustment))) {
            unset($this->AirPricingAdjustment);
        } else {
            $this->AirPricingAdjustment = $airPricingAdjustment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirPricingAdjustment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirPricingAdjustment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirPricingAdjustment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'AirSegment',
            'CreditCardAuth',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirPricingAdjustment can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingAdjustment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirPricingAdjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingAdjustment $item
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToAirPricingAdjustment(\Travelport\UniversalRecord\StructType\AirPricingAdjustment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingAdjustment) {
            throw new InvalidArgumentException(sprintf('The AirPricingAdjustment property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirPricingAdjustment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirPricingAdjustment) && count($this->AirPricingAdjustment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirPricingAdjustment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingAdjustment) && count($this->AirPricingAdjustment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingAdjustment)), __LINE__);
        }
        $this->AirPricingAdjustment[] = $item;
        
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
        foreach ($values as $airUpdateAirPricingTicketingModifiersItem) {
            // validation for constraint: itemType
            if (!$airUpdateAirPricingTicketingModifiersItem instanceof \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers) {
                $invalidValues[] = is_object($airUpdateAirPricingTicketingModifiersItem) ? get_class($airUpdateAirPricingTicketingModifiersItem) : sprintf('%s(%s)', gettype($airUpdateAirPricingTicketingModifiersItem), var_export($airUpdateAirPricingTicketingModifiersItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAirPricingTicketingModifiers(?array $airPricingTicketingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingTicketingModifiersArrayErrorMessage = self::validateAirPricingTicketingModifiersForArrayConstraintFromSetAirPricingTicketingModifiers($airPricingTicketingModifiers))) {
            throw new InvalidArgumentException($airPricingTicketingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($airPricingTicketingModifiersChoiceErrorMessage = self::validateAirPricingTicketingModifiersForChoiceConstraintFromSetAirPricingTicketingModifiers($airPricingTicketingModifiers))) {
            throw new InvalidArgumentException($airPricingTicketingModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airPricingTicketingModifiers) && count($airPricingTicketingModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airPricingTicketingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingTicketingModifiers) && count($airPricingTicketingModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingTicketingModifiers)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToAirPricingTicketingModifiers(\Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirPricingTicketingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirPricingTicketingModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirPricingTicketingModifiers) && count($this->AirPricingTicketingModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirPricingTicketingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingTicketingModifiers) && count($this->AirPricingTicketingModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingTicketingModifiers)), __LINE__);
        }
        $this->AirPricingTicketingModifiers[] = $item;
        
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setDeliveryInfo(?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
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
     * Get AirSegmentSpecialUpdate value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate|null
     */
    public function getAirSegmentSpecialUpdate(): ?\Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate
    {
        return $this->AirSegmentSpecialUpdate ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentSpecialUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentSpecialUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirSegmentSpecialUpdateForChoiceConstraintFromSetAirSegmentSpecialUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegmentSpecialUpdate can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegmentSpecialUpdate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirSegmentSpecialUpdate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate $airSegmentSpecialUpdate
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAirSegmentSpecialUpdate(?\Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate $airSegmentSpecialUpdate = null): self
    {
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($airSegmentSpecialUpdateChoiceErrorMessage = self::validateAirSegmentSpecialUpdateForChoiceConstraintFromSetAirSegmentSpecialUpdate($airSegmentSpecialUpdate))) {
            throw new InvalidArgumentException($airSegmentSpecialUpdateChoiceErrorMessage, __LINE__);
        }
        if (is_null($airSegmentSpecialUpdate) || (is_array($airSegmentSpecialUpdate) && empty($airSegmentSpecialUpdate))) {
            unset($this->AirSegmentSpecialUpdate);
        } else {
            $this->AirSegmentSpecialUpdate = $airSegmentSpecialUpdate;
        }
        
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
        foreach ($values as $airUpdateLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$airUpdateLoyaltyCardItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($airUpdateLoyaltyCardItem) ? get_class($airUpdateLoyaltyCardItem) : sprintf('%s(%s)', gettype($airUpdateLoyaltyCardItem), var_export($airUpdateLoyaltyCardItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($loyaltyCardChoiceErrorMessage = self::validateLoyaltyCardForChoiceConstraintFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($loyaltyCard)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCard)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToLoyaltyCard($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->LoyaltyCard)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCard)), __LINE__);
        }
        $this->LoyaltyCard[] = $item;
        
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
        foreach ($values as $airUpdateSSRItem) {
            // validation for constraint: itemType
            if (!$airUpdateSSRItem instanceof \Travelport\UniversalRecord\StructType\SSR) {
                $invalidValues[] = is_object($airUpdateSSRItem) ? get_class($airUpdateSSRItem) : sprintf('%s(%s)', gettype($airUpdateSSRItem), var_export($airUpdateSSRItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setSSR(?array $sSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRArrayErrorMessage = self::validateSSRForArrayConstraintFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($sSRChoiceErrorMessage = self::validateSSRForChoiceConstraintFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($sSR) && count($sSR) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($sSR)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSR) && count($sSR) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSR)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToSSR(\Travelport\UniversalRecord\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \Travelport\UniversalRecord\StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSSR($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SSR) && count($this->SSR) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SSR)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSR) && count($this->SSR) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSR)), __LINE__);
        }
        $this->SSR[] = $item;
        
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
        foreach ($values as $airUpdateGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$airUpdateGeneralRemarkItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
                $invalidValues[] = is_object($airUpdateGeneralRemarkItem) ? get_class($airUpdateGeneralRemarkItem) : sprintf('%s(%s)', gettype($airUpdateGeneralRemarkItem), var_export($airUpdateGeneralRemarkItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($generalRemarkChoiceErrorMessage = self::validateGeneralRemarkForChoiceConstraintFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($generalRemark) && count($generalRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($generalRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemark) && count($generalRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemark)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToGeneralRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->GeneralRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAutoSeatAssignment(?\Travelport\UniversalRecord\StructType\AutoSeatAssignment $autoSeatAssignment = null): self
    {
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
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
        foreach ($values as $airUpdateSpecificSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$airUpdateSpecificSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
                $invalidValues[] = is_object($airUpdateSpecificSeatAssignmentItem) ? get_class($airUpdateSpecificSeatAssignmentItem) : sprintf('%s(%s)', gettype($airUpdateSpecificSeatAssignmentItem), var_export($airUpdateSpecificSeatAssignmentItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specificSeatAssignmentArrayErrorMessage = self::validateSpecificSeatAssignmentForArrayConstraintFromSetSpecificSeatAssignment($specificSeatAssignment))) {
            throw new InvalidArgumentException($specificSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($specificSeatAssignmentChoiceErrorMessage = self::validateSpecificSeatAssignmentForChoiceConstraintFromSetSpecificSeatAssignment($specificSeatAssignment))) {
            throw new InvalidArgumentException($specificSeatAssignmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($specificSeatAssignment) && count($specificSeatAssignment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($specificSeatAssignment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($specificSeatAssignment) && count($specificSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($specificSeatAssignment)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSpecificSeatAssignment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SpecificSeatAssignment) && count($this->SpecificSeatAssignment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SpecificSeatAssignment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SpecificSeatAssignment) && count($this->SpecificSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SpecificSeatAssignment)), __LINE__);
        }
        $this->SpecificSeatAssignment[] = $item;
        
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAirPricingPayment(?\Travelport\UniversalRecord\StructType\AirPricingPayment $airPricingPayment = null): self
    {
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
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
        foreach ($values as $airUpdateAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$airUpdateAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($airUpdateAssociatedRemarkItem) ? get_class($airUpdateAssociatedRemarkItem) : sprintf('%s(%s)', gettype($airUpdateAssociatedRemarkItem), var_export($airUpdateAssociatedRemarkItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($associatedRemarkChoiceErrorMessage = self::validateAssociatedRemarkForChoiceConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($associatedRemark) && count($associatedRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($associatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($associatedRemark) && count($associatedRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($associatedRemark)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAssociatedRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AssociatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AssociatedRemark)), __LINE__);
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
        foreach ($values as $airUpdatePocketItineraryRemarkItem) {
            // validation for constraint: itemType
            if (!$airUpdatePocketItineraryRemarkItem instanceof \Travelport\UniversalRecord\StructType\PocketItineraryRemark) {
                $invalidValues[] = is_object($airUpdatePocketItineraryRemarkItem) ? get_class($airUpdatePocketItineraryRemarkItem) : sprintf('%s(%s)', gettype($airUpdatePocketItineraryRemarkItem), var_export($airUpdatePocketItineraryRemarkItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setPocketItineraryRemark(?array $pocketItineraryRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($pocketItineraryRemarkArrayErrorMessage = self::validatePocketItineraryRemarkForArrayConstraintFromSetPocketItineraryRemark($pocketItineraryRemark))) {
            throw new InvalidArgumentException($pocketItineraryRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($pocketItineraryRemarkChoiceErrorMessage = self::validatePocketItineraryRemarkForChoiceConstraintFromSetPocketItineraryRemark($pocketItineraryRemark))) {
            throw new InvalidArgumentException($pocketItineraryRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($pocketItineraryRemark) && count($pocketItineraryRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($pocketItineraryRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($pocketItineraryRemark) && count($pocketItineraryRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($pocketItineraryRemark)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToPocketItineraryRemark(\Travelport\UniversalRecord\StructType\PocketItineraryRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PocketItineraryRemark) {
            throw new InvalidArgumentException(sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PocketItineraryRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToPocketItineraryRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PocketItineraryRemark) && count($this->PocketItineraryRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PocketItineraryRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PocketItineraryRemark) && count($this->PocketItineraryRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PocketItineraryRemark)), __LINE__);
        }
        $this->PocketItineraryRemark[] = $item;
        
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setOptionalServicesInfo(?\Travelport\UniversalRecord\StructType\OptionalServicesInfo $optionalServicesInfo = null): self
    {
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
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
        foreach ($values as $airUpdateThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$airUpdateThirdPartyInformationItem instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($airUpdateThirdPartyInformationItem) ? get_class($airUpdateThirdPartyInformationItem) : sprintf('%s(%s)', gettype($airUpdateThirdPartyInformationItem), var_export($airUpdateThirdPartyInformationItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($thirdPartyInformationArrayErrorMessage = self::validateThirdPartyInformationForArrayConstraintFromSetThirdPartyInformation($thirdPartyInformation))) {
            throw new InvalidArgumentException($thirdPartyInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($thirdPartyInformationChoiceErrorMessage = self::validateThirdPartyInformationForChoiceConstraintFromSetThirdPartyInformation($thirdPartyInformation))) {
            throw new InvalidArgumentException($thirdPartyInformationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($thirdPartyInformation) && count($thirdPartyInformation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($thirdPartyInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($thirdPartyInformation) && count($thirdPartyInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($thirdPartyInformation)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'TravelComplianceData',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
            throw new InvalidArgumentException(sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\ThirdPartyInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToThirdPartyInformation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->ThirdPartyInformation) && count($this->ThirdPartyInformation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->ThirdPartyInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ThirdPartyInformation) && count($this->ThirdPartyInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ThirdPartyInformation)), __LINE__);
        }
        $this->ThirdPartyInformation[] = $item;
        
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
        foreach ($values as $airUpdateTravelComplianceDataItem) {
            // validation for constraint: itemType
            if (!$airUpdateTravelComplianceDataItem instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
                $invalidValues[] = is_object($airUpdateTravelComplianceDataItem) ? get_class($airUpdateTravelComplianceDataItem) : sprintf('%s(%s)', gettype($airUpdateTravelComplianceDataItem), var_export($airUpdateTravelComplianceDataItem, true));
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelComplianceDataArrayErrorMessage = self::validateTravelComplianceDataForArrayConstraintFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($travelComplianceDataChoiceErrorMessage = self::validateTravelComplianceDataForChoiceConstraintFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($travelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($travelComplianceData)), __LINE__);
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
            'AirSegment',
            'CreditCardAuth',
            'AirPricingAdjustment',
            'AirPricingTicketingModifiers',
            'DeliveryInfo',
            'AirSegmentSpecialUpdate',
            'LoyaltyCard',
            'SSR',
            'GeneralRemark',
            'AutoSeatAssignment',
            'SpecificSeatAssignment',
            'AirPricingPayment',
            'AssociatedRemark',
            'PocketItineraryRemark',
            'OptionalServicesInfo',
            'ThirdPartyInformation',
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
            throw new InvalidArgumentException(sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, AirSegment, CreditCardAuth, AirPricingAdjustment, AirPricingTicketingModifiers, DeliveryInfo, AirSegmentSpecialUpdate, LoyaltyCard, SSR, GeneralRemark, AutoSeatAssignment, SpecificSeatAssignment, AirPricingPayment, AssociatedRemark, PocketItineraryRemark, OptionalServicesInfo, ThirdPartyInformation, TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToTravelComplianceData($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->TravelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TravelComplianceData)), __LINE__);
        }
        $this->TravelComplianceData[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
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
     * @return \Travelport\UniversalRecord\StructType\AirUpdate
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
