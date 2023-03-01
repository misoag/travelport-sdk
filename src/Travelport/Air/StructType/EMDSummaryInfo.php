<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDSummaryInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Key related supporting attributes | Payment charged to issue EMD. | EMD traveler information. | Summary information for EMDs conjuncted to each other. | Container for EMD summary information. Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDSummaryInfo extends AbstractStructBase
{
    /**
     * The EMDSummary
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: EMDSummary
     * @var \Travelport\Air\StructType\EMDSummary[]
     */
    public ?array $EMDSummary = null;
    /**
     * The EMDTravelerInfo
     * Meta information extracted from the WSDL
     * - ref: EMDTravelerInfo
     * @var \Travelport\Air\StructType\EMDTravelerInfo|null
     */
    public ?\Travelport\Air\StructType\EMDTravelerInfo $EMDTravelerInfo = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Air\StructType\Payment|null
     */
    public ?\Travelport\Air\StructType\Payment $Payment = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to the provider reservation with which the document is associated.Displayed when shown as part of UR.Not displayed in EMDRetrieveRsp | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
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
     * Constructor method for EMDSummaryInfo
     * @uses EMDSummaryInfo::setEMDSummary()
     * @uses EMDSummaryInfo::setEMDTravelerInfo()
     * @uses EMDSummaryInfo::setPayment()
     * @uses EMDSummaryInfo::setProviderReservationInfoRef()
     * @uses EMDSummaryInfo::setKey()
     * @uses EMDSummaryInfo::setElStat()
     * @uses EMDSummaryInfo::setKeyOverride()
     * @param \Travelport\Air\StructType\EMDSummary[] $eMDSummary
     * @param \Travelport\Air\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @param \Travelport\Air\StructType\Payment $payment
     * @param string $providerReservationInfoRef
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?array $eMDSummary = null, ?\Travelport\Air\StructType\EMDTravelerInfo $eMDTravelerInfo = null, ?\Travelport\Air\StructType\Payment $payment = null, ?string $providerReservationInfoRef = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Air\StructType\EMDSummary[]
     */
    public function getEMDSummary(): ?array
    {
        return $this->EMDSummary;
    }
    /**
     * Set EMDSummary value
     * @param \Travelport\Air\StructType\EMDSummary[] $eMDSummary
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function setEMDSummary(?array $eMDSummary = null): self
    {
        $this->EMDSummary = $eMDSummary;
        
        return $this;
    }
    /**
     * Add item to EMDSummary value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\EMDSummary $item
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function addToEMDSummary(\Travelport\Air\StructType\EMDSummary $item): self
    {
        $this->EMDSummary[] = $item;
        
        return $this;
    }
    /**
     * Get EMDTravelerInfo value
     * @return \Travelport\Air\StructType\EMDTravelerInfo|null
     */
    public function getEMDTravelerInfo(): ?\Travelport\Air\StructType\EMDTravelerInfo
    {
        return $this->EMDTravelerInfo;
    }
    /**
     * Set EMDTravelerInfo value
     * @param \Travelport\Air\StructType\EMDTravelerInfo $eMDTravelerInfo
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function setEMDTravelerInfo(?\Travelport\Air\StructType\EMDTravelerInfo $eMDTravelerInfo = null): self
    {
        $this->EMDTravelerInfo = $eMDTravelerInfo;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\Air\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment $payment
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function setPayment(?\Travelport\Air\StructType\Payment $payment = null): self
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
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
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
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function setKey(?string $key = null): self
    {
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
     * @param string $elStat
     * @return \Travelport\Air\StructType\EMDSummaryInfo
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
     * @return \Travelport\Air\StructType\EMDSummaryInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
