<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\Payment|null
     */
    protected ?\Travelport\Util\StructType\Payment $Payment = null;
    /**
     * The FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment|null
     */
    protected ?\Travelport\Util\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * @var \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    protected ?\Travelport\Util\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingInfoRef
     * @var \Travelport\Util\StructType\AirPricingInfoRef[]
     */
    protected ?array $AirPricingInfoRef = null;
    /**
     * Constructor method for AirPricingPayment
     * @uses AirPricingPayment::setPayment()
     * @uses AirPricingPayment::setFormOfPayment()
     * @uses AirPricingPayment::setFormOfPaymentRef()
     * @uses AirPricingPayment::setAirPricingInfoRef()
     * @param \Travelport\Util\StructType\Payment $payment
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Util\StructType\AirPricingInfoRef[] $airPricingInfoRef
     */
    public function __construct(?\Travelport\Util\StructType\Payment $payment = null, ?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $airPricingInfoRef = null)
    {
        $this
            ->setPayment($payment)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setAirPricingInfoRef($airPricingInfoRef);
    }
    /**
     * Get Payment value
     * @return \Travelport\Util\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\Util\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Util\StructType\Payment $payment
     * @return \Travelport\Util\StructType\AirPricingPayment
     */
    public function setPayment(?\Travelport\Util\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Util\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Util\StructType\AirPricingPayment
     */
    public function setFormOfPayment(?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Util\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Util\StructType\AirPricingPayment
     */
    public function setFormOfPaymentRef(?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Util\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingPaymentAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$airPricingPaymentAirPricingInfoRefItem instanceof \Travelport\Util\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($airPricingPaymentAirPricingInfoRefItem) ? get_class($airPricingPaymentAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($airPricingPaymentAirPricingInfoRefItem), var_export($airPricingPaymentAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\Util\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Util\StructType\AirPricingPayment
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfoRef $item
     * @return \Travelport\Util\StructType\AirPricingPayment
     */
    public function addToAirPricingInfoRef(\Travelport\Util\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\Util\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
}
