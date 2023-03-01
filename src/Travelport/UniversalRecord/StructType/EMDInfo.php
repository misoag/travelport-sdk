<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Key related supporting attributes | Commission information applied during EMD issuance | Infomration about the fare calculation | Fare related information for these electronic miscellaneous documents | FormOfPayment used for
 * issuing these electronic miscellaneous documents | Payment charged for EMD isuance | Electronic miscellaneous documents.As an EMDInfo container displays all the EMDs which are in conjunction, there can be maximum 4 ElectronicMiscDocuments present in
 * an EMDInfo | List of Supplier Locator information that is associated with this document | Basic information of the traveler associated with this EMDInfo. | This is the parent container to display EMD information. Occurrence of multiple unique EMDs
 * inside this container indicate that those EMDs are conjunctive to each other. Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDInfo extends AbstractStructBase
{
    /**
     * The EMDTravelerInfo
     * Meta information extracted from the WSDL
     * - ref: EMDTravelerInfo
     * @var \Travelport\UniversalRecord\StructType\EMDTravelerInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\EMDTravelerInfo $EMDTravelerInfo = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The ElectronicMiscDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: ElectronicMiscDocument
     * @var \Travelport\UniversalRecord\StructType\ElectronicMiscDocument[]
     */
    public ?array $ElectronicMiscDocument = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    public ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The EMDPricingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EMDPricingInfo
     * @var \Travelport\UniversalRecord\StructType\EMDPricingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\EMDPricingInfo $EMDPricingInfo = null;
    /**
     * The EMDEndorsement
     * Meta information extracted from the WSDL
     * - documentation: Endorsement for EMD. Supported providers are 1V/1G/1P
     * - base: xs:string
     * - maxLength: 255
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * - ref: EMDEndorsement
     * @var string[]
     */
    public ?array $EMDEndorsement = null;
    /**
     * The FareCalc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareCalc
     * @var string|null
     */
    public ?string $FareCalc = null;
    /**
     * The EMDCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EMDCommission
     * @var \Travelport\UniversalRecord\StructType\EMDCommission|null
     */
    public ?\Travelport\UniversalRecord\StructType\EMDCommission $EMDCommission = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for EMDInfo
     * @uses EMDInfo::setEMDTravelerInfo()
     * @uses EMDInfo::setSupplierLocator()
     * @uses EMDInfo::setElectronicMiscDocument()
     * @uses EMDInfo::setPayment()
     * @uses EMDInfo::setFormOfPayment()
     * @uses EMDInfo::setEMDPricingInfo()
     * @uses EMDInfo::setEMDEndorsement()
     * @uses EMDInfo::setFareCalc()
     * @uses EMDInfo::setEMDCommission()
     * @uses EMDInfo::setKey()
     * @uses EMDInfo::setProviderCode()
     * @uses EMDInfo::setProviderLocatorCode()
     * @uses EMDInfo::setSupplierCode()
     * @uses EMDInfo::setElStat()
     * @uses EMDInfo::setKeyOverride()
     * @param \Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ElectronicMiscDocument[] $electronicMiscDocument
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\EMDPricingInfo $eMDPricingInfo
     * @param string[] $eMDEndorsement
     * @param string $fareCalc
     * @param \Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission
     * @param string $key
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo = null, ?array $supplierLocator = null, ?array $electronicMiscDocument = null, ?\Travelport\UniversalRecord\StructType\Payment $payment = null, ?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\UniversalRecord\StructType\EMDPricingInfo $eMDPricingInfo = null, ?array $eMDEndorsement = null, ?string $fareCalc = null, ?\Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission = null, ?string $key = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setEMDTravelerInfo($eMDTravelerInfo)
            ->setSupplierLocator($supplierLocator)
            ->setElectronicMiscDocument($electronicMiscDocument)
            ->setPayment($payment)
            ->setFormOfPayment($formOfPayment)
            ->setEMDPricingInfo($eMDPricingInfo)
            ->setEMDEndorsement($eMDEndorsement)
            ->setFareCalc($fareCalc)
            ->setEMDCommission($eMDCommission)
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get EMDTravelerInfo value
     * @return \Travelport\UniversalRecord\StructType\EMDTravelerInfo|null
     */
    public function getEMDTravelerInfo(): ?\Travelport\UniversalRecord\StructType\EMDTravelerInfo
    {
        return $this->EMDTravelerInfo;
    }
    /**
     * Set EMDTravelerInfo value
     * @param \Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setEMDTravelerInfo(?\Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo = null): self
    {
        $this->EMDTravelerInfo = $eMDTravelerInfo;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get ElectronicMiscDocument value
     * @return \Travelport\UniversalRecord\StructType\ElectronicMiscDocument[]
     */
    public function getElectronicMiscDocument(): ?array
    {
        return $this->ElectronicMiscDocument;
    }
    /**
     * Set ElectronicMiscDocument value
     * @param \Travelport\UniversalRecord\StructType\ElectronicMiscDocument[] $electronicMiscDocument
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setElectronicMiscDocument(?array $electronicMiscDocument = null): self
    {
        $this->ElectronicMiscDocument = $electronicMiscDocument;
        
        return $this;
    }
    /**
     * Add item to ElectronicMiscDocument value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ElectronicMiscDocument $item
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function addToElectronicMiscDocument(\Travelport\UniversalRecord\StructType\ElectronicMiscDocument $item): self
    {
        $this->ElectronicMiscDocument[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setPayment(?\Travelport\UniversalRecord\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get EMDPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo|null
     */
    public function getEMDPricingInfo(): ?\Travelport\UniversalRecord\StructType\EMDPricingInfo
    {
        return $this->EMDPricingInfo;
    }
    /**
     * Set EMDPricingInfo value
     * @param \Travelport\UniversalRecord\StructType\EMDPricingInfo $eMDPricingInfo
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setEMDPricingInfo(?\Travelport\UniversalRecord\StructType\EMDPricingInfo $eMDPricingInfo = null): self
    {
        $this->EMDPricingInfo = $eMDPricingInfo;
        
        return $this;
    }
    /**
     * Get EMDEndorsement value
     * @return string[]
     */
    public function getEMDEndorsement(): ?array
    {
        return $this->EMDEndorsement;
    }
    /**
     * Set EMDEndorsement value
     * @param string[] $eMDEndorsement
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setEMDEndorsement(?array $eMDEndorsement = null): self
    {
        $this->EMDEndorsement = $eMDEndorsement;
        
        return $this;
    }
    /**
     * Add item to EMDEndorsement value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function addToEMDEndorsement(string $item): self
    {
        $this->EMDEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get FareCalc value
     * @return string|null
     */
    public function getFareCalc(): ?string
    {
        return $this->FareCalc;
    }
    /**
     * Set FareCalc value
     * @param string $fareCalc
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setFareCalc(?string $fareCalc = null): self
    {
        $this->FareCalc = $fareCalc;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setEMDCommission(?\Travelport\UniversalRecord\StructType\EMDCommission $eMDCommission = null): self
    {
        $this->EMDCommission = $eMDCommission;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
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
     * @return \Travelport\UniversalRecord\StructType\EMDInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
