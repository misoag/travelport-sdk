<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedHotelDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns Hotel rate details for requested hotel property.
 * @subpackage Structs
 */
class RequestedHotelDetails extends TypeHotelDetails
{
    /**
     * The HotelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelType
     * @var \Travelport\Hotel\StructType\HotelType|null
     */
    public ?\Travelport\Hotel\StructType\HotelType $HotelType = null;
    /**
     * Constructor method for RequestedHotelDetails
     * @uses RequestedHotelDetails::setHotelType()
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelType $hotelType = null)
    {
        $this
            ->setHotelType($hotelType);
    }
    /**
     * Get HotelType value
     * @return \Travelport\Hotel\StructType\HotelType|null
     */
    public function getHotelType(): ?\Travelport\Hotel\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     * @return \Travelport\Hotel\StructType\RequestedHotelDetails
     */
    public function setHotelType(?\Travelport\Hotel\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
}
