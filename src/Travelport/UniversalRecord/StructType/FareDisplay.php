<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareDisplay StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns fare rule failure info for Non Valid fares. | Fare/Tariff Display
 * @subpackage Structs
 */
class FareDisplay extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $FareBasis;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The FareDisplayRule
     * Meta information extracted from the WSDL
     * - ref: FareDisplayRule
     * @var \Travelport\UniversalRecord\StructType\FareDisplayRule|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareDisplayRule $FareDisplayRule = null;
    /**
     * The FarePricing
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FarePricing
     * @var \Travelport\UniversalRecord\StructType\FarePricing[]
     */
    public ?array $FarePricing = null;
    /**
     * The FareRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: FareRestriction
     * @var \Travelport\UniversalRecord\StructType\FareRestriction[]
     */
    public ?array $FareRestriction = null;
    /**
     * The FareRoutingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRoutingInformation
     * @var string|null
     */
    public ?string $FareRoutingInformation = null;
    /**
     * The FareMileageInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareMileageInformation
     * @var string|null
     */
    public ?string $FareMileageInformation = null;
    /**
     * The AirFareDisplayRuleKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirFareDisplayRuleKey
     * @var \Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey $AirFareDisplayRuleKey = null;
    /**
     * The BookingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingCode
     * @var \Travelport\UniversalRecord\StructType\BookingCode[]
     */
    public ?array $BookingCode = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public ?array $AccountCode = null;
    /**
     * The AddlBookingCodeInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AddlBookingCodeInformation
     * @var \Travelport\UniversalRecord\StructType\AddlBookingCodeInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\AddlBookingCodeInformation $AddlBookingCodeInformation = null;
    /**
     * The FareRuleFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRuleFailureInfo
     * @var \Travelport\UniversalRecord\StructType\FareRuleFailureInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo $FareRuleFailureInfo = null;
    /**
     * The PriceChange
     * Meta information extracted from the WSDL
     * - documentation: Indicates a price change is found in Fare Control Manager
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PriceChangeType[]
     */
    public ?array $PriceChange = null;
    /**
     * The TripType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TripType = null;
    /**
     * The FareTypeCode
     * Meta information extracted from the WSDL
     * - documentation: ATPCO fare type code (e.g. XPN)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $FareTypeCode = null;
    /**
     * The SpecialFare
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $SpecialFare = null;
    /**
     * The InstantPurchase
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $InstantPurchase = null;
    /**
     * The EligibilityRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $EligibilityRestricted = null;
    /**
     * The FlightRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $FlightRestricted = null;
    /**
     * The StopoversRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $StopoversRestricted = null;
    /**
     * The TransfersRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $TransfersRestricted = null;
    /**
     * The BlackoutsExist
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $BlackoutsExist = null;
    /**
     * The AccompaniedTravel
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $AccompaniedTravel = null;
    /**
     * The MileOrRouteBasedFare
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $MileOrRouteBasedFare = null;
    /**
     * The GlobalIndicator
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $GlobalIndicator = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the origin airport or city code for which this tariff is applicable. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the destination airport or city code for which this tariff is applicable. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The FareTicketingCode
     * Meta information extracted from the WSDL
     * - documentation: Returns the ticketing code for which this tariff is applicable.
     * - use: optional
     * @var string|null
     */
    public ?string $FareTicketingCode = null;
    /**
     * The FareTicketingDesignator
     * Meta information extracted from the WSDL
     * - documentation: Returns the ticketing designator for which this tariff is applicable. | Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $FareTicketingDesignator = null;
    /**
     * Constructor method for FareDisplay
     * @uses FareDisplay::setCarrier()
     * @uses FareDisplay::setFareBasis()
     * @uses FareDisplay::setAmount()
     * @uses FareDisplay::setFareDisplayRule()
     * @uses FareDisplay::setFarePricing()
     * @uses FareDisplay::setFareRestriction()
     * @uses FareDisplay::setFareRoutingInformation()
     * @uses FareDisplay::setFareMileageInformation()
     * @uses FareDisplay::setAirFareDisplayRuleKey()
     * @uses FareDisplay::setBookingCode()
     * @uses FareDisplay::setAccountCode()
     * @uses FareDisplay::setAddlBookingCodeInformation()
     * @uses FareDisplay::setFareRuleFailureInfo()
     * @uses FareDisplay::setPriceChange()
     * @uses FareDisplay::setTripType()
     * @uses FareDisplay::setFareTypeCode()
     * @uses FareDisplay::setSpecialFare()
     * @uses FareDisplay::setInstantPurchase()
     * @uses FareDisplay::setEligibilityRestricted()
     * @uses FareDisplay::setFlightRestricted()
     * @uses FareDisplay::setStopoversRestricted()
     * @uses FareDisplay::setTransfersRestricted()
     * @uses FareDisplay::setBlackoutsExist()
     * @uses FareDisplay::setAccompaniedTravel()
     * @uses FareDisplay::setMileOrRouteBasedFare()
     * @uses FareDisplay::setGlobalIndicator()
     * @uses FareDisplay::setOrigin()
     * @uses FareDisplay::setDestination()
     * @uses FareDisplay::setFareTicketingCode()
     * @uses FareDisplay::setFareTicketingDesignator()
     * @param string $carrier
     * @param string $fareBasis
     * @param string $amount
     * @param \Travelport\UniversalRecord\StructType\FareDisplayRule $fareDisplayRule
     * @param \Travelport\UniversalRecord\StructType\FarePricing[] $farePricing
     * @param \Travelport\UniversalRecord\StructType\FareRestriction[] $fareRestriction
     * @param string $fareRoutingInformation
     * @param string $fareMileageInformation
     * @param \Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @param \Travelport\UniversalRecord\StructType\BookingCode[] $bookingCode
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @param \Travelport\UniversalRecord\StructType\AddlBookingCodeInformation $addlBookingCodeInformation
     * @param \Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @param \Travelport\UniversalRecord\StructType\PriceChangeType[] $priceChange
     * @param string $tripType
     * @param string $fareTypeCode
     * @param bool $specialFare
     * @param bool $instantPurchase
     * @param bool $eligibilityRestricted
     * @param bool $flightRestricted
     * @param bool $stopoversRestricted
     * @param bool $transfersRestricted
     * @param bool $blackoutsExist
     * @param bool $accompaniedTravel
     * @param string $mileOrRouteBasedFare
     * @param string $globalIndicator
     * @param string $origin
     * @param string $destination
     * @param string $fareTicketingCode
     * @param string $fareTicketingDesignator
     */
    public function __construct(string $carrier, string $fareBasis, string $amount, ?\Travelport\UniversalRecord\StructType\FareDisplayRule $fareDisplayRule = null, ?array $farePricing = null, ?array $fareRestriction = null, ?string $fareRoutingInformation = null, ?string $fareMileageInformation = null, ?\Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null, ?array $bookingCode = null, ?array $accountCode = null, ?\Travelport\UniversalRecord\StructType\AddlBookingCodeInformation $addlBookingCodeInformation = null, ?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null, ?array $priceChange = null, ?string $tripType = null, ?string $fareTypeCode = null, ?bool $specialFare = null, ?bool $instantPurchase = null, ?bool $eligibilityRestricted = null, ?bool $flightRestricted = null, ?bool $stopoversRestricted = null, ?bool $transfersRestricted = null, ?bool $blackoutsExist = null, ?bool $accompaniedTravel = null, ?string $mileOrRouteBasedFare = null, ?string $globalIndicator = null, ?string $origin = null, ?string $destination = null, ?string $fareTicketingCode = null, ?string $fareTicketingDesignator = null)
    {
        $this
            ->setCarrier($carrier)
            ->setFareBasis($fareBasis)
            ->setAmount($amount)
            ->setFareDisplayRule($fareDisplayRule)
            ->setFarePricing($farePricing)
            ->setFareRestriction($fareRestriction)
            ->setFareRoutingInformation($fareRoutingInformation)
            ->setFareMileageInformation($fareMileageInformation)
            ->setAirFareDisplayRuleKey($airFareDisplayRuleKey)
            ->setBookingCode($bookingCode)
            ->setAccountCode($accountCode)
            ->setAddlBookingCodeInformation($addlBookingCodeInformation)
            ->setFareRuleFailureInfo($fareRuleFailureInfo)
            ->setPriceChange($priceChange)
            ->setTripType($tripType)
            ->setFareTypeCode($fareTypeCode)
            ->setSpecialFare($specialFare)
            ->setInstantPurchase($instantPurchase)
            ->setEligibilityRestricted($eligibilityRestricted)
            ->setFlightRestricted($flightRestricted)
            ->setStopoversRestricted($stopoversRestricted)
            ->setTransfersRestricted($transfersRestricted)
            ->setBlackoutsExist($blackoutsExist)
            ->setAccompaniedTravel($accompaniedTravel)
            ->setMileOrRouteBasedFare($mileOrRouteBasedFare)
            ->setGlobalIndicator($globalIndicator)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setFareTicketingCode($fareTicketingCode)
            ->setFareTicketingDesignator($fareTicketingDesignator);
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string
     */
    public function getFareBasis(): string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareBasis(string $fareBasis): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get FareDisplayRule value
     * @return \Travelport\UniversalRecord\StructType\FareDisplayRule|null
     */
    public function getFareDisplayRule(): ?\Travelport\UniversalRecord\StructType\FareDisplayRule
    {
        return $this->FareDisplayRule;
    }
    /**
     * Set FareDisplayRule value
     * @param \Travelport\UniversalRecord\StructType\FareDisplayRule $fareDisplayRule
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareDisplayRule(?\Travelport\UniversalRecord\StructType\FareDisplayRule $fareDisplayRule = null): self
    {
        $this->FareDisplayRule = $fareDisplayRule;
        
        return $this;
    }
    /**
     * Get FarePricing value
     * @return \Travelport\UniversalRecord\StructType\FarePricing[]
     */
    public function getFarePricing(): ?array
    {
        return $this->FarePricing;
    }
    /**
     * Set FarePricing value
     * @param \Travelport\UniversalRecord\StructType\FarePricing[] $farePricing
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFarePricing(?array $farePricing = null): self
    {
        $this->FarePricing = $farePricing;
        
        return $this;
    }
    /**
     * Add item to FarePricing value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FarePricing $item
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function addToFarePricing(\Travelport\UniversalRecord\StructType\FarePricing $item): self
    {
        $this->FarePricing[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestriction value
     * @return \Travelport\UniversalRecord\StructType\FareRestriction[]
     */
    public function getFareRestriction(): ?array
    {
        return $this->FareRestriction;
    }
    /**
     * Set FareRestriction value
     * @param \Travelport\UniversalRecord\StructType\FareRestriction[] $fareRestriction
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareRestriction(?array $fareRestriction = null): self
    {
        $this->FareRestriction = $fareRestriction;
        
        return $this;
    }
    /**
     * Add item to FareRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRestriction $item
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function addToFareRestriction(\Travelport\UniversalRecord\StructType\FareRestriction $item): self
    {
        $this->FareRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get FareRoutingInformation value
     * @return string|null
     */
    public function getFareRoutingInformation(): ?string
    {
        return $this->FareRoutingInformation;
    }
    /**
     * Set FareRoutingInformation value
     * @param string $fareRoutingInformation
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareRoutingInformation(?string $fareRoutingInformation = null): self
    {
        $this->FareRoutingInformation = $fareRoutingInformation;
        
        return $this;
    }
    /**
     * Get FareMileageInformation value
     * @return string|null
     */
    public function getFareMileageInformation(): ?string
    {
        return $this->FareMileageInformation;
    }
    /**
     * Set FareMileageInformation value
     * @param string $fareMileageInformation
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareMileageInformation(?string $fareMileageInformation = null): self
    {
        $this->FareMileageInformation = $fareMileageInformation;
        
        return $this;
    }
    /**
     * Get AirFareDisplayRuleKey value
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey|null
     */
    public function getAirFareDisplayRuleKey(): ?\Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey
    {
        return $this->AirFareDisplayRuleKey;
    }
    /**
     * Set AirFareDisplayRuleKey value
     * @param \Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setAirFareDisplayRuleKey(?\Travelport\UniversalRecord\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null): self
    {
        $this->AirFareDisplayRuleKey = $airFareDisplayRuleKey;
        
        return $this;
    }
    /**
     * Get BookingCode value
     * @return \Travelport\UniversalRecord\StructType\BookingCode[]
     */
    public function getBookingCode(): ?array
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param \Travelport\UniversalRecord\StructType\BookingCode[] $bookingCode
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setBookingCode(?array $bookingCode = null): self
    {
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Add item to BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingCode $item
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function addToBookingCode(\Travelport\UniversalRecord\StructType\BookingCode $item): self
    {
        $this->BookingCode[] = $item;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode $item
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function addToAccountCode(\Travelport\UniversalRecord\StructType\AccountCode $item): self
    {
        $this->AccountCode[] = $item;
        
        return $this;
    }
    /**
     * Get AddlBookingCodeInformation value
     * @return \Travelport\UniversalRecord\StructType\AddlBookingCodeInformation|null
     */
    public function getAddlBookingCodeInformation(): ?\Travelport\UniversalRecord\StructType\AddlBookingCodeInformation
    {
        return $this->AddlBookingCodeInformation;
    }
    /**
     * Set AddlBookingCodeInformation value
     * @param \Travelport\UniversalRecord\StructType\AddlBookingCodeInformation $addlBookingCodeInformation
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setAddlBookingCodeInformation(?\Travelport\UniversalRecord\StructType\AddlBookingCodeInformation $addlBookingCodeInformation = null): self
    {
        $this->AddlBookingCodeInformation = $addlBookingCodeInformation;
        
        return $this;
    }
    /**
     * Get FareRuleFailureInfo value
     * @return \Travelport\UniversalRecord\StructType\FareRuleFailureInfo|null
     */
    public function getFareRuleFailureInfo(): ?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo
    {
        return $this->FareRuleFailureInfo;
    }
    /**
     * Set FareRuleFailureInfo value
     * @param \Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareRuleFailureInfo(?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null): self
    {
        $this->FareRuleFailureInfo = $fareRuleFailureInfo;
        
        return $this;
    }
    /**
     * Get PriceChange value
     * @return \Travelport\UniversalRecord\StructType\PriceChangeType[]
     */
    public function getPriceChange(): ?array
    {
        return $this->PriceChange;
    }
    /**
     * Set PriceChange value
     * @param \Travelport\UniversalRecord\StructType\PriceChangeType[] $priceChange
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setPriceChange(?array $priceChange = null): self
    {
        $this->PriceChange = $priceChange;
        
        return $this;
    }
    /**
     * Add item to PriceChange value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PriceChangeType $item
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function addToPriceChange(\Travelport\UniversalRecord\StructType\PriceChangeType $item): self
    {
        $this->PriceChange[] = $item;
        
        return $this;
    }
    /**
     * Get TripType value
     * @return string|null
     */
    public function getTripType(): ?string
    {
        return $this->TripType;
    }
    /**
     * Set TripType value
     * @param string $tripType
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setTripType(?string $tripType = null): self
    {
        $this->TripType = $tripType;
        
        return $this;
    }
    /**
     * Get FareTypeCode value
     * @return string|null
     */
    public function getFareTypeCode(): ?string
    {
        return $this->FareTypeCode;
    }
    /**
     * Set FareTypeCode value
     * @param string $fareTypeCode
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareTypeCode(?string $fareTypeCode = null): self
    {
        $this->FareTypeCode = $fareTypeCode;
        
        return $this;
    }
    /**
     * Get SpecialFare value
     * @return bool|null
     */
    public function getSpecialFare(): ?bool
    {
        return $this->SpecialFare;
    }
    /**
     * Set SpecialFare value
     * @param bool $specialFare
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setSpecialFare(?bool $specialFare = null): self
    {
        $this->SpecialFare = $specialFare;
        
        return $this;
    }
    /**
     * Get InstantPurchase value
     * @return bool|null
     */
    public function getInstantPurchase(): ?bool
    {
        return $this->InstantPurchase;
    }
    /**
     * Set InstantPurchase value
     * @param bool $instantPurchase
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setInstantPurchase(?bool $instantPurchase = null): self
    {
        $this->InstantPurchase = $instantPurchase;
        
        return $this;
    }
    /**
     * Get EligibilityRestricted value
     * @return bool|null
     */
    public function getEligibilityRestricted(): ?bool
    {
        return $this->EligibilityRestricted;
    }
    /**
     * Set EligibilityRestricted value
     * @param bool $eligibilityRestricted
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setEligibilityRestricted(?bool $eligibilityRestricted = null): self
    {
        $this->EligibilityRestricted = $eligibilityRestricted;
        
        return $this;
    }
    /**
     * Get FlightRestricted value
     * @return bool|null
     */
    public function getFlightRestricted(): ?bool
    {
        return $this->FlightRestricted;
    }
    /**
     * Set FlightRestricted value
     * @param bool $flightRestricted
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFlightRestricted(?bool $flightRestricted = null): self
    {
        $this->FlightRestricted = $flightRestricted;
        
        return $this;
    }
    /**
     * Get StopoversRestricted value
     * @return bool|null
     */
    public function getStopoversRestricted(): ?bool
    {
        return $this->StopoversRestricted;
    }
    /**
     * Set StopoversRestricted value
     * @param bool $stopoversRestricted
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setStopoversRestricted(?bool $stopoversRestricted = null): self
    {
        $this->StopoversRestricted = $stopoversRestricted;
        
        return $this;
    }
    /**
     * Get TransfersRestricted value
     * @return bool|null
     */
    public function getTransfersRestricted(): ?bool
    {
        return $this->TransfersRestricted;
    }
    /**
     * Set TransfersRestricted value
     * @param bool $transfersRestricted
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setTransfersRestricted(?bool $transfersRestricted = null): self
    {
        $this->TransfersRestricted = $transfersRestricted;
        
        return $this;
    }
    /**
     * Get BlackoutsExist value
     * @return bool|null
     */
    public function getBlackoutsExist(): ?bool
    {
        return $this->BlackoutsExist;
    }
    /**
     * Set BlackoutsExist value
     * @param bool $blackoutsExist
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setBlackoutsExist(?bool $blackoutsExist = null): self
    {
        $this->BlackoutsExist = $blackoutsExist;
        
        return $this;
    }
    /**
     * Get AccompaniedTravel value
     * @return bool|null
     */
    public function getAccompaniedTravel(): ?bool
    {
        return $this->AccompaniedTravel;
    }
    /**
     * Set AccompaniedTravel value
     * @param bool $accompaniedTravel
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setAccompaniedTravel(?bool $accompaniedTravel = null): self
    {
        $this->AccompaniedTravel = $accompaniedTravel;
        
        return $this;
    }
    /**
     * Get MileOrRouteBasedFare value
     * @return string|null
     */
    public function getMileOrRouteBasedFare(): ?string
    {
        return $this->MileOrRouteBasedFare;
    }
    /**
     * Set MileOrRouteBasedFare value
     * @param string $mileOrRouteBasedFare
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setMileOrRouteBasedFare(?string $mileOrRouteBasedFare = null): self
    {
        $this->MileOrRouteBasedFare = $mileOrRouteBasedFare;
        
        return $this;
    }
    /**
     * Get GlobalIndicator value
     * @return string|null
     */
    public function getGlobalIndicator(): ?string
    {
        return $this->GlobalIndicator;
    }
    /**
     * Set GlobalIndicator value
     * @param string $globalIndicator
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setGlobalIndicator(?string $globalIndicator = null): self
    {
        $this->GlobalIndicator = $globalIndicator;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get FareTicketingCode value
     * @return string|null
     */
    public function getFareTicketingCode(): ?string
    {
        return $this->FareTicketingCode;
    }
    /**
     * Set FareTicketingCode value
     * @param string $fareTicketingCode
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareTicketingCode(?string $fareTicketingCode = null): self
    {
        $this->FareTicketingCode = $fareTicketingCode;
        
        return $this;
    }
    /**
     * Get FareTicketingDesignator value
     * @return string|null
     */
    public function getFareTicketingDesignator(): ?string
    {
        return $this->FareTicketingDesignator;
    }
    /**
     * Set FareTicketingDesignator value
     * @param string $fareTicketingDesignator
     * @return \Travelport\UniversalRecord\StructType\FareDisplay
     */
    public function setFareTicketingDesignator(?string $fareTicketingDesignator = null): self
    {
        $this->FareTicketingDesignator = $fareTicketingDesignator;
        
        return $this;
    }
}
