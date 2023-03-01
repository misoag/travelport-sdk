<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: The parent container for all Rail booking data
 * @subpackage Structs
 */
class RailReservation extends BaseReservation
{
    /**
     * The BookingStatus
     * Meta information extracted from the WSDL
     * - documentation: The Current Status of the rail booking.
     * - use: required
     * @var string
     */
    public string $BookingStatus;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Air\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The RailJourney
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailJourney
     * @var \Travelport\Air\StructType\RailJourney[]
     */
    public ?array $RailJourney = null;
    /**
     * The RailPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailPricingInfo
     * @var \Travelport\Air\StructType\RailPricingInfo[]
     */
    public ?array $RailPricingInfo = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Air\StructType\Payment[]
     */
    public ?array $Payment = null;
    /**
     * The RailTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailTicketInfo
     * @var \Travelport\Air\StructType\RailTicketInfo[]
     */
    public ?array $RailTicketInfo = null;
    /**
     * The RailFareNoteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailFareNoteList
     * @var \Travelport\Air\StructType\RailFareNoteList|null
     */
    public ?\Travelport\Air\StructType\RailFareNoteList $RailFareNoteList = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\Air\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * Constructor method for RailReservation
     * @uses RailReservation::setBookingStatus()
     * @uses RailReservation::setBookingTravelerRef()
     * @uses RailReservation::setRailJourney()
     * @uses RailReservation::setRailPricingInfo()
     * @uses RailReservation::setPayment()
     * @uses RailReservation::setRailTicketInfo()
     * @uses RailReservation::setRailFareNoteList()
     * @uses RailReservation::setSupplierLocator()
     * @param string $bookingStatus
     * @param \Travelport\Air\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\Air\StructType\RailJourney[] $railJourney
     * @param \Travelport\Air\StructType\RailPricingInfo[] $railPricingInfo
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @param \Travelport\Air\StructType\RailTicketInfo[] $railTicketInfo
     * @param \Travelport\Air\StructType\RailFareNoteList $railFareNoteList
     * @param \Travelport\Air\StructType\SupplierLocator[] $supplierLocator
     */
    public function __construct(string $bookingStatus, ?array $bookingTravelerRef = null, ?array $railJourney = null, ?array $railPricingInfo = null, ?array $payment = null, ?array $railTicketInfo = null, ?\Travelport\Air\StructType\RailFareNoteList $railFareNoteList = null, ?array $supplierLocator = null)
    {
        $this
            ->setBookingStatus($bookingStatus)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setRailJourney($railJourney)
            ->setRailPricingInfo($railPricingInfo)
            ->setPayment($payment)
            ->setRailTicketInfo($railTicketInfo)
            ->setRailFareNoteList($railFareNoteList)
            ->setSupplierLocator($supplierLocator);
    }
    /**
     * Get BookingStatus value
     * @return string
     */
    public function getBookingStatus(): string
    {
        return $this->BookingStatus;
    }
    /**
     * Set BookingStatus value
     * @param string $bookingStatus
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setBookingStatus(string $bookingStatus): self
    {
        $this->BookingStatus = $bookingStatus;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Air\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\Air\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingTravelerRef $item
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function addToBookingTravelerRef(\Travelport\Air\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailJourney value
     * @return \Travelport\Air\StructType\RailJourney[]
     */
    public function getRailJourney(): ?array
    {
        return $this->RailJourney;
    }
    /**
     * Set RailJourney value
     * @param \Travelport\Air\StructType\RailJourney[] $railJourney
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setRailJourney(?array $railJourney = null): self
    {
        $this->RailJourney = $railJourney;
        
        return $this;
    }
    /**
     * Add item to RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailJourney $item
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function addToRailJourney(\Travelport\Air\StructType\RailJourney $item): self
    {
        $this->RailJourney[] = $item;
        
        return $this;
    }
    /**
     * Get RailPricingInfo value
     * @return \Travelport\Air\StructType\RailPricingInfo[]
     */
    public function getRailPricingInfo(): ?array
    {
        return $this->RailPricingInfo;
    }
    /**
     * Set RailPricingInfo value
     * @param \Travelport\Air\StructType\RailPricingInfo[] $railPricingInfo
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setRailPricingInfo(?array $railPricingInfo = null): self
    {
        $this->RailPricingInfo = $railPricingInfo;
        
        return $this;
    }
    /**
     * Add item to RailPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailPricingInfo $item
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function addToRailPricingInfo(\Travelport\Air\StructType\RailPricingInfo $item): self
    {
        $this->RailPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setPayment(?array $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Payment $item
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function addToPayment(\Travelport\Air\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get RailTicketInfo value
     * @return \Travelport\Air\StructType\RailTicketInfo[]
     */
    public function getRailTicketInfo(): ?array
    {
        return $this->RailTicketInfo;
    }
    /**
     * Set RailTicketInfo value
     * @param \Travelport\Air\StructType\RailTicketInfo[] $railTicketInfo
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setRailTicketInfo(?array $railTicketInfo = null): self
    {
        $this->RailTicketInfo = $railTicketInfo;
        
        return $this;
    }
    /**
     * Add item to RailTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailTicketInfo $item
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function addToRailTicketInfo(\Travelport\Air\StructType\RailTicketInfo $item): self
    {
        $this->RailTicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareNoteList value
     * @return \Travelport\Air\StructType\RailFareNoteList|null
     */
    public function getRailFareNoteList(): ?\Travelport\Air\StructType\RailFareNoteList
    {
        return $this->RailFareNoteList;
    }
    /**
     * Set RailFareNoteList value
     * @param \Travelport\Air\StructType\RailFareNoteList $railFareNoteList
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setRailFareNoteList(?\Travelport\Air\StructType\RailFareNoteList $railFareNoteList = null): self
    {
        $this->RailFareNoteList = $railFareNoteList;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\Air\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\Air\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SupplierLocator $item
     * @return \Travelport\Air\StructType\RailReservation
     */
    public function addToSupplierLocator(\Travelport\Air\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
}
