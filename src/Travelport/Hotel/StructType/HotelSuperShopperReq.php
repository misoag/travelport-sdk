<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSuperShopperReq StructType
 * @subpackage Structs
 */
class HotelSuperShopperReq extends BaseSearchReq
{
    /**
     * The HotelSearchLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelSearchLocation
     * @var \Travelport\Hotel\StructType\HotelSearchLocation|null
     */
    public ?\Travelport\Hotel\StructType\HotelSearchLocation $HotelSearchLocation = null;
    /**
     * The HotelSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelSearchModifiers
     * @var \Travelport\Hotel\StructType\HotelSearchModifiers|null
     */
    public ?\Travelport\Hotel\StructType\HotelSearchModifiers $HotelSearchModifiers = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \Travelport\Hotel\StructType\HotelStay|null
     */
    public ?\Travelport\Hotel\StructType\HotelStay $HotelStay = null;
    /**
     * The QuickResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: QuickResponse
     * @var \Travelport\Hotel\StructType\QuickResponse|null
     */
    public ?\Travelport\Hotel\StructType\QuickResponse $QuickResponse = null;
    /**
     * Constructor method for HotelSuperShopperReq
     * @uses HotelSuperShopperReq::setHotelSearchLocation()
     * @uses HotelSuperShopperReq::setHotelSearchModifiers()
     * @uses HotelSuperShopperReq::setHotelStay()
     * @uses HotelSuperShopperReq::setQuickResponse()
     * @param \Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation
     * @param \Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @param \Travelport\Hotel\StructType\QuickResponse $quickResponse
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation = null, ?\Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers = null, ?\Travelport\Hotel\StructType\HotelStay $hotelStay = null, ?\Travelport\Hotel\StructType\QuickResponse $quickResponse = null)
    {
        $this
            ->setHotelSearchLocation($hotelSearchLocation)
            ->setHotelSearchModifiers($hotelSearchModifiers)
            ->setHotelStay($hotelStay)
            ->setQuickResponse($quickResponse);
    }
    /**
     * Get HotelSearchLocation value
     * @return \Travelport\Hotel\StructType\HotelSearchLocation|null
     */
    public function getHotelSearchLocation(): ?\Travelport\Hotel\StructType\HotelSearchLocation
    {
        return $this->HotelSearchLocation;
    }
    /**
     * Set HotelSearchLocation value
     * @param \Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation
     * @return \Travelport\Hotel\StructType\HotelSuperShopperReq
     */
    public function setHotelSearchLocation(?\Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation = null): self
    {
        $this->HotelSearchLocation = $hotelSearchLocation;
        
        return $this;
    }
    /**
     * Get HotelSearchModifiers value
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers|null
     */
    public function getHotelSearchModifiers(): ?\Travelport\Hotel\StructType\HotelSearchModifiers
    {
        return $this->HotelSearchModifiers;
    }
    /**
     * Set HotelSearchModifiers value
     * @param \Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers
     * @return \Travelport\Hotel\StructType\HotelSuperShopperReq
     */
    public function setHotelSearchModifiers(?\Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers = null): self
    {
        $this->HotelSearchModifiers = $hotelSearchModifiers;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\Hotel\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\Hotel\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @return \Travelport\Hotel\StructType\HotelSuperShopperReq
     */
    public function setHotelStay(?\Travelport\Hotel\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get QuickResponse value
     * @return \Travelport\Hotel\StructType\QuickResponse|null
     */
    public function getQuickResponse(): ?\Travelport\Hotel\StructType\QuickResponse
    {
        return $this->QuickResponse;
    }
    /**
     * Set QuickResponse value
     * @param \Travelport\Hotel\StructType\QuickResponse $quickResponse
     * @return \Travelport\Hotel\StructType\HotelSuperShopperReq
     */
    public function setQuickResponse(?\Travelport\Hotel\StructType\QuickResponse $quickResponse = null): self
    {
        $this->QuickResponse = $quickResponse;
        
        return $this;
    }
}
