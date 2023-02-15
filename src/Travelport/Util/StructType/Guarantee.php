<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Guarantee StructType
 * Meta information extracted from the WSDL
 * - documentation: Guarantee, Deposit or PrePayment | Payment Guarantee
 * @subpackage Structs
 */
class Guarantee extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Guarantee, Deposit for 1G/1V/1P/1J and PrePayment for 1P/1J only
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | OtherGuaranteeInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CreditCard
     * @var \Travelport\Util\StructType\CreditCard|null
     */
    protected ?\Travelport\Util\StructType\CreditCard $CreditCard = null;
    /**
     * The OtherGuaranteeInfo
     * Meta information extracted from the WSDL
     * - choice: CreditCard | OtherGuaranteeInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: OtherGuaranteeInfo
     * @var \Travelport\Util\StructType\OtherGuaranteeInfo|null
     */
    protected ?\Travelport\Util\StructType\OtherGuaranteeInfo $OtherGuaranteeInfo = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key for update/delete of the element | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ReuseFOP
     * Meta information extracted from the WSDL
     * - documentation: Key of the FOP Key to be reused as this Form of Payment.Only Credit and Debit Card will be supported for FOP Reuse. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ReuseFOP = null;
    /**
     * The ExternalReference
     * Meta information extracted from the WSDL
     * - documentation: External reference string for Client application to identify the Form of Payment. Element will be a max of 32 hex characters alpha-numeric.
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    protected ?string $ExternalReference = null;
    /**
     * The Reusable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the form of payment can be reused or not. Currently applicable for Credit and Debit form of payment
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Reusable = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for Guarantee
     * @uses Guarantee::setType()
     * @uses Guarantee::setCreditCard()
     * @uses Guarantee::setOtherGuaranteeInfo()
     * @uses Guarantee::setKey()
     * @uses Guarantee::setReuseFOP()
     * @uses Guarantee::setExternalReference()
     * @uses Guarantee::setReusable()
     * @uses Guarantee::setElStat()
     * @uses Guarantee::setKeyOverride()
     * @param string $type
     * @param \Travelport\Util\StructType\CreditCard $creditCard
     * @param \Travelport\Util\StructType\OtherGuaranteeInfo $otherGuaranteeInfo
     * @param string $key
     * @param string $reuseFOP
     * @param string $externalReference
     * @param bool $reusable
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, ?\Travelport\Util\StructType\CreditCard $creditCard = null, ?\Travelport\Util\StructType\OtherGuaranteeInfo $otherGuaranteeInfo = null, ?string $key = null, ?string $reuseFOP = null, ?string $externalReference = null, ?bool $reusable = false, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
            ->setCreditCard($creditCard)
            ->setOtherGuaranteeInfo($otherGuaranteeInfo)
            ->setKey($key)
            ->setReuseFOP($reuseFOP)
            ->setExternalReference($externalReference)
            ->setReusable($reusable)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\Util\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\Util\StructType\CreditCard
    {
        return isset($this->CreditCard) ? $this->CreditCard : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreditCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreditCardForChoiceConstraintsFromSetCreditCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OtherGuaranteeInfo',
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
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setCreditCard(?\Travelport\Util\StructType\CreditCard $creditCard = null): self
    {
        // validation for constraint: choice(CreditCard, OtherGuaranteeInfo)
        if ('' !== ($creditCardChoiceErrorMessage = self::validateCreditCardForChoiceConstraintsFromSetCreditCard($creditCard))) {
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
     * Get OtherGuaranteeInfo value
     * @return \Travelport\Util\StructType\OtherGuaranteeInfo|null
     */
    public function getOtherGuaranteeInfo(): ?\Travelport\Util\StructType\OtherGuaranteeInfo
    {
        return isset($this->OtherGuaranteeInfo) ? $this->OtherGuaranteeInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setOtherGuaranteeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOtherGuaranteeInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOtherGuaranteeInfoForChoiceConstraintsFromSetOtherGuaranteeInfo($value): string
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
                    throw new InvalidArgumentException(sprintf('The property OtherGuaranteeInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: OtherGuaranteeInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set OtherGuaranteeInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\OtherGuaranteeInfo $otherGuaranteeInfo
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setOtherGuaranteeInfo(?\Travelport\Util\StructType\OtherGuaranteeInfo $otherGuaranteeInfo = null): self
    {
        // validation for constraint: choice(CreditCard, OtherGuaranteeInfo)
        if ('' !== ($otherGuaranteeInfoChoiceErrorMessage = self::validateOtherGuaranteeInfoForChoiceConstraintsFromSetOtherGuaranteeInfo($otherGuaranteeInfo))) {
            throw new InvalidArgumentException($otherGuaranteeInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($otherGuaranteeInfo) || (is_array($otherGuaranteeInfo) && empty($otherGuaranteeInfo))) {
            unset($this->OtherGuaranteeInfo);
        } else {
            $this->OtherGuaranteeInfo = $otherGuaranteeInfo;
        }
        
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
     * @return \Travelport\Util\StructType\Guarantee
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
     * Get ReuseFOP value
     * @return string|null
     */
    public function getReuseFOP(): ?string
    {
        return $this->ReuseFOP;
    }
    /**
     * Set ReuseFOP value
     * @param string $reuseFOP
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setReuseFOP(?string $reuseFOP = null): self
    {
        // validation for constraint: string
        if (!is_null($reuseFOP) && !is_string($reuseFOP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reuseFOP, true), gettype($reuseFOP)), __LINE__);
        }
        $this->ReuseFOP = $reuseFOP;
        
        return $this;
    }
    /**
     * Get ExternalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->ExternalReference;
    }
    /**
     * Set ExternalReference value
     * @param string $externalReference
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($externalReference) && mb_strlen((string) $externalReference) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $externalReference)), __LINE__);
        }
        $this->ExternalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get Reusable value
     * @return bool|null
     */
    public function getReusable(): ?bool
    {
        return $this->Reusable;
    }
    /**
     * Set Reusable value
     * @param bool $reusable
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setReusable(?bool $reusable = false): self
    {
        // validation for constraint: boolean
        if (!is_null($reusable) && !is_bool($reusable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reusable, true), gettype($reusable)), __LINE__);
        }
        $this->Reusable = $reusable;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Util\StructType\Guarantee
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
