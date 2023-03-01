<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to specify the level of branding requested. | User can use this node to send a specific PCC to access fares allowed only for that PCC. This node gives the capability for fare redistribution at stored fare level. As multiple UAPI
 * AirPricingInfos (all having same AirPricingInfoGroup) can converge to a single stored fare, UAPI will map PoinOfSale information from the first available one from each group | Represents increment/discount applied manually by agent. | Discount
 * request for rail. | Request Fares with specific Penalty Information. | Controls and switches for a Air Search request that contains Pricing Information
 * @subpackage Structs
 */
class AirPricingModifiers extends AbstractStructBase
{
    /**
     * The ProhibitedRuleCategories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ProhibitedRuleCategories|null
     */
    public ?\Travelport\Air\StructType\ProhibitedRuleCategories $ProhibitedRuleCategories = null;
    /**
     * The AccountCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\AccountCodes|null
     */
    public ?\Travelport\Air\StructType\AccountCodes $AccountCodes = null;
    /**
     * The PermittedCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCabins
     * @var \Travelport\Air\StructType\PermittedCabins|null
     */
    public ?\Travelport\Air\StructType\PermittedCabins $PermittedCabins = null;
    /**
     * The ContractCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ContractCodes|null
     */
    public ?\Travelport\Air\StructType\ContractCodes $ContractCodes = null;
    /**
     * The ExemptTaxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ExemptTaxes
     * @var \Travelport\Air\StructType\ExemptTaxes|null
     */
    public ?\Travelport\Air\StructType\ExemptTaxes $ExemptTaxes = null;
    /**
     * The PenaltyFareInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PenaltyFareInformation
     * @var \Travelport\Air\StructType\PenaltyFareInformation|null
     */
    public ?\Travelport\Air\StructType\PenaltyFareInformation $PenaltyFareInformation = null;
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:DiscountCard
     * @var \Travelport\Air\StructType\DiscountCard[]
     */
    public ?array $DiscountCard = null;
    /**
     * The PromoCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PromoCodes|null
     */
    public ?\Travelport\Air\StructType\PromoCodes $PromoCodes = null;
    /**
     * The ManualFareAdjustment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ManualFareAdjustment
     * @var \Travelport\Air\StructType\ManualFareAdjustment[]
     */
    public ?array $ManualFareAdjustment = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Air\StructType\PointOfSale|null
     */
    public ?\Travelport\Air\StructType\PointOfSale $PointOfSale = null;
    /**
     * The BrandModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BrandModifiers
     * @var \Travelport\Air\StructType\BrandModifiers|null
     */
    public ?\Travelport\Air\StructType\BrandModifiers $BrandModifiers = null;
    /**
     * The MultiGDSSearchIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MultiGDSSearchIndicator
     * @var \Travelport\Air\StructType\MultiGDSSearchIndicator[]
     */
    public ?array $MultiGDSSearchIndicator = null;
    /**
     * The PreferredCabins
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: PreferredCabins
     * @var \Travelport\Air\StructType\PreferredCabins[]
     */
    public ?array $PreferredCabins = null;
    /**
     * The ProhibitMinStayFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitMinStayFares = null;
    /**
     * The ProhibitMaxStayFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitMaxStayFares = null;
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $CurrencyType = null;
    /**
     * The ProhibitAdvancePurchaseFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitAdvancePurchaseFares = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ProhibitRestrictedFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitRestrictedFares = null;
    /**
     * The FaresIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether only public fares should be returned or specific type of private fares
     * - use: optional
     * @var string|null
     */
    public ?string $FaresIndicator = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency in which Fares/Prices will be filed if supported by the supplier else approximated to. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $FiledCurrency = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The OverrideCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $OverrideCarrier = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: Request a search based on whether only E-ticketable fares are required.
     * - use: optional
     * @var string|null
     */
    public ?string $ETicketability = null;
    /**
     * The AccountCodeFaresOnly
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the private fares returned should be restricted to only those specific to the input account code and contract code.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AccountCodeFaresOnly = null;
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
     * The ProhibitNonExchangeableFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitNonExchangeableFares = null;
    /**
     * The ForceSegmentSelect
     * Meta information extracted from the WSDL
     * - documentation: This indicator allows agent to force segment select option in host while selecting all air segments to store price on a PNR. This is relevent only when agent selects all air segmnets to price. if agent selects specific segments to
     * price then this attribute will be ignored by the system. This is currently used by Worldspan only.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ForceSegmentSelect = null;
    /**
     * The InventoryRequestType
     * Meta information extracted from the WSDL
     * - documentation: This allows user to make request for a particular source of inventory for pricing modifier purposes.
     * - use: optional
     * @var string|null
     */
    public ?string $InventoryRequestType = null;
    /**
     * The OneWayShop
     * Meta information extracted from the WSDL
     * - documentation: Via this attribute one way shop can be requested. Applicable provider is 1G
     * - default: false
     * @var bool|null
     */
    public ?bool $OneWayShop = null;
    /**
     * The ProhibitUnbundledFareTypes
     * Meta information extracted from the WSDL
     * - documentation: A "True" value wiill remove fares with EOU and ERU fare types from consideration. A "False" value is the same as no value. Default is no value. Applicable providers: 1P/1G/1V
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitUnbundledFareTypes = null;
    /**
     * The ReturnServices
     * Meta information extracted from the WSDL
     * - documentation: When set to false, ATPCO filed Optional Services will not be returned. Default is false. Provider: 1G, 1V, 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnServices = null;
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ChannelId = null;
    /**
     * The ReturnFareAttributes
     * Meta information extracted from the WSDL
     * - documentation: Returns attributes that are associated to a fare
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnFareAttributes = null;
    /**
     * The SellCheck
     * Meta information extracted from the WSDL
     * - documentation: Checks if the segment is bookable before pricing
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $SellCheck = null;
    /**
     * The ReturnFailedSegments
     * Meta information extracted from the WSDL
     * - documentation: If "true", returns failed segments information.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnFailedSegments = null;
    /**
     * The SellCity
     * Meta information extracted from the WSDL
     * - documentation: City Code identifying where the ticket is to be sold. | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $SellCity = null;
    /**
     * The TicketingCity
     * Meta information extracted from the WSDL
     * - documentation: City Code identifying where the ticket will be issued. | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingCity = null;
    /**
     * Constructor method for AirPricingModifiers
     * @uses AirPricingModifiers::setProhibitedRuleCategories()
     * @uses AirPricingModifiers::setAccountCodes()
     * @uses AirPricingModifiers::setPermittedCabins()
     * @uses AirPricingModifiers::setContractCodes()
     * @uses AirPricingModifiers::setExemptTaxes()
     * @uses AirPricingModifiers::setPenaltyFareInformation()
     * @uses AirPricingModifiers::setDiscountCard()
     * @uses AirPricingModifiers::setPromoCodes()
     * @uses AirPricingModifiers::setManualFareAdjustment()
     * @uses AirPricingModifiers::setPointOfSale()
     * @uses AirPricingModifiers::setBrandModifiers()
     * @uses AirPricingModifiers::setMultiGDSSearchIndicator()
     * @uses AirPricingModifiers::setPreferredCabins()
     * @uses AirPricingModifiers::setProhibitMinStayFares()
     * @uses AirPricingModifiers::setProhibitMaxStayFares()
     * @uses AirPricingModifiers::setCurrencyType()
     * @uses AirPricingModifiers::setProhibitAdvancePurchaseFares()
     * @uses AirPricingModifiers::setProhibitNonRefundableFares()
     * @uses AirPricingModifiers::setProhibitRestrictedFares()
     * @uses AirPricingModifiers::setFaresIndicator()
     * @uses AirPricingModifiers::setFiledCurrency()
     * @uses AirPricingModifiers::setPlatingCarrier()
     * @uses AirPricingModifiers::setOverrideCarrier()
     * @uses AirPricingModifiers::setETicketability()
     * @uses AirPricingModifiers::setAccountCodeFaresOnly()
     * @uses AirPricingModifiers::setKey()
     * @uses AirPricingModifiers::setProhibitNonExchangeableFares()
     * @uses AirPricingModifiers::setForceSegmentSelect()
     * @uses AirPricingModifiers::setInventoryRequestType()
     * @uses AirPricingModifiers::setOneWayShop()
     * @uses AirPricingModifiers::setProhibitUnbundledFareTypes()
     * @uses AirPricingModifiers::setReturnServices()
     * @uses AirPricingModifiers::setChannelId()
     * @uses AirPricingModifiers::setReturnFareAttributes()
     * @uses AirPricingModifiers::setSellCheck()
     * @uses AirPricingModifiers::setReturnFailedSegments()
     * @uses AirPricingModifiers::setSellCity()
     * @uses AirPricingModifiers::setTicketingCity()
     * @param \Travelport\Air\StructType\ProhibitedRuleCategories $prohibitedRuleCategories
     * @param \Travelport\Air\StructType\AccountCodes $accountCodes
     * @param \Travelport\Air\StructType\PermittedCabins $permittedCabins
     * @param \Travelport\Air\StructType\ContractCodes $contractCodes
     * @param \Travelport\Air\StructType\ExemptTaxes $exemptTaxes
     * @param \Travelport\Air\StructType\PenaltyFareInformation $penaltyFareInformation
     * @param \Travelport\Air\StructType\DiscountCard[] $discountCard
     * @param \Travelport\Air\StructType\PromoCodes $promoCodes
     * @param \Travelport\Air\StructType\ManualFareAdjustment[] $manualFareAdjustment
     * @param \Travelport\Air\StructType\PointOfSale $pointOfSale
     * @param \Travelport\Air\StructType\BrandModifiers $brandModifiers
     * @param \Travelport\Air\StructType\MultiGDSSearchIndicator[] $multiGDSSearchIndicator
     * @param \Travelport\Air\StructType\PreferredCabins[] $preferredCabins
     * @param bool $prohibitMinStayFares
     * @param bool $prohibitMaxStayFares
     * @param string $currencyType
     * @param bool $prohibitAdvancePurchaseFares
     * @param bool $prohibitNonRefundableFares
     * @param bool $prohibitRestrictedFares
     * @param string $faresIndicator
     * @param string $filedCurrency
     * @param string $platingCarrier
     * @param string $overrideCarrier
     * @param string $eTicketability
     * @param bool $accountCodeFaresOnly
     * @param string $key
     * @param bool $prohibitNonExchangeableFares
     * @param bool $forceSegmentSelect
     * @param string $inventoryRequestType
     * @param bool $oneWayShop
     * @param bool $prohibitUnbundledFareTypes
     * @param bool $returnServices
     * @param string $channelId
     * @param bool $returnFareAttributes
     * @param bool $sellCheck
     * @param bool $returnFailedSegments
     * @param string $sellCity
     * @param string $ticketingCity
     */
    public function __construct(?\Travelport\Air\StructType\ProhibitedRuleCategories $prohibitedRuleCategories = null, ?\Travelport\Air\StructType\AccountCodes $accountCodes = null, ?\Travelport\Air\StructType\PermittedCabins $permittedCabins = null, ?\Travelport\Air\StructType\ContractCodes $contractCodes = null, ?\Travelport\Air\StructType\ExemptTaxes $exemptTaxes = null, ?\Travelport\Air\StructType\PenaltyFareInformation $penaltyFareInformation = null, ?array $discountCard = null, ?\Travelport\Air\StructType\PromoCodes $promoCodes = null, ?array $manualFareAdjustment = null, ?\Travelport\Air\StructType\PointOfSale $pointOfSale = null, ?\Travelport\Air\StructType\BrandModifiers $brandModifiers = null, ?array $multiGDSSearchIndicator = null, ?array $preferredCabins = null, ?bool $prohibitMinStayFares = false, ?bool $prohibitMaxStayFares = false, ?string $currencyType = null, ?bool $prohibitAdvancePurchaseFares = false, ?bool $prohibitNonRefundableFares = false, ?bool $prohibitRestrictedFares = false, ?string $faresIndicator = null, ?string $filedCurrency = null, ?string $platingCarrier = null, ?string $overrideCarrier = null, ?string $eTicketability = null, ?bool $accountCodeFaresOnly = null, ?string $key = null, ?bool $prohibitNonExchangeableFares = false, ?bool $forceSegmentSelect = false, ?string $inventoryRequestType = null, ?bool $oneWayShop = false, ?bool $prohibitUnbundledFareTypes = null, ?bool $returnServices = false, ?string $channelId = null, ?bool $returnFareAttributes = false, ?bool $sellCheck = false, ?bool $returnFailedSegments = false, ?string $sellCity = null, ?string $ticketingCity = null)
    {
        $this
            ->setProhibitedRuleCategories($prohibitedRuleCategories)
            ->setAccountCodes($accountCodes)
            ->setPermittedCabins($permittedCabins)
            ->setContractCodes($contractCodes)
            ->setExemptTaxes($exemptTaxes)
            ->setPenaltyFareInformation($penaltyFareInformation)
            ->setDiscountCard($discountCard)
            ->setPromoCodes($promoCodes)
            ->setManualFareAdjustment($manualFareAdjustment)
            ->setPointOfSale($pointOfSale)
            ->setBrandModifiers($brandModifiers)
            ->setMultiGDSSearchIndicator($multiGDSSearchIndicator)
            ->setPreferredCabins($preferredCabins)
            ->setProhibitMinStayFares($prohibitMinStayFares)
            ->setProhibitMaxStayFares($prohibitMaxStayFares)
            ->setCurrencyType($currencyType)
            ->setProhibitAdvancePurchaseFares($prohibitAdvancePurchaseFares)
            ->setProhibitNonRefundableFares($prohibitNonRefundableFares)
            ->setProhibitRestrictedFares($prohibitRestrictedFares)
            ->setFaresIndicator($faresIndicator)
            ->setFiledCurrency($filedCurrency)
            ->setPlatingCarrier($platingCarrier)
            ->setOverrideCarrier($overrideCarrier)
            ->setETicketability($eTicketability)
            ->setAccountCodeFaresOnly($accountCodeFaresOnly)
            ->setKey($key)
            ->setProhibitNonExchangeableFares($prohibitNonExchangeableFares)
            ->setForceSegmentSelect($forceSegmentSelect)
            ->setInventoryRequestType($inventoryRequestType)
            ->setOneWayShop($oneWayShop)
            ->setProhibitUnbundledFareTypes($prohibitUnbundledFareTypes)
            ->setReturnServices($returnServices)
            ->setChannelId($channelId)
            ->setReturnFareAttributes($returnFareAttributes)
            ->setSellCheck($sellCheck)
            ->setReturnFailedSegments($returnFailedSegments)
            ->setSellCity($sellCity)
            ->setTicketingCity($ticketingCity);
    }
    /**
     * Get ProhibitedRuleCategories value
     * @return \Travelport\Air\StructType\ProhibitedRuleCategories|null
     */
    public function getProhibitedRuleCategories(): ?\Travelport\Air\StructType\ProhibitedRuleCategories
    {
        return $this->ProhibitedRuleCategories;
    }
    /**
     * Set ProhibitedRuleCategories value
     * @param \Travelport\Air\StructType\ProhibitedRuleCategories $prohibitedRuleCategories
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitedRuleCategories(?\Travelport\Air\StructType\ProhibitedRuleCategories $prohibitedRuleCategories = null): self
    {
        $this->ProhibitedRuleCategories = $prohibitedRuleCategories;
        
        return $this;
    }
    /**
     * Get AccountCodes value
     * @return \Travelport\Air\StructType\AccountCodes|null
     */
    public function getAccountCodes(): ?\Travelport\Air\StructType\AccountCodes
    {
        return $this->AccountCodes;
    }
    /**
     * Set AccountCodes value
     * @param \Travelport\Air\StructType\AccountCodes $accountCodes
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setAccountCodes(?\Travelport\Air\StructType\AccountCodes $accountCodes = null): self
    {
        $this->AccountCodes = $accountCodes;
        
        return $this;
    }
    /**
     * Get PermittedCabins value
     * @return \Travelport\Air\StructType\PermittedCabins|null
     */
    public function getPermittedCabins(): ?\Travelport\Air\StructType\PermittedCabins
    {
        return $this->PermittedCabins;
    }
    /**
     * Set PermittedCabins value
     * @param \Travelport\Air\StructType\PermittedCabins $permittedCabins
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setPermittedCabins(?\Travelport\Air\StructType\PermittedCabins $permittedCabins = null): self
    {
        $this->PermittedCabins = $permittedCabins;
        
        return $this;
    }
    /**
     * Get ContractCodes value
     * @return \Travelport\Air\StructType\ContractCodes|null
     */
    public function getContractCodes(): ?\Travelport\Air\StructType\ContractCodes
    {
        return $this->ContractCodes;
    }
    /**
     * Set ContractCodes value
     * @param \Travelport\Air\StructType\ContractCodes $contractCodes
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setContractCodes(?\Travelport\Air\StructType\ContractCodes $contractCodes = null): self
    {
        $this->ContractCodes = $contractCodes;
        
        return $this;
    }
    /**
     * Get ExemptTaxes value
     * @return \Travelport\Air\StructType\ExemptTaxes|null
     */
    public function getExemptTaxes(): ?\Travelport\Air\StructType\ExemptTaxes
    {
        return $this->ExemptTaxes;
    }
    /**
     * Set ExemptTaxes value
     * @param \Travelport\Air\StructType\ExemptTaxes $exemptTaxes
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setExemptTaxes(?\Travelport\Air\StructType\ExemptTaxes $exemptTaxes = null): self
    {
        $this->ExemptTaxes = $exemptTaxes;
        
        return $this;
    }
    /**
     * Get PenaltyFareInformation value
     * @return \Travelport\Air\StructType\PenaltyFareInformation|null
     */
    public function getPenaltyFareInformation(): ?\Travelport\Air\StructType\PenaltyFareInformation
    {
        return $this->PenaltyFareInformation;
    }
    /**
     * Set PenaltyFareInformation value
     * @param \Travelport\Air\StructType\PenaltyFareInformation $penaltyFareInformation
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setPenaltyFareInformation(?\Travelport\Air\StructType\PenaltyFareInformation $penaltyFareInformation = null): self
    {
        $this->PenaltyFareInformation = $penaltyFareInformation;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Air\StructType\DiscountCard[]
     */
    public function getDiscountCard(): ?array
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\Air\StructType\DiscountCard[] $discountCard
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setDiscountCard(?array $discountCard = null): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DiscountCard $item
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function addToDiscountCard(\Travelport\Air\StructType\DiscountCard $item): self
    {
        $this->DiscountCard[] = $item;
        
        return $this;
    }
    /**
     * Get PromoCodes value
     * @return \Travelport\Air\StructType\PromoCodes|null
     */
    public function getPromoCodes(): ?\Travelport\Air\StructType\PromoCodes
    {
        return $this->PromoCodes;
    }
    /**
     * Set PromoCodes value
     * @param \Travelport\Air\StructType\PromoCodes $promoCodes
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setPromoCodes(?\Travelport\Air\StructType\PromoCodes $promoCodes = null): self
    {
        $this->PromoCodes = $promoCodes;
        
        return $this;
    }
    /**
     * Get ManualFareAdjustment value
     * @return \Travelport\Air\StructType\ManualFareAdjustment[]
     */
    public function getManualFareAdjustment(): ?array
    {
        return $this->ManualFareAdjustment;
    }
    /**
     * Set ManualFareAdjustment value
     * @param \Travelport\Air\StructType\ManualFareAdjustment[] $manualFareAdjustment
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setManualFareAdjustment(?array $manualFareAdjustment = null): self
    {
        $this->ManualFareAdjustment = $manualFareAdjustment;
        
        return $this;
    }
    /**
     * Add item to ManualFareAdjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ManualFareAdjustment $item
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function addToManualFareAdjustment(\Travelport\Air\StructType\ManualFareAdjustment $item): self
    {
        $this->ManualFareAdjustment[] = $item;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Air\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\Air\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Air\StructType\PointOfSale $pointOfSale
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setPointOfSale(?\Travelport\Air\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Get BrandModifiers value
     * @return \Travelport\Air\StructType\BrandModifiers|null
     */
    public function getBrandModifiers(): ?\Travelport\Air\StructType\BrandModifiers
    {
        return $this->BrandModifiers;
    }
    /**
     * Set BrandModifiers value
     * @param \Travelport\Air\StructType\BrandModifiers $brandModifiers
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setBrandModifiers(?\Travelport\Air\StructType\BrandModifiers $brandModifiers = null): self
    {
        $this->BrandModifiers = $brandModifiers;
        
        return $this;
    }
    /**
     * Get MultiGDSSearchIndicator value
     * @return \Travelport\Air\StructType\MultiGDSSearchIndicator[]
     */
    public function getMultiGDSSearchIndicator(): ?array
    {
        return $this->MultiGDSSearchIndicator;
    }
    /**
     * Set MultiGDSSearchIndicator value
     * @param \Travelport\Air\StructType\MultiGDSSearchIndicator[] $multiGDSSearchIndicator
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setMultiGDSSearchIndicator(?array $multiGDSSearchIndicator = null): self
    {
        $this->MultiGDSSearchIndicator = $multiGDSSearchIndicator;
        
        return $this;
    }
    /**
     * Add item to MultiGDSSearchIndicator value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\MultiGDSSearchIndicator $item
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function addToMultiGDSSearchIndicator(\Travelport\Air\StructType\MultiGDSSearchIndicator $item): self
    {
        $this->MultiGDSSearchIndicator[] = $item;
        
        return $this;
    }
    /**
     * Get PreferredCabins value
     * @return \Travelport\Air\StructType\PreferredCabins[]
     */
    public function getPreferredCabins(): ?array
    {
        return $this->PreferredCabins;
    }
    /**
     * Set PreferredCabins value
     * @param \Travelport\Air\StructType\PreferredCabins[] $preferredCabins
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setPreferredCabins(?array $preferredCabins = null): self
    {
        $this->PreferredCabins = $preferredCabins;
        
        return $this;
    }
    /**
     * Add item to PreferredCabins value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PreferredCabins $item
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function addToPreferredCabins(\Travelport\Air\StructType\PreferredCabins $item): self
    {
        $this->PreferredCabins[] = $item;
        
        return $this;
    }
    /**
     * Get ProhibitMinStayFares value
     * @return bool|null
     */
    public function getProhibitMinStayFares(): ?bool
    {
        return $this->ProhibitMinStayFares;
    }
    /**
     * Set ProhibitMinStayFares value
     * @param bool $prohibitMinStayFares
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitMinStayFares(?bool $prohibitMinStayFares = false): self
    {
        $this->ProhibitMinStayFares = $prohibitMinStayFares;
        
        return $this;
    }
    /**
     * Get ProhibitMaxStayFares value
     * @return bool|null
     */
    public function getProhibitMaxStayFares(): ?bool
    {
        return $this->ProhibitMaxStayFares;
    }
    /**
     * Set ProhibitMaxStayFares value
     * @param bool $prohibitMaxStayFares
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitMaxStayFares(?bool $prohibitMaxStayFares = false): self
    {
        $this->ProhibitMaxStayFares = $prohibitMaxStayFares;
        
        return $this;
    }
    /**
     * Get CurrencyType value
     * @return string|null
     */
    public function getCurrencyType(): ?string
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param string $currencyType
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setCurrencyType(?string $currencyType = null): self
    {
        $this->CurrencyType = $currencyType;
        
        return $this;
    }
    /**
     * Get ProhibitAdvancePurchaseFares value
     * @return bool|null
     */
    public function getProhibitAdvancePurchaseFares(): ?bool
    {
        return $this->ProhibitAdvancePurchaseFares;
    }
    /**
     * Set ProhibitAdvancePurchaseFares value
     * @param bool $prohibitAdvancePurchaseFares
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares(?bool $prohibitAdvancePurchaseFares = false): self
    {
        $this->ProhibitAdvancePurchaseFares = $prohibitAdvancePurchaseFares;
        
        return $this;
    }
    /**
     * Get ProhibitNonRefundableFares value
     * @return bool|null
     */
    public function getProhibitNonRefundableFares(): ?bool
    {
        return $this->ProhibitNonRefundableFares;
    }
    /**
     * Set ProhibitNonRefundableFares value
     * @param bool $prohibitNonRefundableFares
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitNonRefundableFares(?bool $prohibitNonRefundableFares = false): self
    {
        $this->ProhibitNonRefundableFares = $prohibitNonRefundableFares;
        
        return $this;
    }
    /**
     * Get ProhibitRestrictedFares value
     * @return bool|null
     */
    public function getProhibitRestrictedFares(): ?bool
    {
        return $this->ProhibitRestrictedFares;
    }
    /**
     * Set ProhibitRestrictedFares value
     * @param bool $prohibitRestrictedFares
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitRestrictedFares(?bool $prohibitRestrictedFares = false): self
    {
        $this->ProhibitRestrictedFares = $prohibitRestrictedFares;
        
        return $this;
    }
    /**
     * Get FaresIndicator value
     * @return string|null
     */
    public function getFaresIndicator(): ?string
    {
        return $this->FaresIndicator;
    }
    /**
     * Set FaresIndicator value
     * @param string $faresIndicator
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setFaresIndicator(?string $faresIndicator = null): self
    {
        $this->FaresIndicator = $faresIndicator;
        
        return $this;
    }
    /**
     * Get FiledCurrency value
     * @return string|null
     */
    public function getFiledCurrency(): ?string
    {
        return $this->FiledCurrency;
    }
    /**
     * Set FiledCurrency value
     * @param string $filedCurrency
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        $this->FiledCurrency = $filedCurrency;
        
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
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get OverrideCarrier value
     * @return string|null
     */
    public function getOverrideCarrier(): ?string
    {
        return $this->OverrideCarrier;
    }
    /**
     * Set OverrideCarrier value
     * @param string $overrideCarrier
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setOverrideCarrier(?string $overrideCarrier = null): self
    {
        $this->OverrideCarrier = $overrideCarrier;
        
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
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setETicketability(?string $eTicketability = null): self
    {
        $this->ETicketability = $eTicketability;
        
        return $this;
    }
    /**
     * Get AccountCodeFaresOnly value
     * @return bool|null
     */
    public function getAccountCodeFaresOnly(): ?bool
    {
        return $this->AccountCodeFaresOnly;
    }
    /**
     * Set AccountCodeFaresOnly value
     * @param bool $accountCodeFaresOnly
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setAccountCodeFaresOnly(?bool $accountCodeFaresOnly = null): self
    {
        $this->AccountCodeFaresOnly = $accountCodeFaresOnly;
        
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
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProhibitNonExchangeableFares value
     * @return bool|null
     */
    public function getProhibitNonExchangeableFares(): ?bool
    {
        return $this->ProhibitNonExchangeableFares;
    }
    /**
     * Set ProhibitNonExchangeableFares value
     * @param bool $prohibitNonExchangeableFares
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitNonExchangeableFares(?bool $prohibitNonExchangeableFares = false): self
    {
        $this->ProhibitNonExchangeableFares = $prohibitNonExchangeableFares;
        
        return $this;
    }
    /**
     * Get ForceSegmentSelect value
     * @return bool|null
     */
    public function getForceSegmentSelect(): ?bool
    {
        return $this->ForceSegmentSelect;
    }
    /**
     * Set ForceSegmentSelect value
     * @param bool $forceSegmentSelect
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setForceSegmentSelect(?bool $forceSegmentSelect = false): self
    {
        $this->ForceSegmentSelect = $forceSegmentSelect;
        
        return $this;
    }
    /**
     * Get InventoryRequestType value
     * @return string|null
     */
    public function getInventoryRequestType(): ?string
    {
        return $this->InventoryRequestType;
    }
    /**
     * Set InventoryRequestType value
     * @param string $inventoryRequestType
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setInventoryRequestType(?string $inventoryRequestType = null): self
    {
        $this->InventoryRequestType = $inventoryRequestType;
        
        return $this;
    }
    /**
     * Get OneWayShop value
     * @return bool|null
     */
    public function getOneWayShop(): ?bool
    {
        return $this->OneWayShop;
    }
    /**
     * Set OneWayShop value
     * @param bool $oneWayShop
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setOneWayShop(?bool $oneWayShop = false): self
    {
        $this->OneWayShop = $oneWayShop;
        
        return $this;
    }
    /**
     * Get ProhibitUnbundledFareTypes value
     * @return bool|null
     */
    public function getProhibitUnbundledFareTypes(): ?bool
    {
        return $this->ProhibitUnbundledFareTypes;
    }
    /**
     * Set ProhibitUnbundledFareTypes value
     * @param bool $prohibitUnbundledFareTypes
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setProhibitUnbundledFareTypes(?bool $prohibitUnbundledFareTypes = null): self
    {
        $this->ProhibitUnbundledFareTypes = $prohibitUnbundledFareTypes;
        
        return $this;
    }
    /**
     * Get ReturnServices value
     * @return bool|null
     */
    public function getReturnServices(): ?bool
    {
        return $this->ReturnServices;
    }
    /**
     * Set ReturnServices value
     * @param bool $returnServices
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setReturnServices(?bool $returnServices = false): self
    {
        $this->ReturnServices = $returnServices;
        
        return $this;
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId(): ?string
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setChannelId(?string $channelId = null): self
    {
        $this->ChannelId = $channelId;
        
        return $this;
    }
    /**
     * Get ReturnFareAttributes value
     * @return bool|null
     */
    public function getReturnFareAttributes(): ?bool
    {
        return $this->ReturnFareAttributes;
    }
    /**
     * Set ReturnFareAttributes value
     * @param bool $returnFareAttributes
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setReturnFareAttributes(?bool $returnFareAttributes = false): self
    {
        $this->ReturnFareAttributes = $returnFareAttributes;
        
        return $this;
    }
    /**
     * Get SellCheck value
     * @return bool|null
     */
    public function getSellCheck(): ?bool
    {
        return $this->SellCheck;
    }
    /**
     * Set SellCheck value
     * @param bool $sellCheck
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setSellCheck(?bool $sellCheck = false): self
    {
        $this->SellCheck = $sellCheck;
        
        return $this;
    }
    /**
     * Get ReturnFailedSegments value
     * @return bool|null
     */
    public function getReturnFailedSegments(): ?bool
    {
        return $this->ReturnFailedSegments;
    }
    /**
     * Set ReturnFailedSegments value
     * @param bool $returnFailedSegments
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setReturnFailedSegments(?bool $returnFailedSegments = false): self
    {
        $this->ReturnFailedSegments = $returnFailedSegments;
        
        return $this;
    }
    /**
     * Get SellCity value
     * @return string|null
     */
    public function getSellCity(): ?string
    {
        return $this->SellCity;
    }
    /**
     * Set SellCity value
     * @param string $sellCity
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setSellCity(?string $sellCity = null): self
    {
        $this->SellCity = $sellCity;
        
        return $this;
    }
    /**
     * Get TicketingCity value
     * @return string|null
     */
    public function getTicketingCity(): ?string
    {
        return $this->TicketingCity;
    }
    /**
     * Set TicketingCity value
     * @param string $ticketingCity
     * @return \Travelport\Air\StructType\AirPricingModifiers
     */
    public function setTicketingCity(?string $ticketingCity = null): self
    {
        $this->TicketingCity = $ticketingCity;
        
        return $this;
    }
}
