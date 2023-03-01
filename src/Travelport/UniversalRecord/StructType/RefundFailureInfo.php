<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Will be optionally returned as part of AirRefunTicketingRsp if one or all ticket refund requests fail.
 * @subpackage Structs
 */
class RefundFailureInfo extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $Code;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - ref: common:TicketNumber
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name|null
     */
    public ?\Travelport\UniversalRecord\StructType\Name $Name = null;
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - choice: TCRNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    public ?string $TCRNumber = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * @var string[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Message = null;
    /**
     * Constructor method for RefundFailureInfo
     * @uses RefundFailureInfo::setCode()
     * @uses RefundFailureInfo::setTicketNumber()
     * @uses RefundFailureInfo::setName()
     * @uses RefundFailureInfo::setTCRNumber()
     * @uses RefundFailureInfo::setBookingTravelerRef()
     * @uses RefundFailureInfo::setMessage()
     * @param int $code
     * @param string $ticketNumber
     * @param \Travelport\UniversalRecord\StructType\Name $name
     * @param string $tCRNumber
     * @param string[] $bookingTravelerRef
     * @param string $message
     */
    public function __construct(int $code, ?string $ticketNumber = null, ?\Travelport\UniversalRecord\StructType\Name $name = null, ?string $tCRNumber = null, ?array $bookingTravelerRef = null, ?string $message = null)
    {
        $this
            ->setCode($code)
            ->setTicketNumber($ticketNumber)
            ->setName($name)
            ->setTCRNumber($tCRNumber)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setMessage($message);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function setCode(int $code): self
    {
        $this->Code = $code;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function setName(?\Travelport\UniversalRecord\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get TCRNumber value
     * @return string|null
     */
    public function getTCRNumber(): ?string
    {
        return $this->TCRNumber ?? null;
    }
    /**
     * Set TCRNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $tCRNumber
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function setTCRNumber(?string $tCRNumber = null): self
    {
        if (is_null($tCRNumber) || (is_array($tCRNumber) && empty($tCRNumber))) {
            unset($this->TCRNumber);
        } else {
            $this->TCRNumber = $tCRNumber;
        }
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function addToBookingTravelerRef(string $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Travelport\UniversalRecord\StructType\RefundFailureInfo
     */
    public function setMessage(?string $message = null): self
    {
        $this->Message = $message;
        
        return $this;
    }
}
