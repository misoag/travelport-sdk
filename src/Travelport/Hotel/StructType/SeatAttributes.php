<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatAttributes StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the seat attribute of the service.
 * @subpackage Structs
 */
class SeatAttributes extends AbstractStructBase
{
    /**
     * The SeatAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: SeatAttribute
     * @var \Travelport\Hotel\StructType\SeatAttribute[]
     */
    public ?array $SeatAttribute = null;
    /**
     * Constructor method for SeatAttributes
     * @uses SeatAttributes::setSeatAttribute()
     * @param \Travelport\Hotel\StructType\SeatAttribute[] $seatAttribute
     */
    public function __construct(?array $seatAttribute = null)
    {
        $this
            ->setSeatAttribute($seatAttribute);
    }
    /**
     * Get SeatAttribute value
     * @return \Travelport\Hotel\StructType\SeatAttribute[]
     */
    public function getSeatAttribute(): ?array
    {
        return $this->SeatAttribute;
    }
    /**
     * Set SeatAttribute value
     * @param \Travelport\Hotel\StructType\SeatAttribute[] $seatAttribute
     * @return \Travelport\Hotel\StructType\SeatAttributes
     */
    public function setSeatAttribute(?array $seatAttribute = null): self
    {
        $this->SeatAttribute = $seatAttribute;
        
        return $this;
    }
    /**
     * Add item to SeatAttribute value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SeatAttribute $item
     * @return \Travelport\Hotel\StructType\SeatAttributes
     */
    public function addToSeatAttribute(\Travelport\Hotel\StructType\SeatAttribute $item): self
    {
        $this->SeatAttribute[] = $item;
        
        return $this;
    }
}
