<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirCancelReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Air Cancel request is used to cancel all or part of an AirReservation. Given only a locator code, everything within the AirReservation would be canceled. If particular segments are specified, then only those segments will be
 * canceled.
 * @subpackage Structs
 */
class AirCancelReq extends BaseReq
{
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH. | Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    public int $Version;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ContinuityCheckOverride
     * @var \Travelport\UniversalRecord\StructType\ContinuityCheckOverride|null
     */
    public ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - ref: air_v52_0:AirReservationLocatorCode
     * @var \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * Constructor method for AirCancelReq
     * @uses AirCancelReq::setVersion()
     * @uses AirCancelReq::setContinuityCheckOverride()
     * @uses AirCancelReq::setAirReservationLocatorCode()
     * @uses AirCancelReq::setAirSegment()
     * @uses AirCancelReq::setAirSegmentRef()
     * @uses AirCancelReq::setFileFinishingInfo()
     * @param int $version
     * @param \Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @param \Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     */
    public function __construct(int $version, ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride = null, ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $airSegment = null, ?array $airSegmentRef = null, ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null)
    {
        $this
            ->setVersion($version)
            ->setContinuityCheckOverride($continuityCheckOverride)
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setAirSegment($airSegment)
            ->setAirSegmentRef($airSegmentRef)
            ->setFileFinishingInfo($fileFinishingInfo);
    }
    /**
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setVersion(int $version): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get ContinuityCheckOverride value
     * @return \Travelport\UniversalRecord\StructType\ContinuityCheckOverride|null
     */
    public function getContinuityCheckOverride(): ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride
    {
        return $this->ContinuityCheckOverride;
    }
    /**
     * Set ContinuityCheckOverride value
     * @param \Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setContinuityCheckOverride(?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride = null): self
    {
        $this->ContinuityCheckOverride = $continuityCheckOverride;
        
        return $this;
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setAirReservationLocatorCode(?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\UniversalRecord\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
}
