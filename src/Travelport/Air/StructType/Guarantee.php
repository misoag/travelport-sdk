<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * - documentation: Guarantee, Deposit for 1G/1V/1P and PrePayment for 1P only
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | OtherGuaranteeInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CreditCard
     * @var \Travelport\Air\StructType\CreditCard|null
     */
    public ?\Travelport\Air\StructType\CreditCard $CreditCard = null;
    /**
     * The OtherGuaranteeInfo
     * Meta information extracted from the WSDL
     * - choice: CreditCard | OtherGuaranteeInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: OtherGuaranteeInfo
     * @var \Travelport\Air\StructType\OtherGuaranteeInfo|null
     */
    public ?\Travelport\Air\StructType\OtherGuaranteeInfo $OtherGuaranteeInfo = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key for update/delete of the element | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ReuseFOP
     * Meta information extracted from the WSDL
     * - documentation: Key of the FOP Key to be reused as this Form of Payment.Only Credit and Debit Card will be supported for FOP Reuse. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ReuseFOP = null;
    /**
     * The ExternalReference
     * Meta information extracted from the WSDL
     * - documentation: External reference string for Client application to identify the Form of Payment. Element will be a max of 32 hex characters alpha-numeric.
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    public ?string $ExternalReference = null;
    /**
     * The Reusable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the form of payment can be reused or not. Currently applicable for Credit and Debit form of payment
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Reusable = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
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
     * @param \Travelport\Air\StructType\CreditCard $creditCard
     * @param \Travelport\Air\StructType\OtherGuaranteeInfo $otherGuaranteeInfo
     * @param string $key
     * @param string $reuseFOP
     * @param string $externalReference
     * @param bool $reusable
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, ?\Travelport\Air\StructType\CreditCard $creditCard = null, ?\Travelport\Air\StructType\OtherGuaranteeInfo $otherGuaranteeInfo = null, ?string $key = null, ?string $reuseFOP = null, ?string $externalReference = null, ?bool $reusable = false, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\Air\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\Air\StructType\CreditCard
    {
        return $this->CreditCard ?? null;
    }
    /**
     * Set CreditCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\CreditCard $creditCard
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setCreditCard(?\Travelport\Air\StructType\CreditCard $creditCard = null): self
    {
        if (is_null($creditCard) || (is_array($creditCard) && empty($creditCard))) {
            unset($this->CreditCard);
        } else {
            $this->CreditCard = $creditCard;
        }
        
        return $this;
    }
    /**
     * Get OtherGuaranteeInfo value
     * @return \Travelport\Air\StructType\OtherGuaranteeInfo|null
     */
    public function getOtherGuaranteeInfo(): ?\Travelport\Air\StructType\OtherGuaranteeInfo
    {
        return $this->OtherGuaranteeInfo ?? null;
    }
    /**
     * Set OtherGuaranteeInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\OtherGuaranteeInfo $otherGuaranteeInfo
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setOtherGuaranteeInfo(?\Travelport\Air\StructType\OtherGuaranteeInfo $otherGuaranteeInfo = null): self
    {
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
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setReuseFOP(?string $reuseFOP = null): self
    {
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
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setExternalReference(?string $externalReference = null): self
    {
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
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setReusable(?bool $reusable = false): self
    {
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
     * @param string $elStat
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\Air\StructType\Guarantee
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
