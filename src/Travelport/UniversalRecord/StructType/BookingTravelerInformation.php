<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\Name|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Name $Name = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger related to a ticket. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * Constructor method for BookingTravelerInformation
     * @uses BookingTravelerInformation::setName()
     * @uses BookingTravelerInformation::setBookingTravelerRef()
     * @param \Travelport\UniversalRecord\StructType\Name $name
     * @param string $bookingTravelerRef
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Name $name = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setName($name)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get Name value
     * @return \Travelport\UniversalRecord\StructType\Name|null
     */
    public function getName(): ?\Travelport\UniversalRecord\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\UniversalRecord\StructType\Name $name
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerInformation
     */
    public function setName(?\Travelport\UniversalRecord\StructType\Name $name = null): self
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
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerInformation
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
