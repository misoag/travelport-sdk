<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRetrieveRsp StructType
 * @subpackage Structs
 */
class HotelRetrieveRsp extends BaseRsp
{
    /**
     * The HotelReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelReservation
     * @var \Travelport\Hotel\StructType\HotelReservation[]
     */
    public ?array $HotelReservation = null;
    /**
     * Constructor method for HotelRetrieveRsp
     * @uses HotelRetrieveRsp::setHotelReservation()
     * @param \Travelport\Hotel\StructType\HotelReservation[] $hotelReservation
     */
    public function __construct(?array $hotelReservation = null)
    {
        $this
            ->setHotelReservation($hotelReservation);
    }
    /**
     * Get HotelReservation value
     * @return \Travelport\Hotel\StructType\HotelReservation[]
     */
    public function getHotelReservation(): ?array
    {
        return $this->HotelReservation;
    }
    /**
     * Set HotelReservation value
     * @param \Travelport\Hotel\StructType\HotelReservation[] $hotelReservation
     * @return \Travelport\Hotel\StructType\HotelRetrieveRsp
     */
    public function setHotelReservation(?array $hotelReservation = null): self
    {
        $this->HotelReservation = $hotelReservation;
        
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelReservation $item
     * @return \Travelport\Hotel\StructType\HotelRetrieveRsp
     */
    public function addToHotelReservation(\Travelport\Hotel\StructType\HotelReservation $item): self
    {
        $this->HotelReservation[] = $item;
        
        return $this;
    }
}
