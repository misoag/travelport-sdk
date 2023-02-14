<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredSuppliers StructType
 * @subpackage Structs
 */
class PreferredSuppliers extends AbstractStructBase
{
    /**
     * The RailSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailSupplier
     * @var \Travelport\UniversalRecord\StructType\RailSupplier[]
     */
    protected ?array $RailSupplier = null;
    /**
     * Constructor method for PreferredSuppliers
     * @uses PreferredSuppliers::setRailSupplier()
     * @param \Travelport\UniversalRecord\StructType\RailSupplier[] $railSupplier
     */
    public function __construct(?array $railSupplier = null)
    {
        $this
            ->setRailSupplier($railSupplier);
    }
    /**
     * Get RailSupplier value
     * @return \Travelport\UniversalRecord\StructType\RailSupplier[]
     */
    public function getRailSupplier(): ?array
    {
        return $this->RailSupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setRailSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSupplierForArrayConstraintsFromSetRailSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $preferredSuppliersRailSupplierItem) {
            // validation for constraint: itemType
            if (!$preferredSuppliersRailSupplierItem instanceof \Travelport\UniversalRecord\StructType\RailSupplier) {
                $invalidValues[] = is_object($preferredSuppliersRailSupplierItem) ? get_class($preferredSuppliersRailSupplierItem) : sprintf('%s(%s)', gettype($preferredSuppliersRailSupplierItem), var_export($preferredSuppliersRailSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSupplier property can only contain items of type \Travelport\UniversalRecord\StructType\RailSupplier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSupplier[] $railSupplier
     * @return \Travelport\UniversalRecord\StructType\PreferredSuppliers
     */
    public function setRailSupplier(?array $railSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSupplierArrayErrorMessage = self::validateRailSupplierForArrayConstraintsFromSetRailSupplier($railSupplier))) {
            throw new InvalidArgumentException($railSupplierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSupplier) && count($railSupplier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSupplier)), __LINE__);
        }
        $this->RailSupplier = $railSupplier;
        
        return $this;
    }
    /**
     * Add item to RailSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSupplier $item
     * @return \Travelport\UniversalRecord\StructType\PreferredSuppliers
     */
    public function addToRailSupplier(\Travelport\UniversalRecord\StructType\RailSupplier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSupplier) {
            throw new InvalidArgumentException(sprintf('The RailSupplier property can only contain items of type \Travelport\UniversalRecord\StructType\RailSupplier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSupplier) && count($this->RailSupplier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSupplier)), __LINE__);
        }
        $this->RailSupplier[] = $item;
        
        return $this;
    }
}
