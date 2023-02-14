<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected int $Version;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ContinuityCheckOverride
     * @var \Travelport\UniversalRecord\StructType\ContinuityCheckOverride|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - ref: air_v52_0:AirReservationLocatorCode
     * @var \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentForArrayConstraintsFromSetAirSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCancelReqAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airCancelReqAirSegmentItem instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airCancelReqAirSegmentItem) ? get_class($airCancelReqAirSegmentItem) : sprintf('%s(%s)', gettype($airCancelReqAirSegmentItem), var_export($airCancelReqAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintsFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCancelReqAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$airCancelReqAirSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($airCancelReqAirSegmentRefItem) ? get_class($airCancelReqAirSegmentRefItem) : sprintf('%s(%s)', gettype($airCancelReqAirSegmentRefItem), var_export($airCancelReqAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\AirCancelReq
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
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
