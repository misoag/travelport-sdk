<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTaxInfoWithPaymentRef StructType
 * Meta information extracted from the WSDL
 * - documentation: This reference elements will associate relevant payment to this tax
 * @subpackage Structs
 */
class TypeTaxInfoWithPaymentRef extends TypeTaxInfo
{
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PaymentRef
     * @var \Travelport\UniversalRecord\StructType\PaymentRef[]
     */
    protected ?array $PaymentRef = null;
    /**
     * Constructor method for typeTaxInfoWithPaymentRef
     * @uses TypeTaxInfoWithPaymentRef::setPaymentRef()
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     */
    public function __construct(?array $paymentRef = null)
    {
        $this
            ->setPaymentRef($paymentRef);
    }
    /**
     * Get PaymentRef value
     * @return \Travelport\UniversalRecord\StructType\PaymentRef[]
     */
    public function getPaymentRef(): ?array
    {
        return $this->PaymentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentRefForArrayConstraintsFromSetPaymentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeTaxInfoWithPaymentRefPaymentRefItem) {
            // validation for constraint: itemType
            if (!$typeTaxInfoWithPaymentRefPaymentRefItem instanceof \Travelport\UniversalRecord\StructType\PaymentRef) {
                $invalidValues[] = is_object($typeTaxInfoWithPaymentRefPaymentRefItem) ? get_class($typeTaxInfoWithPaymentRefPaymentRefItem) : sprintf('%s(%s)', gettype($typeTaxInfoWithPaymentRefPaymentRefItem), var_export($typeTaxInfoWithPaymentRefPaymentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentRef property can only contain items of type \Travelport\UniversalRecord\StructType\PaymentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentRefArrayErrorMessage = self::validatePaymentRefForArrayConstraintsFromSetPaymentRef($paymentRef))) {
            throw new InvalidArgumentException($paymentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($paymentRef) && count($paymentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($paymentRef)), __LINE__);
        }
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Add item to PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef
     */
    public function addToPaymentRef(\Travelport\UniversalRecord\StructType\PaymentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PaymentRef) {
            throw new InvalidArgumentException(sprintf('The PaymentRef property can only contain items of type \Travelport\UniversalRecord\StructType\PaymentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PaymentRef) && count($this->PaymentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PaymentRef)), __LINE__);
        }
        $this->PaymentRef[] = $item;
        
        return $this;
    }
}
