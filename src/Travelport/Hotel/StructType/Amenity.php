<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenity StructType
 * @subpackage Structs
 */
class Amenity extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The 1 – 3 byte Open Travel Alliance amenity code.
     * - base: xs:positiveInteger
     * - maxInclusive: 999
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    public int $Code;
    /**
     * The AmenityType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $AmenityType = null;
    /**
     * Constructor method for Amenity
     * @uses Amenity::setCode()
     * @uses Amenity::setAmenityType()
     * @param int $code
     * @param string $amenityType
     */
    public function __construct(int $code, ?string $amenityType = null)
    {
        $this
            ->setCode($code)
            ->setAmenityType($amenityType);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\Hotel\StructType\Amenity
     */
    public function setCode(int $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get AmenityType value
     * @return string|null
     */
    public function getAmenityType(): ?string
    {
        return $this->AmenityType;
    }
    /**
     * Set AmenityType value
     * @param string $amenityType
     * @return \Travelport\Hotel\StructType\Amenity
     */
    public function setAmenityType(?string $amenityType = null): self
    {
        $this->AmenityType = $amenityType;
        
        return $this;
    }
}
