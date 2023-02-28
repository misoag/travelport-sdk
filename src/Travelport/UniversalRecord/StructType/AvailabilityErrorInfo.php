<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityErrorInfo StructType
 * @subpackage Structs
 */
class AvailabilityErrorInfo extends TypeErrorInfo
{
    /**
     * The AirSegmentError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirSegmentError
     * @var \Travelport\UniversalRecord\StructType\AirSegmentError[]
     */
    protected ?array $AirSegmentError = null;
    /**
     * Constructor method for AvailabilityErrorInfo
     * @uses AvailabilityErrorInfo::setAirSegmentError()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError[] $airSegmentError
     */
    public function __construct(?array $airSegmentError = null)
    {
        $this
            ->setAirSegmentError($airSegmentError);
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
     * This method is responsible for validating the value(s) passed to the setAirSegmentError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentErrorForArrayConstraintFromSetAirSegmentError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $availabilityErrorInfoAirSegmentErrorItem) {
            // validation for constraint: itemType
            if (!$availabilityErrorInfoAirSegmentErrorItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentError) {
                $invalidValues[] = is_object($availabilityErrorInfoAirSegmentErrorItem) ? get_class($availabilityErrorInfoAirSegmentErrorItem) : sprintf('%s(%s)', gettype($availabilityErrorInfoAirSegmentErrorItem), var_export($availabilityErrorInfoAirSegmentErrorItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AvailabilityErrorInfo
     */
    public function setAirSegmentError(?array $airSegmentError = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentErrorArrayErrorMessage = self::validateAirSegmentErrorForArrayConstraintFromSetAirSegmentError($airSegmentError))) {
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
     * @return \Travelport\UniversalRecord\StructType\AvailabilityErrorInfo
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
