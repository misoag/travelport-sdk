<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentContinuityInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: This container holds Arnks and segment continuity remarks
 * @subpackage Structs
 */
class SegmentContinuityInfo extends AbstractStructBase
{
    /**
     * The ArvlUnknSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ArvlUnknSegment
     * @var \Travelport\UniversalRecord\StructType\ArvlUnknSegment[]
     */
    public ?array $ArvlUnknSegment = null;
    /**
     * The ContinuityOverrideRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ContinuityOverrideRemark
     * @var \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark[]
     */
    public ?array $ContinuityOverrideRemark = null;
    /**
     * The ArrivalUnknownSegmentCount
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $ArrivalUnknownSegmentCount = null;
    /**
     * Constructor method for SegmentContinuityInfo
     * @uses SegmentContinuityInfo::setArvlUnknSegment()
     * @uses SegmentContinuityInfo::setContinuityOverrideRemark()
     * @uses SegmentContinuityInfo::setArrivalUnknownSegmentCount()
     * @param \Travelport\UniversalRecord\StructType\ArvlUnknSegment[] $arvlUnknSegment
     * @param \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark[] $continuityOverrideRemark
     * @param int $arrivalUnknownSegmentCount
     */
    public function __construct(?array $arvlUnknSegment = null, ?array $continuityOverrideRemark = null, ?int $arrivalUnknownSegmentCount = null)
    {
        $this
            ->setArvlUnknSegment($arvlUnknSegment)
            ->setContinuityOverrideRemark($continuityOverrideRemark)
            ->setArrivalUnknownSegmentCount($arrivalUnknownSegmentCount);
    }
    /**
     * Get ArvlUnknSegment value
     * @return \Travelport\UniversalRecord\StructType\ArvlUnknSegment[]
     */
    public function getArvlUnknSegment(): ?array
    {
        return $this->ArvlUnknSegment;
    }
    /**
     * Set ArvlUnknSegment value
     * @param \Travelport\UniversalRecord\StructType\ArvlUnknSegment[] $arvlUnknSegment
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function setArvlUnknSegment(?array $arvlUnknSegment = null): self
    {
        $this->ArvlUnknSegment = $arvlUnknSegment;
        
        return $this;
    }
    /**
     * Add item to ArvlUnknSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ArvlUnknSegment $item
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function addToArvlUnknSegment(\Travelport\UniversalRecord\StructType\ArvlUnknSegment $item): self
    {
        $this->ArvlUnknSegment[] = $item;
        
        return $this;
    }
    /**
     * Get ContinuityOverrideRemark value
     * @return \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark[]
     */
    public function getContinuityOverrideRemark(): ?array
    {
        return $this->ContinuityOverrideRemark;
    }
    /**
     * Set ContinuityOverrideRemark value
     * @param \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark[] $continuityOverrideRemark
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function setContinuityOverrideRemark(?array $continuityOverrideRemark = null): self
    {
        $this->ContinuityOverrideRemark = $continuityOverrideRemark;
        
        return $this;
    }
    /**
     * Add item to ContinuityOverrideRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark $item
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function addToContinuityOverrideRemark(\Travelport\UniversalRecord\StructType\ContinuityOverrideRemark $item): self
    {
        $this->ContinuityOverrideRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ArrivalUnknownSegmentCount value
     * @return int|null
     */
    public function getArrivalUnknownSegmentCount(): ?int
    {
        return $this->ArrivalUnknownSegmentCount;
    }
    /**
     * Set ArrivalUnknownSegmentCount value
     * @param int $arrivalUnknownSegmentCount
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function setArrivalUnknownSegmentCount(?int $arrivalUnknownSegmentCount = null): self
    {
        $this->ArrivalUnknownSegmentCount = $arrivalUnknownSegmentCount;
        
        return $this;
    }
}
