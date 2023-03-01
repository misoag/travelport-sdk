<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRulesRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response showing rule details of a given hotel property and room rate code
 * @subpackage Structs
 */
class HotelRulesRsp extends BaseRsp
{
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
     * The HotelRuleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRuleItem
     * @var \Travelport\Hotel\StructType\HotelRuleItem[]
     */
    public ?array $HotelRuleItem = null;
    /**
     * The HotelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelType
     * @var \Travelport\Hotel\StructType\HotelType|null
     */
    public ?\Travelport\Hotel\StructType\HotelType $HotelType = null;
    /**
     * Constructor method for HotelRulesRsp
     * @uses HotelRulesRsp::setHotelRateDetail()
     * @uses HotelRulesRsp::setHotelRuleItem()
     * @uses HotelRulesRsp::setHotelType()
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\Hotel\StructType\HotelRuleItem[] $hotelRuleItem
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     */
    public function __construct(?array $hotelRateDetail = null, ?array $hotelRuleItem = null, ?\Travelport\Hotel\StructType\HotelType $hotelType = null)
    {
        $this
            ->setHotelRateDetail($hotelRateDetail)
            ->setHotelRuleItem($hotelRuleItem)
            ->setHotelType($hotelType);
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
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
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
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function addToHotelRateDetail(\Travelport\Hotel\StructType\HotelRateDetail $item): self
    {
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRuleItem value
     * @return \Travelport\Hotel\StructType\HotelRuleItem[]
     */
    public function getHotelRuleItem(): ?array
    {
        return $this->HotelRuleItem;
    }
    /**
     * Set HotelRuleItem value
     * @param \Travelport\Hotel\StructType\HotelRuleItem[] $hotelRuleItem
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function setHotelRuleItem(?array $hotelRuleItem = null): self
    {
        $this->HotelRuleItem = $hotelRuleItem;
        
        return $this;
    }
    /**
     * Add item to HotelRuleItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRuleItem $item
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function addToHotelRuleItem(\Travelport\Hotel\StructType\HotelRuleItem $item): self
    {
        $this->HotelRuleItem[] = $item;
        
        return $this;
    }
    /**
     * Get HotelType value
     * @return \Travelport\Hotel\StructType\HotelType|null
     */
    public function getHotelType(): ?\Travelport\Hotel\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function setHotelType(?\Travelport\Hotel\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
}
