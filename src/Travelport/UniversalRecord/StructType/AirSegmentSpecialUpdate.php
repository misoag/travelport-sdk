<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentSpecialUpdate StructType
 * @subpackage Structs
 */
class AirSegmentSpecialUpdate extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Action;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - choice: AirSegment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: air_v52_0:AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * Constructor method for AirSegmentSpecialUpdate
     * @uses AirSegmentSpecialUpdate::setAction()
     * @uses AirSegmentSpecialUpdate::setAirSegment()
     * @param string $action
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     */
    public function __construct(string $action, ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null)
    {
        $this
            ->setAction($action)
            ->setAirSegment($airSegment);
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction(): string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate
     */
    public function setAction(string $action): self
    {
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    public function getAirSegment(): ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment
    {
        return $this->AirSegment ?? null;
    }
    /**
     * Set AirSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate
     */
    public function setAirSegment(?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null): self
    {
        if (is_null($airSegment) || (is_array($airSegment) && empty($airSegment))) {
            unset($this->AirSegment);
        } else {
            $this->AirSegment = $airSegment;
        }
        
        return $this;
    }
}
