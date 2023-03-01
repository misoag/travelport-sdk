<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $FeeAppliesToInd = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
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
    public ?string $Percentage = null;
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
     * @return \Travelport\UniversalRecord\StructType\MCOFeeInfo
     */
    public function setFeeAppliesToInd(?string $feeAppliesToInd = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\MCOFeeInfo
     */
    public function setAmount(?string $amount = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\MCOFeeInfo
     */
    public function setPercentage(?string $percentage = null): self
    {
        $this->Percentage = $percentage;
        
        return $this;
    }
}
