<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenities StructType
 * Meta information extracted from the WSDL
 * - documentation: Amenity information
 * @subpackage Structs
 */
class Amenities extends AbstractStructBase
{
    /**
     * The Amenity
     * Meta information extracted from the WSDL
     * - maxOccurs: 8 | 999
     * - minOccurs: 0
     * - ref: Amenity
     * @var \Travelport\UniversalRecord\StructType\Amenity[]
     */
    public ?array $Amenity = null;
    /**
     * Constructor method for Amenities
     * @uses Amenities::setAmenity()
     * @param \Travelport\UniversalRecord\StructType\Amenity[] $amenity
     */
    public function __construct(?array $amenity = null)
    {
        $this
            ->setAmenity($amenity);
    }
    /**
     * Get Amenity value
     * @return \Travelport\UniversalRecord\StructType\Amenity[]
     */
    public function getAmenity(): ?array
    {
        return $this->Amenity;
    }
    /**
     * Set Amenity value
     * @param \Travelport\UniversalRecord\StructType\Amenity[] $amenity
     * @return \Travelport\UniversalRecord\StructType\Amenities
     */
    public function setAmenity(?array $amenity = null): self
    {
        $this->Amenity = $amenity;
        
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Amenity $item
     * @return \Travelport\UniversalRecord\StructType\Amenities
     */
    public function addToAmenity(\Travelport\UniversalRecord\StructType\Amenity $item): self
    {
        $this->Amenity[] = $item;
        
        return $this;
    }
}
