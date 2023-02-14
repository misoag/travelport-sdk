<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalReservationPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: The total price for the entire stay, including fees, for all rooms in the booking.
 * - minOccurs: 0
 * @subpackage Structs
 */
class TotalReservationPrice extends AbstractStructBase
{
    /**
     * The RoomRateDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \StructType\TypeHotelRateDescription[]
     */
    protected ?array $RoomRateDescription = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The amount of the total price, including fees for all rooms in the booking. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The ApproxTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The approximate amount of the total hotel price, including fees, in another currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproxTotalPrice = null;
    /**
     * Constructor method for TotalReservationPrice
     * @uses TotalReservationPrice::setRoomRateDescription()
     * @uses TotalReservationPrice::setTotalPrice()
     * @uses TotalReservationPrice::setApproxTotalPrice()
     * @param \StructType\TypeHotelRateDescription[] $roomRateDescription
     * @param string $totalPrice
     * @param string $approxTotalPrice
     */
    public function __construct(?array $roomRateDescription = null, ?string $totalPrice = null, ?string $approxTotalPrice = null)
    {
        $this
            ->setRoomRateDescription($roomRateDescription)
            ->setTotalPrice($totalPrice)
            ->setApproxTotalPrice($approxTotalPrice);
    }
    /**
     * Get RoomRateDescription value
     * @return \StructType\TypeHotelRateDescription[]
     */
    public function getRoomRateDescription(): ?array
    {
        return $this->RoomRateDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setRoomRateDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomRateDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomRateDescriptionForArrayConstraintsFromSetRoomRateDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $totalReservationPriceRoomRateDescriptionItem) {
            // validation for constraint: itemType
            if (!$totalReservationPriceRoomRateDescriptionItem instanceof \StructType\TypeHotelRateDescription) {
                $invalidValues[] = is_object($totalReservationPriceRoomRateDescriptionItem) ? get_class($totalReservationPriceRoomRateDescriptionItem) : sprintf('%s(%s)', gettype($totalReservationPriceRoomRateDescriptionItem), var_export($totalReservationPriceRoomRateDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RoomRateDescription property can only contain items of type \StructType\TypeHotelRateDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RoomRateDescription value
     * @throws InvalidArgumentException
     * @param \StructType\TypeHotelRateDescription[] $roomRateDescription
     * @return \StructType\TotalReservationPrice
     */
    public function setRoomRateDescription(?array $roomRateDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomRateDescriptionArrayErrorMessage = self::validateRoomRateDescriptionForArrayConstraintsFromSetRoomRateDescription($roomRateDescription))) {
            throw new InvalidArgumentException($roomRateDescriptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($roomRateDescription) && count($roomRateDescription) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($roomRateDescription)), __LINE__);
        }
        $this->RoomRateDescription = $roomRateDescription;
        
        return $this;
    }
    /**
     * Add item to RoomRateDescription value
     * @throws InvalidArgumentException
     * @param \StructType\TypeHotelRateDescription $item
     * @return \StructType\TotalReservationPrice
     */
    public function addToRoomRateDescription(\StructType\TypeHotelRateDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TypeHotelRateDescription) {
            throw new InvalidArgumentException(sprintf('The RoomRateDescription property can only contain items of type \StructType\TypeHotelRateDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->RoomRateDescription) && count($this->RoomRateDescription) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->RoomRateDescription)), __LINE__);
        }
        $this->RoomRateDescription[] = $item;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \StructType\TotalReservationPrice
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get ApproxTotalPrice value
     * @return string|null
     */
    public function getApproxTotalPrice(): ?string
    {
        return $this->ApproxTotalPrice;
    }
    /**
     * Set ApproxTotalPrice value
     * @param string $approxTotalPrice
     * @return \StructType\TotalReservationPrice
     */
    public function setApproxTotalPrice(?string $approxTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approxTotalPrice) && !is_string($approxTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approxTotalPrice, true), gettype($approxTotalPrice)), __LINE__);
        }
        $this->ApproxTotalPrice = $approxTotalPrice;
        
        return $this;
    }
}
