<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\TicketInfo[]
     */
    public ?array $TicketInfo = null;
    /**
     * The MCOInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\MCOInformation[]
     */
    public ?array $MCOInfo = null;
    /**
     * The TCRInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCRInfo
     * @var \Travelport\Air\StructType\TCRInfo[]
     */
    public ?array $TCRInfo = null;
    /**
     * Constructor method for DocumentInfo
     * @uses DocumentInfo::setTicketInfo()
     * @uses DocumentInfo::setMCOInfo()
     * @uses DocumentInfo::setTCRInfo()
     * @param \Travelport\Air\StructType\TicketInfo[] $ticketInfo
     * @param \Travelport\Air\StructType\MCOInformation[] $mCOInfo
     * @param \Travelport\Air\StructType\TCRInfo[] $tCRInfo
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
     * @return \Travelport\Air\StructType\TicketInfo[]
     */
    public function getTicketInfo(): ?array
    {
        return $this->TicketInfo;
    }
    /**
     * Set TicketInfo value
     * @param \Travelport\Air\StructType\TicketInfo[] $ticketInfo
     * @return \Travelport\Air\StructType\DocumentInfo
     */
    public function setTicketInfo(?array $ticketInfo = null): self
    {
        $this->TicketInfo = $ticketInfo;
        
        return $this;
    }
    /**
     * Add item to TicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketInfo $item
     * @return \Travelport\Air\StructType\DocumentInfo
     */
    public function addToTicketInfo(\Travelport\Air\StructType\TicketInfo $item): self
    {
        $this->TicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MCOInfo value
     * @return \Travelport\Air\StructType\MCOInformation[]
     */
    public function getMCOInfo(): ?array
    {
        return $this->MCOInfo;
    }
    /**
     * Set MCOInfo value
     * @param \Travelport\Air\StructType\MCOInformation[] $mCOInfo
     * @return \Travelport\Air\StructType\DocumentInfo
     */
    public function setMCOInfo(?array $mCOInfo = null): self
    {
        $this->MCOInfo = $mCOInfo;
        
        return $this;
    }
    /**
     * Add item to MCOInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\MCOInformation $item
     * @return \Travelport\Air\StructType\DocumentInfo
     */
    public function addToMCOInfo(\Travelport\Air\StructType\MCOInformation $item): self
    {
        $this->MCOInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TCRInfo value
     * @return \Travelport\Air\StructType\TCRInfo[]
     */
    public function getTCRInfo(): ?array
    {
        return $this->TCRInfo;
    }
    /**
     * Set TCRInfo value
     * @param \Travelport\Air\StructType\TCRInfo[] $tCRInfo
     * @return \Travelport\Air\StructType\DocumentInfo
     */
    public function setTCRInfo(?array $tCRInfo = null): self
    {
        $this->TCRInfo = $tCRInfo;
        
        return $this;
    }
    /**
     * Add item to TCRInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TCRInfo $item
     * @return \Travelport\Air\StructType\DocumentInfo
     */
    public function addToTCRInfo(\Travelport\Air\StructType\TCRInfo $item): self
    {
        $this->TCRInfo[] = $item;
        
        return $this;
    }
}
