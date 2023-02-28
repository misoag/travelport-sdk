<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $BookingStatus;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The RailJourney
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailJourney
     * @var \Travelport\UniversalRecord\StructType\RailJourney[]
     */
    protected ?array $RailJourney = null;
    /**
     * The RailPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailPricingInfo
     * @var \Travelport\UniversalRecord\StructType\RailPricingInfo[]
     */
    protected ?array $RailPricingInfo = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment[]
     */
    protected ?array $Payment = null;
    /**
     * The RailTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailTicketInfo
     * @var \Travelport\UniversalRecord\StructType\RailTicketInfo[]
     */
    protected ?array $RailTicketInfo = null;
    /**
     * The RailFareNoteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailFareNoteList
     * @var \Travelport\UniversalRecord\StructType\RailFareNoteList|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailFareNoteList $RailFareNoteList = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    protected ?array $SupplierLocator = null;
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
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\RailJourney[] $railJourney
     * @param \Travelport\UniversalRecord\StructType\RailPricingInfo[] $railPricingInfo
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @param \Travelport\UniversalRecord\StructType\RailTicketInfo[] $railTicketInfo
     * @param \Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     */
    public function __construct(string $bookingStatus, ?array $bookingTravelerRef = null, ?array $railJourney = null, ?array $railPricingInfo = null, ?array $payment = null, ?array $railTicketInfo = null, ?\Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList = null, ?array $supplierLocator = null)
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
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setBookingStatus(string $bookingStatus): self
    {
        // validation for constraint: string
        if (!is_null($bookingStatus) && !is_string($bookingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingStatus, true), gettype($bookingStatus)), __LINE__);
        }
        $this->BookingStatus = $bookingStatus;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railReservationBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$railReservationBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($railReservationBookingTravelerRefItem) ? get_class($railReservationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($railReservationBookingTravelerRefItem), var_export($railReservationBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailJourney value
     * @return \Travelport\UniversalRecord\StructType\RailJourney[]
     */
    public function getRailJourney(): ?array
    {
        return $this->RailJourney;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourney method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailJourneyForArrayConstraintFromSetRailJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railReservationRailJourneyItem) {
            // validation for constraint: itemType
            if (!$railReservationRailJourneyItem instanceof \Travelport\UniversalRecord\StructType\RailJourney) {
                $invalidValues[] = is_object($railReservationRailJourneyItem) ? get_class($railReservationRailJourneyItem) : sprintf('%s(%s)', gettype($railReservationRailJourneyItem), var_export($railReservationRailJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailJourney property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourney, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourney[] $railJourney
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setRailJourney(?array $railJourney = null): self
    {
        // validation for constraint: array
        if ('' !== ($railJourneyArrayErrorMessage = self::validateRailJourneyForArrayConstraintFromSetRailJourney($railJourney))) {
            throw new InvalidArgumentException($railJourneyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railJourney) && count($railJourney) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railJourney)), __LINE__);
        }
        $this->RailJourney = $railJourney;
        
        return $this;
    }
    /**
     * Add item to RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourney $item
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function addToRailJourney(\Travelport\UniversalRecord\StructType\RailJourney $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailJourney) {
            throw new InvalidArgumentException(sprintf('The RailJourney property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourney, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailJourney) && count($this->RailJourney) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailJourney)), __LINE__);
        }
        $this->RailJourney[] = $item;
        
        return $this;
    }
    /**
     * Get RailPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo[]
     */
    public function getRailPricingInfo(): ?array
    {
        return $this->RailPricingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailPricingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailPricingInfoForArrayConstraintFromSetRailPricingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railReservationRailPricingInfoItem) {
            // validation for constraint: itemType
            if (!$railReservationRailPricingInfoItem instanceof \Travelport\UniversalRecord\StructType\RailPricingInfo) {
                $invalidValues[] = is_object($railReservationRailPricingInfoItem) ? get_class($railReservationRailPricingInfoItem) : sprintf('%s(%s)', gettype($railReservationRailPricingInfoItem), var_export($railReservationRailPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingInfo[] $railPricingInfo
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setRailPricingInfo(?array $railPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railPricingInfoArrayErrorMessage = self::validateRailPricingInfoForArrayConstraintFromSetRailPricingInfo($railPricingInfo))) {
            throw new InvalidArgumentException($railPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railPricingInfo) && count($railPricingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railPricingInfo)), __LINE__);
        }
        $this->RailPricingInfo = $railPricingInfo;
        
        return $this;
    }
    /**
     * Add item to RailPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function addToRailPricingInfo(\Travelport\UniversalRecord\StructType\RailPricingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailPricingInfo) {
            throw new InvalidArgumentException(sprintf('The RailPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailPricingInfo) && count($this->RailPricingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailPricingInfo)), __LINE__);
        }
        $this->RailPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railReservationPaymentItem) {
            // validation for constraint: itemType
            if (!$railReservationPaymentItem instanceof \Travelport\UniversalRecord\StructType\Payment) {
                $invalidValues[] = is_object($railReservationPaymentItem) ? get_class($railReservationPaymentItem) : sprintf('%s(%s)', gettype($railReservationPaymentItem), var_export($railReservationPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($payment) && count($payment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($payment)), __LINE__);
        }
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment $item
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Payment) && count($this->Payment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Payment)), __LINE__);
        }
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get RailTicketInfo value
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo[]
     */
    public function getRailTicketInfo(): ?array
    {
        return $this->RailTicketInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailTicketInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailTicketInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailTicketInfoForArrayConstraintFromSetRailTicketInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railReservationRailTicketInfoItem) {
            // validation for constraint: itemType
            if (!$railReservationRailTicketInfoItem instanceof \Travelport\UniversalRecord\StructType\RailTicketInfo) {
                $invalidValues[] = is_object($railReservationRailTicketInfoItem) ? get_class($railReservationRailTicketInfoItem) : sprintf('%s(%s)', gettype($railReservationRailTicketInfoItem), var_export($railReservationRailTicketInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailTicketInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailTicketInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailTicketInfo[] $railTicketInfo
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setRailTicketInfo(?array $railTicketInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railTicketInfoArrayErrorMessage = self::validateRailTicketInfoForArrayConstraintFromSetRailTicketInfo($railTicketInfo))) {
            throw new InvalidArgumentException($railTicketInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railTicketInfo) && count($railTicketInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railTicketInfo)), __LINE__);
        }
        $this->RailTicketInfo = $railTicketInfo;
        
        return $this;
    }
    /**
     * Add item to RailTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailTicketInfo $item
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function addToRailTicketInfo(\Travelport\UniversalRecord\StructType\RailTicketInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailTicketInfo) {
            throw new InvalidArgumentException(sprintf('The RailTicketInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailTicketInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailTicketInfo) && count($this->RailTicketInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailTicketInfo)), __LINE__);
        }
        $this->RailTicketInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setRailFareNoteList(?\Travelport\UniversalRecord\StructType\RailFareNoteList $railFareNoteList = null): self
    {
        $this->RailFareNoteList = $railFareNoteList;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierLocatorForArrayConstraintFromSetSupplierLocator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railReservationSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$railReservationSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($railReservationSupplierLocatorItem) ? get_class($railReservationSupplierLocatorItem) : sprintf('%s(%s)', gettype($railReservationSupplierLocatorItem), var_export($railReservationSupplierLocatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierLocatorArrayErrorMessage = self::validateSupplierLocatorForArrayConstraintFromSetSupplierLocator($supplierLocator))) {
            throw new InvalidArgumentException($supplierLocatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($supplierLocator) && count($supplierLocator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($supplierLocator)), __LINE__);
        }
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\RailReservation
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
            throw new InvalidArgumentException(sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SupplierLocator)), __LINE__);
        }
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
}
