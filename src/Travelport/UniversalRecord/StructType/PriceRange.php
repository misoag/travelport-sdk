<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceRange StructType
 * @subpackage Structs
 */
class PriceRange extends AbstractStructBase
{
    /**
     * The DefaultCurrency
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the currency code of StartPrice / EndPrice is the default currency code
     * @var bool|null
     */
    public ?bool $DefaultCurrency = null;
    /**
     * The StartPrice
     * Meta information extracted from the WSDL
     * - documentation: Price range start value | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $StartPrice = null;
    /**
     * The EndPrice
     * Meta information extracted from the WSDL
     * - documentation: Price range end value | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EndPrice = null;
    /**
     * Constructor method for PriceRange
     * @uses PriceRange::setDefaultCurrency()
     * @uses PriceRange::setStartPrice()
     * @uses PriceRange::setEndPrice()
     * @param bool $defaultCurrency
     * @param string $startPrice
     * @param string $endPrice
     */
    public function __construct(?bool $defaultCurrency = null, ?string $startPrice = null, ?string $endPrice = null)
    {
        $this
            ->setDefaultCurrency($defaultCurrency)
            ->setStartPrice($startPrice)
            ->setEndPrice($endPrice);
    }
    /**
     * Get DefaultCurrency value
     * @return bool|null
     */
    public function getDefaultCurrency(): ?bool
    {
        return $this->DefaultCurrency;
    }
    /**
     * Set DefaultCurrency value
     * @param bool $defaultCurrency
     * @return \Travelport\UniversalRecord\StructType\PriceRange
     */
    public function setDefaultCurrency(?bool $defaultCurrency = null): self
    {
        $this->DefaultCurrency = $defaultCurrency;
        
        return $this;
    }
    /**
     * Get StartPrice value
     * @return string|null
     */
    public function getStartPrice(): ?string
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param string $startPrice
     * @return \Travelport\UniversalRecord\StructType\PriceRange
     */
    public function setStartPrice(?string $startPrice = null): self
    {
        $this->StartPrice = $startPrice;
        
        return $this;
    }
    /**
     * Get EndPrice value
     * @return string|null
     */
    public function getEndPrice(): ?string
    {
        return $this->EndPrice;
    }
    /**
     * Set EndPrice value
     * @param string $endPrice
     * @return \Travelport\UniversalRecord\StructType\PriceRange
     */
    public function setEndPrice(?string $endPrice = null): self
    {
        $this->EndPrice = $endPrice;
        
        return $this;
    }
}
