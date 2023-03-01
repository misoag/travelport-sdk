<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginalItineraryDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Used for rapid reprice to provide additional information about the original itinerary. Providers: 1G/1V/1P/1S/1A
 * @subpackage Structs
 */
class OriginalItineraryDetails extends AbstractStructBase
{
    /**
     * The ItineraryType
     * Meta information extracted from the WSDL
     * - documentation: Values allowed are International or Domestic. This tells if the itinerary is international or domestic.
     * - use: optional
     * @var string|null
     */
    public ?string $ItineraryType = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Set to true and the itinerary is/will be a bulk ticket. Set to false and the itinerary being repriced will not be a bulk ticket. Default is false.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The TicketingPCC
     * Meta information extracted from the WSDL
     * - documentation: This is the PCC or SID where the ticket was issued | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingPCC = null;
    /**
     * The TicketingIATA
     * Meta information extracted from the WSDL
     * - documentation: This is the IATA where the ticket was issued. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingIATA = null;
    /**
     * The TicketingCountry
     * Meta information extracted from the WSDL
     * - documentation: This is the country where the ticket was issued. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingCountry = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $TourCode = null;
    /**
     * The TicketingDate
     * Meta information extracted from the WSDL
     * - documentation: The date the repriced itinerary was ticketed
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingDate = null;
    /**
     * Constructor method for OriginalItineraryDetails
     * @uses OriginalItineraryDetails::setItineraryType()
     * @uses OriginalItineraryDetails::setBulkTicket()
     * @uses OriginalItineraryDetails::setTicketingPCC()
     * @uses OriginalItineraryDetails::setTicketingIATA()
     * @uses OriginalItineraryDetails::setTicketingCountry()
     * @uses OriginalItineraryDetails::setTourCode()
     * @uses OriginalItineraryDetails::setTicketingDate()
     * @param string $itineraryType
     * @param bool $bulkTicket
     * @param string $ticketingPCC
     * @param string $ticketingIATA
     * @param string $ticketingCountry
     * @param string $tourCode
     * @param string $ticketingDate
     */
    public function __construct(?string $itineraryType = null, ?bool $bulkTicket = false, ?string $ticketingPCC = null, ?string $ticketingIATA = null, ?string $ticketingCountry = null, ?string $tourCode = null, ?string $ticketingDate = null)
    {
        $this
            ->setItineraryType($itineraryType)
            ->setBulkTicket($bulkTicket)
            ->setTicketingPCC($ticketingPCC)
            ->setTicketingIATA($ticketingIATA)
            ->setTicketingCountry($ticketingCountry)
            ->setTourCode($tourCode)
            ->setTicketingDate($ticketingDate);
    }
    /**
     * Get ItineraryType value
     * @return string|null
     */
    public function getItineraryType(): ?string
    {
        return $this->ItineraryType;
    }
    /**
     * Set ItineraryType value
     * @param string $itineraryType
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setItineraryType(?string $itineraryType = null): self
    {
        $this->ItineraryType = $itineraryType;
        
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
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setBulkTicket(?bool $bulkTicket = false): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get TicketingPCC value
     * @return string|null
     */
    public function getTicketingPCC(): ?string
    {
        return $this->TicketingPCC;
    }
    /**
     * Set TicketingPCC value
     * @param string $ticketingPCC
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setTicketingPCC(?string $ticketingPCC = null): self
    {
        $this->TicketingPCC = $ticketingPCC;
        
        return $this;
    }
    /**
     * Get TicketingIATA value
     * @return string|null
     */
    public function getTicketingIATA(): ?string
    {
        return $this->TicketingIATA;
    }
    /**
     * Set TicketingIATA value
     * @param string $ticketingIATA
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setTicketingIATA(?string $ticketingIATA = null): self
    {
        $this->TicketingIATA = $ticketingIATA;
        
        return $this;
    }
    /**
     * Get TicketingCountry value
     * @return string|null
     */
    public function getTicketingCountry(): ?string
    {
        return $this->TicketingCountry;
    }
    /**
     * Set TicketingCountry value
     * @param string $ticketingCountry
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setTicketingCountry(?string $ticketingCountry = null): self
    {
        $this->TicketingCountry = $ticketingCountry;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setTourCode(?string $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get TicketingDate value
     * @return string|null
     */
    public function getTicketingDate(): ?string
    {
        return $this->TicketingDate;
    }
    /**
     * Set TicketingDate value
     * @param string $ticketingDate
     * @return \Travelport\UniversalRecord\StructType\OriginalItineraryDetails
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        $this->TicketingDate = $ticketingDate;
        
        return $this;
    }
}
