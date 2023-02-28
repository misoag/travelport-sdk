<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageRestriction StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Baggage restriction rules .
 * @subpackage Structs
 */
class BaggageRestriction extends AbstractStructBase
{
    /**
     * The Dimension
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Dimension
     * @var \Travelport\Util\StructType\Dimension[]
     */
    protected ?array $Dimension = null;
    /**
     * The MaxWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeUnitOfMeasure[]
     */
    protected ?array $MaxWeight = null;
    /**
     * The TextInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TextInfo
     * @var \Travelport\Util\StructType\TextInfo[]
     */
    protected ?array $TextInfo = null;
    /**
     * Constructor method for BaggageRestriction
     * @uses BaggageRestriction::setDimension()
     * @uses BaggageRestriction::setMaxWeight()
     * @uses BaggageRestriction::setTextInfo()
     * @param \Travelport\Util\StructType\Dimension[] $dimension
     * @param \Travelport\Util\StructType\TypeUnitOfMeasure[] $maxWeight
     * @param \Travelport\Util\StructType\TextInfo[] $textInfo
     */
    public function __construct(?array $dimension = null, ?array $maxWeight = null, ?array $textInfo = null)
    {
        $this
            ->setDimension($dimension)
            ->setMaxWeight($maxWeight)
            ->setTextInfo($textInfo);
    }
    /**
     * Get Dimension value
     * @return \Travelport\Util\StructType\Dimension[]
     */
    public function getDimension(): ?array
    {
        return $this->Dimension;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDimension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDimension method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDimensionForArrayConstraintFromSetDimension(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageRestrictionDimensionItem) {
            // validation for constraint: itemType
            if (!$baggageRestrictionDimensionItem instanceof \Travelport\Util\StructType\Dimension) {
                $invalidValues[] = is_object($baggageRestrictionDimensionItem) ? get_class($baggageRestrictionDimensionItem) : sprintf('%s(%s)', gettype($baggageRestrictionDimensionItem), var_export($baggageRestrictionDimensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dimension property can only contain items of type \Travelport\Util\StructType\Dimension, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Dimension value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Dimension[] $dimension
     * @return \Travelport\Util\StructType\BaggageRestriction
     */
    public function setDimension(?array $dimension = null): self
    {
        // validation for constraint: array
        if ('' !== ($dimensionArrayErrorMessage = self::validateDimensionForArrayConstraintFromSetDimension($dimension))) {
            throw new InvalidArgumentException($dimensionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($dimension) && count($dimension) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($dimension)), __LINE__);
        }
        $this->Dimension = $dimension;
        
        return $this;
    }
    /**
     * Add item to Dimension value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Dimension $item
     * @return \Travelport\Util\StructType\BaggageRestriction
     */
    public function addToDimension(\Travelport\Util\StructType\Dimension $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Dimension) {
            throw new InvalidArgumentException(sprintf('The Dimension property can only contain items of type \Travelport\Util\StructType\Dimension, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Dimension) && count($this->Dimension) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Dimension)), __LINE__);
        }
        $this->Dimension[] = $item;
        
        return $this;
    }
    /**
     * Get MaxWeight value
     * @return \Travelport\Util\StructType\TypeUnitOfMeasure[]
     */
    public function getMaxWeight(): ?array
    {
        return $this->MaxWeight;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMaxWeight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaxWeight method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaxWeightForArrayConstraintFromSetMaxWeight(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageRestrictionMaxWeightItem) {
            // validation for constraint: itemType
            if (!$baggageRestrictionMaxWeightItem instanceof \Travelport\Util\StructType\TypeUnitOfMeasure) {
                $invalidValues[] = is_object($baggageRestrictionMaxWeightItem) ? get_class($baggageRestrictionMaxWeightItem) : sprintf('%s(%s)', gettype($baggageRestrictionMaxWeightItem), var_export($baggageRestrictionMaxWeightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MaxWeight property can only contain items of type \Travelport\Util\StructType\TypeUnitOfMeasure, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MaxWeight value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeUnitOfMeasure[] $maxWeight
     * @return \Travelport\Util\StructType\BaggageRestriction
     */
    public function setMaxWeight(?array $maxWeight = null): self
    {
        // validation for constraint: array
        if ('' !== ($maxWeightArrayErrorMessage = self::validateMaxWeightForArrayConstraintFromSetMaxWeight($maxWeight))) {
            throw new InvalidArgumentException($maxWeightArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($maxWeight) && count($maxWeight) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($maxWeight)), __LINE__);
        }
        $this->MaxWeight = $maxWeight;
        
        return $this;
    }
    /**
     * Add item to MaxWeight value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeUnitOfMeasure $item
     * @return \Travelport\Util\StructType\BaggageRestriction
     */
    public function addToMaxWeight(\Travelport\Util\StructType\TypeUnitOfMeasure $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeUnitOfMeasure) {
            throw new InvalidArgumentException(sprintf('The MaxWeight property can only contain items of type \Travelport\Util\StructType\TypeUnitOfMeasure, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MaxWeight) && count($this->MaxWeight) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MaxWeight)), __LINE__);
        }
        $this->MaxWeight[] = $item;
        
        return $this;
    }
    /**
     * Get TextInfo value
     * @return \Travelport\Util\StructType\TextInfo[]
     */
    public function getTextInfo(): ?array
    {
        return $this->TextInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTextInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTextInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextInfoForArrayConstraintFromSetTextInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageRestrictionTextInfoItem) {
            // validation for constraint: itemType
            if (!$baggageRestrictionTextInfoItem instanceof \Travelport\Util\StructType\TextInfo) {
                $invalidValues[] = is_object($baggageRestrictionTextInfoItem) ? get_class($baggageRestrictionTextInfoItem) : sprintf('%s(%s)', gettype($baggageRestrictionTextInfoItem), var_export($baggageRestrictionTextInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TextInfo property can only contain items of type \Travelport\Util\StructType\TextInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TextInfo[] $textInfo
     * @return \Travelport\Util\StructType\BaggageRestriction
     */
    public function setTextInfo(?array $textInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($textInfoArrayErrorMessage = self::validateTextInfoForArrayConstraintFromSetTextInfo($textInfo))) {
            throw new InvalidArgumentException($textInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($textInfo) && count($textInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($textInfo)), __LINE__);
        }
        $this->TextInfo = $textInfo;
        
        return $this;
    }
    /**
     * Add item to TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TextInfo $item
     * @return \Travelport\Util\StructType\BaggageRestriction
     */
    public function addToTextInfo(\Travelport\Util\StructType\TextInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TextInfo) {
            throw new InvalidArgumentException(sprintf('The TextInfo property can only contain items of type \Travelport\Util\StructType\TextInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TextInfo) && count($this->TextInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TextInfo)), __LINE__);
        }
        $this->TextInfo[] = $item;
        
        return $this;
    }
}
