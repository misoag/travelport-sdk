<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelMediaLinksRsp StructType
 * @subpackage Structs
 */
class HotelMediaLinksRsp extends BaseRsp
{
    /**
     * The HotelPropertyWithMediaItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 20
     * - ref: HotelPropertyWithMediaItems
     * @var \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[]
     */
    public ?array $HotelPropertyWithMediaItems = null;
    /**
     * Constructor method for HotelMediaLinksRsp
     * @uses HotelMediaLinksRsp::setHotelPropertyWithMediaItems()
     * @param \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[] $hotelPropertyWithMediaItems
     */
    public function __construct(?array $hotelPropertyWithMediaItems = null)
    {
        $this
            ->setHotelPropertyWithMediaItems($hotelPropertyWithMediaItems);
    }
    /**
     * Get HotelPropertyWithMediaItems value
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[]
     */
    public function getHotelPropertyWithMediaItems(): ?array
    {
        return $this->HotelPropertyWithMediaItems;
    }
    /**
     * Set HotelPropertyWithMediaItems value
     * @param \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[] $hotelPropertyWithMediaItems
     * @return \Travelport\Hotel\StructType\HotelMediaLinksRsp
     */
    public function setHotelPropertyWithMediaItems(?array $hotelPropertyWithMediaItems = null): self
    {
        $this->HotelPropertyWithMediaItems = $hotelPropertyWithMediaItems;
        
        return $this;
    }
    /**
     * Add item to HotelPropertyWithMediaItems value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelPropertyWithMediaItems $item
     * @return \Travelport\Hotel\StructType\HotelMediaLinksRsp
     */
    public function addToHotelPropertyWithMediaItems(\Travelport\Hotel\StructType\HotelPropertyWithMediaItems $item): self
    {
        $this->HotelPropertyWithMediaItems[] = $item;
        
        return $this;
    }
}
