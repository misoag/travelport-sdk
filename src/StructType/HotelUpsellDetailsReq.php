<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\HotelProperty|null
     */
    protected ?\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \StructType\HotelRateDetail|null
     */
    protected ?\StructType\HotelRateDetail $HotelRateDetail = null;
    /**
     * Constructor method for HotelUpsellDetailsReq
     * @uses HotelUpsellDetailsReq::setHotelProperty()
     * @uses HotelUpsellDetailsReq::setHotelRateDetail()
     * @param \StructType\HotelProperty $hotelProperty
     * @param \StructType\HotelRateDetail $hotelRateDetail
     */
    public function __construct(?\StructType\HotelProperty $hotelProperty = null, ?\StructType\HotelRateDetail $hotelRateDetail = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelRateDetail($hotelRateDetail);
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
     * @return \StructType\HotelUpsellDetailsReq
     */
    public function setHotelProperty(?\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \StructType\HotelRateDetail|null
     */
    public function getHotelRateDetail(): ?\StructType\HotelRateDetail
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \StructType\HotelRateDetail $hotelRateDetail
     * @return \StructType\HotelUpsellDetailsReq
     */
    public function setHotelRateDetail(?\StructType\HotelRateDetail $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
}
