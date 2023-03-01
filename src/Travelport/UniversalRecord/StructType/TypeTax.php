<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTax StructType
 * @subpackage Structs
 */
class TypeTax extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * Constructor method for typeTax
     * @uses TypeTax::setAmount()
     * @uses TypeTax::setCode()
     * @param string $amount
     * @param string $code
     */
    public function __construct(?string $amount = null, ?string $code = null)
    {
        $this
            ->setAmount($amount)
            ->setCode($code);
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\TypeTax
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\TypeTax
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
