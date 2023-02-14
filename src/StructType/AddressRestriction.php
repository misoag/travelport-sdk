<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressRestriction StructType
 * @subpackage Structs
 */
class AddressRestriction extends AbstractStructBase
{
    /**
     * The RequiredField
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RequiredField
     * @var \StructType\RequiredField[]
     */
    protected ?array $RequiredField = null;
    /**
     * Constructor method for AddressRestriction
     * @uses AddressRestriction::setRequiredField()
     * @param \StructType\RequiredField[] $requiredField
     */
    public function __construct(?array $requiredField = null)
    {
        $this
            ->setRequiredField($requiredField);
    }
    /**
     * Get RequiredField value
     * @return \StructType\RequiredField[]
     */
    public function getRequiredField(): ?array
    {
        return $this->RequiredField;
    }
    /**
     * This method is responsible for validating the values passed to the setRequiredField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequiredField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequiredFieldForArrayConstraintsFromSetRequiredField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addressRestrictionRequiredFieldItem) {
            // validation for constraint: itemType
            if (!$addressRestrictionRequiredFieldItem instanceof \StructType\RequiredField) {
                $invalidValues[] = is_object($addressRestrictionRequiredFieldItem) ? get_class($addressRestrictionRequiredFieldItem) : sprintf('%s(%s)', gettype($addressRestrictionRequiredFieldItem), var_export($addressRestrictionRequiredFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RequiredField property can only contain items of type \StructType\RequiredField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RequiredField value
     * @throws InvalidArgumentException
     * @param \StructType\RequiredField[] $requiredField
     * @return \StructType\AddressRestriction
     */
    public function setRequiredField(?array $requiredField = null): self
    {
        // validation for constraint: array
        if ('' !== ($requiredFieldArrayErrorMessage = self::validateRequiredFieldForArrayConstraintsFromSetRequiredField($requiredField))) {
            throw new InvalidArgumentException($requiredFieldArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($requiredField) && count($requiredField) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($requiredField)), __LINE__);
        }
        $this->RequiredField = $requiredField;
        
        return $this;
    }
    /**
     * Add item to RequiredField value
     * @throws InvalidArgumentException
     * @param \StructType\RequiredField $item
     * @return \StructType\AddressRestriction
     */
    public function addToRequiredField(\StructType\RequiredField $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RequiredField) {
            throw new InvalidArgumentException(sprintf('The RequiredField property can only contain items of type \StructType\RequiredField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RequiredField) && count($this->RequiredField) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RequiredField)), __LINE__);
        }
        $this->RequiredField[] = $item;
        
        return $this;
    }
}
