<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailUpdate StructType
 * @subpackage Structs
 */
class RailUpdate extends AbstractStructBase
{
    /**
     * The ReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $ReservationLocatorCode;
    /**
     * The BookingAction
     * @var \Travelport\UniversalRecord\StructType\BookingAction|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingAction $BookingAction = null;
    /**
     * Constructor method for RailUpdate
     * @uses RailUpdate::setReservationLocatorCode()
     * @uses RailUpdate::setBookingAction()
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\BookingAction $bookingAction
     */
    public function __construct(string $reservationLocatorCode, ?\Travelport\UniversalRecord\StructType\BookingAction $bookingAction = null)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setBookingAction($bookingAction);
    }
    /**
     * Get ReservationLocatorCode value
     * @return string
     */
    public function getReservationLocatorCode(): string
    {
        return $this->ReservationLocatorCode;
    }
    /**
     * Set ReservationLocatorCode value
     * @param string $reservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\RailUpdate
     */
    public function setReservationLocatorCode(string $reservationLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($reservationLocatorCode) && !is_string($reservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorCode, true), gettype($reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
        return $this;
    }
    /**
     * Get BookingAction value
     * @return \Travelport\UniversalRecord\StructType\BookingAction|null
     */
    public function getBookingAction(): ?\Travelport\UniversalRecord\StructType\BookingAction
    {
        return $this->BookingAction;
    }
    /**
     * Set BookingAction value
     * @param \Travelport\UniversalRecord\StructType\BookingAction $bookingAction
     * @return \Travelport\UniversalRecord\StructType\RailUpdate
     */
    public function setBookingAction(?\Travelport\UniversalRecord\StructType\BookingAction $bookingAction = null): self
    {
        $this->BookingAction = $bookingAction;
        
        return $this;
    }
}
