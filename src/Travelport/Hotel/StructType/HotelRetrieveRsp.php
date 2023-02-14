<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRetrieveRsp StructType
 * @subpackage Structs
 */
class HotelRetrieveRsp extends BaseRsp
{
    /**
     * The HotelReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelReservation
     * @var \Travelport\Hotel\StructType\HotelReservation[]
     */
    protected ?array $HotelReservation = null;
    /**
     * Constructor method for HotelRetrieveRsp
     * @uses HotelRetrieveRsp::setHotelReservation()
     * @param \Travelport\Hotel\StructType\HotelReservation[] $hotelReservation
     */
    public function __construct(?array $hotelReservation = null)
    {
        $this
            ->setHotelReservation($hotelReservation);
    }
    /**
     * Get HotelReservation value
     * @return \Travelport\Hotel\StructType\HotelReservation[]
     */
    public function getHotelReservation(): ?array
    {
        return $this->HotelReservation;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelReservationForArrayConstraintsFromSetHotelReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRetrieveRspHotelReservationItem) {
            // validation for constraint: itemType
            if (!$hotelRetrieveRspHotelReservationItem instanceof \Travelport\Hotel\StructType\HotelReservation) {
                $invalidValues[] = is_object($hotelRetrieveRspHotelReservationItem) ? get_class($hotelRetrieveRspHotelReservationItem) : sprintf('%s(%s)', gettype($hotelRetrieveRspHotelReservationItem), var_export($hotelRetrieveRspHotelReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelReservation property can only contain items of type \Travelport\Hotel\StructType\HotelReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelReservation[] $hotelReservation
     * @return \Travelport\Hotel\StructType\HotelRetrieveRsp
     */
    public function setHotelReservation(?array $hotelReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelReservationArrayErrorMessage = self::validateHotelReservationForArrayConstraintsFromSetHotelReservation($hotelReservation))) {
            throw new InvalidArgumentException($hotelReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelReservation) && count($hotelReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelReservation)), __LINE__);
        }
        $this->HotelReservation = $hotelReservation;
        
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelReservation $item
     * @return \Travelport\Hotel\StructType\HotelRetrieveRsp
     */
    public function addToHotelReservation(\Travelport\Hotel\StructType\HotelReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelReservation) {
            throw new InvalidArgumentException(sprintf('The HotelReservation property can only contain items of type \Travelport\Hotel\StructType\HotelReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelReservation) && count($this->HotelReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelReservation)), __LINE__);
        }
        $this->HotelReservation[] = $item;
        
        return $this;
    }
}
