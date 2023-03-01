<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuanceModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Commission information to be used for EMD issuance. | Endorsement details to be used during EMD issuance. | Information about customer receipt via email. | FormOfPayment information to be used for EMD issuance. | Reference to
 * FormOfPayment present in the UR to be used for EMD issuance. | Override PNR FOP for EMD Issuance. | General modifiers supported for EMD Issuance.Supported providers are 1V/1G/1P
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
     * @var \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - choice: FormOfPaymentRef | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The CustomerReceiptInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomerReceiptInfo
     * @var \Travelport\UniversalRecord\StructType\CustomerReceiptInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\CustomerReceiptInfo $CustomerReceiptInfo = null;
    /**
     * The EMDEndorsement
     * Meta information extracted from the WSDL
     * - documentation: Endorsement for EMD. Supported providers are 1V/1G/1P
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - minOccurs: 0
     * - ref: EMDEndorsement
     * @var string|null
     */
    public ?string $EMDEndorsement = null;
    /**
     * The EMDCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EMDCommission
     * @var \Travelport\UniversalRecord\StructType\EMDCommission|null
     */
    public ?\Travelport\UniversalRecord\StructType\EMDCommission $EMDCommission = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Plating carrier code for which this EMD is issued. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * Constructor method for IssuanceModifiers
     * @uses IssuanceModifiers::setFormOfPaymentRef()
     * @uses IssuanceModifiers::setFormOfPayment()
     * @uses IssuanceModifiers::setCustomerReceiptInfo()
     * @uses IssuanceModifiers::setEMDEndorsement()
     * @uses IssuanceModifiers::setEMDCommission()
     * @uses IssuanceModifiers::setPlatingCarrier()
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\CustomerReceiptInfo $customerReceiptInfo
     * @param string $eMDEndorsement
     * @param \Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission
     * @param string $platingCarrier
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\UniversalRecord\StructType\CustomerReceiptInfo $customerReceiptInfo = null, ?string $eMDEndorsement = null, ?\Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission = null, ?string $platingCarrier = null)
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef ?? null;
    }
    /**
     * Set FormOfPaymentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\IssuanceModifiers
     */
    public function setFormOfPaymentRef(?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        if (is_null($formOfPaymentRef) || (is_array($formOfPaymentRef) && empty($formOfPaymentRef))) {
            unset($this->FormOfPaymentRef);
        } else {
            $this->FormOfPaymentRef = $formOfPaymentRef;
        }
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\UniversalRecord\StructType\FormOfPayment
    {
        return $this->FormOfPayment ?? null;
    }
    /**
     * Set FormOfPayment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\IssuanceModifiers
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        
        return $this;
    }
    /**
     * Get CustomerReceiptInfo value
     * @return \Travelport\UniversalRecord\StructType\CustomerReceiptInfo|null
     */
    public function getCustomerReceiptInfo(): ?\Travelport\UniversalRecord\StructType\CustomerReceiptInfo
    {
        return $this->CustomerReceiptInfo;
    }
    /**
     * Set CustomerReceiptInfo value
     * @param \Travelport\UniversalRecord\StructType\CustomerReceiptInfo $customerReceiptInfo
     * @return \Travelport\UniversalRecord\StructType\IssuanceModifiers
     */
    public function setCustomerReceiptInfo(?\Travelport\UniversalRecord\StructType\CustomerReceiptInfo $customerReceiptInfo = null): self
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
     * @return \Travelport\UniversalRecord\StructType\IssuanceModifiers
     */
    public function setEMDEndorsement(?string $eMDEndorsement = null): self
    {
        $this->EMDEndorsement = $eMDEndorsement;
        
        return $this;
    }
    /**
     * Get EMDCommission value
     * @return \Travelport\UniversalRecord\StructType\EMDCommission|null
     */
    public function getEMDCommission(): ?\Travelport\UniversalRecord\StructType\EMDCommission
    {
        return $this->EMDCommission;
    }
    /**
     * Set EMDCommission value
     * @param \Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission
     * @return \Travelport\UniversalRecord\StructType\IssuanceModifiers
     */
    public function setEMDCommission(?\Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission = null): self
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
     * @return \Travelport\UniversalRecord\StructType\IssuanceModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
}
