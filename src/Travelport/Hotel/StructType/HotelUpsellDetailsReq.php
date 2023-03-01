<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellDetailsReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Upsell Request to retrieve the details of a hotel property.
 * @subpackage Structs
 */
class HotelUpsellDetailsReq extends BaseReq
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    public ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \Travelport\Hotel\StructType\HotelRateDetail|null
     */
    public ?\Travelport\Hotel\StructType\HotelRateDetail $HotelRateDetail = null;
    /**
     * Constructor method for HotelUpsellDetailsReq
     * @uses HotelUpsellDetailsReq::setHotelProperty()
     * @uses HotelUpsellDetailsReq::setHotelRateDetail()
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?\Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelRateDetail($hotelRateDetail);
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
     * @return \Travelport\Hotel\StructType\HotelUpsellDetailsReq
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\Hotel\StructType\HotelRateDetail|null
     */
    public function getHotelRateDetail(): ?\Travelport\Hotel\StructType\HotelRateDetail
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail
     * @return \Travelport\Hotel\StructType\HotelUpsellDetailsReq
     */
    public function setHotelRateDetail(?\Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
}
