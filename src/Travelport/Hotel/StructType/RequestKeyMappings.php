<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestKeyMappings StructType
 * Meta information extracted from the WSDL
 * - documentation: All the elements for which mapping key sent in the request is different from the mapping key comes in the response.
 * @subpackage Structs
 */
class RequestKeyMappings extends AbstractStructBase
{
    /**
     * The KeyMapping
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: KeyMapping
     * @var \Travelport\Hotel\StructType\KeyMapping[]
     */
    protected ?array $KeyMapping = null;
    /**
     * Constructor method for RequestKeyMappings
     * @uses RequestKeyMappings::setKeyMapping()
     * @param \Travelport\Hotel\StructType\KeyMapping[] $keyMapping
     */
    public function __construct(?array $keyMapping = null)
    {
        $this
            ->setKeyMapping($keyMapping);
    }
    /**
     * Get KeyMapping value
     * @return \Travelport\Hotel\StructType\KeyMapping[]
     */
    public function getKeyMapping(): ?array
    {
        return $this->KeyMapping;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKeyMapping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyMapping method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyMappingForArrayConstraintFromSetKeyMapping(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestKeyMappingsKeyMappingItem) {
            // validation for constraint: itemType
            if (!$requestKeyMappingsKeyMappingItem instanceof \Travelport\Hotel\StructType\KeyMapping) {
                $invalidValues[] = is_object($requestKeyMappingsKeyMappingItem) ? get_class($requestKeyMappingsKeyMappingItem) : sprintf('%s(%s)', gettype($requestKeyMappingsKeyMappingItem), var_export($requestKeyMappingsKeyMappingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyMapping property can only contain items of type \Travelport\Hotel\StructType\KeyMapping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyMapping value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\KeyMapping[] $keyMapping
     * @return \Travelport\Hotel\StructType\RequestKeyMappings
     */
    public function setKeyMapping(?array $keyMapping = null): self
    {
        // validation for constraint: array
        if ('' !== ($keyMappingArrayErrorMessage = self::validateKeyMappingForArrayConstraintFromSetKeyMapping($keyMapping))) {
            throw new InvalidArgumentException($keyMappingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($keyMapping) && count($keyMapping) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($keyMapping)), __LINE__);
        }
        $this->KeyMapping = $keyMapping;
        
        return $this;
    }
    /**
     * Add item to KeyMapping value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\KeyMapping $item
     * @return \Travelport\Hotel\StructType\RequestKeyMappings
     */
    public function addToKeyMapping(\Travelport\Hotel\StructType\KeyMapping $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\KeyMapping) {
            throw new InvalidArgumentException(sprintf('The KeyMapping property can only contain items of type \Travelport\Hotel\StructType\KeyMapping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->KeyMapping) && count($this->KeyMapping) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->KeyMapping)), __LINE__);
        }
        $this->KeyMapping[] = $item;
        
        return $this;
    }
}
