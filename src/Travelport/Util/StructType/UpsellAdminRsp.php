<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsellAdminRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to add/delete/update of offer/qualify.
 * @subpackage Structs
 */
class UpsellAdminRsp extends BaseRsp
{
    /**
     * The AirUpsellRule
     * Meta information extracted from the WSDL
     * - choice: AirUpsellRule | VehicleUpsellRule | HotelUpsellRule
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirUpsellRule
     * @var \Travelport\Util\StructType\AirUpsellRule[]
     */
    protected ?array $AirUpsellRule = null;
    /**
     * The VehicleUpsellRule
     * Meta information extracted from the WSDL
     * - choice: AirUpsellRule | VehicleUpsellRule | HotelUpsellRule
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleUpsellRule
     * @var \Travelport\Util\StructType\VehicleUpsellRule[]
     */
    protected ?array $VehicleUpsellRule = null;
    /**
     * The HotelUpsellRule
     * Meta information extracted from the WSDL
     * - choice: AirUpsellRule | VehicleUpsellRule | HotelUpsellRule
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelUpsellRule
     * @var \Travelport\Util\StructType\HotelUpsellRule[]
     */
    protected ?array $HotelUpsellRule = null;
    /**
     * Constructor method for UpsellAdminRsp
     * @uses UpsellAdminRsp::setAirUpsellRule()
     * @uses UpsellAdminRsp::setVehicleUpsellRule()
     * @uses UpsellAdminRsp::setHotelUpsellRule()
     * @param \Travelport\Util\StructType\AirUpsellRule[] $airUpsellRule
     * @param \Travelport\Util\StructType\VehicleUpsellRule[] $vehicleUpsellRule
     * @param \Travelport\Util\StructType\HotelUpsellRule[] $hotelUpsellRule
     */
    public function __construct(?array $airUpsellRule = null, ?array $vehicleUpsellRule = null, ?array $hotelUpsellRule = null)
    {
        $this
            ->setAirUpsellRule($airUpsellRule)
            ->setVehicleUpsellRule($vehicleUpsellRule)
            ->setHotelUpsellRule($hotelUpsellRule);
    }
    /**
     * Get AirUpsellRule value
     * @return \Travelport\Util\StructType\AirUpsellRule[]
     */
    public function getAirUpsellRule(): ?array
    {
        return isset($this->AirUpsellRule) ? $this->AirUpsellRule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAirUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirUpsellRuleForArrayConstraintsFromSetAirUpsellRule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsellAdminRspAirUpsellRuleItem) {
            // validation for constraint: itemType
            if (!$upsellAdminRspAirUpsellRuleItem instanceof \Travelport\Util\StructType\AirUpsellRule) {
                $invalidValues[] = is_object($upsellAdminRspAirUpsellRuleItem) ? get_class($upsellAdminRspAirUpsellRuleItem) : sprintf('%s(%s)', gettype($upsellAdminRspAirUpsellRuleItem), var_export($upsellAdminRspAirUpsellRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirUpsellRule property can only contain items of type \Travelport\Util\StructType\AirUpsellRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setAirUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellRule method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirUpsellRuleForChoiceConstraintsFromSetAirUpsellRule($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleUpsellRule',
            'HotelUpsellRule',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpsellRule can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpsellRule, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirUpsellRule value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellRule[] $airUpsellRule
     * @return \Travelport\Util\StructType\UpsellAdminRsp
     */
    public function setAirUpsellRule(?array $airUpsellRule = null): self
    {
        // validation for constraint: array
        if ('' !== ($airUpsellRuleArrayErrorMessage = self::validateAirUpsellRuleForArrayConstraintsFromSetAirUpsellRule($airUpsellRule))) {
            throw new InvalidArgumentException($airUpsellRuleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirUpsellRule, VehicleUpsellRule, HotelUpsellRule)
        if ('' !== ($airUpsellRuleChoiceErrorMessage = self::validateAirUpsellRuleForChoiceConstraintsFromSetAirUpsellRule($airUpsellRule))) {
            throw new InvalidArgumentException($airUpsellRuleChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airUpsellRule) && count($airUpsellRule) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airUpsellRule)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airUpsellRule) && count($airUpsellRule) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airUpsellRule)), __LINE__);
        }
        if (is_null($airUpsellRule) || (is_array($airUpsellRule) && empty($airUpsellRule))) {
            unset($this->AirUpsellRule);
        } else {
            $this->AirUpsellRule = $airUpsellRule;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToAirUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirUpsellRule method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToAirUpsellRule($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleUpsellRule',
            'HotelUpsellRule',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpsellRule can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpsellRule, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirUpsellRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellRule $item
     * @return \Travelport\Util\StructType\UpsellAdminRsp
     */
    public function addToAirUpsellRule(\Travelport\Util\StructType\AirUpsellRule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirUpsellRule) {
            throw new InvalidArgumentException(sprintf('The AirUpsellRule property can only contain items of type \Travelport\Util\StructType\AirUpsellRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirUpsellRule, VehicleUpsellRule, HotelUpsellRule)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToAirUpsellRule($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirUpsellRule) && count($this->AirUpsellRule) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirUpsellRule)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirUpsellRule) && count($this->AirUpsellRule) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirUpsellRule)), __LINE__);
        }
        $this->AirUpsellRule[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleUpsellRule value
     * @return \Travelport\Util\StructType\VehicleUpsellRule[]
     */
    public function getVehicleUpsellRule(): ?array
    {
        return isset($this->VehicleUpsellRule) ? $this->VehicleUpsellRule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setVehicleUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleUpsellRuleForArrayConstraintsFromSetVehicleUpsellRule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsellAdminRspVehicleUpsellRuleItem) {
            // validation for constraint: itemType
            if (!$upsellAdminRspVehicleUpsellRuleItem instanceof \Travelport\Util\StructType\VehicleUpsellRule) {
                $invalidValues[] = is_object($upsellAdminRspVehicleUpsellRuleItem) ? get_class($upsellAdminRspVehicleUpsellRuleItem) : sprintf('%s(%s)', gettype($upsellAdminRspVehicleUpsellRuleItem), var_export($upsellAdminRspVehicleUpsellRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleUpsellRule property can only contain items of type \Travelport\Util\StructType\VehicleUpsellRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellRule method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleUpsellRuleForChoiceConstraintsFromSetVehicleUpsellRule($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellRule',
            'HotelUpsellRule',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpsellRule can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpsellRule, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleUpsellRule value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellRule[] $vehicleUpsellRule
     * @return \Travelport\Util\StructType\UpsellAdminRsp
     */
    public function setVehicleUpsellRule(?array $vehicleUpsellRule = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleUpsellRuleArrayErrorMessage = self::validateVehicleUpsellRuleForArrayConstraintsFromSetVehicleUpsellRule($vehicleUpsellRule))) {
            throw new InvalidArgumentException($vehicleUpsellRuleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirUpsellRule, VehicleUpsellRule, HotelUpsellRule)
        if ('' !== ($vehicleUpsellRuleChoiceErrorMessage = self::validateVehicleUpsellRuleForChoiceConstraintsFromSetVehicleUpsellRule($vehicleUpsellRule))) {
            throw new InvalidArgumentException($vehicleUpsellRuleChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicleUpsellRule) && count($vehicleUpsellRule) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicleUpsellRule)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleUpsellRule) && count($vehicleUpsellRule) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleUpsellRule)), __LINE__);
        }
        if (is_null($vehicleUpsellRule) || (is_array($vehicleUpsellRule) && empty($vehicleUpsellRule))) {
            unset($this->VehicleUpsellRule);
        } else {
            $this->VehicleUpsellRule = $vehicleUpsellRule;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToVehicleUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicleUpsellRule method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToVehicleUpsellRule($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellRule',
            'HotelUpsellRule',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpsellRule can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpsellRule, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to VehicleUpsellRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellRule $item
     * @return \Travelport\Util\StructType\UpsellAdminRsp
     */
    public function addToVehicleUpsellRule(\Travelport\Util\StructType\VehicleUpsellRule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VehicleUpsellRule) {
            throw new InvalidArgumentException(sprintf('The VehicleUpsellRule property can only contain items of type \Travelport\Util\StructType\VehicleUpsellRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirUpsellRule, VehicleUpsellRule, HotelUpsellRule)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToVehicleUpsellRule($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->VehicleUpsellRule) && count($this->VehicleUpsellRule) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->VehicleUpsellRule)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleUpsellRule) && count($this->VehicleUpsellRule) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleUpsellRule)), __LINE__);
        }
        $this->VehicleUpsellRule[] = $item;
        
        return $this;
    }
    /**
     * Get HotelUpsellRule value
     * @return \Travelport\Util\StructType\HotelUpsellRule[]
     */
    public function getHotelUpsellRule(): ?array
    {
        return isset($this->HotelUpsellRule) ? $this->HotelUpsellRule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelUpsellRuleForArrayConstraintsFromSetHotelUpsellRule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsellAdminRspHotelUpsellRuleItem) {
            // validation for constraint: itemType
            if (!$upsellAdminRspHotelUpsellRuleItem instanceof \Travelport\Util\StructType\HotelUpsellRule) {
                $invalidValues[] = is_object($upsellAdminRspHotelUpsellRuleItem) ? get_class($upsellAdminRspHotelUpsellRuleItem) : sprintf('%s(%s)', gettype($upsellAdminRspHotelUpsellRuleItem), var_export($upsellAdminRspHotelUpsellRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelUpsellRule property can only contain items of type \Travelport\Util\StructType\HotelUpsellRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellRule method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelUpsellRuleForChoiceConstraintsFromSetHotelUpsellRule($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellRule',
            'VehicleUpsellRule',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpsellRule can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpsellRule, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelUpsellRule value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellRule[] $hotelUpsellRule
     * @return \Travelport\Util\StructType\UpsellAdminRsp
     */
    public function setHotelUpsellRule(?array $hotelUpsellRule = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelUpsellRuleArrayErrorMessage = self::validateHotelUpsellRuleForArrayConstraintsFromSetHotelUpsellRule($hotelUpsellRule))) {
            throw new InvalidArgumentException($hotelUpsellRuleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirUpsellRule, VehicleUpsellRule, HotelUpsellRule)
        if ('' !== ($hotelUpsellRuleChoiceErrorMessage = self::validateHotelUpsellRuleForChoiceConstraintsFromSetHotelUpsellRule($hotelUpsellRule))) {
            throw new InvalidArgumentException($hotelUpsellRuleChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelUpsellRule) && count($hotelUpsellRule) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelUpsellRule)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelUpsellRule) && count($hotelUpsellRule) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelUpsellRule)), __LINE__);
        }
        if (is_null($hotelUpsellRule) || (is_array($hotelUpsellRule) && empty($hotelUpsellRule))) {
            unset($this->HotelUpsellRule);
        } else {
            $this->HotelUpsellRule = $hotelUpsellRule;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToHotelUpsellRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelUpsellRule method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToHotelUpsellRule($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellRule',
            'VehicleUpsellRule',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpsellRule can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpsellRule, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelUpsellRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellRule $item
     * @return \Travelport\Util\StructType\UpsellAdminRsp
     */
    public function addToHotelUpsellRule(\Travelport\Util\StructType\HotelUpsellRule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HotelUpsellRule) {
            throw new InvalidArgumentException(sprintf('The HotelUpsellRule property can only contain items of type \Travelport\Util\StructType\HotelUpsellRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirUpsellRule, VehicleUpsellRule, HotelUpsellRule)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToHotelUpsellRule($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelUpsellRule) && count($this->HotelUpsellRule) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelUpsellRule)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelUpsellRule) && count($this->HotelUpsellRule) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelUpsellRule)), __LINE__);
        }
        $this->HotelUpsellRule[] = $item;
        
        return $this;
    }
}
