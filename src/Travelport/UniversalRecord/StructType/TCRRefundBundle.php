<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TCRRefundBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Itinerary level taxes | Used both in request and response | Bundle refund, pricing, and penalty information for a TCR reservation
 * @subpackage Structs
 */
class TCRRefundBundle extends AbstractStructBase
{
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $TCRNumber;
    /**
     * The RefundType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $RefundType;
    /**
     * The AirRefundInfo
     * Meta information extracted from the WSDL
     * - ref: AirRefundInfo
     * @var \Travelport\UniversalRecord\StructType\AirRefundInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirRefundInfo $AirRefundInfo = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\WaiverCode $WaiverCode = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The RefundAccessCode
     * Meta information extracted from the WSDL
     * - ref: RefundAccessCode
     * - use: optional
     * @var string|null
     */
    public ?string $RefundAccessCode = null;
    /**
     * Constructor method for TCRRefundBundle
     * @uses TCRRefundBundle::setTCRNumber()
     * @uses TCRRefundBundle::setRefundType()
     * @uses TCRRefundBundle::setAirRefundInfo()
     * @uses TCRRefundBundle::setWaiverCode()
     * @uses TCRRefundBundle::setAirSegment()
     * @uses TCRRefundBundle::setFeeInfo()
     * @uses TCRRefundBundle::setTaxInfo()
     * @uses TCRRefundBundle::setHostToken()
     * @uses TCRRefundBundle::setRefundAccessCode()
     * @param string $tCRNumber
     * @param string $refundType
     * @param \Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @param string $refundAccessCode
     */
    public function __construct(string $tCRNumber, string $refundType, ?\Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo = null, ?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null, ?array $airSegment = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $hostToken = null, ?string $refundAccessCode = null)
    {
        $this
            ->setTCRNumber($tCRNumber)
            ->setRefundType($refundType)
            ->setAirRefundInfo($airRefundInfo)
            ->setWaiverCode($waiverCode)
            ->setAirSegment($airSegment)
            ->setFeeInfo($feeInfo)
            ->setTaxInfo($taxInfo)
            ->setHostToken($hostToken)
            ->setRefundAccessCode($refundAccessCode);
    }
    /**
     * Get TCRNumber value
     * @return string
     */
    public function getTCRNumber(): string
    {
        return $this->TCRNumber;
    }
    /**
     * Set TCRNumber value
     * @param string $tCRNumber
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setTCRNumber(string $tCRNumber): self
    {
        $this->TCRNumber = $tCRNumber;
        
        return $this;
    }
    /**
     * Get RefundType value
     * @return string
     */
    public function getRefundType(): string
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @param string $refundType
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setRefundType(string $refundType): self
    {
        $this->RefundType = $refundType;
        
        return $this;
    }
    /**
     * Get AirRefundInfo value
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo|null
     */
    public function getAirRefundInfo(): ?\Travelport\UniversalRecord\StructType\AirRefundInfo
    {
        return $this->AirRefundInfo;
    }
    /**
     * Set AirRefundInfo value
     * @param \Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setAirRefundInfo(?\Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo = null): self
    {
        $this->AirRefundInfo = $airRefundInfo;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\UniversalRecord\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setWaiverCode(?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * Set FeeInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get RefundAccessCode value
     * @return string|null
     */
    public function getRefundAccessCode(): ?string
    {
        return $this->RefundAccessCode;
    }
    /**
     * Set RefundAccessCode value
     * @param string $refundAccessCode
     * @return \Travelport\UniversalRecord\StructType\TCRRefundBundle
     */
    public function setRefundAccessCode(?string $refundAccessCode = null): self
    {
        $this->RefundAccessCode = $refundAccessCode;
        
        return $this;
    }
}
