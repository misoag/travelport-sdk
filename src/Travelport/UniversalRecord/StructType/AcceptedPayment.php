<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptedPayment StructType
 * @subpackage Structs
 */
class AcceptedPayment extends AbstractStructBase
{
    /**
     * The PaymentCode
     * Meta information extracted from the WSDL
     * - documentation: The issuer of the form of payment, such as the credit card bank. | 2 letter Credit/Debit Card merchant type
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * @var string|null
     */
    public ?string $PaymentCode = null;
    /**
     * Constructor method for AcceptedPayment
     * @uses AcceptedPayment::setPaymentCode()
     * @param string $paymentCode
     */
    public function __construct(?string $paymentCode = null)
    {
        $this
            ->setPaymentCode($paymentCode);
    }
    /**
     * Get PaymentCode value
     * @return string|null
     */
    public function getPaymentCode(): ?string
    {
        return $this->PaymentCode;
    }
    /**
     * Set PaymentCode value
     * @param string $paymentCode
     * @return \Travelport\UniversalRecord\StructType\AcceptedPayment
     */
    public function setPaymentCode(?string $paymentCode = null): self
    {
        $this->PaymentCode = $paymentCode;
        
        return $this;
    }
}
