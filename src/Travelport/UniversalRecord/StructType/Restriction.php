<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Restriction StructType
 * Meta information extracted from the WSDL
 * - documentation: Which activities are supported for a particular element | Fare Reference associated with the BookingRules
 * @subpackage Structs
 */
class Restriction extends AbstractStructBase
{
    /**
     * The Operation
     * Meta information extracted from the WSDL
     * - documentation: The operation that is restricted
     * - use: required
     * @var string
     */
    protected string $Operation;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: The reason it is restricted
     * - use: optional
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * The DaysOfWeekRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction[]
     */
    protected ?array $DaysOfWeekRestriction = null;
    /**
     * The RestrictionPassengerTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes[]
     */
    protected ?array $RestrictionPassengerTypes = null;
    /**
     * Constructor method for Restriction
     * @uses Restriction::setOperation()
     * @uses Restriction::setReason()
     * @uses Restriction::setDaysOfWeekRestriction()
     * @uses Restriction::setRestrictionPassengerTypes()
     * @param string $operation
     * @param string $reason
     * @param \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction[] $daysOfWeekRestriction
     * @param \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes[] $restrictionPassengerTypes
     */
    public function __construct(string $operation, ?string $reason = null, ?array $daysOfWeekRestriction = null, ?array $restrictionPassengerTypes = null)
    {
        $this
            ->setOperation($operation)
            ->setReason($reason)
            ->setDaysOfWeekRestriction($daysOfWeekRestriction)
            ->setRestrictionPassengerTypes($restrictionPassengerTypes);
    }
    /**
     * Get Operation value
     * @return string
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Travelport\UniversalRecord\StructType\Restriction
     */
    public function setOperation(string $operation): self
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Travelport\UniversalRecord\StructType\Restriction
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Get DaysOfWeekRestriction value
     * @return \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction[]
     */
    public function getDaysOfWeekRestriction(): ?array
    {
        return $this->DaysOfWeekRestriction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDaysOfWeekRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaysOfWeekRestriction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaysOfWeekRestrictionForArrayConstraintFromSetDaysOfWeekRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $restrictionDaysOfWeekRestrictionItem) {
            // validation for constraint: itemType
            if (!$restrictionDaysOfWeekRestrictionItem instanceof \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction) {
                $invalidValues[] = is_object($restrictionDaysOfWeekRestrictionItem) ? get_class($restrictionDaysOfWeekRestrictionItem) : sprintf('%s(%s)', gettype($restrictionDaysOfWeekRestrictionItem), var_export($restrictionDaysOfWeekRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DaysOfWeekRestriction property can only contain items of type \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DaysOfWeekRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction[] $daysOfWeekRestriction
     * @return \Travelport\UniversalRecord\StructType\Restriction
     */
    public function setDaysOfWeekRestriction(?array $daysOfWeekRestriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($daysOfWeekRestrictionArrayErrorMessage = self::validateDaysOfWeekRestrictionForArrayConstraintFromSetDaysOfWeekRestriction($daysOfWeekRestriction))) {
            throw new InvalidArgumentException($daysOfWeekRestrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($daysOfWeekRestriction) && count($daysOfWeekRestriction) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($daysOfWeekRestriction)), __LINE__);
        }
        $this->DaysOfWeekRestriction = $daysOfWeekRestriction;
        
        return $this;
    }
    /**
     * Add item to DaysOfWeekRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction $item
     * @return \Travelport\UniversalRecord\StructType\Restriction
     */
    public function addToDaysOfWeekRestriction(\Travelport\UniversalRecord\StructType\DaysOfWeekRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction) {
            throw new InvalidArgumentException(sprintf('The DaysOfWeekRestriction property can only contain items of type \Travelport\UniversalRecord\StructType\DaysOfWeekRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->DaysOfWeekRestriction) && count($this->DaysOfWeekRestriction) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->DaysOfWeekRestriction)), __LINE__);
        }
        $this->DaysOfWeekRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get RestrictionPassengerTypes value
     * @return \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes[]
     */
    public function getRestrictionPassengerTypes(): ?array
    {
        return $this->RestrictionPassengerTypes;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRestrictionPassengerTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestrictionPassengerTypes method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictionPassengerTypesForArrayConstraintFromSetRestrictionPassengerTypes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $restrictionRestrictionPassengerTypesItem) {
            // validation for constraint: itemType
            if (!$restrictionRestrictionPassengerTypesItem instanceof \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes) {
                $invalidValues[] = is_object($restrictionRestrictionPassengerTypesItem) ? get_class($restrictionRestrictionPassengerTypesItem) : sprintf('%s(%s)', gettype($restrictionRestrictionPassengerTypesItem), var_export($restrictionRestrictionPassengerTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RestrictionPassengerTypes property can only contain items of type \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RestrictionPassengerTypes value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes[] $restrictionPassengerTypes
     * @return \Travelport\UniversalRecord\StructType\Restriction
     */
    public function setRestrictionPassengerTypes(?array $restrictionPassengerTypes = null): self
    {
        // validation for constraint: array
        if ('' !== ($restrictionPassengerTypesArrayErrorMessage = self::validateRestrictionPassengerTypesForArrayConstraintFromSetRestrictionPassengerTypes($restrictionPassengerTypes))) {
            throw new InvalidArgumentException($restrictionPassengerTypesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($restrictionPassengerTypes) && count($restrictionPassengerTypes) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($restrictionPassengerTypes)), __LINE__);
        }
        $this->RestrictionPassengerTypes = $restrictionPassengerTypes;
        
        return $this;
    }
    /**
     * Add item to RestrictionPassengerTypes value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes $item
     * @return \Travelport\UniversalRecord\StructType\Restriction
     */
    public function addToRestrictionPassengerTypes(\Travelport\UniversalRecord\StructType\RestrictionPassengerTypes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes) {
            throw new InvalidArgumentException(sprintf('The RestrictionPassengerTypes property can only contain items of type \Travelport\UniversalRecord\StructType\RestrictionPassengerTypes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RestrictionPassengerTypes) && count($this->RestrictionPassengerTypes) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RestrictionPassengerTypes)), __LINE__);
        }
        $this->RestrictionPassengerTypes[] = $item;
        
        return $this;
    }
}
