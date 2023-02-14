<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?string $PaymentCode = null;
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
     * @return \Travelport\Hotel\StructType\AcceptedPayment
     */
    public function setPaymentCode(?string $paymentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentCode) && !is_string($paymentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentCode, true), gettype($paymentCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($paymentCode) && mb_strlen((string) $paymentCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $paymentCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($paymentCode) && mb_strlen((string) $paymentCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $paymentCode)), __LINE__);
        }
        $this->PaymentCode = $paymentCode;
        
        return $this;
    }
}
