<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentSellFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return air segment sell failures.
 * @subpackage Structs
 */
class AirSegmentSellFailureInfo extends AbstractStructBase
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
     * Constructor method for AirSegmentSellFailureInfo
     * @uses AirSegmentSellFailureInfo::setAirSegmentError()
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
        foreach ($values as $airSegmentSellFailureInfoAirSegmentErrorItem) {
            // validation for constraint: itemType
            if (!$airSegmentSellFailureInfoAirSegmentErrorItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentError) {
                $invalidValues[] = is_object($airSegmentSellFailureInfoAirSegmentErrorItem) ? get_class($airSegmentSellFailureInfoAirSegmentErrorItem) : sprintf('%s(%s)', gettype($airSegmentSellFailureInfoAirSegmentErrorItem), var_export($airSegmentSellFailureInfoAirSegmentErrorItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo
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
