<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Operation;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: The reason it is restricted
     * - use: optional
     * @var string|null
     */
    public ?string $Reason = null;
    /**
     * The DaysOfWeekRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\DaysOfWeekRestriction[]
     */
    public ?array $DaysOfWeekRestriction = null;
    /**
     * The RestrictionPassengerTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\RestrictionPassengerTypes[]
     */
    public ?array $RestrictionPassengerTypes = null;
    /**
     * Constructor method for Restriction
     * @uses Restriction::setOperation()
     * @uses Restriction::setReason()
     * @uses Restriction::setDaysOfWeekRestriction()
     * @uses Restriction::setRestrictionPassengerTypes()
     * @param string $operation
     * @param string $reason
     * @param \Travelport\Air\StructType\DaysOfWeekRestriction[] $daysOfWeekRestriction
     * @param \Travelport\Air\StructType\RestrictionPassengerTypes[] $restrictionPassengerTypes
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
     * @return \Travelport\Air\StructType\Restriction
     */
    public function setOperation(string $operation): self
    {
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
     * @return \Travelport\Air\StructType\Restriction
     */
    public function setReason(?string $reason = null): self
    {
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Get DaysOfWeekRestriction value
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction[]
     */
    public function getDaysOfWeekRestriction(): ?array
    {
        return $this->DaysOfWeekRestriction;
    }
    /**
     * Set DaysOfWeekRestriction value
     * @param \Travelport\Air\StructType\DaysOfWeekRestriction[] $daysOfWeekRestriction
     * @return \Travelport\Air\StructType\Restriction
     */
    public function setDaysOfWeekRestriction(?array $daysOfWeekRestriction = null): self
    {
        $this->DaysOfWeekRestriction = $daysOfWeekRestriction;
        
        return $this;
    }
    /**
     * Add item to DaysOfWeekRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DaysOfWeekRestriction $item
     * @return \Travelport\Air\StructType\Restriction
     */
    public function addToDaysOfWeekRestriction(\Travelport\Air\StructType\DaysOfWeekRestriction $item): self
    {
        $this->DaysOfWeekRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get RestrictionPassengerTypes value
     * @return \Travelport\Air\StructType\RestrictionPassengerTypes[]
     */
    public function getRestrictionPassengerTypes(): ?array
    {
        return $this->RestrictionPassengerTypes;
    }
    /**
     * Set RestrictionPassengerTypes value
     * @param \Travelport\Air\StructType\RestrictionPassengerTypes[] $restrictionPassengerTypes
     * @return \Travelport\Air\StructType\Restriction
     */
    public function setRestrictionPassengerTypes(?array $restrictionPassengerTypes = null): self
    {
        $this->RestrictionPassengerTypes = $restrictionPassengerTypes;
        
        return $this;
    }
    /**
     * Add item to RestrictionPassengerTypes value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RestrictionPassengerTypes $item
     * @return \Travelport\Air\StructType\Restriction
     */
    public function addToRestrictionPassengerTypes(\Travelport\Air\StructType\RestrictionPassengerTypes $item): self
    {
        $this->RestrictionPassengerTypes[] = $item;
        
        return $this;
    }
}
