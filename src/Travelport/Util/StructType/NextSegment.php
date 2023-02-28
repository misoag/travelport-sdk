<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NextSegment StructType
 * @subpackage Structs
 */
class NextSegment extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to AirSegment from an Air Reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeSegmentRef|null
     */
    protected ?\Travelport\Util\StructType\TypeSegmentRef $AirSegmentRef = null;
    /**
     * The HotelReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Hotel reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeNonAirReservationRef|null
     */
    protected ?\Travelport\Util\StructType\TypeNonAirReservationRef $HotelReservationRef = null;
    /**
     * The VehicleReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Vehicle reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeNonAirReservationRef|null
     */
    protected ?\Travelport\Util\StructType\TypeNonAirReservationRef $VehicleReservationRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to PassiveSegment from a Passive Reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeSegmentRef|null
     */
    protected ?\Travelport\Util\StructType\TypeSegmentRef $PassiveSegmentRef = null;
    /**
     * Constructor method for NextSegment
     * @uses NextSegment::setAirSegmentRef()
     * @uses NextSegment::setHotelReservationRef()
     * @uses NextSegment::setVehicleReservationRef()
     * @uses NextSegment::setPassiveSegmentRef()
     * @param \Travelport\Util\StructType\TypeSegmentRef $airSegmentRef
     * @param \Travelport\Util\StructType\TypeNonAirReservationRef $hotelReservationRef
     * @param \Travelport\Util\StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @param \Travelport\Util\StructType\TypeSegmentRef $passiveSegmentRef
     */
    public function __construct(?\Travelport\Util\StructType\TypeSegmentRef $airSegmentRef = null, ?\Travelport\Util\StructType\TypeNonAirReservationRef $hotelReservationRef = null, ?\Travelport\Util\StructType\TypeNonAirReservationRef $vehicleReservationRef = null, ?\Travelport\Util\StructType\TypeSegmentRef $passiveSegmentRef = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setHotelReservationRef($hotelReservationRef)
            ->setVehicleReservationRef($vehicleReservationRef)
            ->setPassiveSegmentRef($passiveSegmentRef);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Util\StructType\TypeSegmentRef|null
     */
    public function getAirSegmentRef(): ?\Travelport\Util\StructType\TypeSegmentRef
    {
        return $this->AirSegmentRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirSegmentRefForChoiceConstraintFromSetAirSegmentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelReservationRef',
            'VehicleReservationRef',
            'PassiveSegmentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegmentRef can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegmentRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSegmentRef $airSegmentRef
     * @return \Travelport\Util\StructType\NextSegment
     */
    public function setAirSegmentRef(?\Travelport\Util\StructType\TypeSegmentRef $airSegmentRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($airSegmentRefChoiceErrorMessage = self::validateAirSegmentRefForChoiceConstraintFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($airSegmentRef) || (is_array($airSegmentRef) && empty($airSegmentRef))) {
            unset($this->AirSegmentRef);
        } else {
            $this->AirSegmentRef = $airSegmentRef;
        }
        
        return $this;
    }
    /**
     * Get HotelReservationRef value
     * @return \Travelport\Util\StructType\TypeNonAirReservationRef|null
     */
    public function getHotelReservationRef(): ?\Travelport\Util\StructType\TypeNonAirReservationRef
    {
        return $this->HotelReservationRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelReservationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservationRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelReservationRefForChoiceConstraintFromSetHotelReservationRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirSegmentRef',
            'VehicleReservationRef',
            'PassiveSegmentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelReservationRef can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelReservationRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelReservationRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeNonAirReservationRef $hotelReservationRef
     * @return \Travelport\Util\StructType\NextSegment
     */
    public function setHotelReservationRef(?\Travelport\Util\StructType\TypeNonAirReservationRef $hotelReservationRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($hotelReservationRefChoiceErrorMessage = self::validateHotelReservationRefForChoiceConstraintFromSetHotelReservationRef($hotelReservationRef))) {
            throw new InvalidArgumentException($hotelReservationRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelReservationRef) || (is_array($hotelReservationRef) && empty($hotelReservationRef))) {
            unset($this->HotelReservationRef);
        } else {
            $this->HotelReservationRef = $hotelReservationRef;
        }
        
        return $this;
    }
    /**
     * Get VehicleReservationRef value
     * @return \Travelport\Util\StructType\TypeNonAirReservationRef|null
     */
    public function getVehicleReservationRef(): ?\Travelport\Util\StructType\TypeNonAirReservationRef
    {
        return $this->VehicleReservationRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleReservationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleReservationRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleReservationRefForChoiceConstraintFromSetVehicleReservationRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirSegmentRef',
            'HotelReservationRef',
            'PassiveSegmentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleReservationRef can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleReservationRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleReservationRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @return \Travelport\Util\StructType\NextSegment
     */
    public function setVehicleReservationRef(?\Travelport\Util\StructType\TypeNonAirReservationRef $vehicleReservationRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($vehicleReservationRefChoiceErrorMessage = self::validateVehicleReservationRefForChoiceConstraintFromSetVehicleReservationRef($vehicleReservationRef))) {
            throw new InvalidArgumentException($vehicleReservationRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleReservationRef) || (is_array($vehicleReservationRef) && empty($vehicleReservationRef))) {
            unset($this->VehicleReservationRef);
        } else {
            $this->VehicleReservationRef = $vehicleReservationRef;
        }
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return \Travelport\Util\StructType\TypeSegmentRef|null
     */
    public function getPassiveSegmentRef(): ?\Travelport\Util\StructType\TypeSegmentRef
    {
        return $this->PassiveSegmentRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPassiveSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveSegmentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassiveSegmentRefForChoiceConstraintFromSetPassiveSegmentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirSegmentRef',
            'HotelReservationRef',
            'VehicleReservationRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassiveSegmentRef can\'t be set as the property %s is already set. Only one property must be set among these properties: PassiveSegmentRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PassiveSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSegmentRef $passiveSegmentRef
     * @return \Travelport\Util\StructType\NextSegment
     */
    public function setPassiveSegmentRef(?\Travelport\Util\StructType\TypeSegmentRef $passiveSegmentRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($passiveSegmentRefChoiceErrorMessage = self::validatePassiveSegmentRefForChoiceConstraintFromSetPassiveSegmentRef($passiveSegmentRef))) {
            throw new InvalidArgumentException($passiveSegmentRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($passiveSegmentRef) || (is_array($passiveSegmentRef) && empty($passiveSegmentRef))) {
            unset($this->PassiveSegmentRef);
        } else {
            $this->PassiveSegmentRef = $passiveSegmentRef;
        }
        
        return $this;
    }
}
