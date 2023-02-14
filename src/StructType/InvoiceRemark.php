<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceRemark StructType
 * @subpackage Structs
 */
class InvoiceRemark extends TypeAssociatedRemark
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
     * @var \StructType\TypeSegmentRef|null
     */
    protected ?\StructType\TypeSegmentRef $AirSegmentRef = null;
    /**
     * The HotelReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Hotel reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TypeNonAirReservationRef|null
     */
    protected ?\StructType\TypeNonAirReservationRef $HotelReservationRef = null;
    /**
     * The VehicleReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Vehicle reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TypeNonAirReservationRef|null
     */
    protected ?\StructType\TypeNonAirReservationRef $VehicleReservationRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to PassiveSegment from a Passive Reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TypeSegmentRef|null
     */
    protected ?\StructType\TypeSegmentRef $PassiveSegmentRef = null;
    /**
     * Constructor method for InvoiceRemark
     * @uses InvoiceRemark::setAirSegmentRef()
     * @uses InvoiceRemark::setHotelReservationRef()
     * @uses InvoiceRemark::setVehicleReservationRef()
     * @uses InvoiceRemark::setPassiveSegmentRef()
     * @param \StructType\TypeSegmentRef $airSegmentRef
     * @param \StructType\TypeNonAirReservationRef $hotelReservationRef
     * @param \StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @param \StructType\TypeSegmentRef $passiveSegmentRef
     */
    public function __construct(?\StructType\TypeSegmentRef $airSegmentRef = null, ?\StructType\TypeNonAirReservationRef $hotelReservationRef = null, ?\StructType\TypeNonAirReservationRef $vehicleReservationRef = null, ?\StructType\TypeSegmentRef $passiveSegmentRef = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setHotelReservationRef($hotelReservationRef)
            ->setVehicleReservationRef($vehicleReservationRef)
            ->setPassiveSegmentRef($passiveSegmentRef);
    }
    /**
     * Get AirSegmentRef value
     * @return \StructType\TypeSegmentRef|null
     */
    public function getAirSegmentRef(): ?\StructType\TypeSegmentRef
    {
        return isset($this->AirSegmentRef) ? $this->AirSegmentRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirSegmentRefForChoiceConstraintsFromSetAirSegmentRef($value): string
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
     * @param \StructType\TypeSegmentRef $airSegmentRef
     * @return \StructType\InvoiceRemark
     */
    public function setAirSegmentRef(?\StructType\TypeSegmentRef $airSegmentRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($airSegmentRefChoiceErrorMessage = self::validateAirSegmentRefForChoiceConstraintsFromSetAirSegmentRef($airSegmentRef))) {
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
     * @return \StructType\TypeNonAirReservationRef|null
     */
    public function getHotelReservationRef(): ?\StructType\TypeNonAirReservationRef
    {
        return isset($this->HotelReservationRef) ? $this->HotelReservationRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelReservationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservationRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelReservationRefForChoiceConstraintsFromSetHotelReservationRef($value): string
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
     * @param \StructType\TypeNonAirReservationRef $hotelReservationRef
     * @return \StructType\InvoiceRemark
     */
    public function setHotelReservationRef(?\StructType\TypeNonAirReservationRef $hotelReservationRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($hotelReservationRefChoiceErrorMessage = self::validateHotelReservationRefForChoiceConstraintsFromSetHotelReservationRef($hotelReservationRef))) {
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
     * @return \StructType\TypeNonAirReservationRef|null
     */
    public function getVehicleReservationRef(): ?\StructType\TypeNonAirReservationRef
    {
        return isset($this->VehicleReservationRef) ? $this->VehicleReservationRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleReservationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleReservationRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleReservationRefForChoiceConstraintsFromSetVehicleReservationRef($value): string
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
     * @param \StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @return \StructType\InvoiceRemark
     */
    public function setVehicleReservationRef(?\StructType\TypeNonAirReservationRef $vehicleReservationRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($vehicleReservationRefChoiceErrorMessage = self::validateVehicleReservationRefForChoiceConstraintsFromSetVehicleReservationRef($vehicleReservationRef))) {
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
     * @return \StructType\TypeSegmentRef|null
     */
    public function getPassiveSegmentRef(): ?\StructType\TypeSegmentRef
    {
        return isset($this->PassiveSegmentRef) ? $this->PassiveSegmentRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPassiveSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveSegmentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassiveSegmentRefForChoiceConstraintsFromSetPassiveSegmentRef($value): string
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
     * @param \StructType\TypeSegmentRef $passiveSegmentRef
     * @return \StructType\InvoiceRemark
     */
    public function setPassiveSegmentRef(?\StructType\TypeSegmentRef $passiveSegmentRef = null): self
    {
        // validation for constraint: choice(AirSegmentRef, HotelReservationRef, VehicleReservationRef, PassiveSegmentRef)
        if ('' !== ($passiveSegmentRefChoiceErrorMessage = self::validatePassiveSegmentRefForChoiceConstraintsFromSetPassiveSegmentRef($passiveSegmentRef))) {
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
