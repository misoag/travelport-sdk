<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeUnstructuredAddress StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple unstructured address (e.g. 123 South State Avenue, Chicago, IL 60612)
 * @subpackage Structs
 */
class TypeUnstructuredAddress extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - maxOccurs: 6
     * - minLength: 0
     * - minOccurs: 0
     * - type: typeStructuredAddress
     * @var string[]
     */
    protected ?array $Address = null;
    /**
     * Constructor method for typeUnstructuredAddress
     * @uses TypeUnstructuredAddress::setAddress()
     * @param string[] $address
     */
    public function __construct(?array $address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return string[]
     */
    public function getAddress(): ?array
    {
        return $this->Address;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintFromSetAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeUnstructuredAddressAddressItem) {
            // validation for constraint: itemType
            if (!is_string($typeUnstructuredAddressAddressItem)) {
                $invalidValues[] = is_object($typeUnstructuredAddressAddressItem) ? get_class($typeUnstructuredAddressAddressItem) : sprintf('%s(%s)', gettype($typeUnstructuredAddressAddressItem), var_export($typeUnstructuredAddressAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForMaxLengthConstraintFromSetAddress(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $typeUnstructuredAddressAddressItem) {
            // validation for constraint: maxLength(50)
            if (mb_strlen((string) $typeUnstructuredAddressAddressItem) > 50) {
                $invalidValues[] = var_export($typeUnstructuredAddressAddressItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 50', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForMinLengthConstraintFromSetAddress(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $typeUnstructuredAddressAddressItem) {
            // validation for constraint: minLength
            if (mb_strlen((string) $typeUnstructuredAddressAddressItem) < 0) {
                $invalidValues[] = var_export($typeUnstructuredAddressAddressItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 0', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Address value
     * @throws InvalidArgumentException
     * @param string[] $address
     * @return \Travelport\Hotel\StructType\TypeUnstructuredAddress
     */
    public function setAddress(?array $address = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintFromSetAddress($address))) {
            throw new InvalidArgumentException($addressArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(50)
        if ('' !== ($addressMaxLengthErrorMessage = self::validateAddressForMaxLengthConstraintFromSetAddress($address))) {
            throw new InvalidArgumentException($addressMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($address) && count($address) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($address)), __LINE__);
        }
        // validation for constraint: minLength
        if ('' !== ($addressMinLengthErrorMessage = self::validateAddressForMinLengthConstraintFromSetAddress($address))) {
            throw new InvalidArgumentException($addressMinLengthErrorMessage, __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Add item to Address value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\TypeUnstructuredAddress
     */
    public function addToAddress(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Address property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (mb_strlen((string) $item) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->Address) && count($this->Address) >= 6) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->Address)), __LINE__);
        }
        // validation for constraint: minLength
        if (mb_strlen((string) $item) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $item)), __LINE__);
        }
        $this->Address[] = $item;
        
        return $this;
    }
}
