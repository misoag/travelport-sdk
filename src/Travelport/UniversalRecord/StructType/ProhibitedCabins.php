<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedCabins StructType
 * @subpackage Structs
 */
class ProhibitedCabins extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - ref: common:CabinClass
     * @var \Travelport\UniversalRecord\StructType\CabinClass[]
     */
    protected ?array $CabinClass = null;
    /**
     * Constructor method for ProhibitedCabins
     * @uses ProhibitedCabins::setCabinClass()
     * @param \Travelport\UniversalRecord\StructType\CabinClass[] $cabinClass
     */
    public function __construct(?array $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\UniversalRecord\StructType\CabinClass[]
     */
    public function getCabinClass(): ?array
    {
        return $this->CabinClass;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCabinClass method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCabinClass method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCabinClassForArrayConstraintFromSetCabinClass(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prohibitedCabinsCabinClassItem) {
            // validation for constraint: itemType
            if (!$prohibitedCabinsCabinClassItem instanceof \Travelport\UniversalRecord\StructType\CabinClass) {
                $invalidValues[] = is_object($prohibitedCabinsCabinClassItem) ? get_class($prohibitedCabinsCabinClassItem) : sprintf('%s(%s)', gettype($prohibitedCabinsCabinClassItem), var_export($prohibitedCabinsCabinClassItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CabinClass property can only contain items of type \Travelport\UniversalRecord\StructType\CabinClass, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CabinClass value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CabinClass[] $cabinClass
     * @return \Travelport\UniversalRecord\StructType\ProhibitedCabins
     */
    public function setCabinClass(?array $cabinClass = null): self
    {
        // validation for constraint: array
        if ('' !== ($cabinClassArrayErrorMessage = self::validateCabinClassForArrayConstraintFromSetCabinClass($cabinClass))) {
            throw new InvalidArgumentException($cabinClassArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($cabinClass) && count($cabinClass) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Add item to CabinClass value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CabinClass $item
     * @return \Travelport\UniversalRecord\StructType\ProhibitedCabins
     */
    public function addToCabinClass(\Travelport\UniversalRecord\StructType\CabinClass $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CabinClass) {
            throw new InvalidArgumentException(sprintf('The CabinClass property can only contain items of type \Travelport\UniversalRecord\StructType\CabinClass, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->CabinClass) && count($this->CabinClass) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->CabinClass)), __LINE__);
        }
        $this->CabinClass[] = $item;
        
        return $this;
    }
}
