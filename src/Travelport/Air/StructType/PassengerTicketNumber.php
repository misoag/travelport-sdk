<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerTicketNumber StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Ticket Number
 * @subpackage Structs
 */
class PassengerTicketNumber extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticket for a passenger. | Reference Ticket Number
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a passenger associated with a ticket. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * Constructor method for PassengerTicketNumber
     * @uses PassengerTicketNumber::setTicketNumber()
     * @uses PassengerTicketNumber::setBookingTravelerRef()
     * @param string $ticketNumber
     * @param string $bookingTravelerRef
     */
    public function __construct(?string $ticketNumber = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setBookingTravelerRef($bookingTravelerRef);
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
     * @return \Travelport\Air\StructType\PassengerTicketNumber
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
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
     * @return \Travelport\Air\StructType\PassengerTicketNumber
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
