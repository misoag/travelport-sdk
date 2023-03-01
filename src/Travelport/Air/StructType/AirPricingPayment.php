<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\Payment|null
     */
    public ?\Travelport\Air\StructType\Payment $Payment = null;
    /**
     * The FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment|null
     */
    public ?\Travelport\Air\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * @var \Travelport\Air\StructType\FormOfPaymentRef|null
     */
    public ?\Travelport\Air\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingInfoRef
     * @var \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * Constructor method for AirPricingPayment
     * @uses AirPricingPayment::setPayment()
     * @uses AirPricingPayment::setFormOfPayment()
     * @uses AirPricingPayment::setFormOfPaymentRef()
     * @uses AirPricingPayment::setAirPricingInfoRef()
     * @param \Travelport\Air\StructType\Payment $payment
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     */
    public function __construct(?\Travelport\Air\StructType\Payment $payment = null, ?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $airPricingInfoRef = null)
    {
        $this
            ->setPayment($payment)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setAirPricingInfoRef($airPricingInfoRef);
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\Air\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment $payment
     * @return \Travelport\Air\StructType\AirPricingPayment
     */
    public function setPayment(?\Travelport\Air\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Air\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Air\StructType\AirPricingPayment
     */
    public function setFormOfPayment(?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Air\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Air\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Air\StructType\AirPricingPayment
     */
    public function setFormOfPaymentRef(?\Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Air\StructType\AirPricingPayment
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfoRef $item
     * @return \Travelport\Air\StructType\AirPricingPayment
     */
    public function addToAirPricingInfoRef(\Travelport\Air\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
}
