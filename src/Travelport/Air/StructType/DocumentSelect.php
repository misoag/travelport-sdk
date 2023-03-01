<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentSelect StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to select the documents to produce for the itinerary.
 * @subpackage Structs
 */
class DocumentSelect extends AbstractStructBase
{
    /**
     * The BackOfficeHandOff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BackOfficeHandOff
     * @var \Travelport\Air\StructType\BackOfficeHandOff|null
     */
    public ?\Travelport\Air\StructType\BackOfficeHandOff $BackOfficeHandOff = null;
    /**
     * The Itinerary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Itinerary
     * @var \Travelport\Air\StructType\Itinerary|null
     */
    public ?\Travelport\Air\StructType\Itinerary $Itinerary = null;
    /**
     * The IssueTicketOnly
     * Meta information extracted from the WSDL
     * - documentation: Set to true to alter system default of itinerary,ticket and back office.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IssueTicketOnly = null;
    /**
     * The IssueElectronicTicket
     * Meta information extracted from the WSDL
     * - documentation: Set to true for electronic tickets.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IssueElectronicTicket = null;
    /**
     * The FaxIndicator
     * Meta information extracted from the WSDL
     * - documentation: Set to true for providing fax details.
     * - use: optional
     * @var bool|null
     */
    public ?bool $FaxIndicator = null;
    /**
     * Constructor method for DocumentSelect
     * @uses DocumentSelect::setBackOfficeHandOff()
     * @uses DocumentSelect::setItinerary()
     * @uses DocumentSelect::setIssueTicketOnly()
     * @uses DocumentSelect::setIssueElectronicTicket()
     * @uses DocumentSelect::setFaxIndicator()
     * @param \Travelport\Air\StructType\BackOfficeHandOff $backOfficeHandOff
     * @param \Travelport\Air\StructType\Itinerary $itinerary
     * @param bool $issueTicketOnly
     * @param bool $issueElectronicTicket
     * @param bool $faxIndicator
     */
    public function __construct(?\Travelport\Air\StructType\BackOfficeHandOff $backOfficeHandOff = null, ?\Travelport\Air\StructType\Itinerary $itinerary = null, ?bool $issueTicketOnly = null, ?bool $issueElectronicTicket = null, ?bool $faxIndicator = null)
    {
        $this
            ->setBackOfficeHandOff($backOfficeHandOff)
            ->setItinerary($itinerary)
            ->setIssueTicketOnly($issueTicketOnly)
            ->setIssueElectronicTicket($issueElectronicTicket)
            ->setFaxIndicator($faxIndicator);
    }
    /**
     * Get BackOfficeHandOff value
     * @return \Travelport\Air\StructType\BackOfficeHandOff|null
     */
    public function getBackOfficeHandOff(): ?\Travelport\Air\StructType\BackOfficeHandOff
    {
        return $this->BackOfficeHandOff;
    }
    /**
     * Set BackOfficeHandOff value
     * @param \Travelport\Air\StructType\BackOfficeHandOff $backOfficeHandOff
     * @return \Travelport\Air\StructType\DocumentSelect
     */
    public function setBackOfficeHandOff(?\Travelport\Air\StructType\BackOfficeHandOff $backOfficeHandOff = null): self
    {
        $this->BackOfficeHandOff = $backOfficeHandOff;
        
        return $this;
    }
    /**
     * Get Itinerary value
     * @return \Travelport\Air\StructType\Itinerary|null
     */
    public function getItinerary(): ?\Travelport\Air\StructType\Itinerary
    {
        return $this->Itinerary;
    }
    /**
     * Set Itinerary value
     * @param \Travelport\Air\StructType\Itinerary $itinerary
     * @return \Travelport\Air\StructType\DocumentSelect
     */
    public function setItinerary(?\Travelport\Air\StructType\Itinerary $itinerary = null): self
    {
        $this->Itinerary = $itinerary;
        
        return $this;
    }
    /**
     * Get IssueTicketOnly value
     * @return bool|null
     */
    public function getIssueTicketOnly(): ?bool
    {
        return $this->IssueTicketOnly;
    }
    /**
     * Set IssueTicketOnly value
     * @param bool $issueTicketOnly
     * @return \Travelport\Air\StructType\DocumentSelect
     */
    public function setIssueTicketOnly(?bool $issueTicketOnly = null): self
    {
        $this->IssueTicketOnly = $issueTicketOnly;
        
        return $this;
    }
    /**
     * Get IssueElectronicTicket value
     * @return bool|null
     */
    public function getIssueElectronicTicket(): ?bool
    {
        return $this->IssueElectronicTicket;
    }
    /**
     * Set IssueElectronicTicket value
     * @param bool $issueElectronicTicket
     * @return \Travelport\Air\StructType\DocumentSelect
     */
    public function setIssueElectronicTicket(?bool $issueElectronicTicket = null): self
    {
        $this->IssueElectronicTicket = $issueElectronicTicket;
        
        return $this;
    }
    /**
     * Get FaxIndicator value
     * @return bool|null
     */
    public function getFaxIndicator(): ?bool
    {
        return $this->FaxIndicator;
    }
    /**
     * Set FaxIndicator value
     * @param bool $faxIndicator
     * @return \Travelport\Air\StructType\DocumentSelect
     */
    public function setFaxIndicator(?bool $faxIndicator = null): self
    {
        $this->FaxIndicator = $faxIndicator;
        
        return $this;
    }
}
