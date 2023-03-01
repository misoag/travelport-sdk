<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAlternateProperties StructType
 * Meta information extracted from the WSDL
 * - documentation: Alternate Properties returned by some Vendors if the requested property is not available
 * @subpackage Structs
 */
class HotelAlternateProperties extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty[]
     */
    public ?array $HotelProperty = null;
    /**
     * Constructor method for HotelAlternateProperties
     * @uses HotelAlternateProperties::setHotelProperty()
     * @param \Travelport\Hotel\StructType\HotelProperty[] $hotelProperty
     */
    public function __construct(?array $hotelProperty = null)
    {
        $this
            ->setHotelProperty($hotelProperty);
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty[]
     */
    public function getHotelProperty(): ?array
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\Hotel\StructType\HotelAlternateProperties
     */
    public function setHotelProperty(?array $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelProperty $item
     * @return \Travelport\Hotel\StructType\HotelAlternateProperties
     */
    public function addToHotelProperty(\Travelport\Hotel\StructType\HotelProperty $item): self
    {
        $this->HotelProperty[] = $item;
        
        return $this;
    }
}
