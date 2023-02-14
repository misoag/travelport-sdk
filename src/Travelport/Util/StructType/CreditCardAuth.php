<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardAuth StructType
 * Meta information extracted from the WSDL
 * - documentation: The result of a Credit Auth Request. Will contain all the authorization info and result codes.
 * @subpackage Structs
 */
class CreditCardAuth extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount that was authorized. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * The AuthResultCode
     * Meta information extracted from the WSDL
     * - documentation: The result code of the authorization command.
     * - use: required
     * @var string
     */
    protected string $AuthResultCode;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PaymentRef = null;
    /**
     * The TransId
     * Meta information extracted from the WSDL
     * - documentation: The transaction id from the credit processing system
     * - use: optional
     * @var string|null
     */
    protected ?string $TransId = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: The associated credit/debit card number without spaces or dashes.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 13
     * - use: optional
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The AuthCode
     * Meta information extracted from the WSDL
     * - documentation: The authorization code to confirm card acceptance
     * - use: optional
     * @var string|null
     */
    protected ?string $AuthCode = null;
    /**
     * The AVSResultCode
     * Meta information extracted from the WSDL
     * - documentation: The address verification result code (if AVS was requested)
     * - use: optional
     * @var string|null
     */
    protected ?string $AVSResultCode = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: The message explains the result of the authorization command.
     * - use: optional
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FormOfPaymentRef = null;
    /**
     * Constructor method for CreditCardAuth
     * @uses CreditCardAuth::setAmount()
     * @uses CreditCardAuth::setAuthResultCode()
     * @uses CreditCardAuth::setKey()
     * @uses CreditCardAuth::setPaymentRef()
     * @uses CreditCardAuth::setTransId()
     * @uses CreditCardAuth::setNumber()
     * @uses CreditCardAuth::setAuthCode()
     * @uses CreditCardAuth::setAVSResultCode()
     * @uses CreditCardAuth::setMessage()
     * @uses CreditCardAuth::setProviderReservationInfoRef()
     * @uses CreditCardAuth::setFormOfPaymentRef()
     * @param string $amount
     * @param string $authResultCode
     * @param string $key
     * @param string $paymentRef
     * @param string $transId
     * @param string $number
     * @param string $authCode
     * @param string $aVSResultCode
     * @param string $message
     * @param string $providerReservationInfoRef
     * @param string $formOfPaymentRef
     */
    public function __construct(string $amount, string $authResultCode, ?string $key = null, ?string $paymentRef = null, ?string $transId = null, ?string $number = null, ?string $authCode = null, ?string $aVSResultCode = null, ?string $message = null, ?string $providerReservationInfoRef = null, ?string $formOfPaymentRef = null)
    {
        $this
            ->setAmount($amount)
            ->setAuthResultCode($authResultCode)
            ->setKey($key)
            ->setPaymentRef($paymentRef)
            ->setTransId($transId)
            ->setNumber($number)
            ->setAuthCode($authCode)
            ->setAVSResultCode($aVSResultCode)
            ->setMessage($message)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setFormOfPaymentRef($formOfPaymentRef);
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get AuthResultCode value
     * @return string
     */
    public function getAuthResultCode(): string
    {
        return $this->AuthResultCode;
    }
    /**
     * Set AuthResultCode value
     * @param string $authResultCode
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setAuthResultCode(string $authResultCode): self
    {
        // validation for constraint: string
        if (!is_null($authResultCode) && !is_string($authResultCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authResultCode, true), gettype($authResultCode)), __LINE__);
        }
        $this->AuthResultCode = $authResultCode;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return string|null
     */
    public function getPaymentRef(): ?string
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param string $paymentRef
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setPaymentRef(?string $paymentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRef) && !is_string($paymentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRef, true), gettype($paymentRef)), __LINE__);
        }
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Get TransId value
     * @return string|null
     */
    public function getTransId(): ?string
    {
        return $this->TransId;
    }
    /**
     * Set TransId value
     * @param string $transId
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setTransId(?string $transId = null): self
    {
        // validation for constraint: string
        if (!is_null($transId) && !is_string($transId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transId, true), gettype($transId)), __LINE__);
        }
        $this->TransId = $transId;
        
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($number) && mb_strlen((string) $number) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($number) && mb_strlen((string) $number) < 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get AuthCode value
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->AuthCode;
    }
    /**
     * Set AuthCode value
     * @param string $authCode
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        $this->AuthCode = $authCode;
        
        return $this;
    }
    /**
     * Get AVSResultCode value
     * @return string|null
     */
    public function getAVSResultCode(): ?string
    {
        return $this->AVSResultCode;
    }
    /**
     * Set AVSResultCode value
     * @param string $aVSResultCode
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setAVSResultCode(?string $aVSResultCode = null): self
    {
        // validation for constraint: string
        if (!is_null($aVSResultCode) && !is_string($aVSResultCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aVSResultCode, true), gettype($aVSResultCode)), __LINE__);
        }
        $this->AVSResultCode = $aVSResultCode;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return string|null
     */
    public function getFormOfPaymentRef(): ?string
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param string $formOfPaymentRef
     * @return \Travelport\Util\StructType\CreditCardAuth
     */
    public function setFormOfPaymentRef(?string $formOfPaymentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($formOfPaymentRef) && !is_string($formOfPaymentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formOfPaymentRef, true), gettype($formOfPaymentRef)), __LINE__);
        }
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
}
