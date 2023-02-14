<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsellSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve all upsell qualify/offers based on search criteria for air,hotel and vehicle.
 * @subpackage Structs
 */
class UpsellSearchReq extends BaseReq
{
    /**
     * The AirUpsellSearchCriteria
     * Meta information extracted from the WSDL
     * - choice: AirUpsellSearchCriteria | HotelUpsellSearchCriteria | VehicleUpsellSearchCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirUpsellSearchCriteria
     * @var \Travelport\Util\StructType\AirUpsellSearchCriteria|null
     */
    protected ?\Travelport\Util\StructType\AirUpsellSearchCriteria $AirUpsellSearchCriteria = null;
    /**
     * The HotelUpsellSearchCriteria
     * Meta information extracted from the WSDL
     * - choice: AirUpsellSearchCriteria | HotelUpsellSearchCriteria | VehicleUpsellSearchCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: HotelUpsellSearchCriteria
     * @var \Travelport\Util\StructType\HotelUpsellSearchCriteria|null
     */
    protected ?\Travelport\Util\StructType\HotelUpsellSearchCriteria $HotelUpsellSearchCriteria = null;
    /**
     * The VehicleUpsellSearchCriteria
     * Meta information extracted from the WSDL
     * - choice: AirUpsellSearchCriteria | HotelUpsellSearchCriteria | VehicleUpsellSearchCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: VehicleUpsellSearchCriteria
     * @var \Travelport\Util\StructType\VehicleUpsellSearchCriteria|null
     */
    protected ?\Travelport\Util\StructType\VehicleUpsellSearchCriteria $VehicleUpsellSearchCriteria = null;
    /**
     * The UpsellSearchModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: UpsellSearchModifier
     * @var \Travelport\Util\StructType\UpsellSearchModifier|null
     */
    protected ?\Travelport\Util\StructType\UpsellSearchModifier $UpsellSearchModifier = null;
    /**
     * Constructor method for UpsellSearchReq
     * @uses UpsellSearchReq::setAirUpsellSearchCriteria()
     * @uses UpsellSearchReq::setHotelUpsellSearchCriteria()
     * @uses UpsellSearchReq::setVehicleUpsellSearchCriteria()
     * @uses UpsellSearchReq::setUpsellSearchModifier()
     * @param \Travelport\Util\StructType\AirUpsellSearchCriteria $airUpsellSearchCriteria
     * @param \Travelport\Util\StructType\HotelUpsellSearchCriteria $hotelUpsellSearchCriteria
     * @param \Travelport\Util\StructType\VehicleUpsellSearchCriteria $vehicleUpsellSearchCriteria
     * @param \Travelport\Util\StructType\UpsellSearchModifier $upsellSearchModifier
     */
    public function __construct(?\Travelport\Util\StructType\AirUpsellSearchCriteria $airUpsellSearchCriteria = null, ?\Travelport\Util\StructType\HotelUpsellSearchCriteria $hotelUpsellSearchCriteria = null, ?\Travelport\Util\StructType\VehicleUpsellSearchCriteria $vehicleUpsellSearchCriteria = null, ?\Travelport\Util\StructType\UpsellSearchModifier $upsellSearchModifier = null)
    {
        $this
            ->setAirUpsellSearchCriteria($airUpsellSearchCriteria)
            ->setHotelUpsellSearchCriteria($hotelUpsellSearchCriteria)
            ->setVehicleUpsellSearchCriteria($vehicleUpsellSearchCriteria)
            ->setUpsellSearchModifier($upsellSearchModifier);
    }
    /**
     * Get AirUpsellSearchCriteria value
     * @return \Travelport\Util\StructType\AirUpsellSearchCriteria|null
     */
    public function getAirUpsellSearchCriteria(): ?\Travelport\Util\StructType\AirUpsellSearchCriteria
    {
        return isset($this->AirUpsellSearchCriteria) ? $this->AirUpsellSearchCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirUpsellSearchCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellSearchCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirUpsellSearchCriteriaForChoiceConstraintsFromSetAirUpsellSearchCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelUpsellSearchCriteria',
            'VehicleUpsellSearchCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpsellSearchCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpsellSearchCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirUpsellSearchCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellSearchCriteria $airUpsellSearchCriteria
     * @return \Travelport\Util\StructType\UpsellSearchReq
     */
    public function setAirUpsellSearchCriteria(?\Travelport\Util\StructType\AirUpsellSearchCriteria $airUpsellSearchCriteria = null): self
    {
        // validation for constraint: choice(AirUpsellSearchCriteria, HotelUpsellSearchCriteria, VehicleUpsellSearchCriteria)
        if ('' !== ($airUpsellSearchCriteriaChoiceErrorMessage = self::validateAirUpsellSearchCriteriaForChoiceConstraintsFromSetAirUpsellSearchCriteria($airUpsellSearchCriteria))) {
            throw new InvalidArgumentException($airUpsellSearchCriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($airUpsellSearchCriteria) || (is_array($airUpsellSearchCriteria) && empty($airUpsellSearchCriteria))) {
            unset($this->AirUpsellSearchCriteria);
        } else {
            $this->AirUpsellSearchCriteria = $airUpsellSearchCriteria;
        }
        
        return $this;
    }
    /**
     * Get HotelUpsellSearchCriteria value
     * @return \Travelport\Util\StructType\HotelUpsellSearchCriteria|null
     */
    public function getHotelUpsellSearchCriteria(): ?\Travelport\Util\StructType\HotelUpsellSearchCriteria
    {
        return isset($this->HotelUpsellSearchCriteria) ? $this->HotelUpsellSearchCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelUpsellSearchCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellSearchCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelUpsellSearchCriteriaForChoiceConstraintsFromSetHotelUpsellSearchCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellSearchCriteria',
            'VehicleUpsellSearchCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpsellSearchCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpsellSearchCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelUpsellSearchCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellSearchCriteria $hotelUpsellSearchCriteria
     * @return \Travelport\Util\StructType\UpsellSearchReq
     */
    public function setHotelUpsellSearchCriteria(?\Travelport\Util\StructType\HotelUpsellSearchCriteria $hotelUpsellSearchCriteria = null): self
    {
        // validation for constraint: choice(AirUpsellSearchCriteria, HotelUpsellSearchCriteria, VehicleUpsellSearchCriteria)
        if ('' !== ($hotelUpsellSearchCriteriaChoiceErrorMessage = self::validateHotelUpsellSearchCriteriaForChoiceConstraintsFromSetHotelUpsellSearchCriteria($hotelUpsellSearchCriteria))) {
            throw new InvalidArgumentException($hotelUpsellSearchCriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelUpsellSearchCriteria) || (is_array($hotelUpsellSearchCriteria) && empty($hotelUpsellSearchCriteria))) {
            unset($this->HotelUpsellSearchCriteria);
        } else {
            $this->HotelUpsellSearchCriteria = $hotelUpsellSearchCriteria;
        }
        
        return $this;
    }
    /**
     * Get VehicleUpsellSearchCriteria value
     * @return \Travelport\Util\StructType\VehicleUpsellSearchCriteria|null
     */
    public function getVehicleUpsellSearchCriteria(): ?\Travelport\Util\StructType\VehicleUpsellSearchCriteria
    {
        return isset($this->VehicleUpsellSearchCriteria) ? $this->VehicleUpsellSearchCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleUpsellSearchCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellSearchCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleUpsellSearchCriteriaForChoiceConstraintsFromSetVehicleUpsellSearchCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellSearchCriteria',
            'HotelUpsellSearchCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpsellSearchCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpsellSearchCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleUpsellSearchCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellSearchCriteria $vehicleUpsellSearchCriteria
     * @return \Travelport\Util\StructType\UpsellSearchReq
     */
    public function setVehicleUpsellSearchCriteria(?\Travelport\Util\StructType\VehicleUpsellSearchCriteria $vehicleUpsellSearchCriteria = null): self
    {
        // validation for constraint: choice(AirUpsellSearchCriteria, HotelUpsellSearchCriteria, VehicleUpsellSearchCriteria)
        if ('' !== ($vehicleUpsellSearchCriteriaChoiceErrorMessage = self::validateVehicleUpsellSearchCriteriaForChoiceConstraintsFromSetVehicleUpsellSearchCriteria($vehicleUpsellSearchCriteria))) {
            throw new InvalidArgumentException($vehicleUpsellSearchCriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleUpsellSearchCriteria) || (is_array($vehicleUpsellSearchCriteria) && empty($vehicleUpsellSearchCriteria))) {
            unset($this->VehicleUpsellSearchCriteria);
        } else {
            $this->VehicleUpsellSearchCriteria = $vehicleUpsellSearchCriteria;
        }
        
        return $this;
    }
    /**
     * Get UpsellSearchModifier value
     * @return \Travelport\Util\StructType\UpsellSearchModifier|null
     */
    public function getUpsellSearchModifier(): ?\Travelport\Util\StructType\UpsellSearchModifier
    {
        return $this->UpsellSearchModifier;
    }
    /**
     * Set UpsellSearchModifier value
     * @param \Travelport\Util\StructType\UpsellSearchModifier $upsellSearchModifier
     * @return \Travelport\Util\StructType\UpsellSearchReq
     */
    public function setUpsellSearchModifier(?\Travelport\Util\StructType\UpsellSearchModifier $upsellSearchModifier = null): self
    {
        $this->UpsellSearchModifier = $upsellSearchModifier;
        
        return $this;
    }
}
