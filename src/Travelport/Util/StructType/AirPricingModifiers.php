<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\ProhibitedRuleCategories|null
     */
    protected ?\Travelport\Util\StructType\ProhibitedRuleCategories $ProhibitedRuleCategories = null;
    /**
     * The AccountCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\AccountCodes|null
     */
    protected ?\Travelport\Util\StructType\AccountCodes $AccountCodes = null;
    /**
     * The PermittedCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCabins
     * @var \Travelport\Util\StructType\PermittedCabins|null
     */
    protected ?\Travelport\Util\StructType\PermittedCabins $PermittedCabins = null;
    /**
     * The ContractCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ContractCodes|null
     */
    protected ?\Travelport\Util\StructType\ContractCodes $ContractCodes = null;
    /**
     * The ExemptTaxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ExemptTaxes
     * @var \Travelport\Util\StructType\ExemptTaxes|null
     */
    protected ?\Travelport\Util\StructType\ExemptTaxes $ExemptTaxes = null;
    /**
     * The PenaltyFareInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PenaltyFareInformation
     * @var \Travelport\Util\StructType\PenaltyFareInformation|null
     */
    protected ?\Travelport\Util\StructType\PenaltyFareInformation $PenaltyFareInformation = null;
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:DiscountCard
     * @var \Travelport\Util\StructType\DiscountCard[]
     */
    protected ?array $DiscountCard = null;
    /**
     * The PromoCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PromoCodes|null
     */
    protected ?\Travelport\Util\StructType\PromoCodes $PromoCodes = null;
    /**
     * The ManualFareAdjustment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ManualFareAdjustment
     * @var \Travelport\Util\StructType\ManualFareAdjustment[]
     */
    protected ?array $ManualFareAdjustment = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Util\StructType\PointOfSale|null
     */
    protected ?\Travelport\Util\StructType\PointOfSale $PointOfSale = null;
    /**
     * The BrandModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BrandModifiers
     * @var \Travelport\Util\StructType\BrandModifiers|null
     */
    protected ?\Travelport\Util\StructType\BrandModifiers $BrandModifiers = null;
    /**
     * The MultiGDSSearchIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MultiGDSSearchIndicator
     * @var \Travelport\Util\StructType\MultiGDSSearchIndicator[]
     */
    protected ?array $MultiGDSSearchIndicator = null;
    /**
     * The PreferredCabins
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: PreferredCabins
     * @var \Travelport\Util\StructType\PreferredCabins[]
     */
    protected ?array $PreferredCabins = null;
    /**
     * The ProhibitMinStayFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitMinStayFares = null;
    /**
     * The ProhibitMaxStayFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitMaxStayFares = null;
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyType = null;
    /**
     * The ProhibitAdvancePurchaseFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitAdvancePurchaseFares = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ProhibitRestrictedFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitRestrictedFares = null;
    /**
     * The FaresIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether only public fares should be returned or specific type of private fares
     * - use: optional
     * @var string|null
     */
    protected ?string $FaresIndicator = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency in which Fares/Prices will be filed if supported by the supplier else approximated to. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $FiledCurrency = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * The OverrideCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $OverrideCarrier = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: Request a search based on whether only E-ticketable fares are required.
     * - use: optional
     * @var string|null
     */
    protected ?string $ETicketability = null;
    /**
     * The AccountCodeFaresOnly
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the private fares returned should be restricted to only those specific to the input account code and contract code.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AccountCodeFaresOnly = null;
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
     * The ProhibitNonExchangeableFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitNonExchangeableFares = null;
    /**
     * The ForceSegmentSelect
     * Meta information extracted from the WSDL
     * - documentation: This indicator allows agent to force segment select option in host while selecting all air segments to store price on a PNR. This is relevent only when agent selects all air segmnets to price. if agent selects specific segments to
     * price then this attribute will be ignored by the system. This is currently used by Worldspan only.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ForceSegmentSelect = null;
    /**
     * The InventoryRequestType
     * Meta information extracted from the WSDL
     * - documentation: This allows user to make request for a particular source of inventory for pricing modifier purposes.
     * - use: optional
     * @var string|null
     */
    protected ?string $InventoryRequestType = null;
    /**
     * The OneWayShop
     * Meta information extracted from the WSDL
     * - documentation: Via this attribute one way shop can be requested. Applicable provider is 1G
     * - default: false
     * @var bool|null
     */
    protected ?bool $OneWayShop = null;
    /**
     * The ProhibitUnbundledFareTypes
     * Meta information extracted from the WSDL
     * - documentation: A "True" value wiill remove fares with EOU and ERU fare types from consideration. A "False" value is the same as no value. Default is no value. Applicable providers: 1P/1J/1G/1V
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitUnbundledFareTypes = null;
    /**
     * The ReturnServices
     * Meta information extracted from the WSDL
     * - documentation: When set to false, ATPCO filed Optional Services will not be returned. Default is false. Provider: 1G, 1V, 1P, 1J
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnServices = null;
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ChannelId = null;
    /**
     * The ReturnFareAttributes
     * Meta information extracted from the WSDL
     * - documentation: Returns attributes that are associated to a fare
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnFareAttributes = null;
    /**
     * The SellCheck
     * Meta information extracted from the WSDL
     * - documentation: Checks if the segment is bookable before pricing
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SellCheck = null;
    /**
     * The ReturnFailedSegments
     * Meta information extracted from the WSDL
     * - documentation: If "true", returns failed segments information.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnFailedSegments = null;
    /**
     * The SellCity
     * Meta information extracted from the WSDL
     * - documentation: City Code identifying where the ticket is to be sold. | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $SellCity = null;
    /**
     * The TicketingCity
     * Meta information extracted from the WSDL
     * - documentation: City Code identifying where the ticket will be issued. | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingCity = null;
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
     * @param \Travelport\Util\StructType\ProhibitedRuleCategories $prohibitedRuleCategories
     * @param \Travelport\Util\StructType\AccountCodes $accountCodes
     * @param \Travelport\Util\StructType\PermittedCabins $permittedCabins
     * @param \Travelport\Util\StructType\ContractCodes $contractCodes
     * @param \Travelport\Util\StructType\ExemptTaxes $exemptTaxes
     * @param \Travelport\Util\StructType\PenaltyFareInformation $penaltyFareInformation
     * @param \Travelport\Util\StructType\DiscountCard[] $discountCard
     * @param \Travelport\Util\StructType\PromoCodes $promoCodes
     * @param \Travelport\Util\StructType\ManualFareAdjustment[] $manualFareAdjustment
     * @param \Travelport\Util\StructType\PointOfSale $pointOfSale
     * @param \Travelport\Util\StructType\BrandModifiers $brandModifiers
     * @param \Travelport\Util\StructType\MultiGDSSearchIndicator[] $multiGDSSearchIndicator
     * @param \Travelport\Util\StructType\PreferredCabins[] $preferredCabins
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
    public function __construct(?\Travelport\Util\StructType\ProhibitedRuleCategories $prohibitedRuleCategories = null, ?\Travelport\Util\StructType\AccountCodes $accountCodes = null, ?\Travelport\Util\StructType\PermittedCabins $permittedCabins = null, ?\Travelport\Util\StructType\ContractCodes $contractCodes = null, ?\Travelport\Util\StructType\ExemptTaxes $exemptTaxes = null, ?\Travelport\Util\StructType\PenaltyFareInformation $penaltyFareInformation = null, ?array $discountCard = null, ?\Travelport\Util\StructType\PromoCodes $promoCodes = null, ?array $manualFareAdjustment = null, ?\Travelport\Util\StructType\PointOfSale $pointOfSale = null, ?\Travelport\Util\StructType\BrandModifiers $brandModifiers = null, ?array $multiGDSSearchIndicator = null, ?array $preferredCabins = null, ?bool $prohibitMinStayFares = false, ?bool $prohibitMaxStayFares = false, ?string $currencyType = null, ?bool $prohibitAdvancePurchaseFares = false, ?bool $prohibitNonRefundableFares = false, ?bool $prohibitRestrictedFares = false, ?string $faresIndicator = null, ?string $filedCurrency = null, ?string $platingCarrier = null, ?string $overrideCarrier = null, ?string $eTicketability = null, ?bool $accountCodeFaresOnly = null, ?string $key = null, ?bool $prohibitNonExchangeableFares = false, ?bool $forceSegmentSelect = false, ?string $inventoryRequestType = null, ?bool $oneWayShop = false, ?bool $prohibitUnbundledFareTypes = null, ?bool $returnServices = false, ?string $channelId = null, ?bool $returnFareAttributes = false, ?bool $sellCheck = false, ?bool $returnFailedSegments = false, ?string $sellCity = null, ?string $ticketingCity = null)
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
     * @return \Travelport\Util\StructType\ProhibitedRuleCategories|null
     */
    public function getProhibitedRuleCategories(): ?\Travelport\Util\StructType\ProhibitedRuleCategories
    {
        return $this->ProhibitedRuleCategories;
    }
    /**
     * Set ProhibitedRuleCategories value
     * @param \Travelport\Util\StructType\ProhibitedRuleCategories $prohibitedRuleCategories
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitedRuleCategories(?\Travelport\Util\StructType\ProhibitedRuleCategories $prohibitedRuleCategories = null): self
    {
        $this->ProhibitedRuleCategories = $prohibitedRuleCategories;
        
        return $this;
    }
    /**
     * Get AccountCodes value
     * @return \Travelport\Util\StructType\AccountCodes|null
     */
    public function getAccountCodes(): ?\Travelport\Util\StructType\AccountCodes
    {
        return $this->AccountCodes;
    }
    /**
     * Set AccountCodes value
     * @param \Travelport\Util\StructType\AccountCodes $accountCodes
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setAccountCodes(?\Travelport\Util\StructType\AccountCodes $accountCodes = null): self
    {
        $this->AccountCodes = $accountCodes;
        
        return $this;
    }
    /**
     * Get PermittedCabins value
     * @return \Travelport\Util\StructType\PermittedCabins|null
     */
    public function getPermittedCabins(): ?\Travelport\Util\StructType\PermittedCabins
    {
        return $this->PermittedCabins;
    }
    /**
     * Set PermittedCabins value
     * @param \Travelport\Util\StructType\PermittedCabins $permittedCabins
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setPermittedCabins(?\Travelport\Util\StructType\PermittedCabins $permittedCabins = null): self
    {
        $this->PermittedCabins = $permittedCabins;
        
        return $this;
    }
    /**
     * Get ContractCodes value
     * @return \Travelport\Util\StructType\ContractCodes|null
     */
    public function getContractCodes(): ?\Travelport\Util\StructType\ContractCodes
    {
        return $this->ContractCodes;
    }
    /**
     * Set ContractCodes value
     * @param \Travelport\Util\StructType\ContractCodes $contractCodes
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setContractCodes(?\Travelport\Util\StructType\ContractCodes $contractCodes = null): self
    {
        $this->ContractCodes = $contractCodes;
        
        return $this;
    }
    /**
     * Get ExemptTaxes value
     * @return \Travelport\Util\StructType\ExemptTaxes|null
     */
    public function getExemptTaxes(): ?\Travelport\Util\StructType\ExemptTaxes
    {
        return $this->ExemptTaxes;
    }
    /**
     * Set ExemptTaxes value
     * @param \Travelport\Util\StructType\ExemptTaxes $exemptTaxes
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setExemptTaxes(?\Travelport\Util\StructType\ExemptTaxes $exemptTaxes = null): self
    {
        $this->ExemptTaxes = $exemptTaxes;
        
        return $this;
    }
    /**
     * Get PenaltyFareInformation value
     * @return \Travelport\Util\StructType\PenaltyFareInformation|null
     */
    public function getPenaltyFareInformation(): ?\Travelport\Util\StructType\PenaltyFareInformation
    {
        return $this->PenaltyFareInformation;
    }
    /**
     * Set PenaltyFareInformation value
     * @param \Travelport\Util\StructType\PenaltyFareInformation $penaltyFareInformation
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setPenaltyFareInformation(?\Travelport\Util\StructType\PenaltyFareInformation $penaltyFareInformation = null): self
    {
        $this->PenaltyFareInformation = $penaltyFareInformation;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Util\StructType\DiscountCard[]
     */
    public function getDiscountCard(): ?array
    {
        return $this->DiscountCard;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountCardForArrayConstraintsFromSetDiscountCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingModifiersDiscountCardItem) {
            // validation for constraint: itemType
            if (!$airPricingModifiersDiscountCardItem instanceof \Travelport\Util\StructType\DiscountCard) {
                $invalidValues[] = is_object($airPricingModifiersDiscountCardItem) ? get_class($airPricingModifiersDiscountCardItem) : sprintf('%s(%s)', gettype($airPricingModifiersDiscountCardItem), var_export($airPricingModifiersDiscountCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountCard property can only contain items of type \Travelport\Util\StructType\DiscountCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\DiscountCard[] $discountCard
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setDiscountCard(?array $discountCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($discountCardArrayErrorMessage = self::validateDiscountCardForArrayConstraintsFromSetDiscountCard($discountCard))) {
            throw new InvalidArgumentException($discountCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($discountCard) && count($discountCard) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($discountCard)), __LINE__);
        }
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\DiscountCard $item
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function addToDiscountCard(\Travelport\Util\StructType\DiscountCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\DiscountCard) {
            throw new InvalidArgumentException(sprintf('The DiscountCard property can only contain items of type \Travelport\Util\StructType\DiscountCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DiscountCard) && count($this->DiscountCard) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DiscountCard)), __LINE__);
        }
        $this->DiscountCard[] = $item;
        
        return $this;
    }
    /**
     * Get PromoCodes value
     * @return \Travelport\Util\StructType\PromoCodes|null
     */
    public function getPromoCodes(): ?\Travelport\Util\StructType\PromoCodes
    {
        return $this->PromoCodes;
    }
    /**
     * Set PromoCodes value
     * @param \Travelport\Util\StructType\PromoCodes $promoCodes
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setPromoCodes(?\Travelport\Util\StructType\PromoCodes $promoCodes = null): self
    {
        $this->PromoCodes = $promoCodes;
        
        return $this;
    }
    /**
     * Get ManualFareAdjustment value
     * @return \Travelport\Util\StructType\ManualFareAdjustment[]
     */
    public function getManualFareAdjustment(): ?array
    {
        return $this->ManualFareAdjustment;
    }
    /**
     * This method is responsible for validating the values passed to the setManualFareAdjustment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManualFareAdjustment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManualFareAdjustmentForArrayConstraintsFromSetManualFareAdjustment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingModifiersManualFareAdjustmentItem) {
            // validation for constraint: itemType
            if (!$airPricingModifiersManualFareAdjustmentItem instanceof \Travelport\Util\StructType\ManualFareAdjustment) {
                $invalidValues[] = is_object($airPricingModifiersManualFareAdjustmentItem) ? get_class($airPricingModifiersManualFareAdjustmentItem) : sprintf('%s(%s)', gettype($airPricingModifiersManualFareAdjustmentItem), var_export($airPricingModifiersManualFareAdjustmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ManualFareAdjustment property can only contain items of type \Travelport\Util\StructType\ManualFareAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ManualFareAdjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ManualFareAdjustment[] $manualFareAdjustment
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setManualFareAdjustment(?array $manualFareAdjustment = null): self
    {
        // validation for constraint: array
        if ('' !== ($manualFareAdjustmentArrayErrorMessage = self::validateManualFareAdjustmentForArrayConstraintsFromSetManualFareAdjustment($manualFareAdjustment))) {
            throw new InvalidArgumentException($manualFareAdjustmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($manualFareAdjustment) && count($manualFareAdjustment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($manualFareAdjustment)), __LINE__);
        }
        $this->ManualFareAdjustment = $manualFareAdjustment;
        
        return $this;
    }
    /**
     * Add item to ManualFareAdjustment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ManualFareAdjustment $item
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function addToManualFareAdjustment(\Travelport\Util\StructType\ManualFareAdjustment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ManualFareAdjustment) {
            throw new InvalidArgumentException(sprintf('The ManualFareAdjustment property can only contain items of type \Travelport\Util\StructType\ManualFareAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ManualFareAdjustment) && count($this->ManualFareAdjustment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ManualFareAdjustment)), __LINE__);
        }
        $this->ManualFareAdjustment[] = $item;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Util\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\Util\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Util\StructType\PointOfSale $pointOfSale
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setPointOfSale(?\Travelport\Util\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Get BrandModifiers value
     * @return \Travelport\Util\StructType\BrandModifiers|null
     */
    public function getBrandModifiers(): ?\Travelport\Util\StructType\BrandModifiers
    {
        return $this->BrandModifiers;
    }
    /**
     * Set BrandModifiers value
     * @param \Travelport\Util\StructType\BrandModifiers $brandModifiers
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setBrandModifiers(?\Travelport\Util\StructType\BrandModifiers $brandModifiers = null): self
    {
        $this->BrandModifiers = $brandModifiers;
        
        return $this;
    }
    /**
     * Get MultiGDSSearchIndicator value
     * @return \Travelport\Util\StructType\MultiGDSSearchIndicator[]
     */
    public function getMultiGDSSearchIndicator(): ?array
    {
        return $this->MultiGDSSearchIndicator;
    }
    /**
     * This method is responsible for validating the values passed to the setMultiGDSSearchIndicator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMultiGDSSearchIndicator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMultiGDSSearchIndicatorForArrayConstraintsFromSetMultiGDSSearchIndicator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingModifiersMultiGDSSearchIndicatorItem) {
            // validation for constraint: itemType
            if (!$airPricingModifiersMultiGDSSearchIndicatorItem instanceof \Travelport\Util\StructType\MultiGDSSearchIndicator) {
                $invalidValues[] = is_object($airPricingModifiersMultiGDSSearchIndicatorItem) ? get_class($airPricingModifiersMultiGDSSearchIndicatorItem) : sprintf('%s(%s)', gettype($airPricingModifiersMultiGDSSearchIndicatorItem), var_export($airPricingModifiersMultiGDSSearchIndicatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MultiGDSSearchIndicator property can only contain items of type \Travelport\Util\StructType\MultiGDSSearchIndicator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MultiGDSSearchIndicator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MultiGDSSearchIndicator[] $multiGDSSearchIndicator
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setMultiGDSSearchIndicator(?array $multiGDSSearchIndicator = null): self
    {
        // validation for constraint: array
        if ('' !== ($multiGDSSearchIndicatorArrayErrorMessage = self::validateMultiGDSSearchIndicatorForArrayConstraintsFromSetMultiGDSSearchIndicator($multiGDSSearchIndicator))) {
            throw new InvalidArgumentException($multiGDSSearchIndicatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($multiGDSSearchIndicator) && count($multiGDSSearchIndicator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($multiGDSSearchIndicator)), __LINE__);
        }
        $this->MultiGDSSearchIndicator = $multiGDSSearchIndicator;
        
        return $this;
    }
    /**
     * Add item to MultiGDSSearchIndicator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MultiGDSSearchIndicator $item
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function addToMultiGDSSearchIndicator(\Travelport\Util\StructType\MultiGDSSearchIndicator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\MultiGDSSearchIndicator) {
            throw new InvalidArgumentException(sprintf('The MultiGDSSearchIndicator property can only contain items of type \Travelport\Util\StructType\MultiGDSSearchIndicator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MultiGDSSearchIndicator) && count($this->MultiGDSSearchIndicator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MultiGDSSearchIndicator)), __LINE__);
        }
        $this->MultiGDSSearchIndicator[] = $item;
        
        return $this;
    }
    /**
     * Get PreferredCabins value
     * @return \Travelport\Util\StructType\PreferredCabins[]
     */
    public function getPreferredCabins(): ?array
    {
        return $this->PreferredCabins;
    }
    /**
     * This method is responsible for validating the values passed to the setPreferredCabins method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreferredCabins method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferredCabinsForArrayConstraintsFromSetPreferredCabins(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingModifiersPreferredCabinsItem) {
            // validation for constraint: itemType
            if (!$airPricingModifiersPreferredCabinsItem instanceof \Travelport\Util\StructType\PreferredCabins) {
                $invalidValues[] = is_object($airPricingModifiersPreferredCabinsItem) ? get_class($airPricingModifiersPreferredCabinsItem) : sprintf('%s(%s)', gettype($airPricingModifiersPreferredCabinsItem), var_export($airPricingModifiersPreferredCabinsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PreferredCabins property can only contain items of type \Travelport\Util\StructType\PreferredCabins, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PreferredCabins value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PreferredCabins[] $preferredCabins
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setPreferredCabins(?array $preferredCabins = null): self
    {
        // validation for constraint: array
        if ('' !== ($preferredCabinsArrayErrorMessage = self::validatePreferredCabinsForArrayConstraintsFromSetPreferredCabins($preferredCabins))) {
            throw new InvalidArgumentException($preferredCabinsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($preferredCabins) && count($preferredCabins) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($preferredCabins)), __LINE__);
        }
        $this->PreferredCabins = $preferredCabins;
        
        return $this;
    }
    /**
     * Add item to PreferredCabins value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PreferredCabins $item
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function addToPreferredCabins(\Travelport\Util\StructType\PreferredCabins $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PreferredCabins) {
            throw new InvalidArgumentException(sprintf('The PreferredCabins property can only contain items of type \Travelport\Util\StructType\PreferredCabins, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->PreferredCabins) && count($this->PreferredCabins) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->PreferredCabins)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitMinStayFares(?bool $prohibitMinStayFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitMinStayFares) && !is_bool($prohibitMinStayFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitMinStayFares, true), gettype($prohibitMinStayFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitMaxStayFares(?bool $prohibitMaxStayFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitMaxStayFares) && !is_bool($prohibitMaxStayFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitMaxStayFares, true), gettype($prohibitMaxStayFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setCurrencyType(?string $currencyType = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyType) && !is_string($currencyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyType, true), gettype($currencyType)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currencyType) && mb_strlen((string) $currencyType) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currencyType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares(?bool $prohibitAdvancePurchaseFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitAdvancePurchaseFares) && !is_bool($prohibitAdvancePurchaseFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitAdvancePurchaseFares, true), gettype($prohibitAdvancePurchaseFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitNonRefundableFares(?bool $prohibitNonRefundableFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitNonRefundableFares) && !is_bool($prohibitNonRefundableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitNonRefundableFares, true), gettype($prohibitNonRefundableFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitRestrictedFares(?bool $prohibitRestrictedFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitRestrictedFares) && !is_bool($prohibitRestrictedFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitRestrictedFares, true), gettype($prohibitRestrictedFares)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeFaresIndicator::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFaresIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $faresIndicator
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setFaresIndicator(?string $faresIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFaresIndicator::valueIsValid($faresIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFaresIndicator', is_array($faresIndicator) ? implode(', ', $faresIndicator) : var_export($faresIndicator, true), implode(', ', \Travelport\Util\EnumType\TypeFaresIndicator::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($filedCurrency) && !is_string($filedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filedCurrency, true), gettype($filedCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($filedCurrency) && mb_strlen((string) $filedCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $filedCurrency)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setOverrideCarrier(?string $overrideCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($overrideCarrier) && !is_string($overrideCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($overrideCarrier, true), gettype($overrideCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($overrideCarrier) && mb_strlen((string) $overrideCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $overrideCarrier)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeEticketability::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeEticketability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eTicketability
     * @return \Travelport\Util\StructType\AirPricingModifiers
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setAccountCodeFaresOnly(?bool $accountCodeFaresOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accountCodeFaresOnly) && !is_bool($accountCodeFaresOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accountCodeFaresOnly, true), gettype($accountCodeFaresOnly)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitNonExchangeableFares(?bool $prohibitNonExchangeableFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitNonExchangeableFares) && !is_bool($prohibitNonExchangeableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitNonExchangeableFares, true), gettype($prohibitNonExchangeableFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setForceSegmentSelect(?bool $forceSegmentSelect = false): self
    {
        // validation for constraint: boolean
        if (!is_null($forceSegmentSelect) && !is_bool($forceSegmentSelect)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceSegmentSelect, true), gettype($forceSegmentSelect)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeInventoryRequest::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeInventoryRequest::getValidValues()
     * @throws InvalidArgumentException
     * @param string $inventoryRequestType
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setInventoryRequestType(?string $inventoryRequestType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeInventoryRequest::valueIsValid($inventoryRequestType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeInventoryRequest', is_array($inventoryRequestType) ? implode(', ', $inventoryRequestType) : var_export($inventoryRequestType, true), implode(', ', \Travelport\Util\EnumType\TypeInventoryRequest::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setOneWayShop(?bool $oneWayShop = false): self
    {
        // validation for constraint: boolean
        if (!is_null($oneWayShop) && !is_bool($oneWayShop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oneWayShop, true), gettype($oneWayShop)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setProhibitUnbundledFareTypes(?bool $prohibitUnbundledFareTypes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitUnbundledFareTypes) && !is_bool($prohibitUnbundledFareTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitUnbundledFareTypes, true), gettype($prohibitUnbundledFareTypes)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setReturnServices(?bool $returnServices = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnServices) && !is_bool($returnServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnServices, true), gettype($returnServices)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setChannelId(?string $channelId = null): self
    {
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelId, true), gettype($channelId)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($channelId) && mb_strlen((string) $channelId) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $channelId)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($channelId) && mb_strlen((string) $channelId) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $channelId)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setReturnFareAttributes(?bool $returnFareAttributes = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnFareAttributes) && !is_bool($returnFareAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFareAttributes, true), gettype($returnFareAttributes)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setSellCheck(?bool $sellCheck = false): self
    {
        // validation for constraint: boolean
        if (!is_null($sellCheck) && !is_bool($sellCheck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellCheck, true), gettype($sellCheck)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setReturnFailedSegments(?bool $returnFailedSegments = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnFailedSegments) && !is_bool($returnFailedSegments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFailedSegments, true), gettype($returnFailedSegments)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setSellCity(?string $sellCity = null): self
    {
        // validation for constraint: string
        if (!is_null($sellCity) && !is_string($sellCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellCity, true), gettype($sellCity)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($sellCity) && mb_strlen((string) $sellCity) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $sellCity)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirPricingModifiers
     */
    public function setTicketingCity(?string $ticketingCity = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingCity) && !is_string($ticketingCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingCity, true), gettype($ticketingCity)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($ticketingCity) && mb_strlen((string) $ticketingCity) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $ticketingCity)), __LINE__);
        }
        $this->TicketingCity = $ticketingCity;
        
        return $this;
    }
}
