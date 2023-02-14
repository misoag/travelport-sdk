<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelCreateReservationRsp StructType
 * @subpackage Structs
 */
class HotelCreateReservationRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * The HotelRateChangedInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelRateChangedInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelRateChangedInfo $HotelRateChangedInfo = null;
    /**
     * Constructor method for HotelCreateReservationRsp
     * @uses HotelCreateReservationRsp::setUniversalRecord()
     * @uses HotelCreateReservationRsp::setHotelRateChangedInfo()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param \Travelport\UniversalRecord\StructType\HotelRateChangedInfo $hotelRateChangedInfo
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?\Travelport\UniversalRecord\StructType\HotelRateChangedInfo $hotelRateChangedInfo = null)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setHotelRateChangedInfo($hotelRateChangedInfo);
    }
    /**
     * Get UniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public function getUniversalRecord(): ?\Travelport\UniversalRecord\StructType\UniversalRecord
    {
        return $this->UniversalRecord;
    }
    /**
     * Set UniversalRecord value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
    /**
     * Get HotelRateChangedInfo value
     * @return \Travelport\UniversalRecord\StructType\HotelRateChangedInfo|null
     */
    public function getHotelRateChangedInfo(): ?\Travelport\UniversalRecord\StructType\HotelRateChangedInfo
    {
        return $this->HotelRateChangedInfo;
    }
    /**
     * Set HotelRateChangedInfo value
     * @param \Travelport\UniversalRecord\StructType\HotelRateChangedInfo $hotelRateChangedInfo
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationRsp
     */
    public function setHotelRateChangedInfo(?\Travelport\UniversalRecord\StructType\HotelRateChangedInfo $hotelRateChangedInfo = null): self
    {
        $this->HotelRateChangedInfo = $hotelRateChangedInfo;
        
        return $this;
    }
}
