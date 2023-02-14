<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\HotelProperty|null
     */
    protected ?\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelDetailsModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelDetailsModifiers
     * @var \StructType\HotelDetailsModifiers|null
     */
    protected ?\StructType\HotelDetailsModifiers $HotelDetailsModifiers = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \StructType\PointOfSale|null
     */
    protected ?\StructType\PointOfSale $PointOfSale = null;
    /**
     * Constructor method for BaseHotelDetailsReq
     * @uses BaseHotelDetailsReq::setHotelProperty()
     * @uses BaseHotelDetailsReq::setHotelDetailsModifiers()
     * @uses BaseHotelDetailsReq::setPointOfSale()
     * @param \StructType\HotelProperty $hotelProperty
     * @param \StructType\HotelDetailsModifiers $hotelDetailsModifiers
     * @param \StructType\PointOfSale $pointOfSale
     */
    public function __construct(?\StructType\HotelProperty $hotelProperty = null, ?\StructType\HotelDetailsModifiers $hotelDetailsModifiers = null, ?\StructType\PointOfSale $pointOfSale = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailsModifiers($hotelDetailsModifiers)
            ->setPointOfSale($pointOfSale);
    }
    /**
     * Get HotelProperty value
     * @return \StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \StructType\HotelProperty $hotelProperty
     * @return \StructType\BaseHotelDetailsReq
     */
    public function setHotelProperty(?\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelDetailsModifiers value
     * @return \StructType\HotelDetailsModifiers|null
     */
    public function getHotelDetailsModifiers(): ?\StructType\HotelDetailsModifiers
    {
        return $this->HotelDetailsModifiers;
    }
    /**
     * Set HotelDetailsModifiers value
     * @param \StructType\HotelDetailsModifiers $hotelDetailsModifiers
     * @return \StructType\BaseHotelDetailsReq
     */
    public function setHotelDetailsModifiers(?\StructType\HotelDetailsModifiers $hotelDetailsModifiers = null): self
    {
        $this->HotelDetailsModifiers = $hotelDetailsModifiers;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \StructType\PointOfSale $pointOfSale
     * @return \StructType\BaseHotelDetailsReq
     */
    public function setPointOfSale(?\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
}
