<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: AirPricing Payment information - used to associate a FormOfPayment withiin the UR with one or more AirPricingInfos
 * @subpackage Structs
 */
class AirPricingPayment extends AbstractStructBase
{
    /**
     * The Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    public ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * The FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * @var \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * Constructor method for AirPricingPayment
     * @uses AirPricingPayment::setPayment()
     * @uses AirPricingPayment::setFormOfPayment()
     * @uses AirPricingPayment::setFormOfPaymentRef()
     * @uses AirPricingPayment::setAirPricingInfoRef()
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Payment $payment = null, ?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $airPricingInfoRef = null)
    {
        $this
            ->setPayment($payment)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setAirPricingInfoRef($airPricingInfoRef);
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\UniversalRecord\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @return \Travelport\UniversalRecord\StructType\AirPricingPayment
     */
    public function setPayment(?\Travelport\UniversalRecord\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\UniversalRecord\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\AirPricingPayment
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingPayment
     */
    public function setFormOfPaymentRef(?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingPayment
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingPayment
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
}
