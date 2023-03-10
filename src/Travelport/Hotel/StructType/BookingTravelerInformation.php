<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTravelerInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Booking Traveler information tied to invoice
 * @subpackage Structs
 */
class BookingTravelerInformation extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: Name
     * @var \Travelport\Hotel\StructType\Name|null
     */
    public ?\Travelport\Hotel\StructType\Name $Name = null;
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
     * Constructor method for BookingTravelerInformation
     * @uses BookingTravelerInformation::setName()
     * @uses BookingTravelerInformation::setBookingTravelerRef()
     * @param \Travelport\Hotel\StructType\Name $name
     * @param string $bookingTravelerRef
     */
    public function __construct(?\Travelport\Hotel\StructType\Name $name = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setName($name)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get Name value
     * @return \Travelport\Hotel\StructType\Name|null
     */
    public function getName(): ?\Travelport\Hotel\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Hotel\StructType\Name $name
     * @return \Travelport\Hotel\StructType\BookingTravelerInformation
     */
    public function setName(?\Travelport\Hotel\StructType\Name $name = null): self
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
     * @return \Travelport\Hotel\StructType\BookingTravelerInformation
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
