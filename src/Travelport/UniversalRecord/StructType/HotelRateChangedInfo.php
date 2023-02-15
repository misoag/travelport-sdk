<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRateChangedInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Applicable for 1G, 1V, 1P, 1J
 * @subpackage Structs
 */
class HotelRateChangedInfo extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: hotel:HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:HotelRateDetail
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetail|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelRateDetail $HotelRateDetail = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason to represent whether rate change in hotel rules.Applicable for 1G, 1V, 1P, 1J
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * Constructor method for HotelRateChangedInfo
     * @uses HotelRateChangedInfo::setHotelProperty()
     * @uses HotelRateChangedInfo::setHotelRateDetail()
     * @uses HotelRateChangedInfo::setReason()
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail
     * @param string $reason
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null, ?\Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail = null, ?string $reason = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelRateDetail($hotelRateDetail)
            ->setReason($reason);
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\UniversalRecord\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\HotelRateChangedInfo
     */
    public function setHotelProperty(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail|null
     */
    public function getHotelRateDetail(): ?\Travelport\UniversalRecord\StructType\HotelRateDetail
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail
     * @return \Travelport\UniversalRecord\StructType\HotelRateChangedInfo
     */
    public function setHotelRateDetail(?\Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Travelport\UniversalRecord\StructType\HotelRateChangedInfo
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
}
