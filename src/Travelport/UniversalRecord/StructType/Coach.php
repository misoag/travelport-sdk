<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coach StructType
 * Meta information extracted from the WSDL
 * - documentation: Captures rail seat map/coach map information
 * @subpackage Structs
 */
class Coach extends AbstractStructBase
{
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\UniversalRecord\StructType\Characteristic|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Characteristic $Characteristic = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\UniversalRecord\StructType\Remark[]
     */
    protected ?array $Remark = null;
    /**
     * The CoachNumber
     * Meta information extracted from the WSDL
     * - documentation: Coach number for which seat map/coach map is returned.
     * - use: optional
     * @var string|null
     */
    protected ?string $CoachNumber = null;
    /**
     * Constructor method for Coach
     * @uses Coach::setCharacteristic()
     * @uses Coach::setRemark()
     * @uses Coach::setCoachNumber()
     * @param \Travelport\UniversalRecord\StructType\Characteristic $characteristic
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @param string $coachNumber
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Characteristic $characteristic = null, ?array $remark = null, ?string $coachNumber = null)
    {
        $this
            ->setCharacteristic($characteristic)
            ->setRemark($remark)
            ->setCoachNumber($coachNumber);
    }
    /**
     * Get Characteristic value
     * @return \Travelport\UniversalRecord\StructType\Characteristic|null
     */
    public function getCharacteristic(): ?\Travelport\UniversalRecord\StructType\Characteristic
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param \Travelport\UniversalRecord\StructType\Characteristic $characteristic
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function setCharacteristic(?\Travelport\UniversalRecord\StructType\Characteristic $characteristic = null): self
    {
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\UniversalRecord\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * This method is responsible for validating the values passed to the setRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarkForArrayConstraintsFromSetRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $coachRemarkItem) {
            // validation for constraint: itemType
            if (!$coachRemarkItem instanceof \Travelport\UniversalRecord\StructType\Remark) {
                $invalidValues[] = is_object($coachRemarkItem) ? get_class($coachRemarkItem) : sprintf('%s(%s)', gettype($coachRemarkItem), var_export($coachRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Remark property can only contain items of type \Travelport\UniversalRecord\StructType\Remark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function setRemark(?array $remark = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarkArrayErrorMessage = self::validateRemarkForArrayConstraintsFromSetRemark($remark))) {
            throw new InvalidArgumentException($remarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($remark) && count($remark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($remark)), __LINE__);
        }
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Remark $item
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function addToRemark(\Travelport\UniversalRecord\StructType\Remark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Remark) {
            throw new InvalidArgumentException(sprintf('The Remark property can only contain items of type \Travelport\UniversalRecord\StructType\Remark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Remark) && count($this->Remark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Remark)), __LINE__);
        }
        $this->Remark[] = $item;
        
        return $this;
    }
    /**
     * Get CoachNumber value
     * @return string|null
     */
    public function getCoachNumber(): ?string
    {
        return $this->CoachNumber;
    }
    /**
     * Set CoachNumber value
     * @param string $coachNumber
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function setCoachNumber(?string $coachNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($coachNumber) && !is_string($coachNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coachNumber, true), gettype($coachNumber)), __LINE__);
        }
        $this->CoachNumber = $coachNumber;
        
        return $this;
    }
}
