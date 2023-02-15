<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RepricingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Used for rapid reprice to provide additional options for the reprice. Providers: 1G/1V/1P/1S/1A
 * @subpackage Structs
 */
class RepricingModifiers extends AbstractStructBase
{
    /**
     * The PrivateFareOptions
     * Meta information extracted from the WSDL
     * - documentation: Public and/or Private Fares requested for pricing. Currently supported: AccountCodeOnly, PrivateFaresOnly, PublicPrivateFaresOnly.
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrivateFareOptions = null;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: FareType
     * @var \Travelport\Util\StructType\FareType[]
     */
    protected ?array $FareType = null;
    /**
     * The FareTicketDesignator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: FareTicketDesignator
     * @var \Travelport\Util\StructType\FareTicketDesignator|null
     */
    protected ?\Travelport\Util\StructType\FareTicketDesignator $FareTicketDesignator = null;
    /**
     * The OverrideCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\OverrideCurrency|null
     */
    protected ?\Travelport\Util\StructType\OverrideCurrency $OverrideCurrency = null;
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
     * The WithholdTaxCode
     * Meta information extracted from the WSDL
     * - documentation: Used to request tax withholding for the tax code specified. Providers supported 1G/1P
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $WithholdTaxCode = null;
    /**
     * The PriceClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Values allowed are ClassBooked or LowestClass. This tells how to price the new itinerary.
     * - use: optional
     * @var string|null
     */
    protected ?string $PriceClassOfService = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: This is either today’s date or the date the repriced itinerary was created
     * - use: optional
     * @var string|null
     */
    protected ?string $CreateDate = null;
    /**
     * The ReissueLocCityCode
     * Meta information extracted from the WSDL
     * - documentation: This is the city code of the reissue location | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $ReissueLocCityCode = null;
    /**
     * The ReissueLocCountryCode
     * Meta information extracted from the WSDL
     * - documentation: This is the country code of the reissue location | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ReissueLocCountryCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Set to true and the itinerary is/will be a bulk ticket. Set to false and the itinerary being repriced will not be a bulk ticket.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BulkTicket = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - documentation: May be used in conjunction with PrivateFareOptions
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountCode = null;
    /**
     * The PenaltyAsTaxCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PenaltyAsTaxCode = null;
    /**
     * The AirPricingSolutionRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a AirPricingSolution. Providers: 1G, 1V, 1P. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirPricingSolutionRef = null;
    /**
     * The PenaltyToFare
     * Meta information extracted from the WSDL
     * - documentation: Will add the change fee/penalty amount to the total fare amount. Supported Providers: 1P
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PenaltyToFare = null;
    /**
     * The PricePTCOnly
     * Meta information extracted from the WSDL
     * - documentation: A value of true forces the price for the PTC even if that fare is not the lowest fare for the passenger.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PricePTCOnly = null;
    /**
     * The BrandDetails
     * Meta information extracted from the WSDL
     * - documentation: Set to true full brand details will be returned.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BrandDetails = null;
    /**
     * The BrandModifier
     * Meta information extracted from the WSDL
     * - documentation: A value of MaintainBrand will maintain the brand from the original ticket if applicable.
     * - use: optional
     * @var string|null
     */
    protected ?string $BrandModifier = null;
    /**
     * The JetServiceOnly
     * Meta information extracted from the WSDL
     * - documentation: Request flights that are jet service only. Available in AirExchangeMultiQuoteReq only.
     * - default: false
     * @var bool|null
     */
    protected ?bool $JetServiceOnly = null;
    /**
     * The TimeWindow
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 12
     * - minInclusive: 01
     * - use: optional
     * @var int|null
     */
    protected ?int $TimeWindow = null;
    /**
     * The FlightType
     * Meta information extracted from the WSDL
     * - default: Direct
     * - use: optional
     * @var string|null
     */
    protected ?string $FlightType = null;
    /**
     * The MultiAirportSearch
     * Meta information extracted from the WSDL
     * - documentation: A value of Multi Airport Search Indicator is optional. Available in AirExchangeMultiQuoteReq only.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MultiAirportSearch = null;
    /**
     * The ConnectionPoint
     * Meta information extracted from the WSDL
     * - documentation: A value of Connection City Code is optional. Available in AirExchangeMultiQuoteReq only. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ConnectionPoint = null;
    /**
     * Constructor method for RepricingModifiers
     * @uses RepricingModifiers::setPrivateFareOptions()
     * @uses RepricingModifiers::setFareType()
     * @uses RepricingModifiers::setFareTicketDesignator()
     * @uses RepricingModifiers::setOverrideCurrency()
     * @uses RepricingModifiers::setAirSegmentPricingModifiers()
     * @uses RepricingModifiers::setWithholdTaxCode()
     * @uses RepricingModifiers::setPriceClassOfService()
     * @uses RepricingModifiers::setCreateDate()
     * @uses RepricingModifiers::setReissueLocCityCode()
     * @uses RepricingModifiers::setReissueLocCountryCode()
     * @uses RepricingModifiers::setBulkTicket()
     * @uses RepricingModifiers::setAccountCode()
     * @uses RepricingModifiers::setPenaltyAsTaxCode()
     * @uses RepricingModifiers::setAirPricingSolutionRef()
     * @uses RepricingModifiers::setPenaltyToFare()
     * @uses RepricingModifiers::setPricePTCOnly()
     * @uses RepricingModifiers::setBrandDetails()
     * @uses RepricingModifiers::setBrandModifier()
     * @uses RepricingModifiers::setJetServiceOnly()
     * @uses RepricingModifiers::setTimeWindow()
     * @uses RepricingModifiers::setFlightType()
     * @uses RepricingModifiers::setMultiAirportSearch()
     * @uses RepricingModifiers::setConnectionPoint()
     * @param string $privateFareOptions
     * @param \Travelport\Util\StructType\FareType[] $fareType
     * @param \Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator
     * @param \Travelport\Util\StructType\OverrideCurrency $overrideCurrency
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param string[] $withholdTaxCode
     * @param string $priceClassOfService
     * @param string $createDate
     * @param string $reissueLocCityCode
     * @param string $reissueLocCountryCode
     * @param bool $bulkTicket
     * @param string $accountCode
     * @param string $penaltyAsTaxCode
     * @param string $airPricingSolutionRef
     * @param bool $penaltyToFare
     * @param bool $pricePTCOnly
     * @param bool $brandDetails
     * @param string $brandModifier
     * @param bool $jetServiceOnly
     * @param int $timeWindow
     * @param string $flightType
     * @param bool $multiAirportSearch
     * @param string $connectionPoint
     */
    public function __construct(?string $privateFareOptions = null, ?array $fareType = null, ?\Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator = null, ?\Travelport\Util\StructType\OverrideCurrency $overrideCurrency = null, ?array $airSegmentPricingModifiers = null, ?array $withholdTaxCode = null, ?string $priceClassOfService = null, ?string $createDate = null, ?string $reissueLocCityCode = null, ?string $reissueLocCountryCode = null, ?bool $bulkTicket = false, ?string $accountCode = null, ?string $penaltyAsTaxCode = null, ?string $airPricingSolutionRef = null, ?bool $penaltyToFare = null, ?bool $pricePTCOnly = false, ?bool $brandDetails = false, ?string $brandModifier = null, ?bool $jetServiceOnly = false, ?int $timeWindow = null, ?string $flightType = 'Direct', ?bool $multiAirportSearch = true, ?string $connectionPoint = null)
    {
        $this
            ->setPrivateFareOptions($privateFareOptions)
            ->setFareType($fareType)
            ->setFareTicketDesignator($fareTicketDesignator)
            ->setOverrideCurrency($overrideCurrency)
            ->setAirSegmentPricingModifiers($airSegmentPricingModifiers)
            ->setWithholdTaxCode($withholdTaxCode)
            ->setPriceClassOfService($priceClassOfService)
            ->setCreateDate($createDate)
            ->setReissueLocCityCode($reissueLocCityCode)
            ->setReissueLocCountryCode($reissueLocCountryCode)
            ->setBulkTicket($bulkTicket)
            ->setAccountCode($accountCode)
            ->setPenaltyAsTaxCode($penaltyAsTaxCode)
            ->setAirPricingSolutionRef($airPricingSolutionRef)
            ->setPenaltyToFare($penaltyToFare)
            ->setPricePTCOnly($pricePTCOnly)
            ->setBrandDetails($brandDetails)
            ->setBrandModifier($brandModifier)
            ->setJetServiceOnly($jetServiceOnly)
            ->setTimeWindow($timeWindow)
            ->setFlightType($flightType)
            ->setMultiAirportSearch($multiAirportSearch)
            ->setConnectionPoint($connectionPoint);
    }
    /**
     * Get PrivateFareOptions value
     * @return string|null
     */
    public function getPrivateFareOptions(): ?string
    {
        return $this->PrivateFareOptions;
    }
    /**
     * Set PrivateFareOptions value
     * @param string $privateFareOptions
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setPrivateFareOptions(?string $privateFareOptions = null): self
    {
        // validation for constraint: string
        if (!is_null($privateFareOptions) && !is_string($privateFareOptions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privateFareOptions, true), gettype($privateFareOptions)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($privateFareOptions) && mb_strlen((string) $privateFareOptions) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $privateFareOptions)), __LINE__);
        }
        $this->PrivateFareOptions = $privateFareOptions;
        
        return $this;
    }
    /**
     * Get FareType value
     * @return \Travelport\Util\StructType\FareType[]
     */
    public function getFareType(): ?array
    {
        return $this->FareType;
    }
    /**
     * This method is responsible for validating the values passed to the setFareType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareTypeForArrayConstraintsFromSetFareType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $repricingModifiersFareTypeItem) {
            // validation for constraint: itemType
            if (!$repricingModifiersFareTypeItem instanceof \Travelport\Util\StructType\FareType) {
                $invalidValues[] = is_object($repricingModifiersFareTypeItem) ? get_class($repricingModifiersFareTypeItem) : sprintf('%s(%s)', gettype($repricingModifiersFareTypeItem), var_export($repricingModifiersFareTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareType property can only contain items of type \Travelport\Util\StructType\FareType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareType[] $fareType
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setFareType(?array $fareType = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareTypeArrayErrorMessage = self::validateFareTypeForArrayConstraintsFromSetFareType($fareType))) {
            throw new InvalidArgumentException($fareTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($fareType) && count($fareType) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($fareType)), __LINE__);
        }
        $this->FareType = $fareType;
        
        return $this;
    }
    /**
     * Add item to FareType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareType $item
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function addToFareType(\Travelport\Util\StructType\FareType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareType) {
            throw new InvalidArgumentException(sprintf('The FareType property can only contain items of type \Travelport\Util\StructType\FareType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->FareType) && count($this->FareType) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->FareType)), __LINE__);
        }
        $this->FareType[] = $item;
        
        return $this;
    }
    /**
     * Get FareTicketDesignator value
     * @return \Travelport\Util\StructType\FareTicketDesignator|null
     */
    public function getFareTicketDesignator(): ?\Travelport\Util\StructType\FareTicketDesignator
    {
        return $this->FareTicketDesignator;
    }
    /**
     * Set FareTicketDesignator value
     * @param \Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setFareTicketDesignator(?\Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator = null): self
    {
        $this->FareTicketDesignator = $fareTicketDesignator;
        
        return $this;
    }
    /**
     * Get OverrideCurrency value
     * @return \Travelport\Util\StructType\OverrideCurrency|null
     */
    public function getOverrideCurrency(): ?\Travelport\Util\StructType\OverrideCurrency
    {
        return $this->OverrideCurrency;
    }
    /**
     * Set OverrideCurrency value
     * @param \Travelport\Util\StructType\OverrideCurrency $overrideCurrency
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setOverrideCurrency(?\Travelport\Util\StructType\OverrideCurrency $overrideCurrency = null): self
    {
        $this->OverrideCurrency = $overrideCurrency;
        
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
        foreach ($values as $repricingModifiersAirSegmentPricingModifiersItem) {
            // validation for constraint: itemType
            if (!$repricingModifiersAirSegmentPricingModifiersItem instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
                $invalidValues[] = is_object($repricingModifiersAirSegmentPricingModifiersItem) ? get_class($repricingModifiersAirSegmentPricingModifiersItem) : sprintf('%s(%s)', gettype($repricingModifiersAirSegmentPricingModifiersItem), var_export($repricingModifiersAirSegmentPricingModifiersItem, true));
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
     * @return \Travelport\Util\StructType\RepricingModifiers
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
     * @return \Travelport\Util\StructType\RepricingModifiers
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
     * Get WithholdTaxCode value
     * @return string[]
     */
    public function getWithholdTaxCode(): ?array
    {
        return $this->WithholdTaxCode;
    }
    /**
     * This method is responsible for validating the values passed to the setWithholdTaxCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWithholdTaxCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWithholdTaxCodeForArrayConstraintsFromSetWithholdTaxCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $repricingModifiersWithholdTaxCodeItem) {
            // validation for constraint: itemType
            if (!is_string($repricingModifiersWithholdTaxCodeItem)) {
                $invalidValues[] = is_object($repricingModifiersWithholdTaxCodeItem) ? get_class($repricingModifiersWithholdTaxCodeItem) : sprintf('%s(%s)', gettype($repricingModifiersWithholdTaxCodeItem), var_export($repricingModifiersWithholdTaxCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WithholdTaxCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setWithholdTaxCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWithholdTaxCode method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWithholdTaxCodeForLengthConstraintFromSetWithholdTaxCode($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $repricingModifiersWithholdTaxCodeItem) {
            // validation for constraint: length(2)
            if (mb_strlen((string) $repricingModifiersWithholdTaxCodeItem) !== 2) {
                $invalidValues[] = var_export($repricingModifiersWithholdTaxCodeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 2', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WithholdTaxCode value
     * @throws InvalidArgumentException
     * @param string[] $withholdTaxCode
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setWithholdTaxCode(?array $withholdTaxCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($withholdTaxCodeArrayErrorMessage = self::validateWithholdTaxCodeForArrayConstraintsFromSetWithholdTaxCode($withholdTaxCode))) {
            throw new InvalidArgumentException($withholdTaxCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(2)
        if ('' !== ($withholdTaxCodeLengthErrorMessage = self::validateWithholdTaxCodeForLengthConstraintFromSetWithholdTaxCode($withholdTaxCode))) {
            throw new InvalidArgumentException($withholdTaxCodeLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($withholdTaxCode) && count($withholdTaxCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($withholdTaxCode)), __LINE__);
        }
        $this->WithholdTaxCode = $withholdTaxCode;
        
        return $this;
    }
    /**
     * Add item to WithholdTaxCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function addToWithholdTaxCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The WithholdTaxCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(2)
        if (mb_strlen((string) $item) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->WithholdTaxCode) && count($this->WithholdTaxCode) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->WithholdTaxCode)), __LINE__);
        }
        $this->WithholdTaxCode[] = $item;
        
        return $this;
    }
    /**
     * Get PriceClassOfService value
     * @return string|null
     */
    public function getPriceClassOfService(): ?string
    {
        return $this->PriceClassOfService;
    }
    /**
     * Set PriceClassOfService value
     * @uses \Travelport\Util\EnumType\TypePriceClassOfService::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePriceClassOfService::getValidValues()
     * @throws InvalidArgumentException
     * @param string $priceClassOfService
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setPriceClassOfService(?string $priceClassOfService = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePriceClassOfService::valueIsValid($priceClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePriceClassOfService', is_array($priceClassOfService) ? implode(', ', $priceClassOfService) : var_export($priceClassOfService, true), implode(', ', \Travelport\Util\EnumType\TypePriceClassOfService::getValidValues())), __LINE__);
        }
        $this->PriceClassOfService = $priceClassOfService;
        
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
     * @return \Travelport\Util\StructType\RepricingModifiers
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
     * Get ReissueLocCityCode value
     * @return string|null
     */
    public function getReissueLocCityCode(): ?string
    {
        return $this->ReissueLocCityCode;
    }
    /**
     * Set ReissueLocCityCode value
     * @param string $reissueLocCityCode
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setReissueLocCityCode(?string $reissueLocCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reissueLocCityCode) && !is_string($reissueLocCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reissueLocCityCode, true), gettype($reissueLocCityCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($reissueLocCityCode) && mb_strlen((string) $reissueLocCityCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $reissueLocCityCode)), __LINE__);
        }
        $this->ReissueLocCityCode = $reissueLocCityCode;
        
        return $this;
    }
    /**
     * Get ReissueLocCountryCode value
     * @return string|null
     */
    public function getReissueLocCountryCode(): ?string
    {
        return $this->ReissueLocCountryCode;
    }
    /**
     * Set ReissueLocCountryCode value
     * @param string $reissueLocCountryCode
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setReissueLocCountryCode(?string $reissueLocCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reissueLocCountryCode) && !is_string($reissueLocCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reissueLocCountryCode, true), gettype($reissueLocCountryCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($reissueLocCountryCode) && mb_strlen((string) $reissueLocCountryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $reissueLocCountryCode)), __LINE__);
        }
        $this->ReissueLocCountryCode = $reissueLocCountryCode;
        
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
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setBulkTicket(?bool $bulkTicket = false): self
    {
        // validation for constraint: boolean
        if (!is_null($bulkTicket) && !is_bool($bulkTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bulkTicket, true), gettype($bulkTicket)), __LINE__);
        }
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get PenaltyAsTaxCode value
     * @return string|null
     */
    public function getPenaltyAsTaxCode(): ?string
    {
        return $this->PenaltyAsTaxCode;
    }
    /**
     * Set PenaltyAsTaxCode value
     * @param string $penaltyAsTaxCode
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setPenaltyAsTaxCode(?string $penaltyAsTaxCode = null): self
    {
        // validation for constraint: string
        if (!is_null($penaltyAsTaxCode) && !is_string($penaltyAsTaxCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($penaltyAsTaxCode, true), gettype($penaltyAsTaxCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($penaltyAsTaxCode) && mb_strlen((string) $penaltyAsTaxCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $penaltyAsTaxCode)), __LINE__);
        }
        $this->PenaltyAsTaxCode = $penaltyAsTaxCode;
        
        return $this;
    }
    /**
     * Get AirPricingSolutionRef value
     * @return string|null
     */
    public function getAirPricingSolutionRef(): ?string
    {
        return $this->AirPricingSolutionRef;
    }
    /**
     * Set AirPricingSolutionRef value
     * @param string $airPricingSolutionRef
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setAirPricingSolutionRef(?string $airPricingSolutionRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airPricingSolutionRef) && !is_string($airPricingSolutionRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airPricingSolutionRef, true), gettype($airPricingSolutionRef)), __LINE__);
        }
        $this->AirPricingSolutionRef = $airPricingSolutionRef;
        
        return $this;
    }
    /**
     * Get PenaltyToFare value
     * @return bool|null
     */
    public function getPenaltyToFare(): ?bool
    {
        return $this->PenaltyToFare;
    }
    /**
     * Set PenaltyToFare value
     * @param bool $penaltyToFare
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setPenaltyToFare(?bool $penaltyToFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($penaltyToFare) && !is_bool($penaltyToFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($penaltyToFare, true), gettype($penaltyToFare)), __LINE__);
        }
        $this->PenaltyToFare = $penaltyToFare;
        
        return $this;
    }
    /**
     * Get PricePTCOnly value
     * @return bool|null
     */
    public function getPricePTCOnly(): ?bool
    {
        return $this->PricePTCOnly;
    }
    /**
     * Set PricePTCOnly value
     * @param bool $pricePTCOnly
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setPricePTCOnly(?bool $pricePTCOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($pricePTCOnly) && !is_bool($pricePTCOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pricePTCOnly, true), gettype($pricePTCOnly)), __LINE__);
        }
        $this->PricePTCOnly = $pricePTCOnly;
        
        return $this;
    }
    /**
     * Get BrandDetails value
     * @return bool|null
     */
    public function getBrandDetails(): ?bool
    {
        return $this->BrandDetails;
    }
    /**
     * Set BrandDetails value
     * @param bool $brandDetails
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setBrandDetails(?bool $brandDetails = false): self
    {
        // validation for constraint: boolean
        if (!is_null($brandDetails) && !is_bool($brandDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($brandDetails, true), gettype($brandDetails)), __LINE__);
        }
        $this->BrandDetails = $brandDetails;
        
        return $this;
    }
    /**
     * Get BrandModifier value
     * @return string|null
     */
    public function getBrandModifier(): ?string
    {
        return $this->BrandModifier;
    }
    /**
     * Set BrandModifier value
     * @param string $brandModifier
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setBrandModifier(?string $brandModifier = null): self
    {
        // validation for constraint: string
        if (!is_null($brandModifier) && !is_string($brandModifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandModifier, true), gettype($brandModifier)), __LINE__);
        }
        $this->BrandModifier = $brandModifier;
        
        return $this;
    }
    /**
     * Get JetServiceOnly value
     * @return bool|null
     */
    public function getJetServiceOnly(): ?bool
    {
        return $this->JetServiceOnly;
    }
    /**
     * Set JetServiceOnly value
     * @param bool $jetServiceOnly
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setJetServiceOnly(?bool $jetServiceOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($jetServiceOnly) && !is_bool($jetServiceOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($jetServiceOnly, true), gettype($jetServiceOnly)), __LINE__);
        }
        $this->JetServiceOnly = $jetServiceOnly;
        
        return $this;
    }
    /**
     * Get TimeWindow value
     * @return int|null
     */
    public function getTimeWindow(): ?int
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param int $timeWindow
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setTimeWindow(?int $timeWindow = null): self
    {
        // validation for constraint: int
        if (!is_null($timeWindow) && !(is_int($timeWindow) || ctype_digit($timeWindow))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeWindow, true), gettype($timeWindow)), __LINE__);
        }
        // validation for constraint: maxInclusive(12)
        if (!is_null($timeWindow) && $timeWindow > 12) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 12', var_export($timeWindow, true)), __LINE__);
        }
        // validation for constraint: minInclusive(01)
        if (!is_null($timeWindow) && $timeWindow < 01) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 01', var_export($timeWindow, true)), __LINE__);
        }
        $this->TimeWindow = $timeWindow;
        
        return $this;
    }
    /**
     * Get FlightType value
     * @return string|null
     */
    public function getFlightType(): ?string
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @param string $flightType
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setFlightType(?string $flightType = 'Direct'): self
    {
        // validation for constraint: string
        if (!is_null($flightType) && !is_string($flightType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightType, true), gettype($flightType)), __LINE__);
        }
        $this->FlightType = $flightType;
        
        return $this;
    }
    /**
     * Get MultiAirportSearch value
     * @return bool|null
     */
    public function getMultiAirportSearch(): ?bool
    {
        return $this->MultiAirportSearch;
    }
    /**
     * Set MultiAirportSearch value
     * @param bool $multiAirportSearch
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setMultiAirportSearch(?bool $multiAirportSearch = true): self
    {
        // validation for constraint: boolean
        if (!is_null($multiAirportSearch) && !is_bool($multiAirportSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multiAirportSearch, true), gettype($multiAirportSearch)), __LINE__);
        }
        $this->MultiAirportSearch = $multiAirportSearch;
        
        return $this;
    }
    /**
     * Get ConnectionPoint value
     * @return string|null
     */
    public function getConnectionPoint(): ?string
    {
        return $this->ConnectionPoint;
    }
    /**
     * Set ConnectionPoint value
     * @param string $connectionPoint
     * @return \Travelport\Util\StructType\RepricingModifiers
     */
    public function setConnectionPoint(?string $connectionPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionPoint) && !is_string($connectionPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionPoint, true), gettype($connectionPoint)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($connectionPoint) && mb_strlen((string) $connectionPoint) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $connectionPoint)), __LINE__);
        }
        $this->ConnectionPoint = $connectionPoint;
        
        return $this;
    }
}
