<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseHotelDetailsReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Base request for all hotel details search request..
 * @subpackage Structs
 */
class BaseHotelDetailsReq extends BaseReq
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    public ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelDetailsModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelDetailsModifiers
     * @var \Travelport\Hotel\StructType\HotelDetailsModifiers|null
     */
    public ?\Travelport\Hotel\StructType\HotelDetailsModifiers $HotelDetailsModifiers = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Hotel\StructType\PointOfSale|null
     */
    public ?\Travelport\Hotel\StructType\PointOfSale $PointOfSale = null;
    /**
     * Constructor method for BaseHotelDetailsReq
     * @uses BaseHotelDetailsReq::setHotelProperty()
     * @uses BaseHotelDetailsReq::setHotelDetailsModifiers()
     * @uses BaseHotelDetailsReq::setPointOfSale()
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelDetailsModifiers $hotelDetailsModifiers
     * @param \Travelport\Hotel\StructType\PointOfSale $pointOfSale
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?\Travelport\Hotel\StructType\HotelDetailsModifiers $hotelDetailsModifiers = null, ?\Travelport\Hotel\StructType\PointOfSale $pointOfSale = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailsModifiers($hotelDetailsModifiers)
            ->setPointOfSale($pointOfSale);
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\Hotel\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsReq
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelDetailsModifiers value
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers|null
     */
    public function getHotelDetailsModifiers(): ?\Travelport\Hotel\StructType\HotelDetailsModifiers
    {
        return $this->HotelDetailsModifiers;
    }
    /**
     * Set HotelDetailsModifiers value
     * @param \Travelport\Hotel\StructType\HotelDetailsModifiers $hotelDetailsModifiers
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsReq
     */
    public function setHotelDetailsModifiers(?\Travelport\Hotel\StructType\HotelDetailsModifiers $hotelDetailsModifiers = null): self
    {
        $this->HotelDetailsModifiers = $hotelDetailsModifiers;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Hotel\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\Hotel\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Hotel\StructType\PointOfSale $pointOfSale
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsReq
     */
    public function setPointOfSale(?\Travelport\Hotel\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
}
