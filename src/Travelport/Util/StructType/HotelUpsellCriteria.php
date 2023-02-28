<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Wraps all Upsell Admin commands related to Hotel.
 * @subpackage Structs
 */
class HotelUpsellCriteria extends AbstractStructBase
{
    /**
     * The HotelUpsellAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelUpsellAdd
     * @var \Travelport\Util\StructType\HotelUpsellAdd[]
     */
    protected ?array $HotelUpsellAdd = null;
    /**
     * The HotelUpsellUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelUpsellUpdate
     * @var \Travelport\Util\StructType\HotelUpsellUpdate[]
     */
    protected ?array $HotelUpsellUpdate = null;
    /**
     * The HotelUpsellDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelUpsellDelete
     * @var \Travelport\Util\StructType\HotelUpsellDelete[]
     */
    protected ?array $HotelUpsellDelete = null;
    /**
     * Constructor method for HotelUpsellCriteria
     * @uses HotelUpsellCriteria::setHotelUpsellAdd()
     * @uses HotelUpsellCriteria::setHotelUpsellUpdate()
     * @uses HotelUpsellCriteria::setHotelUpsellDelete()
     * @param \Travelport\Util\StructType\HotelUpsellAdd[] $hotelUpsellAdd
     * @param \Travelport\Util\StructType\HotelUpsellUpdate[] $hotelUpsellUpdate
     * @param \Travelport\Util\StructType\HotelUpsellDelete[] $hotelUpsellDelete
     */
    public function __construct(?array $hotelUpsellAdd = null, ?array $hotelUpsellUpdate = null, ?array $hotelUpsellDelete = null)
    {
        $this
            ->setHotelUpsellAdd($hotelUpsellAdd)
            ->setHotelUpsellUpdate($hotelUpsellUpdate)
            ->setHotelUpsellDelete($hotelUpsellDelete);
    }
    /**
     * Get HotelUpsellAdd value
     * @return \Travelport\Util\StructType\HotelUpsellAdd[]
     */
    public function getHotelUpsellAdd(): ?array
    {
        return $this->HotelUpsellAdd;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelUpsellAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellAdd method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelUpsellAddForArrayConstraintFromSetHotelUpsellAdd(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelUpsellCriteriaHotelUpsellAddItem) {
            // validation for constraint: itemType
            if (!$hotelUpsellCriteriaHotelUpsellAddItem instanceof \Travelport\Util\StructType\HotelUpsellAdd) {
                $invalidValues[] = is_object($hotelUpsellCriteriaHotelUpsellAddItem) ? get_class($hotelUpsellCriteriaHotelUpsellAddItem) : sprintf('%s(%s)', gettype($hotelUpsellCriteriaHotelUpsellAddItem), var_export($hotelUpsellCriteriaHotelUpsellAddItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelUpsellAdd property can only contain items of type \Travelport\Util\StructType\HotelUpsellAdd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelUpsellAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellAdd[] $hotelUpsellAdd
     * @return \Travelport\Util\StructType\HotelUpsellCriteria
     */
    public function setHotelUpsellAdd(?array $hotelUpsellAdd = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelUpsellAddArrayErrorMessage = self::validateHotelUpsellAddForArrayConstraintFromSetHotelUpsellAdd($hotelUpsellAdd))) {
            throw new InvalidArgumentException($hotelUpsellAddArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelUpsellAdd) && count($hotelUpsellAdd) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelUpsellAdd)), __LINE__);
        }
        $this->HotelUpsellAdd = $hotelUpsellAdd;
        
        return $this;
    }
    /**
     * Add item to HotelUpsellAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellAdd $item
     * @return \Travelport\Util\StructType\HotelUpsellCriteria
     */
    public function addToHotelUpsellAdd(\Travelport\Util\StructType\HotelUpsellAdd $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HotelUpsellAdd) {
            throw new InvalidArgumentException(sprintf('The HotelUpsellAdd property can only contain items of type \Travelport\Util\StructType\HotelUpsellAdd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelUpsellAdd) && count($this->HotelUpsellAdd) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelUpsellAdd)), __LINE__);
        }
        $this->HotelUpsellAdd[] = $item;
        
        return $this;
    }
    /**
     * Get HotelUpsellUpdate value
     * @return \Travelport\Util\StructType\HotelUpsellUpdate[]
     */
    public function getHotelUpsellUpdate(): ?array
    {
        return $this->HotelUpsellUpdate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelUpsellUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellUpdate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelUpsellUpdateForArrayConstraintFromSetHotelUpsellUpdate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelUpsellCriteriaHotelUpsellUpdateItem) {
            // validation for constraint: itemType
            if (!$hotelUpsellCriteriaHotelUpsellUpdateItem instanceof \Travelport\Util\StructType\HotelUpsellUpdate) {
                $invalidValues[] = is_object($hotelUpsellCriteriaHotelUpsellUpdateItem) ? get_class($hotelUpsellCriteriaHotelUpsellUpdateItem) : sprintf('%s(%s)', gettype($hotelUpsellCriteriaHotelUpsellUpdateItem), var_export($hotelUpsellCriteriaHotelUpsellUpdateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelUpsellUpdate property can only contain items of type \Travelport\Util\StructType\HotelUpsellUpdate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelUpsellUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellUpdate[] $hotelUpsellUpdate
     * @return \Travelport\Util\StructType\HotelUpsellCriteria
     */
    public function setHotelUpsellUpdate(?array $hotelUpsellUpdate = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelUpsellUpdateArrayErrorMessage = self::validateHotelUpsellUpdateForArrayConstraintFromSetHotelUpsellUpdate($hotelUpsellUpdate))) {
            throw new InvalidArgumentException($hotelUpsellUpdateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelUpsellUpdate) && count($hotelUpsellUpdate) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelUpsellUpdate)), __LINE__);
        }
        $this->HotelUpsellUpdate = $hotelUpsellUpdate;
        
        return $this;
    }
    /**
     * Add item to HotelUpsellUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellUpdate $item
     * @return \Travelport\Util\StructType\HotelUpsellCriteria
     */
    public function addToHotelUpsellUpdate(\Travelport\Util\StructType\HotelUpsellUpdate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HotelUpsellUpdate) {
            throw new InvalidArgumentException(sprintf('The HotelUpsellUpdate property can only contain items of type \Travelport\Util\StructType\HotelUpsellUpdate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelUpsellUpdate) && count($this->HotelUpsellUpdate) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelUpsellUpdate)), __LINE__);
        }
        $this->HotelUpsellUpdate[] = $item;
        
        return $this;
    }
    /**
     * Get HotelUpsellDelete value
     * @return \Travelport\Util\StructType\HotelUpsellDelete[]
     */
    public function getHotelUpsellDelete(): ?array
    {
        return $this->HotelUpsellDelete;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelUpsellDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellDelete method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelUpsellDeleteForArrayConstraintFromSetHotelUpsellDelete(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelUpsellCriteriaHotelUpsellDeleteItem) {
            // validation for constraint: itemType
            if (!$hotelUpsellCriteriaHotelUpsellDeleteItem instanceof \Travelport\Util\StructType\HotelUpsellDelete) {
                $invalidValues[] = is_object($hotelUpsellCriteriaHotelUpsellDeleteItem) ? get_class($hotelUpsellCriteriaHotelUpsellDeleteItem) : sprintf('%s(%s)', gettype($hotelUpsellCriteriaHotelUpsellDeleteItem), var_export($hotelUpsellCriteriaHotelUpsellDeleteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelUpsellDelete property can only contain items of type \Travelport\Util\StructType\HotelUpsellDelete, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelUpsellDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellDelete[] $hotelUpsellDelete
     * @return \Travelport\Util\StructType\HotelUpsellCriteria
     */
    public function setHotelUpsellDelete(?array $hotelUpsellDelete = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelUpsellDeleteArrayErrorMessage = self::validateHotelUpsellDeleteForArrayConstraintFromSetHotelUpsellDelete($hotelUpsellDelete))) {
            throw new InvalidArgumentException($hotelUpsellDeleteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelUpsellDelete) && count($hotelUpsellDelete) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelUpsellDelete)), __LINE__);
        }
        $this->HotelUpsellDelete = $hotelUpsellDelete;
        
        return $this;
    }
    /**
     * Add item to HotelUpsellDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellDelete $item
     * @return \Travelport\Util\StructType\HotelUpsellCriteria
     */
    public function addToHotelUpsellDelete(\Travelport\Util\StructType\HotelUpsellDelete $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HotelUpsellDelete) {
            throw new InvalidArgumentException(sprintf('The HotelUpsellDelete property can only contain items of type \Travelport\Util\StructType\HotelUpsellDelete, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelUpsellDelete) && count($this->HotelUpsellDelete) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelUpsellDelete)), __LINE__);
        }
        $this->HotelUpsellDelete[] = $item;
        
        return $this;
    }
}
