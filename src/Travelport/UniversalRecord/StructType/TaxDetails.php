<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetails StructType
 * @subpackage Structs
 */
class TaxDetails extends AbstractStructBase
{
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: Tax
     * @var \Travelport\UniversalRecord\StructType\Tax[]
     */
    protected array $Tax;
    /**
     * Constructor method for TaxDetails
     * @uses TaxDetails::setTax()
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     */
    public function __construct(array $tax)
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return \Travelport\UniversalRecord\StructType\Tax[]
     */
    public function getTax(): array
    {
        return $this->Tax;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTax method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTax method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxForArrayConstraintFromSetTax(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxDetailsTaxItem) {
            // validation for constraint: itemType
            if (!$taxDetailsTaxItem instanceof \Travelport\UniversalRecord\StructType\Tax) {
                $invalidValues[] = is_object($taxDetailsTaxItem) ? get_class($taxDetailsTaxItem) : sprintf('%s(%s)', gettype($taxDetailsTaxItem), var_export($taxDetailsTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tax property can only contain items of type \Travelport\UniversalRecord\StructType\Tax, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     * @return \Travelport\UniversalRecord\StructType\TaxDetails
     */
    public function setTax(array $tax): self
    {
        // validation for constraint: array
        if ('' !== ($taxArrayErrorMessage = self::validateTaxForArrayConstraintFromSetTax($tax))) {
            throw new InvalidArgumentException($taxArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($tax) && count($tax) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($tax)), __LINE__);
        }
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Tax $item
     * @return \Travelport\UniversalRecord\StructType\TaxDetails
     */
    public function addToTax(\Travelport\UniversalRecord\StructType\Tax $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Tax) {
            throw new InvalidArgumentException(sprintf('The Tax property can only contain items of type \Travelport\UniversalRecord\StructType\Tax, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Tax) && count($this->Tax) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Tax)), __LINE__);
        }
        $this->Tax[] = $item;
        
        return $this;
    }
}
