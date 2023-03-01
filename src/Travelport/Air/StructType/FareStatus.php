<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareStatus StructType
 * Meta information extracted from the WSDL
 * - documentation: Denotes the status of a particular fare.
 * @subpackage Structs
 */
class FareStatus extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The status of the fare.
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The FareStatusFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareStatusFailureInfo
     * @var \Travelport\Air\StructType\FareStatusFailureInfo|null
     */
    public ?\Travelport\Air\StructType\FareStatusFailureInfo $FareStatusFailureInfo = null;
    /**
     * Constructor method for FareStatus
     * @uses FareStatus::setCode()
     * @uses FareStatus::setFareStatusFailureInfo()
     * @param string $code
     * @param \Travelport\Air\StructType\FareStatusFailureInfo $fareStatusFailureInfo
     */
    public function __construct(string $code, ?\Travelport\Air\StructType\FareStatusFailureInfo $fareStatusFailureInfo = null)
    {
        $this
            ->setCode($code)
            ->setFareStatusFailureInfo($fareStatusFailureInfo);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Air\StructType\FareStatus
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get FareStatusFailureInfo value
     * @return \Travelport\Air\StructType\FareStatusFailureInfo|null
     */
    public function getFareStatusFailureInfo(): ?\Travelport\Air\StructType\FareStatusFailureInfo
    {
        return $this->FareStatusFailureInfo;
    }
    /**
     * Set FareStatusFailureInfo value
     * @param \Travelport\Air\StructType\FareStatusFailureInfo $fareStatusFailureInfo
     * @return \Travelport\Air\StructType\FareStatus
     */
    public function setFareStatusFailureInfo(?\Travelport\Air\StructType\FareStatusFailureInfo $fareStatusFailureInfo = null): self
    {
        $this->FareStatusFailureInfo = $fareStatusFailureInfo;
        
        return $this;
    }
}
