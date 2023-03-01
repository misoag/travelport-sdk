<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirCancelRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to an AirCancelReq. AirReservation returned reflects the requested modifications.
 * @subpackage Structs
 */
class AirCancelRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * Constructor method for AirCancelRsp
     * @uses AirCancelRsp::setUniversalRecord()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null)
    {
        $this
            ->setUniversalRecord($universalRecord);
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
     * @return \Travelport\UniversalRecord\StructType\AirCancelRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
}
