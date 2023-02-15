<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuanceModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Commission information to be used for EMD issuance. | Endorsement details to be used during EMD issuance. | Information about customer receipt via email. | FormOfPayment information to be used for EMD issuance. | Reference to
 * FormOfPayment present in the UR to be used for EMD issuance. | Override PNR FOP for EMD Issuance. | General modifiers supported for EMD Issuance.Supported providers are 1V/1G/1P/1J
 * @subpackage Structs
 */
class IssuanceModifiers extends AbstractStructBase
{
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - choice: FormOfPaymentRef | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    protected ?\Travelport\Util\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - choice: FormOfPaymentRef | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment|null
     */
    protected ?\Travelport\Util\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The CustomerReceiptInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomerReceiptInfo
     * @var \Travelport\Util\StructType\CustomerReceiptInfo|null
     */
    protected ?\Travelport\Util\StructType\CustomerReceiptInfo $CustomerReceiptInfo = null;
    /**
     * The EMDEndorsement
     * Meta information extracted from the WSDL
     * - documentation: Endorsement for EMD. Supported providers are 1V/1G/1P/1J
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - minOccurs: 0
     * - ref: EMDEndorsement
     * @var string|null
     */
    protected ?string $EMDEndorsement = null;
    /**
     * The EMDCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EMDCommission
     * @var \Travelport\Util\StructType\EMDCommission|null
     */
    protected ?\Travelport\Util\StructType\EMDCommission $EMDCommission = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Plating carrier code for which this EMD is issued. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * Constructor method for IssuanceModifiers
     * @uses IssuanceModifiers::setFormOfPaymentRef()
     * @uses IssuanceModifiers::setFormOfPayment()
     * @uses IssuanceModifiers::setCustomerReceiptInfo()
     * @uses IssuanceModifiers::setEMDEndorsement()
     * @uses IssuanceModifiers::setEMDCommission()
     * @uses IssuanceModifiers::setPlatingCarrier()
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Util\StructType\CustomerReceiptInfo $customerReceiptInfo
     * @param string $eMDEndorsement
     * @param \Travelport\Util\StructType\EMDCommission $eMDCommission
     * @param string $platingCarrier
     */
    public function __construct(?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\Util\StructType\CustomerReceiptInfo $customerReceiptInfo = null, ?string $eMDEndorsement = null, ?\Travelport\Util\StructType\EMDCommission $eMDCommission = null, ?string $platingCarrier = null)
    {
        $this
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setFormOfPayment($formOfPayment)
            ->setCustomerReceiptInfo($customerReceiptInfo)
            ->setEMDEndorsement($eMDEndorsement)
            ->setEMDCommission($eMDCommission)
            ->setPlatingCarrier($platingCarrier);
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Util\StructType\FormOfPaymentRef
    {
        return isset($this->FormOfPaymentRef) ? $this->FormOfPaymentRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFormOfPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPaymentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFormOfPaymentRefForChoiceConstraintsFromSetFormOfPaymentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FormOfPayment',
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
     * @return \Travelport\Util\StructType\IssuanceModifiers
     */
    public function setFormOfPaymentRef(?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        // validation for constraint: choice(FormOfPaymentRef, FormOfPayment)
        if ('' !== ($formOfPaymentRefChoiceErrorMessage = self::validateFormOfPaymentRefForChoiceConstraintsFromSetFormOfPaymentRef($formOfPaymentRef))) {
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
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Util\StructType\FormOfPayment
    {
        return isset($this->FormOfPayment) ? $this->FormOfPayment : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFormOfPaymentForChoiceConstraintsFromSetFormOfPayment($value): string
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
                    throw new InvalidArgumentException(sprintf('The property FormOfPayment can\'t be set as the property %s is already set. Only one property must be set among these properties: FormOfPayment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Util\StructType\IssuanceModifiers
     */
    public function setFormOfPayment(?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null): self
    {
        // validation for constraint: choice(FormOfPaymentRef, FormOfPayment)
        if ('' !== ($formOfPaymentChoiceErrorMessage = self::validateFormOfPaymentForChoiceConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentChoiceErrorMessage, __LINE__);
        }
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        
        return $this;
    }
    /**
     * Get CustomerReceiptInfo value
     * @return \Travelport\Util\StructType\CustomerReceiptInfo|null
     */
    public function getCustomerReceiptInfo(): ?\Travelport\Util\StructType\CustomerReceiptInfo
    {
        return $this->CustomerReceiptInfo;
    }
    /**
     * Set CustomerReceiptInfo value
     * @param \Travelport\Util\StructType\CustomerReceiptInfo $customerReceiptInfo
     * @return \Travelport\Util\StructType\IssuanceModifiers
     */
    public function setCustomerReceiptInfo(?\Travelport\Util\StructType\CustomerReceiptInfo $customerReceiptInfo = null): self
    {
        $this->CustomerReceiptInfo = $customerReceiptInfo;
        
        return $this;
    }
    /**
     * Get EMDEndorsement value
     * @return string|null
     */
    public function getEMDEndorsement(): ?string
    {
        return $this->EMDEndorsement;
    }
    /**
     * Set EMDEndorsement value
     * @param string $eMDEndorsement
     * @return \Travelport\Util\StructType\IssuanceModifiers
     */
    public function setEMDEndorsement(?string $eMDEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($eMDEndorsement) && !is_string($eMDEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMDEndorsement, true), gettype($eMDEndorsement)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($eMDEndorsement) && mb_strlen((string) $eMDEndorsement) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $eMDEndorsement)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($eMDEndorsement) && mb_strlen((string) $eMDEndorsement) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $eMDEndorsement)), __LINE__);
        }
        $this->EMDEndorsement = $eMDEndorsement;
        
        return $this;
    }
    /**
     * Get EMDCommission value
     * @return \Travelport\Util\StructType\EMDCommission|null
     */
    public function getEMDCommission(): ?\Travelport\Util\StructType\EMDCommission
    {
        return $this->EMDCommission;
    }
    /**
     * Set EMDCommission value
     * @param \Travelport\Util\StructType\EMDCommission $eMDCommission
     * @return \Travelport\Util\StructType\IssuanceModifiers
     */
    public function setEMDCommission(?\Travelport\Util\StructType\EMDCommission $eMDCommission = null): self
    {
        $this->EMDCommission = $eMDCommission;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\Util\StructType\IssuanceModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
}
