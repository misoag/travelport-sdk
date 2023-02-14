<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Amount;
    /**
     * The RatePeriod
     * Meta information extracted from the WSDL
     * - documentation: Rate Period associated to the Special Equipment Charge Amount.e.g. Daily, Weekly, Rental
     * - use: required
     * @var string
     */
    protected string $RatePeriod;
    /**
     * The IncludedInEstTotalInd
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment Amount is included in the Estimated Total Amount
     * - use: required
     * @var bool
     */
    protected bool $IncludedInEstTotalInd;
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
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($ratePeriod) && !is_string($ratePeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratePeriod, true), gettype($ratePeriod)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($includedInEstTotalInd) && !is_bool($includedInEstTotalInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includedInEstTotalInd, true), gettype($includedInEstTotalInd)), __LINE__);
        }
        $this->IncludedInEstTotalInd = $includedInEstTotalInd;
        
        return $this;
    }
}
