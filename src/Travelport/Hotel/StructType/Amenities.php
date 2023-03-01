<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\Amenity[]
     */
    public ?array $Amenity = null;
    /**
     * Constructor method for Amenities
     * @uses Amenities::setAmenity()
     * @param \Travelport\Hotel\StructType\Amenity[] $amenity
     */
    public function __construct(?array $amenity = null)
    {
        $this
            ->setAmenity($amenity);
    }
    /**
     * Get Amenity value
     * @return \Travelport\Hotel\StructType\Amenity[]
     */
    public function getAmenity(): ?array
    {
        return $this->Amenity;
    }
    /**
     * Set Amenity value
     * @param \Travelport\Hotel\StructType\Amenity[] $amenity
     * @return \Travelport\Hotel\StructType\Amenities
     */
    public function setAmenity(?array $amenity = null): self
    {
        $this->Amenity = $amenity;
        
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Amenity $item
     * @return \Travelport\Hotel\StructType\Amenities
     */
    public function addToAmenity(\Travelport\Hotel\StructType\Amenity $item): self
    {
        $this->Amenity[] = $item;
        
        return $this;
    }
}
