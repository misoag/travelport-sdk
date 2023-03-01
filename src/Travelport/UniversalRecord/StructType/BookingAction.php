<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingAction StructType
 * @subpackage Structs
 */
class BookingAction extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: the action associated with this booking. Four options are:Final (used to book with no ticket issuance)FinalTicket (used to book and issue ticket, default if FOP is included)Ticket (used to ticket an existing booking)
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    public ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * Constructor method for BookingAction
     * @uses BookingAction::setType()
     * @uses BookingAction::setFormOfPayment()
     * @uses BookingAction::setPayment()
     * @param string $type
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     */
    public function __construct(string $type, ?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\UniversalRecord\StructType\Payment $payment = null)
    {
        $this
            ->setType($type)
            ->setFormOfPayment($formOfPayment)
            ->setPayment($payment);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\BookingAction
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
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
     * @return \Travelport\UniversalRecord\StructType\BookingAction
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\BookingAction
     */
    public function setPayment(?\Travelport\UniversalRecord\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
}
