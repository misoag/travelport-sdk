<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\HotelType|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelType $HotelType = null;
    /**
     * Constructor method for RequestedHotelDetails
     * @uses RequestedHotelDetails::setHotelType()
     * @param \Travelport\UniversalRecord\StructType\HotelType $hotelType
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\HotelType $hotelType = null)
    {
        $this
            ->setHotelType($hotelType);
    }
    /**
     * Get HotelType value
     * @return \Travelport\UniversalRecord\StructType\HotelType|null
     */
    public function getHotelType(): ?\Travelport\UniversalRecord\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \Travelport\UniversalRecord\StructType\HotelType $hotelType
     * @return \Travelport\UniversalRecord\StructType\RequestedHotelDetails
     */
    public function setHotelType(?\Travelport\UniversalRecord\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
}
