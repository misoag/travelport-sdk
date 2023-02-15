<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalModifyErrorInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return modify command errors.
 * @subpackage Structs
 */
class UniversalModifyErrorInfo extends TypeErrorInfo
{
    /**
     * The UniversalModifyCommandError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UniversalModifyCommandError
     * @var \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[]
     */
    protected ?array $UniversalModifyCommandError = null;
    /**
     * The AirSegmentError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v51_0:AirSegmentError
     * @var \Travelport\UniversalRecord\StructType\AirSegmentError[]
     */
    protected ?array $AirSegmentError = null;
    /**
     * Constructor method for UniversalModifyErrorInfo
     * @uses UniversalModifyErrorInfo::setUniversalModifyCommandError()
     * @uses UniversalModifyErrorInfo::setAirSegmentError()
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[] $universalModifyCommandError
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError[] $airSegmentError
     */
    public function __construct(?array $universalModifyCommandError = null, ?array $airSegmentError = null)
    {
        $this
            ->setUniversalModifyCommandError($universalModifyCommandError)
            ->setAirSegmentError($airSegmentError);
    }
    /**
     * Get UniversalModifyCommandError value
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[]
     */
    public function getUniversalModifyCommandError(): ?array
    {
        return $this->UniversalModifyCommandError;
    }
    /**
     * This method is responsible for validating the values passed to the setUniversalModifyCommandError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalModifyCommandError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversalModifyCommandErrorForArrayConstraintsFromSetUniversalModifyCommandError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalModifyErrorInfoUniversalModifyCommandErrorItem) {
            // validation for constraint: itemType
            if (!$universalModifyErrorInfoUniversalModifyCommandErrorItem instanceof \Travelport\UniversalRecord\StructType\UniversalModifyCommandError) {
                $invalidValues[] = is_object($universalModifyErrorInfoUniversalModifyCommandErrorItem) ? get_class($universalModifyErrorInfoUniversalModifyCommandErrorItem) : sprintf('%s(%s)', gettype($universalModifyErrorInfoUniversalModifyCommandErrorItem), var_export($universalModifyErrorInfoUniversalModifyCommandErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UniversalModifyCommandError property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalModifyCommandError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UniversalModifyCommandError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[] $universalModifyCommandError
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function setUniversalModifyCommandError(?array $universalModifyCommandError = null): self
    {
        // validation for constraint: array
        if ('' !== ($universalModifyCommandErrorArrayErrorMessage = self::validateUniversalModifyCommandErrorForArrayConstraintsFromSetUniversalModifyCommandError($universalModifyCommandError))) {
            throw new InvalidArgumentException($universalModifyCommandErrorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($universalModifyCommandError) && count($universalModifyCommandError) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($universalModifyCommandError)), __LINE__);
        }
        $this->UniversalModifyCommandError = $universalModifyCommandError;
        
        return $this;
    }
    /**
     * Add item to UniversalModifyCommandError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError $item
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function addToUniversalModifyCommandError(\Travelport\UniversalRecord\StructType\UniversalModifyCommandError $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\UniversalModifyCommandError) {
            throw new InvalidArgumentException(sprintf('The UniversalModifyCommandError property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalModifyCommandError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->UniversalModifyCommandError) && count($this->UniversalModifyCommandError) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->UniversalModifyCommandError)), __LINE__);
        }
        $this->UniversalModifyCommandError[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentError value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentError[]
     */
    public function getAirSegmentError(): ?array
    {
        return $this->AirSegmentError;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentErrorForArrayConstraintsFromSetAirSegmentError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalModifyErrorInfoAirSegmentErrorItem) {
            // validation for constraint: itemType
            if (!$universalModifyErrorInfoAirSegmentErrorItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentError) {
                $invalidValues[] = is_object($universalModifyErrorInfoAirSegmentErrorItem) ? get_class($universalModifyErrorInfoAirSegmentErrorItem) : sprintf('%s(%s)', gettype($universalModifyErrorInfoAirSegmentErrorItem), var_export($universalModifyErrorInfoAirSegmentErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentError property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError[] $airSegmentError
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function setAirSegmentError(?array $airSegmentError = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentErrorArrayErrorMessage = self::validateAirSegmentErrorForArrayConstraintsFromSetAirSegmentError($airSegmentError))) {
            throw new InvalidArgumentException($airSegmentErrorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentError) && count($airSegmentError) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentError)), __LINE__);
        }
        $this->AirSegmentError = $airSegmentError;
        
        return $this;
    }
    /**
     * Add item to AirSegmentError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError $item
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function addToAirSegmentError(\Travelport\UniversalRecord\StructType\AirSegmentError $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentError) {
            throw new InvalidArgumentException(sprintf('The AirSegmentError property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentError) && count($this->AirSegmentError) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentError)), __LINE__);
        }
        $this->AirSegmentError[] = $item;
        
        return $this;
    }
}
