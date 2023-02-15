<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDSummaryInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Key related supporting attributes | Payment charged to issue EMD. | EMD traveler information. | Summary information for EMDs conjuncted to each other. | Container for EMD summary information. Supported providers are
 * 1G/1V/1P/1J
 * @subpackage Structs
 */
class EMDSummaryInfo extends AbstractStructBase
{
    /**
     * The EMDSummary
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: EMDSummary
     * @var \Travelport\UniversalRecord\StructType\EMDSummary[]
     */
    protected ?array $EMDSummary = null;
    /**
     * The EMDTravelerInfo
     * Meta information extracted from the WSDL
     * - ref: EMDTravelerInfo
     * @var \Travelport\UniversalRecord\StructType\EMDTravelerInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\EMDTravelerInfo $EMDTravelerInfo = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to the provider reservation with which the document is associated.Displayed when shown as part of UR.Not displayed in EMDRetrieveRsp | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
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
     * Constructor method for EMDSummaryInfo
     * @uses EMDSummaryInfo::setEMDSummary()
     * @uses EMDSummaryInfo::setEMDTravelerInfo()
     * @uses EMDSummaryInfo::setPayment()
     * @uses EMDSummaryInfo::setProviderReservationInfoRef()
     * @uses EMDSummaryInfo::setKey()
     * @uses EMDSummaryInfo::setElStat()
     * @uses EMDSummaryInfo::setKeyOverride()
     * @param \Travelport\UniversalRecord\StructType\EMDSummary[] $eMDSummary
     * @param \Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @param string $providerReservationInfoRef
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?array $eMDSummary = null, ?\Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo = null, ?\Travelport\UniversalRecord\StructType\Payment $payment = null, ?string $providerReservationInfoRef = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setEMDSummary($eMDSummary)
            ->setEMDTravelerInfo($eMDTravelerInfo)
            ->setPayment($payment)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get EMDSummary value
     * @return \Travelport\UniversalRecord\StructType\EMDSummary[]
     */
    public function getEMDSummary(): ?array
    {
        return $this->EMDSummary;
    }
    /**
     * This method is responsible for validating the values passed to the setEMDSummary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDSummary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMDSummaryForArrayConstraintsFromSetEMDSummary(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDSummaryInfoEMDSummaryItem) {
            // validation for constraint: itemType
            if (!$eMDSummaryInfoEMDSummaryItem instanceof \Travelport\UniversalRecord\StructType\EMDSummary) {
                $invalidValues[] = is_object($eMDSummaryInfoEMDSummaryItem) ? get_class($eMDSummaryInfoEMDSummaryItem) : sprintf('%s(%s)', gettype($eMDSummaryInfoEMDSummaryItem), var_export($eMDSummaryInfoEMDSummaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EMDSummary property can only contain items of type \Travelport\UniversalRecord\StructType\EMDSummary, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EMDSummary value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\EMDSummary[] $eMDSummary
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
     */
    public function setEMDSummary(?array $eMDSummary = null): self
    {
        // validation for constraint: array
        if ('' !== ($eMDSummaryArrayErrorMessage = self::validateEMDSummaryForArrayConstraintsFromSetEMDSummary($eMDSummary))) {
            throw new InvalidArgumentException($eMDSummaryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($eMDSummary) && count($eMDSummary) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($eMDSummary)), __LINE__);
        }
        $this->EMDSummary = $eMDSummary;
        
        return $this;
    }
    /**
     * Add item to EMDSummary value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\EMDSummary $item
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
     */
    public function addToEMDSummary(\Travelport\UniversalRecord\StructType\EMDSummary $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\EMDSummary) {
            throw new InvalidArgumentException(sprintf('The EMDSummary property can only contain items of type \Travelport\UniversalRecord\StructType\EMDSummary, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EMDSummary) && count($this->EMDSummary) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EMDSummary)), __LINE__);
        }
        $this->EMDSummary[] = $item;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
     */
    public function setEMDTravelerInfo(?\Travelport\UniversalRecord\StructType\EMDTravelerInfo $eMDTravelerInfo = null): self
    {
        $this->EMDTravelerInfo = $eMDTravelerInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
     */
    public function setPayment(?\Travelport\UniversalRecord\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
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
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
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
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo
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
