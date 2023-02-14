<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\Name|null
     */
    protected ?\StructType\Name $Name = null;
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
     * @param \StructType\Name $name
     * @param string $bookingTravelerRef
     */
    public function __construct(?\StructType\Name $name = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setName($name)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get Name value
     * @return \StructType\Name|null
     */
    public function getName(): ?\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \StructType\Name $name
     * @return \StructType\BookingTravelerInformation
     */
    public function setName(?\StructType\Name $name = null): self
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
     * @return \StructType\BookingTravelerInformation
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