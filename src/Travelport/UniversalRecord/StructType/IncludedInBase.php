<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludedInBase StructType
 * Meta information extracted from the WSDL
 * - documentation: Shows the taxes and fees included in the base fare. (ACH only)
 * @subpackage Structs
 */
class IncludedInBase extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: this attribute shows the amount included in the base fare for the specific fee or tax | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * Constructor method for IncludedInBase
     * @uses IncludedInBase::setAmount()
     * @param string $amount
     */
    public function __construct(?string $amount = null)
    {
        $this
            ->setAmount($amount);
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
     * @return \Travelport\UniversalRecord\StructType\IncludedInBase
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
}
