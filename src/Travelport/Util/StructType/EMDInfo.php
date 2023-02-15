<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\EMDTravelerInfo|null
     */
    protected ?\Travelport\Util\StructType\EMDTravelerInfo $EMDTravelerInfo = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\Util\StructType\SupplierLocator[]
     */
    protected ?array $SupplierLocator = null;
    /**
     * The ElectronicMiscDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: ElectronicMiscDocument
     * @var \Travelport\Util\StructType\ElectronicMiscDocument[]
     */
    protected ?array $ElectronicMiscDocument = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Util\StructType\Payment|null
     */
    protected ?\Travelport\Util\StructType\Payment $Payment = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment|null
     */
    protected ?\Travelport\Util\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The EMDPricingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EMDPricingInfo
     * @var \Travelport\Util\StructType\EMDPricingInfo|null
     */
    protected ?\Travelport\Util\StructType\EMDPricingInfo $EMDPricingInfo = null;
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
    protected ?array $EMDEndorsement = null;
    /**
     * The FareCalc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareCalc
     * @var string|null
     */
    protected ?string $FareCalc = null;
    /**
     * The EMDCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EMDCommission
     * @var \Travelport\Util\StructType\EMDCommission|null
     */
    protected ?\Travelport\Util\StructType\EMDCommission $EMDCommission = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\Util\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @param \Travelport\Util\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\Util\StructType\ElectronicMiscDocument[] $electronicMiscDocument
     * @param \Travelport\Util\StructType\Payment $payment
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Util\StructType\EMDPricingInfo $eMDPricingInfo
     * @param string[] $eMDEndorsement
     * @param string $fareCalc
     * @param \Travelport\Util\StructType\EMDCommission $eMDCommission
     * @param string $key
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?\Travelport\Util\StructType\EMDTravelerInfo $eMDTravelerInfo = null, ?array $supplierLocator = null, ?array $electronicMiscDocument = null, ?\Travelport\Util\StructType\Payment $payment = null, ?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\Util\StructType\EMDPricingInfo $eMDPricingInfo = null, ?array $eMDEndorsement = null, ?string $fareCalc = null, ?\Travelport\Util\StructType\EMDCommission $eMDCommission = null, ?string $key = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Util\StructType\EMDTravelerInfo|null
     */
    public function getEMDTravelerInfo(): ?\Travelport\Util\StructType\EMDTravelerInfo
    {
        return $this->EMDTravelerInfo;
    }
    /**
     * Set EMDTravelerInfo value
     * @param \Travelport\Util\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setEMDTravelerInfo(?\Travelport\Util\StructType\EMDTravelerInfo $eMDTravelerInfo = null): self
    {
        $this->EMDTravelerInfo = $eMDTravelerInfo;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\Util\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierLocatorForArrayConstraintsFromSetSupplierLocator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDInfoSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$eMDInfoSupplierLocatorItem instanceof \Travelport\Util\StructType\SupplierLocator) {
                $invalidValues[] = is_object($eMDInfoSupplierLocatorItem) ? get_class($eMDInfoSupplierLocatorItem) : sprintf('%s(%s)', gettype($eMDInfoSupplierLocatorItem), var_export($eMDInfoSupplierLocatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierLocator property can only contain items of type \Travelport\Util\StructType\SupplierLocator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierLocatorArrayErrorMessage = self::validateSupplierLocatorForArrayConstraintsFromSetSupplierLocator($supplierLocator))) {
            throw new InvalidArgumentException($supplierLocatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($supplierLocator) && count($supplierLocator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($supplierLocator)), __LINE__);
        }
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SupplierLocator $item
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function addToSupplierLocator(\Travelport\Util\StructType\SupplierLocator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SupplierLocator) {
            throw new InvalidArgumentException(sprintf('The SupplierLocator property can only contain items of type \Travelport\Util\StructType\SupplierLocator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SupplierLocator)), __LINE__);
        }
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get ElectronicMiscDocument value
     * @return \Travelport\Util\StructType\ElectronicMiscDocument[]
     */
    public function getElectronicMiscDocument(): ?array
    {
        return $this->ElectronicMiscDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setElectronicMiscDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setElectronicMiscDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateElectronicMiscDocumentForArrayConstraintsFromSetElectronicMiscDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDInfoElectronicMiscDocumentItem) {
            // validation for constraint: itemType
            if (!$eMDInfoElectronicMiscDocumentItem instanceof \Travelport\Util\StructType\ElectronicMiscDocument) {
                $invalidValues[] = is_object($eMDInfoElectronicMiscDocumentItem) ? get_class($eMDInfoElectronicMiscDocumentItem) : sprintf('%s(%s)', gettype($eMDInfoElectronicMiscDocumentItem), var_export($eMDInfoElectronicMiscDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ElectronicMiscDocument property can only contain items of type \Travelport\Util\StructType\ElectronicMiscDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ElectronicMiscDocument value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ElectronicMiscDocument[] $electronicMiscDocument
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setElectronicMiscDocument(?array $electronicMiscDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($electronicMiscDocumentArrayErrorMessage = self::validateElectronicMiscDocumentForArrayConstraintsFromSetElectronicMiscDocument($electronicMiscDocument))) {
            throw new InvalidArgumentException($electronicMiscDocumentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($electronicMiscDocument) && count($electronicMiscDocument) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($electronicMiscDocument)), __LINE__);
        }
        $this->ElectronicMiscDocument = $electronicMiscDocument;
        
        return $this;
    }
    /**
     * Add item to ElectronicMiscDocument value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ElectronicMiscDocument $item
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function addToElectronicMiscDocument(\Travelport\Util\StructType\ElectronicMiscDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ElectronicMiscDocument) {
            throw new InvalidArgumentException(sprintf('The ElectronicMiscDocument property can only contain items of type \Travelport\Util\StructType\ElectronicMiscDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ElectronicMiscDocument) && count($this->ElectronicMiscDocument) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ElectronicMiscDocument)), __LINE__);
        }
        $this->ElectronicMiscDocument[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Util\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\Util\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Util\StructType\Payment $payment
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setPayment(?\Travelport\Util\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Util\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setFormOfPayment(?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get EMDPricingInfo value
     * @return \Travelport\Util\StructType\EMDPricingInfo|null
     */
    public function getEMDPricingInfo(): ?\Travelport\Util\StructType\EMDPricingInfo
    {
        return $this->EMDPricingInfo;
    }
    /**
     * Set EMDPricingInfo value
     * @param \Travelport\Util\StructType\EMDPricingInfo $eMDPricingInfo
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setEMDPricingInfo(?\Travelport\Util\StructType\EMDPricingInfo $eMDPricingInfo = null): self
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
     * This method is responsible for validating the values passed to the setEMDEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDEndorsement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMDEndorsementForArrayConstraintsFromSetEMDEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDInfoEMDEndorsementItem) {
            // validation for constraint: itemType
            if (!is_string($eMDInfoEMDEndorsementItem)) {
                $invalidValues[] = is_object($eMDInfoEMDEndorsementItem) ? get_class($eMDInfoEMDEndorsementItem) : sprintf('%s(%s)', gettype($eMDInfoEMDEndorsementItem), var_export($eMDInfoEMDEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EMDEndorsement property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setEMDEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDEndorsement method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMDEndorsementForMaxLengthConstraintFromSetEMDEndorsement($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDInfoEMDEndorsementItem) {
            // validation for constraint: maxLength(255)
            if (mb_strlen((string) $eMDInfoEMDEndorsementItem) > 255) {
                $invalidValues[] = var_export($eMDInfoEMDEndorsementItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 255', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setEMDEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDEndorsement method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMDEndorsementForMinLengthConstraintFromSetEMDEndorsement($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDInfoEMDEndorsementItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $eMDInfoEMDEndorsementItem) < 1) {
                $invalidValues[] = var_export($eMDInfoEMDEndorsementItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EMDEndorsement value
     * @throws InvalidArgumentException
     * @param string[] $eMDEndorsement
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setEMDEndorsement(?array $eMDEndorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($eMDEndorsementArrayErrorMessage = self::validateEMDEndorsementForArrayConstraintsFromSetEMDEndorsement($eMDEndorsement))) {
            throw new InvalidArgumentException($eMDEndorsementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(255)
        if ('' !== ($eMDEndorsementMaxLengthErrorMessage = self::validateEMDEndorsementForMaxLengthConstraintFromSetEMDEndorsement($eMDEndorsement))) {
            throw new InvalidArgumentException($eMDEndorsementMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($eMDEndorsement) && count($eMDEndorsement) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($eMDEndorsement)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($eMDEndorsementMinLengthErrorMessage = self::validateEMDEndorsementForMinLengthConstraintFromSetEMDEndorsement($eMDEndorsement))) {
            throw new InvalidArgumentException($eMDEndorsementMinLengthErrorMessage, __LINE__);
        }
        $this->EMDEndorsement = $eMDEndorsement;
        
        return $this;
    }
    /**
     * Add item to EMDEndorsement value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function addToEMDEndorsement(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The EMDEndorsement property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (mb_strlen((string) $item) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EMDEndorsement) && count($this->EMDEndorsement) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EMDEndorsement)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen((string) $item) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $item)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setFareCalc(?string $fareCalc = null): self
    {
        // validation for constraint: string
        if (!is_null($fareCalc) && !is_string($fareCalc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareCalc, true), gettype($fareCalc)), __LINE__);
        }
        $this->FareCalc = $fareCalc;
        
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
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setEMDCommission(?\Travelport\Util\StructType\EMDCommission $eMDCommission = null): self
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
     * @return \Travelport\Util\StructType\EMDInfo
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
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\EMDInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\EMDInfo
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
     * @return \Travelport\Util\StructType\EMDInfo
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
