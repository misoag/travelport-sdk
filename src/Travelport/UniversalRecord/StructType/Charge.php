<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Charge StructType
 * Meta information extracted from the WSDL
 * - documentation: Charge information associated to Special Equipment
 * @subpackage Structs
 */
class Charge extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment Charge Amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The RatePeriod
     * Meta information extracted from the WSDL
     * - documentation: Rate Period associated to the Special Equipment Charge Amount.e.g. Daily, Weekly, Rental
     * - use: required
     * @var string
     */
    public string $RatePeriod;
    /**
     * The IncludedInEstTotalInd
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment Amount is included in the Estimated Total Amount
     * - use: required
     * @var bool
     */
    public bool $IncludedInEstTotalInd;
    /**
     * Constructor method for Charge
     * @uses Charge::setAmount()
     * @uses Charge::setRatePeriod()
     * @uses Charge::setIncludedInEstTotalInd()
     * @param string $amount
     * @param string $ratePeriod
     * @param bool $includedInEstTotalInd
     */
    public function __construct(string $amount, string $ratePeriod, bool $includedInEstTotalInd)
    {
        $this
            ->setAmount($amount)
            ->setRatePeriod($ratePeriod)
            ->setIncludedInEstTotalInd($includedInEstTotalInd);
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
     * @return \Travelport\UniversalRecord\StructType\Charge
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return string
     */
    public function getRatePeriod(): string
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @param string $ratePeriod
     * @return \Travelport\UniversalRecord\StructType\Charge
     */
    public function setRatePeriod(string $ratePeriod): self
    {
        $this->RatePeriod = $ratePeriod;
        
        return $this;
    }
    /**
     * Get IncludedInEstTotalInd value
     * @return bool
     */
    public function getIncludedInEstTotalInd(): bool
    {
        return $this->IncludedInEstTotalInd;
    }
    /**
     * Set IncludedInEstTotalInd value
     * @param bool $includedInEstTotalInd
     * @return \Travelport\UniversalRecord\StructType\Charge
     */
    public function setIncludedInEstTotalInd(bool $includedInEstTotalInd): self
    {
        $this->IncludedInEstTotalInd = $includedInEstTotalInd;
        
        return $this;
    }
}
