<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\BackOfficeHandOff|null
     */
    protected ?\Travelport\Util\StructType\BackOfficeHandOff $BackOfficeHandOff = null;
    /**
     * The Itinerary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Itinerary
     * @var \Travelport\Util\StructType\Itinerary|null
     */
    protected ?\Travelport\Util\StructType\Itinerary $Itinerary = null;
    /**
     * The IssueTicketOnly
     * Meta information extracted from the WSDL
     * - documentation: Set to true to alter system default of itinerary,ticket and back office.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IssueTicketOnly = null;
    /**
     * The IssueElectronicTicket
     * Meta information extracted from the WSDL
     * - documentation: Set to true for electronic tickets.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IssueElectronicTicket = null;
    /**
     * The FaxIndicator
     * Meta information extracted from the WSDL
     * - documentation: Set to true for providing fax details.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FaxIndicator = null;
    /**
     * Constructor method for DocumentSelect
     * @uses DocumentSelect::setBackOfficeHandOff()
     * @uses DocumentSelect::setItinerary()
     * @uses DocumentSelect::setIssueTicketOnly()
     * @uses DocumentSelect::setIssueElectronicTicket()
     * @uses DocumentSelect::setFaxIndicator()
     * @param \Travelport\Util\StructType\BackOfficeHandOff $backOfficeHandOff
     * @param \Travelport\Util\StructType\Itinerary $itinerary
     * @param bool $issueTicketOnly
     * @param bool $issueElectronicTicket
     * @param bool $faxIndicator
     */
    public function __construct(?\Travelport\Util\StructType\BackOfficeHandOff $backOfficeHandOff = null, ?\Travelport\Util\StructType\Itinerary $itinerary = null, ?bool $issueTicketOnly = null, ?bool $issueElectronicTicket = null, ?bool $faxIndicator = null)
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
     * @return \Travelport\Util\StructType\BackOfficeHandOff|null
     */
    public function getBackOfficeHandOff(): ?\Travelport\Util\StructType\BackOfficeHandOff
    {
        return $this->BackOfficeHandOff;
    }
    /**
     * Set BackOfficeHandOff value
     * @param \Travelport\Util\StructType\BackOfficeHandOff $backOfficeHandOff
     * @return \Travelport\Util\StructType\DocumentSelect
     */
    public function setBackOfficeHandOff(?\Travelport\Util\StructType\BackOfficeHandOff $backOfficeHandOff = null): self
    {
        $this->BackOfficeHandOff = $backOfficeHandOff;
        
        return $this;
    }
    /**
     * Get Itinerary value
     * @return \Travelport\Util\StructType\Itinerary|null
     */
    public function getItinerary(): ?\Travelport\Util\StructType\Itinerary
    {
        return $this->Itinerary;
    }
    /**
     * Set Itinerary value
     * @param \Travelport\Util\StructType\Itinerary $itinerary
     * @return \Travelport\Util\StructType\DocumentSelect
     */
    public function setItinerary(?\Travelport\Util\StructType\Itinerary $itinerary = null): self
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
     * @return \Travelport\Util\StructType\DocumentSelect
     */
    public function setIssueTicketOnly(?bool $issueTicketOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($issueTicketOnly) && !is_bool($issueTicketOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($issueTicketOnly, true), gettype($issueTicketOnly)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentSelect
     */
    public function setIssueElectronicTicket(?bool $issueElectronicTicket = null): self
    {
        // validation for constraint: boolean
        if (!is_null($issueElectronicTicket) && !is_bool($issueElectronicTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($issueElectronicTicket, true), gettype($issueElectronicTicket)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentSelect
     */
    public function setFaxIndicator(?bool $faxIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($faxIndicator) && !is_bool($faxIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($faxIndicator, true), gettype($faxIndicator)), __LINE__);
        }
        $this->FaxIndicator = $faxIndicator;
        
        return $this;
    }
}
