<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandedFareAdminReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Admin request to add/update or delete Branded fare.
 * @subpackage Structs
 */
class BrandedFareAdminReq extends BaseReq
{
    /**
     * The FareFamilyAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareFamilyAdd
     * @var \Travelport\Util\StructType\FareFamilyAdd[]
     */
    protected ?array $FareFamilyAdd = null;
    /**
     * The FareFamilyUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareFamilyUpdate
     * @var \Travelport\Util\StructType\FareFamilyUpdate[]
     */
    protected ?array $FareFamilyUpdate = null;
    /**
     * The FareFamilyDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareFamilyDelete
     * @var \Travelport\Util\StructType\FareFamilyDelete[]
     */
    protected ?array $FareFamilyDelete = null;
    /**
     * Constructor method for BrandedFareAdminReq
     * @uses BrandedFareAdminReq::setFareFamilyAdd()
     * @uses BrandedFareAdminReq::setFareFamilyUpdate()
     * @uses BrandedFareAdminReq::setFareFamilyDelete()
     * @param \Travelport\Util\StructType\FareFamilyAdd[] $fareFamilyAdd
     * @param \Travelport\Util\StructType\FareFamilyUpdate[] $fareFamilyUpdate
     * @param \Travelport\Util\StructType\FareFamilyDelete[] $fareFamilyDelete
     */
    public function __construct(?array $fareFamilyAdd = null, ?array $fareFamilyUpdate = null, ?array $fareFamilyDelete = null)
    {
        $this
            ->setFareFamilyAdd($fareFamilyAdd)
            ->setFareFamilyUpdate($fareFamilyUpdate)
            ->setFareFamilyDelete($fareFamilyDelete);
    }
    /**
     * Get FareFamilyAdd value
     * @return \Travelport\Util\StructType\FareFamilyAdd[]
     */
    public function getFareFamilyAdd(): ?array
    {
        return $this->FareFamilyAdd;
    }
    /**
     * This method is responsible for validating the values passed to the setFareFamilyAdd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareFamilyAdd method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareFamilyAddForArrayConstraintsFromSetFareFamilyAdd(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandedFareAdminReqFareFamilyAddItem) {
            // validation for constraint: itemType
            if (!$brandedFareAdminReqFareFamilyAddItem instanceof \Travelport\Util\StructType\FareFamilyAdd) {
                $invalidValues[] = is_object($brandedFareAdminReqFareFamilyAddItem) ? get_class($brandedFareAdminReqFareFamilyAddItem) : sprintf('%s(%s)', gettype($brandedFareAdminReqFareFamilyAddItem), var_export($brandedFareAdminReqFareFamilyAddItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareFamilyAdd property can only contain items of type \Travelport\Util\StructType\FareFamilyAdd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareFamilyAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamilyAdd[] $fareFamilyAdd
     * @return \Travelport\Util\StructType\BrandedFareAdminReq
     */
    public function setFareFamilyAdd(?array $fareFamilyAdd = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareFamilyAddArrayErrorMessage = self::validateFareFamilyAddForArrayConstraintsFromSetFareFamilyAdd($fareFamilyAdd))) {
            throw new InvalidArgumentException($fareFamilyAddArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareFamilyAdd) && count($fareFamilyAdd) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareFamilyAdd)), __LINE__);
        }
        $this->FareFamilyAdd = $fareFamilyAdd;
        
        return $this;
    }
    /**
     * Add item to FareFamilyAdd value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamilyAdd $item
     * @return \Travelport\Util\StructType\BrandedFareAdminReq
     */
    public function addToFareFamilyAdd(\Travelport\Util\StructType\FareFamilyAdd $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareFamilyAdd) {
            throw new InvalidArgumentException(sprintf('The FareFamilyAdd property can only contain items of type \Travelport\Util\StructType\FareFamilyAdd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareFamilyAdd) && count($this->FareFamilyAdd) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareFamilyAdd)), __LINE__);
        }
        $this->FareFamilyAdd[] = $item;
        
        return $this;
    }
    /**
     * Get FareFamilyUpdate value
     * @return \Travelport\Util\StructType\FareFamilyUpdate[]
     */
    public function getFareFamilyUpdate(): ?array
    {
        return $this->FareFamilyUpdate;
    }
    /**
     * This method is responsible for validating the values passed to the setFareFamilyUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareFamilyUpdate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareFamilyUpdateForArrayConstraintsFromSetFareFamilyUpdate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandedFareAdminReqFareFamilyUpdateItem) {
            // validation for constraint: itemType
            if (!$brandedFareAdminReqFareFamilyUpdateItem instanceof \Travelport\Util\StructType\FareFamilyUpdate) {
                $invalidValues[] = is_object($brandedFareAdminReqFareFamilyUpdateItem) ? get_class($brandedFareAdminReqFareFamilyUpdateItem) : sprintf('%s(%s)', gettype($brandedFareAdminReqFareFamilyUpdateItem), var_export($brandedFareAdminReqFareFamilyUpdateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareFamilyUpdate property can only contain items of type \Travelport\Util\StructType\FareFamilyUpdate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareFamilyUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamilyUpdate[] $fareFamilyUpdate
     * @return \Travelport\Util\StructType\BrandedFareAdminReq
     */
    public function setFareFamilyUpdate(?array $fareFamilyUpdate = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareFamilyUpdateArrayErrorMessage = self::validateFareFamilyUpdateForArrayConstraintsFromSetFareFamilyUpdate($fareFamilyUpdate))) {
            throw new InvalidArgumentException($fareFamilyUpdateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareFamilyUpdate) && count($fareFamilyUpdate) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareFamilyUpdate)), __LINE__);
        }
        $this->FareFamilyUpdate = $fareFamilyUpdate;
        
        return $this;
    }
    /**
     * Add item to FareFamilyUpdate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamilyUpdate $item
     * @return \Travelport\Util\StructType\BrandedFareAdminReq
     */
    public function addToFareFamilyUpdate(\Travelport\Util\StructType\FareFamilyUpdate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareFamilyUpdate) {
            throw new InvalidArgumentException(sprintf('The FareFamilyUpdate property can only contain items of type \Travelport\Util\StructType\FareFamilyUpdate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareFamilyUpdate) && count($this->FareFamilyUpdate) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareFamilyUpdate)), __LINE__);
        }
        $this->FareFamilyUpdate[] = $item;
        
        return $this;
    }
    /**
     * Get FareFamilyDelete value
     * @return \Travelport\Util\StructType\FareFamilyDelete[]
     */
    public function getFareFamilyDelete(): ?array
    {
        return $this->FareFamilyDelete;
    }
    /**
     * This method is responsible for validating the values passed to the setFareFamilyDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareFamilyDelete method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareFamilyDeleteForArrayConstraintsFromSetFareFamilyDelete(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandedFareAdminReqFareFamilyDeleteItem) {
            // validation for constraint: itemType
            if (!$brandedFareAdminReqFareFamilyDeleteItem instanceof \Travelport\Util\StructType\FareFamilyDelete) {
                $invalidValues[] = is_object($brandedFareAdminReqFareFamilyDeleteItem) ? get_class($brandedFareAdminReqFareFamilyDeleteItem) : sprintf('%s(%s)', gettype($brandedFareAdminReqFareFamilyDeleteItem), var_export($brandedFareAdminReqFareFamilyDeleteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareFamilyDelete property can only contain items of type \Travelport\Util\StructType\FareFamilyDelete, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareFamilyDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamilyDelete[] $fareFamilyDelete
     * @return \Travelport\Util\StructType\BrandedFareAdminReq
     */
    public function setFareFamilyDelete(?array $fareFamilyDelete = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareFamilyDeleteArrayErrorMessage = self::validateFareFamilyDeleteForArrayConstraintsFromSetFareFamilyDelete($fareFamilyDelete))) {
            throw new InvalidArgumentException($fareFamilyDeleteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareFamilyDelete) && count($fareFamilyDelete) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareFamilyDelete)), __LINE__);
        }
        $this->FareFamilyDelete = $fareFamilyDelete;
        
        return $this;
    }
    /**
     * Add item to FareFamilyDelete value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamilyDelete $item
     * @return \Travelport\Util\StructType\BrandedFareAdminReq
     */
    public function addToFareFamilyDelete(\Travelport\Util\StructType\FareFamilyDelete $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareFamilyDelete) {
            throw new InvalidArgumentException(sprintf('The FareFamilyDelete property can only contain items of type \Travelport\Util\StructType\FareFamilyDelete, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareFamilyDelete) && count($this->FareFamilyDelete) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareFamilyDelete)), __LINE__);
        }
        $this->FareFamilyDelete[] = $item;
        
        return $this;
    }
}
