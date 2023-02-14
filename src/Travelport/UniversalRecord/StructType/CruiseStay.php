<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseStay StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides Cruise information.
 * @subpackage Structs
 */
class CruiseStay extends AbstractStructBase
{
    /**
     * The Package
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Package|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Package $Package = null;
    /**
     * The CabinInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: CabinInfo
     * @var \Travelport\UniversalRecord\StructType\CabinInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CabinInfo $CabinInfo = null;
    /**
     * The DiningInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DiningInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DiningInfo $DiningInfo = null;
    /**
     * The ShipName
     * Meta information extracted from the WSDL
     * - documentation: Ship name | Used for Character Strings, length 1 to 25.
     * - base: xs:string
     * - maxLength: 25
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ShipName = null;
    /**
     * The DurationOfStay
     * Meta information extracted from the WSDL
     * - documentation: Length of stay
     * - use: optional
     * @var int|null
     */
    protected ?int $DurationOfStay = null;
    /**
     * The UnitOfStay
     * Meta information extracted from the WSDL
     * - documentation: Unit of duration of stay in Days or Night(Value - Day/Night)
     * - use: optional
     * @var string|null
     */
    protected ?string $UnitOfStay = null;
    /**
     * The BookingDate
     * Meta information extracted from the WSDL
     * - documentation: Date when cruise was booked
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingDate = null;
    /**
     * The BookingAgent
     * Meta information extracted from the WSDL
     * - documentation: Name of the travel agent booking itinerary. | Used for Character Strings, length 1 to 12.
     * - base: xs:string
     * - maxLength: 12
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingAgent = null;
    /**
     * The BookingCredit
     * Meta information extracted from the WSDL
     * - documentation: Credit Paid at the time of booking | Used for Character Strings, length 1 to 10.
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingCredit = null;
    /**
     * The OtherPartyConfNbr
     * Meta information extracted from the WSDL
     * - documentation: Confirm number of the other parties travelling with this party.
     * - use: optional
     * @var int|null
     */
    protected ?int $OtherPartyConfNbr = null;
    /**
     * The PassengerOrigin
     * Meta information extracted from the WSDL
     * - documentation: Origination city for passenger (not necessarily the city from which the cruise embarks). | Used for Character Strings, length 1 to 5.
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $PassengerOrigin = null;
    /**
     * The ConfirmationNumber
     * Meta information extracted from the WSDL
     * - documentation: Confirmation number of cruise segment. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ConfirmationNumber = null;
    /**
     * The LinkedConfNumber
     * Meta information extracted from the WSDL
     * - documentation: Linked Cruise Confirmation Number. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $LinkedConfNumber = null;
    /**
     * The CancellationNumber
     * Meta information extracted from the WSDL
     * - documentation: Cancellation Number of Cruise Segment. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $CancellationNumber = null;
    /**
     * The CancellationDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which the booking was cancelled.
     * - use: optional
     * @var string|null
     */
    protected ?string $CancellationDate = null;
    /**
     * The CancellationTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which the booking was cancelled.
     * - use: optional
     * @var string|null
     */
    protected ?string $CancellationTime = null;
    /**
     * Constructor method for CruiseStay
     * @uses CruiseStay::setPackage()
     * @uses CruiseStay::setCabinInfo()
     * @uses CruiseStay::setDiningInfo()
     * @uses CruiseStay::setShipName()
     * @uses CruiseStay::setDurationOfStay()
     * @uses CruiseStay::setUnitOfStay()
     * @uses CruiseStay::setBookingDate()
     * @uses CruiseStay::setBookingAgent()
     * @uses CruiseStay::setBookingCredit()
     * @uses CruiseStay::setOtherPartyConfNbr()
     * @uses CruiseStay::setPassengerOrigin()
     * @uses CruiseStay::setConfirmationNumber()
     * @uses CruiseStay::setLinkedConfNumber()
     * @uses CruiseStay::setCancellationNumber()
     * @uses CruiseStay::setCancellationDate()
     * @uses CruiseStay::setCancellationTime()
     * @param \Travelport\UniversalRecord\StructType\Package $package
     * @param \Travelport\UniversalRecord\StructType\CabinInfo $cabinInfo
     * @param \Travelport\UniversalRecord\StructType\DiningInfo $diningInfo
     * @param string $shipName
     * @param int $durationOfStay
     * @param string $unitOfStay
     * @param string $bookingDate
     * @param string $bookingAgent
     * @param string $bookingCredit
     * @param int $otherPartyConfNbr
     * @param string $passengerOrigin
     * @param string $confirmationNumber
     * @param string $linkedConfNumber
     * @param string $cancellationNumber
     * @param string $cancellationDate
     * @param string $cancellationTime
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Package $package = null, ?\Travelport\UniversalRecord\StructType\CabinInfo $cabinInfo = null, ?\Travelport\UniversalRecord\StructType\DiningInfo $diningInfo = null, ?string $shipName = null, ?int $durationOfStay = null, ?string $unitOfStay = null, ?string $bookingDate = null, ?string $bookingAgent = null, ?string $bookingCredit = null, ?int $otherPartyConfNbr = null, ?string $passengerOrigin = null, ?string $confirmationNumber = null, ?string $linkedConfNumber = null, ?string $cancellationNumber = null, ?string $cancellationDate = null, ?string $cancellationTime = null)
    {
        $this
            ->setPackage($package)
            ->setCabinInfo($cabinInfo)
            ->setDiningInfo($diningInfo)
            ->setShipName($shipName)
            ->setDurationOfStay($durationOfStay)
            ->setUnitOfStay($unitOfStay)
            ->setBookingDate($bookingDate)
            ->setBookingAgent($bookingAgent)
            ->setBookingCredit($bookingCredit)
            ->setOtherPartyConfNbr($otherPartyConfNbr)
            ->setPassengerOrigin($passengerOrigin)
            ->setConfirmationNumber($confirmationNumber)
            ->setLinkedConfNumber($linkedConfNumber)
            ->setCancellationNumber($cancellationNumber)
            ->setCancellationDate($cancellationDate)
            ->setCancellationTime($cancellationTime);
    }
    /**
     * Get Package value
     * @return \Travelport\UniversalRecord\StructType\Package|null
     */
    public function getPackage(): ?\Travelport\UniversalRecord\StructType\Package
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \Travelport\UniversalRecord\StructType\Package $package
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setPackage(?\Travelport\UniversalRecord\StructType\Package $package = null): self
    {
        $this->Package = $package;
        
        return $this;
    }
    /**
     * Get CabinInfo value
     * @return \Travelport\UniversalRecord\StructType\CabinInfo|null
     */
    public function getCabinInfo(): ?\Travelport\UniversalRecord\StructType\CabinInfo
    {
        return $this->CabinInfo;
    }
    /**
     * Set CabinInfo value
     * @param \Travelport\UniversalRecord\StructType\CabinInfo $cabinInfo
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setCabinInfo(?\Travelport\UniversalRecord\StructType\CabinInfo $cabinInfo = null): self
    {
        $this->CabinInfo = $cabinInfo;
        
        return $this;
    }
    /**
     * Get DiningInfo value
     * @return \Travelport\UniversalRecord\StructType\DiningInfo|null
     */
    public function getDiningInfo(): ?\Travelport\UniversalRecord\StructType\DiningInfo
    {
        return $this->DiningInfo;
    }
    /**
     * Set DiningInfo value
     * @param \Travelport\UniversalRecord\StructType\DiningInfo $diningInfo
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setDiningInfo(?\Travelport\UniversalRecord\StructType\DiningInfo $diningInfo = null): self
    {
        $this->DiningInfo = $diningInfo;
        
        return $this;
    }
    /**
     * Get ShipName value
     * @return string|null
     */
    public function getShipName(): ?string
    {
        return $this->ShipName;
    }
    /**
     * Set ShipName value
     * @param string $shipName
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setShipName(?string $shipName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipName) && !is_string($shipName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipName, true), gettype($shipName)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($shipName) && mb_strlen((string) $shipName) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $shipName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($shipName) && mb_strlen((string) $shipName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $shipName)), __LINE__);
        }
        $this->ShipName = $shipName;
        
        return $this;
    }
    /**
     * Get DurationOfStay value
     * @return int|null
     */
    public function getDurationOfStay(): ?int
    {
        return $this->DurationOfStay;
    }
    /**
     * Set DurationOfStay value
     * @param int $durationOfStay
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setDurationOfStay(?int $durationOfStay = null): self
    {
        // validation for constraint: int
        if (!is_null($durationOfStay) && !(is_int($durationOfStay) || ctype_digit($durationOfStay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationOfStay, true), gettype($durationOfStay)), __LINE__);
        }
        $this->DurationOfStay = $durationOfStay;
        
        return $this;
    }
    /**
     * Get UnitOfStay value
     * @return string|null
     */
    public function getUnitOfStay(): ?string
    {
        return $this->UnitOfStay;
    }
    /**
     * Set UnitOfStay value
     * @param string $unitOfStay
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setUnitOfStay(?string $unitOfStay = null): self
    {
        // validation for constraint: string
        if (!is_null($unitOfStay) && !is_string($unitOfStay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitOfStay, true), gettype($unitOfStay)), __LINE__);
        }
        $this->UnitOfStay = $unitOfStay;
        
        return $this;
    }
    /**
     * Get BookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->BookingDate;
    }
    /**
     * Set BookingDate value
     * @param string $bookingDate
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->BookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get BookingAgent value
     * @return string|null
     */
    public function getBookingAgent(): ?string
    {
        return $this->BookingAgent;
    }
    /**
     * Set BookingAgent value
     * @param string $bookingAgent
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setBookingAgent(?string $bookingAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingAgent) && !is_string($bookingAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingAgent, true), gettype($bookingAgent)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($bookingAgent) && mb_strlen((string) $bookingAgent) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $bookingAgent)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($bookingAgent) && mb_strlen((string) $bookingAgent) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $bookingAgent)), __LINE__);
        }
        $this->BookingAgent = $bookingAgent;
        
        return $this;
    }
    /**
     * Get BookingCredit value
     * @return string|null
     */
    public function getBookingCredit(): ?string
    {
        return $this->BookingCredit;
    }
    /**
     * Set BookingCredit value
     * @param string $bookingCredit
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setBookingCredit(?string $bookingCredit = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCredit) && !is_string($bookingCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCredit, true), gettype($bookingCredit)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($bookingCredit) && mb_strlen((string) $bookingCredit) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $bookingCredit)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($bookingCredit) && mb_strlen((string) $bookingCredit) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $bookingCredit)), __LINE__);
        }
        $this->BookingCredit = $bookingCredit;
        
        return $this;
    }
    /**
     * Get OtherPartyConfNbr value
     * @return int|null
     */
    public function getOtherPartyConfNbr(): ?int
    {
        return $this->OtherPartyConfNbr;
    }
    /**
     * Set OtherPartyConfNbr value
     * @param int $otherPartyConfNbr
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setOtherPartyConfNbr(?int $otherPartyConfNbr = null): self
    {
        // validation for constraint: int
        if (!is_null($otherPartyConfNbr) && !(is_int($otherPartyConfNbr) || ctype_digit($otherPartyConfNbr))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($otherPartyConfNbr, true), gettype($otherPartyConfNbr)), __LINE__);
        }
        $this->OtherPartyConfNbr = $otherPartyConfNbr;
        
        return $this;
    }
    /**
     * Get PassengerOrigin value
     * @return string|null
     */
    public function getPassengerOrigin(): ?string
    {
        return $this->PassengerOrigin;
    }
    /**
     * Set PassengerOrigin value
     * @param string $passengerOrigin
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setPassengerOrigin(?string $passengerOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerOrigin) && !is_string($passengerOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerOrigin, true), gettype($passengerOrigin)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerOrigin) && mb_strlen((string) $passengerOrigin) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerOrigin)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($passengerOrigin) && mb_strlen((string) $passengerOrigin) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $passengerOrigin)), __LINE__);
        }
        $this->PassengerOrigin = $passengerOrigin;
        
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string|null
     */
    public function getConfirmationNumber(): ?string
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setConfirmationNumber(?string $confirmationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationNumber, true), gettype($confirmationNumber)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($confirmationNumber) && mb_strlen((string) $confirmationNumber) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $confirmationNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($confirmationNumber) && mb_strlen((string) $confirmationNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        
        return $this;
    }
    /**
     * Get LinkedConfNumber value
     * @return string|null
     */
    public function getLinkedConfNumber(): ?string
    {
        return $this->LinkedConfNumber;
    }
    /**
     * Set LinkedConfNumber value
     * @param string $linkedConfNumber
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setLinkedConfNumber(?string $linkedConfNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedConfNumber) && !is_string($linkedConfNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedConfNumber, true), gettype($linkedConfNumber)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($linkedConfNumber) && mb_strlen((string) $linkedConfNumber) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $linkedConfNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($linkedConfNumber) && mb_strlen((string) $linkedConfNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $linkedConfNumber)), __LINE__);
        }
        $this->LinkedConfNumber = $linkedConfNumber;
        
        return $this;
    }
    /**
     * Get CancellationNumber value
     * @return string|null
     */
    public function getCancellationNumber(): ?string
    {
        return $this->CancellationNumber;
    }
    /**
     * Set CancellationNumber value
     * @param string $cancellationNumber
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setCancellationNumber(?string $cancellationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($cancellationNumber) && !is_string($cancellationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancellationNumber, true), gettype($cancellationNumber)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($cancellationNumber) && mb_strlen((string) $cancellationNumber) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $cancellationNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cancellationNumber) && mb_strlen((string) $cancellationNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cancellationNumber)), __LINE__);
        }
        $this->CancellationNumber = $cancellationNumber;
        
        return $this;
    }
    /**
     * Get CancellationDate value
     * @return string|null
     */
    public function getCancellationDate(): ?string
    {
        return $this->CancellationDate;
    }
    /**
     * Set CancellationDate value
     * @param string $cancellationDate
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setCancellationDate(?string $cancellationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cancellationDate) && !is_string($cancellationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancellationDate, true), gettype($cancellationDate)), __LINE__);
        }
        $this->CancellationDate = $cancellationDate;
        
        return $this;
    }
    /**
     * Get CancellationTime value
     * @return string|null
     */
    public function getCancellationTime(): ?string
    {
        return $this->CancellationTime;
    }
    /**
     * Set CancellationTime value
     * @param string $cancellationTime
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function setCancellationTime(?string $cancellationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($cancellationTime) && !is_string($cancellationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancellationTime, true), gettype($cancellationTime)), __LINE__);
        }
        $this->CancellationTime = $cancellationTime;
        
        return $this;
    }
}
