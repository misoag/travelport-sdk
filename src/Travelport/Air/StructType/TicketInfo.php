<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfo StructType
 * @subpackage Structs
 */
class TicketInfo extends AbstractStructBase
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
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\Air\StructType\Name|null
     */
    public ?\Travelport\Air\StructType\Name $Name = null;
    /**
     * The ConjunctedTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: ConjunctedTicketInfo
     * @var \Travelport\Air\StructType\ConjunctedTicketInfo[]
     */
    public ?array $ConjunctedTicketInfo = null;
    /**
     * The ExchangedTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ExchangedTicketInfo
     * @var \Travelport\Air\StructType\ExchangedTicketInfo[]
     */
    public ?array $ExchangedTicketInfo = null;
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
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket was issued as bulk.
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a AirPricing.Applicable Providers 1G and 1V. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirPricingInfoRef = null;
    /**
     * Constructor method for TicketInfo
     * @uses TicketInfo::setNumber()
     * @uses TicketInfo::setStatus()
     * @uses TicketInfo::setBookingTravelerRef()
     * @uses TicketInfo::setName()
     * @uses TicketInfo::setConjunctedTicketInfo()
     * @uses TicketInfo::setExchangedTicketInfo()
     * @uses TicketInfo::setIATANumber()
     * @uses TicketInfo::setTicketIssueDate()
     * @uses TicketInfo::setTicketingAgentSignOn()
     * @uses TicketInfo::setCountryCode()
     * @uses TicketInfo::setBulkTicket()
     * @uses TicketInfo::setAirPricingInfoRef()
     * @param string $number
     * @param string $status
     * @param string $bookingTravelerRef
     * @param \Travelport\Air\StructType\Name $name
     * @param \Travelport\Air\StructType\ConjunctedTicketInfo[] $conjunctedTicketInfo
     * @param \Travelport\Air\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @param string $iATANumber
     * @param string $ticketIssueDate
     * @param string $ticketingAgentSignOn
     * @param string $countryCode
     * @param bool $bulkTicket
     * @param string $airPricingInfoRef
     */
    public function __construct(string $number, string $status, string $bookingTravelerRef, ?\Travelport\Air\StructType\Name $name = null, ?array $conjunctedTicketInfo = null, ?array $exchangedTicketInfo = null, ?string $iATANumber = null, ?string $ticketIssueDate = null, ?string $ticketingAgentSignOn = null, ?string $countryCode = null, ?bool $bulkTicket = null, ?string $airPricingInfoRef = null)
    {
        $this
            ->setNumber($number)
            ->setStatus($status)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setName($name)
            ->setConjunctedTicketInfo($conjunctedTicketInfo)
            ->setExchangedTicketInfo($exchangedTicketInfo)
            ->setIATANumber($iATANumber)
            ->setTicketIssueDate($ticketIssueDate)
            ->setTicketingAgentSignOn($ticketingAgentSignOn)
            ->setCountryCode($countryCode)
            ->setBulkTicket($bulkTicket)
            ->setAirPricingInfoRef($airPricingInfoRef);
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
     * @return \Travelport\Air\StructType\TicketInfo
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
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Air\StructType\Name|null
     */
    public function getName(): ?\Travelport\Air\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Air\StructType\Name $name
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setName(?\Travelport\Air\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get ConjunctedTicketInfo value
     * @return \Travelport\Air\StructType\ConjunctedTicketInfo[]
     */
    public function getConjunctedTicketInfo(): ?array
    {
        return $this->ConjunctedTicketInfo;
    }
    /**
     * Set ConjunctedTicketInfo value
     * @param \Travelport\Air\StructType\ConjunctedTicketInfo[] $conjunctedTicketInfo
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setConjunctedTicketInfo(?array $conjunctedTicketInfo = null): self
    {
        $this->ConjunctedTicketInfo = $conjunctedTicketInfo;
        
        return $this;
    }
    /**
     * Add item to ConjunctedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ConjunctedTicketInfo $item
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function addToConjunctedTicketInfo(\Travelport\Air\StructType\ConjunctedTicketInfo $item): self
    {
        $this->ConjunctedTicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangedTicketInfo value
     * @return \Travelport\Air\StructType\ExchangedTicketInfo[]
     */
    public function getExchangedTicketInfo(): ?array
    {
        return $this->ExchangedTicketInfo;
    }
    /**
     * Set ExchangedTicketInfo value
     * @param \Travelport\Air\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setExchangedTicketInfo(?array $exchangedTicketInfo = null): self
    {
        $this->ExchangedTicketInfo = $exchangedTicketInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ExchangedTicketInfo $item
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function addToExchangedTicketInfo(\Travelport\Air\StructType\ExchangedTicketInfo $item): self
    {
        $this->ExchangedTicketInfo[] = $item;
        
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
     * @return \Travelport\Air\StructType\TicketInfo
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
     * @return \Travelport\Air\StructType\TicketInfo
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
     * @return \Travelport\Air\StructType\TicketInfo
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
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return bool|null
     */
    public function getBulkTicket(): ?bool
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param bool $bulkTicket
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setBulkTicket(?bool $bulkTicket = null): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return string|null
     */
    public function getAirPricingInfoRef(): ?string
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param string $airPricingInfoRef
     * @return \Travelport\Air\StructType\TicketInfo
     */
    public function setAirPricingInfoRef(?string $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
}
