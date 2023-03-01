<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailTicketInfo StructType
 * @subpackage Structs
 */
class RailTicketInfo extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * The RailJourneyRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailJourneyRef
     * @var \Travelport\UniversalRecord\StructType\RailJourneyRef[]
     */
    public ?array $RailJourneyRef = null;
    /**
     * The TicketAdvisory
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: TicketAdvisory
     * @var \Travelport\UniversalRecord\StructType\TicketAdvisory[]
     */
    public ?array $TicketAdvisory = null;
    /**
     * The IssueLocation
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $IssueLocation = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of Ticket. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TicketStatus = null;
    /**
     * The TicketFormType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $TicketFormType = null;
    /**
     * The TrafficType
     * Meta information extracted from the WSDL
     * - documentation: Type of traffic. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TrafficType = null;
    /**
     * The IssuedDate
     * Meta information extracted from the WSDL
     * - documentation: Ticket issue date.
     * - use: optional
     * @var string|null
     */
    public ?string $IssuedDate = null;
    /**
     * The TicketType
     * Meta information extracted from the WSDL
     * - documentation: Type of ticket. Paper, eTicket etc. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TicketType = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a BookingTraveler. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * Constructor method for RailTicketInfo
     * @uses RailTicketInfo::setNumber()
     * @uses RailTicketInfo::setRailJourneyRef()
     * @uses RailTicketInfo::setTicketAdvisory()
     * @uses RailTicketInfo::setIssueLocation()
     * @uses RailTicketInfo::setTicketStatus()
     * @uses RailTicketInfo::setTicketFormType()
     * @uses RailTicketInfo::setTrafficType()
     * @uses RailTicketInfo::setIssuedDate()
     * @uses RailTicketInfo::setTicketType()
     * @uses RailTicketInfo::setBookingTravelerRef()
     * @param string $number
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef[] $railJourneyRef
     * @param \Travelport\UniversalRecord\StructType\TicketAdvisory[] $ticketAdvisory
     * @param string $issueLocation
     * @param string $ticketStatus
     * @param string $ticketFormType
     * @param string $trafficType
     * @param string $issuedDate
     * @param string $ticketType
     * @param string $bookingTravelerRef
     */
    public function __construct(string $number, ?array $railJourneyRef = null, ?array $ticketAdvisory = null, ?string $issueLocation = null, ?string $ticketStatus = null, ?string $ticketFormType = null, ?string $trafficType = null, ?string $issuedDate = null, ?string $ticketType = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setNumber($number)
            ->setRailJourneyRef($railJourneyRef)
            ->setTicketAdvisory($ticketAdvisory)
            ->setIssueLocation($issueLocation)
            ->setTicketStatus($ticketStatus)
            ->setTicketFormType($ticketFormType)
            ->setTrafficType($trafficType)
            ->setIssuedDate($issuedDate)
            ->setTicketType($ticketType)
            ->setBookingTravelerRef($bookingTravelerRef);
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
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get RailJourneyRef value
     * @return \Travelport\UniversalRecord\StructType\RailJourneyRef[]
     */
    public function getRailJourneyRef(): ?array
    {
        return $this->RailJourneyRef;
    }
    /**
     * Set RailJourneyRef value
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef[] $railJourneyRef
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setRailJourneyRef(?array $railJourneyRef = null): self
    {
        $this->RailJourneyRef = $railJourneyRef;
        
        return $this;
    }
    /**
     * Add item to RailJourneyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef $item
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function addToRailJourneyRef(\Travelport\UniversalRecord\StructType\RailJourneyRef $item): self
    {
        $this->RailJourneyRef[] = $item;
        
        return $this;
    }
    /**
     * Get TicketAdvisory value
     * @return \Travelport\UniversalRecord\StructType\TicketAdvisory[]
     */
    public function getTicketAdvisory(): ?array
    {
        return $this->TicketAdvisory;
    }
    /**
     * Set TicketAdvisory value
     * @param \Travelport\UniversalRecord\StructType\TicketAdvisory[] $ticketAdvisory
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketAdvisory(?array $ticketAdvisory = null): self
    {
        $this->TicketAdvisory = $ticketAdvisory;
        
        return $this;
    }
    /**
     * Add item to TicketAdvisory value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketAdvisory $item
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function addToTicketAdvisory(\Travelport\UniversalRecord\StructType\TicketAdvisory $item): self
    {
        $this->TicketAdvisory[] = $item;
        
        return $this;
    }
    /**
     * Get IssueLocation value
     * @return string|null
     */
    public function getIssueLocation(): ?string
    {
        return $this->IssueLocation;
    }
    /**
     * Set IssueLocation value
     * @param string $issueLocation
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setIssueLocation(?string $issueLocation = null): self
    {
        $this->IssueLocation = $issueLocation;
        
        return $this;
    }
    /**
     * Get TicketStatus value
     * @return string|null
     */
    public function getTicketStatus(): ?string
    {
        return $this->TicketStatus;
    }
    /**
     * Set TicketStatus value
     * @param string $ticketStatus
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
    /**
     * Get TicketFormType value
     * @return string|null
     */
    public function getTicketFormType(): ?string
    {
        return $this->TicketFormType;
    }
    /**
     * Set TicketFormType value
     * @param string $ticketFormType
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketFormType(?string $ticketFormType = null): self
    {
        $this->TicketFormType = $ticketFormType;
        
        return $this;
    }
    /**
     * Get TrafficType value
     * @return string|null
     */
    public function getTrafficType(): ?string
    {
        return $this->TrafficType;
    }
    /**
     * Set TrafficType value
     * @param string $trafficType
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTrafficType(?string $trafficType = null): self
    {
        $this->TrafficType = $trafficType;
        
        return $this;
    }
    /**
     * Get IssuedDate value
     * @return string|null
     */
    public function getIssuedDate(): ?string
    {
        return $this->IssuedDate;
    }
    /**
     * Set IssuedDate value
     * @param string $issuedDate
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setIssuedDate(?string $issuedDate = null): self
    {
        $this->IssuedDate = $issuedDate;
        
        return $this;
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @param string $ticketType
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketType(?string $ticketType = null): self
    {
        $this->TicketType = $ticketType;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
