<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeRsp StructType
 * @subpackage Structs
 */
class AirExchangeRsp extends BaseRsp
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:TicketNumber
     * @var string[]
     */
    public ?array $TicketNumber = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTraveler
     * @var \Travelport\Air\StructType\BookingTraveler[]
     */
    public ?array $BookingTraveler = null;
    /**
     * The AirReservation
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH.
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeAirReservationWithFOP|null
     */
    public ?\Travelport\Air\StructType\TypeAirReservationWithFOP $AirReservation = null;
    /**
     * The ExchangeFailureInfo
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTicketFailureInfo[]
     */
    public ?array $ExchangeFailureInfo = null;
    /**
     * Constructor method for AirExchangeRsp
     * @uses AirExchangeRsp::setTicketNumber()
     * @uses AirExchangeRsp::setBookingTraveler()
     * @uses AirExchangeRsp::setAirReservation()
     * @uses AirExchangeRsp::setExchangeFailureInfo()
     * @param string[] $ticketNumber
     * @param \Travelport\Air\StructType\BookingTraveler[] $bookingTraveler
     * @param \Travelport\Air\StructType\TypeAirReservationWithFOP $airReservation
     * @param \Travelport\Air\StructType\TypeTicketFailureInfo[] $exchangeFailureInfo
     */
    public function __construct(?array $ticketNumber = null, ?array $bookingTraveler = null, ?\Travelport\Air\StructType\TypeAirReservationWithFOP $airReservation = null, ?array $exchangeFailureInfo = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setBookingTraveler($bookingTraveler)
            ->setAirReservation($airReservation)
            ->setExchangeFailureInfo($exchangeFailureInfo);
    }
    /**
     * Get TicketNumber value
     * @return string[]
     */
    public function getTicketNumber(): ?array
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string[] $ticketNumber
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function setTicketNumber(?array $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Add item to TicketNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\Air\StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): ?array
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\Air\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function setBookingTraveler(?array $bookingTraveler = null): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingTraveler $item
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function addToBookingTraveler(\Travelport\Air\StructType\BookingTraveler $item): self
    {
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get AirReservation value
     * @return \Travelport\Air\StructType\TypeAirReservationWithFOP|null
     */
    public function getAirReservation(): ?\Travelport\Air\StructType\TypeAirReservationWithFOP
    {
        return $this->AirReservation;
    }
    /**
     * Set AirReservation value
     * @param \Travelport\Air\StructType\TypeAirReservationWithFOP $airReservation
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function setAirReservation(?\Travelport\Air\StructType\TypeAirReservationWithFOP $airReservation = null): self
    {
        $this->AirReservation = $airReservation;
        
        return $this;
    }
    /**
     * Get ExchangeFailureInfo value
     * @return \Travelport\Air\StructType\TypeTicketFailureInfo[]
     */
    public function getExchangeFailureInfo(): ?array
    {
        return $this->ExchangeFailureInfo;
    }
    /**
     * Set ExchangeFailureInfo value
     * @param \Travelport\Air\StructType\TypeTicketFailureInfo[] $exchangeFailureInfo
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function setExchangeFailureInfo(?array $exchangeFailureInfo = null): self
    {
        $this->ExchangeFailureInfo = $exchangeFailureInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangeFailureInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTicketFailureInfo $item
     * @return \Travelport\Air\StructType\AirExchangeRsp
     */
    public function addToExchangeFailureInfo(\Travelport\Air\StructType\TypeTicketFailureInfo $item): self
    {
        $this->ExchangeFailureInfo[] = $item;
        
        return $this;
    }
}
