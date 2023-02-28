<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $BookingActionType;
    /**
     * The RailPricingSolution
     * Meta information extracted from the WSDL
     * - ref: rail:RailPricingSolution
     * @var \Travelport\UniversalRecord\StructType\RailPricingSolution|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailPricingSolution $RailPricingSolution = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * The RailFareNoteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailFareNoteList
     * @var \Travelport\UniversalRecord\StructType\RailFareNoteList|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailFareNoteList $RailFareNoteList = null;
    /**
     * The HostTokenList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostTokenList
     * @var \Travelport\UniversalRecord\StructType\HostTokenList|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HostTokenList $HostTokenList = null;
    /**
     * The RailAutoSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailAutoSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment[]
     */
    protected ?array $RailAutoSeatAssignment = null;
    /**
     * The RailSpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailSpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment[]
     */
    protected ?array $RailSpecificSeatAssignment = null;
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
        // validation for constraint: string
        if (!is_null($bookingActionType) && !is_string($bookingActionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingActionType, true), gettype($bookingActionType)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRailAutoSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailAutoSeatAssignment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailAutoSeatAssignmentForArrayConstraintFromSetRailAutoSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railCreateReservationReqRailAutoSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$railCreateReservationReqRailAutoSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment) {
                $invalidValues[] = is_object($railCreateReservationReqRailAutoSeatAssignmentItem) ? get_class($railCreateReservationReqRailAutoSeatAssignmentItem) : sprintf('%s(%s)', gettype($railCreateReservationReqRailAutoSeatAssignmentItem), var_export($railCreateReservationReqRailAutoSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailAutoSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailAutoSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment[] $railAutoSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setRailAutoSeatAssignment(?array $railAutoSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($railAutoSeatAssignmentArrayErrorMessage = self::validateRailAutoSeatAssignmentForArrayConstraintFromSetRailAutoSeatAssignment($railAutoSeatAssignment))) {
            throw new InvalidArgumentException($railAutoSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railAutoSeatAssignment) && count($railAutoSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railAutoSeatAssignment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The RailAutoSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailAutoSeatAssignment) && count($this->RailAutoSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailAutoSeatAssignment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRailSpecificSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSpecificSeatAssignment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSpecificSeatAssignmentForArrayConstraintFromSetRailSpecificSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railCreateReservationReqRailSpecificSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$railCreateReservationReqRailSpecificSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment) {
                $invalidValues[] = is_object($railCreateReservationReqRailSpecificSeatAssignmentItem) ? get_class($railCreateReservationReqRailSpecificSeatAssignmentItem) : sprintf('%s(%s)', gettype($railCreateReservationReqRailSpecificSeatAssignmentItem), var_export($railCreateReservationReqRailSpecificSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailSpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment[] $railSpecificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationReq
     */
    public function setRailSpecificSeatAssignment(?array $railSpecificSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSpecificSeatAssignmentArrayErrorMessage = self::validateRailSpecificSeatAssignmentForArrayConstraintFromSetRailSpecificSeatAssignment($railSpecificSeatAssignment))) {
            throw new InvalidArgumentException($railSpecificSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSpecificSeatAssignment) && count($railSpecificSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSpecificSeatAssignment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The RailSpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSpecificSeatAssignment) && count($this->RailSpecificSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSpecificSeatAssignment)), __LINE__);
        }
        $this->RailSpecificSeatAssignment[] = $item;
        
        return $this;
    }
}
