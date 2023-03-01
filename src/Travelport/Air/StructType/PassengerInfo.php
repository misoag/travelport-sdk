<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Booking Traveler information tied to invoice
 * @subpackage Structs
 */
class PassengerInfo extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Name
     * @var \Travelport\Air\StructType\Name|null
     */
    public ?\Travelport\Air\StructType\Name $Name = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger related to a ticket. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code. | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PassengerType = null;
    /**
     * Constructor method for PassengerInfo
     * @uses PassengerInfo::setName()
     * @uses PassengerInfo::setBookingTravelerRef()
     * @uses PassengerInfo::setPassengerType()
     * @param \Travelport\Air\StructType\Name $name
     * @param string $bookingTravelerRef
     * @param string $passengerType
     */
    public function __construct(?\Travelport\Air\StructType\Name $name = null, ?string $bookingTravelerRef = null, ?string $passengerType = null)
    {
        $this
            ->setName($name)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setPassengerType($passengerType);
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
     * @return \Travelport\Air\StructType\PassengerInfo
     */
    public function setName(?\Travelport\Air\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
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
     * @return \Travelport\Air\StructType\PassengerInfo
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType(): ?string
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param string $passengerType
     * @return \Travelport\Air\StructType\PassengerInfo
     */
    public function setPassengerType(?string $passengerType = null): self
    {
        $this->PassengerType = $passengerType;
        
        return $this;
    }
}
