<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConjunctedTicketInfo StructType
 * @subpackage Structs
 */
class ConjunctedTicketInfo extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The IATANumber
     * Meta information extracted from the WSDL
     * - documentation: ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    public ?string $IATANumber = null;
    /**
     * The TicketIssueDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TicketIssueDate = null;
    /**
     * The TicketingAgentSignOn
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingAgentSignOn = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Contains Ticketed PCC’s Country code. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * Constructor method for ConjunctedTicketInfo
     * @uses ConjunctedTicketInfo::setNumber()
     * @uses ConjunctedTicketInfo::setStatus()
     * @uses ConjunctedTicketInfo::setIATANumber()
     * @uses ConjunctedTicketInfo::setTicketIssueDate()
     * @uses ConjunctedTicketInfo::setTicketingAgentSignOn()
     * @uses ConjunctedTicketInfo::setCountryCode()
     * @param string $number
     * @param string $status
     * @param string $iATANumber
     * @param string $ticketIssueDate
     * @param string $ticketingAgentSignOn
     * @param string $countryCode
     */
    public function __construct(string $number, string $status, ?string $iATANumber = null, ?string $ticketIssueDate = null, ?string $ticketingAgentSignOn = null, ?string $countryCode = null)
    {
        $this
            ->setNumber($number)
            ->setStatus($status)
            ->setIATANumber($iATANumber)
            ->setTicketIssueDate($ticketIssueDate)
            ->setTicketingAgentSignOn($ticketingAgentSignOn)
            ->setCountryCode($countryCode);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get IATANumber value
     * @return string|null
     */
    public function getIATANumber(): ?string
    {
        return $this->IATANumber;
    }
    /**
     * Set IATANumber value
     * @param string $iATANumber
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo
     */
    public function setIATANumber(?string $iATANumber = null): self
    {
        $this->IATANumber = $iATANumber;
        
        return $this;
    }
    /**
     * Get TicketIssueDate value
     * @return string|null
     */
    public function getTicketIssueDate(): ?string
    {
        return $this->TicketIssueDate;
    }
    /**
     * Set TicketIssueDate value
     * @param string $ticketIssueDate
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo
     */
    public function setTicketIssueDate(?string $ticketIssueDate = null): self
    {
        $this->TicketIssueDate = $ticketIssueDate;
        
        return $this;
    }
    /**
     * Get TicketingAgentSignOn value
     * @return string|null
     */
    public function getTicketingAgentSignOn(): ?string
    {
        return $this->TicketingAgentSignOn;
    }
    /**
     * Set TicketingAgentSignOn value
     * @param string $ticketingAgentSignOn
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo
     */
    public function setTicketingAgentSignOn(?string $ticketingAgentSignOn = null): self
    {
        $this->TicketingAgentSignOn = $ticketingAgentSignOn;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
}
