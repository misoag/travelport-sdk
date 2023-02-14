<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsellAdminReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to add/delete/update qualify/offer.
 * @subpackage Structs
 */
class UpsellAdminReq extends BaseReq
{
    /**
     * The AirUpsellCriteria
     * Meta information extracted from the WSDL
     * - choice: AirUpsellCriteria | VehicleUpsellCriteria | HotelUpsellCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirUpsellCriteria
     * @var \Travelport\Util\StructType\AirUpsellCriteria|null
     */
    protected ?\Travelport\Util\StructType\AirUpsellCriteria $AirUpsellCriteria = null;
    /**
     * The VehicleUpsellCriteria
     * Meta information extracted from the WSDL
     * - choice: AirUpsellCriteria | VehicleUpsellCriteria | HotelUpsellCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: VehicleUpsellCriteria
     * @var \Travelport\Util\StructType\VehicleUpsellCriteria|null
     */
    protected ?\Travelport\Util\StructType\VehicleUpsellCriteria $VehicleUpsellCriteria = null;
    /**
     * The HotelUpsellCriteria
     * Meta information extracted from the WSDL
     * - choice: AirUpsellCriteria | VehicleUpsellCriteria | HotelUpsellCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: HotelUpsellCriteria
     * @var \Travelport\Util\StructType\HotelUpsellCriteria|null
     */
    protected ?\Travelport\Util\StructType\HotelUpsellCriteria $HotelUpsellCriteria = null;
    /**
     * Constructor method for UpsellAdminReq
     * @uses UpsellAdminReq::setAirUpsellCriteria()
     * @uses UpsellAdminReq::setVehicleUpsellCriteria()
     * @uses UpsellAdminReq::setHotelUpsellCriteria()
     * @param \Travelport\Util\StructType\AirUpsellCriteria $airUpsellCriteria
     * @param \Travelport\Util\StructType\VehicleUpsellCriteria $vehicleUpsellCriteria
     * @param \Travelport\Util\StructType\HotelUpsellCriteria $hotelUpsellCriteria
     */
    public function __construct(?\Travelport\Util\StructType\AirUpsellCriteria $airUpsellCriteria = null, ?\Travelport\Util\StructType\VehicleUpsellCriteria $vehicleUpsellCriteria = null, ?\Travelport\Util\StructType\HotelUpsellCriteria $hotelUpsellCriteria = null)
    {
        $this
            ->setAirUpsellCriteria($airUpsellCriteria)
            ->setVehicleUpsellCriteria($vehicleUpsellCriteria)
            ->setHotelUpsellCriteria($hotelUpsellCriteria);
    }
    /**
     * Get AirUpsellCriteria value
     * @return \Travelport\Util\StructType\AirUpsellCriteria|null
     */
    public function getAirUpsellCriteria(): ?\Travelport\Util\StructType\AirUpsellCriteria
    {
        return isset($this->AirUpsellCriteria) ? $this->AirUpsellCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirUpsellCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirUpsellCriteriaForChoiceConstraintsFromSetAirUpsellCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleUpsellCriteria',
            'HotelUpsellCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpsellCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpsellCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirUpsellCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellCriteria $airUpsellCriteria
     * @return \Travelport\Util\StructType\UpsellAdminReq
     */
    public function setAirUpsellCriteria(?\Travelport\Util\StructType\AirUpsellCriteria $airUpsellCriteria = null): self
    {
        // validation for constraint: choice(AirUpsellCriteria, VehicleUpsellCriteria, HotelUpsellCriteria)
        if ('' !== ($airUpsellCriteriaChoiceErrorMessage = self::validateAirUpsellCriteriaForChoiceConstraintsFromSetAirUpsellCriteria($airUpsellCriteria))) {
            throw new InvalidArgumentException($airUpsellCriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($airUpsellCriteria) || (is_array($airUpsellCriteria) && empty($airUpsellCriteria))) {
            unset($this->AirUpsellCriteria);
        } else {
            $this->AirUpsellCriteria = $airUpsellCriteria;
        }
        
        return $this;
    }
    /**
     * Get VehicleUpsellCriteria value
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria|null
     */
    public function getVehicleUpsellCriteria(): ?\Travelport\Util\StructType\VehicleUpsellCriteria
    {
        return isset($this->VehicleUpsellCriteria) ? $this->VehicleUpsellCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleUpsellCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleUpsellCriteriaForChoiceConstraintsFromSetVehicleUpsellCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellCriteria',
            'HotelUpsellCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpsellCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpsellCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleUpsellCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellCriteria $vehicleUpsellCriteria
     * @return \Travelport\Util\StructType\UpsellAdminReq
     */
    public function setVehicleUpsellCriteria(?\Travelport\Util\StructType\VehicleUpsellCriteria $vehicleUpsellCriteria = null): self
    {
        // validation for constraint: choice(AirUpsellCriteria, VehicleUpsellCriteria, HotelUpsellCriteria)
        if ('' !== ($vehicleUpsellCriteriaChoiceErrorMessage = self::validateVehicleUpsellCriteriaForChoiceConstraintsFromSetVehicleUpsellCriteria($vehicleUpsellCriteria))) {
            throw new InvalidArgumentException($vehicleUpsellCriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleUpsellCriteria) || (is_array($vehicleUpsellCriteria) && empty($vehicleUpsellCriteria))) {
            unset($this->VehicleUpsellCriteria);
        } else {
            $this->VehicleUpsellCriteria = $vehicleUpsellCriteria;
        }
        
        return $this;
    }
    /**
     * Get HotelUpsellCriteria value
     * @return \Travelport\Util\StructType\HotelUpsellCriteria|null
     */
    public function getHotelUpsellCriteria(): ?\Travelport\Util\StructType\HotelUpsellCriteria
    {
        return isset($this->HotelUpsellCriteria) ? $this->HotelUpsellCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelUpsellCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelUpsellCriteriaForChoiceConstraintsFromSetHotelUpsellCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellCriteria',
            'VehicleUpsellCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpsellCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpsellCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelUpsellCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellCriteria $hotelUpsellCriteria
     * @return \Travelport\Util\StructType\UpsellAdminReq
     */
    public function setHotelUpsellCriteria(?\Travelport\Util\StructType\HotelUpsellCriteria $hotelUpsellCriteria = null): self
    {
        // validation for constraint: choice(AirUpsellCriteria, VehicleUpsellCriteria, HotelUpsellCriteria)
        if ('' !== ($hotelUpsellCriteriaChoiceErrorMessage = self::validateHotelUpsellCriteriaForChoiceConstraintsFromSetHotelUpsellCriteria($hotelUpsellCriteria))) {
            throw new InvalidArgumentException($hotelUpsellCriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelUpsellCriteria) || (is_array($hotelUpsellCriteria) && empty($hotelUpsellCriteria))) {
            unset($this->HotelUpsellCriteria);
        } else {
            $this->HotelUpsellCriteria = $hotelUpsellCriteria;
        }
        
        return $this;
    }
}
