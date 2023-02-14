<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOFeeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to the PTA/TOD (Prepaid Ticket Advice / Ticket on Departure) related to the MCO
 * @subpackage Structs
 */
class MCOFeeInfo extends AbstractStructBase
{
    /**
     * The FeeAppliesToInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FeeAppliesToInd = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: The percentage. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * - type: typePercentageWithDecimal
     * - use: optional
     * @var string|null
     */
    protected ?string $Percentage = null;
    /**
     * Constructor method for MCOFeeInfo
     * @uses MCOFeeInfo::setFeeAppliesToInd()
     * @uses MCOFeeInfo::setAmount()
     * @uses MCOFeeInfo::setPercentage()
     * @param string $feeAppliesToInd
     * @param string $amount
     * @param string $percentage
     */
    public function __construct(?string $feeAppliesToInd = null, ?string $amount = null, ?string $percentage = null)
    {
        $this
            ->setFeeAppliesToInd($feeAppliesToInd)
            ->setAmount($amount)
            ->setPercentage($percentage);
    }
    /**
     * Get FeeAppliesToInd value
     * @return string|null
     */
    public function getFeeAppliesToInd(): ?string
    {
        return $this->FeeAppliesToInd;
    }
    /**
     * Set FeeAppliesToInd value
     * @param string $feeAppliesToInd
     * @return \Travelport\Util\StructType\MCOFeeInfo
     */
    public function setFeeAppliesToInd(?string $feeAppliesToInd = null): self
    {
        // validation for constraint: string
        if (!is_null($feeAppliesToInd) && !is_string($feeAppliesToInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeAppliesToInd, true), gettype($feeAppliesToInd)), __LINE__);
        }
        $this->FeeAppliesToInd = $feeAppliesToInd;
        
        return $this;
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
     * @return \Travelport\Util\StructType\MCOFeeInfo
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Travelport\Util\StructType\MCOFeeInfo
     */
    public function setPercentage(?string $percentage = null): self
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percentage) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percentage, true)), __LINE__);
        }
        $this->Percentage = $percentage;
        
        return $this;
    }
}
