<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Wraps all Upsell Admin commands related to Vehicle.
 * @subpackage Structs
 */
class VehicleUpsellCriteria extends AbstractStructBase
{
    /**
     * The VehicleUpsellAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleUpsellAdd
     * @var \Travelport\Util\StructType\VehicleUpsellAdd[]
     */
    protected ?array $VehicleUpsellAdd = null;
    /**
     * The VehicleUpsellUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleUpsellUpdate
     * @var \Travelport\Util\StructType\VehicleUpsellUpdate[]
     */
    protected ?array $VehicleUpsellUpdate = null;
    /**
     * The VehicleUpsellDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleUpsellDelete
     * @var \Travelport\Util\StructType\VehicleUpsellDelete[]
     */
    protected ?array $VehicleUpsellDelete = null;
    /**
     * Constructor method for VehicleUpsellCriteria
     * @uses VehicleUpsellCriteria::setVehicleUpsellAdd()
     * @uses VehicleUpsellCriteria::setVehicleUpsellUpdate()
     * @uses VehicleUpsellCriteria::setVehicleUpsellDelete()
     * @param \Travelport\Util\StructType\VehicleUpsellAdd[] $vehicleUpsellAdd
     * @param \Travelport\Util\StructType\VehicleUpsellUpdate[] $vehicleUpsellUpdate
     * @param \Travelport\Util\StructType\VehicleUpsellDelete[] $vehicleUpsellDelete
     */
    public function __construct(?array $vehicleUpsellAdd = null, ?array $vehicleUpsellUpdate = null, ?array $vehicleUpsellDelete = null)
    {
        $this
            ->setVehicleUpsellAdd($vehicleUpsellAdd)
            ->setVehicleUpsellUpdate($vehicleUpsellUpdate)
            ->setVehicleUpsellDelete($vehicleUpsellDelete);
    }
    /**
     * Get VehicleUpsellAdd value
     * @return \Travelport\Util\StructType\VehicleUpsellAdd[]
     */
    public function getVehicleUpsellAdd(): ?array
    {
        return $this->VehicleUpsellAdd;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleUpsellAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellAdd method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleUpsellAddForArrayConstraintFromSetVehicleUpsellAdd(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleUpsellCriteriaVehicleUpsellAddItem) {
            // validation for constraint: itemType
            if (!$vehicleUpsellCriteriaVehicleUpsellAddItem instanceof \Travelport\Util\StructType\VehicleUpsellAdd) {
                $invalidValues[] = is_object($vehicleUpsellCriteriaVehicleUpsellAddItem) ? get_class($vehicleUpsellCriteriaVehicleUpsellAddItem) : sprintf('%s(%s)', gettype($vehicleUpsellCriteriaVehicleUpsellAddItem), var_export($vehicleUpsellCriteriaVehicleUpsellAddItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleUpsellAdd property can only contain items of type \Travelport\Util\StructType\VehicleUpsellAdd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleUpsellAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellAdd[] $vehicleUpsellAdd
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria
     */
    public function setVehicleUpsellAdd(?array $vehicleUpsellAdd = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleUpsellAddArrayErrorMessage = self::validateVehicleUpsellAddForArrayConstraintFromSetVehicleUpsellAdd($vehicleUpsellAdd))) {
            throw new InvalidArgumentException($vehicleUpsellAddArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleUpsellAdd) && count($vehicleUpsellAdd) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleUpsellAdd)), __LINE__);
        }
        $this->VehicleUpsellAdd = $vehicleUpsellAdd;
        
        return $this;
    }
    /**
     * Add item to VehicleUpsellAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellAdd $item
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria
     */
    public function addToVehicleUpsellAdd(\Travelport\Util\StructType\VehicleUpsellAdd $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VehicleUpsellAdd) {
            throw new InvalidArgumentException(sprintf('The VehicleUpsellAdd property can only contain items of type \Travelport\Util\StructType\VehicleUpsellAdd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleUpsellAdd) && count($this->VehicleUpsellAdd) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleUpsellAdd)), __LINE__);
        }
        $this->VehicleUpsellAdd[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleUpsellUpdate value
     * @return \Travelport\Util\StructType\VehicleUpsellUpdate[]
     */
    public function getVehicleUpsellUpdate(): ?array
    {
        return $this->VehicleUpsellUpdate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleUpsellUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellUpdate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleUpsellUpdateForArrayConstraintFromSetVehicleUpsellUpdate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleUpsellCriteriaVehicleUpsellUpdateItem) {
            // validation for constraint: itemType
            if (!$vehicleUpsellCriteriaVehicleUpsellUpdateItem instanceof \Travelport\Util\StructType\VehicleUpsellUpdate) {
                $invalidValues[] = is_object($vehicleUpsellCriteriaVehicleUpsellUpdateItem) ? get_class($vehicleUpsellCriteriaVehicleUpsellUpdateItem) : sprintf('%s(%s)', gettype($vehicleUpsellCriteriaVehicleUpsellUpdateItem), var_export($vehicleUpsellCriteriaVehicleUpsellUpdateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleUpsellUpdate property can only contain items of type \Travelport\Util\StructType\VehicleUpsellUpdate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleUpsellUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellUpdate[] $vehicleUpsellUpdate
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria
     */
    public function setVehicleUpsellUpdate(?array $vehicleUpsellUpdate = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleUpsellUpdateArrayErrorMessage = self::validateVehicleUpsellUpdateForArrayConstraintFromSetVehicleUpsellUpdate($vehicleUpsellUpdate))) {
            throw new InvalidArgumentException($vehicleUpsellUpdateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleUpsellUpdate) && count($vehicleUpsellUpdate) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleUpsellUpdate)), __LINE__);
        }
        $this->VehicleUpsellUpdate = $vehicleUpsellUpdate;
        
        return $this;
    }
    /**
     * Add item to VehicleUpsellUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellUpdate $item
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria
     */
    public function addToVehicleUpsellUpdate(\Travelport\Util\StructType\VehicleUpsellUpdate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VehicleUpsellUpdate) {
            throw new InvalidArgumentException(sprintf('The VehicleUpsellUpdate property can only contain items of type \Travelport\Util\StructType\VehicleUpsellUpdate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleUpsellUpdate) && count($this->VehicleUpsellUpdate) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleUpsellUpdate)), __LINE__);
        }
        $this->VehicleUpsellUpdate[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleUpsellDelete value
     * @return \Travelport\Util\StructType\VehicleUpsellDelete[]
     */
    public function getVehicleUpsellDelete(): ?array
    {
        return $this->VehicleUpsellDelete;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleUpsellDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellDelete method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleUpsellDeleteForArrayConstraintFromSetVehicleUpsellDelete(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleUpsellCriteriaVehicleUpsellDeleteItem) {
            // validation for constraint: itemType
            if (!$vehicleUpsellCriteriaVehicleUpsellDeleteItem instanceof \Travelport\Util\StructType\VehicleUpsellDelete) {
                $invalidValues[] = is_object($vehicleUpsellCriteriaVehicleUpsellDeleteItem) ? get_class($vehicleUpsellCriteriaVehicleUpsellDeleteItem) : sprintf('%s(%s)', gettype($vehicleUpsellCriteriaVehicleUpsellDeleteItem), var_export($vehicleUpsellCriteriaVehicleUpsellDeleteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleUpsellDelete property can only contain items of type \Travelport\Util\StructType\VehicleUpsellDelete, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleUpsellDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellDelete[] $vehicleUpsellDelete
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria
     */
    public function setVehicleUpsellDelete(?array $vehicleUpsellDelete = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleUpsellDeleteArrayErrorMessage = self::validateVehicleUpsellDeleteForArrayConstraintFromSetVehicleUpsellDelete($vehicleUpsellDelete))) {
            throw new InvalidArgumentException($vehicleUpsellDeleteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleUpsellDelete) && count($vehicleUpsellDelete) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleUpsellDelete)), __LINE__);
        }
        $this->VehicleUpsellDelete = $vehicleUpsellDelete;
        
        return $this;
    }
    /**
     * Add item to VehicleUpsellDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellDelete $item
     * @return \Travelport\Util\StructType\VehicleUpsellCriteria
     */
    public function addToVehicleUpsellDelete(\Travelport\Util\StructType\VehicleUpsellDelete $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VehicleUpsellDelete) {
            throw new InvalidArgumentException(sprintf('The VehicleUpsellDelete property can only contain items of type \Travelport\Util\StructType\VehicleUpsellDelete, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleUpsellDelete) && count($this->VehicleUpsellDelete) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleUpsellDelete)), __LINE__);
        }
        $this->VehicleUpsellDelete[] = $item;
        
        return $this;
    }
}
