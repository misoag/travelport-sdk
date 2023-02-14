<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\HotelSearchLocation|null
     */
    protected ?\StructType\HotelSearchLocation $HotelSearchLocation = null;
    /**
     * The HotelSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelSearchModifiers
     * @var \StructType\HotelSearchModifiers|null
     */
    protected ?\StructType\HotelSearchModifiers $HotelSearchModifiers = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \StructType\HotelStay|null
     */
    protected ?\StructType\HotelStay $HotelStay = null;
    /**
     * The QuickResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: QuickResponse
     * @var \StructType\QuickResponse|null
     */
    protected ?\StructType\QuickResponse $QuickResponse = null;
    /**
     * Constructor method for HotelSuperShopperReq
     * @uses HotelSuperShopperReq::setHotelSearchLocation()
     * @uses HotelSuperShopperReq::setHotelSearchModifiers()
     * @uses HotelSuperShopperReq::setHotelStay()
     * @uses HotelSuperShopperReq::setQuickResponse()
     * @param \StructType\HotelSearchLocation $hotelSearchLocation
     * @param \StructType\HotelSearchModifiers $hotelSearchModifiers
     * @param \StructType\HotelStay $hotelStay
     * @param \StructType\QuickResponse $quickResponse
     */
    public function __construct(?\StructType\HotelSearchLocation $hotelSearchLocation = null, ?\StructType\HotelSearchModifiers $hotelSearchModifiers = null, ?\StructType\HotelStay $hotelStay = null, ?\StructType\QuickResponse $quickResponse = null)
    {
        $this
            ->setHotelSearchLocation($hotelSearchLocation)
            ->setHotelSearchModifiers($hotelSearchModifiers)
            ->setHotelStay($hotelStay)
            ->setQuickResponse($quickResponse);
    }
    /**
     * Get HotelSearchLocation value
     * @return \StructType\HotelSearchLocation|null
     */
    public function getHotelSearchLocation(): ?\StructType\HotelSearchLocation
    {
        return $this->HotelSearchLocation;
    }
    /**
     * Set HotelSearchLocation value
     * @param \StructType\HotelSearchLocation $hotelSearchLocation
     * @return \StructType\HotelSuperShopperReq
     */
    public function setHotelSearchLocation(?\StructType\HotelSearchLocation $hotelSearchLocation = null): self
    {
        $this->HotelSearchLocation = $hotelSearchLocation;
        
        return $this;
    }
    /**
     * Get HotelSearchModifiers value
     * @return \StructType\HotelSearchModifiers|null
     */
    public function getHotelSearchModifiers(): ?\StructType\HotelSearchModifiers
    {
        return $this->HotelSearchModifiers;
    }
    /**
     * Set HotelSearchModifiers value
     * @param \StructType\HotelSearchModifiers $hotelSearchModifiers
     * @return \StructType\HotelSuperShopperReq
     */
    public function setHotelSearchModifiers(?\StructType\HotelSearchModifiers $hotelSearchModifiers = null): self
    {
        $this->HotelSearchModifiers = $hotelSearchModifiers;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \StructType\HotelStay|null
     */
    public function getHotelStay(): ?\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \StructType\HotelStay $hotelStay
     * @return \StructType\HotelSuperShopperReq
     */
    public function setHotelStay(?\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get QuickResponse value
     * @return \StructType\QuickResponse|null
     */
    public function getQuickResponse(): ?\StructType\QuickResponse
    {
        return $this->QuickResponse;
    }
    /**
     * Set QuickResponse value
     * @param \StructType\QuickResponse $quickResponse
     * @return \StructType\HotelSuperShopperReq
     */
    public function setQuickResponse(?\StructType\QuickResponse $quickResponse = null): self
    {
        $this->QuickResponse = $quickResponse;
        
        return $this;
    }
}
