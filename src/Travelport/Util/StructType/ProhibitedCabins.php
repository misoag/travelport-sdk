<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\CabinClass[]
     */
    protected ?array $CabinClass = null;
    /**
     * Constructor method for ProhibitedCabins
     * @uses ProhibitedCabins::setCabinClass()
     * @param \Travelport\Util\StructType\CabinClass[] $cabinClass
     */
    public function __construct(?array $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Util\StructType\CabinClass[]
     */
    public function getCabinClass(): ?array
    {
        return $this->CabinClass;
    }
    /**
     * This method is responsible for validating the values passed to the setCabinClass method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCabinClass method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCabinClassForArrayConstraintsFromSetCabinClass(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prohibitedCabinsCabinClassItem) {
            // validation for constraint: itemType
            if (!$prohibitedCabinsCabinClassItem instanceof \Travelport\Util\StructType\CabinClass) {
                $invalidValues[] = is_object($prohibitedCabinsCabinClassItem) ? get_class($prohibitedCabinsCabinClassItem) : sprintf('%s(%s)', gettype($prohibitedCabinsCabinClassItem), var_export($prohibitedCabinsCabinClassItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CabinClass property can only contain items of type \Travelport\Util\StructType\CabinClass, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CabinClass value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CabinClass[] $cabinClass
     * @return \Travelport\Util\StructType\ProhibitedCabins
     */
    public function setCabinClass(?array $cabinClass = null): self
    {
        // validation for constraint: array
        if ('' !== ($cabinClassArrayErrorMessage = self::validateCabinClassForArrayConstraintsFromSetCabinClass($cabinClass))) {
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
     * @param \Travelport\Util\StructType\CabinClass $item
     * @return \Travelport\Util\StructType\ProhibitedCabins
     */
    public function addToCabinClass(\Travelport\Util\StructType\CabinClass $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CabinClass) {
            throw new InvalidArgumentException(sprintf('The CabinClass property can only contain items of type \Travelport\Util\StructType\CabinClass, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->CabinClass) && count($this->CabinClass) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->CabinClass)), __LINE__);
        }
        $this->CabinClass[] = $item;
        
        return $this;
    }
}
