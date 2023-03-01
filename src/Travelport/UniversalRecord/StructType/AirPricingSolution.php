<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Itinerary level taxes | The pricing container for an air travel itinerary
 * @subpackage Structs
 */
class AirPricingSolution extends AbstractStructBase
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
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The Journey
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Journey
     * @var \Travelport\UniversalRecord\StructType\Journey[]
     */
    public ?array $Journey = null;
    /**
     * The LegRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LegRef
     * @var \Travelport\UniversalRecord\StructType\LegRef[]
     */
    public ?array $LegRef = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\UniversalRecord\StructType\FareNote[]
     */
    public ?array $FareNote = null;
    /**
     * The FareNoteRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNoteRef
     * @var \Travelport\UniversalRecord\StructType\FareNoteRef[]
     */
    public ?array $FareNoteRef = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\UniversalRecord\StructType\Connection[]
     */
    public ?array $Connection = null;
    /**
     * The MetaData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MetaData
     * @var \Travelport\UniversalRecord\StructType\MetaData[]
     */
    public ?array $MetaData = null;
    /**
     * The AirPricingResultMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public ?array $AirPricingResultMessage = null;
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
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The AirItinerarySolutionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirItinerarySolutionRef
     * @var \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef[]
     */
    public ?array $AirItinerarySolutionRef = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public ?\Travelport\UniversalRecord\StructType\OptionalServices $OptionalServices = null;
    /**
     * The AvailableSSR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AvailableSSR
     * @var \Travelport\UniversalRecord\StructType\AvailableSSR|null
     */
    public ?\Travelport\UniversalRecord\StructType\AvailableSSR $AvailableSSR = null;
    /**
     * The PricingDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PricingDetails
     * @var \Travelport\UniversalRecord\StructType\PricingDetails|null
     */
    public ?\Travelport\UniversalRecord\StructType\PricingDetails $PricingDetails = null;
    /**
     * The CompleteItinerary
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to return whether complete Itinerary is present in the AirPricingSolution structure or not. If set to true means AirPricingSolution contains the result for full requested itinerary.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $CompleteItinerary = null;
    /**
     * The QuoteDate
     * Meta information extracted from the WSDL
     * - documentation: This date will be equal to the date of the transaction unless the request included a modified ticket date.
     * - use: optional
     * @var string|null
     */
    public ?string $QuoteDate = null;
    /**
     * The Itinerary
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Itinerary = null;
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
     * Constructor method for AirPricingSolution
     * @uses AirPricingSolution::setKey()
     * @uses AirPricingSolution::setAirSegment()
     * @uses AirPricingSolution::setAirSegmentRef()
     * @uses AirPricingSolution::setJourney()
     * @uses AirPricingSolution::setLegRef()
     * @uses AirPricingSolution::setAirPricingInfo()
     * @uses AirPricingSolution::setFareNote()
     * @uses AirPricingSolution::setFareNoteRef()
     * @uses AirPricingSolution::setConnection()
     * @uses AirPricingSolution::setMetaData()
     * @uses AirPricingSolution::setAirPricingResultMessage()
     * @uses AirPricingSolution::setFeeInfo()
     * @uses AirPricingSolution::setTaxInfo()
     * @uses AirPricingSolution::setAirItinerarySolutionRef()
     * @uses AirPricingSolution::setHostToken()
     * @uses AirPricingSolution::setOptionalServices()
     * @uses AirPricingSolution::setAvailableSSR()
     * @uses AirPricingSolution::setPricingDetails()
     * @uses AirPricingSolution::setCompleteItinerary()
     * @uses AirPricingSolution::setQuoteDate()
     * @uses AirPricingSolution::setItinerary()
     * @uses AirPricingSolution::setTotalPrice()
     * @uses AirPricingSolution::setBasePrice()
     * @uses AirPricingSolution::setApproximateTotalPrice()
     * @uses AirPricingSolution::setApproximateBasePrice()
     * @uses AirPricingSolution::setEquivalentBasePrice()
     * @uses AirPricingSolution::setTaxes()
     * @uses AirPricingSolution::setFees()
     * @uses AirPricingSolution::setServices()
     * @uses AirPricingSolution::setApproximateTaxes()
     * @uses AirPricingSolution::setApproximateFees()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\Journey[] $journey
     * @param \Travelport\UniversalRecord\StructType\LegRef[] $legRef
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     * @param \Travelport\UniversalRecord\StructType\FareNoteRef[] $fareNoteRef
     * @param \Travelport\UniversalRecord\StructType\Connection[] $connection
     * @param \Travelport\UniversalRecord\StructType\MetaData[] $metaData
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $airPricingResultMessage
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef[] $airItinerarySolutionRef
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @param \Travelport\UniversalRecord\StructType\AvailableSSR $availableSSR
     * @param \Travelport\UniversalRecord\StructType\PricingDetails $pricingDetails
     * @param bool $completeItinerary
     * @param string $quoteDate
     * @param string $itinerary
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
     */
    public function __construct(string $key, ?array $airSegment = null, ?array $airSegmentRef = null, ?array $journey = null, ?array $legRef = null, ?array $airPricingInfo = null, ?array $fareNote = null, ?array $fareNoteRef = null, ?array $connection = null, ?array $metaData = null, ?array $airPricingResultMessage = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $airItinerarySolutionRef = null, ?array $hostToken = null, ?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null, ?\Travelport\UniversalRecord\StructType\AvailableSSR $availableSSR = null, ?\Travelport\UniversalRecord\StructType\PricingDetails $pricingDetails = null, ?bool $completeItinerary = true, ?string $quoteDate = null, ?string $itinerary = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null)
    {
        $this
            ->setKey($key)
            ->setAirSegment($airSegment)
            ->setAirSegmentRef($airSegmentRef)
            ->setJourney($journey)
            ->setLegRef($legRef)
            ->setAirPricingInfo($airPricingInfo)
            ->setFareNote($fareNote)
            ->setFareNoteRef($fareNoteRef)
            ->setConnection($connection)
            ->setMetaData($metaData)
            ->setAirPricingResultMessage($airPricingResultMessage)
            ->setFeeInfo($feeInfo)
            ->setTaxInfo($taxInfo)
            ->setAirItinerarySolutionRef($airItinerarySolutionRef)
            ->setHostToken($hostToken)
            ->setOptionalServices($optionalServices)
            ->setAvailableSSR($availableSSR)
            ->setPricingDetails($pricingDetails)
            ->setCompleteItinerary($completeItinerary)
            ->setQuoteDate($quoteDate)
            ->setItinerary($itinerary)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees);
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get Journey value
     * @return \Travelport\UniversalRecord\StructType\Journey[]
     */
    public function getJourney(): ?array
    {
        return $this->Journey;
    }
    /**
     * Set Journey value
     * @param \Travelport\UniversalRecord\StructType\Journey[] $journey
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setJourney(?array $journey = null): self
    {
        $this->Journey = $journey;
        
        return $this;
    }
    /**
     * Add item to Journey value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Journey $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToJourney(\Travelport\UniversalRecord\StructType\Journey $item): self
    {
        $this->Journey[] = $item;
        
        return $this;
    }
    /**
     * Get LegRef value
     * @return \Travelport\UniversalRecord\StructType\LegRef[]
     */
    public function getLegRef(): ?array
    {
        return $this->LegRef;
    }
    /**
     * Set LegRef value
     * @param \Travelport\UniversalRecord\StructType\LegRef[] $legRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setLegRef(?array $legRef = null): self
    {
        $this->LegRef = $legRef;
        
        return $this;
    }
    /**
     * Add item to LegRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LegRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToLegRef(\Travelport\UniversalRecord\StructType\LegRef $item): self
    {
        $this->LegRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToAirPricingInfo(\Travelport\UniversalRecord\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareNote value
     * @return \Travelport\UniversalRecord\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setFareNote(?array $fareNote = null): self
    {
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareNote $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToFareNote(\Travelport\UniversalRecord\StructType\FareNote $item): self
    {
        $this->FareNote[] = $item;
        
        return $this;
    }
    /**
     * Get FareNoteRef value
     * @return \Travelport\UniversalRecord\StructType\FareNoteRef[]
     */
    public function getFareNoteRef(): ?array
    {
        return $this->FareNoteRef;
    }
    /**
     * Set FareNoteRef value
     * @param \Travelport\UniversalRecord\StructType\FareNoteRef[] $fareNoteRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setFareNoteRef(?array $fareNoteRef = null): self
    {
        $this->FareNoteRef = $fareNoteRef;
        
        return $this;
    }
    /**
     * Add item to FareNoteRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareNoteRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToFareNoteRef(\Travelport\UniversalRecord\StructType\FareNoteRef $item): self
    {
        $this->FareNoteRef[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\UniversalRecord\StructType\Connection[]
     */
    public function getConnection(): ?array
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\UniversalRecord\StructType\Connection[] $connection
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setConnection(?array $connection = null): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Add item to Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Connection $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToConnection(\Travelport\UniversalRecord\StructType\Connection $item): self
    {
        $this->Connection[] = $item;
        
        return $this;
    }
    /**
     * Get MetaData value
     * @return \Travelport\UniversalRecord\StructType\MetaData[]
     */
    public function getMetaData(): ?array
    {
        return $this->MetaData;
    }
    /**
     * Set MetaData value
     * @param \Travelport\UniversalRecord\StructType\MetaData[] $metaData
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setMetaData(?array $metaData = null): self
    {
        $this->MetaData = $metaData;
        
        return $this;
    }
    /**
     * Add item to MetaData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MetaData $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToMetaData(\Travelport\UniversalRecord\StructType\MetaData $item): self
    {
        $this->MetaData[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingResultMessage value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public function getAirPricingResultMessage(): ?array
    {
        return $this->AirPricingResultMessage;
    }
    /**
     * Set AirPricingResultMessage value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $airPricingResultMessage
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirPricingResultMessage(?array $airPricingResultMessage = null): self
    {
        $this->AirPricingResultMessage = $airPricingResultMessage;
        
        return $this;
    }
    /**
     * Add item to AirPricingResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToAirPricingResultMessage(\Travelport\UniversalRecord\StructType\TypeResultMessage $item): self
    {
        $this->AirPricingResultMessage[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AirItinerarySolutionRef value
     * @return \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef[]
     */
    public function getAirItinerarySolutionRef(): ?array
    {
        return $this->AirItinerarySolutionRef;
    }
    /**
     * Set AirItinerarySolutionRef value
     * @param \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef[] $airItinerarySolutionRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirItinerarySolutionRef(?array $airItinerarySolutionRef = null): self
    {
        $this->AirItinerarySolutionRef = $airItinerarySolutionRef;
        
        return $this;
    }
    /**
     * Add item to AirItinerarySolutionRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToAirItinerarySolutionRef(\Travelport\UniversalRecord\StructType\AirItinerarySolutionRef $item): self
    {
        $this->AirItinerarySolutionRef[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get OptionalServices value
     * @return \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\UniversalRecord\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setOptionalServices(?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get AvailableSSR value
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR|null
     */
    public function getAvailableSSR(): ?\Travelport\UniversalRecord\StructType\AvailableSSR
    {
        return $this->AvailableSSR;
    }
    /**
     * Set AvailableSSR value
     * @param \Travelport\UniversalRecord\StructType\AvailableSSR $availableSSR
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAvailableSSR(?\Travelport\UniversalRecord\StructType\AvailableSSR $availableSSR = null): self
    {
        $this->AvailableSSR = $availableSSR;
        
        return $this;
    }
    /**
     * Get PricingDetails value
     * @return \Travelport\UniversalRecord\StructType\PricingDetails|null
     */
    public function getPricingDetails(): ?\Travelport\UniversalRecord\StructType\PricingDetails
    {
        return $this->PricingDetails;
    }
    /**
     * Set PricingDetails value
     * @param \Travelport\UniversalRecord\StructType\PricingDetails $pricingDetails
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setPricingDetails(?\Travelport\UniversalRecord\StructType\PricingDetails $pricingDetails = null): self
    {
        $this->PricingDetails = $pricingDetails;
        
        return $this;
    }
    /**
     * Get CompleteItinerary value
     * @return bool|null
     */
    public function getCompleteItinerary(): ?bool
    {
        return $this->CompleteItinerary;
    }
    /**
     * Set CompleteItinerary value
     * @param bool $completeItinerary
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setCompleteItinerary(?bool $completeItinerary = true): self
    {
        $this->CompleteItinerary = $completeItinerary;
        
        return $this;
    }
    /**
     * Get QuoteDate value
     * @return string|null
     */
    public function getQuoteDate(): ?string
    {
        return $this->QuoteDate;
    }
    /**
     * Set QuoteDate value
     * @param string $quoteDate
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setQuoteDate(?string $quoteDate = null): self
    {
        $this->QuoteDate = $quoteDate;
        
        return $this;
    }
    /**
     * Get Itinerary value
     * @return string|null
     */
    public function getItinerary(): ?string
    {
        return $this->Itinerary;
    }
    /**
     * Set Itinerary value
     * @param string $itinerary
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setItinerary(?string $itinerary = null): self
    {
        $this->Itinerary = $itinerary;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
}
