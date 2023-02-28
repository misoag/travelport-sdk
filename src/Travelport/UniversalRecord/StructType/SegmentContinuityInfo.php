<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $ArvlUnknSegment = null;
    /**
     * The ContinuityOverrideRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ContinuityOverrideRemark
     * @var \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark[]
     */
    protected ?array $ContinuityOverrideRemark = null;
    /**
     * The ArrivalUnknownSegmentCount
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $ArrivalUnknownSegmentCount = null;
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
     * This method is responsible for validating the value(s) passed to the setArvlUnknSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArvlUnknSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArvlUnknSegmentForArrayConstraintFromSetArvlUnknSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentContinuityInfoArvlUnknSegmentItem) {
            // validation for constraint: itemType
            if (!$segmentContinuityInfoArvlUnknSegmentItem instanceof \Travelport\UniversalRecord\StructType\ArvlUnknSegment) {
                $invalidValues[] = is_object($segmentContinuityInfoArvlUnknSegmentItem) ? get_class($segmentContinuityInfoArvlUnknSegmentItem) : sprintf('%s(%s)', gettype($segmentContinuityInfoArvlUnknSegmentItem), var_export($segmentContinuityInfoArvlUnknSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArvlUnknSegment property can only contain items of type \Travelport\UniversalRecord\StructType\ArvlUnknSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArvlUnknSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ArvlUnknSegment[] $arvlUnknSegment
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function setArvlUnknSegment(?array $arvlUnknSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($arvlUnknSegmentArrayErrorMessage = self::validateArvlUnknSegmentForArrayConstraintFromSetArvlUnknSegment($arvlUnknSegment))) {
            throw new InvalidArgumentException($arvlUnknSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($arvlUnknSegment) && count($arvlUnknSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($arvlUnknSegment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ArvlUnknSegment) {
            throw new InvalidArgumentException(sprintf('The ArvlUnknSegment property can only contain items of type \Travelport\UniversalRecord\StructType\ArvlUnknSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ArvlUnknSegment) && count($this->ArvlUnknSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ArvlUnknSegment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setContinuityOverrideRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContinuityOverrideRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContinuityOverrideRemarkForArrayConstraintFromSetContinuityOverrideRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentContinuityInfoContinuityOverrideRemarkItem) {
            // validation for constraint: itemType
            if (!$segmentContinuityInfoContinuityOverrideRemarkItem instanceof \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark) {
                $invalidValues[] = is_object($segmentContinuityInfoContinuityOverrideRemarkItem) ? get_class($segmentContinuityInfoContinuityOverrideRemarkItem) : sprintf('%s(%s)', gettype($segmentContinuityInfoContinuityOverrideRemarkItem), var_export($segmentContinuityInfoContinuityOverrideRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContinuityOverrideRemark property can only contain items of type \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContinuityOverrideRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark[] $continuityOverrideRemark
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo
     */
    public function setContinuityOverrideRemark(?array $continuityOverrideRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($continuityOverrideRemarkArrayErrorMessage = self::validateContinuityOverrideRemarkForArrayConstraintFromSetContinuityOverrideRemark($continuityOverrideRemark))) {
            throw new InvalidArgumentException($continuityOverrideRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($continuityOverrideRemark) && count($continuityOverrideRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($continuityOverrideRemark)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark) {
            throw new InvalidArgumentException(sprintf('The ContinuityOverrideRemark property can only contain items of type \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ContinuityOverrideRemark) && count($this->ContinuityOverrideRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ContinuityOverrideRemark)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($arrivalUnknownSegmentCount) && !(is_int($arrivalUnknownSegmentCount) || ctype_digit($arrivalUnknownSegmentCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($arrivalUnknownSegmentCount, true), gettype($arrivalUnknownSegmentCount)), __LINE__);
        }
        $this->ArrivalUnknownSegmentCount = $arrivalUnknownSegmentCount;
        
        return $this;
    }
}
