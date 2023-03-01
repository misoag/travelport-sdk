<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\UniversalRecord\StructType\FormOfPaymentRef[]
     */
    public ?array $FormOfPaymentRef = null;
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
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
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
     * Set FormOfPaymentRef value
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef[] $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesInfo
     */
    public function setFormOfPaymentRef(?array $formOfPaymentRef = null): self
    {
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
        $this->FormOfPaymentRef[] = $item;
        
        return $this;
    }
}
