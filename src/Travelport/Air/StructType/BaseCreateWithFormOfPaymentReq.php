<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCreateWithFormOfPaymentReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider:1G,1V,1P,ACH,SDK. | Container for BaseCreateReservation along with Form Of Payment
 * @subpackage Structs
 */
class BaseCreateWithFormOfPaymentReq extends BaseCreateReservationReq
{
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * Constructor method for BaseCreateWithFormOfPaymentReq
     * @uses BaseCreateWithFormOfPaymentReq::setFormOfPayment()
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     */
    public function __construct(?array $formOfPayment = null)
    {
        $this
            ->setFormOfPayment($formOfPayment);
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Air\StructType\BaseCreateWithFormOfPaymentReq
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormOfPayment $item
     * @return \Travelport\Air\StructType\BaseCreateWithFormOfPaymentReq
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
}
