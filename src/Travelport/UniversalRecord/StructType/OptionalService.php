<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalService StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains PickUp Return Details for that Cruise Option Service. | Featues/Optionals supported with the cruise booked. | Specifies how the Optional Service fee is to be applied. The choices are Per One Way, Per Round Trip, Per Item
 * (Per Piece), Per Travel, Per Ticket, Per 1 Kilo, Per 5 Kilos. Provider: 1G, 1V, 1P | Information regarding any specific for this service. | Describes a merchandising service of a given type (e.g. Seat) that can be purchased for the indicated amount.
 * If this service is for only a given passenger or segment the references will indicate the restrictions. If this service applies to all passenger or the entire itinerary, the references will not be present.
 * @subpackage Structs
 */
class OptionalService extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Specify the type of service offered (e.g. seats, baggage, etc.) | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public array $BookingTravelerRef;
    /**
     * The FeatureType
     * Meta information extracted from the WSDL
     * - documentation: Type of Optional Service. F: Feature, O: Option | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: required
     * @var string
     */
    public string $FeatureType;
    /**
     * The ServiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceData
     * @var \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    public ?array $ServiceData = null;
    /**
     * The ServiceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ServiceInfo
     * @var \Travelport\UniversalRecord\StructType\ServiceInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\ServiceInfo $ServiceInfo = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\UniversalRecord\StructType\Remark[]
     */
    public ?array $Remark = null;
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
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The EMD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EMD
     * @var \Travelport\UniversalRecord\StructType\EMD|null
     */
    public ?\Travelport\UniversalRecord\StructType\EMD $EMD = null;
    /**
     * The BundledServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BundledServices
     * @var \Travelport\UniversalRecord\StructType\BundledServices|null
     */
    public ?\Travelport\UniversalRecord\StructType\BundledServices $BundledServices = null;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: AdditionalInfo
     * @var \Travelport\UniversalRecord\StructType\AdditionalInfo[]
     */
    public ?array $AdditionalInfo = null;
    /**
     * The FeeApplication
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: FeeApplication
     * @var \Travelport\UniversalRecord\StructType\FeeApplication|null
     */
    public ?\Travelport\UniversalRecord\StructType\FeeApplication $FeeApplication = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public ?array $Text = null;
    /**
     * The PriceRange
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: PriceRange
     * @var \Travelport\UniversalRecord\StructType\PriceRange[]
     */
    public ?array $PriceRange = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\UniversalRecord\StructType\TourCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\TourCode $TourCode = null;
    /**
     * The BrandingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BrandingInfo
     * @var \Travelport\UniversalRecord\StructType\BrandingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\BrandingInfo $BrandingInfo = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Title
     * @var \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public ?array $Title = null;
    /**
     * The OptionalServicesRuleRef
     * Meta information extracted from the WSDL
     * - documentation: UniqueID to associate a rule to the Optional Service | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $OptionalServicesRuleRef = null;
    /**
     * The Confirmation
     * Meta information extracted from the WSDL
     * - documentation: Confirmation number provided by the supplier
     * - use: optional
     * @var string|null
     */
    public ?string $Confirmation = null;
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: The secondary option code type required for certain options
     * - use: optional
     * @var string|null
     */
    public ?string $SecondaryType = null;
    /**
     * The PurchaseWindow
     * Meta information extracted from the WSDL
     * - documentation: Describes when the Service is available for confirmation or purchase (e.g. Booking Only, Check-in Only, Anytime, etc.)
     * - use: optional
     * @var string|null
     */
    public ?string $PurchaseWindow = null;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - documentation: Numeric value that represents the priority order of the Service
     * - use: optional
     * @var int|null
     */
    public ?int $Priority = null;
    /**
     * The Available
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the Service is available for sale or not
     * - use: optional
     * @var bool|null
     */
    public ?bool $Available = null;
    /**
     * The Entitled
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the passenger is entitled for the service without charge or not
     * - use: optional
     * @var bool|null
     */
    public ?bool $Entitled = null;
    /**
     * The PerTraveler
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the Amount on the Service is charged per traveler.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $PerTraveler = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: Timestamp when this service/offer got created.
     * - use: optional
     * @var string|null
     */
    public ?string $CreateDate = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a payment for merchandising services. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PaymentRef = null;
    /**
     * The ServiceStatus
     * Meta information extracted from the WSDL
     * - documentation: Specify the service status (e.g. active, canceled, etc.)
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceStatus = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Number of Features/Options Requested. | The number of units availed for each optional service (e.g. 2 baggage availed will be specified as 2 in quantity for optional service BAGGAGE)
     * - use: optional
     * @var int|null
     */
    public ?int $Quantity = null;
    /**
     * The SequenceNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequence number associated with the OptionalService
     * - use: optional
     * @var int|null
     */
    public ?int $SequenceNumber = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceSubCode = null;
    /**
     * The SSRCode
     * Meta information extracted from the WSDL
     * - documentation: The SSR Code associated with the OptionalService | SSR Code, exactly 4 characters (e.g. DEAF, NSST, etc.)
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $SSRCode = null;
    /**
     * The IssuanceReason
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $IssuanceReason = null;
    /**
     * The ProviderDefinedType
     * Meta information extracted from the WSDL
     * - documentation: Unique ID on vendors system
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderDefinedType = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The AssessIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether price is assessed by mileage or currency or both
     * - use: optional
     * @var string|null
     */
    public ?string $AssessIndicator = null;
    /**
     * The Mileage
     * Meta information extracted from the WSDL
     * - documentation: Indicates mileage fee/amount
     * - use: optional
     * @var int|null
     */
    public ?int $Mileage = null;
    /**
     * The ApplicableFFLevel
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 9
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $ApplicableFFLevel = null;
    /**
     * The Private
     * Meta information extracted from the WSDL
     * - documentation: Describes if service is private or not.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Private = null;
    /**
     * The SSRFreeText
     * Meta information extracted from the WSDL
     * - documentation: Certain SSR types sent in OptionalService SSRCode require a free text message. For example, PETC Pet in Cabin. | SSR Free Text
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SSRFreeText = null;
    /**
     * The IsPricingApproximate
     * Meta information extracted from the WSDL
     * - documentation: When set to True indicates that the pricing returned is approximate. Supported providers are MCH/ACH
     * - use: optional
     * @var bool|null
     */
    public ?bool $IsPricingApproximate = null;
    /**
     * The Chargeable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the optional service is not offered, is available for a charge, or is included in the brand
     * - use: optional
     * @var string|null
     */
    public ?string $Chargeable = null;
    /**
     * The InclusiveOfTax
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the service was filed with a fee that is inclusive of tax.
     * - use: optional
     * @var bool|null
     */
    public ?bool $InclusiveOfTax = null;
    /**
     * The InterlineSettlementAllowed
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the interline settlement is allowed in service .
     * - use: optional
     * @var bool|null
     */
    public ?bool $InterlineSettlementAllowed = null;
    /**
     * The GeographySpecification
     * Meta information extracted from the WSDL
     * - documentation: Sector, Portion, Journey.
     * - use: optional
     * @var string|null
     */
    public ?string $GeographySpecification = null;
    /**
     * The ExcessWeightRate
     * Meta information extracted from the WSDL
     * - documentation: The cost of the bag per unit weight.
     * - use: optional
     * @var string|null
     */
    public ?string $ExcessWeightRate = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: The Source of the optional service. The source can be ACH, MCE, or MCH.
     * - use: optional
     * @var string|null
     */
    public ?string $Source = null;
    /**
     * The ViewableOnly
     * Meta information extracted from the WSDL
     * - documentation: Describes if the OptionalService is viewable only or not. If viewable only then the service cannot be sold.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ViewableOnly = null;
    /**
     * The DisplayText
     * Meta information extracted from the WSDL
     * - documentation: Title of the Optional Service. Provider: ACH
     * - use: optional
     * @var string|null
     */
    public ?string $DisplayText = null;
    /**
     * The WeightInExcess
     * Meta information extracted from the WSDL
     * - documentation: The excess weight of a bag. Providers: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $WeightInExcess = null;
    /**
     * The TotalWeight
     * Meta information extracted from the WSDL
     * - documentation: The total weight of a bag. Providers: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $TotalWeight = null;
    /**
     * The BaggageUnitPrice
     * Meta information extracted from the WSDL
     * - documentation: The per unit price of baggage. Providers: 1G, 1V, 1P | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BaggageUnitPrice = null;
    /**
     * The FirstPiece
     * Meta information extracted from the WSDL
     * - documentation: Indicates the minimum occurrence of excess baggage.Provider: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    public ?int $FirstPiece = null;
    /**
     * The LastPiece
     * Meta information extracted from the WSDL
     * - documentation: Indicates the maximum occurrence of excess baggage. Provider: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    public ?int $LastPiece = null;
    /**
     * The Restricted
     * Meta information extracted from the WSDL
     * - documentation: When set to ???true???, the Optional Service is restricted by an embargo. Provider: 1G, 1V, 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Restricted = null;
    /**
     * The IsRepriceRequired
     * Meta information extracted from the WSDL
     * - documentation: When set to ???true???, the Optional Service must be re-priced. Provider: 1G, 1V, 1P
     * - default: false
     * @var bool|null
     */
    public ?bool $IsRepriceRequired = null;
    /**
     * The BookedQuantity
     * Meta information extracted from the WSDL
     * - documentation: Indicates the Optional Service quantity already booked. Provider: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $BookedQuantity = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Associates Optional Services with the same ServiceSub Code, Air Segment, Passenger, and EMD Associated Item. Provider:1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $Group = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PCC or SID that booked the Optional Service. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Tag = null;
    /**
     * The DisplayOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $DisplayOrder = null;
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
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: Feature/Option Price | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
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
     * The OptionJourneyDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionJourneyDetails
     * @var \Travelport\UniversalRecord\StructType\OptionJourneyDetails|null
     */
    public ?\Travelport\UniversalRecord\StructType\OptionJourneyDetails $OptionJourneyDetails = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of of the Optional Service | Valid 2 letter Status Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Descriptive Name of Feature or Option | Used for Character Strings, length 1 to 25.
     * - base: xs:string
     * - maxLength: 25
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: Feature/Option Begin Date
     * - use: optional
     * @var string|null
     */
    public ?string $StartDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - documentation: Feature/Option End Date
     * - use: optional
     * @var string|null
     */
    public ?string $EndDate = null;
    /**
     * The BookingDate
     * Meta information extracted from the WSDL
     * - documentation: Date Cruise Booked
     * - use: optional
     * @var string|null
     */
    public ?string $BookingDate = null;
    /**
     * The SetIdentifier
     * Meta information extracted from the WSDL
     * - documentation: Feature/Option Unique ID Examples: B2NOXFR | Used for Character Strings, length 1 to 10.
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $SetIdentifier = null;
    /**
     * The SetName
     * Meta information extracted from the WSDL
     * - documentation: Feature/Option Set Name Examples: PRE-CRUISE | Used for Character Strings, length 1 to 20.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $SetName = null;
    /**
     * The TransportIndicator
     * Meta information extracted from the WSDL
     * - documentation: Whether Features/ Options Affects TransportationIndicator. True - This Feature or Option group affects transportation False - This Feature or Option group does not affect transportation.
     * - use: optional
     * @var bool|null
     */
    public ?bool $TransportIndicator = null;
    /**
     * The AirCityIndicator
     * Meta information extracted from the WSDL
     * - documentation: Feature/option is air or city dependent.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AirCityIndicator = null;
    /**
     * The PurchaseIndicator
     * Meta information extracted from the WSDL
     * - documentation: Option purchased by someone other than the passenger
     * - use: optional
     * @var bool|null
     */
    public ?bool $PurchaseIndicator = null;
    /**
     * Constructor method for OptionalService
     * @uses OptionalService::setType()
     * @uses OptionalService::setBookingTravelerRef()
     * @uses OptionalService::setFeatureType()
     * @uses OptionalService::setServiceData()
     * @uses OptionalService::setServiceInfo()
     * @uses OptionalService::setRemark()
     * @uses OptionalService::setTaxInfo()
     * @uses OptionalService::setFeeInfo()
     * @uses OptionalService::setEMD()
     * @uses OptionalService::setBundledServices()
     * @uses OptionalService::setAdditionalInfo()
     * @uses OptionalService::setFeeApplication()
     * @uses OptionalService::setText()
     * @uses OptionalService::setPriceRange()
     * @uses OptionalService::setTourCode()
     * @uses OptionalService::setBrandingInfo()
     * @uses OptionalService::setTitle()
     * @uses OptionalService::setOptionalServicesRuleRef()
     * @uses OptionalService::setConfirmation()
     * @uses OptionalService::setSecondaryType()
     * @uses OptionalService::setPurchaseWindow()
     * @uses OptionalService::setPriority()
     * @uses OptionalService::setAvailable()
     * @uses OptionalService::setEntitled()
     * @uses OptionalService::setPerTraveler()
     * @uses OptionalService::setCreateDate()
     * @uses OptionalService::setPaymentRef()
     * @uses OptionalService::setServiceStatus()
     * @uses OptionalService::setQuantity()
     * @uses OptionalService::setSequenceNumber()
     * @uses OptionalService::setServiceSubCode()
     * @uses OptionalService::setSSRCode()
     * @uses OptionalService::setIssuanceReason()
     * @uses OptionalService::setProviderDefinedType()
     * @uses OptionalService::setKey()
     * @uses OptionalService::setAssessIndicator()
     * @uses OptionalService::setMileage()
     * @uses OptionalService::setApplicableFFLevel()
     * @uses OptionalService::setPrivate()
     * @uses OptionalService::setSSRFreeText()
     * @uses OptionalService::setIsPricingApproximate()
     * @uses OptionalService::setChargeable()
     * @uses OptionalService::setInclusiveOfTax()
     * @uses OptionalService::setInterlineSettlementAllowed()
     * @uses OptionalService::setGeographySpecification()
     * @uses OptionalService::setExcessWeightRate()
     * @uses OptionalService::setSource()
     * @uses OptionalService::setViewableOnly()
     * @uses OptionalService::setDisplayText()
     * @uses OptionalService::setWeightInExcess()
     * @uses OptionalService::setTotalWeight()
     * @uses OptionalService::setBaggageUnitPrice()
     * @uses OptionalService::setFirstPiece()
     * @uses OptionalService::setLastPiece()
     * @uses OptionalService::setRestricted()
     * @uses OptionalService::setIsRepriceRequired()
     * @uses OptionalService::setBookedQuantity()
     * @uses OptionalService::setGroup()
     * @uses OptionalService::setPseudoCityCode()
     * @uses OptionalService::setTag()
     * @uses OptionalService::setDisplayOrder()
     * @uses OptionalService::setProviderCode()
     * @uses OptionalService::setSupplierCode()
     * @uses OptionalService::setTotalPrice()
     * @uses OptionalService::setBasePrice()
     * @uses OptionalService::setApproximateTotalPrice()
     * @uses OptionalService::setApproximateBasePrice()
     * @uses OptionalService::setEquivalentBasePrice()
     * @uses OptionalService::setTaxes()
     * @uses OptionalService::setFees()
     * @uses OptionalService::setServices()
     * @uses OptionalService::setApproximateTaxes()
     * @uses OptionalService::setApproximateFees()
     * @uses OptionalService::setElStat()
     * @uses OptionalService::setKeyOverride()
     * @uses OptionalService::setOptionJourneyDetails()
     * @uses OptionalService::setStatus()
     * @uses OptionalService::setDescription()
     * @uses OptionalService::setStartDate()
     * @uses OptionalService::setEndDate()
     * @uses OptionalService::setBookingDate()
     * @uses OptionalService::setSetIdentifier()
     * @uses OptionalService::setSetName()
     * @uses OptionalService::setTransportIndicator()
     * @uses OptionalService::setAirCityIndicator()
     * @uses OptionalService::setPurchaseIndicator()
     * @param string $type
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param string $featureType
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @param \Travelport\UniversalRecord\StructType\ServiceInfo $serviceInfo
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\EMD $eMD
     * @param \Travelport\UniversalRecord\StructType\BundledServices $bundledServices
     * @param \Travelport\UniversalRecord\StructType\AdditionalInfo[] $additionalInfo
     * @param \Travelport\UniversalRecord\StructType\FeeApplication $feeApplication
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @param \Travelport\UniversalRecord\StructType\PriceRange[] $priceRange
     * @param \Travelport\UniversalRecord\StructType\TourCode $tourCode
     * @param \Travelport\UniversalRecord\StructType\BrandingInfo $brandingInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $title
     * @param string $optionalServicesRuleRef
     * @param string $confirmation
     * @param string $secondaryType
     * @param string $purchaseWindow
     * @param int $priority
     * @param bool $available
     * @param bool $entitled
     * @param bool $perTraveler
     * @param string $createDate
     * @param string $paymentRef
     * @param string $serviceStatus
     * @param int $quantity
     * @param int $sequenceNumber
     * @param string $serviceSubCode
     * @param string $sSRCode
     * @param string $issuanceReason
     * @param string $providerDefinedType
     * @param string $key
     * @param string $assessIndicator
     * @param int $mileage
     * @param int $applicableFFLevel
     * @param bool $private
     * @param string $sSRFreeText
     * @param bool $isPricingApproximate
     * @param string $chargeable
     * @param bool $inclusiveOfTax
     * @param bool $interlineSettlementAllowed
     * @param string $geographySpecification
     * @param string $excessWeightRate
     * @param string $source
     * @param bool $viewableOnly
     * @param string $displayText
     * @param string $weightInExcess
     * @param string $totalWeight
     * @param string $baggageUnitPrice
     * @param int $firstPiece
     * @param int $lastPiece
     * @param bool $restricted
     * @param bool $isRepriceRequired
     * @param string $bookedQuantity
     * @param string $group
     * @param string $pseudoCityCode
     * @param string $tag
     * @param int $displayOrder
     * @param string $providerCode
     * @param string $supplierCode
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
     * @param string $elStat
     * @param bool $keyOverride
     * @param \Travelport\UniversalRecord\StructType\OptionJourneyDetails $optionJourneyDetails
     * @param string $status
     * @param string $description
     * @param string $startDate
     * @param string $endDate
     * @param string $bookingDate
     * @param string $setIdentifier
     * @param string $setName
     * @param bool $transportIndicator
     * @param bool $airCityIndicator
     * @param bool $purchaseIndicator
     */
    public function __construct(string $type, array $bookingTravelerRef, string $featureType, ?array $serviceData = null, ?\Travelport\UniversalRecord\StructType\ServiceInfo $serviceInfo = null, ?array $remark = null, ?array $taxInfo = null, ?array $feeInfo = null, ?\Travelport\UniversalRecord\StructType\EMD $eMD = null, ?\Travelport\UniversalRecord\StructType\BundledServices $bundledServices = null, ?array $additionalInfo = null, ?\Travelport\UniversalRecord\StructType\FeeApplication $feeApplication = null, ?array $text = null, ?array $priceRange = null, ?\Travelport\UniversalRecord\StructType\TourCode $tourCode = null, ?\Travelport\UniversalRecord\StructType\BrandingInfo $brandingInfo = null, ?array $title = null, ?string $optionalServicesRuleRef = null, ?string $confirmation = null, ?string $secondaryType = null, ?string $purchaseWindow = null, ?int $priority = null, ?bool $available = null, ?bool $entitled = null, ?bool $perTraveler = true, ?string $createDate = null, ?string $paymentRef = null, ?string $serviceStatus = null, ?int $quantity = null, ?int $sequenceNumber = null, ?string $serviceSubCode = null, ?string $sSRCode = null, ?string $issuanceReason = null, ?string $providerDefinedType = null, ?string $key = null, ?string $assessIndicator = null, ?int $mileage = null, ?int $applicableFFLevel = null, ?bool $private = null, ?string $sSRFreeText = null, ?bool $isPricingApproximate = null, ?string $chargeable = null, ?bool $inclusiveOfTax = null, ?bool $interlineSettlementAllowed = null, ?string $geographySpecification = null, ?string $excessWeightRate = null, ?string $source = null, ?bool $viewableOnly = null, ?string $displayText = null, ?string $weightInExcess = null, ?string $totalWeight = null, ?string $baggageUnitPrice = null, ?int $firstPiece = null, ?int $lastPiece = null, ?bool $restricted = false, ?bool $isRepriceRequired = false, ?string $bookedQuantity = null, ?string $group = null, ?string $pseudoCityCode = null, ?string $tag = null, ?int $displayOrder = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $elStat = null, ?bool $keyOverride = null, ?\Travelport\UniversalRecord\StructType\OptionJourneyDetails $optionJourneyDetails = null, ?string $status = null, ?string $description = null, ?string $startDate = null, ?string $endDate = null, ?string $bookingDate = null, ?string $setIdentifier = null, ?string $setName = null, ?bool $transportIndicator = null, ?bool $airCityIndicator = null, ?bool $purchaseIndicator = null)
    {
        $this
            ->setType($type)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setFeatureType($featureType)
            ->setServiceData($serviceData)
            ->setServiceInfo($serviceInfo)
            ->setRemark($remark)
            ->setTaxInfo($taxInfo)
            ->setFeeInfo($feeInfo)
            ->setEMD($eMD)
            ->setBundledServices($bundledServices)
            ->setAdditionalInfo($additionalInfo)
            ->setFeeApplication($feeApplication)
            ->setText($text)
            ->setPriceRange($priceRange)
            ->setTourCode($tourCode)
            ->setBrandingInfo($brandingInfo)
            ->setTitle($title)
            ->setOptionalServicesRuleRef($optionalServicesRuleRef)
            ->setConfirmation($confirmation)
            ->setSecondaryType($secondaryType)
            ->setPurchaseWindow($purchaseWindow)
            ->setPriority($priority)
            ->setAvailable($available)
            ->setEntitled($entitled)
            ->setPerTraveler($perTraveler)
            ->setCreateDate($createDate)
            ->setPaymentRef($paymentRef)
            ->setServiceStatus($serviceStatus)
            ->setQuantity($quantity)
            ->setSequenceNumber($sequenceNumber)
            ->setServiceSubCode($serviceSubCode)
            ->setSSRCode($sSRCode)
            ->setIssuanceReason($issuanceReason)
            ->setProviderDefinedType($providerDefinedType)
            ->setKey($key)
            ->setAssessIndicator($assessIndicator)
            ->setMileage($mileage)
            ->setApplicableFFLevel($applicableFFLevel)
            ->setPrivate($private)
            ->setSSRFreeText($sSRFreeText)
            ->setIsPricingApproximate($isPricingApproximate)
            ->setChargeable($chargeable)
            ->setInclusiveOfTax($inclusiveOfTax)
            ->setInterlineSettlementAllowed($interlineSettlementAllowed)
            ->setGeographySpecification($geographySpecification)
            ->setExcessWeightRate($excessWeightRate)
            ->setSource($source)
            ->setViewableOnly($viewableOnly)
            ->setDisplayText($displayText)
            ->setWeightInExcess($weightInExcess)
            ->setTotalWeight($totalWeight)
            ->setBaggageUnitPrice($baggageUnitPrice)
            ->setFirstPiece($firstPiece)
            ->setLastPiece($lastPiece)
            ->setRestricted($restricted)
            ->setIsRepriceRequired($isRepriceRequired)
            ->setBookedQuantity($bookedQuantity)
            ->setGroup($group)
            ->setPseudoCityCode($pseudoCityCode)
            ->setTag($tag)
            ->setDisplayOrder($displayOrder)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
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
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride)
            ->setOptionJourneyDetails($optionJourneyDetails)
            ->setStatus($status)
            ->setDescription($description)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setBookingDate($bookingDate)
            ->setSetIdentifier($setIdentifier)
            ->setSetName($setName)
            ->setTransportIndicator($transportIndicator)
            ->setAirCityIndicator($airCityIndicator)
            ->setPurchaseIndicator($purchaseIndicator);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setBookingTravelerRef(array $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get FeatureType value
     * @return string
     */
    public function getFeatureType(): string
    {
        return $this->FeatureType;
    }
    /**
     * Set FeatureType value
     * @param string $featureType
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setFeatureType(string $featureType): self
    {
        $this->FeatureType = $featureType;
        
        return $this;
    }
    /**
     * Get ServiceData value
     * @return \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    public function getServiceData(): ?array
    {
        return $this->ServiceData;
    }
    /**
     * Set ServiceData value
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setServiceData(?array $serviceData = null): self
    {
        $this->ServiceData = $serviceData;
        
        return $this;
    }
    /**
     * Add item to ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceData $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToServiceData(\Travelport\UniversalRecord\StructType\ServiceData $item): self
    {
        $this->ServiceData[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceInfo value
     * @return \Travelport\UniversalRecord\StructType\ServiceInfo|null
     */
    public function getServiceInfo(): ?\Travelport\UniversalRecord\StructType\ServiceInfo
    {
        return $this->ServiceInfo;
    }
    /**
     * Set ServiceInfo value
     * @param \Travelport\UniversalRecord\StructType\ServiceInfo $serviceInfo
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setServiceInfo(?\Travelport\UniversalRecord\StructType\ServiceInfo $serviceInfo = null): self
    {
        $this->ServiceInfo = $serviceInfo;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\UniversalRecord\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setRemark(?array $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Remark $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToRemark(\Travelport\UniversalRecord\StructType\Remark $item): self
    {
        $this->Remark[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EMD value
     * @return \Travelport\UniversalRecord\StructType\EMD|null
     */
    public function getEMD(): ?\Travelport\UniversalRecord\StructType\EMD
    {
        return $this->EMD;
    }
    /**
     * Set EMD value
     * @param \Travelport\UniversalRecord\StructType\EMD $eMD
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setEMD(?\Travelport\UniversalRecord\StructType\EMD $eMD = null): self
    {
        $this->EMD = $eMD;
        
        return $this;
    }
    /**
     * Get BundledServices value
     * @return \Travelport\UniversalRecord\StructType\BundledServices|null
     */
    public function getBundledServices(): ?\Travelport\UniversalRecord\StructType\BundledServices
    {
        return $this->BundledServices;
    }
    /**
     * Set BundledServices value
     * @param \Travelport\UniversalRecord\StructType\BundledServices $bundledServices
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setBundledServices(?\Travelport\UniversalRecord\StructType\BundledServices $bundledServices = null): self
    {
        $this->BundledServices = $bundledServices;
        
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return \Travelport\UniversalRecord\StructType\AdditionalInfo[]
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param \Travelport\UniversalRecord\StructType\AdditionalInfo[] $additionalInfo
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setAdditionalInfo(?array $additionalInfo = null): self
    {
        $this->AdditionalInfo = $additionalInfo;
        
        return $this;
    }
    /**
     * Add item to AdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AdditionalInfo $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToAdditionalInfo(\Travelport\UniversalRecord\StructType\AdditionalInfo $item): self
    {
        $this->AdditionalInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FeeApplication value
     * @return \Travelport\UniversalRecord\StructType\FeeApplication|null
     */
    public function getFeeApplication(): ?\Travelport\UniversalRecord\StructType\FeeApplication
    {
        return $this->FeeApplication;
    }
    /**
     * Set FeeApplication value
     * @param \Travelport\UniversalRecord\StructType\FeeApplication $feeApplication
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setFeeApplication(?\Travelport\UniversalRecord\StructType\FeeApplication $feeApplication = null): self
    {
        $this->FeeApplication = $feeApplication;
        
        return $this;
    }
    /**
     * Get Text value
     * @return \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setText(?array $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToText(\Travelport\UniversalRecord\StructType\TypeTextElement $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get PriceRange value
     * @return \Travelport\UniversalRecord\StructType\PriceRange[]
     */
    public function getPriceRange(): ?array
    {
        return $this->PriceRange;
    }
    /**
     * Set PriceRange value
     * @param \Travelport\UniversalRecord\StructType\PriceRange[] $priceRange
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPriceRange(?array $priceRange = null): self
    {
        $this->PriceRange = $priceRange;
        
        return $this;
    }
    /**
     * Add item to PriceRange value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PriceRange $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToPriceRange(\Travelport\UniversalRecord\StructType\PriceRange $item): self
    {
        $this->PriceRange[] = $item;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\UniversalRecord\StructType\TourCode|null
     */
    public function getTourCode(): ?\Travelport\UniversalRecord\StructType\TourCode
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\UniversalRecord\StructType\TourCode $tourCode
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setTourCode(?\Travelport\UniversalRecord\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get BrandingInfo value
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo|null
     */
    public function getBrandingInfo(): ?\Travelport\UniversalRecord\StructType\BrandingInfo
    {
        return $this->BrandingInfo;
    }
    /**
     * Set BrandingInfo value
     * @param \Travelport\UniversalRecord\StructType\BrandingInfo $brandingInfo
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setBrandingInfo(?\Travelport\UniversalRecord\StructType\BrandingInfo $brandingInfo = null): self
    {
        $this->BrandingInfo = $brandingInfo;
        
        return $this;
    }
    /**
     * Get Title value
     * @return \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public function getTitle(): ?array
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $title
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setTitle(?array $title = null): self
    {
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Add item to Title value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement $item
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function addToTitle(\Travelport\UniversalRecord\StructType\TypeTextElement $item): self
    {
        $this->Title[] = $item;
        
        return $this;
    }
    /**
     * Get OptionalServicesRuleRef value
     * @return string|null
     */
    public function getOptionalServicesRuleRef(): ?string
    {
        return $this->OptionalServicesRuleRef;
    }
    /**
     * Set OptionalServicesRuleRef value
     * @param string $optionalServicesRuleRef
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setOptionalServicesRuleRef(?string $optionalServicesRuleRef = null): self
    {
        $this->OptionalServicesRuleRef = $optionalServicesRuleRef;
        
        return $this;
    }
    /**
     * Get Confirmation value
     * @return string|null
     */
    public function getConfirmation(): ?string
    {
        return $this->Confirmation;
    }
    /**
     * Set Confirmation value
     * @param string $confirmation
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setConfirmation(?string $confirmation = null): self
    {
        $this->Confirmation = $confirmation;
        
        return $this;
    }
    /**
     * Get SecondaryType value
     * @return string|null
     */
    public function getSecondaryType(): ?string
    {
        return $this->SecondaryType;
    }
    /**
     * Set SecondaryType value
     * @param string $secondaryType
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSecondaryType(?string $secondaryType = null): self
    {
        $this->SecondaryType = $secondaryType;
        
        return $this;
    }
    /**
     * Get PurchaseWindow value
     * @return string|null
     */
    public function getPurchaseWindow(): ?string
    {
        return $this->PurchaseWindow;
    }
    /**
     * Set PurchaseWindow value
     * @param string $purchaseWindow
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPurchaseWindow(?string $purchaseWindow = null): self
    {
        $this->PurchaseWindow = $purchaseWindow;
        
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPriority(?int $priority = null): self
    {
        $this->Priority = $priority;
        
        return $this;
    }
    /**
     * Get Available value
     * @return bool|null
     */
    public function getAvailable(): ?bool
    {
        return $this->Available;
    }
    /**
     * Set Available value
     * @param bool $available
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setAvailable(?bool $available = null): self
    {
        $this->Available = $available;
        
        return $this;
    }
    /**
     * Get Entitled value
     * @return bool|null
     */
    public function getEntitled(): ?bool
    {
        return $this->Entitled;
    }
    /**
     * Set Entitled value
     * @param bool $entitled
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setEntitled(?bool $entitled = null): self
    {
        $this->Entitled = $entitled;
        
        return $this;
    }
    /**
     * Get PerTraveler value
     * @return bool|null
     */
    public function getPerTraveler(): ?bool
    {
        return $this->PerTraveler;
    }
    /**
     * Set PerTraveler value
     * @param bool $perTraveler
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPerTraveler(?bool $perTraveler = true): self
    {
        $this->PerTraveler = $perTraveler;
        
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setCreateDate(?string $createDate = null): self
    {
        $this->CreateDate = $createDate;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return string|null
     */
    public function getPaymentRef(): ?string
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param string $paymentRef
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPaymentRef(?string $paymentRef = null): self
    {
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Get ServiceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->ServiceStatus;
    }
    /**
     * Set ServiceStatus value
     * @param string $serviceStatus
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        $this->ServiceStatus = $serviceStatus;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setQuantity(?int $quantity = null): self
    {
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSequenceNumber(?int $sequenceNumber = null): self
    {
        $this->SequenceNumber = $sequenceNumber;
        
        return $this;
    }
    /**
     * Get ServiceSubCode value
     * @return string|null
     */
    public function getServiceSubCode(): ?string
    {
        return $this->ServiceSubCode;
    }
    /**
     * Set ServiceSubCode value
     * @param string $serviceSubCode
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
    /**
     * Get SSRCode value
     * @return string|null
     */
    public function getSSRCode(): ?string
    {
        return $this->SSRCode;
    }
    /**
     * Set SSRCode value
     * @param string $sSRCode
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSSRCode(?string $sSRCode = null): self
    {
        $this->SSRCode = $sSRCode;
        
        return $this;
    }
    /**
     * Get IssuanceReason value
     * @return string|null
     */
    public function getIssuanceReason(): ?string
    {
        return $this->IssuanceReason;
    }
    /**
     * Set IssuanceReason value
     * @param string $issuanceReason
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setIssuanceReason(?string $issuanceReason = null): self
    {
        $this->IssuanceReason = $issuanceReason;
        
        return $this;
    }
    /**
     * Get ProviderDefinedType value
     * @return string|null
     */
    public function getProviderDefinedType(): ?string
    {
        return $this->ProviderDefinedType;
    }
    /**
     * Set ProviderDefinedType value
     * @param string $providerDefinedType
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setProviderDefinedType(?string $providerDefinedType = null): self
    {
        $this->ProviderDefinedType = $providerDefinedType;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AssessIndicator value
     * @return string|null
     */
    public function getAssessIndicator(): ?string
    {
        return $this->AssessIndicator;
    }
    /**
     * Set AssessIndicator value
     * @param string $assessIndicator
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setAssessIndicator(?string $assessIndicator = null): self
    {
        $this->AssessIndicator = $assessIndicator;
        
        return $this;
    }
    /**
     * Get Mileage value
     * @return int|null
     */
    public function getMileage(): ?int
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param int $mileage
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setMileage(?int $mileage = null): self
    {
        $this->Mileage = $mileage;
        
        return $this;
    }
    /**
     * Get ApplicableFFLevel value
     * @return int|null
     */
    public function getApplicableFFLevel(): ?int
    {
        return $this->ApplicableFFLevel;
    }
    /**
     * Set ApplicableFFLevel value
     * @param int $applicableFFLevel
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setApplicableFFLevel(?int $applicableFFLevel = null): self
    {
        $this->ApplicableFFLevel = $applicableFFLevel;
        
        return $this;
    }
    /**
     * Get Private value
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->Private;
    }
    /**
     * Set Private value
     * @param bool $private
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPrivate(?bool $private = null): self
    {
        $this->Private = $private;
        
        return $this;
    }
    /**
     * Get SSRFreeText value
     * @return string|null
     */
    public function getSSRFreeText(): ?string
    {
        return $this->SSRFreeText;
    }
    /**
     * Set SSRFreeText value
     * @param string $sSRFreeText
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSSRFreeText(?string $sSRFreeText = null): self
    {
        $this->SSRFreeText = $sSRFreeText;
        
        return $this;
    }
    /**
     * Get IsPricingApproximate value
     * @return bool|null
     */
    public function getIsPricingApproximate(): ?bool
    {
        return $this->IsPricingApproximate;
    }
    /**
     * Set IsPricingApproximate value
     * @param bool $isPricingApproximate
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setIsPricingApproximate(?bool $isPricingApproximate = null): self
    {
        $this->IsPricingApproximate = $isPricingApproximate;
        
        return $this;
    }
    /**
     * Get Chargeable value
     * @return string|null
     */
    public function getChargeable(): ?string
    {
        return $this->Chargeable;
    }
    /**
     * Set Chargeable value
     * @param string $chargeable
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setChargeable(?string $chargeable = null): self
    {
        $this->Chargeable = $chargeable;
        
        return $this;
    }
    /**
     * Get InclusiveOfTax value
     * @return bool|null
     */
    public function getInclusiveOfTax(): ?bool
    {
        return $this->InclusiveOfTax;
    }
    /**
     * Set InclusiveOfTax value
     * @param bool $inclusiveOfTax
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setInclusiveOfTax(?bool $inclusiveOfTax = null): self
    {
        $this->InclusiveOfTax = $inclusiveOfTax;
        
        return $this;
    }
    /**
     * Get InterlineSettlementAllowed value
     * @return bool|null
     */
    public function getInterlineSettlementAllowed(): ?bool
    {
        return $this->InterlineSettlementAllowed;
    }
    /**
     * Set InterlineSettlementAllowed value
     * @param bool $interlineSettlementAllowed
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setInterlineSettlementAllowed(?bool $interlineSettlementAllowed = null): self
    {
        $this->InterlineSettlementAllowed = $interlineSettlementAllowed;
        
        return $this;
    }
    /**
     * Get GeographySpecification value
     * @return string|null
     */
    public function getGeographySpecification(): ?string
    {
        return $this->GeographySpecification;
    }
    /**
     * Set GeographySpecification value
     * @param string $geographySpecification
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setGeographySpecification(?string $geographySpecification = null): self
    {
        $this->GeographySpecification = $geographySpecification;
        
        return $this;
    }
    /**
     * Get ExcessWeightRate value
     * @return string|null
     */
    public function getExcessWeightRate(): ?string
    {
        return $this->ExcessWeightRate;
    }
    /**
     * Set ExcessWeightRate value
     * @param string $excessWeightRate
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setExcessWeightRate(?string $excessWeightRate = null): self
    {
        $this->ExcessWeightRate = $excessWeightRate;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSource(?string $source = null): self
    {
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get ViewableOnly value
     * @return bool|null
     */
    public function getViewableOnly(): ?bool
    {
        return $this->ViewableOnly;
    }
    /**
     * Set ViewableOnly value
     * @param bool $viewableOnly
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setViewableOnly(?bool $viewableOnly = null): self
    {
        $this->ViewableOnly = $viewableOnly;
        
        return $this;
    }
    /**
     * Get DisplayText value
     * @return string|null
     */
    public function getDisplayText(): ?string
    {
        return $this->DisplayText;
    }
    /**
     * Set DisplayText value
     * @param string $displayText
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setDisplayText(?string $displayText = null): self
    {
        $this->DisplayText = $displayText;
        
        return $this;
    }
    /**
     * Get WeightInExcess value
     * @return string|null
     */
    public function getWeightInExcess(): ?string
    {
        return $this->WeightInExcess;
    }
    /**
     * Set WeightInExcess value
     * @param string $weightInExcess
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setWeightInExcess(?string $weightInExcess = null): self
    {
        $this->WeightInExcess = $weightInExcess;
        
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return string|null
     */
    public function getTotalWeight(): ?string
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param string $totalWeight
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setTotalWeight(?string $totalWeight = null): self
    {
        $this->TotalWeight = $totalWeight;
        
        return $this;
    }
    /**
     * Get BaggageUnitPrice value
     * @return string|null
     */
    public function getBaggageUnitPrice(): ?string
    {
        return $this->BaggageUnitPrice;
    }
    /**
     * Set BaggageUnitPrice value
     * @param string $baggageUnitPrice
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setBaggageUnitPrice(?string $baggageUnitPrice = null): self
    {
        $this->BaggageUnitPrice = $baggageUnitPrice;
        
        return $this;
    }
    /**
     * Get FirstPiece value
     * @return int|null
     */
    public function getFirstPiece(): ?int
    {
        return $this->FirstPiece;
    }
    /**
     * Set FirstPiece value
     * @param int $firstPiece
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setFirstPiece(?int $firstPiece = null): self
    {
        $this->FirstPiece = $firstPiece;
        
        return $this;
    }
    /**
     * Get LastPiece value
     * @return int|null
     */
    public function getLastPiece(): ?int
    {
        return $this->LastPiece;
    }
    /**
     * Set LastPiece value
     * @param int $lastPiece
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setLastPiece(?int $lastPiece = null): self
    {
        $this->LastPiece = $lastPiece;
        
        return $this;
    }
    /**
     * Get Restricted value
     * @return bool|null
     */
    public function getRestricted(): ?bool
    {
        return $this->Restricted;
    }
    /**
     * Set Restricted value
     * @param bool $restricted
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setRestricted(?bool $restricted = false): self
    {
        $this->Restricted = $restricted;
        
        return $this;
    }
    /**
     * Get IsRepriceRequired value
     * @return bool|null
     */
    public function getIsRepriceRequired(): ?bool
    {
        return $this->IsRepriceRequired;
    }
    /**
     * Set IsRepriceRequired value
     * @param bool $isRepriceRequired
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setIsRepriceRequired(?bool $isRepriceRequired = false): self
    {
        $this->IsRepriceRequired = $isRepriceRequired;
        
        return $this;
    }
    /**
     * Get BookedQuantity value
     * @return string|null
     */
    public function getBookedQuantity(): ?string
    {
        return $this->BookedQuantity;
    }
    /**
     * Set BookedQuantity value
     * @param string $bookedQuantity
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setBookedQuantity(?string $bookedQuantity = null): self
    {
        $this->BookedQuantity = $bookedQuantity;
        
        return $this;
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $group
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setGroup(?string $group = null): self
    {
        $this->Group = $group;
        
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setTag(?string $tag = null): self
    {
        $this->Tag = $tag;
        
        return $this;
    }
    /**
     * Get DisplayOrder value
     * @return int|null
     */
    public function getDisplayOrder(): ?int
    {
        return $this->DisplayOrder;
    }
    /**
     * Set DisplayOrder value
     * @param int $displayOrder
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setDisplayOrder(?int $displayOrder = null): self
    {
        $this->DisplayOrder = $displayOrder;
        
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
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
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
    /**
     * Get OptionJourneyDetails value
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails|null
     */
    public function getOptionJourneyDetails(): ?\Travelport\UniversalRecord\StructType\OptionJourneyDetails
    {
        return $this->OptionJourneyDetails;
    }
    /**
     * Set OptionJourneyDetails value
     * @param \Travelport\UniversalRecord\StructType\OptionJourneyDetails $optionJourneyDetails
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setOptionJourneyDetails(?\Travelport\UniversalRecord\StructType\OptionJourneyDetails $optionJourneyDetails = null): self
    {
        $this->OptionJourneyDetails = $optionJourneyDetails;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setStartDate(?string $startDate = null): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setEndDate(?string $endDate = null): self
    {
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get BookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->BookingDate;
    }
    /**
     * Set BookingDate value
     * @param string $bookingDate
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        $this->BookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get SetIdentifier value
     * @return string|null
     */
    public function getSetIdentifier(): ?string
    {
        return $this->SetIdentifier;
    }
    /**
     * Set SetIdentifier value
     * @param string $setIdentifier
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSetIdentifier(?string $setIdentifier = null): self
    {
        $this->SetIdentifier = $setIdentifier;
        
        return $this;
    }
    /**
     * Get SetName value
     * @return string|null
     */
    public function getSetName(): ?string
    {
        return $this->SetName;
    }
    /**
     * Set SetName value
     * @param string $setName
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setSetName(?string $setName = null): self
    {
        $this->SetName = $setName;
        
        return $this;
    }
    /**
     * Get TransportIndicator value
     * @return bool|null
     */
    public function getTransportIndicator(): ?bool
    {
        return $this->TransportIndicator;
    }
    /**
     * Set TransportIndicator value
     * @param bool $transportIndicator
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setTransportIndicator(?bool $transportIndicator = null): self
    {
        $this->TransportIndicator = $transportIndicator;
        
        return $this;
    }
    /**
     * Get AirCityIndicator value
     * @return bool|null
     */
    public function getAirCityIndicator(): ?bool
    {
        return $this->AirCityIndicator;
    }
    /**
     * Set AirCityIndicator value
     * @param bool $airCityIndicator
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setAirCityIndicator(?bool $airCityIndicator = null): self
    {
        $this->AirCityIndicator = $airCityIndicator;
        
        return $this;
    }
    /**
     * Get PurchaseIndicator value
     * @return bool|null
     */
    public function getPurchaseIndicator(): ?bool
    {
        return $this->PurchaseIndicator;
    }
    /**
     * Set PurchaseIndicator value
     * @param bool $purchaseIndicator
     * @return \Travelport\UniversalRecord\StructType\OptionalService
     */
    public function setPurchaseIndicator(?bool $purchaseIndicator = null): self
    {
        $this->PurchaseIndicator = $purchaseIndicator;
        
        return $this;
    }
}
