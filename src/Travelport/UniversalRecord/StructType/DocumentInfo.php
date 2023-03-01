<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the document information summary line.
 * @subpackage Structs
 */
class DocumentInfo extends AbstractStructBase
{
    /**
     * The TicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketInfo
     * @var \Travelport\UniversalRecord\StructType\TicketInfo[]
     */
    public ?array $TicketInfo = null;
    /**
     * The MCOInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MCOInformation[]
     */
    public ?array $MCOInfo = null;
    /**
     * The TCRInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCRInfo
     * @var \Travelport\UniversalRecord\StructType\TCRInfo[]
     */
    public ?array $TCRInfo = null;
    /**
     * Constructor method for DocumentInfo
     * @uses DocumentInfo::setTicketInfo()
     * @uses DocumentInfo::setMCOInfo()
     * @uses DocumentInfo::setTCRInfo()
     * @param \Travelport\UniversalRecord\StructType\TicketInfo[] $ticketInfo
     * @param \Travelport\UniversalRecord\StructType\MCOInformation[] $mCOInfo
     * @param \Travelport\UniversalRecord\StructType\TCRInfo[] $tCRInfo
     */
    public function __construct(?array $ticketInfo = null, ?array $mCOInfo = null, ?array $tCRInfo = null)
    {
        $this
            ->setTicketInfo($ticketInfo)
            ->setMCOInfo($mCOInfo)
            ->setTCRInfo($tCRInfo);
    }
    /**
     * Get TicketInfo value
     * @return \Travelport\UniversalRecord\StructType\TicketInfo[]
     */
    public function getTicketInfo(): ?array
    {
        return $this->TicketInfo;
    }
    /**
     * Set TicketInfo value
     * @param \Travelport\UniversalRecord\StructType\TicketInfo[] $ticketInfo
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function setTicketInfo(?array $ticketInfo = null): self
    {
        $this->TicketInfo = $ticketInfo;
        
        return $this;
    }
    /**
     * Add item to TicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketInfo $item
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function addToTicketInfo(\Travelport\UniversalRecord\StructType\TicketInfo $item): self
    {
        $this->TicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MCOInfo value
     * @return \Travelport\UniversalRecord\StructType\MCOInformation[]
     */
    public function getMCOInfo(): ?array
    {
        return $this->MCOInfo;
    }
    /**
     * Set MCOInfo value
     * @param \Travelport\UniversalRecord\StructType\MCOInformation[] $mCOInfo
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function setMCOInfo(?array $mCOInfo = null): self
    {
        $this->MCOInfo = $mCOInfo;
        
        return $this;
    }
    /**
     * Add item to MCOInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MCOInformation $item
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function addToMCOInfo(\Travelport\UniversalRecord\StructType\MCOInformation $item): self
    {
        $this->MCOInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TCRInfo value
     * @return \Travelport\UniversalRecord\StructType\TCRInfo[]
     */
    public function getTCRInfo(): ?array
    {
        return $this->TCRInfo;
    }
    /**
     * Set TCRInfo value
     * @param \Travelport\UniversalRecord\StructType\TCRInfo[] $tCRInfo
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function setTCRInfo(?array $tCRInfo = null): self
    {
        $this->TCRInfo = $tCRInfo;
        
        return $this;
    }
    /**
     * Add item to TCRInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TCRInfo $item
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function addToTCRInfo(\Travelport\UniversalRecord\StructType\TCRInfo $item): self
    {
        $this->TCRInfo[] = $item;
        
        return $this;
    }
}
