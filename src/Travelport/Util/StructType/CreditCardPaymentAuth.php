<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardPaymentAuth StructType
 * @subpackage Structs
 */
class CreditCardPaymentAuth extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * The PerformAVS
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $PerformAVS;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | FormOfPaymentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:CreditCard
     * @var \Travelport\Util\StructType\CreditCard|null
     */
    protected ?\Travelport\Util\StructType\CreditCard $CreditCard = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - choice: CreditCard | FormOfPaymentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    protected ?\Travelport\Util\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The SecurityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $SecurityCode = null;
    /**
     * Constructor method for CreditCardPaymentAuth
     * @uses CreditCardPaymentAuth::setAmount()
     * @uses CreditCardPaymentAuth::setPerformAVS()
     * @uses CreditCardPaymentAuth::setCreditCard()
     * @uses CreditCardPaymentAuth::setFormOfPaymentRef()
     * @uses CreditCardPaymentAuth::setSecurityCode()
     * @param string $amount
     * @param bool $performAVS
     * @param \Travelport\Util\StructType\CreditCard $creditCard
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param string $securityCode
     */
    public function __construct(string $amount, bool $performAVS, ?\Travelport\Util\StructType\CreditCard $creditCard = null, ?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?string $securityCode = null)
    {
        $this
            ->setAmount($amount)
            ->setPerformAVS($performAVS)
            ->setCreditCard($creditCard)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setSecurityCode($securityCode);
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
     * @return \Travelport\Util\StructType\CreditCardPaymentAuth
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
     * Get PerformAVS value
     * @return bool
     */
    public function getPerformAVS(): bool
    {
        return $this->PerformAVS;
    }
    /**
     * Set PerformAVS value
     * @param bool $performAVS
     * @return \Travelport\Util\StructType\CreditCardPaymentAuth
     */
    public function setPerformAVS(bool $performAVS): self
    {
        // validation for constraint: boolean
        if (!is_null($performAVS) && !is_bool($performAVS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($performAVS, true), gettype($performAVS)), __LINE__);
        }
        $this->PerformAVS = $performAVS;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\Util\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\Util\StructType\CreditCard
    {
        return $this->CreditCard ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreditCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreditCardForChoiceConstraintFromSetCreditCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FormOfPaymentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CreditCard can\'t be set as the property %s is already set. Only one property must be set among these properties: CreditCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CreditCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCard $creditCard
     * @return \Travelport\Util\StructType\CreditCardPaymentAuth
     */
    public function setCreditCard(?\Travelport\Util\StructType\CreditCard $creditCard = null): self
    {
        // validation for constraint: choice(CreditCard, FormOfPaymentRef)
        if ('' !== ($creditCardChoiceErrorMessage = self::validateCreditCardForChoiceConstraintFromSetCreditCard($creditCard))) {
            throw new InvalidArgumentException($creditCardChoiceErrorMessage, __LINE__);
        }
        if (is_null($creditCard) || (is_array($creditCard) && empty($creditCard))) {
            unset($this->CreditCard);
        } else {
            $this->CreditCard = $creditCard;
        }
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Util\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFormOfPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPaymentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFormOfPaymentRefForChoiceConstraintFromSetFormOfPaymentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreditCard',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FormOfPaymentRef can\'t be set as the property %s is already set. Only one property must be set among these properties: FormOfPaymentRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FormOfPaymentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Util\StructType\CreditCardPaymentAuth
     */
    public function setFormOfPaymentRef(?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        // validation for constraint: choice(CreditCard, FormOfPaymentRef)
        if ('' !== ($formOfPaymentRefChoiceErrorMessage = self::validateFormOfPaymentRefForChoiceConstraintFromSetFormOfPaymentRef($formOfPaymentRef))) {
            throw new InvalidArgumentException($formOfPaymentRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($formOfPaymentRef) || (is_array($formOfPaymentRef) && empty($formOfPaymentRef))) {
            unset($this->FormOfPaymentRef);
        } else {
            $this->FormOfPaymentRef = $formOfPaymentRef;
        }
        
        return $this;
    }
    /**
     * Get SecurityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->SecurityCode;
    }
    /**
     * Set SecurityCode value
     * @param string $securityCode
     * @return \Travelport\Util\StructType\CreditCardPaymentAuth
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($securityCode) && mb_strlen((string) $securityCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $securityCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($securityCode) && mb_strlen((string) $securityCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $securityCode)), __LINE__);
        }
        $this->SecurityCode = $securityCode;
        
        return $this;
    }
}
