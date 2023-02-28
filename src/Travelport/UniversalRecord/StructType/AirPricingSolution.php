<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The Journey
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Journey
     * @var \Travelport\UniversalRecord\StructType\Journey[]
     */
    protected ?array $Journey = null;
    /**
     * The LegRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LegRef
     * @var \Travelport\UniversalRecord\StructType\LegRef[]
     */
    protected ?array $LegRef = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    protected ?array $AirPricingInfo = null;
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\UniversalRecord\StructType\FareNote[]
     */
    protected ?array $FareNote = null;
    /**
     * The FareNoteRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNoteRef
     * @var \Travelport\UniversalRecord\StructType\FareNoteRef[]
     */
    protected ?array $FareNoteRef = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\UniversalRecord\StructType\Connection[]
     */
    protected ?array $Connection = null;
    /**
     * The MetaData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MetaData
     * @var \Travelport\UniversalRecord\StructType\MetaData[]
     */
    protected ?array $MetaData = null;
    /**
     * The AirPricingResultMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    protected ?array $AirPricingResultMessage = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    protected ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The AirItinerarySolutionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirItinerarySolutionRef
     * @var \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef[]
     */
    protected ?array $AirItinerarySolutionRef = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    protected ?array $HostToken = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    protected ?\Travelport\UniversalRecord\StructType\OptionalServices $OptionalServices = null;
    /**
     * The AvailableSSR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AvailableSSR
     * @var \Travelport\UniversalRecord\StructType\AvailableSSR|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AvailableSSR $AvailableSSR = null;
    /**
     * The PricingDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PricingDetails
     * @var \Travelport\UniversalRecord\StructType\PricingDetails|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PricingDetails $PricingDetails = null;
    /**
     * The CompleteItinerary
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to return whether complete Itinerary is present in the AirPricingSolution structure or not. If set to true means AirPricingSolution contains the result for full requested itinerary.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CompleteItinerary = null;
    /**
     * The QuoteDate
     * Meta information extracted from the WSDL
     * - documentation: This date will be equal to the date of the transaction unless the request included a modified ticket date.
     * - use: optional
     * @var string|null
     */
    protected ?string $QuoteDate = null;
    /**
     * The Itinerary
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Itinerary = null;
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
        foreach ($values as $airPricingSolutionAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionAirSegmentItem instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airPricingSolutionAirSegmentItem) ? get_class($airPricingSolutionAirSegmentItem) : sprintf('%s(%s)', gettype($airPricingSolutionAirSegmentItem), var_export($airPricingSolutionAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionAirSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($airPricingSolutionAirSegmentRefItem) ? get_class($airPricingSolutionAirSegmentRefItem) : sprintf('%s(%s)', gettype($airPricingSolutionAirSegmentRefItem), var_export($airPricingSolutionAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourney method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyForArrayConstraintFromSetJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionJourneyItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionJourneyItem instanceof \Travelport\UniversalRecord\StructType\Journey) {
                $invalidValues[] = is_object($airPricingSolutionJourneyItem) ? get_class($airPricingSolutionJourneyItem) : sprintf('%s(%s)', gettype($airPricingSolutionJourneyItem), var_export($airPricingSolutionJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Journey property can only contain items of type \Travelport\UniversalRecord\StructType\Journey, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Journey value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Journey[] $journey
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setJourney(?array $journey = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyArrayErrorMessage = self::validateJourneyForArrayConstraintFromSetJourney($journey))) {
            throw new InvalidArgumentException($journeyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($journey) && count($journey) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($journey)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Journey) {
            throw new InvalidArgumentException(sprintf('The Journey property can only contain items of type \Travelport\UniversalRecord\StructType\Journey, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Journey) && count($this->Journey) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Journey)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setLegRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegRefForArrayConstraintFromSetLegRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionLegRefItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionLegRefItem instanceof \Travelport\UniversalRecord\StructType\LegRef) {
                $invalidValues[] = is_object($airPricingSolutionLegRefItem) ? get_class($airPricingSolutionLegRefItem) : sprintf('%s(%s)', gettype($airPricingSolutionLegRefItem), var_export($airPricingSolutionLegRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LegRef property can only contain items of type \Travelport\UniversalRecord\StructType\LegRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LegRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LegRef[] $legRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setLegRef(?array $legRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($legRefArrayErrorMessage = self::validateLegRefForArrayConstraintFromSetLegRef($legRef))) {
            throw new InvalidArgumentException($legRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($legRef) && count($legRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($legRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LegRef) {
            throw new InvalidArgumentException(sprintf('The LegRef property can only contain items of type \Travelport\UniversalRecord\StructType\LegRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LegRef) && count($this->LegRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LegRef)), __LINE__);
        }
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
        foreach ($values as $airPricingSolutionAirPricingInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionAirPricingInfoItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfo) {
                $invalidValues[] = is_object($airPricingSolutionAirPricingInfoItem) ? get_class($airPricingSolutionAirPricingInfoItem) : sprintf('%s(%s)', gettype($airPricingSolutionAirPricingInfoItem), var_export($airPricingSolutionAirPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoArrayErrorMessage = self::validateAirPricingInfoForArrayConstraintFromSetAirPricingInfo($airPricingInfo))) {
            throw new InvalidArgumentException($airPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfo) && count($airPricingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfo) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfo) && count($this->AirPricingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfo)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareNoteForArrayConstraintFromSetFareNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionFareNoteItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionFareNoteItem instanceof \Travelport\UniversalRecord\StructType\FareNote) {
                $invalidValues[] = is_object($airPricingSolutionFareNoteItem) ? get_class($airPricingSolutionFareNoteItem) : sprintf('%s(%s)', gettype($airPricingSolutionFareNoteItem), var_export($airPricingSolutionFareNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareNote property can only contain items of type \Travelport\UniversalRecord\StructType\FareNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setFareNote(?array $fareNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareNoteArrayErrorMessage = self::validateFareNoteForArrayConstraintFromSetFareNote($fareNote))) {
            throw new InvalidArgumentException($fareNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareNote) && count($fareNote) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareNote)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareNote) {
            throw new InvalidArgumentException(sprintf('The FareNote property can only contain items of type \Travelport\UniversalRecord\StructType\FareNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareNote) && count($this->FareNote) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setFareNoteRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareNoteRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareNoteRefForArrayConstraintFromSetFareNoteRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionFareNoteRefItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionFareNoteRefItem instanceof \Travelport\UniversalRecord\StructType\FareNoteRef) {
                $invalidValues[] = is_object($airPricingSolutionFareNoteRefItem) ? get_class($airPricingSolutionFareNoteRefItem) : sprintf('%s(%s)', gettype($airPricingSolutionFareNoteRefItem), var_export($airPricingSolutionFareNoteRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareNoteRef property can only contain items of type \Travelport\UniversalRecord\StructType\FareNoteRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareNoteRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareNoteRef[] $fareNoteRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setFareNoteRef(?array $fareNoteRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareNoteRefArrayErrorMessage = self::validateFareNoteRefForArrayConstraintFromSetFareNoteRef($fareNoteRef))) {
            throw new InvalidArgumentException($fareNoteRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareNoteRef) && count($fareNoteRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareNoteRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareNoteRef) {
            throw new InvalidArgumentException(sprintf('The FareNoteRef property can only contain items of type \Travelport\UniversalRecord\StructType\FareNoteRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareNoteRef) && count($this->FareNoteRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareNoteRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setConnection method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConnection method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConnectionForArrayConstraintFromSetConnection(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionConnectionItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionConnectionItem instanceof \Travelport\UniversalRecord\StructType\Connection) {
                $invalidValues[] = is_object($airPricingSolutionConnectionItem) ? get_class($airPricingSolutionConnectionItem) : sprintf('%s(%s)', gettype($airPricingSolutionConnectionItem), var_export($airPricingSolutionConnectionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Connection property can only contain items of type \Travelport\UniversalRecord\StructType\Connection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Connection[] $connection
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setConnection(?array $connection = null): self
    {
        // validation for constraint: array
        if ('' !== ($connectionArrayErrorMessage = self::validateConnectionForArrayConstraintFromSetConnection($connection))) {
            throw new InvalidArgumentException($connectionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($connection) && count($connection) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($connection)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Connection) {
            throw new InvalidArgumentException(sprintf('The Connection property can only contain items of type \Travelport\UniversalRecord\StructType\Connection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Connection) && count($this->Connection) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Connection)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setMetaData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMetaData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMetaDataForArrayConstraintFromSetMetaData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionMetaDataItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionMetaDataItem instanceof \Travelport\UniversalRecord\StructType\MetaData) {
                $invalidValues[] = is_object($airPricingSolutionMetaDataItem) ? get_class($airPricingSolutionMetaDataItem) : sprintf('%s(%s)', gettype($airPricingSolutionMetaDataItem), var_export($airPricingSolutionMetaDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MetaData property can only contain items of type \Travelport\UniversalRecord\StructType\MetaData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MetaData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MetaData[] $metaData
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setMetaData(?array $metaData = null): self
    {
        // validation for constraint: array
        if ('' !== ($metaDataArrayErrorMessage = self::validateMetaDataForArrayConstraintFromSetMetaData($metaData))) {
            throw new InvalidArgumentException($metaDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($metaData) && count($metaData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($metaData)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\MetaData) {
            throw new InvalidArgumentException(sprintf('The MetaData property can only contain items of type \Travelport\UniversalRecord\StructType\MetaData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MetaData) && count($this->MetaData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MetaData)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingResultMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingResultMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingResultMessageForArrayConstraintFromSetAirPricingResultMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionAirPricingResultMessageItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionAirPricingResultMessageItem instanceof \Travelport\UniversalRecord\StructType\TypeResultMessage) {
                $invalidValues[] = is_object($airPricingSolutionAirPricingResultMessageItem) ? get_class($airPricingSolutionAirPricingResultMessageItem) : sprintf('%s(%s)', gettype($airPricingSolutionAirPricingResultMessageItem), var_export($airPricingSolutionAirPricingResultMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingResultMessage property can only contain items of type \Travelport\UniversalRecord\StructType\TypeResultMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $airPricingResultMessage
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirPricingResultMessage(?array $airPricingResultMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingResultMessageArrayErrorMessage = self::validateAirPricingResultMessageForArrayConstraintFromSetAirPricingResultMessage($airPricingResultMessage))) {
            throw new InvalidArgumentException($airPricingResultMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingResultMessage) && count($airPricingResultMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingResultMessage)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeResultMessage) {
            throw new InvalidArgumentException(sprintf('The AirPricingResultMessage property can only contain items of type \Travelport\UniversalRecord\StructType\TypeResultMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingResultMessage) && count($this->AirPricingResultMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingResultMessage)), __LINE__);
        }
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
        foreach ($values as $airPricingSolutionFeeInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionFeeInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($airPricingSolutionFeeInfoItem) ? get_class($airPricingSolutionFeeInfoItem) : sprintf('%s(%s)', gettype($airPricingSolutionFeeInfoItem), var_export($airPricingSolutionFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeInfoArrayErrorMessage = self::validateFeeInfoForArrayConstraintFromSetFeeInfo($feeInfo))) {
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
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeFeeInfo) {
            throw new InvalidArgumentException(sprintf('The FeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FeeInfo)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionTaxInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($airPricingSolutionTaxInfoItem) ? get_class($airPricingSolutionTaxInfoItem) : sprintf('%s(%s)', gettype($airPricingSolutionTaxInfoItem), var_export($airPricingSolutionTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintFromSetTaxInfo($taxInfo))) {
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
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirItinerarySolutionRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirItinerarySolutionRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirItinerarySolutionRefForArrayConstraintFromSetAirItinerarySolutionRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingSolutionAirItinerarySolutionRefItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionAirItinerarySolutionRefItem instanceof \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef) {
                $invalidValues[] = is_object($airPricingSolutionAirItinerarySolutionRefItem) ? get_class($airPricingSolutionAirItinerarySolutionRefItem) : sprintf('%s(%s)', gettype($airPricingSolutionAirItinerarySolutionRefItem), var_export($airPricingSolutionAirItinerarySolutionRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirItinerarySolutionRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirItinerarySolutionRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef[] $airItinerarySolutionRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setAirItinerarySolutionRef(?array $airItinerarySolutionRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airItinerarySolutionRefArrayErrorMessage = self::validateAirItinerarySolutionRefForArrayConstraintFromSetAirItinerarySolutionRef($airItinerarySolutionRef))) {
            throw new InvalidArgumentException($airItinerarySolutionRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airItinerarySolutionRef) && count($airItinerarySolutionRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airItinerarySolutionRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef) {
            throw new InvalidArgumentException(sprintf('The AirItinerarySolutionRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirItinerarySolutionRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirItinerarySolutionRef) && count($this->AirItinerarySolutionRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirItinerarySolutionRef)), __LINE__);
        }
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
        foreach ($values as $airPricingSolutionHostTokenItem) {
            // validation for constraint: itemType
            if (!$airPricingSolutionHostTokenItem instanceof \Travelport\UniversalRecord\StructType\HostToken) {
                $invalidValues[] = is_object($airPricingSolutionHostTokenItem) ? get_class($airPricingSolutionHostTokenItem) : sprintf('%s(%s)', gettype($airPricingSolutionHostTokenItem), var_export($airPricingSolutionHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostToken) && count($hostToken) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostToken)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostToken) && count($this->HostToken) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostToken)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($completeItinerary) && !is_bool($completeItinerary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($completeItinerary, true), gettype($completeItinerary)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($quoteDate) && !is_string($quoteDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quoteDate, true), gettype($quoteDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($itinerary) && !is_string($itinerary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itinerary, true), gettype($itinerary)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution
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
}
