<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseLowFareSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1P | This is the container for a set of modifiers which allow the user to perform a special kind of low fare search, depicted as flex explore, based on different parameters like Area, Zone, Country, State, Specific
 * locations, Distance around the actual destination of the itinerary. Applicable for providers 1G,1V,1P. | Provider: ACH. | Provider: 1G,1V,1P,ACH. | Provider: 1G,1V,1P,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along
 * with 9 ADT,CHD,INS passenger | Base Low Fare Search Request
 * @subpackage Structs
 */
class BaseLowFareSearchReq extends BaseAirSearchReq
{
    /**
     * The SearchPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: 18
     * - ref: common:SearchPassenger
     * @var \Travelport\Air\StructType\SearchPassenger[]
     */
    public ?array $SearchPassenger = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\Air\StructType\AirPricingModifiers|null
     */
    public ?\Travelport\Air\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The Enumeration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Enumeration
     * @var \Travelport\Air\StructType\Enumeration|null
     */
    public ?\Travelport\Air\StructType\Enumeration $Enumeration = null;
    /**
     * The AirExchangeModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirExchangeModifiers
     * @var \Travelport\Air\StructType\AirExchangeModifiers|null
     */
    public ?\Travelport\Air\StructType\AirExchangeModifiers $AirExchangeModifiers = null;
    /**
     * The FlexExploreModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlexExploreModifiers
     * @var \Travelport\Air\StructType\FlexExploreModifiers|null
     */
    public ?\Travelport\Air\StructType\FlexExploreModifiers $FlexExploreModifiers = null;
    /**
     * The PCC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PCC
     * @var \Travelport\Air\StructType\PCC|null
     */
    public ?\Travelport\Air\StructType\PCC $PCC = null;
    /**
     * The FareRulesFilterCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRulesFilterCategory
     * @var \Travelport\Air\StructType\FareRulesFilterCategory|null
     */
    public ?\Travelport\Air\StructType\FareRulesFilterCategory $FareRulesFilterCategory = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The EnablePointToPointSearch
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH-Indicates that low cost providers should be queried for top connection options and the results returned with the search.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $EnablePointToPointSearch = null;
    /**
     * The EnablePointToPointAlternates
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH-Indicates that suggestions for alternate connection cities for low cost providers should be returned with the search.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $EnablePointToPointAlternates = null;
    /**
     * The MaxNumberOfExpertSolutions
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH-Indicates the Maximum Number of Expert Solutions to be returned from the Knowledge Base for the provided search criteria
     * - default: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MaxNumberOfExpertSolutions = null;
    /**
     * The SolutionResult
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH-Indicates whether the response will contain Solution result (AirPricingSolution) or Non Solution Result (AirPricingPoints). The default value is false. This attribute cannot be combined with
     * EnablePointToPointSearch, EnablePointToPointAlternates and MaxNumberOfExpertSolutions.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $SolutionResult = null;
    /**
     * The PreferCompleteItinerary
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH-This attribute is only supported for ACH .It works in conjunction with the @SolutionResult flag
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferCompleteItinerary = null;
    /**
     * The MetaOptionIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * @var string|null
     */
    public ?string $MetaOptionIdentifier = null;
    /**
     * The ReturnUpsellFare
     * Meta information extracted from the WSDL
     * - documentation: When set to “true”, Upsell information will be returned in the shop response. Provider supported : 1G, 1V, 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnUpsellFare = null;
    /**
     * The IncludeFareInfoMessages
     * Meta information extracted from the WSDL
     * - documentation: Set to True to return FareInfoMessageList. Providers supported: 1G/1V/1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeFareInfoMessages = null;
    /**
     * The ReturnBrandedFares
     * Meta information extracted from the WSDL
     * - documentation: When ReturnBrandedFares is set to “false”, Rich Content and Branding will not be returned in the shop response. When ReturnBrandedFares it is set to “true” or is not sent, Rich Content and Branding will be returned in the
     * shop response. Provider: 1P/ACH.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnBrandedFares = null;
    /**
     * The MultiGDSSearch
     * Meta information extracted from the WSDL
     * - documentation: A "true" value indicates MultiGDSSearch. Specific provisioning is required.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $MultiGDSSearch = null;
    /**
     * The ReturnMM
     * Meta information extracted from the WSDL
     * - documentation: If this attribute is set to “true”, Fare Control Manager processing will be invoked.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnMM = null;
    /**
     * The CheckOBFees
     * Meta information extracted from the WSDL
     * - documentation: A flag to return fees for ticketing and for various forms of payment. The default is “TicketingOnly” and will return only ticketing fees. The value “All” will return ticketing fees and the applicable form of payment fees for
     * the form of payment information specified in the request. “FOPOnly” will return the applicable form of payment fees for the form of payment information specified in the request. Form of payment fees are never included in the total unless specific
     * card details are in the request.Provider notes:ACH - CheckOBFees is valid only for LowFareSearch. The valid values are “All”, “TicketingOnly” and “None” and the default value is “None”. 1P -The valid values are “All”, “None”
     * and “TicketingOnly”.1G – All four values are supported.1V/RCH – CheckOBFees are not supported.”
     * - use: optional
     * @var string|null
     */
    public ?string $CheckOBFees = null;
    /**
     * The NSCC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $NSCC = null;
    /**
     * The FareInfoRules
     * Meta information extracted from the WSDL
     * - documentation: Returns ChangePenalty and CancelPenalty values at the FareInfo level. If FareRulesFilterCategory is sent FareRulesFilter will be returned at FareInfo level. Provider: 1G/1V.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $FareInfoRules = null;
    /**
     * The MostRestrictivePenalties
     * Meta information extracted from the WSDL
     * - documentation: Boolean flag used to request the MostRestrictivePenalties in the response
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $MostRestrictivePenalties = null;
    /**
     * Constructor method for BaseLowFareSearchReq
     * @uses BaseLowFareSearchReq::setSearchPassenger()
     * @uses BaseLowFareSearchReq::setAirPricingModifiers()
     * @uses BaseLowFareSearchReq::setEnumeration()
     * @uses BaseLowFareSearchReq::setAirExchangeModifiers()
     * @uses BaseLowFareSearchReq::setFlexExploreModifiers()
     * @uses BaseLowFareSearchReq::setPCC()
     * @uses BaseLowFareSearchReq::setFareRulesFilterCategory()
     * @uses BaseLowFareSearchReq::setFormOfPayment()
     * @uses BaseLowFareSearchReq::setEnablePointToPointSearch()
     * @uses BaseLowFareSearchReq::setEnablePointToPointAlternates()
     * @uses BaseLowFareSearchReq::setMaxNumberOfExpertSolutions()
     * @uses BaseLowFareSearchReq::setSolutionResult()
     * @uses BaseLowFareSearchReq::setPreferCompleteItinerary()
     * @uses BaseLowFareSearchReq::setMetaOptionIdentifier()
     * @uses BaseLowFareSearchReq::setReturnUpsellFare()
     * @uses BaseLowFareSearchReq::setIncludeFareInfoMessages()
     * @uses BaseLowFareSearchReq::setReturnBrandedFares()
     * @uses BaseLowFareSearchReq::setMultiGDSSearch()
     * @uses BaseLowFareSearchReq::setReturnMM()
     * @uses BaseLowFareSearchReq::setCheckOBFees()
     * @uses BaseLowFareSearchReq::setNSCC()
     * @uses BaseLowFareSearchReq::setFareInfoRules()
     * @uses BaseLowFareSearchReq::setMostRestrictivePenalties()
     * @param \Travelport\Air\StructType\SearchPassenger[] $searchPassenger
     * @param \Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\Air\StructType\Enumeration $enumeration
     * @param \Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers
     * @param \Travelport\Air\StructType\FlexExploreModifiers $flexExploreModifiers
     * @param \Travelport\Air\StructType\PCC $pCC
     * @param \Travelport\Air\StructType\FareRulesFilterCategory $fareRulesFilterCategory
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @param bool $enablePointToPointSearch
     * @param bool $enablePointToPointAlternates
     * @param int $maxNumberOfExpertSolutions
     * @param bool $solutionResult
     * @param bool $preferCompleteItinerary
     * @param string $metaOptionIdentifier
     * @param bool $returnUpsellFare
     * @param bool $includeFareInfoMessages
     * @param bool $returnBrandedFares
     * @param bool $multiGDSSearch
     * @param bool $returnMM
     * @param string $checkOBFees
     * @param string $nSCC
     * @param bool $fareInfoRules
     * @param bool $mostRestrictivePenalties
     */
    public function __construct(?array $searchPassenger = null, ?\Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers = null, ?\Travelport\Air\StructType\Enumeration $enumeration = null, ?\Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers = null, ?\Travelport\Air\StructType\FlexExploreModifiers $flexExploreModifiers = null, ?\Travelport\Air\StructType\PCC $pCC = null, ?\Travelport\Air\StructType\FareRulesFilterCategory $fareRulesFilterCategory = null, ?array $formOfPayment = null, ?bool $enablePointToPointSearch = false, ?bool $enablePointToPointAlternates = false, ?int $maxNumberOfExpertSolutions = 0, ?bool $solutionResult = false, ?bool $preferCompleteItinerary = true, ?string $metaOptionIdentifier = null, ?bool $returnUpsellFare = false, ?bool $includeFareInfoMessages = false, ?bool $returnBrandedFares = true, ?bool $multiGDSSearch = false, ?bool $returnMM = false, ?string $checkOBFees = null, ?string $nSCC = null, ?bool $fareInfoRules = false, ?bool $mostRestrictivePenalties = false)
    {
        $this
            ->setSearchPassenger($searchPassenger)
            ->setAirPricingModifiers($airPricingModifiers)
            ->setEnumeration($enumeration)
            ->setAirExchangeModifiers($airExchangeModifiers)
            ->setFlexExploreModifiers($flexExploreModifiers)
            ->setPCC($pCC)
            ->setFareRulesFilterCategory($fareRulesFilterCategory)
            ->setFormOfPayment($formOfPayment)
            ->setEnablePointToPointSearch($enablePointToPointSearch)
            ->setEnablePointToPointAlternates($enablePointToPointAlternates)
            ->setMaxNumberOfExpertSolutions($maxNumberOfExpertSolutions)
            ->setSolutionResult($solutionResult)
            ->setPreferCompleteItinerary($preferCompleteItinerary)
            ->setMetaOptionIdentifier($metaOptionIdentifier)
            ->setReturnUpsellFare($returnUpsellFare)
            ->setIncludeFareInfoMessages($includeFareInfoMessages)
            ->setReturnBrandedFares($returnBrandedFares)
            ->setMultiGDSSearch($multiGDSSearch)
            ->setReturnMM($returnMM)
            ->setCheckOBFees($checkOBFees)
            ->setNSCC($nSCC)
            ->setFareInfoRules($fareInfoRules)
            ->setMostRestrictivePenalties($mostRestrictivePenalties);
    }
    /**
     * Get SearchPassenger value
     * @return \Travelport\Air\StructType\SearchPassenger[]
     */
    public function getSearchPassenger(): ?array
    {
        return $this->SearchPassenger;
    }
    /**
     * Set SearchPassenger value
     * @param \Travelport\Air\StructType\SearchPassenger[] $searchPassenger
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setSearchPassenger(?array $searchPassenger = null): self
    {
        $this->SearchPassenger = $searchPassenger;
        
        return $this;
    }
    /**
     * Add item to SearchPassenger value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchPassenger $item
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function addToSearchPassenger(\Travelport\Air\StructType\SearchPassenger $item): self
    {
        $this->SearchPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\Air\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\Air\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setAirPricingModifiers(?\Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get Enumeration value
     * @return \Travelport\Air\StructType\Enumeration|null
     */
    public function getEnumeration(): ?\Travelport\Air\StructType\Enumeration
    {
        return $this->Enumeration;
    }
    /**
     * Set Enumeration value
     * @param \Travelport\Air\StructType\Enumeration $enumeration
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setEnumeration(?\Travelport\Air\StructType\Enumeration $enumeration = null): self
    {
        $this->Enumeration = $enumeration;
        
        return $this;
    }
    /**
     * Get AirExchangeModifiers value
     * @return \Travelport\Air\StructType\AirExchangeModifiers|null
     */
    public function getAirExchangeModifiers(): ?\Travelport\Air\StructType\AirExchangeModifiers
    {
        return $this->AirExchangeModifiers;
    }
    /**
     * Set AirExchangeModifiers value
     * @param \Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setAirExchangeModifiers(?\Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers = null): self
    {
        $this->AirExchangeModifiers = $airExchangeModifiers;
        
        return $this;
    }
    /**
     * Get FlexExploreModifiers value
     * @return \Travelport\Air\StructType\FlexExploreModifiers|null
     */
    public function getFlexExploreModifiers(): ?\Travelport\Air\StructType\FlexExploreModifiers
    {
        return $this->FlexExploreModifiers;
    }
    /**
     * Set FlexExploreModifiers value
     * @param \Travelport\Air\StructType\FlexExploreModifiers $flexExploreModifiers
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setFlexExploreModifiers(?\Travelport\Air\StructType\FlexExploreModifiers $flexExploreModifiers = null): self
    {
        $this->FlexExploreModifiers = $flexExploreModifiers;
        
        return $this;
    }
    /**
     * Get PCC value
     * @return \Travelport\Air\StructType\PCC|null
     */
    public function getPCC(): ?\Travelport\Air\StructType\PCC
    {
        return $this->PCC;
    }
    /**
     * Set PCC value
     * @param \Travelport\Air\StructType\PCC $pCC
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setPCC(?\Travelport\Air\StructType\PCC $pCC = null): self
    {
        $this->PCC = $pCC;
        
        return $this;
    }
    /**
     * Get FareRulesFilterCategory value
     * @return \Travelport\Air\StructType\FareRulesFilterCategory|null
     */
    public function getFareRulesFilterCategory(): ?\Travelport\Air\StructType\FareRulesFilterCategory
    {
        return $this->FareRulesFilterCategory;
    }
    /**
     * Set FareRulesFilterCategory value
     * @param \Travelport\Air\StructType\FareRulesFilterCategory $fareRulesFilterCategory
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setFareRulesFilterCategory(?\Travelport\Air\StructType\FareRulesFilterCategory $fareRulesFilterCategory = null): self
    {
        $this->FareRulesFilterCategory = $fareRulesFilterCategory;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormOfPayment $item
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get EnablePointToPointSearch value
     * @return bool|null
     */
    public function getEnablePointToPointSearch(): ?bool
    {
        return $this->EnablePointToPointSearch;
    }
    /**
     * Set EnablePointToPointSearch value
     * @param bool $enablePointToPointSearch
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setEnablePointToPointSearch(?bool $enablePointToPointSearch = false): self
    {
        $this->EnablePointToPointSearch = $enablePointToPointSearch;
        
        return $this;
    }
    /**
     * Get EnablePointToPointAlternates value
     * @return bool|null
     */
    public function getEnablePointToPointAlternates(): ?bool
    {
        return $this->EnablePointToPointAlternates;
    }
    /**
     * Set EnablePointToPointAlternates value
     * @param bool $enablePointToPointAlternates
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setEnablePointToPointAlternates(?bool $enablePointToPointAlternates = false): self
    {
        $this->EnablePointToPointAlternates = $enablePointToPointAlternates;
        
        return $this;
    }
    /**
     * Get MaxNumberOfExpertSolutions value
     * @return int|null
     */
    public function getMaxNumberOfExpertSolutions(): ?int
    {
        return $this->MaxNumberOfExpertSolutions;
    }
    /**
     * Set MaxNumberOfExpertSolutions value
     * @param int $maxNumberOfExpertSolutions
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setMaxNumberOfExpertSolutions(?int $maxNumberOfExpertSolutions = 0): self
    {
        $this->MaxNumberOfExpertSolutions = $maxNumberOfExpertSolutions;
        
        return $this;
    }
    /**
     * Get SolutionResult value
     * @return bool|null
     */
    public function getSolutionResult(): ?bool
    {
        return $this->SolutionResult;
    }
    /**
     * Set SolutionResult value
     * @param bool $solutionResult
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setSolutionResult(?bool $solutionResult = false): self
    {
        $this->SolutionResult = $solutionResult;
        
        return $this;
    }
    /**
     * Get PreferCompleteItinerary value
     * @return bool|null
     */
    public function getPreferCompleteItinerary(): ?bool
    {
        return $this->PreferCompleteItinerary;
    }
    /**
     * Set PreferCompleteItinerary value
     * @param bool $preferCompleteItinerary
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setPreferCompleteItinerary(?bool $preferCompleteItinerary = true): self
    {
        $this->PreferCompleteItinerary = $preferCompleteItinerary;
        
        return $this;
    }
    /**
     * Get MetaOptionIdentifier value
     * @return string|null
     */
    public function getMetaOptionIdentifier(): ?string
    {
        return $this->MetaOptionIdentifier;
    }
    /**
     * Set MetaOptionIdentifier value
     * @param string $metaOptionIdentifier
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setMetaOptionIdentifier(?string $metaOptionIdentifier = null): self
    {
        $this->MetaOptionIdentifier = $metaOptionIdentifier;
        
        return $this;
    }
    /**
     * Get ReturnUpsellFare value
     * @return bool|null
     */
    public function getReturnUpsellFare(): ?bool
    {
        return $this->ReturnUpsellFare;
    }
    /**
     * Set ReturnUpsellFare value
     * @param bool $returnUpsellFare
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setReturnUpsellFare(?bool $returnUpsellFare = false): self
    {
        $this->ReturnUpsellFare = $returnUpsellFare;
        
        return $this;
    }
    /**
     * Get IncludeFareInfoMessages value
     * @return bool|null
     */
    public function getIncludeFareInfoMessages(): ?bool
    {
        return $this->IncludeFareInfoMessages;
    }
    /**
     * Set IncludeFareInfoMessages value
     * @param bool $includeFareInfoMessages
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setIncludeFareInfoMessages(?bool $includeFareInfoMessages = false): self
    {
        $this->IncludeFareInfoMessages = $includeFareInfoMessages;
        
        return $this;
    }
    /**
     * Get ReturnBrandedFares value
     * @return bool|null
     */
    public function getReturnBrandedFares(): ?bool
    {
        return $this->ReturnBrandedFares;
    }
    /**
     * Set ReturnBrandedFares value
     * @param bool $returnBrandedFares
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setReturnBrandedFares(?bool $returnBrandedFares = true): self
    {
        $this->ReturnBrandedFares = $returnBrandedFares;
        
        return $this;
    }
    /**
     * Get MultiGDSSearch value
     * @return bool|null
     */
    public function getMultiGDSSearch(): ?bool
    {
        return $this->MultiGDSSearch;
    }
    /**
     * Set MultiGDSSearch value
     * @param bool $multiGDSSearch
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setMultiGDSSearch(?bool $multiGDSSearch = false): self
    {
        $this->MultiGDSSearch = $multiGDSSearch;
        
        return $this;
    }
    /**
     * Get ReturnMM value
     * @return bool|null
     */
    public function getReturnMM(): ?bool
    {
        return $this->ReturnMM;
    }
    /**
     * Set ReturnMM value
     * @param bool $returnMM
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setReturnMM(?bool $returnMM = false): self
    {
        $this->ReturnMM = $returnMM;
        
        return $this;
    }
    /**
     * Get CheckOBFees value
     * @return string|null
     */
    public function getCheckOBFees(): ?string
    {
        return $this->CheckOBFees;
    }
    /**
     * Set CheckOBFees value
     * @param string $checkOBFees
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setCheckOBFees(?string $checkOBFees = null): self
    {
        $this->CheckOBFees = $checkOBFees;
        
        return $this;
    }
    /**
     * Get NSCC value
     * @return string|null
     */
    public function getNSCC(): ?string
    {
        return $this->NSCC;
    }
    /**
     * Set NSCC value
     * @param string $nSCC
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setNSCC(?string $nSCC = null): self
    {
        $this->NSCC = $nSCC;
        
        return $this;
    }
    /**
     * Get FareInfoRules value
     * @return bool|null
     */
    public function getFareInfoRules(): ?bool
    {
        return $this->FareInfoRules;
    }
    /**
     * Set FareInfoRules value
     * @param bool $fareInfoRules
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setFareInfoRules(?bool $fareInfoRules = false): self
    {
        $this->FareInfoRules = $fareInfoRules;
        
        return $this;
    }
    /**
     * Get MostRestrictivePenalties value
     * @return bool|null
     */
    public function getMostRestrictivePenalties(): ?bool
    {
        return $this->MostRestrictivePenalties;
    }
    /**
     * Set MostRestrictivePenalties value
     * @param bool $mostRestrictivePenalties
     * @return \Travelport\Air\StructType\BaseLowFareSearchReq
     */
    public function setMostRestrictivePenalties(?bool $mostRestrictivePenalties = false): self
    {
        $this->MostRestrictivePenalties = $mostRestrictivePenalties;
        
        return $this;
    }
}
