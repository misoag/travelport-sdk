<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalModifyCmd StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the elements that will be batch updated to a UniversalRecord
 * @subpackage Structs
 */
class UniversalModifyCmd extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Refers the universal modify command key. It should be unique in the request. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The VehicleAdd
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: VehicleAdd
     * @var \Travelport\UniversalRecord\StructType\VehicleAdd|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleAdd $VehicleAdd = null;
    /**
     * The VehicleDelete
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: VehicleDelete
     * @var \Travelport\UniversalRecord\StructType\VehicleDelete|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleDelete $VehicleDelete = null;
    /**
     * The VehicleUpdate
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: VehicleUpdate
     * @var \Travelport\UniversalRecord\StructType\VehicleUpdate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleUpdate $VehicleUpdate = null;
    /**
     * The AirAdd
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirAdd
     * @var \Travelport\UniversalRecord\StructType\AirAdd|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirAdd $AirAdd = null;
    /**
     * The AirDelete
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirDelete
     * @var \Travelport\UniversalRecord\StructType\AirDelete|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirDelete $AirDelete = null;
    /**
     * The AirUpdate
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirUpdate
     * @var \Travelport\UniversalRecord\StructType\AirUpdate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirUpdate $AirUpdate = null;
    /**
     * The UniversalAdd
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: UniversalAdd
     * @var \Travelport\UniversalRecord\StructType\UniversalAdd|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalAdd $UniversalAdd = null;
    /**
     * The UniversalDelete
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: UniversalDelete
     * @var \Travelport\UniversalRecord\StructType\UniversalDelete|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalDelete $UniversalDelete = null;
    /**
     * The UniversalUpdate
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: UniversalUpdate
     * @var \Travelport\UniversalRecord\StructType\UniversalUpdate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalUpdate $UniversalUpdate = null;
    /**
     * The HotelAdd
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: HotelAdd
     * @var \Travelport\UniversalRecord\StructType\HotelAdd|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelAdd $HotelAdd = null;
    /**
     * The HotelUpdate
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: HotelUpdate
     * @var \Travelport\UniversalRecord\StructType\HotelUpdate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelUpdate $HotelUpdate = null;
    /**
     * The HotelDelete
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: HotelDelete
     * @var \Travelport\UniversalRecord\StructType\HotelDelete|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelDelete $HotelDelete = null;
    /**
     * The PassiveAdd
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: PassiveAdd
     * @var \Travelport\UniversalRecord\StructType\PassiveAdd|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PassiveAdd $PassiveAdd = null;
    /**
     * The PassiveDelete
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: PassiveDelete
     * @var \Travelport\UniversalRecord\StructType\PassiveDelete|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PassiveDelete $PassiveDelete = null;
    /**
     * The RailUpdate
     * Meta information extracted from the WSDL
     * - choice: VehicleAdd | VehicleDelete | VehicleUpdate | AirAdd | AirDelete | AirUpdate | UniversalAdd | UniversalDelete | UniversalUpdate | HotelAdd | HotelUpdate | HotelDelete | PassiveAdd | PassiveDelete | RailUpdate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: RailUpdate
     * @var \Travelport\UniversalRecord\StructType\RailUpdate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailUpdate $RailUpdate = null;
    /**
     * Constructor method for UniversalModifyCmd
     * @uses UniversalModifyCmd::setKey()
     * @uses UniversalModifyCmd::setVehicleAdd()
     * @uses UniversalModifyCmd::setVehicleDelete()
     * @uses UniversalModifyCmd::setVehicleUpdate()
     * @uses UniversalModifyCmd::setAirAdd()
     * @uses UniversalModifyCmd::setAirDelete()
     * @uses UniversalModifyCmd::setAirUpdate()
     * @uses UniversalModifyCmd::setUniversalAdd()
     * @uses UniversalModifyCmd::setUniversalDelete()
     * @uses UniversalModifyCmd::setUniversalUpdate()
     * @uses UniversalModifyCmd::setHotelAdd()
     * @uses UniversalModifyCmd::setHotelUpdate()
     * @uses UniversalModifyCmd::setHotelDelete()
     * @uses UniversalModifyCmd::setPassiveAdd()
     * @uses UniversalModifyCmd::setPassiveDelete()
     * @uses UniversalModifyCmd::setRailUpdate()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\VehicleAdd $vehicleAdd
     * @param \Travelport\UniversalRecord\StructType\VehicleDelete $vehicleDelete
     * @param \Travelport\UniversalRecord\StructType\VehicleUpdate $vehicleUpdate
     * @param \Travelport\UniversalRecord\StructType\AirAdd $airAdd
     * @param \Travelport\UniversalRecord\StructType\AirDelete $airDelete
     * @param \Travelport\UniversalRecord\StructType\AirUpdate $airUpdate
     * @param \Travelport\UniversalRecord\StructType\UniversalAdd $universalAdd
     * @param \Travelport\UniversalRecord\StructType\UniversalDelete $universalDelete
     * @param \Travelport\UniversalRecord\StructType\UniversalUpdate $universalUpdate
     * @param \Travelport\UniversalRecord\StructType\HotelAdd $hotelAdd
     * @param \Travelport\UniversalRecord\StructType\HotelUpdate $hotelUpdate
     * @param \Travelport\UniversalRecord\StructType\HotelDelete $hotelDelete
     * @param \Travelport\UniversalRecord\StructType\PassiveAdd $passiveAdd
     * @param \Travelport\UniversalRecord\StructType\PassiveDelete $passiveDelete
     * @param \Travelport\UniversalRecord\StructType\RailUpdate $railUpdate
     */
    public function __construct(string $key, ?\Travelport\UniversalRecord\StructType\VehicleAdd $vehicleAdd = null, ?\Travelport\UniversalRecord\StructType\VehicleDelete $vehicleDelete = null, ?\Travelport\UniversalRecord\StructType\VehicleUpdate $vehicleUpdate = null, ?\Travelport\UniversalRecord\StructType\AirAdd $airAdd = null, ?\Travelport\UniversalRecord\StructType\AirDelete $airDelete = null, ?\Travelport\UniversalRecord\StructType\AirUpdate $airUpdate = null, ?\Travelport\UniversalRecord\StructType\UniversalAdd $universalAdd = null, ?\Travelport\UniversalRecord\StructType\UniversalDelete $universalDelete = null, ?\Travelport\UniversalRecord\StructType\UniversalUpdate $universalUpdate = null, ?\Travelport\UniversalRecord\StructType\HotelAdd $hotelAdd = null, ?\Travelport\UniversalRecord\StructType\HotelUpdate $hotelUpdate = null, ?\Travelport\UniversalRecord\StructType\HotelDelete $hotelDelete = null, ?\Travelport\UniversalRecord\StructType\PassiveAdd $passiveAdd = null, ?\Travelport\UniversalRecord\StructType\PassiveDelete $passiveDelete = null, ?\Travelport\UniversalRecord\StructType\RailUpdate $railUpdate = null)
    {
        $this
            ->setKey($key)
            ->setVehicleAdd($vehicleAdd)
            ->setVehicleDelete($vehicleDelete)
            ->setVehicleUpdate($vehicleUpdate)
            ->setAirAdd($airAdd)
            ->setAirDelete($airDelete)
            ->setAirUpdate($airUpdate)
            ->setUniversalAdd($universalAdd)
            ->setUniversalDelete($universalDelete)
            ->setUniversalUpdate($universalUpdate)
            ->setHotelAdd($hotelAdd)
            ->setHotelUpdate($hotelUpdate)
            ->setHotelDelete($hotelDelete)
            ->setPassiveAdd($passiveAdd)
            ->setPassiveDelete($passiveDelete)
            ->setRailUpdate($railUpdate);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get VehicleAdd value
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd|null
     */
    public function getVehicleAdd(): ?\Travelport\UniversalRecord\StructType\VehicleAdd
    {
        return isset($this->VehicleAdd) ? $this->VehicleAdd : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleAdd method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleAddForChoiceConstraintsFromSetVehicleAdd($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleAdd can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleAdd, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleAdd value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleAdd $vehicleAdd
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setVehicleAdd(?\Travelport\UniversalRecord\StructType\VehicleAdd $vehicleAdd = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($vehicleAddChoiceErrorMessage = self::validateVehicleAddForChoiceConstraintsFromSetVehicleAdd($vehicleAdd))) {
            throw new InvalidArgumentException($vehicleAddChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleAdd) || (is_array($vehicleAdd) && empty($vehicleAdd))) {
            unset($this->VehicleAdd);
        } else {
            $this->VehicleAdd = $vehicleAdd;
        }
        
        return $this;
    }
    /**
     * Get VehicleDelete value
     * @return \Travelport\UniversalRecord\StructType\VehicleDelete|null
     */
    public function getVehicleDelete(): ?\Travelport\UniversalRecord\StructType\VehicleDelete
    {
        return isset($this->VehicleDelete) ? $this->VehicleDelete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleDelete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleDeleteForChoiceConstraintsFromSetVehicleDelete($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleDelete can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleDelete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleDelete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDelete $vehicleDelete
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setVehicleDelete(?\Travelport\UniversalRecord\StructType\VehicleDelete $vehicleDelete = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($vehicleDeleteChoiceErrorMessage = self::validateVehicleDeleteForChoiceConstraintsFromSetVehicleDelete($vehicleDelete))) {
            throw new InvalidArgumentException($vehicleDeleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleDelete) || (is_array($vehicleDelete) && empty($vehicleDelete))) {
            unset($this->VehicleDelete);
        } else {
            $this->VehicleDelete = $vehicleDelete;
        }
        
        return $this;
    }
    /**
     * Get VehicleUpdate value
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate|null
     */
    public function getVehicleUpdate(): ?\Travelport\UniversalRecord\StructType\VehicleUpdate
    {
        return isset($this->VehicleUpdate) ? $this->VehicleUpdate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleUpdateForChoiceConstraintsFromSetVehicleUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpdate can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpdate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleUpdate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleUpdate $vehicleUpdate
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setVehicleUpdate(?\Travelport\UniversalRecord\StructType\VehicleUpdate $vehicleUpdate = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($vehicleUpdateChoiceErrorMessage = self::validateVehicleUpdateForChoiceConstraintsFromSetVehicleUpdate($vehicleUpdate))) {
            throw new InvalidArgumentException($vehicleUpdateChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleUpdate) || (is_array($vehicleUpdate) && empty($vehicleUpdate))) {
            unset($this->VehicleUpdate);
        } else {
            $this->VehicleUpdate = $vehicleUpdate;
        }
        
        return $this;
    }
    /**
     * Get AirAdd value
     * @return \Travelport\UniversalRecord\StructType\AirAdd|null
     */
    public function getAirAdd(): ?\Travelport\UniversalRecord\StructType\AirAdd
    {
        return isset($this->AirAdd) ? $this->AirAdd : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirAdd method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirAddForChoiceConstraintsFromSetAirAdd($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirAdd can\'t be set as the property %s is already set. Only one property must be set among these properties: AirAdd, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirAdd value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirAdd $airAdd
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setAirAdd(?\Travelport\UniversalRecord\StructType\AirAdd $airAdd = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($airAddChoiceErrorMessage = self::validateAirAddForChoiceConstraintsFromSetAirAdd($airAdd))) {
            throw new InvalidArgumentException($airAddChoiceErrorMessage, __LINE__);
        }
        if (is_null($airAdd) || (is_array($airAdd) && empty($airAdd))) {
            unset($this->AirAdd);
        } else {
            $this->AirAdd = $airAdd;
        }
        
        return $this;
    }
    /**
     * Get AirDelete value
     * @return \Travelport\UniversalRecord\StructType\AirDelete|null
     */
    public function getAirDelete(): ?\Travelport\UniversalRecord\StructType\AirDelete
    {
        return isset($this->AirDelete) ? $this->AirDelete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirDelete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirDeleteForChoiceConstraintsFromSetAirDelete($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirDelete can\'t be set as the property %s is already set. Only one property must be set among these properties: AirDelete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirDelete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirDelete $airDelete
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setAirDelete(?\Travelport\UniversalRecord\StructType\AirDelete $airDelete = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($airDeleteChoiceErrorMessage = self::validateAirDeleteForChoiceConstraintsFromSetAirDelete($airDelete))) {
            throw new InvalidArgumentException($airDeleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($airDelete) || (is_array($airDelete) && empty($airDelete))) {
            unset($this->AirDelete);
        } else {
            $this->AirDelete = $airDelete;
        }
        
        return $this;
    }
    /**
     * Get AirUpdate value
     * @return \Travelport\UniversalRecord\StructType\AirUpdate|null
     */
    public function getAirUpdate(): ?\Travelport\UniversalRecord\StructType\AirUpdate
    {
        return isset($this->AirUpdate) ? $this->AirUpdate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirUpdateForChoiceConstraintsFromSetAirUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpdate can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpdate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirUpdate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirUpdate $airUpdate
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setAirUpdate(?\Travelport\UniversalRecord\StructType\AirUpdate $airUpdate = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($airUpdateChoiceErrorMessage = self::validateAirUpdateForChoiceConstraintsFromSetAirUpdate($airUpdate))) {
            throw new InvalidArgumentException($airUpdateChoiceErrorMessage, __LINE__);
        }
        if (is_null($airUpdate) || (is_array($airUpdate) && empty($airUpdate))) {
            unset($this->AirUpdate);
        } else {
            $this->AirUpdate = $airUpdate;
        }
        
        return $this;
    }
    /**
     * Get UniversalAdd value
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd|null
     */
    public function getUniversalAdd(): ?\Travelport\UniversalRecord\StructType\UniversalAdd
    {
        return isset($this->UniversalAdd) ? $this->UniversalAdd : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUniversalAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalAdd method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUniversalAddForChoiceConstraintsFromSetUniversalAdd($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UniversalAdd can\'t be set as the property %s is already set. Only one property must be set among these properties: UniversalAdd, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UniversalAdd value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalAdd $universalAdd
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setUniversalAdd(?\Travelport\UniversalRecord\StructType\UniversalAdd $universalAdd = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($universalAddChoiceErrorMessage = self::validateUniversalAddForChoiceConstraintsFromSetUniversalAdd($universalAdd))) {
            throw new InvalidArgumentException($universalAddChoiceErrorMessage, __LINE__);
        }
        if (is_null($universalAdd) || (is_array($universalAdd) && empty($universalAdd))) {
            unset($this->UniversalAdd);
        } else {
            $this->UniversalAdd = $universalAdd;
        }
        
        return $this;
    }
    /**
     * Get UniversalDelete value
     * @return \Travelport\UniversalRecord\StructType\UniversalDelete|null
     */
    public function getUniversalDelete(): ?\Travelport\UniversalRecord\StructType\UniversalDelete
    {
        return isset($this->UniversalDelete) ? $this->UniversalDelete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUniversalDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalDelete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUniversalDeleteForChoiceConstraintsFromSetUniversalDelete($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UniversalDelete can\'t be set as the property %s is already set. Only one property must be set among these properties: UniversalDelete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UniversalDelete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalDelete $universalDelete
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setUniversalDelete(?\Travelport\UniversalRecord\StructType\UniversalDelete $universalDelete = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($universalDeleteChoiceErrorMessage = self::validateUniversalDeleteForChoiceConstraintsFromSetUniversalDelete($universalDelete))) {
            throw new InvalidArgumentException($universalDeleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($universalDelete) || (is_array($universalDelete) && empty($universalDelete))) {
            unset($this->UniversalDelete);
        } else {
            $this->UniversalDelete = $universalDelete;
        }
        
        return $this;
    }
    /**
     * Get UniversalUpdate value
     * @return \Travelport\UniversalRecord\StructType\UniversalUpdate|null
     */
    public function getUniversalUpdate(): ?\Travelport\UniversalRecord\StructType\UniversalUpdate
    {
        return isset($this->UniversalUpdate) ? $this->UniversalUpdate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUniversalUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUniversalUpdateForChoiceConstraintsFromSetUniversalUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UniversalUpdate can\'t be set as the property %s is already set. Only one property must be set among these properties: UniversalUpdate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UniversalUpdate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalUpdate $universalUpdate
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setUniversalUpdate(?\Travelport\UniversalRecord\StructType\UniversalUpdate $universalUpdate = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($universalUpdateChoiceErrorMessage = self::validateUniversalUpdateForChoiceConstraintsFromSetUniversalUpdate($universalUpdate))) {
            throw new InvalidArgumentException($universalUpdateChoiceErrorMessage, __LINE__);
        }
        if (is_null($universalUpdate) || (is_array($universalUpdate) && empty($universalUpdate))) {
            unset($this->UniversalUpdate);
        } else {
            $this->UniversalUpdate = $universalUpdate;
        }
        
        return $this;
    }
    /**
     * Get HotelAdd value
     * @return \Travelport\UniversalRecord\StructType\HotelAdd|null
     */
    public function getHotelAdd(): ?\Travelport\UniversalRecord\StructType\HotelAdd
    {
        return isset($this->HotelAdd) ? $this->HotelAdd : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelAdd method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelAddForChoiceConstraintsFromSetHotelAdd($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelAdd can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelAdd, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelAdd value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelAdd $hotelAdd
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setHotelAdd(?\Travelport\UniversalRecord\StructType\HotelAdd $hotelAdd = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($hotelAddChoiceErrorMessage = self::validateHotelAddForChoiceConstraintsFromSetHotelAdd($hotelAdd))) {
            throw new InvalidArgumentException($hotelAddChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelAdd) || (is_array($hotelAdd) && empty($hotelAdd))) {
            unset($this->HotelAdd);
        } else {
            $this->HotelAdd = $hotelAdd;
        }
        
        return $this;
    }
    /**
     * Get HotelUpdate value
     * @return \Travelport\UniversalRecord\StructType\HotelUpdate|null
     */
    public function getHotelUpdate(): ?\Travelport\UniversalRecord\StructType\HotelUpdate
    {
        return isset($this->HotelUpdate) ? $this->HotelUpdate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelUpdateForChoiceConstraintsFromSetHotelUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpdate can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpdate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelUpdate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelUpdate $hotelUpdate
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setHotelUpdate(?\Travelport\UniversalRecord\StructType\HotelUpdate $hotelUpdate = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($hotelUpdateChoiceErrorMessage = self::validateHotelUpdateForChoiceConstraintsFromSetHotelUpdate($hotelUpdate))) {
            throw new InvalidArgumentException($hotelUpdateChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelUpdate) || (is_array($hotelUpdate) && empty($hotelUpdate))) {
            unset($this->HotelUpdate);
        } else {
            $this->HotelUpdate = $hotelUpdate;
        }
        
        return $this;
    }
    /**
     * Get HotelDelete value
     * @return \Travelport\UniversalRecord\StructType\HotelDelete|null
     */
    public function getHotelDelete(): ?\Travelport\UniversalRecord\StructType\HotelDelete
    {
        return isset($this->HotelDelete) ? $this->HotelDelete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelDelete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelDeleteForChoiceConstraintsFromSetHotelDelete($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'PassiveAdd',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelDelete can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelDelete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelDelete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDelete $hotelDelete
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setHotelDelete(?\Travelport\UniversalRecord\StructType\HotelDelete $hotelDelete = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($hotelDeleteChoiceErrorMessage = self::validateHotelDeleteForChoiceConstraintsFromSetHotelDelete($hotelDelete))) {
            throw new InvalidArgumentException($hotelDeleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelDelete) || (is_array($hotelDelete) && empty($hotelDelete))) {
            unset($this->HotelDelete);
        } else {
            $this->HotelDelete = $hotelDelete;
        }
        
        return $this;
    }
    /**
     * Get PassiveAdd value
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd|null
     */
    public function getPassiveAdd(): ?\Travelport\UniversalRecord\StructType\PassiveAdd
    {
        return isset($this->PassiveAdd) ? $this->PassiveAdd : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPassiveAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveAdd method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassiveAddForChoiceConstraintsFromSetPassiveAdd($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveDelete',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassiveAdd can\'t be set as the property %s is already set. Only one property must be set among these properties: PassiveAdd, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PassiveAdd value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveAdd $passiveAdd
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setPassiveAdd(?\Travelport\UniversalRecord\StructType\PassiveAdd $passiveAdd = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($passiveAddChoiceErrorMessage = self::validatePassiveAddForChoiceConstraintsFromSetPassiveAdd($passiveAdd))) {
            throw new InvalidArgumentException($passiveAddChoiceErrorMessage, __LINE__);
        }
        if (is_null($passiveAdd) || (is_array($passiveAdd) && empty($passiveAdd))) {
            unset($this->PassiveAdd);
        } else {
            $this->PassiveAdd = $passiveAdd;
        }
        
        return $this;
    }
    /**
     * Get PassiveDelete value
     * @return \Travelport\UniversalRecord\StructType\PassiveDelete|null
     */
    public function getPassiveDelete(): ?\Travelport\UniversalRecord\StructType\PassiveDelete
    {
        return isset($this->PassiveDelete) ? $this->PassiveDelete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPassiveDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveDelete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassiveDeleteForChoiceConstraintsFromSetPassiveDelete($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'RailUpdate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassiveDelete can\'t be set as the property %s is already set. Only one property must be set among these properties: PassiveDelete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PassiveDelete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveDelete $passiveDelete
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setPassiveDelete(?\Travelport\UniversalRecord\StructType\PassiveDelete $passiveDelete = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($passiveDeleteChoiceErrorMessage = self::validatePassiveDeleteForChoiceConstraintsFromSetPassiveDelete($passiveDelete))) {
            throw new InvalidArgumentException($passiveDeleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($passiveDelete) || (is_array($passiveDelete) && empty($passiveDelete))) {
            unset($this->PassiveDelete);
        } else {
            $this->PassiveDelete = $passiveDelete;
        }
        
        return $this;
    }
    /**
     * Get RailUpdate value
     * @return \Travelport\UniversalRecord\StructType\RailUpdate|null
     */
    public function getRailUpdate(): ?\Travelport\UniversalRecord\StructType\RailUpdate
    {
        return isset($this->RailUpdate) ? $this->RailUpdate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRailUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailUpdateForChoiceConstraintsFromSetRailUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VehicleAdd',
            'VehicleDelete',
            'VehicleUpdate',
            'AirAdd',
            'AirDelete',
            'AirUpdate',
            'UniversalAdd',
            'UniversalDelete',
            'UniversalUpdate',
            'HotelAdd',
            'HotelUpdate',
            'HotelDelete',
            'PassiveAdd',
            'PassiveDelete',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailUpdate can\'t be set as the property %s is already set. Only one property must be set among these properties: RailUpdate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailUpdate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailUpdate $railUpdate
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd
     */
    public function setRailUpdate(?\Travelport\UniversalRecord\StructType\RailUpdate $railUpdate = null): self
    {
        // validation for constraint: choice(VehicleAdd, VehicleDelete, VehicleUpdate, AirAdd, AirDelete, AirUpdate, UniversalAdd, UniversalDelete, UniversalUpdate, HotelAdd, HotelUpdate, HotelDelete, PassiveAdd, PassiveDelete, RailUpdate)
        if ('' !== ($railUpdateChoiceErrorMessage = self::validateRailUpdateForChoiceConstraintsFromSetRailUpdate($railUpdate))) {
            throw new InvalidArgumentException($railUpdateChoiceErrorMessage, __LINE__);
        }
        if (is_null($railUpdate) || (is_array($railUpdate) && empty($railUpdate))) {
            unset($this->RailUpdate);
        } else {
            $this->RailUpdate = $railUpdate;
        }
        
        return $this;
    }
}
