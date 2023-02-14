<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationName StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used if the reservation name is other than booking travelers in the PNR | Container to represent reservation name as appears in GDS booking
 * @subpackage Structs
 */
class ReservationName extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - choice: BookingTravelerRef | NameOverride
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: BookingTravelerRef
     * @var \StructType\BookingTravelerRef|null
     */
    protected ?\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * The NameOverride
     * Meta information extracted from the WSDL
     * - choice: BookingTravelerRef | NameOverride
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: NameOverride
     * @var \StructType\NameOverride|null
     */
    protected ?\StructType\NameOverride $NameOverride = null;
    /**
     * Constructor method for ReservationName
     * @uses ReservationName::setBookingTravelerRef()
     * @uses ReservationName::setNameOverride()
     * @param \StructType\BookingTravelerRef $bookingTravelerRef
     * @param \StructType\NameOverride $nameOverride
     */
    public function __construct(?\StructType\BookingTravelerRef $bookingTravelerRef = null, ?\StructType\NameOverride $nameOverride = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setNameOverride($nameOverride);
    }
    /**
     * Get BookingTravelerRef value
     * @return \StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\StructType\BookingTravelerRef
    {
        return isset($this->BookingTravelerRef) ? $this->BookingTravelerRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingTravelerRefForChoiceConstraintsFromSetBookingTravelerRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'NameOverride',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BookingTravelerRef can\'t be set as the property %s is already set. Only one property must be set among these properties: BookingTravelerRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\BookingTravelerRef $bookingTravelerRef
     * @return \StructType\ReservationName
     */
    public function setBookingTravelerRef(?\StructType\BookingTravelerRef $bookingTravelerRef = null): self
    {
        // validation for constraint: choice(BookingTravelerRef, NameOverride)
        if ('' !== ($bookingTravelerRefChoiceErrorMessage = self::validateBookingTravelerRefForChoiceConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($bookingTravelerRef) || (is_array($bookingTravelerRef) && empty($bookingTravelerRef))) {
            unset($this->BookingTravelerRef);
        } else {
            $this->BookingTravelerRef = $bookingTravelerRef;
        }
        
        return $this;
    }
    /**
     * Get NameOverride value
     * @return \StructType\NameOverride|null
     */
    public function getNameOverride(): ?\StructType\NameOverride
    {
        return isset($this->NameOverride) ? $this->NameOverride : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNameOverride method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameOverride method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameOverrideForChoiceConstraintsFromSetNameOverride($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'BookingTravelerRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property NameOverride can\'t be set as the property %s is already set. Only one property must be set among these properties: NameOverride, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set NameOverride value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\NameOverride $nameOverride
     * @return \StructType\ReservationName
     */
    public function setNameOverride(?\StructType\NameOverride $nameOverride = null): self
    {
        // validation for constraint: choice(BookingTravelerRef, NameOverride)
        if ('' !== ($nameOverrideChoiceErrorMessage = self::validateNameOverrideForChoiceConstraintsFromSetNameOverride($nameOverride))) {
            throw new InvalidArgumentException($nameOverrideChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameOverride) || (is_array($nameOverride) && empty($nameOverride))) {
            unset($this->NameOverride);
        } else {
            $this->NameOverride = $nameOverride;
        }
        
        return $this;
    }
}
