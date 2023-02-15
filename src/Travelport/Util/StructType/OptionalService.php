<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalService StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies how the Optional Service fee is to be applied. The choices are Per One Way, Per Round Trip, Per Item (Per Piece), Per Travel, Per Ticket, Per 1 Kilo, Per 5 Kilos. Provider: 1G, 1V, 1P | Information regarding any specific
 * for this service. | Describes a merchandising service of a given type (e.g. Seat) that can be purchased for the indicated amount. If this service is for only a given passenger or segment the references will indicate the restrictions. If this service
 * applies to all passenger or the entire itinerary, the references will not be present.
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
    protected string $Type;
    /**
     * The ServiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceData
     * @var \Travelport\Util\StructType\ServiceData[]
     */
    protected ?array $ServiceData = null;
    /**
     * The ServiceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ServiceInfo
     * @var \Travelport\Util\StructType\ServiceInfo|null
     */
    protected ?\Travelport\Util\StructType\ServiceInfo $ServiceInfo = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\Util\StructType\Remark[]
     */
    protected ?array $Remark = null;
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
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\Util\StructType\TypeFeeInfo[]
     */
    protected ?array $FeeInfo = null;
    /**
     * The EMD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EMD
     * @var \Travelport\Util\StructType\EMD|null
     */
    protected ?\Travelport\Util\StructType\EMD $EMD = null;
    /**
     * The BundledServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BundledServices
     * @var \Travelport\Util\StructType\BundledServices|null
     */
    protected ?\Travelport\Util\StructType\BundledServices $BundledServices = null;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: AdditionalInfo
     * @var \Travelport\Util\StructType\AdditionalInfo[]
     */
    protected ?array $AdditionalInfo = null;
    /**
     * The FeeApplication
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: FeeApplication
     * @var \Travelport\Util\StructType\FeeApplication|null
     */
    protected ?\Travelport\Util\StructType\FeeApplication $FeeApplication = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\Util\StructType\TypeTextElement[]
     */
    protected ?array $Text = null;
    /**
     * The PriceRange
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: PriceRange
     * @var \Travelport\Util\StructType\PriceRange[]
     */
    protected ?array $PriceRange = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\Util\StructType\TourCode|null
     */
    protected ?\Travelport\Util\StructType\TourCode $TourCode = null;
    /**
     * The BrandingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BrandingInfo
     * @var \Travelport\Util\StructType\BrandingInfo|null
     */
    protected ?\Travelport\Util\StructType\BrandingInfo $BrandingInfo = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Title
     * @var \Travelport\Util\StructType\TypeTextElement[]
     */
    protected ?array $Title = null;
    /**
     * The OptionalServicesRuleRef
     * Meta information extracted from the WSDL
     * - documentation: UniqueID to associate a rule to the Optional Service | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OptionalServicesRuleRef = null;
    /**
     * The Confirmation
     * Meta information extracted from the WSDL
     * - documentation: Confirmation number provided by the supplier
     * - use: optional
     * @var string|null
     */
    protected ?string $Confirmation = null;
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: The secondary option code type required for certain options
     * - use: optional
     * @var string|null
     */
    protected ?string $SecondaryType = null;
    /**
     * The PurchaseWindow
     * Meta information extracted from the WSDL
     * - documentation: Describes when the Service is available for confirmation or purchase (e.g. Booking Only, Check-in Only, Anytime, etc.)
     * - use: optional
     * @var string|null
     */
    protected ?string $PurchaseWindow = null;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - documentation: Numeric value that represents the priority order of the Service
     * - use: optional
     * @var int|null
     */
    protected ?int $Priority = null;
    /**
     * The Available
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the Service is available for sale or not
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Available = null;
    /**
     * The Entitled
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the passenger is entitled for the service without charge or not
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Entitled = null;
    /**
     * The PerTraveler
     * Meta information extracted from the WSDL
     * - documentation: Boolean to describe whether the Amount on the Service is charged per traveler.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PerTraveler = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: Timestamp when this service/offer got created.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreateDate = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a payment for merchandising services. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PaymentRef = null;
    /**
     * The ServiceStatus
     * Meta information extracted from the WSDL
     * - documentation: Specify the service status (e.g. active, canceled, etc.)
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceStatus = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The number of units availed for each optional service (e.g. 2 baggage availed will be specified as 2 in quantity for optional service BAGGAGE)
     * - use: optional
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The SequenceNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequence number associated with the OptionalService
     * - use: optional
     * @var int|null
     */
    protected ?int $SequenceNumber = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceSubCode = null;
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
    protected ?string $SSRCode = null;
    /**
     * The IssuanceReason
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $IssuanceReason = null;
    /**
     * The ProviderDefinedType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderDefinedType = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The AssessIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether price is assessed by mileage or currency or both
     * - use: optional
     * @var string|null
     */
    protected ?string $AssessIndicator = null;
    /**
     * The Mileage
     * Meta information extracted from the WSDL
     * - documentation: Indicates mileage fee/amount
     * - use: optional
     * @var int|null
     */
    protected ?int $Mileage = null;
    /**
     * The ApplicableFFLevel
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 9
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $ApplicableFFLevel = null;
    /**
     * The Private
     * Meta information extracted from the WSDL
     * - documentation: Describes if service is private or not.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Private = null;
    /**
     * The SSRFreeText
     * Meta information extracted from the WSDL
     * - documentation: Certain SSR types sent in OptionalService SSRCode require a free text message. For example, PETC Pet in Cabin. | SSR Free Text
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SSRFreeText = null;
    /**
     * The IsPricingApproximate
     * Meta information extracted from the WSDL
     * - documentation: When set to True indicates that the pricing returned is approximate. Supported providers are MCH/ACH
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsPricingApproximate = null;
    /**
     * The Chargeable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the optional service is not offered, is available for a charge, or is included in the brand
     * - use: optional
     * @var string|null
     */
    protected ?string $Chargeable = null;
    /**
     * The InclusiveOfTax
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the service was filed with a fee that is inclusive of tax.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InclusiveOfTax = null;
    /**
     * The InterlineSettlementAllowed
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the interline settlement is allowed in service .
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InterlineSettlementAllowed = null;
    /**
     * The GeographySpecification
     * Meta information extracted from the WSDL
     * - documentation: Sector, Portion, Journey.
     * - use: optional
     * @var string|null
     */
    protected ?string $GeographySpecification = null;
    /**
     * The ExcessWeightRate
     * Meta information extracted from the WSDL
     * - documentation: The cost of the bag per unit weight.
     * - use: optional
     * @var string|null
     */
    protected ?string $ExcessWeightRate = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: The Source of the optional service. The source can be ACH, MCE, or MCH.
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The ViewableOnly
     * Meta information extracted from the WSDL
     * - documentation: Describes if the OptionalService is viewable only or not. If viewable only then the service cannot be sold.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ViewableOnly = null;
    /**
     * The DisplayText
     * Meta information extracted from the WSDL
     * - documentation: Title of the Optional Service. Provider: ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $DisplayText = null;
    /**
     * The WeightInExcess
     * Meta information extracted from the WSDL
     * - documentation: The excess weight of a bag. Providers: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    protected ?string $WeightInExcess = null;
    /**
     * The TotalWeight
     * Meta information extracted from the WSDL
     * - documentation: The total weight of a bag. Providers: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalWeight = null;
    /**
     * The BaggageUnitPrice
     * Meta information extracted from the WSDL
     * - documentation: The per unit price of baggage. Providers: 1G, 1V, 1P | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaggageUnitPrice = null;
    /**
     * The FirstPiece
     * Meta information extracted from the WSDL
     * - documentation: Indicates the minimum occurrence of excess baggage.Provider: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    protected ?int $FirstPiece = null;
    /**
     * The LastPiece
     * Meta information extracted from the WSDL
     * - documentation: Indicates the maximum occurrence of excess baggage. Provider: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    protected ?int $LastPiece = null;
    /**
     * The Restricted
     * Meta information extracted from the WSDL
     * - documentation: When set to “true”, the Optional Service is restricted by an embargo. Provider: 1G, 1V, 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Restricted = null;
    /**
     * The IsRepriceRequired
     * Meta information extracted from the WSDL
     * - documentation: When set to “true”, the Optional Service must be re-priced. Provider: 1G, 1V, 1P
     * - default: false
     * @var bool|null
     */
    protected ?bool $IsRepriceRequired = null;
    /**
     * The BookedQuantity
     * Meta information extracted from the WSDL
     * - documentation: Indicates the Optional Service quantity already booked. Provider: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    protected ?string $BookedQuantity = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Associates Optional Services with the same ServiceSub Code, Air Segment, Passenger, and EMD Associated Item. Provider:1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    protected ?string $Group = null;
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
    protected ?string $PseudoCityCode = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Tag = null;
    /**
     * The DisplayOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $DisplayOrder = null;
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
     * Constructor method for OptionalService
     * @uses OptionalService::setType()
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
     * @param string $type
     * @param \Travelport\Util\StructType\ServiceData[] $serviceData
     * @param \Travelport\Util\StructType\ServiceInfo $serviceInfo
     * @param \Travelport\Util\StructType\Remark[] $remark
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Util\StructType\EMD $eMD
     * @param \Travelport\Util\StructType\BundledServices $bundledServices
     * @param \Travelport\Util\StructType\AdditionalInfo[] $additionalInfo
     * @param \Travelport\Util\StructType\FeeApplication $feeApplication
     * @param \Travelport\Util\StructType\TypeTextElement[] $text
     * @param \Travelport\Util\StructType\PriceRange[] $priceRange
     * @param \Travelport\Util\StructType\TourCode $tourCode
     * @param \Travelport\Util\StructType\BrandingInfo $brandingInfo
     * @param \Travelport\Util\StructType\TypeTextElement[] $title
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
     */
    public function __construct(string $type, ?array $serviceData = null, ?\Travelport\Util\StructType\ServiceInfo $serviceInfo = null, ?array $remark = null, ?array $taxInfo = null, ?array $feeInfo = null, ?\Travelport\Util\StructType\EMD $eMD = null, ?\Travelport\Util\StructType\BundledServices $bundledServices = null, ?array $additionalInfo = null, ?\Travelport\Util\StructType\FeeApplication $feeApplication = null, ?array $text = null, ?array $priceRange = null, ?\Travelport\Util\StructType\TourCode $tourCode = null, ?\Travelport\Util\StructType\BrandingInfo $brandingInfo = null, ?array $title = null, ?string $optionalServicesRuleRef = null, ?string $confirmation = null, ?string $secondaryType = null, ?string $purchaseWindow = null, ?int $priority = null, ?bool $available = null, ?bool $entitled = null, ?bool $perTraveler = true, ?string $createDate = null, ?string $paymentRef = null, ?string $serviceStatus = null, ?int $quantity = null, ?int $sequenceNumber = null, ?string $serviceSubCode = null, ?string $sSRCode = null, ?string $issuanceReason = null, ?string $providerDefinedType = null, ?string $key = null, ?string $assessIndicator = null, ?int $mileage = null, ?int $applicableFFLevel = null, ?bool $private = null, ?string $sSRFreeText = null, ?bool $isPricingApproximate = null, ?string $chargeable = null, ?bool $inclusiveOfTax = null, ?bool $interlineSettlementAllowed = null, ?string $geographySpecification = null, ?string $excessWeightRate = null, ?string $source = null, ?bool $viewableOnly = null, ?string $displayText = null, ?string $weightInExcess = null, ?string $totalWeight = null, ?string $baggageUnitPrice = null, ?int $firstPiece = null, ?int $lastPiece = null, ?bool $restricted = false, ?bool $isRepriceRequired = false, ?string $bookedQuantity = null, ?string $group = null, ?string $pseudoCityCode = null, ?string $tag = null, ?int $displayOrder = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
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
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($type) && mb_strlen((string) $type) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $type)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($type) && mb_strlen((string) $type) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get ServiceData value
     * @return \Travelport\Util\StructType\ServiceData[]
     */
    public function getServiceData(): ?array
    {
        return $this->ServiceData;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceDataForArrayConstraintsFromSetServiceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServiceServiceDataItem) {
            // validation for constraint: itemType
            if (!$optionalServiceServiceDataItem instanceof \Travelport\Util\StructType\ServiceData) {
                $invalidValues[] = is_object($optionalServiceServiceDataItem) ? get_class($optionalServiceServiceDataItem) : sprintf('%s(%s)', gettype($optionalServiceServiceDataItem), var_export($optionalServiceServiceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceData property can only contain items of type \Travelport\Util\StructType\ServiceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ServiceData[] $serviceData
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setServiceData(?array $serviceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceDataArrayErrorMessage = self::validateServiceDataForArrayConstraintsFromSetServiceData($serviceData))) {
            throw new InvalidArgumentException($serviceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceData) && count($serviceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceData)), __LINE__);
        }
        $this->ServiceData = $serviceData;
        
        return $this;
    }
    /**
     * Add item to ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ServiceData $item
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function addToServiceData(\Travelport\Util\StructType\ServiceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ServiceData) {
            throw new InvalidArgumentException(sprintf('The ServiceData property can only contain items of type \Travelport\Util\StructType\ServiceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceData) && count($this->ServiceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceData)), __LINE__);
        }
        $this->ServiceData[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceInfo value
     * @return \Travelport\Util\StructType\ServiceInfo|null
     */
    public function getServiceInfo(): ?\Travelport\Util\StructType\ServiceInfo
    {
        return $this->ServiceInfo;
    }
    /**
     * Set ServiceInfo value
     * @param \Travelport\Util\StructType\ServiceInfo $serviceInfo
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setServiceInfo(?\Travelport\Util\StructType\ServiceInfo $serviceInfo = null): self
    {
        $this->ServiceInfo = $serviceInfo;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\Util\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * This method is responsible for validating the values passed to the setRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarkForArrayConstraintsFromSetRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServiceRemarkItem) {
            // validation for constraint: itemType
            if (!$optionalServiceRemarkItem instanceof \Travelport\Util\StructType\Remark) {
                $invalidValues[] = is_object($optionalServiceRemarkItem) ? get_class($optionalServiceRemarkItem) : sprintf('%s(%s)', gettype($optionalServiceRemarkItem), var_export($optionalServiceRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Remark property can only contain items of type \Travelport\Util\StructType\Remark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Remark[] $remark
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setRemark(?array $remark = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarkArrayErrorMessage = self::validateRemarkForArrayConstraintsFromSetRemark($remark))) {
            throw new InvalidArgumentException($remarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($remark) && count($remark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($remark)), __LINE__);
        }
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Remark $item
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function addToRemark(\Travelport\Util\StructType\Remark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Remark) {
            throw new InvalidArgumentException(sprintf('The Remark property can only contain items of type \Travelport\Util\StructType\Remark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Remark) && count($this->Remark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Remark)), __LINE__);
        }
        $this->Remark[] = $item;
        
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
        foreach ($values as $optionalServiceTaxInfoItem) {
            // validation for constraint: itemType
            if (!$optionalServiceTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($optionalServiceTaxInfoItem) ? get_class($optionalServiceTaxInfoItem) : sprintf('%s(%s)', gettype($optionalServiceTaxInfoItem), var_export($optionalServiceTaxInfoItem, true));
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
        foreach ($values as $optionalServiceFeeInfoItem) {
            // validation for constraint: itemType
            if (!$optionalServiceFeeInfoItem instanceof \Travelport\Util\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($optionalServiceFeeInfoItem) ? get_class($optionalServiceFeeInfoItem) : sprintf('%s(%s)', gettype($optionalServiceFeeInfoItem), var_export($optionalServiceFeeInfoItem, true));
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * Get EMD value
     * @return \Travelport\Util\StructType\EMD|null
     */
    public function getEMD(): ?\Travelport\Util\StructType\EMD
    {
        return $this->EMD;
    }
    /**
     * Set EMD value
     * @param \Travelport\Util\StructType\EMD $eMD
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setEMD(?\Travelport\Util\StructType\EMD $eMD = null): self
    {
        $this->EMD = $eMD;
        
        return $this;
    }
    /**
     * Get BundledServices value
     * @return \Travelport\Util\StructType\BundledServices|null
     */
    public function getBundledServices(): ?\Travelport\Util\StructType\BundledServices
    {
        return $this->BundledServices;
    }
    /**
     * Set BundledServices value
     * @param \Travelport\Util\StructType\BundledServices $bundledServices
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setBundledServices(?\Travelport\Util\StructType\BundledServices $bundledServices = null): self
    {
        $this->BundledServices = $bundledServices;
        
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return \Travelport\Util\StructType\AdditionalInfo[]
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->AdditionalInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalInfoForArrayConstraintsFromSetAdditionalInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServiceAdditionalInfoItem) {
            // validation for constraint: itemType
            if (!$optionalServiceAdditionalInfoItem instanceof \Travelport\Util\StructType\AdditionalInfo) {
                $invalidValues[] = is_object($optionalServiceAdditionalInfoItem) ? get_class($optionalServiceAdditionalInfoItem) : sprintf('%s(%s)', gettype($optionalServiceAdditionalInfoItem), var_export($optionalServiceAdditionalInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalInfo property can only contain items of type \Travelport\Util\StructType\AdditionalInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AdditionalInfo[] $additionalInfo
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setAdditionalInfo(?array $additionalInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalInfoArrayErrorMessage = self::validateAdditionalInfoForArrayConstraintsFromSetAdditionalInfo($additionalInfo))) {
            throw new InvalidArgumentException($additionalInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($additionalInfo) && count($additionalInfo) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
        
        return $this;
    }
    /**
     * Add item to AdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AdditionalInfo $item
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function addToAdditionalInfo(\Travelport\Util\StructType\AdditionalInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AdditionalInfo) {
            throw new InvalidArgumentException(sprintf('The AdditionalInfo property can only contain items of type \Travelport\Util\StructType\AdditionalInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->AdditionalInfo) && count($this->AdditionalInfo) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->AdditionalInfo)), __LINE__);
        }
        $this->AdditionalInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FeeApplication value
     * @return \Travelport\Util\StructType\FeeApplication|null
     */
    public function getFeeApplication(): ?\Travelport\Util\StructType\FeeApplication
    {
        return $this->FeeApplication;
    }
    /**
     * Set FeeApplication value
     * @param \Travelport\Util\StructType\FeeApplication $feeApplication
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setFeeApplication(?\Travelport\Util\StructType\FeeApplication $feeApplication = null): self
    {
        $this->FeeApplication = $feeApplication;
        
        return $this;
    }
    /**
     * Get Text value
     * @return \Travelport\Util\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServiceTextItem) {
            // validation for constraint: itemType
            if (!$optionalServiceTextItem instanceof \Travelport\Util\StructType\TypeTextElement) {
                $invalidValues[] = is_object($optionalServiceTextItem) ? get_class($optionalServiceTextItem) : sprintf('%s(%s)', gettype($optionalServiceTextItem), var_export($optionalServiceTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement[] $text
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($text) && count($text) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement $item
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function addToText(\Travelport\Util\StructType\TypeTextElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTextElement) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->Text) && count($this->Text) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get PriceRange value
     * @return \Travelport\Util\StructType\PriceRange[]
     */
    public function getPriceRange(): ?array
    {
        return $this->PriceRange;
    }
    /**
     * This method is responsible for validating the values passed to the setPriceRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPriceRange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePriceRangeForArrayConstraintsFromSetPriceRange(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServicePriceRangeItem) {
            // validation for constraint: itemType
            if (!$optionalServicePriceRangeItem instanceof \Travelport\Util\StructType\PriceRange) {
                $invalidValues[] = is_object($optionalServicePriceRangeItem) ? get_class($optionalServicePriceRangeItem) : sprintf('%s(%s)', gettype($optionalServicePriceRangeItem), var_export($optionalServicePriceRangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PriceRange property can only contain items of type \Travelport\Util\StructType\PriceRange, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PriceRange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceRange[] $priceRange
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setPriceRange(?array $priceRange = null): self
    {
        // validation for constraint: array
        if ('' !== ($priceRangeArrayErrorMessage = self::validatePriceRangeForArrayConstraintsFromSetPriceRange($priceRange))) {
            throw new InvalidArgumentException($priceRangeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($priceRange) && count($priceRange) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($priceRange)), __LINE__);
        }
        $this->PriceRange = $priceRange;
        
        return $this;
    }
    /**
     * Add item to PriceRange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceRange $item
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function addToPriceRange(\Travelport\Util\StructType\PriceRange $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PriceRange) {
            throw new InvalidArgumentException(sprintf('The PriceRange property can only contain items of type \Travelport\Util\StructType\PriceRange, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->PriceRange) && count($this->PriceRange) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->PriceRange)), __LINE__);
        }
        $this->PriceRange[] = $item;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\Util\StructType\TourCode|null
     */
    public function getTourCode(): ?\Travelport\Util\StructType\TourCode
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\Util\StructType\TourCode $tourCode
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setTourCode(?\Travelport\Util\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get BrandingInfo value
     * @return \Travelport\Util\StructType\BrandingInfo|null
     */
    public function getBrandingInfo(): ?\Travelport\Util\StructType\BrandingInfo
    {
        return $this->BrandingInfo;
    }
    /**
     * Set BrandingInfo value
     * @param \Travelport\Util\StructType\BrandingInfo $brandingInfo
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setBrandingInfo(?\Travelport\Util\StructType\BrandingInfo $brandingInfo = null): self
    {
        $this->BrandingInfo = $brandingInfo;
        
        return $this;
    }
    /**
     * Get Title value
     * @return \Travelport\Util\StructType\TypeTextElement[]
     */
    public function getTitle(): ?array
    {
        return $this->Title;
    }
    /**
     * This method is responsible for validating the values passed to the setTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTitle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTitleForArrayConstraintsFromSetTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServiceTitleItem) {
            // validation for constraint: itemType
            if (!$optionalServiceTitleItem instanceof \Travelport\Util\StructType\TypeTextElement) {
                $invalidValues[] = is_object($optionalServiceTitleItem) ? get_class($optionalServiceTitleItem) : sprintf('%s(%s)', gettype($optionalServiceTitleItem), var_export($optionalServiceTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Title property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Title value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement[] $title
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setTitle(?array $title = null): self
    {
        // validation for constraint: array
        if ('' !== ($titleArrayErrorMessage = self::validateTitleForArrayConstraintsFromSetTitle($title))) {
            throw new InvalidArgumentException($titleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($title) && count($title) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Add item to Title value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement $item
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function addToTitle(\Travelport\Util\StructType\TypeTextElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTextElement) {
            throw new InvalidArgumentException(sprintf('The Title property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Title) && count($this->Title) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Title)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setOptionalServicesRuleRef(?string $optionalServicesRuleRef = null): self
    {
        // validation for constraint: string
        if (!is_null($optionalServicesRuleRef) && !is_string($optionalServicesRuleRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionalServicesRuleRef, true), gettype($optionalServicesRuleRef)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setConfirmation(?string $confirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmation) && !is_string($confirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmation, true), gettype($confirmation)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setSecondaryType(?string $secondaryType = null): self
    {
        // validation for constraint: string
        if (!is_null($secondaryType) && !is_string($secondaryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryType, true), gettype($secondaryType)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypePurchaseWindow::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePurchaseWindow::getValidValues()
     * @throws InvalidArgumentException
     * @param string $purchaseWindow
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setPurchaseWindow(?string $purchaseWindow = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePurchaseWindow::valueIsValid($purchaseWindow)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePurchaseWindow', is_array($purchaseWindow) ? implode(', ', $purchaseWindow) : var_export($purchaseWindow, true), implode(', ', \Travelport\Util\EnumType\TypePurchaseWindow::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setAvailable(?bool $available = null): self
    {
        // validation for constraint: boolean
        if (!is_null($available) && !is_bool($available)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($available, true), gettype($available)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setEntitled(?bool $entitled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($entitled) && !is_bool($entitled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($entitled, true), gettype($entitled)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setPerTraveler(?bool $perTraveler = true): self
    {
        // validation for constraint: boolean
        if (!is_null($perTraveler) && !is_bool($perTraveler)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($perTraveler, true), gettype($perTraveler)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setCreateDate(?string $createDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setPaymentRef(?string $paymentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRef) && !is_string($paymentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRef, true), gettype($paymentRef)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setSequenceNumber(?int $sequenceNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !(is_int($sequenceNumber) || ctype_digit($sequenceNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceSubCode) && !is_string($serviceSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceSubCode, true), gettype($serviceSubCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($serviceSubCode) && mb_strlen((string) $serviceSubCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $serviceSubCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setSSRCode(?string $sSRCode = null): self
    {
        // validation for constraint: string
        if (!is_null($sSRCode) && !is_string($sSRCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRCode, true), gettype($sSRCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($sSRCode) && mb_strlen((string) $sSRCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $sSRCode)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($sSRCode) && mb_strlen((string) $sSRCode) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $sSRCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setIssuanceReason(?string $issuanceReason = null): self
    {
        // validation for constraint: string
        if (!is_null($issuanceReason) && !is_string($issuanceReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuanceReason, true), gettype($issuanceReason)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($issuanceReason) && mb_strlen((string) $issuanceReason) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $issuanceReason)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($issuanceReason) && mb_strlen((string) $issuanceReason) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $issuanceReason)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setProviderDefinedType(?string $providerDefinedType = null): self
    {
        // validation for constraint: string
        if (!is_null($providerDefinedType) && !is_string($providerDefinedType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerDefinedType, true), gettype($providerDefinedType)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($providerDefinedType) && mb_strlen((string) $providerDefinedType) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $providerDefinedType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($providerDefinedType) && mb_strlen((string) $providerDefinedType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $providerDefinedType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeAssessIndicator::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeAssessIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $assessIndicator
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setAssessIndicator(?string $assessIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeAssessIndicator::valueIsValid($assessIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeAssessIndicator', is_array($assessIndicator) ? implode(', ', $assessIndicator) : var_export($assessIndicator, true), implode(', ', \Travelport\Util\EnumType\TypeAssessIndicator::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setMileage(?int $mileage = null): self
    {
        // validation for constraint: int
        if (!is_null($mileage) && !(is_int($mileage) || ctype_digit($mileage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mileage, true), gettype($mileage)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setApplicableFFLevel(?int $applicableFFLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($applicableFFLevel) && !(is_int($applicableFFLevel) || ctype_digit($applicableFFLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($applicableFFLevel, true), gettype($applicableFFLevel)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($applicableFFLevel) && $applicableFFLevel > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($applicableFFLevel, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($applicableFFLevel) && $applicableFFLevel < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($applicableFFLevel, true)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setPrivate(?bool $private = null): self
    {
        // validation for constraint: boolean
        if (!is_null($private) && !is_bool($private)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($private, true), gettype($private)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setSSRFreeText(?string $sSRFreeText = null): self
    {
        // validation for constraint: string
        if (!is_null($sSRFreeText) && !is_string($sSRFreeText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRFreeText, true), gettype($sSRFreeText)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setIsPricingApproximate(?bool $isPricingApproximate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPricingApproximate) && !is_bool($isPricingApproximate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPricingApproximate, true), gettype($isPricingApproximate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setChargeable(?string $chargeable = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeable) && !is_string($chargeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeable, true), gettype($chargeable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setInclusiveOfTax(?bool $inclusiveOfTax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inclusiveOfTax) && !is_bool($inclusiveOfTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclusiveOfTax, true), gettype($inclusiveOfTax)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setInterlineSettlementAllowed(?bool $interlineSettlementAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($interlineSettlementAllowed) && !is_bool($interlineSettlementAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($interlineSettlementAllowed, true), gettype($interlineSettlementAllowed)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setGeographySpecification(?string $geographySpecification = null): self
    {
        // validation for constraint: string
        if (!is_null($geographySpecification) && !is_string($geographySpecification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geographySpecification, true), gettype($geographySpecification)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setExcessWeightRate(?string $excessWeightRate = null): self
    {
        // validation for constraint: string
        if (!is_null($excessWeightRate) && !is_string($excessWeightRate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excessWeightRate, true), gettype($excessWeightRate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setViewableOnly(?bool $viewableOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($viewableOnly) && !is_bool($viewableOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($viewableOnly, true), gettype($viewableOnly)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setDisplayText(?string $displayText = null): self
    {
        // validation for constraint: string
        if (!is_null($displayText) && !is_string($displayText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayText, true), gettype($displayText)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setWeightInExcess(?string $weightInExcess = null): self
    {
        // validation for constraint: string
        if (!is_null($weightInExcess) && !is_string($weightInExcess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weightInExcess, true), gettype($weightInExcess)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setTotalWeight(?string $totalWeight = null): self
    {
        // validation for constraint: string
        if (!is_null($totalWeight) && !is_string($totalWeight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalWeight, true), gettype($totalWeight)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setBaggageUnitPrice(?string $baggageUnitPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($baggageUnitPrice) && !is_string($baggageUnitPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baggageUnitPrice, true), gettype($baggageUnitPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setFirstPiece(?int $firstPiece = null): self
    {
        // validation for constraint: int
        if (!is_null($firstPiece) && !(is_int($firstPiece) || ctype_digit($firstPiece))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($firstPiece, true), gettype($firstPiece)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setLastPiece(?int $lastPiece = null): self
    {
        // validation for constraint: int
        if (!is_null($lastPiece) && !(is_int($lastPiece) || ctype_digit($lastPiece))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastPiece, true), gettype($lastPiece)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setRestricted(?bool $restricted = false): self
    {
        // validation for constraint: boolean
        if (!is_null($restricted) && !is_bool($restricted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restricted, true), gettype($restricted)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setIsRepriceRequired(?bool $isRepriceRequired = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isRepriceRequired) && !is_bool($isRepriceRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRepriceRequired, true), gettype($isRepriceRequired)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setBookedQuantity(?string $bookedQuantity = null): self
    {
        // validation for constraint: string
        if (!is_null($bookedQuantity) && !is_string($bookedQuantity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookedQuantity, true), gettype($bookedQuantity)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setGroup(?string $group = null): self
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setTag(?string $tag = null): self
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($tag) && mb_strlen((string) $tag) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $tag)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($tag) && mb_strlen((string) $tag) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $tag)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
     */
    public function setDisplayOrder(?int $displayOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($displayOrder) && !(is_int($displayOrder) || ctype_digit($displayOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayOrder, true), gettype($displayOrder)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($displayOrder) && $displayOrder > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($displayOrder, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($displayOrder) && $displayOrder < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($displayOrder, true)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
     * @return \Travelport\Util\StructType\OptionalService
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
