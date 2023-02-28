<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargesRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Reference associated with the BookingRules
 * @subpackage Structs
 */
class ChargesRules extends AbstractStructBase
{
    /**
     * The VoluntaryChanges
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\VoluntaryChanges[]
     */
    protected ?array $VoluntaryChanges = null;
    /**
     * The VoluntaryRefunds
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\VoluntaryRefunds[]
     */
    protected ?array $VoluntaryRefunds = null;
    /**
     * Constructor method for ChargesRules
     * @uses ChargesRules::setVoluntaryChanges()
     * @uses ChargesRules::setVoluntaryRefunds()
     * @param \Travelport\Util\StructType\VoluntaryChanges[] $voluntaryChanges
     * @param \Travelport\Util\StructType\VoluntaryRefunds[] $voluntaryRefunds
     */
    public function __construct(?array $voluntaryChanges = null, ?array $voluntaryRefunds = null)
    {
        $this
            ->setVoluntaryChanges($voluntaryChanges)
            ->setVoluntaryRefunds($voluntaryRefunds);
    }
    /**
     * Get VoluntaryChanges value
     * @return \Travelport\Util\StructType\VoluntaryChanges[]
     */
    public function getVoluntaryChanges(): ?array
    {
        return $this->VoluntaryChanges;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVoluntaryChanges method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoluntaryChanges method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoluntaryChangesForArrayConstraintFromSetVoluntaryChanges(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $chargesRulesVoluntaryChangesItem) {
            // validation for constraint: itemType
            if (!$chargesRulesVoluntaryChangesItem instanceof \Travelport\Util\StructType\VoluntaryChanges) {
                $invalidValues[] = is_object($chargesRulesVoluntaryChangesItem) ? get_class($chargesRulesVoluntaryChangesItem) : sprintf('%s(%s)', gettype($chargesRulesVoluntaryChangesItem), var_export($chargesRulesVoluntaryChangesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoluntaryChanges property can only contain items of type \Travelport\Util\StructType\VoluntaryChanges, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoluntaryChanges value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VoluntaryChanges[] $voluntaryChanges
     * @return \Travelport\Util\StructType\ChargesRules
     */
    public function setVoluntaryChanges(?array $voluntaryChanges = null): self
    {
        // validation for constraint: array
        if ('' !== ($voluntaryChangesArrayErrorMessage = self::validateVoluntaryChangesForArrayConstraintFromSetVoluntaryChanges($voluntaryChanges))) {
            throw new InvalidArgumentException($voluntaryChangesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($voluntaryChanges) && count($voluntaryChanges) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($voluntaryChanges)), __LINE__);
        }
        $this->VoluntaryChanges = $voluntaryChanges;
        
        return $this;
    }
    /**
     * Add item to VoluntaryChanges value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VoluntaryChanges $item
     * @return \Travelport\Util\StructType\ChargesRules
     */
    public function addToVoluntaryChanges(\Travelport\Util\StructType\VoluntaryChanges $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VoluntaryChanges) {
            throw new InvalidArgumentException(sprintf('The VoluntaryChanges property can only contain items of type \Travelport\Util\StructType\VoluntaryChanges, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VoluntaryChanges) && count($this->VoluntaryChanges) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VoluntaryChanges)), __LINE__);
        }
        $this->VoluntaryChanges[] = $item;
        
        return $this;
    }
    /**
     * Get VoluntaryRefunds value
     * @return \Travelport\Util\StructType\VoluntaryRefunds[]
     */
    public function getVoluntaryRefunds(): ?array
    {
        return $this->VoluntaryRefunds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVoluntaryRefunds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoluntaryRefunds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoluntaryRefundsForArrayConstraintFromSetVoluntaryRefunds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $chargesRulesVoluntaryRefundsItem) {
            // validation for constraint: itemType
            if (!$chargesRulesVoluntaryRefundsItem instanceof \Travelport\Util\StructType\VoluntaryRefunds) {
                $invalidValues[] = is_object($chargesRulesVoluntaryRefundsItem) ? get_class($chargesRulesVoluntaryRefundsItem) : sprintf('%s(%s)', gettype($chargesRulesVoluntaryRefundsItem), var_export($chargesRulesVoluntaryRefundsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoluntaryRefunds property can only contain items of type \Travelport\Util\StructType\VoluntaryRefunds, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoluntaryRefunds value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VoluntaryRefunds[] $voluntaryRefunds
     * @return \Travelport\Util\StructType\ChargesRules
     */
    public function setVoluntaryRefunds(?array $voluntaryRefunds = null): self
    {
        // validation for constraint: array
        if ('' !== ($voluntaryRefundsArrayErrorMessage = self::validateVoluntaryRefundsForArrayConstraintFromSetVoluntaryRefunds($voluntaryRefunds))) {
            throw new InvalidArgumentException($voluntaryRefundsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($voluntaryRefunds) && count($voluntaryRefunds) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($voluntaryRefunds)), __LINE__);
        }
        $this->VoluntaryRefunds = $voluntaryRefunds;
        
        return $this;
    }
    /**
     * Add item to VoluntaryRefunds value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VoluntaryRefunds $item
     * @return \Travelport\Util\StructType\ChargesRules
     */
    public function addToVoluntaryRefunds(\Travelport\Util\StructType\VoluntaryRefunds $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VoluntaryRefunds) {
            throw new InvalidArgumentException(sprintf('The VoluntaryRefunds property can only contain items of type \Travelport\Util\StructType\VoluntaryRefunds, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VoluntaryRefunds) && count($this->VoluntaryRefunds) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VoluntaryRefunds)), __LINE__);
        }
        $this->VoluntaryRefunds[] = $item;
        
        return $this;
    }
}
