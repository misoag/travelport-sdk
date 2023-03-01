<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailCreateReservationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates a rail reservation with the host.
 * @subpackage Structs
 */
class RailCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{
    /**
     * The BookingActionType
     * Meta information extracted from the WSDL
     * - documentation: the action associated with this booking. Four options are: Final (used to book with no ticket issuance) FinalTicket (used to book and issue ticket, default if FOP is included) Ticket (used to ticket an existing booking) Initiate
     * (used for a provisional booking, default if no FOP is included)
     * - use: required
     * @var string
     */
    public string $BookingActionType;
    /**
     * The RailPricingSolution
     * Meta information extracted from the WSDL
     * - ref: rail:RailPricingSolution
     * @var \Travelport\UniversalRecord\StructType\RailPricingSolution|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailPricingSolution $RailPricingSolution = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    public ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * The RailFareNoteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailFareNoteList
     * @var \Travelport\UniversalRecord\StructType\RailFareNoteList|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailFareNoteList $RailFareNoteList = null;
    /**
     * The HostTokenList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostTokenList
     * @var \Travelport\UniversalRecord\StructType\HostTokenList|null
     */
    public ?\Travelport\UniversalRecord\StructType\HostTokenList $HostTokenList = null;
    /**
     * The RailAutoSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailAutoSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment[]
     */
    public ?array $RailAutoSeatAssignment = null;
    /**
     * The RailSpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailSpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment[]
     */
    public ?array $RailSpecificSeatAssignment = null;
    /**
     * Constructor method for RailCreateReservationReq
     * @uses RailCreateReservationReq::setBookingActionType()
     * @uses RailCreateReservationReq::setRailPricingSolution()
     * @uses RailCreateReservationReq::setPayment()
     * @uses RailCreateReservationReq::setRailFareNoteList()
     * @uses RailCreateReservationReq::setHostTokenList()
     * @uses RailCreateReservationReq::setRailAutoSeatAssignment()
     * @uses RailCreateReservationReq::setRailSpecificSeatAssignment()
     * @param string $bookingActionType
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution $railPricingSolution
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @param \Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList
     * @param \Travelport\UniversalRecord\StructType\HostTokenList $hostTokenList
     * @param \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment[] $railAutoSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment[] $railSpecificSeatAssignment
     */
    public function __construct(string $bookingActionType, ?\Travelport\UniversalRecord\StructType\RailPricingSolution $railPricingSolution = null, ?\Travelport\UniversalRecord\StructType\Payment $payment = null, ?\Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList = null, ?\Travelport\UniversalRecord\StructType\HostTokenList $hostTokenList = null, ?array $railAutoSeatAssignment = null, ?array $railSpecificSeatAssignment = null)
    {
        $this
            ->setBookingActionType($bookingActionType)
            ->setRailPricingSolution($railPricingSolution)
            ->setPayment($payment)
            ->setRailFareNoteList($railFareNoteList)
            ->setHostTokenList($hostTokenList)
            ->setRailAutoSeatAssignment($railAutoSeatAssignment)
            ->setRailSpecificSeatAssignment($railSpecificSeatAssignment);
    }
    /**
     * Get BookingActionType value
     * @return string
     */
    public function getBookingActionType(): string
    {
        return $this->BookingActionType;
    }
    /**
     * Set BookingActionType value
     * @param string $bookingActionType
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setBookingActionType(string $bookingActionType): self
    {
        $this->BookingActionType = $bookingActionType;
        
        return $this;
    }
    /**
     * Get RailPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\RailPricingSolution|null
     */
    public function getRailPricingSolution(): ?\Travelport\UniversalRecord\StructType\RailPricingSolution
    {
        return $this->RailPricingSolution;
    }
    /**
     * Set RailPricingSolution value
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution $railPricingSolution
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setRailPricingSolution(?\Travelport\UniversalRecord\StructType\RailPricingSolution $railPricingSolution = null): self
    {
        $this->RailPricingSolution = $railPricingSolution;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\UniversalRecord\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setPayment(?\Travelport\UniversalRecord\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Get RailFareNoteList value
     * @return \Travelport\UniversalRecord\StructType\RailFareNoteList|null
     */
    public function getRailFareNoteList(): ?\Travelport\UniversalRecord\StructType\RailFareNoteList
    {
        return $this->RailFareNoteList;
    }
    /**
     * Set RailFareNoteList value
     * @param \Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setRailFareNoteList(?\Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList = null): self
    {
        $this->RailFareNoteList = $railFareNoteList;
        
        return $this;
    }
    /**
     * Get HostTokenList value
     * @return \Travelport\UniversalRecord\StructType\HostTokenList|null
     */
    public function getHostTokenList(): ?\Travelport\UniversalRecord\StructType\HostTokenList
    {
        return $this->HostTokenList;
    }
    /**
     * Set HostTokenList value
     * @param \Travelport\UniversalRecord\StructType\HostTokenList $hostTokenList
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setHostTokenList(?\Travelport\UniversalRecord\StructType\HostTokenList $hostTokenList = null): self
    {
        $this->HostTokenList = $hostTokenList;
        
        return $this;
    }
    /**
     * Get RailAutoSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment[]
     */
    public function getRailAutoSeatAssignment(): ?array
    {
        return $this->RailAutoSeatAssignment;
    }
    /**
     * Set RailAutoSeatAssignment value
     * @param \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment[] $railAutoSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setRailAutoSeatAssignment(?array $railAutoSeatAssignment = null): self
    {
        $this->RailAutoSeatAssignment = $railAutoSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to RailAutoSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function addToRailAutoSeatAssignment(\Travelport\UniversalRecord\StructType\RailAutoSeatAssignment $item): self
    {
        $this->RailAutoSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get RailSpecificSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment[]
     */
    public function getRailSpecificSeatAssignment(): ?array
    {
        return $this->RailSpecificSeatAssignment;
    }
    /**
     * Set RailSpecificSeatAssignment value
     * @param \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment[] $railSpecificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setRailSpecificSeatAssignment(?array $railSpecificSeatAssignment = null): self
    {
        $this->RailSpecificSeatAssignment = $railSpecificSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to RailSpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function addToRailSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment $item): self
    {
        $this->RailSpecificSeatAssignment[] = $item;
        
        return $this;
    }
}
