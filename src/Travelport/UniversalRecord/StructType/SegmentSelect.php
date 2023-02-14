<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentSelect StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used to pass the selected segment.
 * @subpackage Structs
 */
class SegmentSelect extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to AirSegment from an Air Reservation.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The HotelReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Hotel reservation if it needs to be considered as Auxiliary segment
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    protected ?array $HotelReservationRef = null;
    /**
     * The VehicleReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Vehicle reservation if it needs to be considered as Auxiliary segment
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    protected ?array $VehicleReservationRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to PassiveSegment from a Passive Reservation.Specify the passive segment if it needs to be considered as Auxiliary segment
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    protected ?array $PassiveSegmentRef = null;
    /**
     * The AllConfirmedAir
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Confirmed segments including active and passive and set to false to discard confirmed segments
     * @var bool|null
     */
    protected ?bool $AllConfirmedAir = null;
    /**
     * The AllWaitlistedAir
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Waitlisted segments and false to discard all waitlisted segments
     * @var bool|null
     */
    protected ?bool $AllWaitlistedAir = null;
    /**
     * The AllHotel
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Hotel reservations as Auxiliary segment and false to discard all Hotel reservations
     * @var bool|null
     */
    protected ?bool $AllHotel = null;
    /**
     * The AllVehicle
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Vehicle reservations as Auxiliary segment and false to discard all Vehicle reservations
     * @var bool|null
     */
    protected ?bool $AllVehicle = null;
    /**
     * The AllPassive
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Passive segments as Auxiliary segment and false to discard passive segments
     * @var bool|null
     */
    protected ?bool $AllPassive = null;
    /**
     * Constructor method for SegmentSelect
     * @uses SegmentSelect::setAirSegmentRef()
     * @uses SegmentSelect::setHotelReservationRef()
     * @uses SegmentSelect::setVehicleReservationRef()
     * @uses SegmentSelect::setPassiveSegmentRef()
     * @uses SegmentSelect::setAllConfirmedAir()
     * @uses SegmentSelect::setAllWaitlistedAir()
     * @uses SegmentSelect::setAllHotel()
     * @uses SegmentSelect::setAllVehicle()
     * @uses SegmentSelect::setAllPassive()
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $hotelReservationRef
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $vehicleReservationRef
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $passiveSegmentRef
     * @param bool $allConfirmedAir
     * @param bool $allWaitlistedAir
     * @param bool $allHotel
     * @param bool $allVehicle
     * @param bool $allPassive
     */
    public function __construct(?array $airSegmentRef = null, ?array $hotelReservationRef = null, ?array $vehicleReservationRef = null, ?array $passiveSegmentRef = null, ?bool $allConfirmedAir = null, ?bool $allWaitlistedAir = null, ?bool $allHotel = null, ?bool $allVehicle = null, ?bool $allPassive = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setHotelReservationRef($hotelReservationRef)
            ->setVehicleReservationRef($vehicleReservationRef)
            ->setPassiveSegmentRef($passiveSegmentRef)
            ->setAllConfirmedAir($allConfirmedAir)
            ->setAllWaitlistedAir($allWaitlistedAir)
            ->setAllHotel($allHotel)
            ->setAllVehicle($allVehicle)
            ->setAllPassive($allPassive);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentSelectAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$segmentSelectAirSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\TypeSegmentRef) {
                $invalidValues[] = is_object($segmentSelectAirSegmentRefItem) ? get_class($segmentSelectAirSegmentRefItem) : sprintf('%s(%s)', gettype($segmentSelectAirSegmentRefItem), var_export($segmentSelectAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\TypeSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelReservationRef value
     * @return \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    public function getHotelReservationRef(): ?array
    {
        return $this->HotelReservationRef;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelReservationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservationRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelReservationRefForArrayConstraintsFromSetHotelReservationRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentSelectHotelReservationRefItem) {
            // validation for constraint: itemType
            if (!$segmentSelectHotelReservationRefItem instanceof \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef) {
                $invalidValues[] = is_object($segmentSelectHotelReservationRefItem) ? get_class($segmentSelectHotelReservationRefItem) : sprintf('%s(%s)', gettype($segmentSelectHotelReservationRefItem), var_export($segmentSelectHotelReservationRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelReservationRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelReservationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $hotelReservationRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setHotelReservationRef(?array $hotelReservationRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelReservationRefArrayErrorMessage = self::validateHotelReservationRefForArrayConstraintsFromSetHotelReservationRef($hotelReservationRef))) {
            throw new InvalidArgumentException($hotelReservationRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelReservationRef) && count($hotelReservationRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelReservationRef)), __LINE__);
        }
        $this->HotelReservationRef = $hotelReservationRef;
        
        return $this;
    }
    /**
     * Add item to HotelReservationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToHotelReservationRef(\Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef) {
            throw new InvalidArgumentException(sprintf('The HotelReservationRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelReservationRef) && count($this->HotelReservationRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelReservationRef)), __LINE__);
        }
        $this->HotelReservationRef[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleReservationRef value
     * @return \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    public function getVehicleReservationRef(): ?array
    {
        return $this->VehicleReservationRef;
    }
    /**
     * This method is responsible for validating the values passed to the setVehicleReservationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleReservationRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleReservationRefForArrayConstraintsFromSetVehicleReservationRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentSelectVehicleReservationRefItem) {
            // validation for constraint: itemType
            if (!$segmentSelectVehicleReservationRefItem instanceof \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef) {
                $invalidValues[] = is_object($segmentSelectVehicleReservationRefItem) ? get_class($segmentSelectVehicleReservationRefItem) : sprintf('%s(%s)', gettype($segmentSelectVehicleReservationRefItem), var_export($segmentSelectVehicleReservationRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleReservationRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleReservationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $vehicleReservationRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setVehicleReservationRef(?array $vehicleReservationRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleReservationRefArrayErrorMessage = self::validateVehicleReservationRefForArrayConstraintsFromSetVehicleReservationRef($vehicleReservationRef))) {
            throw new InvalidArgumentException($vehicleReservationRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleReservationRef) && count($vehicleReservationRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleReservationRef)), __LINE__);
        }
        $this->VehicleReservationRef = $vehicleReservationRef;
        
        return $this;
    }
    /**
     * Add item to VehicleReservationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToVehicleReservationRef(\Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef) {
            throw new InvalidArgumentException(sprintf('The VehicleReservationRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleReservationRef) && count($this->VehicleReservationRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleReservationRef)), __LINE__);
        }
        $this->VehicleReservationRef[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public function getPassiveSegmentRef(): ?array
    {
        return $this->PassiveSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setPassiveSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveSegmentRefForArrayConstraintsFromSetPassiveSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentSelectPassiveSegmentRefItem) {
            // validation for constraint: itemType
            if (!$segmentSelectPassiveSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\TypeSegmentRef) {
                $invalidValues[] = is_object($segmentSelectPassiveSegmentRefItem) ? get_class($segmentSelectPassiveSegmentRefItem) : sprintf('%s(%s)', gettype($segmentSelectPassiveSegmentRefItem), var_export($segmentSelectPassiveSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassiveSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassiveSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $passiveSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setPassiveSegmentRef(?array $passiveSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveSegmentRefArrayErrorMessage = self::validatePassiveSegmentRefForArrayConstraintsFromSetPassiveSegmentRef($passiveSegmentRef))) {
            throw new InvalidArgumentException($passiveSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passiveSegmentRef) && count($passiveSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passiveSegmentRef)), __LINE__);
        }
        $this->PassiveSegmentRef = $passiveSegmentRef;
        
        return $this;
    }
    /**
     * Add item to PassiveSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToPassiveSegmentRef(\Travelport\UniversalRecord\StructType\TypeSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSegmentRef) {
            throw new InvalidArgumentException(sprintf('The PassiveSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassiveSegmentRef) && count($this->PassiveSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassiveSegmentRef)), __LINE__);
        }
        $this->PassiveSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get AllConfirmedAir value
     * @return bool|null
     */
    public function getAllConfirmedAir(): ?bool
    {
        return $this->AllConfirmedAir;
    }
    /**
     * Set AllConfirmedAir value
     * @param bool $allConfirmedAir
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllConfirmedAir(?bool $allConfirmedAir = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allConfirmedAir) && !is_bool($allConfirmedAir)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allConfirmedAir, true), gettype($allConfirmedAir)), __LINE__);
        }
        $this->AllConfirmedAir = $allConfirmedAir;
        
        return $this;
    }
    /**
     * Get AllWaitlistedAir value
     * @return bool|null
     */
    public function getAllWaitlistedAir(): ?bool
    {
        return $this->AllWaitlistedAir;
    }
    /**
     * Set AllWaitlistedAir value
     * @param bool $allWaitlistedAir
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllWaitlistedAir(?bool $allWaitlistedAir = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allWaitlistedAir) && !is_bool($allWaitlistedAir)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allWaitlistedAir, true), gettype($allWaitlistedAir)), __LINE__);
        }
        $this->AllWaitlistedAir = $allWaitlistedAir;
        
        return $this;
    }
    /**
     * Get AllHotel value
     * @return bool|null
     */
    public function getAllHotel(): ?bool
    {
        return $this->AllHotel;
    }
    /**
     * Set AllHotel value
     * @param bool $allHotel
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllHotel(?bool $allHotel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allHotel) && !is_bool($allHotel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allHotel, true), gettype($allHotel)), __LINE__);
        }
        $this->AllHotel = $allHotel;
        
        return $this;
    }
    /**
     * Get AllVehicle value
     * @return bool|null
     */
    public function getAllVehicle(): ?bool
    {
        return $this->AllVehicle;
    }
    /**
     * Set AllVehicle value
     * @param bool $allVehicle
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllVehicle(?bool $allVehicle = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allVehicle) && !is_bool($allVehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allVehicle, true), gettype($allVehicle)), __LINE__);
        }
        $this->AllVehicle = $allVehicle;
        
        return $this;
    }
    /**
     * Get AllPassive value
     * @return bool|null
     */
    public function getAllPassive(): ?bool
    {
        return $this->AllPassive;
    }
    /**
     * Set AllPassive value
     * @param bool $allPassive
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllPassive(?bool $allPassive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allPassive) && !is_bool($allPassive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allPassive, true), gettype($allPassive)), __LINE__);
        }
        $this->AllPassive = $allPassive;
        
        return $this;
    }
}
