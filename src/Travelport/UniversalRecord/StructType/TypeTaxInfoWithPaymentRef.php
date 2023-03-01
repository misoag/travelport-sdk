<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $PaymentRef = null;
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
     * Set PaymentRef value
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
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
        $this->PaymentRef[] = $item;
        
        return $this;
    }
}
