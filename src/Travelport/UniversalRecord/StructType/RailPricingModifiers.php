<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailPricingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Discount request for rail. | Search flexibiity criteria .
 * @subpackage Structs
 */
class RailPricingModifiers extends AbstractStructBase
{
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:DiscountCard
     * @var \Travelport\UniversalRecord\StructType\DiscountCard[]
     */
    public ?array $DiscountCard = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether it prohibits NonRefundable Fares.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ProhibitNonExchangeableFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether it prohibits NonExchangeable Fares .
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitNonExchangeableFares = null;
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
     * The RailSearchType
     * Meta information extracted from the WSDL
     * - documentation: RailSearchType options are "All Fares" "Fastest" "Lowest Fare" "One Fare Per Class" "Seasons". Supported by NTV/VF only for "All Fares" "Lowest Fare" and "One Fare Per Class". Provider : RCH
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RailSearchType = null;
    /**
     * Constructor method for RailPricingModifiers
     * @uses RailPricingModifiers::setDiscountCard()
     * @uses RailPricingModifiers::setProhibitNonRefundableFares()
     * @uses RailPricingModifiers::setProhibitNonExchangeableFares()
     * @uses RailPricingModifiers::setCurrencyType()
     * @uses RailPricingModifiers::setRailSearchType()
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @param bool $prohibitNonRefundableFares
     * @param bool $prohibitNonExchangeableFares
     * @param string $currencyType
     * @param string $railSearchType
     */
    public function __construct(?array $discountCard = null, ?bool $prohibitNonRefundableFares = false, ?bool $prohibitNonExchangeableFares = false, ?string $currencyType = null, ?string $railSearchType = null)
    {
        $this
            ->setDiscountCard($discountCard)
            ->setProhibitNonRefundableFares($prohibitNonRefundableFares)
            ->setProhibitNonExchangeableFares($prohibitNonExchangeableFares)
            ->setCurrencyType($currencyType)
            ->setRailSearchType($railSearchType);
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\UniversalRecord\StructType\DiscountCard[]
     */
    public function getDiscountCard(): ?array
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function setDiscountCard(?array $discountCard = null): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DiscountCard $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function addToDiscountCard(\Travelport\UniversalRecord\StructType\DiscountCard $item): self
    {
        $this->DiscountCard[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function setProhibitNonRefundableFares(?bool $prohibitNonRefundableFares = false): self
    {
        $this->ProhibitNonRefundableFares = $prohibitNonRefundableFares;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function setProhibitNonExchangeableFares(?bool $prohibitNonExchangeableFares = false): self
    {
        $this->ProhibitNonExchangeableFares = $prohibitNonExchangeableFares;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function setCurrencyType(?string $currencyType = null): self
    {
        $this->CurrencyType = $currencyType;
        
        return $this;
    }
    /**
     * Get RailSearchType value
     * @return string|null
     */
    public function getRailSearchType(): ?string
    {
        return $this->RailSearchType;
    }
    /**
     * Set RailSearchType value
     * @param string $railSearchType
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function setRailSearchType(?string $railSearchType = null): self
    {
        $this->RailSearchType = $railSearchType;
        
        return $this;
    }
}
