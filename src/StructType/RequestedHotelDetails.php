<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\HotelType|null
     */
    protected ?\StructType\HotelType $HotelType = null;
    /**
     * Constructor method for RequestedHotelDetails
     * @uses RequestedHotelDetails::setHotelType()
     * @param \StructType\HotelType $hotelType
     */
    public function __construct(?\StructType\HotelType $hotelType = null)
    {
        $this
            ->setHotelType($hotelType);
    }
    /**
     * Get HotelType value
     * @return \StructType\HotelType|null
     */
    public function getHotelType(): ?\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \StructType\HotelType $hotelType
     * @return \StructType\RequestedHotelDetails
     */
    public function setHotelType(?\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
}
