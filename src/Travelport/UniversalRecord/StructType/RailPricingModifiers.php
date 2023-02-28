<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $DiscountCard = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether it prohibits NonRefundable Fares.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ProhibitNonExchangeableFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether it prohibits NonExchangeable Fares .
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitNonExchangeableFares = null;
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
     * The RailSearchType
     * Meta information extracted from the WSDL
     * - documentation: RailSearchType options are "All Fares" "Fastest" "Lowest Fare" "One Fare Per Class" "Seasons". Supported by NTV/VF only for "All Fares" "Lowest Fare" and "One Fare Per Class". Provider : RCH
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RailSearchType = null;
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
     * This method is responsible for validating the value(s) passed to the setDiscountCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountCardForArrayConstraintFromSetDiscountCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railPricingModifiersDiscountCardItem) {
            // validation for constraint: itemType
            if (!$railPricingModifiersDiscountCardItem instanceof \Travelport\UniversalRecord\StructType\DiscountCard) {
                $invalidValues[] = is_object($railPricingModifiersDiscountCardItem) ? get_class($railPricingModifiersDiscountCardItem) : sprintf('%s(%s)', gettype($railPricingModifiersDiscountCardItem), var_export($railPricingModifiersDiscountCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountCard property can only contain items of type \Travelport\UniversalRecord\StructType\DiscountCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function setDiscountCard(?array $discountCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($discountCardArrayErrorMessage = self::validateDiscountCardForArrayConstraintFromSetDiscountCard($discountCard))) {
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
     * @param \Travelport\UniversalRecord\StructType\DiscountCard $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingModifiers
     */
    public function addToDiscountCard(\Travelport\UniversalRecord\StructType\DiscountCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DiscountCard) {
            throw new InvalidArgumentException(sprintf('The DiscountCard property can only contain items of type \Travelport\UniversalRecord\StructType\DiscountCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DiscountCard) && count($this->DiscountCard) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DiscountCard)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($prohibitNonRefundableFares) && !is_bool($prohibitNonRefundableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitNonRefundableFares, true), gettype($prohibitNonRefundableFares)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($prohibitNonExchangeableFares) && !is_bool($prohibitNonExchangeableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitNonExchangeableFares, true), gettype($prohibitNonExchangeableFares)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($railSearchType) && !is_string($railSearchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railSearchType, true), gettype($railSearchType)), __LINE__);
        }
        $this->RailSearchType = $railSearchType;
        
        return $this;
    }
}
