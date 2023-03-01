<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseFees StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise Fees amount.
 * @subpackage Structs
 */
class CruiseFees extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Total amount of fees associated for cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Text explaining fee amount | Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * Constructor method for CruiseFees
     * @uses CruiseFees::setAmount()
     * @uses CruiseFees::setDescription()
     * @param string $amount
     * @param string $description
     */
    public function __construct(string $amount, ?string $description = null)
    {
        $this
            ->setAmount($amount)
            ->setDescription($description);
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
     * @return \Travelport\UniversalRecord\StructType\CruiseFees
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\CruiseFees
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
