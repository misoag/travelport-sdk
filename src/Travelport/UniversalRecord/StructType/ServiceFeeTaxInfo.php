<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceFeeTaxInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: The taxes associated to a particular Service Fee.
 * @subpackage Structs
 */
class ServiceFeeTaxInfo extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The tax category represents a valid IATA tax code.
     * - use: required
     * @var string
     */
    protected string $Category;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * Constructor method for ServiceFeeTaxInfo
     * @uses ServiceFeeTaxInfo::setCategory()
     * @uses ServiceFeeTaxInfo::setAmount()
     * @param string $category
     * @param string $amount
     */
    public function __construct(string $category, string $amount)
    {
        $this
            ->setCategory($category)
            ->setAmount($amount);
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
}
