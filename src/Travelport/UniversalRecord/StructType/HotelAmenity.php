<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAmenity StructType
 * @subpackage Structs
 */
class HotelAmenity extends AbstractStructBase
{
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Property or Room amenity
     * - use: required
     * @var string
     */
    public string $Level;
    /**
     * The AmenityCode
     * Meta information extracted from the WSDL
     * - documentation: OTA amenity code
     * - base: xs:nonNegativeInteger
     * - totalDigits: 3
     * - use: required
     * @var int
     */
    public int $AmenityCode;
    /**
     * Constructor method for HotelAmenity
     * @uses HotelAmenity::setLevel()
     * @uses HotelAmenity::setAmenityCode()
     * @param string $level
     * @param int $amenityCode
     */
    public function __construct(string $level, int $amenityCode)
    {
        $this
            ->setLevel($level)
            ->setAmenityCode($amenityCode);
    }
    /**
     * Get Level value
     * @return string
     */
    public function getLevel(): string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Travelport\UniversalRecord\StructType\HotelAmenity
     */
    public function setLevel(string $level): self
    {
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get AmenityCode value
     * @return int
     */
    public function getAmenityCode(): int
    {
        return $this->AmenityCode;
    }
    /**
     * Set AmenityCode value
     * @param int $amenityCode
     * @return \Travelport\UniversalRecord\StructType\HotelAmenity
     */
    public function setAmenityCode(int $amenityCode): self
    {
        $this->AmenityCode = $amenityCode;
        
        return $this;
    }
}
