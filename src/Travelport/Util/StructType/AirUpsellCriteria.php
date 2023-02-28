<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpsellCriteria StructType
 * @subpackage Structs
 */
class AirUpsellCriteria extends AbstractStructBase
{
    /**
     * The AirUpsellAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirUpsellAdd
     * @var \Travelport\Util\StructType\AirUpsellAdd[]
     */
    protected ?array $AirUpsellAdd = null;
    /**
     * The AirUpsellUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirUpsellUpdate
     * @var \Travelport\Util\StructType\AirUpsellUpdate[]
     */
    protected ?array $AirUpsellUpdate = null;
    /**
     * The AirUpsellDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirUpsellDelete
     * @var \Travelport\Util\StructType\AirUpsellDelete[]
     */
    protected ?array $AirUpsellDelete = null;
    /**
     * Constructor method for AirUpsellCriteria
     * @uses AirUpsellCriteria::setAirUpsellAdd()
     * @uses AirUpsellCriteria::setAirUpsellUpdate()
     * @uses AirUpsellCriteria::setAirUpsellDelete()
     * @param \Travelport\Util\StructType\AirUpsellAdd[] $airUpsellAdd
     * @param \Travelport\Util\StructType\AirUpsellUpdate[] $airUpsellUpdate
     * @param \Travelport\Util\StructType\AirUpsellDelete[] $airUpsellDelete
     */
    public function __construct(?array $airUpsellAdd = null, ?array $airUpsellUpdate = null, ?array $airUpsellDelete = null)
    {
        $this
            ->setAirUpsellAdd($airUpsellAdd)
            ->setAirUpsellUpdate($airUpsellUpdate)
            ->setAirUpsellDelete($airUpsellDelete);
    }
    /**
     * Get AirUpsellAdd value
     * @return \Travelport\Util\StructType\AirUpsellAdd[]
     */
    public function getAirUpsellAdd(): ?array
    {
        return $this->AirUpsellAdd;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirUpsellAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellAdd method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirUpsellAddForArrayConstraintFromSetAirUpsellAdd(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airUpsellCriteriaAirUpsellAddItem) {
            // validation for constraint: itemType
            if (!$airUpsellCriteriaAirUpsellAddItem instanceof \Travelport\Util\StructType\AirUpsellAdd) {
                $invalidValues[] = is_object($airUpsellCriteriaAirUpsellAddItem) ? get_class($airUpsellCriteriaAirUpsellAddItem) : sprintf('%s(%s)', gettype($airUpsellCriteriaAirUpsellAddItem), var_export($airUpsellCriteriaAirUpsellAddItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirUpsellAdd property can only contain items of type \Travelport\Util\StructType\AirUpsellAdd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirUpsellAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellAdd[] $airUpsellAdd
     * @return \Travelport\Util\StructType\AirUpsellCriteria
     */
    public function setAirUpsellAdd(?array $airUpsellAdd = null): self
    {
        // validation for constraint: array
        if ('' !== ($airUpsellAddArrayErrorMessage = self::validateAirUpsellAddForArrayConstraintFromSetAirUpsellAdd($airUpsellAdd))) {
            throw new InvalidArgumentException($airUpsellAddArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airUpsellAdd) && count($airUpsellAdd) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airUpsellAdd)), __LINE__);
        }
        $this->AirUpsellAdd = $airUpsellAdd;
        
        return $this;
    }
    /**
     * Add item to AirUpsellAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellAdd $item
     * @return \Travelport\Util\StructType\AirUpsellCriteria
     */
    public function addToAirUpsellAdd(\Travelport\Util\StructType\AirUpsellAdd $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirUpsellAdd) {
            throw new InvalidArgumentException(sprintf('The AirUpsellAdd property can only contain items of type \Travelport\Util\StructType\AirUpsellAdd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirUpsellAdd) && count($this->AirUpsellAdd) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirUpsellAdd)), __LINE__);
        }
        $this->AirUpsellAdd[] = $item;
        
        return $this;
    }
    /**
     * Get AirUpsellUpdate value
     * @return \Travelport\Util\StructType\AirUpsellUpdate[]
     */
    public function getAirUpsellUpdate(): ?array
    {
        return $this->AirUpsellUpdate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirUpsellUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellUpdate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirUpsellUpdateForArrayConstraintFromSetAirUpsellUpdate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airUpsellCriteriaAirUpsellUpdateItem) {
            // validation for constraint: itemType
            if (!$airUpsellCriteriaAirUpsellUpdateItem instanceof \Travelport\Util\StructType\AirUpsellUpdate) {
                $invalidValues[] = is_object($airUpsellCriteriaAirUpsellUpdateItem) ? get_class($airUpsellCriteriaAirUpsellUpdateItem) : sprintf('%s(%s)', gettype($airUpsellCriteriaAirUpsellUpdateItem), var_export($airUpsellCriteriaAirUpsellUpdateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirUpsellUpdate property can only contain items of type \Travelport\Util\StructType\AirUpsellUpdate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirUpsellUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellUpdate[] $airUpsellUpdate
     * @return \Travelport\Util\StructType\AirUpsellCriteria
     */
    public function setAirUpsellUpdate(?array $airUpsellUpdate = null): self
    {
        // validation for constraint: array
        if ('' !== ($airUpsellUpdateArrayErrorMessage = self::validateAirUpsellUpdateForArrayConstraintFromSetAirUpsellUpdate($airUpsellUpdate))) {
            throw new InvalidArgumentException($airUpsellUpdateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airUpsellUpdate) && count($airUpsellUpdate) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airUpsellUpdate)), __LINE__);
        }
        $this->AirUpsellUpdate = $airUpsellUpdate;
        
        return $this;
    }
    /**
     * Add item to AirUpsellUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellUpdate $item
     * @return \Travelport\Util\StructType\AirUpsellCriteria
     */
    public function addToAirUpsellUpdate(\Travelport\Util\StructType\AirUpsellUpdate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirUpsellUpdate) {
            throw new InvalidArgumentException(sprintf('The AirUpsellUpdate property can only contain items of type \Travelport\Util\StructType\AirUpsellUpdate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirUpsellUpdate) && count($this->AirUpsellUpdate) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirUpsellUpdate)), __LINE__);
        }
        $this->AirUpsellUpdate[] = $item;
        
        return $this;
    }
    /**
     * Get AirUpsellDelete value
     * @return \Travelport\Util\StructType\AirUpsellDelete[]
     */
    public function getAirUpsellDelete(): ?array
    {
        return $this->AirUpsellDelete;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirUpsellDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellDelete method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirUpsellDeleteForArrayConstraintFromSetAirUpsellDelete(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airUpsellCriteriaAirUpsellDeleteItem) {
            // validation for constraint: itemType
            if (!$airUpsellCriteriaAirUpsellDeleteItem instanceof \Travelport\Util\StructType\AirUpsellDelete) {
                $invalidValues[] = is_object($airUpsellCriteriaAirUpsellDeleteItem) ? get_class($airUpsellCriteriaAirUpsellDeleteItem) : sprintf('%s(%s)', gettype($airUpsellCriteriaAirUpsellDeleteItem), var_export($airUpsellCriteriaAirUpsellDeleteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirUpsellDelete property can only contain items of type \Travelport\Util\StructType\AirUpsellDelete, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirUpsellDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellDelete[] $airUpsellDelete
     * @return \Travelport\Util\StructType\AirUpsellCriteria
     */
    public function setAirUpsellDelete(?array $airUpsellDelete = null): self
    {
        // validation for constraint: array
        if ('' !== ($airUpsellDeleteArrayErrorMessage = self::validateAirUpsellDeleteForArrayConstraintFromSetAirUpsellDelete($airUpsellDelete))) {
            throw new InvalidArgumentException($airUpsellDeleteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airUpsellDelete) && count($airUpsellDelete) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airUpsellDelete)), __LINE__);
        }
        $this->AirUpsellDelete = $airUpsellDelete;
        
        return $this;
    }
    /**
     * Add item to AirUpsellDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellDelete $item
     * @return \Travelport\Util\StructType\AirUpsellCriteria
     */
    public function addToAirUpsellDelete(\Travelport\Util\StructType\AirUpsellDelete $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirUpsellDelete) {
            throw new InvalidArgumentException(sprintf('The AirUpsellDelete property can only contain items of type \Travelport\Util\StructType\AirUpsellDelete, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirUpsellDelete) && count($this->AirUpsellDelete) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirUpsellDelete)), __LINE__);
        }
        $this->AirUpsellDelete[] = $item;
        
        return $this;
    }
}
