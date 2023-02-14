<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * The PassengerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code. | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PassengerType = null;
    /**
     * Constructor method for PassengerInfo
     * @uses PassengerInfo::setName()
     * @uses PassengerInfo::setBookingTravelerRef()
     * @uses PassengerInfo::setPassengerType()
     * @param \StructType\Name $name
     * @param string $bookingTravelerRef
     * @param string $passengerType
     */
    public function __construct(?\StructType\Name $name = null, ?string $bookingTravelerRef = null, ?string $passengerType = null)
    {
        $this
            ->setName($name)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setPassengerType($passengerType);
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
     * @return \StructType\PassengerInfo
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
     * @return \StructType\PassengerInfo
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
     * @return \StructType\PassengerInfo
     */
    public function setPassengerType(?string $passengerType = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerType, true), gettype($passengerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerType) && mb_strlen((string) $passengerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerType) && mb_strlen((string) $passengerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerType)), __LINE__);
        }
        $this->PassengerType = $passengerType;
        
        return $this;
    }
}
