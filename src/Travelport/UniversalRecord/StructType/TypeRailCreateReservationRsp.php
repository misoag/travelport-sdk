<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRailCreateReservationRsp StructType
 * @subpackage Structs
 */
abstract class TypeRailCreateReservationRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * The RailSolutionChangedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailSolutionChangedInfo
     * @var \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[]
     */
    public ?array $RailSolutionChangedInfo = null;
    /**
     * Constructor method for typeRailCreateReservationRsp
     * @uses TypeRailCreateReservationRsp::setUniversalRecord()
     * @uses TypeRailCreateReservationRsp::setRailSolutionChangedInfo()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[] $railSolutionChangedInfo
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?array $railSolutionChangedInfo = null)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setRailSolutionChangedInfo($railSolutionChangedInfo);
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
     * @return \Travelport\UniversalRecord\StructType\TypeRailCreateReservationRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
    /**
     * Get RailSolutionChangedInfo value
     * @return \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[]
     */
    public function getRailSolutionChangedInfo(): ?array
    {
        return $this->RailSolutionChangedInfo;
    }
    /**
     * Set RailSolutionChangedInfo value
     * @param \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[] $railSolutionChangedInfo
     * @return \Travelport\UniversalRecord\StructType\TypeRailCreateReservationRsp
     */
    public function setRailSolutionChangedInfo(?array $railSolutionChangedInfo = null): self
    {
        $this->RailSolutionChangedInfo = $railSolutionChangedInfo;
        
        return $this;
    }
    /**
     * Add item to RailSolutionChangedInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo $item
     * @return \Travelport\UniversalRecord\StructType\TypeRailCreateReservationRsp
     */
    public function addToRailSolutionChangedInfo(\Travelport\UniversalRecord\StructType\RailSolutionChangedInfo $item): self
    {
        $this->RailSolutionChangedInfo[] = $item;
        
        return $this;
    }
}
