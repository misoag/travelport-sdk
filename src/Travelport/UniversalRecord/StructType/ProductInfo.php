<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfo StructType
 * @subpackage Structs
 */
class ProductInfo extends TypeSavedTripProductInfo
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name[]
     */
    protected ?array $Name = null;
    /**
     * Constructor method for ProductInfo
     * @uses ProductInfo::setName()
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     */
    public function __construct(?array $name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return \Travelport\UniversalRecord\StructType\Name[]
     */
    public function getName(): ?array
    {
        return $this->Name;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameForArrayConstraintFromSetName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productInfoNameItem) {
            // validation for constraint: itemType
            if (!$productInfoNameItem instanceof \Travelport\UniversalRecord\StructType\Name) {
                $invalidValues[] = is_object($productInfoNameItem) ? get_class($productInfoNameItem) : sprintf('%s(%s)', gettype($productInfoNameItem), var_export($productInfoNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name property can only contain items of type \Travelport\UniversalRecord\StructType\Name, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Name value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @return \Travelport\UniversalRecord\StructType\ProductInfo
     */
    public function setName(?array $name = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameArrayErrorMessage = self::validateNameForArrayConstraintFromSetName($name))) {
            throw new InvalidArgumentException($nameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($name) && count($name) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Add item to Name value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Name $item
     * @return \Travelport\UniversalRecord\StructType\ProductInfo
     */
    public function addToName(\Travelport\UniversalRecord\StructType\Name $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Name) {
            throw new InvalidArgumentException(sprintf('The Name property can only contain items of type \Travelport\UniversalRecord\StructType\Name, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Name) && count($this->Name) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Name)), __LINE__);
        }
        $this->Name[] = $item;
        
        return $this;
    }
}
