<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Used both in request and response | Bundle refund, pricing, and penalty information for one ticket number
 * @subpackage Structs
 */
class AirRefundBundle extends AbstractStructBase
{
    /**
     * The AirRefundInfo
     * Meta information extracted from the WSDL
     * - ref: AirRefundInfo
     * @var \Travelport\UniversalRecord\StructType\AirRefundInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirRefundInfo $AirRefundInfo = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name[]
     */
    public ?array $Name = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\WaiverCode $WaiverCode = null;
    /**
     * The TicketNumber
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The PTC
     * @var string|null
     */
    public ?string $PTC = null;
    /**
     * The RefundType
     * @var string|null
     */
    public ?string $RefundType = null;
    /**
     * Constructor method for AirRefundBundle
     * @uses AirRefundBundle::setAirRefundInfo()
     * @uses AirRefundBundle::setName()
     * @uses AirRefundBundle::setTaxInfo()
     * @uses AirRefundBundle::setWaiverCode()
     * @uses AirRefundBundle::setTicketNumber()
     * @uses AirRefundBundle::setPTC()
     * @uses AirRefundBundle::setRefundType()
     * @param \Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @param string $ticketNumber
     * @param string $pTC
     * @param string $refundType
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo = null, ?array $name = null, ?array $taxInfo = null, ?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null, ?string $ticketNumber = null, ?string $pTC = null, ?string $refundType = null)
    {
        $this
            ->setAirRefundInfo($airRefundInfo)
            ->setName($name)
            ->setTaxInfo($taxInfo)
            ->setWaiverCode($waiverCode)
            ->setTicketNumber($ticketNumber)
            ->setPTC($pTC)
            ->setRefundType($refundType);
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
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function setAirRefundInfo(?\Travelport\UniversalRecord\StructType\AirRefundInfo $airRefundInfo = null): self
    {
        $this->AirRefundInfo = $airRefundInfo;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\UniversalRecord\StructType\Name[]
     */
    public function getName(): ?array
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function setName(?array $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Add item to Name value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Name $item
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function addToName(\Travelport\UniversalRecord\StructType\Name $item): self
    {
        $this->Name[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
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
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function setWaiverCode(?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get PTC value
     * @return string|null
     */
    public function getPTC(): ?string
    {
        return $this->PTC;
    }
    /**
     * Set PTC value
     * @param string $pTC
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function setPTC(?string $pTC = null): self
    {
        $this->PTC = $pTC;
        
        return $this;
    }
    /**
     * Get RefundType value
     * @return string|null
     */
    public function getRefundType(): ?string
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @param string $refundType
     * @return \Travelport\UniversalRecord\StructType\AirRefundBundle
     */
    public function setRefundType(?string $refundType = null): self
    {
        $this->RefundType = $refundType;
        
        return $this;
    }
}
