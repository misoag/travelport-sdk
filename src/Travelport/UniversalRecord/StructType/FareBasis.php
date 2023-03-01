<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Code;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment to which this FareBasis Code is to connected | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
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
     * @return \Travelport\UniversalRecord\StructType\FareBasis
     */
    public function setCode(string $code): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareBasis
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
