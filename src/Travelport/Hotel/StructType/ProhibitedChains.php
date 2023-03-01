<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedChains StructType
 * @subpackage Structs
 */
class ProhibitedChains extends AbstractStructBase
{
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelChain
     * @var \Travelport\Hotel\StructType\HotelChain[]
     */
    public ?array $HotelChain = null;
    /**
     * Constructor method for ProhibitedChains
     * @uses ProhibitedChains::setHotelChain()
     * @param \Travelport\Hotel\StructType\HotelChain[] $hotelChain
     */
    public function __construct(?array $hotelChain = null)
    {
        $this
            ->setHotelChain($hotelChain);
    }
    /**
     * Get HotelChain value
     * @return \Travelport\Hotel\StructType\HotelChain[]
     */
    public function getHotelChain(): ?array
    {
        return $this->HotelChain;
    }
    /**
     * Set HotelChain value
     * @param \Travelport\Hotel\StructType\HotelChain[] $hotelChain
     * @return \Travelport\Hotel\StructType\ProhibitedChains
     */
    public function setHotelChain(?array $hotelChain = null): self
    {
        $this->HotelChain = $hotelChain;
        
        return $this;
    }
    /**
     * Add item to HotelChain value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelChain $item
     * @return \Travelport\Hotel\StructType\ProhibitedChains
     */
    public function addToHotelChain(\Travelport\Hotel\StructType\HotelChain $item): self
    {
        $this->HotelChain[] = $item;
        
        return $this;
    }
}
