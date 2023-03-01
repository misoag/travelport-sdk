<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSuperShopperResults StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns hotel rate details during the stay if rates are available for requested property | Returns Hotel shuper shopper rate details for requested hotel property.
 * @subpackage Structs
 */
class HotelSuperShopperResults extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    public ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelDetailItem
     * @var \Travelport\Hotel\StructType\HotelDetailItem[]
     */
    public ?array $HotelDetailItem = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    public ?array $HotelRateDetail = null;
    /**
     * The HotelResultsError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeResultMessage[]
     */
    public ?array $HotelResultsError = null;
    /**
     * Constructor method for HotelSuperShopperResults
     * @uses HotelSuperShopperResults::setHotelProperty()
     * @uses HotelSuperShopperResults::setHotelDetailItem()
     * @uses HotelSuperShopperResults::setHotelRateDetail()
     * @uses HotelSuperShopperResults::setHotelResultsError()
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelDetailItem[] $hotelDetailItem
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\Hotel\StructType\TypeResultMessage[] $hotelResultsError
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?array $hotelDetailItem = null, ?array $hotelRateDetail = null, ?array $hotelResultsError = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailItem($hotelDetailItem)
            ->setHotelRateDetail($hotelRateDetail)
            ->setHotelResultsError($hotelResultsError);
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
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelDetailItem value
     * @return \Travelport\Hotel\StructType\HotelDetailItem[]
     */
    public function getHotelDetailItem(): ?array
    {
        return $this->HotelDetailItem;
    }
    /**
     * Set HotelDetailItem value
     * @param \Travelport\Hotel\StructType\HotelDetailItem[] $hotelDetailItem
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function setHotelDetailItem(?array $hotelDetailItem = null): self
    {
        $this->HotelDetailItem = $hotelDetailItem;
        
        return $this;
    }
    /**
     * Add item to HotelDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelDetailItem $item
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function addToHotelDetailItem(\Travelport\Hotel\StructType\HotelDetailItem $item): self
    {
        $this->HotelDetailItem[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRateDetail $item
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function addToHotelRateDetail(\Travelport\Hotel\StructType\HotelRateDetail $item): self
    {
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
    /**
     * Get HotelResultsError value
     * @return \Travelport\Hotel\StructType\TypeResultMessage[]
     */
    public function getHotelResultsError(): ?array
    {
        return $this->HotelResultsError;
    }
    /**
     * Set HotelResultsError value
     * @param \Travelport\Hotel\StructType\TypeResultMessage[] $hotelResultsError
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function setHotelResultsError(?array $hotelResultsError = null): self
    {
        $this->HotelResultsError = $hotelResultsError;
        
        return $this;
    }
    /**
     * Add item to HotelResultsError value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeResultMessage $item
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults
     */
    public function addToHotelResultsError(\Travelport\Hotel\StructType\TypeResultMessage $item): self
    {
        $this->HotelResultsError[] = $item;
        
        return $this;
    }
}
