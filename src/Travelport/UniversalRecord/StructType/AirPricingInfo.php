<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Attributes related to policy marking. | Allows an agency to update the commission to a new or different commission rate which will be applied at time of ticketing. The commission Modifier allows the user specify how the commission
 * change is to applied | A list of codes that indicate why an item was determined to be ‘out of policy’ | The reference to the Payment if Air Pricing is charged | Per traveler type pricing breakdown. This will reflect the pricing for all travelers
 * of the specified type.
 * @subpackage Structs
 */
class AirPricingInfo extends AbstractStructBase
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
     * The PricingMethod
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $PricingMethod;
    /**
     * The FareInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareInfo
     * @var \Travelport\UniversalRecord\StructType\FareInfo[]
     */
    public ?array $FareInfo = null;
    /**
     * The FareStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareStatus
     * @var \Travelport\UniversalRecord\StructType\FareStatus|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareStatus $FareStatus = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareInfoRef
     * @var \Travelport\UniversalRecord\StructType\FareInfoRef[]
     */
    public ?array $FareInfoRef = null;
    /**
     * The BookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingInfo
     * @var \Travelport\UniversalRecord\StructType\BookingInfo[]
     */
    public ?array $BookingInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The FareCalc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareCalc
     * @var string|null
     */
    public ?string $FareCalc = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerType
     * @var \Travelport\UniversalRecord\StructType\PassengerType[]
     */
    public ?array $PassengerType = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\WaiverCode $WaiverCode = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PaymentRef
     * @var \Travelport\UniversalRecord\StructType\PaymentRef[]
     */
    public ?array $PaymentRef = null;
    /**
     * The ChangePenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to change the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFarePenalty[]
     */
    public ?array $ChangePenalty = null;
    /**
     * The CancelPenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to cancel the fare
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFarePenalty[]
     */
    public ?array $CancelPenalty = null;
    /**
     * The NoShowPenalty
     * Meta information extracted from the WSDL
     * - documentation: The NoShow penalty (if any)
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFarePenalty[]
     */
    public ?array $NoShowPenalty = null;
    /**
     * The MostRestrictivePenalties
     * Meta information extracted from the WSDL
     * - documentation: Contain CAT16 Most Restrictive Penalties.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties $MostRestrictivePenalties = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The Adjustment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Adjustment
     * @var \Travelport\UniversalRecord\StructType\Adjustment[]
     */
    public ?array $Adjustment = null;
    /**
     * The Yield
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Yield
     * @var \Travelport\UniversalRecord\StructType\_Yield[]
     */
    public ?array $Yield = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The TicketingModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingModifiersRef
     * @var \Travelport\UniversalRecord\StructType\TicketingModifiersRef[]
     */
    public ?array $TicketingModifiersRef = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[]
     */
    public ?array $AirSegmentPricingModifiers = null;
    /**
     * The FlightOptionsList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightOptionsList
     * @var \Travelport\UniversalRecord\StructType\FlightOptionsList|null
     */
    public ?\Travelport\UniversalRecord\StructType\FlightOptionsList $FlightOptionsList = null;
    /**
     * The BaggageAllowances
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BaggageAllowances
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowances|null
     */
    public ?\Travelport\UniversalRecord\StructType\BaggageAllowances $BaggageAllowances = null;
    /**
     * The FareRulesFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRulesFilter
     * @var \Travelport\UniversalRecord\StructType\FareRulesFilter|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareRulesFilter $FareRulesFilter = null;
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PolicyCodesList
     * @var \Travelport\UniversalRecord\StructType\PolicyCodesList|null
     */
    public ?\Travelport\UniversalRecord\StructType\PolicyCodesList $PolicyCodesList = null;
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
     * The ActionDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ActionDetails
     * @var \Travelport\UniversalRecord\StructType\ActionDetails|null
     */
    public ?\Travelport\UniversalRecord\StructType\ActionDetails $ActionDetails = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\UniversalRecord\StructType\Commission[]
     */
    public ?array $Commission = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The CommandKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $CommandKey = null;
    /**
     * The AmountType
     * Meta information extracted from the WSDL
     * - documentation: This field displays type of payment amount when it is non-monetary. Presently available/supported value is "Flight Pass Credits". | Used for Character Strings, length 1 to 32.
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $AmountType = null;
    /**
     * The IncludesVAT
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Base Price includes VAT.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludesVAT = null;
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount to pay to cover the exchange of the fare (includes penalties). | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ExchangeAmount = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount forfeited when the fare is exchanged. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ForfeitAmount = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the fare is refundable
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refundable = null;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the fare is exchangeable
     * - use: optional
     * @var bool|null
     */
    public ?bool $Exchangeable = null;
    /**
     * The LatestTicketingTime
     * Meta information extracted from the WSDL
     * - documentation: The latest date/time at which this pricing information is valid
     * - use: optional
     * @var string|null
     */
    public ?string $LatestTicketingTime = null;
    /**
     * The Checksum
     * Meta information extracted from the WSDL
     * - documentation: A security value used to guarantee that the pricing data sent in matches the pricing data previously returned
     * - use: optional
     * @var string|null
     */
    public ?string $Checksum = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: The E-Ticketability of this AirPricing
     * - use: optional
     * @var string|null
     */
    public ?string $ETicketability = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The AirPricingInfoGroup
     * Meta information extracted from the WSDL
     * - documentation: This attribute is added to support multiple store fare in Host. All AirPricingInfo with same group number will be stored together.
     * - use: optional
     * @var int|null
     */
    public ?int $AirPricingInfoGroup = null;
    /**
     * The TotalNetPrice
     * Meta information extracted from the WSDL
     * - documentation: The total price of a negotiated fare. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalNetPrice = null;
    /**
     * The Ticketed
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the associated stored fare is ticketed or not.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Ticketed = null;
    /**
     * The PricingType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    public ?string $PricingType = null;
    /**
     * The TrueLastDateToTicket
     * Meta information extracted from the WSDL
     * - documentation: This date indicates the true last date/time to ticket for the fare. This date comes from the filed fare . There is no guarantee the fare will still be available on that date or that the fare amount may change. It is merely the last
     * date to purchase a ticket based on the carriers fare rules at the time the itinerary was quoted and stored
     * - use: optional
     * @var string|null
     */
    public ?string $TrueLastDateToTicket = null;
    /**
     * The FareCalculationInd
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $FareCalculationInd = null;
    /**
     * The Cat35Indicator
     * Meta information extracted from the WSDL
     * - documentation: A true value indicates that the fare has a Cat35 rule. A false valud indicates that the fare does not have a Cat35 rule
     * - use: optional
     * @var bool|null
     */
    public ?bool $Cat35Indicator = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateFees = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
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
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to indicate if a fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $InPolicy = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to indicate if the vendors responsible for the fare or rate being returned have been determined to be ‘preferred’ based on the associated policy settings.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferredOption = null;
    /**
     * Constructor method for AirPricingInfo
     * @uses AirPricingInfo::setKey()
     * @uses AirPricingInfo::setPricingMethod()
     * @uses AirPricingInfo::setFareInfo()
     * @uses AirPricingInfo::setFareStatus()
     * @uses AirPricingInfo::setFareInfoRef()
     * @uses AirPricingInfo::setBookingInfo()
     * @uses AirPricingInfo::setTaxInfo()
     * @uses AirPricingInfo::setFareCalc()
     * @uses AirPricingInfo::setPassengerType()
     * @uses AirPricingInfo::setBookingTravelerRef()
     * @uses AirPricingInfo::setWaiverCode()
     * @uses AirPricingInfo::setPaymentRef()
     * @uses AirPricingInfo::setChangePenalty()
     * @uses AirPricingInfo::setCancelPenalty()
     * @uses AirPricingInfo::setNoShowPenalty()
     * @uses AirPricingInfo::setMostRestrictivePenalties()
     * @uses AirPricingInfo::setFeeInfo()
     * @uses AirPricingInfo::setAdjustment()
     * @uses AirPricingInfo::setYield()
     * @uses AirPricingInfo::setAirPricingModifiers()
     * @uses AirPricingInfo::setTicketingModifiersRef()
     * @uses AirPricingInfo::setAirSegmentPricingModifiers()
     * @uses AirPricingInfo::setFlightOptionsList()
     * @uses AirPricingInfo::setBaggageAllowances()
     * @uses AirPricingInfo::setFareRulesFilter()
     * @uses AirPricingInfo::setPolicyCodesList()
     * @uses AirPricingInfo::setPriceChange()
     * @uses AirPricingInfo::setActionDetails()
     * @uses AirPricingInfo::setCommission()
     * @uses AirPricingInfo::setOrigin()
     * @uses AirPricingInfo::setDestination()
     * @uses AirPricingInfo::setCommandKey()
     * @uses AirPricingInfo::setAmountType()
     * @uses AirPricingInfo::setIncludesVAT()
     * @uses AirPricingInfo::setExchangeAmount()
     * @uses AirPricingInfo::setForfeitAmount()
     * @uses AirPricingInfo::setRefundable()
     * @uses AirPricingInfo::setExchangeable()
     * @uses AirPricingInfo::setLatestTicketingTime()
     * @uses AirPricingInfo::setChecksum()
     * @uses AirPricingInfo::setETicketability()
     * @uses AirPricingInfo::setPlatingCarrier()
     * @uses AirPricingInfo::setProviderReservationInfoRef()
     * @uses AirPricingInfo::setAirPricingInfoGroup()
     * @uses AirPricingInfo::setTotalNetPrice()
     * @uses AirPricingInfo::setTicketed()
     * @uses AirPricingInfo::setPricingType()
     * @uses AirPricingInfo::setTrueLastDateToTicket()
     * @uses AirPricingInfo::setFareCalculationInd()
     * @uses AirPricingInfo::setCat35Indicator()
     * @uses AirPricingInfo::setTotalPrice()
     * @uses AirPricingInfo::setBasePrice()
     * @uses AirPricingInfo::setApproximateTotalPrice()
     * @uses AirPricingInfo::setApproximateBasePrice()
     * @uses AirPricingInfo::setEquivalentBasePrice()
     * @uses AirPricingInfo::setTaxes()
     * @uses AirPricingInfo::setFees()
     * @uses AirPricingInfo::setServices()
     * @uses AirPricingInfo::setApproximateTaxes()
     * @uses AirPricingInfo::setApproximateFees()
     * @uses AirPricingInfo::setProviderCode()
     * @uses AirPricingInfo::setSupplierCode()
     * @uses AirPricingInfo::setElStat()
     * @uses AirPricingInfo::setKeyOverride()
     * @uses AirPricingInfo::setInPolicy()
     * @uses AirPricingInfo::setPreferredOption()
     * @param string $key
     * @param string $pricingMethod
     * @param \Travelport\UniversalRecord\StructType\FareInfo[] $fareInfo
     * @param \Travelport\UniversalRecord\StructType\FareStatus $fareStatus
     * @param \Travelport\UniversalRecord\StructType\FareInfoRef[] $fareInfoRef
     * @param \Travelport\UniversalRecord\StructType\BookingInfo[] $bookingInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param string $fareCalc
     * @param \Travelport\UniversalRecord\StructType\PassengerType[] $passengerType
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty[] $changePenalty
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty[] $cancelPenalty
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty[] $noShowPenalty
     * @param \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\Adjustment[] $adjustment
     * @param \Travelport\UniversalRecord\StructType\_Yield[] $yield
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiersRef[] $ticketingModifiersRef
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param \Travelport\UniversalRecord\StructType\FlightOptionsList $flightOptionsList
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances
     * @param \Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter
     * @param \Travelport\UniversalRecord\StructType\PolicyCodesList $policyCodesList
     * @param \Travelport\UniversalRecord\StructType\PriceChangeType[] $priceChange
     * @param \Travelport\UniversalRecord\StructType\ActionDetails $actionDetails
     * @param \Travelport\UniversalRecord\StructType\Commission[] $commission
     * @param string $origin
     * @param string $destination
     * @param string $commandKey
     * @param string $amountType
     * @param bool $includesVAT
     * @param string $exchangeAmount
     * @param string $forfeitAmount
     * @param bool $refundable
     * @param bool $exchangeable
     * @param string $latestTicketingTime
     * @param string $checksum
     * @param string $eTicketability
     * @param string $platingCarrier
     * @param string $providerReservationInfoRef
     * @param int $airPricingInfoGroup
     * @param string $totalNetPrice
     * @param bool $ticketed
     * @param string $pricingType
     * @param string $trueLastDateToTicket
     * @param string $fareCalculationInd
     * @param bool $cat35Indicator
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     * @param bool $inPolicy
     * @param bool $preferredOption
     */
    public function __construct(string $key, string $pricingMethod, ?array $fareInfo = null, ?\Travelport\UniversalRecord\StructType\FareStatus $fareStatus = null, ?array $fareInfoRef = null, ?array $bookingInfo = null, ?array $taxInfo = null, ?string $fareCalc = null, ?array $passengerType = null, ?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null, ?array $paymentRef = null, ?array $changePenalty = null, ?array $cancelPenalty = null, ?array $noShowPenalty = null, ?\Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties = null, ?array $feeInfo = null, ?array $adjustment = null, ?array $yield = null, ?\Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $ticketingModifiersRef = null, ?array $airSegmentPricingModifiers = null, ?\Travelport\UniversalRecord\StructType\FlightOptionsList $flightOptionsList = null, ?\Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances = null, ?\Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter = null, ?\Travelport\UniversalRecord\StructType\PolicyCodesList $policyCodesList = null, ?array $priceChange = null, ?\Travelport\UniversalRecord\StructType\ActionDetails $actionDetails = null, ?array $commission = null, ?string $origin = null, ?string $destination = null, ?string $commandKey = null, ?string $amountType = null, ?bool $includesVAT = null, ?string $exchangeAmount = null, ?string $forfeitAmount = null, ?bool $refundable = null, ?bool $exchangeable = null, ?string $latestTicketingTime = null, ?string $checksum = null, ?string $eTicketability = null, ?string $platingCarrier = null, ?string $providerReservationInfoRef = null, ?int $airPricingInfoGroup = null, ?string $totalNetPrice = null, ?bool $ticketed = null, ?string $pricingType = null, ?string $trueLastDateToTicket = null, ?string $fareCalculationInd = null, ?bool $cat35Indicator = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null, ?bool $inPolicy = null, ?bool $preferredOption = null)
    {
        $this
            ->setKey($key)
            ->setPricingMethod($pricingMethod)
            ->setFareInfo($fareInfo)
            ->setFareStatus($fareStatus)
            ->setFareInfoRef($fareInfoRef)
            ->setBookingInfo($bookingInfo)
            ->setTaxInfo($taxInfo)
            ->setFareCalc($fareCalc)
            ->setPassengerType($passengerType)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setWaiverCode($waiverCode)
            ->setPaymentRef($paymentRef)
            ->setChangePenalty($changePenalty)
            ->setCancelPenalty($cancelPenalty)
            ->setNoShowPenalty($noShowPenalty)
            ->setMostRestrictivePenalties($mostRestrictivePenalties)
            ->setFeeInfo($feeInfo)
            ->setAdjustment($adjustment)
            ->setYield($yield)
            ->setAirPricingModifiers($airPricingModifiers)
            ->setTicketingModifiersRef($ticketingModifiersRef)
            ->setAirSegmentPricingModifiers($airSegmentPricingModifiers)
            ->setFlightOptionsList($flightOptionsList)
            ->setBaggageAllowances($baggageAllowances)
            ->setFareRulesFilter($fareRulesFilter)
            ->setPolicyCodesList($policyCodesList)
            ->setPriceChange($priceChange)
            ->setActionDetails($actionDetails)
            ->setCommission($commission)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCommandKey($commandKey)
            ->setAmountType($amountType)
            ->setIncludesVAT($includesVAT)
            ->setExchangeAmount($exchangeAmount)
            ->setForfeitAmount($forfeitAmount)
            ->setRefundable($refundable)
            ->setExchangeable($exchangeable)
            ->setLatestTicketingTime($latestTicketingTime)
            ->setChecksum($checksum)
            ->setETicketability($eTicketability)
            ->setPlatingCarrier($platingCarrier)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setAirPricingInfoGroup($airPricingInfoGroup)
            ->setTotalNetPrice($totalNetPrice)
            ->setTicketed($ticketed)
            ->setPricingType($pricingType)
            ->setTrueLastDateToTicket($trueLastDateToTicket)
            ->setFareCalculationInd($fareCalculationInd)
            ->setCat35Indicator($cat35Indicator)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride)
            ->setInPolicy($inPolicy)
            ->setPreferredOption($preferredOption);
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PricingMethod value
     * @return string
     */
    public function getPricingMethod(): string
    {
        return $this->PricingMethod;
    }
    /**
     * Set PricingMethod value
     * @param string $pricingMethod
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPricingMethod(string $pricingMethod): self
    {
        $this->PricingMethod = $pricingMethod;
        
        return $this;
    }
    /**
     * Get FareInfo value
     * @return \Travelport\UniversalRecord\StructType\FareInfo[]
     */
    public function getFareInfo(): ?array
    {
        return $this->FareInfo;
    }
    /**
     * Set FareInfo value
     * @param \Travelport\UniversalRecord\StructType\FareInfo[] $fareInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFareInfo(?array $fareInfo = null): self
    {
        $this->FareInfo = $fareInfo;
        
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToFareInfo(\Travelport\UniversalRecord\StructType\FareInfo $item): self
    {
        $this->FareInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareStatus value
     * @return \Travelport\UniversalRecord\StructType\FareStatus|null
     */
    public function getFareStatus(): ?\Travelport\UniversalRecord\StructType\FareStatus
    {
        return $this->FareStatus;
    }
    /**
     * Set FareStatus value
     * @param \Travelport\UniversalRecord\StructType\FareStatus $fareStatus
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFareStatus(?\Travelport\UniversalRecord\StructType\FareStatus $fareStatus = null): self
    {
        $this->FareStatus = $fareStatus;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return \Travelport\UniversalRecord\StructType\FareInfoRef[]
     */
    public function getFareInfoRef(): ?array
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param \Travelport\UniversalRecord\StructType\FareInfoRef[] $fareInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFareInfoRef(?array $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
    /**
     * Add item to FareInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToFareInfoRef(\Travelport\UniversalRecord\StructType\FareInfoRef $item): self
    {
        $this->FareInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get BookingInfo value
     * @return \Travelport\UniversalRecord\StructType\BookingInfo[]
     */
    public function getBookingInfo(): ?array
    {
        return $this->BookingInfo;
    }
    /**
     * Set BookingInfo value
     * @param \Travelport\UniversalRecord\StructType\BookingInfo[] $bookingInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setBookingInfo(?array $bookingInfo = null): self
    {
        $this->BookingInfo = $bookingInfo;
        
        return $this;
    }
    /**
     * Add item to BookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToBookingInfo(\Travelport\UniversalRecord\StructType\BookingInfo $item): self
    {
        $this->BookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareCalc value
     * @return string|null
     */
    public function getFareCalc(): ?string
    {
        return $this->FareCalc;
    }
    /**
     * Set FareCalc value
     * @param string $fareCalc
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFareCalc(?string $fareCalc = null): self
    {
        $this->FareCalc = $fareCalc;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Travelport\UniversalRecord\StructType\PassengerType[]
     */
    public function getPassengerType(): ?array
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param \Travelport\UniversalRecord\StructType\PassengerType[] $passengerType
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPassengerType(?array $passengerType = null): self
    {
        $this->PassengerType = $passengerType;
        
        return $this;
    }
    /**
     * Add item to PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerType $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToPassengerType(\Travelport\UniversalRecord\StructType\PassengerType $item): self
    {
        $this->PassengerType[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\UniversalRecord\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setWaiverCode(?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return \Travelport\UniversalRecord\StructType\PaymentRef[]
     */
    public function getPaymentRef(): ?array
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Add item to PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToPaymentRef(\Travelport\UniversalRecord\StructType\PaymentRef $item): self
    {
        $this->PaymentRef[] = $item;
        
        return $this;
    }
    /**
     * Get ChangePenalty value
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty[]
     */
    public function getChangePenalty(): ?array
    {
        return $this->ChangePenalty;
    }
    /**
     * Set ChangePenalty value
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty[] $changePenalty
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setChangePenalty(?array $changePenalty = null): self
    {
        $this->ChangePenalty = $changePenalty;
        
        return $this;
    }
    /**
     * Add item to ChangePenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToChangePenalty(\Travelport\UniversalRecord\StructType\TypeFarePenalty $item): self
    {
        $this->ChangePenalty[] = $item;
        
        return $this;
    }
    /**
     * Get CancelPenalty value
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty[]
     */
    public function getCancelPenalty(): ?array
    {
        return $this->CancelPenalty;
    }
    /**
     * Set CancelPenalty value
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty[] $cancelPenalty
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setCancelPenalty(?array $cancelPenalty = null): self
    {
        $this->CancelPenalty = $cancelPenalty;
        
        return $this;
    }
    /**
     * Add item to CancelPenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToCancelPenalty(\Travelport\UniversalRecord\StructType\TypeFarePenalty $item): self
    {
        $this->CancelPenalty[] = $item;
        
        return $this;
    }
    /**
     * Get NoShowPenalty value
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty[]
     */
    public function getNoShowPenalty(): ?array
    {
        return $this->NoShowPenalty;
    }
    /**
     * Set NoShowPenalty value
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty[] $noShowPenalty
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setNoShowPenalty(?array $noShowPenalty = null): self
    {
        $this->NoShowPenalty = $noShowPenalty;
        
        return $this;
    }
    /**
     * Add item to NoShowPenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFarePenalty $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToNoShowPenalty(\Travelport\UniversalRecord\StructType\TypeFarePenalty $item): self
    {
        $this->NoShowPenalty[] = $item;
        
        return $this;
    }
    /**
     * Get MostRestrictivePenalties value
     * @return \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties|null
     */
    public function getMostRestrictivePenalties(): ?\Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties
    {
        return $this->MostRestrictivePenalties;
    }
    /**
     * Set MostRestrictivePenalties value
     * @param \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setMostRestrictivePenalties(?\Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties = null): self
    {
        $this->MostRestrictivePenalties = $mostRestrictivePenalties;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * Set FeeInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Adjustment value
     * @return \Travelport\UniversalRecord\StructType\Adjustment[]
     */
    public function getAdjustment(): ?array
    {
        return $this->Adjustment;
    }
    /**
     * Set Adjustment value
     * @param \Travelport\UniversalRecord\StructType\Adjustment[] $adjustment
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setAdjustment(?array $adjustment = null): self
    {
        $this->Adjustment = $adjustment;
        
        return $this;
    }
    /**
     * Add item to Adjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Adjustment $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToAdjustment(\Travelport\UniversalRecord\StructType\Adjustment $item): self
    {
        $this->Adjustment[] = $item;
        
        return $this;
    }
    /**
     * Get Yield value
     * @return \Travelport\UniversalRecord\StructType\_Yield[]
     */
    public function getYield(): ?array
    {
        return $this->Yield;
    }
    /**
     * Set Yield value
     * @param \Travelport\UniversalRecord\StructType\_Yield[] $yield
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setYield(?array $yield = null): self
    {
        $this->Yield = $yield;
        
        return $this;
    }
    /**
     * Add item to Yield value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\_Yield $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToYield(\Travelport\UniversalRecord\StructType\_Yield $item): self
    {
        $this->Yield[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\UniversalRecord\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setAirPricingModifiers(?\Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get TicketingModifiersRef value
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiersRef[]
     */
    public function getTicketingModifiersRef(): ?array
    {
        return $this->TicketingModifiersRef;
    }
    /**
     * Set TicketingModifiersRef value
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiersRef[] $ticketingModifiersRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTicketingModifiersRef(?array $ticketingModifiersRef = null): self
    {
        $this->TicketingModifiersRef = $ticketingModifiersRef;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiersRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToTicketingModifiersRef(\Travelport\UniversalRecord\StructType\TicketingModifiersRef $item): self
    {
        $this->TicketingModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[]
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToAirSegmentPricingModifiers(\Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item): self
    {
        $this->AirSegmentPricingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get FlightOptionsList value
     * @return \Travelport\UniversalRecord\StructType\FlightOptionsList|null
     */
    public function getFlightOptionsList(): ?\Travelport\UniversalRecord\StructType\FlightOptionsList
    {
        return $this->FlightOptionsList;
    }
    /**
     * Set FlightOptionsList value
     * @param \Travelport\UniversalRecord\StructType\FlightOptionsList $flightOptionsList
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFlightOptionsList(?\Travelport\UniversalRecord\StructType\FlightOptionsList $flightOptionsList = null): self
    {
        $this->FlightOptionsList = $flightOptionsList;
        
        return $this;
    }
    /**
     * Get BaggageAllowances value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances|null
     */
    public function getBaggageAllowances(): ?\Travelport\UniversalRecord\StructType\BaggageAllowances
    {
        return $this->BaggageAllowances;
    }
    /**
     * Set BaggageAllowances value
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setBaggageAllowances(?\Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances = null): self
    {
        $this->BaggageAllowances = $baggageAllowances;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFareRulesFilter(?\Travelport\UniversalRecord\StructType\FareRulesFilter $fareRulesFilter = null): self
    {
        $this->FareRulesFilter = $fareRulesFilter;
        
        return $this;
    }
    /**
     * Get PolicyCodesList value
     * @return \Travelport\UniversalRecord\StructType\PolicyCodesList|null
     */
    public function getPolicyCodesList(): ?\Travelport\UniversalRecord\StructType\PolicyCodesList
    {
        return $this->PolicyCodesList;
    }
    /**
     * Set PolicyCodesList value
     * @param \Travelport\UniversalRecord\StructType\PolicyCodesList $policyCodesList
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPolicyCodesList(?\Travelport\UniversalRecord\StructType\PolicyCodesList $policyCodesList = null): self
    {
        $this->PolicyCodesList = $policyCodesList;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToPriceChange(\Travelport\UniversalRecord\StructType\PriceChangeType $item): self
    {
        $this->PriceChange[] = $item;
        
        return $this;
    }
    /**
     * Get ActionDetails value
     * @return \Travelport\UniversalRecord\StructType\ActionDetails|null
     */
    public function getActionDetails(): ?\Travelport\UniversalRecord\StructType\ActionDetails
    {
        return $this->ActionDetails;
    }
    /**
     * Set ActionDetails value
     * @param \Travelport\UniversalRecord\StructType\ActionDetails $actionDetails
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setActionDetails(?\Travelport\UniversalRecord\StructType\ActionDetails $actionDetails = null): self
    {
        $this->ActionDetails = $actionDetails;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\UniversalRecord\StructType\Commission[]
     */
    public function getCommission(): ?array
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\UniversalRecord\StructType\Commission[] $commission
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setCommission(?array $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Add item to Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Commission $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function addToCommission(\Travelport\UniversalRecord\StructType\Commission $item): self
    {
        $this->Commission[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get CommandKey value
     * @return string|null
     */
    public function getCommandKey(): ?string
    {
        return $this->CommandKey;
    }
    /**
     * Set CommandKey value
     * @param string $commandKey
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setCommandKey(?string $commandKey = null): self
    {
        $this->CommandKey = $commandKey;
        
        return $this;
    }
    /**
     * Get AmountType value
     * @return string|null
     */
    public function getAmountType(): ?string
    {
        return $this->AmountType;
    }
    /**
     * Set AmountType value
     * @param string $amountType
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setAmountType(?string $amountType = null): self
    {
        $this->AmountType = $amountType;
        
        return $this;
    }
    /**
     * Get IncludesVAT value
     * @return bool|null
     */
    public function getIncludesVAT(): ?bool
    {
        return $this->IncludesVAT;
    }
    /**
     * Set IncludesVAT value
     * @param bool $includesVAT
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setIncludesVAT(?bool $includesVAT = null): self
    {
        $this->IncludesVAT = $includesVAT;
        
        return $this;
    }
    /**
     * Get ExchangeAmount value
     * @return string|null
     */
    public function getExchangeAmount(): ?string
    {
        return $this->ExchangeAmount;
    }
    /**
     * Set ExchangeAmount value
     * @param string $exchangeAmount
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setExchangeAmount(?string $exchangeAmount = null): self
    {
        $this->ExchangeAmount = $exchangeAmount;
        
        return $this;
    }
    /**
     * Get ForfeitAmount value
     * @return string|null
     */
    public function getForfeitAmount(): ?string
    {
        return $this->ForfeitAmount;
    }
    /**
     * Set ForfeitAmount value
     * @param string $forfeitAmount
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
        $this->ForfeitAmount = $forfeitAmount;
        
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool|null
     */
    public function getRefundable(): ?bool
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setRefundable(?bool $refundable = null): self
    {
        $this->Refundable = $refundable;
        
        return $this;
    }
    /**
     * Get Exchangeable value
     * @return bool|null
     */
    public function getExchangeable(): ?bool
    {
        return $this->Exchangeable;
    }
    /**
     * Set Exchangeable value
     * @param bool $exchangeable
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setExchangeable(?bool $exchangeable = null): self
    {
        $this->Exchangeable = $exchangeable;
        
        return $this;
    }
    /**
     * Get LatestTicketingTime value
     * @return string|null
     */
    public function getLatestTicketingTime(): ?string
    {
        return $this->LatestTicketingTime;
    }
    /**
     * Set LatestTicketingTime value
     * @param string $latestTicketingTime
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setLatestTicketingTime(?string $latestTicketingTime = null): self
    {
        $this->LatestTicketingTime = $latestTicketingTime;
        
        return $this;
    }
    /**
     * Get Checksum value
     * @return string|null
     */
    public function getChecksum(): ?string
    {
        return $this->Checksum;
    }
    /**
     * Set Checksum value
     * @param string $checksum
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setChecksum(?string $checksum = null): self
    {
        $this->Checksum = $checksum;
        
        return $this;
    }
    /**
     * Get ETicketability value
     * @return string|null
     */
    public function getETicketability(): ?string
    {
        return $this->ETicketability;
    }
    /**
     * Set ETicketability value
     * @param string $eTicketability
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setETicketability(?string $eTicketability = null): self
    {
        $this->ETicketability = $eTicketability;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get AirPricingInfoGroup value
     * @return int|null
     */
    public function getAirPricingInfoGroup(): ?int
    {
        return $this->AirPricingInfoGroup;
    }
    /**
     * Set AirPricingInfoGroup value
     * @param int $airPricingInfoGroup
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setAirPricingInfoGroup(?int $airPricingInfoGroup = null): self
    {
        $this->AirPricingInfoGroup = $airPricingInfoGroup;
        
        return $this;
    }
    /**
     * Get TotalNetPrice value
     * @return string|null
     */
    public function getTotalNetPrice(): ?string
    {
        return $this->TotalNetPrice;
    }
    /**
     * Set TotalNetPrice value
     * @param string $totalNetPrice
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTotalNetPrice(?string $totalNetPrice = null): self
    {
        $this->TotalNetPrice = $totalNetPrice;
        
        return $this;
    }
    /**
     * Get Ticketed value
     * @return bool|null
     */
    public function getTicketed(): ?bool
    {
        return $this->Ticketed;
    }
    /**
     * Set Ticketed value
     * @param bool $ticketed
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTicketed(?bool $ticketed = null): self
    {
        $this->Ticketed = $ticketed;
        
        return $this;
    }
    /**
     * Get PricingType value
     * @return string|null
     */
    public function getPricingType(): ?string
    {
        return $this->PricingType;
    }
    /**
     * Set PricingType value
     * @param string $pricingType
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPricingType(?string $pricingType = null): self
    {
        $this->PricingType = $pricingType;
        
        return $this;
    }
    /**
     * Get TrueLastDateToTicket value
     * @return string|null
     */
    public function getTrueLastDateToTicket(): ?string
    {
        return $this->TrueLastDateToTicket;
    }
    /**
     * Set TrueLastDateToTicket value
     * @param string $trueLastDateToTicket
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTrueLastDateToTicket(?string $trueLastDateToTicket = null): self
    {
        $this->TrueLastDateToTicket = $trueLastDateToTicket;
        
        return $this;
    }
    /**
     * Get FareCalculationInd value
     * @return string|null
     */
    public function getFareCalculationInd(): ?string
    {
        return $this->FareCalculationInd;
    }
    /**
     * Set FareCalculationInd value
     * @param string $fareCalculationInd
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFareCalculationInd(?string $fareCalculationInd = null): self
    {
        $this->FareCalculationInd = $fareCalculationInd;
        
        return $this;
    }
    /**
     * Get Cat35Indicator value
     * @return bool|null
     */
    public function getCat35Indicator(): ?bool
    {
        return $this->Cat35Indicator;
    }
    /**
     * Set Cat35Indicator value
     * @param bool $cat35Indicator
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setCat35Indicator(?bool $cat35Indicator = null): self
    {
        $this->Cat35Indicator = $cat35Indicator;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setFees(?string $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setServices(?string $services = null): self
    {
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
    /**
     * Get InPolicy value
     * @return bool|null
     */
    public function getInPolicy(): ?bool
    {
        return $this->InPolicy;
    }
    /**
     * Set InPolicy value
     * @param bool $inPolicy
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setInPolicy(?bool $inPolicy = null): self
    {
        $this->InPolicy = $inPolicy;
        
        return $this;
    }
    /**
     * Get PreferredOption value
     * @return bool|null
     */
    public function getPreferredOption(): ?bool
    {
        return $this->PreferredOption;
    }
    /**
     * Set PreferredOption value
     * @param bool $preferredOption
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
}
