<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $TicketNumber = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a passenger associated with a ticket. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
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
     * @return \Travelport\UniversalRecord\StructType\PassengerTicketNumber
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ticketNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\PassengerTicketNumber
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
