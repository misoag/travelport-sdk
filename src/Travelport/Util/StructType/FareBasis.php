<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBasis StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Basis Code
 * @subpackage Structs
 */
class FareBasis extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment to which this FareBasis Code is to connected | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * Constructor method for FareBasis
     * @uses FareBasis::setCode()
     * @uses FareBasis::setSegmentRef()
     * @param string $code
     * @param string $segmentRef
     */
    public function __construct(string $code, ?string $segmentRef = null)
    {
        $this
            ->setCode($code)
            ->setSegmentRef($segmentRef);
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
     * @return \Travelport\Util\StructType\FareBasis
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
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Util\StructType\FareBasis
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
