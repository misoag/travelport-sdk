<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalModifyFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return air segment sell failures.
 * @subpackage Structs
 */
class UniversalModifyFailureInfo extends AbstractStructBase
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
     * The AirSegmentSellFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentSellFailureInfo
     * @var \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $AirSegmentSellFailureInfo = null;
    /**
     * Constructor method for UniversalModifyFailureInfo
     * @uses UniversalModifyFailureInfo::setUniversalModifyCommandError()
     * @uses UniversalModifyFailureInfo::setAirSegmentSellFailureInfo()
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[] $universalModifyCommandError
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo
     */
    public function __construct(?array $universalModifyCommandError = null, ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo = null)
    {
        $this
            ->setUniversalModifyCommandError($universalModifyCommandError)
            ->setAirSegmentSellFailureInfo($airSegmentSellFailureInfo);
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
        foreach ($values as $universalModifyFailureInfoUniversalModifyCommandErrorItem) {
            // validation for constraint: itemType
            if (!$universalModifyFailureInfoUniversalModifyCommandErrorItem instanceof \Travelport\UniversalRecord\StructType\UniversalModifyCommandError) {
                $invalidValues[] = is_object($universalModifyFailureInfoUniversalModifyCommandErrorItem) ? get_class($universalModifyFailureInfoUniversalModifyCommandErrorItem) : sprintf('%s(%s)', gettype($universalModifyFailureInfoUniversalModifyCommandErrorItem), var_export($universalModifyFailureInfoUniversalModifyCommandErrorItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
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
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
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
     * Get AirSegmentSellFailureInfo value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo|null
     */
    public function getAirSegmentSellFailureInfo(): ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo
    {
        return $this->AirSegmentSellFailureInfo;
    }
    /**
     * Set AirSegmentSellFailureInfo value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
     */
    public function setAirSegmentSellFailureInfo(?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo = null): self
    {
        $this->AirSegmentSellFailureInfo = $airSegmentSellFailureInfo;
        
        return $this;
    }
}
