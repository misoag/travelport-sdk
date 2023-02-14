<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The PricingMethod
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $PricingMethod;
    /**
     * The FareInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareInfo
     * @var \Travelport\Util\StructType\FareInfo[]
     */
    protected ?array $FareInfo = null;
    /**
     * The FareStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareStatus
     * @var \Travelport\Util\StructType\FareStatus|null
     */
    protected ?\Travelport\Util\StructType\FareStatus $FareStatus = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareInfoRef
     * @var \Travelport\Util\StructType\FareInfoRef[]
     */
    protected ?array $FareInfoRef = null;
    /**
     * The BookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingInfo
     * @var \Travelport\Util\StructType\BookingInfo[]
     */
    protected ?array $BookingInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\Util\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The FareCalc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareCalc
     * @var string|null
     */
    protected ?string $FareCalc = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerType
     * @var \Travelport\Util\StructType\PassengerType[]
     */
    protected ?array $PassengerType = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Util\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Util\StructType\WaiverCode|null
     */
    protected ?\Travelport\Util\StructType\WaiverCode $WaiverCode = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PaymentRef
     * @var \Travelport\Util\StructType\PaymentRef[]
     */
    protected ?array $PaymentRef = null;
    /**
     * The ChangePenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to change the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFarePenalty[]
     */
    protected ?array $ChangePenalty = null;
    /**
     * The CancelPenalty
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) to cancel the fare
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFarePenalty[]
     */
    protected ?array $CancelPenalty = null;
    /**
     * The NoShowPenalty
     * Meta information extracted from the WSDL
     * - documentation: The NoShow penalty (if any)
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFarePenalty[]
     */
    protected ?array $NoShowPenalty = null;
    /**
     * The MostRestrictivePenalties
     * Meta information extracted from the WSDL
     * - documentation: Contain CAT16 Most Restrictive Penalties.
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeMostRestrictivePenalties|null
     */
    protected ?\Travelport\Util\StructType\TypeMostRestrictivePenalties $MostRestrictivePenalties = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\Util\StructType\TypeFeeInfo[]
     */
    protected ?array $FeeInfo = null;
    /**
     * The Adjustment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Adjustment
     * @var \Travelport\Util\StructType\Adjustment[]
     */
    protected ?array $Adjustment = null;
    /**
     * The Yield
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Yield
     * @var \Travelport\Util\StructType\_Yield[]
     */
    protected ?array $Yield = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\Util\StructType\AirPricingModifiers|null
     */
    protected ?\Travelport\Util\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The TicketingModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingModifiersRef
     * @var \Travelport\Util\StructType\TicketingModifiersRef[]
     */
    protected ?array $TicketingModifiersRef = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentPricingModifiers
     * @var \Travelport\Util\StructType\AirSegmentPricingModifiers[]
     */
    protected ?array $AirSegmentPricingModifiers = null;
    /**
     * The FlightOptionsList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightOptionsList
     * @var \Travelport\Util\StructType\FlightOptionsList|null
     */
    protected ?\Travelport\Util\StructType\FlightOptionsList $FlightOptionsList = null;
    /**
     * The BaggageAllowances
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BaggageAllowances
     * @var \Travelport\Util\StructType\BaggageAllowances|null
     */
    protected ?\Travelport\Util\StructType\BaggageAllowances $BaggageAllowances = null;
    /**
     * The FareRulesFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRulesFilter
     * @var \Travelport\Util\StructType\FareRulesFilter|null
     */
    protected ?\Travelport\Util\StructType\FareRulesFilter $FareRulesFilter = null;
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PolicyCodesList
     * @var \Travelport\Util\StructType\PolicyCodesList|null
     */
    protected ?\Travelport\Util\StructType\PolicyCodesList $PolicyCodesList = null;
    /**
     * The PriceChange
     * Meta information extracted from the WSDL
     * - documentation: Indicates a price change is found in Fare Control Manager
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PriceChangeType[]
     */
    protected ?array $PriceChange = null;
    /**
     * The ActionDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ActionDetails
     * @var \Travelport\Util\StructType\ActionDetails|null
     */
    protected ?\Travelport\Util\StructType\ActionDetails $ActionDetails = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Util\StructType\Commission[]
     */
    protected ?array $Commission = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The CommandKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $CommandKey = null;
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
    protected ?string $AmountType = null;
    /**
     * The IncludesVAT
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Base Price includes VAT.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludesVAT = null;
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount to pay to cover the exchange of the fare (includes penalties). | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ExchangeAmount = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount forfeited when the fare is exchanged. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ForfeitAmount = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the fare is refundable
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refundable = null;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the fare is exchangeable
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Exchangeable = null;
    /**
     * The LatestTicketingTime
     * Meta information extracted from the WSDL
     * - documentation: The latest date/time at which this pricing information is valid
     * - use: optional
     * @var string|null
     */
    protected ?string $LatestTicketingTime = null;
    /**
     * The Checksum
     * Meta information extracted from the WSDL
     * - documentation: A security value used to guarantee that the pricing data sent in matches the pricing data previously returned
     * - use: optional
     * @var string|null
     */
    protected ?string $Checksum = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: The E-Ticketability of this AirPricing
     * - use: optional
     * @var string|null
     */
    protected ?string $ETicketability = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The AirPricingInfoGroup
     * Meta information extracted from the WSDL
     * - documentation: This attribute is added to support multiple store fare in Host. All AirPricingInfo with same group number will be stored together.
     * - use: optional
     * @var int|null
     */
    protected ?int $AirPricingInfoGroup = null;
    /**
     * The TotalNetPrice
     * Meta information extracted from the WSDL
     * - documentation: The total price of a negotiated fare. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalNetPrice = null;
    /**
     * The Ticketed
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the associated stored fare is ticketed or not.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Ticketed = null;
    /**
     * The PricingType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    protected ?string $PricingType = null;
    /**
     * The TrueLastDateToTicket
     * Meta information extracted from the WSDL
     * - documentation: This date indicates the true last date/time to ticket for the fare. This date comes from the filed fare . There is no guarantee the fare will still be available on that date or that the fare amount may change. It is merely the last
     * date to purchase a ticket based on the carriers fare rules at the time the itinerary was quoted and stored
     * - use: optional
     * @var string|null
     */
    protected ?string $TrueLastDateToTicket = null;
    /**
     * The FareCalculationInd
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $FareCalculationInd = null;
    /**
     * The Cat35Indicator
     * Meta information extracted from the WSDL
     * - documentation: A true value indicates that the fare has a Cat35 rule. A false valud indicates that the fare does not have a Cat35 rule
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat35Indicator = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateFees = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
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
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to indicate if a fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InPolicy = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to indicate if the vendors responsible for the fare or rate being returned have been determined to be ‘preferred’ based on the associated policy settings.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferredOption = null;
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
     * @param \Travelport\Util\StructType\FareInfo[] $fareInfo
     * @param \Travelport\Util\StructType\FareStatus $fareStatus
     * @param \Travelport\Util\StructType\FareInfoRef[] $fareInfoRef
     * @param \Travelport\Util\StructType\BookingInfo[] $bookingInfo
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @param string $fareCalc
     * @param \Travelport\Util\StructType\PassengerType[] $passengerType
     * @param \Travelport\Util\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @param \Travelport\Util\StructType\PaymentRef[] $paymentRef
     * @param \Travelport\Util\StructType\TypeFarePenalty[] $changePenalty
     * @param \Travelport\Util\StructType\TypeFarePenalty[] $cancelPenalty
     * @param \Travelport\Util\StructType\TypeFarePenalty[] $noShowPenalty
     * @param \Travelport\Util\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Util\StructType\Adjustment[] $adjustment
     * @param \Travelport\Util\StructType\_Yield[] $yield
     * @param \Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\Util\StructType\TicketingModifiersRef[] $ticketingModifiersRef
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param \Travelport\Util\StructType\FlightOptionsList $flightOptionsList
     * @param \Travelport\Util\StructType\BaggageAllowances $baggageAllowances
     * @param \Travelport\Util\StructType\FareRulesFilter $fareRulesFilter
     * @param \Travelport\Util\StructType\PolicyCodesList $policyCodesList
     * @param \Travelport\Util\StructType\PriceChangeType[] $priceChange
     * @param \Travelport\Util\StructType\ActionDetails $actionDetails
     * @param \Travelport\Util\StructType\Commission[] $commission
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
    public function __construct(string $key, string $pricingMethod, ?array $fareInfo = null, ?\Travelport\Util\StructType\FareStatus $fareStatus = null, ?array $fareInfoRef = null, ?array $bookingInfo = null, ?array $taxInfo = null, ?string $fareCalc = null, ?array $passengerType = null, ?array $bookingTravelerRef = null, ?\Travelport\Util\StructType\WaiverCode $waiverCode = null, ?array $paymentRef = null, ?array $changePenalty = null, ?array $cancelPenalty = null, ?array $noShowPenalty = null, ?\Travelport\Util\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties = null, ?array $feeInfo = null, ?array $adjustment = null, ?array $yield = null, ?\Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $ticketingModifiersRef = null, ?array $airSegmentPricingModifiers = null, ?\Travelport\Util\StructType\FlightOptionsList $flightOptionsList = null, ?\Travelport\Util\StructType\BaggageAllowances $baggageAllowances = null, ?\Travelport\Util\StructType\FareRulesFilter $fareRulesFilter = null, ?\Travelport\Util\StructType\PolicyCodesList $policyCodesList = null, ?array $priceChange = null, ?\Travelport\Util\StructType\ActionDetails $actionDetails = null, ?array $commission = null, ?string $origin = null, ?string $destination = null, ?string $commandKey = null, ?string $amountType = null, ?bool $includesVAT = null, ?string $exchangeAmount = null, ?string $forfeitAmount = null, ?bool $refundable = null, ?bool $exchangeable = null, ?string $latestTicketingTime = null, ?string $checksum = null, ?string $eTicketability = null, ?string $platingCarrier = null, ?string $providerReservationInfoRef = null, ?int $airPricingInfoGroup = null, ?string $totalNetPrice = null, ?bool $ticketed = null, ?string $pricingType = null, ?string $trueLastDateToTicket = null, ?string $fareCalculationInd = null, ?bool $cat35Indicator = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null, ?bool $inPolicy = null, ?bool $preferredOption = null)
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
     * @return \Travelport\Util\StructType\AirPricingInfo
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
     * Get PricingMethod value
     * @return string
     */
    public function getPricingMethod(): string
    {
        return $this->PricingMethod;
    }
    /**
     * Set PricingMethod value
     * @uses \Travelport\Util\EnumType\TypePricingMethod::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePricingMethod::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pricingMethod
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPricingMethod(string $pricingMethod): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePricingMethod::valueIsValid($pricingMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePricingMethod', is_array($pricingMethod) ? implode(', ', $pricingMethod) : var_export($pricingMethod, true), implode(', ', \Travelport\Util\EnumType\TypePricingMethod::getValidValues())), __LINE__);
        }
        $this->PricingMethod = $pricingMethod;
        
        return $this;
    }
    /**
     * Get FareInfo value
     * @return \Travelport\Util\StructType\FareInfo[]
     */
    public function getFareInfo(): ?array
    {
        return $this->FareInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFareInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareInfoForArrayConstraintsFromSetFareInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoFareInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoFareInfoItem instanceof \Travelport\Util\StructType\FareInfo) {
                $invalidValues[] = is_object($airPricingInfoFareInfoItem) ? get_class($airPricingInfoFareInfoItem) : sprintf('%s(%s)', gettype($airPricingInfoFareInfoItem), var_export($airPricingInfoFareInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareInfo property can only contain items of type \Travelport\Util\StructType\FareInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareInfo[] $fareInfo
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFareInfo(?array $fareInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareInfoArrayErrorMessage = self::validateFareInfoForArrayConstraintsFromSetFareInfo($fareInfo))) {
            throw new InvalidArgumentException($fareInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareInfo) && count($fareInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareInfo)), __LINE__);
        }
        $this->FareInfo = $fareInfo;
        
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareInfo $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToFareInfo(\Travelport\Util\StructType\FareInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareInfo) {
            throw new InvalidArgumentException(sprintf('The FareInfo property can only contain items of type \Travelport\Util\StructType\FareInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareInfo) && count($this->FareInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareInfo)), __LINE__);
        }
        $this->FareInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareStatus value
     * @return \Travelport\Util\StructType\FareStatus|null
     */
    public function getFareStatus(): ?\Travelport\Util\StructType\FareStatus
    {
        return $this->FareStatus;
    }
    /**
     * Set FareStatus value
     * @param \Travelport\Util\StructType\FareStatus $fareStatus
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFareStatus(?\Travelport\Util\StructType\FareStatus $fareStatus = null): self
    {
        $this->FareStatus = $fareStatus;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return \Travelport\Util\StructType\FareInfoRef[]
     */
    public function getFareInfoRef(): ?array
    {
        return $this->FareInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setFareInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareInfoRefForArrayConstraintsFromSetFareInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoFareInfoRefItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoFareInfoRefItem instanceof \Travelport\Util\StructType\FareInfoRef) {
                $invalidValues[] = is_object($airPricingInfoFareInfoRefItem) ? get_class($airPricingInfoFareInfoRefItem) : sprintf('%s(%s)', gettype($airPricingInfoFareInfoRefItem), var_export($airPricingInfoFareInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareInfoRef property can only contain items of type \Travelport\Util\StructType\FareInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareInfoRef[] $fareInfoRef
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFareInfoRef(?array $fareInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareInfoRefArrayErrorMessage = self::validateFareInfoRefForArrayConstraintsFromSetFareInfoRef($fareInfoRef))) {
            throw new InvalidArgumentException($fareInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareInfoRef) && count($fareInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareInfoRef)), __LINE__);
        }
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
    /**
     * Add item to FareInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareInfoRef $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToFareInfoRef(\Travelport\Util\StructType\FareInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareInfoRef) {
            throw new InvalidArgumentException(sprintf('The FareInfoRef property can only contain items of type \Travelport\Util\StructType\FareInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareInfoRef) && count($this->FareInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareInfoRef)), __LINE__);
        }
        $this->FareInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get BookingInfo value
     * @return \Travelport\Util\StructType\BookingInfo[]
     */
    public function getBookingInfo(): ?array
    {
        return $this->BookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingInfoForArrayConstraintsFromSetBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoBookingInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoBookingInfoItem instanceof \Travelport\Util\StructType\BookingInfo) {
                $invalidValues[] = is_object($airPricingInfoBookingInfoItem) ? get_class($airPricingInfoBookingInfoItem) : sprintf('%s(%s)', gettype($airPricingInfoBookingInfoItem), var_export($airPricingInfoBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingInfo property can only contain items of type \Travelport\Util\StructType\BookingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingInfo[] $bookingInfo
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setBookingInfo(?array $bookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingInfoArrayErrorMessage = self::validateBookingInfoForArrayConstraintsFromSetBookingInfo($bookingInfo))) {
            throw new InvalidArgumentException($bookingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingInfo) && count($bookingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingInfo)), __LINE__);
        }
        $this->BookingInfo = $bookingInfo;
        
        return $this;
    }
    /**
     * Add item to BookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingInfo $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToBookingInfo(\Travelport\Util\StructType\BookingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingInfo) {
            throw new InvalidArgumentException(sprintf('The BookingInfo property can only contain items of type \Travelport\Util\StructType\BookingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingInfo) && count($this->BookingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingInfo)), __LINE__);
        }
        $this->BookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Util\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoTaxInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($airPricingInfoTaxInfoItem) ? get_class($airPricingInfoTaxInfoItem) : sprintf('%s(%s)', gettype($airPricingInfoTaxInfoItem), var_export($airPricingInfoTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfo $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToTaxInfo(\Travelport\Util\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFareCalc(?string $fareCalc = null): self
    {
        // validation for constraint: string
        if (!is_null($fareCalc) && !is_string($fareCalc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareCalc, true), gettype($fareCalc)), __LINE__);
        }
        $this->FareCalc = $fareCalc;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Travelport\Util\StructType\PassengerType[]
     */
    public function getPassengerType(): ?array
    {
        return $this->PassengerType;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerTypeForArrayConstraintsFromSetPassengerType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoPassengerTypeItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoPassengerTypeItem instanceof \Travelport\Util\StructType\PassengerType) {
                $invalidValues[] = is_object($airPricingInfoPassengerTypeItem) ? get_class($airPricingInfoPassengerTypeItem) : sprintf('%s(%s)', gettype($airPricingInfoPassengerTypeItem), var_export($airPricingInfoPassengerTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerType property can only contain items of type \Travelport\Util\StructType\PassengerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PassengerType[] $passengerType
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPassengerType(?array $passengerType = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerTypeArrayErrorMessage = self::validatePassengerTypeForArrayConstraintsFromSetPassengerType($passengerType))) {
            throw new InvalidArgumentException($passengerTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerType) && count($passengerType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerType)), __LINE__);
        }
        $this->PassengerType = $passengerType;
        
        return $this;
    }
    /**
     * Add item to PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PassengerType $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToPassengerType(\Travelport\Util\StructType\PassengerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PassengerType) {
            throw new InvalidArgumentException(sprintf('The PassengerType property can only contain items of type \Travelport\Util\StructType\PassengerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerType) && count($this->PassengerType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerType)), __LINE__);
        }
        $this->PassengerType[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Util\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoBookingTravelerRefItem instanceof \Travelport\Util\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($airPricingInfoBookingTravelerRefItem) ? get_class($airPricingInfoBookingTravelerRefItem) : sprintf('%s(%s)', gettype($airPricingInfoBookingTravelerRefItem), var_export($airPricingInfoBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Util\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingTravelerRef $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToBookingTravelerRef(\Travelport\Util\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Util\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Util\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Util\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setWaiverCode(?\Travelport\Util\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return \Travelport\Util\StructType\PaymentRef[]
     */
    public function getPaymentRef(): ?array
    {
        return $this->PaymentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentRefForArrayConstraintsFromSetPaymentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoPaymentRefItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoPaymentRefItem instanceof \Travelport\Util\StructType\PaymentRef) {
                $invalidValues[] = is_object($airPricingInfoPaymentRefItem) ? get_class($airPricingInfoPaymentRefItem) : sprintf('%s(%s)', gettype($airPricingInfoPaymentRefItem), var_export($airPricingInfoPaymentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentRef property can only contain items of type \Travelport\Util\StructType\PaymentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PaymentRef[] $paymentRef
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentRefArrayErrorMessage = self::validatePaymentRefForArrayConstraintsFromSetPaymentRef($paymentRef))) {
            throw new InvalidArgumentException($paymentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($paymentRef) && count($paymentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($paymentRef)), __LINE__);
        }
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Add item to PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PaymentRef $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToPaymentRef(\Travelport\Util\StructType\PaymentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PaymentRef) {
            throw new InvalidArgumentException(sprintf('The PaymentRef property can only contain items of type \Travelport\Util\StructType\PaymentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PaymentRef) && count($this->PaymentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PaymentRef)), __LINE__);
        }
        $this->PaymentRef[] = $item;
        
        return $this;
    }
    /**
     * Get ChangePenalty value
     * @return \Travelport\Util\StructType\TypeFarePenalty[]
     */
    public function getChangePenalty(): ?array
    {
        return $this->ChangePenalty;
    }
    /**
     * This method is responsible for validating the values passed to the setChangePenalty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChangePenalty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChangePenaltyForArrayConstraintsFromSetChangePenalty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoChangePenaltyItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoChangePenaltyItem instanceof \Travelport\Util\StructType\TypeFarePenalty) {
                $invalidValues[] = is_object($airPricingInfoChangePenaltyItem) ? get_class($airPricingInfoChangePenaltyItem) : sprintf('%s(%s)', gettype($airPricingInfoChangePenaltyItem), var_export($airPricingInfoChangePenaltyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChangePenalty property can only contain items of type \Travelport\Util\StructType\TypeFarePenalty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ChangePenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFarePenalty[] $changePenalty
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setChangePenalty(?array $changePenalty = null): self
    {
        // validation for constraint: array
        if ('' !== ($changePenaltyArrayErrorMessage = self::validateChangePenaltyForArrayConstraintsFromSetChangePenalty($changePenalty))) {
            throw new InvalidArgumentException($changePenaltyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($changePenalty) && count($changePenalty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($changePenalty)), __LINE__);
        }
        $this->ChangePenalty = $changePenalty;
        
        return $this;
    }
    /**
     * Add item to ChangePenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFarePenalty $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToChangePenalty(\Travelport\Util\StructType\TypeFarePenalty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFarePenalty) {
            throw new InvalidArgumentException(sprintf('The ChangePenalty property can only contain items of type \Travelport\Util\StructType\TypeFarePenalty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ChangePenalty) && count($this->ChangePenalty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ChangePenalty)), __LINE__);
        }
        $this->ChangePenalty[] = $item;
        
        return $this;
    }
    /**
     * Get CancelPenalty value
     * @return \Travelport\Util\StructType\TypeFarePenalty[]
     */
    public function getCancelPenalty(): ?array
    {
        return $this->CancelPenalty;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelPenalty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelPenalty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelPenaltyForArrayConstraintsFromSetCancelPenalty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoCancelPenaltyItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoCancelPenaltyItem instanceof \Travelport\Util\StructType\TypeFarePenalty) {
                $invalidValues[] = is_object($airPricingInfoCancelPenaltyItem) ? get_class($airPricingInfoCancelPenaltyItem) : sprintf('%s(%s)', gettype($airPricingInfoCancelPenaltyItem), var_export($airPricingInfoCancelPenaltyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CancelPenalty property can only contain items of type \Travelport\Util\StructType\TypeFarePenalty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CancelPenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFarePenalty[] $cancelPenalty
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setCancelPenalty(?array $cancelPenalty = null): self
    {
        // validation for constraint: array
        if ('' !== ($cancelPenaltyArrayErrorMessage = self::validateCancelPenaltyForArrayConstraintsFromSetCancelPenalty($cancelPenalty))) {
            throw new InvalidArgumentException($cancelPenaltyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($cancelPenalty) && count($cancelPenalty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($cancelPenalty)), __LINE__);
        }
        $this->CancelPenalty = $cancelPenalty;
        
        return $this;
    }
    /**
     * Add item to CancelPenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFarePenalty $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToCancelPenalty(\Travelport\Util\StructType\TypeFarePenalty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFarePenalty) {
            throw new InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of type \Travelport\Util\StructType\TypeFarePenalty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CancelPenalty) && count($this->CancelPenalty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CancelPenalty)), __LINE__);
        }
        $this->CancelPenalty[] = $item;
        
        return $this;
    }
    /**
     * Get NoShowPenalty value
     * @return \Travelport\Util\StructType\TypeFarePenalty[]
     */
    public function getNoShowPenalty(): ?array
    {
        return $this->NoShowPenalty;
    }
    /**
     * This method is responsible for validating the values passed to the setNoShowPenalty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNoShowPenalty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNoShowPenaltyForArrayConstraintsFromSetNoShowPenalty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoNoShowPenaltyItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoNoShowPenaltyItem instanceof \Travelport\Util\StructType\TypeFarePenalty) {
                $invalidValues[] = is_object($airPricingInfoNoShowPenaltyItem) ? get_class($airPricingInfoNoShowPenaltyItem) : sprintf('%s(%s)', gettype($airPricingInfoNoShowPenaltyItem), var_export($airPricingInfoNoShowPenaltyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NoShowPenalty property can only contain items of type \Travelport\Util\StructType\TypeFarePenalty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NoShowPenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFarePenalty[] $noShowPenalty
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setNoShowPenalty(?array $noShowPenalty = null): self
    {
        // validation for constraint: array
        if ('' !== ($noShowPenaltyArrayErrorMessage = self::validateNoShowPenaltyForArrayConstraintsFromSetNoShowPenalty($noShowPenalty))) {
            throw new InvalidArgumentException($noShowPenaltyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($noShowPenalty) && count($noShowPenalty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($noShowPenalty)), __LINE__);
        }
        $this->NoShowPenalty = $noShowPenalty;
        
        return $this;
    }
    /**
     * Add item to NoShowPenalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFarePenalty $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToNoShowPenalty(\Travelport\Util\StructType\TypeFarePenalty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFarePenalty) {
            throw new InvalidArgumentException(sprintf('The NoShowPenalty property can only contain items of type \Travelport\Util\StructType\TypeFarePenalty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->NoShowPenalty) && count($this->NoShowPenalty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->NoShowPenalty)), __LINE__);
        }
        $this->NoShowPenalty[] = $item;
        
        return $this;
    }
    /**
     * Get MostRestrictivePenalties value
     * @return \Travelport\Util\StructType\TypeMostRestrictivePenalties|null
     */
    public function getMostRestrictivePenalties(): ?\Travelport\Util\StructType\TypeMostRestrictivePenalties
    {
        return $this->MostRestrictivePenalties;
    }
    /**
     * Set MostRestrictivePenalties value
     * @param \Travelport\Util\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setMostRestrictivePenalties(?\Travelport\Util\StructType\TypeMostRestrictivePenalties $mostRestrictivePenalties = null): self
    {
        $this->MostRestrictivePenalties = $mostRestrictivePenalties;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\Util\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeInfoForArrayConstraintsFromSetFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoFeeInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoFeeInfoItem instanceof \Travelport\Util\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($airPricingInfoFeeInfoItem) ? get_class($airPricingInfoFeeInfoItem) : sprintf('%s(%s)', gettype($airPricingInfoFeeInfoItem), var_export($airPricingInfoFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeInfoArrayErrorMessage = self::validateFeeInfoForArrayConstraintsFromSetFeeInfo($feeInfo))) {
            throw new InvalidArgumentException($feeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($feeInfo) && count($feeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($feeInfo)), __LINE__);
        }
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToFeeInfo(\Travelport\Util\StructType\TypeFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFeeInfo) {
            throw new InvalidArgumentException(sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FeeInfo)), __LINE__);
        }
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Adjustment value
     * @return \Travelport\Util\StructType\Adjustment[]
     */
    public function getAdjustment(): ?array
    {
        return $this->Adjustment;
    }
    /**
     * This method is responsible for validating the values passed to the setAdjustment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdjustment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdjustmentForArrayConstraintsFromSetAdjustment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoAdjustmentItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoAdjustmentItem instanceof \Travelport\Util\StructType\Adjustment) {
                $invalidValues[] = is_object($airPricingInfoAdjustmentItem) ? get_class($airPricingInfoAdjustmentItem) : sprintf('%s(%s)', gettype($airPricingInfoAdjustmentItem), var_export($airPricingInfoAdjustmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Adjustment property can only contain items of type \Travelport\Util\StructType\Adjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Adjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Adjustment[] $adjustment
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setAdjustment(?array $adjustment = null): self
    {
        // validation for constraint: array
        if ('' !== ($adjustmentArrayErrorMessage = self::validateAdjustmentForArrayConstraintsFromSetAdjustment($adjustment))) {
            throw new InvalidArgumentException($adjustmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($adjustment) && count($adjustment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($adjustment)), __LINE__);
        }
        $this->Adjustment = $adjustment;
        
        return $this;
    }
    /**
     * Add item to Adjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Adjustment $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToAdjustment(\Travelport\Util\StructType\Adjustment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Adjustment) {
            throw new InvalidArgumentException(sprintf('The Adjustment property can only contain items of type \Travelport\Util\StructType\Adjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Adjustment) && count($this->Adjustment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Adjustment)), __LINE__);
        }
        $this->Adjustment[] = $item;
        
        return $this;
    }
    /**
     * Get Yield value
     * @return \Travelport\Util\StructType\_Yield[]
     */
    public function getYield(): ?array
    {
        return $this->Yield;
    }
    /**
     * This method is responsible for validating the values passed to the setYield method
     * This method is willingly generated in order to preserve the one-line inline validation within the setYield method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateYieldForArrayConstraintsFromSetYield(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoYieldItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoYieldItem instanceof \Travelport\Util\StructType\_Yield) {
                $invalidValues[] = is_object($airPricingInfoYieldItem) ? get_class($airPricingInfoYieldItem) : sprintf('%s(%s)', gettype($airPricingInfoYieldItem), var_export($airPricingInfoYieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Yield property can only contain items of type \Travelport\Util\StructType\_Yield, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Yield value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\_Yield[] $yield
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setYield(?array $yield = null): self
    {
        // validation for constraint: array
        if ('' !== ($yieldArrayErrorMessage = self::validateYieldForArrayConstraintsFromSetYield($yield))) {
            throw new InvalidArgumentException($yieldArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($yield) && count($yield) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($yield)), __LINE__);
        }
        $this->Yield = $yield;
        
        return $this;
    }
    /**
     * Add item to Yield value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\_Yield $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToYield(\Travelport\Util\StructType\_Yield $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\_Yield) {
            throw new InvalidArgumentException(sprintf('The Yield property can only contain items of type \Travelport\Util\StructType\_Yield, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Yield) && count($this->Yield) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Yield)), __LINE__);
        }
        $this->Yield[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\Util\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\Util\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setAirPricingModifiers(?\Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get TicketingModifiersRef value
     * @return \Travelport\Util\StructType\TicketingModifiersRef[]
     */
    public function getTicketingModifiersRef(): ?array
    {
        return $this->TicketingModifiersRef;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketingModifiersRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketingModifiersRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketingModifiersRefForArrayConstraintsFromSetTicketingModifiersRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoTicketingModifiersRefItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoTicketingModifiersRefItem instanceof \Travelport\Util\StructType\TicketingModifiersRef) {
                $invalidValues[] = is_object($airPricingInfoTicketingModifiersRefItem) ? get_class($airPricingInfoTicketingModifiersRefItem) : sprintf('%s(%s)', gettype($airPricingInfoTicketingModifiersRefItem), var_export($airPricingInfoTicketingModifiersRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketingModifiersRef property can only contain items of type \Travelport\Util\StructType\TicketingModifiersRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketingModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketingModifiersRef[] $ticketingModifiersRef
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTicketingModifiersRef(?array $ticketingModifiersRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketingModifiersRefArrayErrorMessage = self::validateTicketingModifiersRefForArrayConstraintsFromSetTicketingModifiersRef($ticketingModifiersRef))) {
            throw new InvalidArgumentException($ticketingModifiersRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketingModifiersRef) && count($ticketingModifiersRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketingModifiersRef)), __LINE__);
        }
        $this->TicketingModifiersRef = $ticketingModifiersRef;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketingModifiersRef $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToTicketingModifiersRef(\Travelport\Util\StructType\TicketingModifiersRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TicketingModifiersRef) {
            throw new InvalidArgumentException(sprintf('The TicketingModifiersRef property can only contain items of type \Travelport\Util\StructType\TicketingModifiersRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketingModifiersRef) && count($this->TicketingModifiersRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketingModifiersRef)), __LINE__);
        }
        $this->TicketingModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers[]
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentPricingModifiers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentPricingModifiersForArrayConstraintsFromSetAirSegmentPricingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoAirSegmentPricingModifiersItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoAirSegmentPricingModifiersItem instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
                $invalidValues[] = is_object($airPricingInfoAirSegmentPricingModifiersItem) ? get_class($airPricingInfoAirSegmentPricingModifiersItem) : sprintf('%s(%s)', gettype($airPricingInfoAirSegmentPricingModifiersItem), var_export($airPricingInfoAirSegmentPricingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\Util\StructType\AirSegmentPricingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentPricingModifiersArrayErrorMessage = self::validateAirSegmentPricingModifiersForArrayConstraintsFromSetAirSegmentPricingModifiers($airSegmentPricingModifiers))) {
            throw new InvalidArgumentException($airSegmentPricingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentPricingModifiers) && count($airSegmentPricingModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentPricingModifiers)), __LINE__);
        }
        $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToAirSegmentPricingModifiers(\Travelport\Util\StructType\AirSegmentPricingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\Util\StructType\AirSegmentPricingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentPricingModifiers) && count($this->AirSegmentPricingModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentPricingModifiers)), __LINE__);
        }
        $this->AirSegmentPricingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get FlightOptionsList value
     * @return \Travelport\Util\StructType\FlightOptionsList|null
     */
    public function getFlightOptionsList(): ?\Travelport\Util\StructType\FlightOptionsList
    {
        return $this->FlightOptionsList;
    }
    /**
     * Set FlightOptionsList value
     * @param \Travelport\Util\StructType\FlightOptionsList $flightOptionsList
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFlightOptionsList(?\Travelport\Util\StructType\FlightOptionsList $flightOptionsList = null): self
    {
        $this->FlightOptionsList = $flightOptionsList;
        
        return $this;
    }
    /**
     * Get BaggageAllowances value
     * @return \Travelport\Util\StructType\BaggageAllowances|null
     */
    public function getBaggageAllowances(): ?\Travelport\Util\StructType\BaggageAllowances
    {
        return $this->BaggageAllowances;
    }
    /**
     * Set BaggageAllowances value
     * @param \Travelport\Util\StructType\BaggageAllowances $baggageAllowances
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setBaggageAllowances(?\Travelport\Util\StructType\BaggageAllowances $baggageAllowances = null): self
    {
        $this->BaggageAllowances = $baggageAllowances;
        
        return $this;
    }
    /**
     * Get FareRulesFilter value
     * @return \Travelport\Util\StructType\FareRulesFilter|null
     */
    public function getFareRulesFilter(): ?\Travelport\Util\StructType\FareRulesFilter
    {
        return $this->FareRulesFilter;
    }
    /**
     * Set FareRulesFilter value
     * @param \Travelport\Util\StructType\FareRulesFilter $fareRulesFilter
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFareRulesFilter(?\Travelport\Util\StructType\FareRulesFilter $fareRulesFilter = null): self
    {
        $this->FareRulesFilter = $fareRulesFilter;
        
        return $this;
    }
    /**
     * Get PolicyCodesList value
     * @return \Travelport\Util\StructType\PolicyCodesList|null
     */
    public function getPolicyCodesList(): ?\Travelport\Util\StructType\PolicyCodesList
    {
        return $this->PolicyCodesList;
    }
    /**
     * Set PolicyCodesList value
     * @param \Travelport\Util\StructType\PolicyCodesList $policyCodesList
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPolicyCodesList(?\Travelport\Util\StructType\PolicyCodesList $policyCodesList = null): self
    {
        $this->PolicyCodesList = $policyCodesList;
        
        return $this;
    }
    /**
     * Get PriceChange value
     * @return \Travelport\Util\StructType\PriceChangeType[]
     */
    public function getPriceChange(): ?array
    {
        return $this->PriceChange;
    }
    /**
     * This method is responsible for validating the values passed to the setPriceChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPriceChange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePriceChangeForArrayConstraintsFromSetPriceChange(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoPriceChangeItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoPriceChangeItem instanceof \Travelport\Util\StructType\PriceChangeType) {
                $invalidValues[] = is_object($airPricingInfoPriceChangeItem) ? get_class($airPricingInfoPriceChangeItem) : sprintf('%s(%s)', gettype($airPricingInfoPriceChangeItem), var_export($airPricingInfoPriceChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PriceChange property can only contain items of type \Travelport\Util\StructType\PriceChangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PriceChange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceChangeType[] $priceChange
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPriceChange(?array $priceChange = null): self
    {
        // validation for constraint: array
        if ('' !== ($priceChangeArrayErrorMessage = self::validatePriceChangeForArrayConstraintsFromSetPriceChange($priceChange))) {
            throw new InvalidArgumentException($priceChangeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($priceChange) && count($priceChange) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($priceChange)), __LINE__);
        }
        $this->PriceChange = $priceChange;
        
        return $this;
    }
    /**
     * Add item to PriceChange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceChangeType $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToPriceChange(\Travelport\Util\StructType\PriceChangeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PriceChangeType) {
            throw new InvalidArgumentException(sprintf('The PriceChange property can only contain items of type \Travelport\Util\StructType\PriceChangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->PriceChange) && count($this->PriceChange) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->PriceChange)), __LINE__);
        }
        $this->PriceChange[] = $item;
        
        return $this;
    }
    /**
     * Get ActionDetails value
     * @return \Travelport\Util\StructType\ActionDetails|null
     */
    public function getActionDetails(): ?\Travelport\Util\StructType\ActionDetails
    {
        return $this->ActionDetails;
    }
    /**
     * Set ActionDetails value
     * @param \Travelport\Util\StructType\ActionDetails $actionDetails
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setActionDetails(?\Travelport\Util\StructType\ActionDetails $actionDetails = null): self
    {
        $this->ActionDetails = $actionDetails;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Util\StructType\Commission[]
     */
    public function getCommission(): ?array
    {
        return $this->Commission;
    }
    /**
     * This method is responsible for validating the values passed to the setCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommissionForArrayConstraintsFromSetCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoCommissionItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoCommissionItem instanceof \Travelport\Util\StructType\Commission) {
                $invalidValues[] = is_object($airPricingInfoCommissionItem) ? get_class($airPricingInfoCommissionItem) : sprintf('%s(%s)', gettype($airPricingInfoCommissionItem), var_export($airPricingInfoCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Commission property can only contain items of type \Travelport\Util\StructType\Commission, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Commission[] $commission
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setCommission(?array $commission = null): self
    {
        // validation for constraint: array
        if ('' !== ($commissionArrayErrorMessage = self::validateCommissionForArrayConstraintsFromSetCommission($commission))) {
            throw new InvalidArgumentException($commissionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($commission) && count($commission) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($commission)), __LINE__);
        }
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Add item to Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Commission $item
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function addToCommission(\Travelport\Util\StructType\Commission $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Commission) {
            throw new InvalidArgumentException(sprintf('The Commission property can only contain items of type \Travelport\Util\StructType\Commission, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Commission) && count($this->Commission) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Commission)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setOrigin(?string $origin = null): self
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
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setDestination(?string $destination = null): self
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setCommandKey(?string $commandKey = null): self
    {
        // validation for constraint: string
        if (!is_null($commandKey) && !is_string($commandKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commandKey, true), gettype($commandKey)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($commandKey) && mb_strlen((string) $commandKey) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $commandKey)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setAmountType(?string $amountType = null): self
    {
        // validation for constraint: string
        if (!is_null($amountType) && !is_string($amountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amountType, true), gettype($amountType)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($amountType) && mb_strlen((string) $amountType) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $amountType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($amountType) && mb_strlen((string) $amountType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $amountType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setIncludesVAT(?bool $includesVAT = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includesVAT) && !is_bool($includesVAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesVAT, true), gettype($includesVAT)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setExchangeAmount(?string $exchangeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($exchangeAmount) && !is_string($exchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeAmount, true), gettype($exchangeAmount)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($forfeitAmount) && !is_string($forfeitAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forfeitAmount, true), gettype($forfeitAmount)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setRefundable(?bool $refundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundable, true), gettype($refundable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setExchangeable(?bool $exchangeable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exchangeable) && !is_bool($exchangeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exchangeable, true), gettype($exchangeable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setLatestTicketingTime(?string $latestTicketingTime = null): self
    {
        // validation for constraint: string
        if (!is_null($latestTicketingTime) && !is_string($latestTicketingTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestTicketingTime, true), gettype($latestTicketingTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setChecksum(?string $checksum = null): self
    {
        // validation for constraint: string
        if (!is_null($checksum) && !is_string($checksum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeEticketability::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeEticketability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eTicketability
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setETicketability(?string $eTicketability = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeEticketability::valueIsValid($eTicketability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeEticketability', is_array($eTicketability) ? implode(', ', $eTicketability) : var_export($eTicketability, true), implode(', ', \Travelport\Util\EnumType\TypeEticketability::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setAirPricingInfoGroup(?int $airPricingInfoGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($airPricingInfoGroup) && !(is_int($airPricingInfoGroup) || ctype_digit($airPricingInfoGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($airPricingInfoGroup, true), gettype($airPricingInfoGroup)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTotalNetPrice(?string $totalNetPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalNetPrice) && !is_string($totalNetPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalNetPrice, true), gettype($totalNetPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTicketed(?bool $ticketed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ticketed) && !is_bool($ticketed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticketed, true), gettype($ticketed)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPricingType(?string $pricingType = null): self
    {
        // validation for constraint: string
        if (!is_null($pricingType) && !is_string($pricingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pricingType, true), gettype($pricingType)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($pricingType) && mb_strlen((string) $pricingType) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $pricingType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTrueLastDateToTicket(?string $trueLastDateToTicket = null): self
    {
        // validation for constraint: string
        if (!is_null($trueLastDateToTicket) && !is_string($trueLastDateToTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trueLastDateToTicket, true), gettype($trueLastDateToTicket)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFareCalculationInd(?string $fareCalculationInd = null): self
    {
        // validation for constraint: string
        if (!is_null($fareCalculationInd) && !is_string($fareCalculationInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareCalculationInd, true), gettype($fareCalculationInd)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($fareCalculationInd) && mb_strlen((string) $fareCalculationInd) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $fareCalculationInd)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setCat35Indicator(?bool $cat35Indicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat35Indicator) && !is_bool($cat35Indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat35Indicator, true), gettype($cat35Indicator)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBasePrice) && !is_string($approximateBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBasePrice, true), gettype($approximateBasePrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentBasePrice) && !is_string($equivalentBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentBasePrice, true), gettype($equivalentBasePrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setFees(?string $fees = null): self
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setServices(?string $services = null): self
    {
        // validation for constraint: string
        if (!is_null($services) && !is_string($services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($services, true), gettype($services)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTaxes) && !is_string($approximateTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTaxes, true), gettype($approximateTaxes)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateFees) && !is_string($approximateFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateFees, true), gettype($approximateFees)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
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
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Util\StructType\AirPricingInfo
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setInPolicy(?bool $inPolicy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inPolicy) && !is_bool($inPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPolicy, true), gettype($inPolicy)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingInfo
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preferredOption) && !is_bool($preferredOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferredOption, true), gettype($preferredOption)), __LINE__);
        }
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
}
