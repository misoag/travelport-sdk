<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare
     * - use: required
     * @var string
     */
    protected string $FareBasis;
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
    protected string $PassengerTypeCode;
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
    protected string $Origin;
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
    protected string $Destination;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the date on which this fare was quoted
     * - use: required
     * @var string
     */
    protected string $EffectiveDate;
    /**
     * The FareTicketDesignator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareTicketDesignator
     * @var \Travelport\UniversalRecord\StructType\FareTicketDesignator[]
     */
    protected ?array $FareTicketDesignator = null;
    /**
     * The TicketingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingCode
     * @var \Travelport\UniversalRecord\StructType\TicketingCode[]
     */
    protected ?array $TicketingCode = null;
    /**
     * The FareSurcharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareSurcharge
     * @var \Travelport\UniversalRecord\StructType\FareSurcharge[]
     */
    protected ?array $FareSurcharge = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    protected ?array $AccountCode = null;
    /**
     * The ContractCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ContractCode
     * @var \Travelport\UniversalRecord\StructType\ContractCode[]
     */
    protected ?array $ContractCode = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Endorsement
     * @var \Travelport\UniversalRecord\StructType\Endorsement[]
     */
    protected ?array $Endorsement = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BaggageAllowance $BaggageAllowance = null;
    /**
     * The FareRuleKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRuleKey
     * @var \Travelport\UniversalRecord\StructType\FareRuleKey|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FareRuleKey $FareRuleKey = null;
    /**
     * The FareRuleFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRuleFailureInfo
     * @var \Travelport\UniversalRecord\StructType\FareRuleFailureInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo $FareRuleFailureInfo = null;
    /**
     * The FareRemarkRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRemarkRef
     * @var \Travelport\UniversalRecord\StructType\FareRemarkRef[]
     */
    protected ?array $FareRemarkRef = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Brand
     * @var \Travelport\UniversalRecord\StructType\Brand|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Brand $Brand = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\UniversalRecord\StructType\Commission|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Commission $Commission = null;
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
    protected ?string $FareAttributes = null;
    /**
     * The ChangePenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to change the itinerary
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFarePenalty|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeFarePenalty $ChangePenalty = null;
    /**
     * The CancelPenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to cancel the fare
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFarePenalty|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeFarePenalty $CancelPenalty = null;
    /**
     * The FareRulesFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRulesFilter
     * @var \Travelport\UniversalRecord\StructType\FareRulesFilter|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FareRulesFilter $FareRulesFilter = null;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the departure date of the first segment that uses this fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelDate = null;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the departure date of the first segment of the journey.
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartureDate = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The PrivateFare
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PrivateFare = null;
    /**
     * The NegotiatedFare
     * Meta information extracted from the WSDL
     * - documentation: Identifies the fare as a Negotiated Fare.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NegotiatedFare = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    protected ?string $TourCode = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $WaiverCode = null;
    /**
     * The NotValidBefore
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid before this date.
     * - use: optional
     * @var string|null
     */
    protected ?string $NotValidBefore = null;
    /**
     * The NotValidAfter
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid after this date.
     * - use: optional
     * @var string|null
     */
    protected ?string $NotValidAfter = null;
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
    protected ?string $PseudoCityCode = null;
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
    protected ?string $FareFamily = null;
    /**
     * The PromotionalFare
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the Fare is Promotional fare or not.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PromotionalFare = null;
    /**
     * The CarCode
     * Meta information extracted from the WSDL
     * - documentation: Car code value. Maximum 15 characters. Applicable provider is 1G and 1V
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    protected ?string $CarCode = null;
    /**
     * The ValueCode
     * Meta information extracted from the WSDL
     * - documentation: Value code value. Maximum 15 characters. Applicable provider is 1G and 1V
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    protected ?string $ValueCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket can be issued as bulk for this fare. Providers supported: Worldspan
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BulkTicket = null;
    /**
     * The InclusiveTour
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket can be issued as part of included package for this fare. Providers supported: Worldspan
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InclusiveTour = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Used in rapid reprice
     * - use: optional
     * @var string|null
     */
    protected ?string $Value = null;
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
    protected ?string $SupplierCode = null;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: Currency code and value for the approximate tax amount for this fare component. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TaxAmount = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\UniversalRecord\StructType\FareTicketDesignator[] $fareTicketDesignator
     * @param \Travelport\UniversalRecord\StructType\TicketingCode[] $ticketingCode
     * @param \Travelport\UniversalRecord\StructType\FareSurcharge[] $fareSurcharge
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @param \Travelport\UniversalRecord\StructType\ContractCode[] $contractCode
     * @param \Travelport\UniversalRecord\StructType\Endorsement[] $endorsement
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance
     * @param \Travelport\UniversalRecord\StructType\FareRuleKey $fareRuleKey
     * @param \Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @param \Travelport\UniversalRecord\StructType\FareRemarkRef[] $fareRemarkRef
     * @param \Travelport\UniversalRecord\StructType\Brand $brand
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @param string $fareAttributes
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $changePenalty
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $cancelPenalty
     * @param \Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter
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
    public function __construct(string $key, string $fareBasis, string $passengerTypeCode, string $origin, string $destination, string $effectiveDate, ?array $fareTicketDesignator = null, ?array $ticketingCode = null, ?array $fareSurcharge = null, ?array $accountCode = null, ?array $contractCode = null, ?array $endorsement = null, ?\Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance = null, ?\Travelport\UniversalRecord\StructType\FareRuleKey $fareRuleKey = null, ?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null, ?array $fareRemarkRef = null, ?\Travelport\UniversalRecord\StructType\Brand $brand = null, ?\Travelport\UniversalRecord\StructType\Commission $commission = null, ?string $fareAttributes = null, ?\Travelport\UniversalRecord\StructType\TypeFarePenalty $changePenalty = null, ?\Travelport\UniversalRecord\StructType\TypeFarePenalty $cancelPenalty = null, ?\Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter = null, ?string $travelDate = null, ?string $departureDate = null, ?string $amount = null, ?string $privateFare = null, ?bool $negotiatedFare = null, ?string $tourCode = null, ?string $waiverCode = null, ?string $notValidBefore = null, ?string $notValidAfter = null, ?string $pseudoCityCode = null, ?string $fareFamily = null, ?bool $promotionalFare = null, ?string $carCode = null, ?string $valueCode = null, ?bool $bulkTicket = null, ?bool $inclusiveTour = null, ?string $value = null, ?string $supplierCode = null, ?string $taxAmount = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareBasis(string $fareBasis): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setPassengerTypeCode(string $passengerTypeCode): self
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerTypeCode, true), gettype($passengerTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setOrigin(string $origin): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setDestination(string $destination): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get FareTicketDesignator value
     * @return \Travelport\UniversalRecord\StructType\FareTicketDesignator[]
     */
    public function getFareTicketDesignator(): ?array
    {
        return $this->FareTicketDesignator;
    }
    /**
     * This method is responsible for validating the values passed to the setFareTicketDesignator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareTicketDesignator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareTicketDesignatorForArrayConstraintsFromSetFareTicketDesignator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoFareTicketDesignatorItem) {
            // validation for constraint: itemType
            if (!$fareInfoFareTicketDesignatorItem instanceof \Travelport\UniversalRecord\StructType\FareTicketDesignator) {
                $invalidValues[] = is_object($fareInfoFareTicketDesignatorItem) ? get_class($fareInfoFareTicketDesignatorItem) : sprintf('%s(%s)', gettype($fareInfoFareTicketDesignatorItem), var_export($fareInfoFareTicketDesignatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareTicketDesignator property can only contain items of type \Travelport\UniversalRecord\StructType\FareTicketDesignator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareTicketDesignator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareTicketDesignator[] $fareTicketDesignator
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareTicketDesignator(?array $fareTicketDesignator = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareTicketDesignatorArrayErrorMessage = self::validateFareTicketDesignatorForArrayConstraintsFromSetFareTicketDesignator($fareTicketDesignator))) {
            throw new InvalidArgumentException($fareTicketDesignatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareTicketDesignator) && count($fareTicketDesignator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareTicketDesignator)), __LINE__);
        }
        $this->FareTicketDesignator = $fareTicketDesignator;
        
        return $this;
    }
    /**
     * Add item to FareTicketDesignator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareTicketDesignator $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToFareTicketDesignator(\Travelport\UniversalRecord\StructType\FareTicketDesignator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareTicketDesignator) {
            throw new InvalidArgumentException(sprintf('The FareTicketDesignator property can only contain items of type \Travelport\UniversalRecord\StructType\FareTicketDesignator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareTicketDesignator) && count($this->FareTicketDesignator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareTicketDesignator)), __LINE__);
        }
        $this->FareTicketDesignator[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingCode value
     * @return \Travelport\UniversalRecord\StructType\TicketingCode[]
     */
    public function getTicketingCode(): ?array
    {
        return $this->TicketingCode;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketingCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketingCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketingCodeForArrayConstraintsFromSetTicketingCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoTicketingCodeItem) {
            // validation for constraint: itemType
            if (!$fareInfoTicketingCodeItem instanceof \Travelport\UniversalRecord\StructType\TicketingCode) {
                $invalidValues[] = is_object($fareInfoTicketingCodeItem) ? get_class($fareInfoTicketingCodeItem) : sprintf('%s(%s)', gettype($fareInfoTicketingCodeItem), var_export($fareInfoTicketingCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketingCode property can only contain items of type \Travelport\UniversalRecord\StructType\TicketingCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketingCode[] $ticketingCode
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setTicketingCode(?array $ticketingCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketingCodeArrayErrorMessage = self::validateTicketingCodeForArrayConstraintsFromSetTicketingCode($ticketingCode))) {
            throw new InvalidArgumentException($ticketingCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketingCode) && count($ticketingCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketingCode)), __LINE__);
        }
        $this->TicketingCode = $ticketingCode;
        
        return $this;
    }
    /**
     * Add item to TicketingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketingCode $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToTicketingCode(\Travelport\UniversalRecord\StructType\TicketingCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TicketingCode) {
            throw new InvalidArgumentException(sprintf('The TicketingCode property can only contain items of type \Travelport\UniversalRecord\StructType\TicketingCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketingCode) && count($this->TicketingCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketingCode)), __LINE__);
        }
        $this->TicketingCode[] = $item;
        
        return $this;
    }
    /**
     * Get FareSurcharge value
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge[]
     */
    public function getFareSurcharge(): ?array
    {
        return $this->FareSurcharge;
    }
    /**
     * This method is responsible for validating the values passed to the setFareSurcharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareSurcharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareSurchargeForArrayConstraintsFromSetFareSurcharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoFareSurchargeItem) {
            // validation for constraint: itemType
            if (!$fareInfoFareSurchargeItem instanceof \Travelport\UniversalRecord\StructType\FareSurcharge) {
                $invalidValues[] = is_object($fareInfoFareSurchargeItem) ? get_class($fareInfoFareSurchargeItem) : sprintf('%s(%s)', gettype($fareInfoFareSurchargeItem), var_export($fareInfoFareSurchargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareSurcharge property can only contain items of type \Travelport\UniversalRecord\StructType\FareSurcharge, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareSurcharge value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareSurcharge[] $fareSurcharge
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareSurcharge(?array $fareSurcharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareSurchargeArrayErrorMessage = self::validateFareSurchargeForArrayConstraintsFromSetFareSurcharge($fareSurcharge))) {
            throw new InvalidArgumentException($fareSurchargeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareSurcharge) && count($fareSurcharge) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareSurcharge)), __LINE__);
        }
        $this->FareSurcharge = $fareSurcharge;
        
        return $this;
    }
    /**
     * Add item to FareSurcharge value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareSurcharge $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToFareSurcharge(\Travelport\UniversalRecord\StructType\FareSurcharge $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareSurcharge) {
            throw new InvalidArgumentException(sprintf('The FareSurcharge property can only contain items of type \Travelport\UniversalRecord\StructType\FareSurcharge, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareSurcharge) && count($this->FareSurcharge) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareSurcharge)), __LINE__);
        }
        $this->FareSurcharge[] = $item;
        
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
     * This method is responsible for validating the values passed to the setAccountCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountCodeForArrayConstraintsFromSetAccountCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoAccountCodeItem) {
            // validation for constraint: itemType
            if (!$fareInfoAccountCodeItem instanceof \Travelport\UniversalRecord\StructType\AccountCode) {
                $invalidValues[] = is_object($fareInfoAccountCodeItem) ? get_class($fareInfoAccountCodeItem) : sprintf('%s(%s)', gettype($fareInfoAccountCodeItem), var_export($fareInfoAccountCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountCode property can only contain items of type \Travelport\UniversalRecord\StructType\AccountCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountCodeArrayErrorMessage = self::validateAccountCodeForArrayConstraintsFromSetAccountCode($accountCode))) {
            throw new InvalidArgumentException($accountCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountCode) && count($accountCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToAccountCode(\Travelport\UniversalRecord\StructType\AccountCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountCode) {
            throw new InvalidArgumentException(sprintf('The AccountCode property can only contain items of type \Travelport\UniversalRecord\StructType\AccountCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountCode) && count($this->AccountCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountCode)), __LINE__);
        }
        $this->AccountCode[] = $item;
        
        return $this;
    }
    /**
     * Get ContractCode value
     * @return \Travelport\UniversalRecord\StructType\ContractCode[]
     */
    public function getContractCode(): ?array
    {
        return $this->ContractCode;
    }
    /**
     * This method is responsible for validating the values passed to the setContractCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContractCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContractCodeForArrayConstraintsFromSetContractCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoContractCodeItem) {
            // validation for constraint: itemType
            if (!$fareInfoContractCodeItem instanceof \Travelport\UniversalRecord\StructType\ContractCode) {
                $invalidValues[] = is_object($fareInfoContractCodeItem) ? get_class($fareInfoContractCodeItem) : sprintf('%s(%s)', gettype($fareInfoContractCodeItem), var_export($fareInfoContractCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContractCode property can only contain items of type \Travelport\UniversalRecord\StructType\ContractCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContractCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContractCode[] $contractCode
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setContractCode(?array $contractCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($contractCodeArrayErrorMessage = self::validateContractCodeForArrayConstraintsFromSetContractCode($contractCode))) {
            throw new InvalidArgumentException($contractCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($contractCode) && count($contractCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($contractCode)), __LINE__);
        }
        $this->ContractCode = $contractCode;
        
        return $this;
    }
    /**
     * Add item to ContractCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContractCode $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToContractCode(\Travelport\UniversalRecord\StructType\ContractCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ContractCode) {
            throw new InvalidArgumentException(sprintf('The ContractCode property can only contain items of type \Travelport\UniversalRecord\StructType\ContractCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ContractCode) && count($this->ContractCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ContractCode)), __LINE__);
        }
        $this->ContractCode[] = $item;
        
        return $this;
    }
    /**
     * Get Endorsement value
     * @return \Travelport\UniversalRecord\StructType\Endorsement[]
     */
    public function getEndorsement(): ?array
    {
        return $this->Endorsement;
    }
    /**
     * This method is responsible for validating the values passed to the setEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndorsement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndorsementForArrayConstraintsFromSetEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoEndorsementItem) {
            // validation for constraint: itemType
            if (!$fareInfoEndorsementItem instanceof \Travelport\UniversalRecord\StructType\Endorsement) {
                $invalidValues[] = is_object($fareInfoEndorsementItem) ? get_class($fareInfoEndorsementItem) : sprintf('%s(%s)', gettype($fareInfoEndorsementItem), var_export($fareInfoEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Endorsement property can only contain items of type \Travelport\UniversalRecord\StructType\Endorsement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Endorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Endorsement[] $endorsement
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setEndorsement(?array $endorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($endorsementArrayErrorMessage = self::validateEndorsementForArrayConstraintsFromSetEndorsement($endorsement))) {
            throw new InvalidArgumentException($endorsementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($endorsement) && count($endorsement) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($endorsement)), __LINE__);
        }
        $this->Endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Add item to Endorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Endorsement $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToEndorsement(\Travelport\UniversalRecord\StructType\Endorsement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Endorsement) {
            throw new InvalidArgumentException(sprintf('The Endorsement property can only contain items of type \Travelport\UniversalRecord\StructType\Endorsement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Endorsement) && count($this->Endorsement) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Endorsement)), __LINE__);
        }
        $this->Endorsement[] = $item;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance(): ?\Travelport\UniversalRecord\StructType\BaggageAllowance
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setBaggageAllowance(?\Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance = null): self
    {
        $this->BaggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Get FareRuleKey value
     * @return \Travelport\UniversalRecord\StructType\FareRuleKey|null
     */
    public function getFareRuleKey(): ?\Travelport\UniversalRecord\StructType\FareRuleKey
    {
        return $this->FareRuleKey;
    }
    /**
     * Set FareRuleKey value
     * @param \Travelport\UniversalRecord\StructType\FareRuleKey $fareRuleKey
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareRuleKey(?\Travelport\UniversalRecord\StructType\FareRuleKey $fareRuleKey = null): self
    {
        $this->FareRuleKey = $fareRuleKey;
        
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareRuleFailureInfo(?\Travelport\UniversalRecord\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null): self
    {
        $this->FareRuleFailureInfo = $fareRuleFailureInfo;
        
        return $this;
    }
    /**
     * Get FareRemarkRef value
     * @return \Travelport\UniversalRecord\StructType\FareRemarkRef[]
     */
    public function getFareRemarkRef(): ?array
    {
        return $this->FareRemarkRef;
    }
    /**
     * This method is responsible for validating the values passed to the setFareRemarkRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRemarkRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRemarkRefForArrayConstraintsFromSetFareRemarkRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoFareRemarkRefItem) {
            // validation for constraint: itemType
            if (!$fareInfoFareRemarkRefItem instanceof \Travelport\UniversalRecord\StructType\FareRemarkRef) {
                $invalidValues[] = is_object($fareInfoFareRemarkRefItem) ? get_class($fareInfoFareRemarkRefItem) : sprintf('%s(%s)', gettype($fareInfoFareRemarkRefItem), var_export($fareInfoFareRemarkRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRemarkRef property can only contain items of type \Travelport\UniversalRecord\StructType\FareRemarkRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRemarkRef[] $fareRemarkRef
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareRemarkRef(?array $fareRemarkRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRemarkRefArrayErrorMessage = self::validateFareRemarkRefForArrayConstraintsFromSetFareRemarkRef($fareRemarkRef))) {
            throw new InvalidArgumentException($fareRemarkRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRemarkRef) && count($fareRemarkRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRemarkRef)), __LINE__);
        }
        $this->FareRemarkRef = $fareRemarkRef;
        
        return $this;
    }
    /**
     * Add item to FareRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRemarkRef $item
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function addToFareRemarkRef(\Travelport\UniversalRecord\StructType\FareRemarkRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareRemarkRef) {
            throw new InvalidArgumentException(sprintf('The FareRemarkRef property can only contain items of type \Travelport\UniversalRecord\StructType\FareRemarkRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRemarkRef) && count($this->FareRemarkRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRemarkRef)), __LINE__);
        }
        $this->FareRemarkRef[] = $item;
        
        return $this;
    }
    /**
     * Get Brand value
     * @return \Travelport\UniversalRecord\StructType\Brand|null
     */
    public function getBrand(): ?\Travelport\UniversalRecord\StructType\Brand
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param \Travelport\UniversalRecord\StructType\Brand $brand
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setBrand(?\Travelport\UniversalRecord\StructType\Brand $brand = null): self
    {
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\UniversalRecord\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\UniversalRecord\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setCommission(?\Travelport\UniversalRecord\StructType\Commission $commission = null): self
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareAttributes(?string $fareAttributes = null): self
    {
        // validation for constraint: string
        if (!is_null($fareAttributes) && !is_string($fareAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareAttributes, true), gettype($fareAttributes)), __LINE__);
        }
        $this->FareAttributes = $fareAttributes;
        
        return $this;
    }
    /**
     * Get ChangePenalty value
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty|null
     */
    public function getChangePenalty(): ?\Travelport\UniversalRecord\StructType\TypeFarePenalty
    {
        return $this->ChangePenalty;
    }
    /**
     * Set ChangePenalty value
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $changePenalty
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setChangePenalty(?\Travelport\UniversalRecord\StructType\TypeFarePenalty $changePenalty = null): self
    {
        $this->ChangePenalty = $changePenalty;
        
        return $this;
    }
    /**
     * Get CancelPenalty value
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty|null
     */
    public function getCancelPenalty(): ?\Travelport\UniversalRecord\StructType\TypeFarePenalty
    {
        return $this->CancelPenalty;
    }
    /**
     * Set CancelPenalty value
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $cancelPenalty
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setCancelPenalty(?\Travelport\UniversalRecord\StructType\TypeFarePenalty $cancelPenalty = null): self
    {
        $this->CancelPenalty = $cancelPenalty;
        
        return $this;
    }
    /**
     * Get FareRulesFilter value
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter|null
     */
    public function getFareRulesFilter(): ?\Travelport\UniversalRecord\StructType\FareRulesFilter
    {
        return $this->FareRulesFilter;
    }
    /**
     * Set FareRulesFilter value
     * @param \Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareRulesFilter(?\Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter = null): self
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypePrivateFare::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypePrivateFare::getValidValues()
     * @throws InvalidArgumentException
     * @param string $privateFare
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setPrivateFare(?string $privateFare = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypePrivateFare::valueIsValid($privateFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypePrivateFare', is_array($privateFare) ? implode(', ', $privateFare) : var_export($privateFare, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypePrivateFare::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setNegotiatedFare(?bool $negotiatedFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($negotiatedFare) && !is_bool($negotiatedFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($negotiatedFare, true), gettype($negotiatedFare)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($tourCode) && mb_strlen((string) $tourCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $tourCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setWaiverCode(?string $waiverCode = null): self
    {
        // validation for constraint: string
        if (!is_null($waiverCode) && !is_string($waiverCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waiverCode, true), gettype($waiverCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setNotValidBefore(?string $notValidBefore = null): self
    {
        // validation for constraint: string
        if (!is_null($notValidBefore) && !is_string($notValidBefore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notValidBefore, true), gettype($notValidBefore)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
        // validation for constraint: string
        if (!is_null($notValidAfter) && !is_string($notValidAfter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notValidAfter, true), gettype($notValidAfter)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setFareFamily(?string $fareFamily = null): self
    {
        // validation for constraint: string
        if (!is_null($fareFamily) && !is_string($fareFamily)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareFamily, true), gettype($fareFamily)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($fareFamily) && mb_strlen((string) $fareFamily) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $fareFamily)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($fareFamily) && mb_strlen((string) $fareFamily) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $fareFamily)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setPromotionalFare(?bool $promotionalFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($promotionalFare) && !is_bool($promotionalFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promotionalFare, true), gettype($promotionalFare)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setCarCode(?string $carCode = null): self
    {
        // validation for constraint: string
        if (!is_null($carCode) && !is_string($carCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carCode, true), gettype($carCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($carCode) && mb_strlen((string) $carCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $carCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setValueCode(?string $valueCode = null): self
    {
        // validation for constraint: string
        if (!is_null($valueCode) && !is_string($valueCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueCode, true), gettype($valueCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($valueCode) && mb_strlen((string) $valueCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $valueCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setBulkTicket(?bool $bulkTicket = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bulkTicket) && !is_bool($bulkTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bulkTicket, true), gettype($bulkTicket)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setInclusiveTour(?bool $inclusiveTour = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inclusiveTour) && !is_bool($inclusiveTour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclusiveTour, true), gettype($inclusiveTour)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setTaxAmount(?string $taxAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($taxAmount) && !is_string($taxAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
