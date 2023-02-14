<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRulesRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response showing rule details of a given hotel property and room rate code
 * @subpackage Structs
 */
class HotelRulesRsp extends BaseRsp
{
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    protected ?array $HotelRateDetail = null;
    /**
     * The HotelRuleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRuleItem
     * @var \Travelport\Hotel\StructType\HotelRuleItem[]
     */
    protected ?array $HotelRuleItem = null;
    /**
     * The HotelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelType
     * @var \Travelport\Hotel\StructType\HotelType|null
     */
    protected ?\Travelport\Hotel\StructType\HotelType $HotelType = null;
    /**
     * Constructor method for HotelRulesRsp
     * @uses HotelRulesRsp::setHotelRateDetail()
     * @uses HotelRulesRsp::setHotelRuleItem()
     * @uses HotelRulesRsp::setHotelType()
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\Hotel\StructType\HotelRuleItem[] $hotelRuleItem
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     */
    public function __construct(?array $hotelRateDetail = null, ?array $hotelRuleItem = null, ?\Travelport\Hotel\StructType\HotelType $hotelType = null)
    {
        $this
            ->setHotelRateDetail($hotelRateDetail)
            ->setHotelRuleItem($hotelRuleItem)
            ->setHotelType($hotelType);
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateDetailForArrayConstraintsFromSetHotelRateDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRulesRspHotelRateDetailItem) {
            // validation for constraint: itemType
            if (!$hotelRulesRspHotelRateDetailItem instanceof \Travelport\Hotel\StructType\HotelRateDetail) {
                $invalidValues[] = is_object($hotelRulesRspHotelRateDetailItem) ? get_class($hotelRulesRspHotelRateDetailItem) : sprintf('%s(%s)', gettype($hotelRulesRspHotelRateDetailItem), var_export($hotelRulesRspHotelRateDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateDetail property can only contain items of type \Travelport\Hotel\StructType\HotelRateDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateDetailArrayErrorMessage = self::validateHotelRateDetailForArrayConstraintsFromSetHotelRateDetail($hotelRateDetail))) {
            throw new InvalidArgumentException($hotelRateDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRateDetail) && count($hotelRateDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRateDetail)), __LINE__);
        }
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRateDetail $item
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function addToHotelRateDetail(\Travelport\Hotel\StructType\HotelRateDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelRateDetail) {
            throw new InvalidArgumentException(sprintf('The HotelRateDetail property can only contain items of type \Travelport\Hotel\StructType\HotelRateDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRateDetail) && count($this->HotelRateDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRateDetail)), __LINE__);
        }
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRuleItem value
     * @return \Travelport\Hotel\StructType\HotelRuleItem[]
     */
    public function getHotelRuleItem(): ?array
    {
        return $this->HotelRuleItem;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelRuleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRuleItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRuleItemForArrayConstraintsFromSetHotelRuleItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRulesRspHotelRuleItemItem) {
            // validation for constraint: itemType
            if (!$hotelRulesRspHotelRuleItemItem instanceof \Travelport\Hotel\StructType\HotelRuleItem) {
                $invalidValues[] = is_object($hotelRulesRspHotelRuleItemItem) ? get_class($hotelRulesRspHotelRuleItemItem) : sprintf('%s(%s)', gettype($hotelRulesRspHotelRuleItemItem), var_export($hotelRulesRspHotelRuleItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRuleItem property can only contain items of type \Travelport\Hotel\StructType\HotelRuleItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRuleItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRuleItem[] $hotelRuleItem
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function setHotelRuleItem(?array $hotelRuleItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRuleItemArrayErrorMessage = self::validateHotelRuleItemForArrayConstraintsFromSetHotelRuleItem($hotelRuleItem))) {
            throw new InvalidArgumentException($hotelRuleItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRuleItem) && count($hotelRuleItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRuleItem)), __LINE__);
        }
        $this->HotelRuleItem = $hotelRuleItem;
        
        return $this;
    }
    /**
     * Add item to HotelRuleItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRuleItem $item
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function addToHotelRuleItem(\Travelport\Hotel\StructType\HotelRuleItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelRuleItem) {
            throw new InvalidArgumentException(sprintf('The HotelRuleItem property can only contain items of type \Travelport\Hotel\StructType\HotelRuleItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRuleItem) && count($this->HotelRuleItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRuleItem)), __LINE__);
        }
        $this->HotelRuleItem[] = $item;
        
        return $this;
    }
    /**
     * Get HotelType value
     * @return \Travelport\Hotel\StructType\HotelType|null
     */
    public function getHotelType(): ?\Travelport\Hotel\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     * @return \Travelport\Hotel\StructType\HotelRulesRsp
     */
    public function setHotelType(?\Travelport\Hotel\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
}