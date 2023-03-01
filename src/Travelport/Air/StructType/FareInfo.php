<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the Commission for Agency for a particular Fare component. Apllicable Providers are 1G and 1V. | Information about this fare component
 * @subpackage Structs
 */
class FareInfo extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare
     * - use: required
     * @var string
     */
    public string $FareBasis;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The PTC that is associated with this fare. | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: required
     * @var string
     */
    public string $PassengerTypeCode;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the origin market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the destination market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the date on which this fare was quoted
     * - use: required
     * @var string
     */
    public string $EffectiveDate;
    /**
     * The FareTicketDesignator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareTicketDesignator
     * @var \Travelport\Air\StructType\FareTicketDesignator[]
     */
    public ?array $FareTicketDesignator = null;
    /**
     * The TicketingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingCode
     * @var \Travelport\Air\StructType\TicketingCode[]
     */
    public ?array $TicketingCode = null;
    /**
     * The FareSurcharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareSurcharge
     * @var \Travelport\Air\StructType\FareSurcharge[]
     */
    public ?array $FareSurcharge = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Air\StructType\AccountCode[]
     */
    public ?array $AccountCode = null;
    /**
     * The ContractCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ContractCode
     * @var \Travelport\Air\StructType\ContractCode[]
     */
    public ?array $ContractCode = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Endorsement
     * @var \Travelport\Air\StructType\Endorsement[]
     */
    public ?array $Endorsement = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Travelport\Air\StructType\BaggageAllowance|null
     */
    public ?\Travelport\Air\StructType\BaggageAllowance $BaggageAllowance = null;
    /**
     * The FareRuleKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRuleKey
     * @var \Travelport\Air\StructType\FareRuleKey|null
     */
    public ?\Travelport\Air\StructType\FareRuleKey $FareRuleKey = null;
    /**
     * The FareRuleFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRuleFailureInfo
     * @var \Travelport\Air\StructType\FareRuleFailureInfo|null
     */
    public ?\Travelport\Air\StructType\FareRuleFailureInfo $FareRuleFailureInfo = null;
    /**
     * The FareRemarkRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRemarkRef
     * @var \Travelport\Air\StructType\FareRemarkRef[]
     */
    public ?array $FareRemarkRef = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Brand
     * @var \Travelport\Air\StructType\Brand|null
     */
    public ?\Travelport\Air\StructType\Brand $Brand = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Air\StructType\Commission|null
     */
    public ?\Travelport\Air\StructType\Commission $Commission = null;
    /**
     * The FareAttributes
     * Meta information extracted from the WSDL
     * - documentation: Returns all fare attributes separated by pipe ‘|’. Attribute information is returned by comma separated values for each attribute. These information include attribute number, chargeable indicator and supplementary info. Attribute
     * numbers: 1 - Checked Bag, 2 - Carry On, 3 - Rebooking, 4 - Refund, 5 - Seats, 6 - Meals, 7 - WiFi. Chargeable Indicator: Y - Chargeable, N - Not Chargeable. Supplementary Information that will be returned is : For 1 and 2 - Baggage weights. For 3 –
     * Changeable Info. For 4 – Refundable Info. For 5 - Seat description. For 6 – Meal description. For 7 – WiFi description. Example: 1,Y,23|1,N,50|2,N,8|3,N,CHANGEABLE|4,Y,REFUNDABLE|5,N,SEATING|5,N,MIDDLE|6,Y,SOFT DRINK|6,N,ALCOHOLIC
     * DRINK|6,Y,SNACK|7,X,WIFI
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $FareAttributes = null;
    /**
     * The ChangePenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to change the itinerary
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeFarePenalty|null
     */
    public ?\Travelport\Air\StructType\TypeFarePenalty $ChangePenalty = null;
    /**
     * The CancelPenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to cancel the fare
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeFarePenalty|null
     */
    public ?\Travelport\Air\StructType\TypeFarePenalty $CancelPenalty = null;
    /**
     * The FareRulesFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRulesFilter
     * @var \Travelport\Air\StructType\FareRulesFilter|null
     */
    public ?\Travelport\Air\StructType\FareRulesFilter $FareRulesFilter = null;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the departure date of the first segment that uses this fare.
     * - use: optional
     * @var string|null
     */
    public ?string $TravelDate = null;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the departure date of the first segment of the journey.
     * - use: optional
     * @var string|null
     */
    public ?string $DepartureDate = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The PrivateFare
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $PrivateFare = null;
    /**
     * The NegotiatedFare
     * Meta information extracted from the WSDL
     * - documentation: Identifies the fare as a Negotiated Fare.
     * - use: optional
     * @var bool|null
     */
    public ?bool $NegotiatedFare = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $TourCode = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $WaiverCode = null;
    /**
     * The NotValidBefore
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid before this date.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidBefore = null;
    /**
     * The NotValidAfter
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid after this date.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidAfter = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: Provider PseudoCityCode associated with private fare. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The FareFamily
     * Meta information extracted from the WSDL
     * - documentation: An alpha-numeric string which denotes fare family. Some carriers may return this in lieu of or in addition to the CabinClass.
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $FareFamily = null;
    /**
     * The PromotionalFare
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the Fare is Promotional fare or not.
     * - use: optional
     * @var bool|null
     */
    public ?bool $PromotionalFare = null;
    /**
     * The CarCode
     * Meta information extracted from the WSDL
     * - documentation: Car code value. Maximum 15 characters. Applicable provider is 1G and 1V
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $CarCode = null;
    /**
     * The ValueCode
     * Meta information extracted from the WSDL
     * - documentation: Value code value. Maximum 15 characters. Applicable provider is 1G and 1V
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $ValueCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket can be issued as bulk for this fare. Providers supported: Worldspan
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The InclusiveTour
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket can be issued as part of included package for this fare. Providers supported: Worldspan
     * - use: optional
     * @var bool|null
     */
    public ?bool $InclusiveTour = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Used in rapid reprice
     * - use: optional
     * @var string|null
     */
    public ?string $Value = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Code of the provider returning this fare info | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: Currency code and value for the approximate tax amount for this fare component. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TaxAmount = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for FareInfo
     * @uses FareInfo::setKey()
     * @uses FareInfo::setFareBasis()
     * @uses FareInfo::setPassengerTypeCode()
     * @uses FareInfo::setOrigin()
     * @uses FareInfo::setDestination()
     * @uses FareInfo::setEffectiveDate()
     * @uses FareInfo::setFareTicketDesignator()
     * @uses FareInfo::setTicketingCode()
     * @uses FareInfo::setFareSurcharge()
     * @uses FareInfo::setAccountCode()
     * @uses FareInfo::setContractCode()
     * @uses FareInfo::setEndorsement()
     * @uses FareInfo::setBaggageAllowance()
     * @uses FareInfo::setFareRuleKey()
     * @uses FareInfo::setFareRuleFailureInfo()
     * @uses FareInfo::setFareRemarkRef()
     * @uses FareInfo::setBrand()
     * @uses FareInfo::setCommission()
     * @uses FareInfo::setFareAttributes()
     * @uses FareInfo::setChangePenalty()
     * @uses FareInfo::setCancelPenalty()
     * @uses FareInfo::setFareRulesFilter()
     * @uses FareInfo::setTravelDate()
     * @uses FareInfo::setDepartureDate()
     * @uses FareInfo::setAmount()
     * @uses FareInfo::setPrivateFare()
     * @uses FareInfo::setNegotiatedFare()
     * @uses FareInfo::setTourCode()
     * @uses FareInfo::setWaiverCode()
     * @uses FareInfo::setNotValidBefore()
     * @uses FareInfo::setNotValidAfter()
     * @uses FareInfo::setPseudoCityCode()
     * @uses FareInfo::setFareFamily()
     * @uses FareInfo::setPromotionalFare()
     * @uses FareInfo::setCarCode()
     * @uses FareInfo::setValueCode()
     * @uses FareInfo::setBulkTicket()
     * @uses FareInfo::setInclusiveTour()
     * @uses FareInfo::setValue()
     * @uses FareInfo::setSupplierCode()
     * @uses FareInfo::setTaxAmount()
     * @uses FareInfo::setElStat()
     * @uses FareInfo::setKeyOverride()
     * @param string $key
     * @param string $fareBasis
     * @param string $passengerTypeCode
     * @param string $origin
     * @param string $destination
     * @param string $effectiveDate
     * @param \Travelport\Air\StructType\FareTicketDesignator[] $fareTicketDesignator
     * @param \Travelport\Air\StructType\TicketingCode[] $ticketingCode
     * @param \Travelport\Air\StructType\FareSurcharge[] $fareSurcharge
     * @param \Travelport\Air\StructType\AccountCode[] $accountCode
     * @param \Travelport\Air\StructType\ContractCode[] $contractCode
     * @param \Travelport\Air\StructType\Endorsement[] $endorsement
     * @param \Travelport\Air\StructType\BaggageAllowance $baggageAllowance
     * @param \Travelport\Air\StructType\FareRuleKey $fareRuleKey
     * @param \Travelport\Air\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @param \Travelport\Air\StructType\FareRemarkRef[] $fareRemarkRef
     * @param \Travelport\Air\StructType\Brand $brand
     * @param \Travelport\Air\StructType\Commission $commission
     * @param string $fareAttributes
     * @param \Travelport\Air\StructType\TypeFarePenalty $changePenalty
     * @param \Travelport\Air\StructType\TypeFarePenalty $cancelPenalty
     * @param \Travelport\Air\StructType\FareRulesFilter $fareRulesFilter
     * @param string $travelDate
     * @param string $departureDate
     * @param string $amount
     * @param string $privateFare
     * @param bool $negotiatedFare
     * @param string $tourCode
     * @param string $waiverCode
     * @param string $notValidBefore
     * @param string $notValidAfter
     * @param string $pseudoCityCode
     * @param string $fareFamily
     * @param bool $promotionalFare
     * @param string $carCode
     * @param string $valueCode
     * @param bool $bulkTicket
     * @param bool $inclusiveTour
     * @param string $value
     * @param string $supplierCode
     * @param string $taxAmount
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, string $fareBasis, string $passengerTypeCode, string $origin, string $destination, string $effectiveDate, ?array $fareTicketDesignator = null, ?array $ticketingCode = null, ?array $fareSurcharge = null, ?array $accountCode = null, ?array $contractCode = null, ?array $endorsement = null, ?\Travelport\Air\StructType\BaggageAllowance $baggageAllowance = null, ?\Travelport\Air\StructType\FareRuleKey $fareRuleKey = null, ?\Travelport\Air\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null, ?array $fareRemarkRef = null, ?\Travelport\Air\StructType\Brand $brand = null, ?\Travelport\Air\StructType\Commission $commission = null, ?string $fareAttributes = null, ?\Travelport\Air\StructType\TypeFarePenalty $changePenalty = null, ?\Travelport\Air\StructType\TypeFarePenalty $cancelPenalty = null, ?\Travelport\Air\StructType\FareRulesFilter $fareRulesFilter = null, ?string $travelDate = null, ?string $departureDate = null, ?string $amount = null, ?string $privateFare = null, ?bool $negotiatedFare = null, ?string $tourCode = null, ?string $waiverCode = null, ?string $notValidBefore = null, ?string $notValidAfter = null, ?string $pseudoCityCode = null, ?string $fareFamily = null, ?bool $promotionalFare = null, ?string $carCode = null, ?string $valueCode = null, ?bool $bulkTicket = null, ?bool $inclusiveTour = null, ?string $value = null, ?string $supplierCode = null, ?string $taxAmount = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setFareBasis($fareBasis)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setEffectiveDate($effectiveDate)
            ->setFareTicketDesignator($fareTicketDesignator)
            ->setTicketingCode($ticketingCode)
            ->setFareSurcharge($fareSurcharge)
            ->setAccountCode($accountCode)
            ->setContractCode($contractCode)
            ->setEndorsement($endorsement)
            ->setBaggageAllowance($baggageAllowance)
            ->setFareRuleKey($fareRuleKey)
            ->setFareRuleFailureInfo($fareRuleFailureInfo)
            ->setFareRemarkRef($fareRemarkRef)
            ->setBrand($brand)
            ->setCommission($commission)
            ->setFareAttributes($fareAttributes)
            ->setChangePenalty($changePenalty)
            ->setCancelPenalty($cancelPenalty)
            ->setFareRulesFilter($fareRulesFilter)
            ->setTravelDate($travelDate)
            ->setDepartureDate($departureDate)
            ->setAmount($amount)
            ->setPrivateFare($privateFare)
            ->setNegotiatedFare($negotiatedFare)
            ->setTourCode($tourCode)
            ->setWaiverCode($waiverCode)
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter)
            ->setPseudoCityCode($pseudoCityCode)
            ->setFareFamily($fareFamily)
            ->setPromotionalFare($promotionalFare)
            ->setCarCode($carCode)
            ->setValueCode($valueCode)
            ->setBulkTicket($bulkTicket)
            ->setInclusiveTour($inclusiveTour)
            ->setValue($value)
            ->setSupplierCode($supplierCode)
            ->setTaxAmount($taxAmount)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareBasis(string $fareBasis): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string
     */
    public function getPassengerTypeCode(): string
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setPassengerTypeCode(string $passengerTypeCode): self
    {
        $this->PassengerTypeCode = $passengerTypeCode;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get FareTicketDesignator value
     * @return \Travelport\Air\StructType\FareTicketDesignator[]
     */
    public function getFareTicketDesignator(): ?array
    {
        return $this->FareTicketDesignator;
    }
    /**
     * Set FareTicketDesignator value
     * @param \Travelport\Air\StructType\FareTicketDesignator[] $fareTicketDesignator
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareTicketDesignator(?array $fareTicketDesignator = null): self
    {
        $this->FareTicketDesignator = $fareTicketDesignator;
        
        return $this;
    }
    /**
     * Add item to FareTicketDesignator value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareTicketDesignator $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToFareTicketDesignator(\Travelport\Air\StructType\FareTicketDesignator $item): self
    {
        $this->FareTicketDesignator[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingCode value
     * @return \Travelport\Air\StructType\TicketingCode[]
     */
    public function getTicketingCode(): ?array
    {
        return $this->TicketingCode;
    }
    /**
     * Set TicketingCode value
     * @param \Travelport\Air\StructType\TicketingCode[] $ticketingCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setTicketingCode(?array $ticketingCode = null): self
    {
        $this->TicketingCode = $ticketingCode;
        
        return $this;
    }
    /**
     * Add item to TicketingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketingCode $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToTicketingCode(\Travelport\Air\StructType\TicketingCode $item): self
    {
        $this->TicketingCode[] = $item;
        
        return $this;
    }
    /**
     * Get FareSurcharge value
     * @return \Travelport\Air\StructType\FareSurcharge[]
     */
    public function getFareSurcharge(): ?array
    {
        return $this->FareSurcharge;
    }
    /**
     * Set FareSurcharge value
     * @param \Travelport\Air\StructType\FareSurcharge[] $fareSurcharge
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareSurcharge(?array $fareSurcharge = null): self
    {
        $this->FareSurcharge = $fareSurcharge;
        
        return $this;
    }
    /**
     * Add item to FareSurcharge value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareSurcharge $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToFareSurcharge(\Travelport\Air\StructType\FareSurcharge $item): self
    {
        $this->FareSurcharge[] = $item;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Air\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Air\StructType\AccountCode[] $accountCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AccountCode $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToAccountCode(\Travelport\Air\StructType\AccountCode $item): self
    {
        $this->AccountCode[] = $item;
        
        return $this;
    }
    /**
     * Get ContractCode value
     * @return \Travelport\Air\StructType\ContractCode[]
     */
    public function getContractCode(): ?array
    {
        return $this->ContractCode;
    }
    /**
     * Set ContractCode value
     * @param \Travelport\Air\StructType\ContractCode[] $contractCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setContractCode(?array $contractCode = null): self
    {
        $this->ContractCode = $contractCode;
        
        return $this;
    }
    /**
     * Add item to ContractCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ContractCode $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToContractCode(\Travelport\Air\StructType\ContractCode $item): self
    {
        $this->ContractCode[] = $item;
        
        return $this;
    }
    /**
     * Get Endorsement value
     * @return \Travelport\Air\StructType\Endorsement[]
     */
    public function getEndorsement(): ?array
    {
        return $this->Endorsement;
    }
    /**
     * Set Endorsement value
     * @param \Travelport\Air\StructType\Endorsement[] $endorsement
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setEndorsement(?array $endorsement = null): self
    {
        $this->Endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Add item to Endorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Endorsement $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToEndorsement(\Travelport\Air\StructType\Endorsement $item): self
    {
        $this->Endorsement[] = $item;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Travelport\Air\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance(): ?\Travelport\Air\StructType\BaggageAllowance
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Travelport\Air\StructType\BaggageAllowance $baggageAllowance
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setBaggageAllowance(?\Travelport\Air\StructType\BaggageAllowance $baggageAllowance = null): self
    {
        $this->BaggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Get FareRuleKey value
     * @return \Travelport\Air\StructType\FareRuleKey|null
     */
    public function getFareRuleKey(): ?\Travelport\Air\StructType\FareRuleKey
    {
        return $this->FareRuleKey;
    }
    /**
     * Set FareRuleKey value
     * @param \Travelport\Air\StructType\FareRuleKey $fareRuleKey
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareRuleKey(?\Travelport\Air\StructType\FareRuleKey $fareRuleKey = null): self
    {
        $this->FareRuleKey = $fareRuleKey;
        
        return $this;
    }
    /**
     * Get FareRuleFailureInfo value
     * @return \Travelport\Air\StructType\FareRuleFailureInfo|null
     */
    public function getFareRuleFailureInfo(): ?\Travelport\Air\StructType\FareRuleFailureInfo
    {
        return $this->FareRuleFailureInfo;
    }
    /**
     * Set FareRuleFailureInfo value
     * @param \Travelport\Air\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareRuleFailureInfo(?\Travelport\Air\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null): self
    {
        $this->FareRuleFailureInfo = $fareRuleFailureInfo;
        
        return $this;
    }
    /**
     * Get FareRemarkRef value
     * @return \Travelport\Air\StructType\FareRemarkRef[]
     */
    public function getFareRemarkRef(): ?array
    {
        return $this->FareRemarkRef;
    }
    /**
     * Set FareRemarkRef value
     * @param \Travelport\Air\StructType\FareRemarkRef[] $fareRemarkRef
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareRemarkRef(?array $fareRemarkRef = null): self
    {
        $this->FareRemarkRef = $fareRemarkRef;
        
        return $this;
    }
    /**
     * Add item to FareRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareRemarkRef $item
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function addToFareRemarkRef(\Travelport\Air\StructType\FareRemarkRef $item): self
    {
        $this->FareRemarkRef[] = $item;
        
        return $this;
    }
    /**
     * Get Brand value
     * @return \Travelport\Air\StructType\Brand|null
     */
    public function getBrand(): ?\Travelport\Air\StructType\Brand
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param \Travelport\Air\StructType\Brand $brand
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setBrand(?\Travelport\Air\StructType\Brand $brand = null): self
    {
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Air\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Air\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Air\StructType\Commission $commission
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setCommission(?\Travelport\Air\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get FareAttributes value
     * @return string|null
     */
    public function getFareAttributes(): ?string
    {
        return $this->FareAttributes;
    }
    /**
     * Set FareAttributes value
     * @param string $fareAttributes
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareAttributes(?string $fareAttributes = null): self
    {
        $this->FareAttributes = $fareAttributes;
        
        return $this;
    }
    /**
     * Get ChangePenalty value
     * @return \Travelport\Air\StructType\TypeFarePenalty|null
     */
    public function getChangePenalty(): ?\Travelport\Air\StructType\TypeFarePenalty
    {
        return $this->ChangePenalty;
    }
    /**
     * Set ChangePenalty value
     * @param \Travelport\Air\StructType\TypeFarePenalty $changePenalty
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setChangePenalty(?\Travelport\Air\StructType\TypeFarePenalty $changePenalty = null): self
    {
        $this->ChangePenalty = $changePenalty;
        
        return $this;
    }
    /**
     * Get CancelPenalty value
     * @return \Travelport\Air\StructType\TypeFarePenalty|null
     */
    public function getCancelPenalty(): ?\Travelport\Air\StructType\TypeFarePenalty
    {
        return $this->CancelPenalty;
    }
    /**
     * Set CancelPenalty value
     * @param \Travelport\Air\StructType\TypeFarePenalty $cancelPenalty
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setCancelPenalty(?\Travelport\Air\StructType\TypeFarePenalty $cancelPenalty = null): self
    {
        $this->CancelPenalty = $cancelPenalty;
        
        return $this;
    }
    /**
     * Get FareRulesFilter value
     * @return \Travelport\Air\StructType\FareRulesFilter|null
     */
    public function getFareRulesFilter(): ?\Travelport\Air\StructType\FareRulesFilter
    {
        return $this->FareRulesFilter;
    }
    /**
     * Set FareRulesFilter value
     * @param \Travelport\Air\StructType\FareRulesFilter $fareRulesFilter
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareRulesFilter(?\Travelport\Air\StructType\FareRulesFilter $fareRulesFilter = null): self
    {
        $this->FareRulesFilter = $fareRulesFilter;
        
        return $this;
    }
    /**
     * Get TravelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param string $travelDate
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        $this->TravelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        $this->DepartureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get PrivateFare value
     * @return string|null
     */
    public function getPrivateFare(): ?string
    {
        return $this->PrivateFare;
    }
    /**
     * Set PrivateFare value
     * @param string $privateFare
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setPrivateFare(?string $privateFare = null): self
    {
        $this->PrivateFare = $privateFare;
        
        return $this;
    }
    /**
     * Get NegotiatedFare value
     * @return bool|null
     */
    public function getNegotiatedFare(): ?bool
    {
        return $this->NegotiatedFare;
    }
    /**
     * Set NegotiatedFare value
     * @param bool $negotiatedFare
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setNegotiatedFare(?bool $negotiatedFare = null): self
    {
        $this->NegotiatedFare = $negotiatedFare;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setTourCode(?string $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return string|null
     */
    public function getWaiverCode(): ?string
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param string $waiverCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setWaiverCode(?string $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get NotValidBefore value
     * @return string|null
     */
    public function getNotValidBefore(): ?string
    {
        return $this->NotValidBefore;
    }
    /**
     * Set NotValidBefore value
     * @param string $notValidBefore
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setNotValidBefore(?string $notValidBefore = null): self
    {
        $this->NotValidBefore = $notValidBefore;
        
        return $this;
    }
    /**
     * Get NotValidAfter value
     * @return string|null
     */
    public function getNotValidAfter(): ?string
    {
        return $this->NotValidAfter;
    }
    /**
     * Set NotValidAfter value
     * @param string $notValidAfter
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
        $this->NotValidAfter = $notValidAfter;
        
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get FareFamily value
     * @return string|null
     */
    public function getFareFamily(): ?string
    {
        return $this->FareFamily;
    }
    /**
     * Set FareFamily value
     * @param string $fareFamily
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setFareFamily(?string $fareFamily = null): self
    {
        $this->FareFamily = $fareFamily;
        
        return $this;
    }
    /**
     * Get PromotionalFare value
     * @return bool|null
     */
    public function getPromotionalFare(): ?bool
    {
        return $this->PromotionalFare;
    }
    /**
     * Set PromotionalFare value
     * @param bool $promotionalFare
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setPromotionalFare(?bool $promotionalFare = null): self
    {
        $this->PromotionalFare = $promotionalFare;
        
        return $this;
    }
    /**
     * Get CarCode value
     * @return string|null
     */
    public function getCarCode(): ?string
    {
        return $this->CarCode;
    }
    /**
     * Set CarCode value
     * @param string $carCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setCarCode(?string $carCode = null): self
    {
        $this->CarCode = $carCode;
        
        return $this;
    }
    /**
     * Get ValueCode value
     * @return string|null
     */
    public function getValueCode(): ?string
    {
        return $this->ValueCode;
    }
    /**
     * Set ValueCode value
     * @param string $valueCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setValueCode(?string $valueCode = null): self
    {
        $this->ValueCode = $valueCode;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return bool|null
     */
    public function getBulkTicket(): ?bool
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param bool $bulkTicket
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setBulkTicket(?bool $bulkTicket = null): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get InclusiveTour value
     * @return bool|null
     */
    public function getInclusiveTour(): ?bool
    {
        return $this->InclusiveTour;
    }
    /**
     * Set InclusiveTour value
     * @param bool $inclusiveTour
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setInclusiveTour(?bool $inclusiveTour = null): self
    {
        $this->InclusiveTour = $inclusiveTour;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount(): ?string
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $taxAmount
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setTaxAmount(?string $taxAmount = null): self
    {
        $this->TaxAmount = $taxAmount;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Air\StructType\FareInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
