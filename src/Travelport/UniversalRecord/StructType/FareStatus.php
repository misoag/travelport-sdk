<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Code;
    /**
     * The FareStatusFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareStatusFailureInfo
     * @var \Travelport\UniversalRecord\StructType\FareStatusFailureInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FareStatusFailureInfo $FareStatusFailureInfo = null;
    /**
     * Constructor method for FareStatus
     * @uses FareStatus::setCode()
     * @uses FareStatus::setFareStatusFailureInfo()
     * @param string $code
     * @param \Travelport\UniversalRecord\StructType\FareStatusFailureInfo $fareStatusFailureInfo
     */
    public function __construct(string $code, ?\Travelport\UniversalRecord\StructType\FareStatusFailureInfo $fareStatusFailureInfo = null)
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareStatusCode::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareStatusCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\FareStatus
     */
    public function setCode(string $code): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareStatusCode::valueIsValid($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareStatusCode', is_array($code) ? implode(', ', $code) : var_export($code, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareStatusCode::getValidValues())), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get FareStatusFailureInfo value
     * @return \Travelport\UniversalRecord\StructType\FareStatusFailureInfo|null
     */
    public function getFareStatusFailureInfo(): ?\Travelport\UniversalRecord\StructType\FareStatusFailureInfo
    {
        return $this->FareStatusFailureInfo;
    }
    /**
     * Set FareStatusFailureInfo value
     * @param \Travelport\UniversalRecord\StructType\FareStatusFailureInfo $fareStatusFailureInfo
     * @return \Travelport\UniversalRecord\StructType\FareStatus
     */
    public function setFareStatusFailureInfo(?\Travelport\UniversalRecord\StructType\FareStatusFailureInfo $fareStatusFailureInfo = null): self
    {
        $this->FareStatusFailureInfo = $fareStatusFailureInfo;
        
        return $this;
    }
}
