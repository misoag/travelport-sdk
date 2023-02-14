<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeGuestRoomInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference for the Booking Traveler. Used for Hotel Booking only. The value is arbitrary. | Information about guest to book.
 * @subpackage Structs
 */
class TypeGuestRoomInformation extends AbstractStructBase
{
    /**
     * The Adults
     * Meta information extracted from the WSDL
     * - documentation: The number of adult guests per room. Maximum number of adults may vary by supplier or aggregator.
     * @var int|null
     */
    protected ?int $Adults = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The Child
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \StructType\Child[]
     */
    protected ?array $Child = null;
    /**
     * Constructor method for typeGuestRoomInformation
     * @uses TypeGuestRoomInformation::setAdults()
     * @uses TypeGuestRoomInformation::setBookingTravelerRef()
     * @uses TypeGuestRoomInformation::setChild()
     * @param int $adults
     * @param \StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \StructType\Child[] $child
     */
    public function __construct(?int $adults = null, ?array $bookingTravelerRef = null, ?array $child = null)
    {
        $this
            ->setAdults($adults)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setChild($child);
    }
    /**
     * Get Adults value
     * @return int|null
     */
    public function getAdults(): ?int
    {
        return $this->Adults;
    }
    /**
     * Set Adults value
     * @param int $adults
     * @return \StructType\TypeGuestRoomInformation
     */
    public function setAdults(?int $adults = null): self
    {
        // validation for constraint: int
        if (!is_null($adults) && !(is_int($adults) || ctype_digit($adults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adults, true), gettype($adults)), __LINE__);
        }
        $this->Adults = $adults;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeGuestRoomInformationBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$typeGuestRoomInformationBookingTravelerRefItem instanceof \StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($typeGuestRoomInformationBookingTravelerRefItem) ? get_class($typeGuestRoomInformationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($typeGuestRoomInformationBookingTravelerRefItem), var_export($typeGuestRoomInformationBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \StructType\TypeGuestRoomInformation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
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
     * @param \StructType\BookingTravelerRef $item
     * @return \StructType\TypeGuestRoomInformation
     */
    public function addToBookingTravelerRef(\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get Child value
     * @return \StructType\Child[]
     */
    public function getChild(): ?array
    {
        return $this->Child;
    }
    /**
     * This method is responsible for validating the values passed to the setChild method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChild method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildForArrayConstraintsFromSetChild(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeGuestRoomInformationChildItem) {
            // validation for constraint: itemType
            if (!$typeGuestRoomInformationChildItem instanceof \StructType\Child) {
                $invalidValues[] = is_object($typeGuestRoomInformationChildItem) ? get_class($typeGuestRoomInformationChildItem) : sprintf('%s(%s)', gettype($typeGuestRoomInformationChildItem), var_export($typeGuestRoomInformationChildItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Child property can only contain items of type \StructType\Child, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Child value
     * @throws InvalidArgumentException
     * @param \StructType\Child[] $child
     * @return \StructType\TypeGuestRoomInformation
     */
    public function setChild(?array $child = null): self
    {
        // validation for constraint: array
        if ('' !== ($childArrayErrorMessage = self::validateChildForArrayConstraintsFromSetChild($child))) {
            throw new InvalidArgumentException($childArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($child) && count($child) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($child)), __LINE__);
        }
        $this->Child = $child;
        
        return $this;
    }
    /**
     * Add item to Child value
     * @throws InvalidArgumentException
     * @param \StructType\Child $item
     * @return \StructType\TypeGuestRoomInformation
     */
    public function addToChild(\StructType\Child $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Child) {
            throw new InvalidArgumentException(sprintf('The Child property can only contain items of type \StructType\Child, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->Child) && count($this->Child) >= 6) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->Child)), __LINE__);
        }
        $this->Child[] = $item;
        
        return $this;
    }
}
