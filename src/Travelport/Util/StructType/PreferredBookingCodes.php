<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredBookingCodes StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all preferred booking codes
 * @subpackage Structs
 */
class PreferredBookingCodes extends AbstractStructBase
{
    /**
     * The BookingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: BookingCode
     * @var \Travelport\Util\StructType\BookingCode[]
     */
    protected ?array $BookingCode = null;
    /**
     * Constructor method for PreferredBookingCodes
     * @uses PreferredBookingCodes::setBookingCode()
     * @param \Travelport\Util\StructType\BookingCode[] $bookingCode
     */
    public function __construct(?array $bookingCode = null)
    {
        $this
            ->setBookingCode($bookingCode);
    }
    /**
     * Get BookingCode value
     * @return \Travelport\Util\StructType\BookingCode[]
     */
    public function getBookingCode(): ?array
    {
        return $this->BookingCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingCodeForArrayConstraintFromSetBookingCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $preferredBookingCodesBookingCodeItem) {
            // validation for constraint: itemType
            if (!$preferredBookingCodesBookingCodeItem instanceof \Travelport\Util\StructType\BookingCode) {
                $invalidValues[] = is_object($preferredBookingCodesBookingCodeItem) ? get_class($preferredBookingCodesBookingCodeItem) : sprintf('%s(%s)', gettype($preferredBookingCodesBookingCodeItem), var_export($preferredBookingCodesBookingCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingCode property can only contain items of type \Travelport\Util\StructType\BookingCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingCode[] $bookingCode
     * @return \Travelport\Util\StructType\PreferredBookingCodes
     */
    public function setBookingCode(?array $bookingCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingCodeArrayErrorMessage = self::validateBookingCodeForArrayConstraintFromSetBookingCode($bookingCode))) {
            throw new InvalidArgumentException($bookingCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingCode) && count($bookingCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Add item to BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingCode $item
     * @return \Travelport\Util\StructType\PreferredBookingCodes
     */
    public function addToBookingCode(\Travelport\Util\StructType\BookingCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingCode) {
            throw new InvalidArgumentException(sprintf('The BookingCode property can only contain items of type \Travelport\Util\StructType\BookingCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingCode) && count($this->BookingCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingCode)), __LINE__);
        }
        $this->BookingCode[] = $item;
        
        return $this;
    }
}
