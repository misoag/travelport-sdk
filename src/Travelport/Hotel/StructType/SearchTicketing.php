<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTicketing StructType
 * Meta information extracted from the WSDL
 * - documentation: Search restriction by Agent
 * @subpackage Structs
 */
class SearchTicketing extends AbstractStructBase
{
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - default: Both
     * - use: optional
     * @var string|null
     */
    public ?string $TicketStatus = null;
    /**
     * The ReservationStatus
     * Meta information extracted from the WSDL
     * - default: Both
     * - use: optional
     * @var string|null
     */
    public ?string $ReservationStatus = null;
    /**
     * The TicketDate
     * Meta information extracted from the WSDL
     * - documentation: Identifies when this reservation was ticketed, or when it should be ticketed by (in the event of a TTL)
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDate = null;
    /**
     * Constructor method for SearchTicketing
     * @uses SearchTicketing::setTicketStatus()
     * @uses SearchTicketing::setReservationStatus()
     * @uses SearchTicketing::setTicketDate()
     * @param string $ticketStatus
     * @param string $reservationStatus
     * @param string $ticketDate
     */
    public function __construct(?string $ticketStatus = 'Both', ?string $reservationStatus = 'Both', ?string $ticketDate = null)
    {
        $this
            ->setTicketStatus($ticketStatus)
            ->setReservationStatus($reservationStatus)
            ->setTicketDate($ticketDate);
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
     * @return \Travelport\Hotel\StructType\SearchTicketing
     */
    public function setTicketStatus(?string $ticketStatus = 'Both'): self
    {
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus(): ?string
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \Travelport\Hotel\StructType\SearchTicketing
     */
    public function setReservationStatus(?string $reservationStatus = 'Both'): self
    {
        $this->ReservationStatus = $reservationStatus;
        
        return $this;
    }
    /**
     * Get TicketDate value
     * @return string|null
     */
    public function getTicketDate(): ?string
    {
        return $this->TicketDate;
    }
    /**
     * Set TicketDate value
     * @param string $ticketDate
     * @return \Travelport\Hotel\StructType\SearchTicketing
     */
    public function setTicketDate(?string $ticketDate = null): self
    {
        $this->TicketDate = $ticketDate;
        
        return $this;
    }
}
