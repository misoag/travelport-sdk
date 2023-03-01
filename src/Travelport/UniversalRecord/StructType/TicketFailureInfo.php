<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns related air pricing infos. | Will be optionally returned as part of AirTicketingRsp if one or all ticket requests fail. Atrributes are faiilure code, failure message, and passenger reference key. Passenger name is a child
 * element.
 * @subpackage Structs
 */
class TicketFailureInfo extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public array $AirPricingInfoRef;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $Code;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name|null
     */
    public ?\Travelport\UniversalRecord\StructType\Name $Name = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Message = null;
    /**
     * Constructor method for TicketFailureInfo
     * @uses TicketFailureInfo::setAirPricingInfoRef()
     * @uses TicketFailureInfo::setCode()
     * @uses TicketFailureInfo::setBookingTravelerRef()
     * @uses TicketFailureInfo::setName()
     * @uses TicketFailureInfo::setMessage()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param int $code
     * @param string $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\Name $name
     * @param string $message
     */
    public function __construct(array $airPricingInfoRef, int $code, string $bookingTravelerRef, ?\Travelport\UniversalRecord\StructType\Name $name = null, ?string $message = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setCode($code)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setName($name)
            ->setMessage($message);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setAirPricingInfoRef(array $airPricingInfoRef): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setCode(int $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setName(?\Travelport\UniversalRecord\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
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
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setMessage(?string $message = null): self
    {
        $this->Message = $message;
        
        return $this;
    }
}
