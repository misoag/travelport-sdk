<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalReservationPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: The total price for the entire stay, including fees, for all rooms in the booking.
 * - minOccurs: 0
 * @subpackage Structs
 */
class TotalReservationPrice extends AbstractStructBase
{
    /**
     * The RoomRateDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeHotelRateDescription[]
     */
    public ?array $RoomRateDescription = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The amount of the total price, including fees for all rooms in the booking. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The ApproxTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The approximate amount of the total hotel price, including fees, in another currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproxTotalPrice = null;
    /**
     * Constructor method for TotalReservationPrice
     * @uses TotalReservationPrice::setRoomRateDescription()
     * @uses TotalReservationPrice::setTotalPrice()
     * @uses TotalReservationPrice::setApproxTotalPrice()
     * @param \Travelport\Hotel\StructType\TypeHotelRateDescription[] $roomRateDescription
     * @param string $totalPrice
     * @param string $approxTotalPrice
     */
    public function __construct(?array $roomRateDescription = null, ?string $totalPrice = null, ?string $approxTotalPrice = null)
    {
        $this
            ->setRoomRateDescription($roomRateDescription)
            ->setTotalPrice($totalPrice)
            ->setApproxTotalPrice($approxTotalPrice);
    }
    /**
     * Get RoomRateDescription value
     * @return \Travelport\Hotel\StructType\TypeHotelRateDescription[]
     */
    public function getRoomRateDescription(): ?array
    {
        return $this->RoomRateDescription;
    }
    /**
     * Set RoomRateDescription value
     * @param \Travelport\Hotel\StructType\TypeHotelRateDescription[] $roomRateDescription
     * @return \Travelport\Hotel\StructType\TotalReservationPrice
     */
    public function setRoomRateDescription(?array $roomRateDescription = null): self
    {
        $this->RoomRateDescription = $roomRateDescription;
        
        return $this;
    }
    /**
     * Add item to RoomRateDescription value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeHotelRateDescription $item
     * @return \Travelport\Hotel\StructType\TotalReservationPrice
     */
    public function addToRoomRateDescription(\Travelport\Hotel\StructType\TypeHotelRateDescription $item): self
    {
        $this->RoomRateDescription[] = $item;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\Hotel\StructType\TotalReservationPrice
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get ApproxTotalPrice value
     * @return string|null
     */
    public function getApproxTotalPrice(): ?string
    {
        return $this->ApproxTotalPrice;
    }
    /**
     * Set ApproxTotalPrice value
     * @param string $approxTotalPrice
     * @return \Travelport\Hotel\StructType\TotalReservationPrice
     */
    public function setApproxTotalPrice(?string $approxTotalPrice = null): self
    {
        $this->ApproxTotalPrice = $approxTotalPrice;
        
        return $this;
    }
}
