<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $PrivateFareOptions = null;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: FareType
     * @var \Travelport\UniversalRecord\StructType\FareType[]
     */
    public ?array $FareType = null;
    /**
     * The FareTicketDesignator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: FareTicketDesignator
     * @var \Travelport\UniversalRecord\StructType\FareTicketDesignator|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareTicketDesignator $FareTicketDesignator = null;
    /**
     * The OverrideCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\OverrideCurrency|null
     */
    public ?\Travelport\UniversalRecord\StructType\OverrideCurrency $OverrideCurrency = null;
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
     * The WithholdTaxCode
     * Meta information extracted from the WSDL
     * - documentation: Used to request tax withholding for the tax code specified. Providers supported 1G/1P
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $WithholdTaxCode = null;
    /**
     * The PriceClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Values allowed are ClassBooked or LowestClass. This tells how to price the new itinerary.
     * - use: optional
     * @var string|null
     */
    public ?string $PriceClassOfService = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: This is either today’s date or the date the repriced itinerary was created
     * - use: optional
     * @var string|null
     */
    public ?string $CreateDate = null;
    /**
     * The ReissueLocCityCode
     * Meta information extracted from the WSDL
     * - documentation: This is the city code of the reissue location | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $ReissueLocCityCode = null;
    /**
     * The ReissueLocCountryCode
     * Meta information extracted from the WSDL
     * - documentation: This is the country code of the reissue location | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ReissueLocCountryCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Set to true and the itinerary is/will be a bulk ticket. Set to false and the itinerary being repriced will not be a bulk ticket.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - documentation: May be used in conjunction with PrivateFareOptions
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
    /**
     * The PenaltyAsTaxCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PenaltyAsTaxCode = null;
    /**
     * The AirPricingSolutionRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a AirPricingSolution. Providers: 1G, 1V, 1P. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirPricingSolutionRef = null;
    /**
     * The PenaltyToFare
     * Meta information extracted from the WSDL
     * - documentation: Will add the change fee/penalty amount to the total fare amount. Supported Providers: 1P
     * - use: optional
     * @var bool|null
     */
    public ?bool $PenaltyToFare = null;
    /**
     * The PricePTCOnly
     * Meta information extracted from the WSDL
     * - documentation: A value of true forces the price for the PTC even if that fare is not the lowest fare for the passenger.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PricePTCOnly = null;
    /**
     * The BrandDetails
     * Meta information extracted from the WSDL
     * - documentation: Set to true full brand details will be returned.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $BrandDetails = null;
    /**
     * The BrandModifier
     * Meta information extracted from the WSDL
     * - documentation: A value of MaintainBrand will maintain the brand from the original ticket if applicable.
     * - use: optional
     * @var string|null
     */
    public ?string $BrandModifier = null;
    /**
     * The JetServiceOnly
     * Meta information extracted from the WSDL
     * - documentation: Request flights that are jet service only. Available in AirExchangeMultiQuoteReq only.
     * - default: false
     * @var bool|null
     */
    public ?bool $JetServiceOnly = null;
    /**
     * The TimeWindow
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 12
     * - minInclusive: 01
     * - use: optional
     * @var int|null
     */
    public ?int $TimeWindow = null;
    /**
     * The FlightType
     * Meta information extracted from the WSDL
     * - default: Direct
     * - use: optional
     * @var string|null
     */
    public ?string $FlightType = null;
    /**
     * The MultiAirportSearch
     * Meta information extracted from the WSDL
     * - documentation: A value of Multi Airport Search Indicator is optional. Available in AirExchangeMultiQuoteReq only.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $MultiAirportSearch = null;
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
    public ?string $ConnectionPoint = null;
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
     * @param \Travelport\UniversalRecord\StructType\FareType[] $fareType
     * @param \Travelport\UniversalRecord\StructType\FareTicketDesignator $fareTicketDesignator
     * @param \Travelport\UniversalRecord\StructType\OverrideCurrency $overrideCurrency
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
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
    public function __construct(?string $privateFareOptions = null, ?array $fareType = null, ?\Travelport\UniversalRecord\StructType\FareTicketDesignator $fareTicketDesignator = null, ?\Travelport\UniversalRecord\StructType\OverrideCurrency $overrideCurrency = null, ?array $airSegmentPricingModifiers = null, ?array $withholdTaxCode = null, ?string $priceClassOfService = null, ?string $createDate = null, ?string $reissueLocCityCode = null, ?string $reissueLocCountryCode = null, ?bool $bulkTicket = false, ?string $accountCode = null, ?string $penaltyAsTaxCode = null, ?string $airPricingSolutionRef = null, ?bool $penaltyToFare = null, ?bool $pricePTCOnly = false, ?bool $brandDetails = false, ?string $brandModifier = null, ?bool $jetServiceOnly = false, ?int $timeWindow = null, ?string $flightType = 'Direct', ?bool $multiAirportSearch = true, ?string $connectionPoint = null)
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setPrivateFareOptions(?string $privateFareOptions = null): self
    {
        $this->PrivateFareOptions = $privateFareOptions;
        
        return $this;
    }
    /**
     * Get FareType value
     * @return \Travelport\UniversalRecord\StructType\FareType[]
     */
    public function getFareType(): ?array
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @param \Travelport\UniversalRecord\StructType\FareType[] $fareType
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setFareType(?array $fareType = null): self
    {
        $this->FareType = $fareType;
        
        return $this;
    }
    /**
     * Add item to FareType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareType $item
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function addToFareType(\Travelport\UniversalRecord\StructType\FareType $item): self
    {
        $this->FareType[] = $item;
        
        return $this;
    }
    /**
     * Get FareTicketDesignator value
     * @return \Travelport\UniversalRecord\StructType\FareTicketDesignator|null
     */
    public function getFareTicketDesignator(): ?\Travelport\UniversalRecord\StructType\FareTicketDesignator
    {
        return $this->FareTicketDesignator;
    }
    /**
     * Set FareTicketDesignator value
     * @param \Travelport\UniversalRecord\StructType\FareTicketDesignator $fareTicketDesignator
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setFareTicketDesignator(?\Travelport\UniversalRecord\StructType\FareTicketDesignator $fareTicketDesignator = null): self
    {
        $this->FareTicketDesignator = $fareTicketDesignator;
        
        return $this;
    }
    /**
     * Get OverrideCurrency value
     * @return \Travelport\UniversalRecord\StructType\OverrideCurrency|null
     */
    public function getOverrideCurrency(): ?\Travelport\UniversalRecord\StructType\OverrideCurrency
    {
        return $this->OverrideCurrency;
    }
    /**
     * Set OverrideCurrency value
     * @param \Travelport\UniversalRecord\StructType\OverrideCurrency $overrideCurrency
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setOverrideCurrency(?\Travelport\UniversalRecord\StructType\OverrideCurrency $overrideCurrency = null): self
    {
        $this->OverrideCurrency = $overrideCurrency;
        
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function addToAirSegmentPricingModifiers(\Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item): self
    {
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
     * Set WithholdTaxCode value
     * @param string[] $withholdTaxCode
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setWithholdTaxCode(?array $withholdTaxCode = null): self
    {
        $this->WithholdTaxCode = $withholdTaxCode;
        
        return $this;
    }
    /**
     * Add item to WithholdTaxCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function addToWithholdTaxCode(string $item): self
    {
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
     * @param string $priceClassOfService
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setPriceClassOfService(?string $priceClassOfService = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setCreateDate(?string $createDate = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setReissueLocCityCode(?string $reissueLocCityCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setReissueLocCountryCode(?string $reissueLocCountryCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setBulkTicket(?bool $bulkTicket = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setPenaltyAsTaxCode(?string $penaltyAsTaxCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setAirPricingSolutionRef(?string $airPricingSolutionRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setPenaltyToFare(?bool $penaltyToFare = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setPricePTCOnly(?bool $pricePTCOnly = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setBrandDetails(?bool $brandDetails = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setBrandModifier(?string $brandModifier = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setJetServiceOnly(?bool $jetServiceOnly = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setTimeWindow(?int $timeWindow = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setFlightType(?string $flightType = 'Direct'): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setMultiAirportSearch(?bool $multiAirportSearch = true): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\RepricingModifiers
     */
    public function setConnectionPoint(?string $connectionPoint = null): self
    {
        $this->ConnectionPoint = $connectionPoint;
        
        return $this;
    }
}
