<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * Meta information extracted from the WSDL
 * - documentation: Taxes for Land Charges
 * @subpackage Structs
 */
class Tax extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The tax category represents a valid IATA tax code.
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * Constructor method for Tax
     * @uses Tax::setAmount()
     * @uses Tax::setCategory()
     * @param string $amount
     * @param string $category
     */
    public function __construct(string $amount, ?string $category = null)
    {
        $this
            ->setAmount($amount)
            ->setCategory($category);
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\Tax
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Air\StructType\Tax
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
}
