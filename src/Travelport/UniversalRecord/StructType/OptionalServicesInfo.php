<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServicesInfo StructType
 * @subpackage Structs
 */
class OptionalServicesInfo extends AbstractStructBase
{
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - ref: AirPricingSolution
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\UniversalRecord\StructType\FormOfPaymentRef[]
     */
    protected ?array $FormOfPaymentRef = null;
    /**
     * Constructor method for OptionalServicesInfo
     * @uses OptionalServicesInfo::setAirPricingSolution()
     * @uses OptionalServicesInfo::setFormOfPayment()
     * @uses OptionalServicesInfo::setFormOfPaymentRef()
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef[] $formOfPaymentRef
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution = null, ?array $formOfPayment = null, ?array $formOfPaymentRef = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution|null
     */
    public function getAirPricingSolution(): ?\Travelport\UniversalRecord\StructType\AirPricingSolution
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function setAirPricingSolution(?\Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServicesInfoFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$optionalServicesInfoFormOfPaymentItem instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
                $invalidValues[] = is_object($optionalServicesInfoFormOfPaymentItem) ? get_class($optionalServicesInfoFormOfPaymentItem) : sprintf('%s(%s)', gettype($optionalServicesInfoFormOfPaymentItem), var_export($optionalServicesInfoFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function addToFormOfPayment(\Travelport\UniversalRecord\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\UniversalRecord\StructType\FormOfPaymentRef[]
     */
    public function getFormOfPaymentRef(): ?array
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setFormOfPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPaymentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentRefForArrayConstraintsFromSetFormOfPaymentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServicesInfoFormOfPaymentRefItem) {
            // validation for constraint: itemType
            if (!$optionalServicesInfoFormOfPaymentRefItem instanceof \Travelport\UniversalRecord\StructType\FormOfPaymentRef) {
                $invalidValues[] = is_object($optionalServicesInfoFormOfPaymentRefItem) ? get_class($optionalServicesInfoFormOfPaymentRefItem) : sprintf('%s(%s)', gettype($optionalServicesInfoFormOfPaymentRefItem), var_export($optionalServicesInfoFormOfPaymentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPaymentRef property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPaymentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef[] $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function setFormOfPaymentRef(?array $formOfPaymentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentRefArrayErrorMessage = self::validateFormOfPaymentRefForArrayConstraintsFromSetFormOfPaymentRef($formOfPaymentRef))) {
            throw new InvalidArgumentException($formOfPaymentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPaymentRef) && count($formOfPaymentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPaymentRef)), __LINE__);
        }
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Add item to FormOfPaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function addToFormOfPaymentRef(\Travelport\UniversalRecord\StructType\FormOfPaymentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FormOfPaymentRef) {
            throw new InvalidArgumentException(sprintf('The FormOfPaymentRef property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPaymentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPaymentRef) && count($this->FormOfPaymentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPaymentRef)), __LINE__);
        }
        $this->FormOfPaymentRef[] = $item;
        
        return $this;
    }
}