<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareStatusFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Denotes the failure reason of a particular fare.
 * @subpackage Structs
 */
class FareStatusFailureInfo extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The failure code of the fare.
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: The reason for the failure.
     * - use: optional
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * Constructor method for FareStatusFailureInfo
     * @uses FareStatusFailureInfo::setCode()
     * @uses FareStatusFailureInfo::setReason()
     * @param string $code
     * @param string $reason
     */
    public function __construct(string $code, ?string $reason = null)
    {
        $this
            ->setCode($code)
            ->setReason($reason);
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
     * @return \Travelport\UniversalRecord\StructType\FareStatusFailureInfo
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Travelport\UniversalRecord\StructType\FareStatusFailureInfo
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
}
