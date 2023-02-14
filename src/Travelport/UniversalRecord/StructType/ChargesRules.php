<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\VoluntaryChanges[]
     */
    protected ?array $VoluntaryChanges = null;
    /**
     * The VoluntaryRefunds
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VoluntaryRefunds[]
     */
    protected ?array $VoluntaryRefunds = null;
    /**
     * Constructor method for ChargesRules
     * @uses ChargesRules::setVoluntaryChanges()
     * @uses ChargesRules::setVoluntaryRefunds()
     * @param \Travelport\UniversalRecord\StructType\VoluntaryChanges[] $voluntaryChanges
     * @param \Travelport\UniversalRecord\StructType\VoluntaryRefunds[] $voluntaryRefunds
     */
    public function __construct(?array $voluntaryChanges = null, ?array $voluntaryRefunds = null)
    {
        $this
            ->setVoluntaryChanges($voluntaryChanges)
            ->setVoluntaryRefunds($voluntaryRefunds);
    }
    /**
     * Get VoluntaryChanges value
     * @return \Travelport\UniversalRecord\StructType\VoluntaryChanges[]
     */
    public function getVoluntaryChanges(): ?array
    {
        return $this->VoluntaryChanges;
    }
    /**
     * This method is responsible for validating the values passed to the setVoluntaryChanges method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoluntaryChanges method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoluntaryChangesForArrayConstraintsFromSetVoluntaryChanges(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $chargesRulesVoluntaryChangesItem) {
            // validation for constraint: itemType
            if (!$chargesRulesVoluntaryChangesItem instanceof \Travelport\UniversalRecord\StructType\VoluntaryChanges) {
                $invalidValues[] = is_object($chargesRulesVoluntaryChangesItem) ? get_class($chargesRulesVoluntaryChangesItem) : sprintf('%s(%s)', gettype($chargesRulesVoluntaryChangesItem), var_export($chargesRulesVoluntaryChangesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoluntaryChanges property can only contain items of type \Travelport\UniversalRecord\StructType\VoluntaryChanges, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoluntaryChanges value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VoluntaryChanges[] $voluntaryChanges
     * @return \Travelport\UniversalRecord\StructType\ChargesRules
     */
    public function setVoluntaryChanges(?array $voluntaryChanges = null): self
    {
        // validation for constraint: array
        if ('' !== ($voluntaryChangesArrayErrorMessage = self::validateVoluntaryChangesForArrayConstraintsFromSetVoluntaryChanges($voluntaryChanges))) {
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
     * @param \Travelport\UniversalRecord\StructType\VoluntaryChanges $item
     * @return \Travelport\UniversalRecord\StructType\ChargesRules
     */
    public function addToVoluntaryChanges(\Travelport\UniversalRecord\StructType\VoluntaryChanges $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VoluntaryChanges) {
            throw new InvalidArgumentException(sprintf('The VoluntaryChanges property can only contain items of type \Travelport\UniversalRecord\StructType\VoluntaryChanges, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\VoluntaryRefunds[]
     */
    public function getVoluntaryRefunds(): ?array
    {
        return $this->VoluntaryRefunds;
    }
    /**
     * This method is responsible for validating the values passed to the setVoluntaryRefunds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoluntaryRefunds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoluntaryRefundsForArrayConstraintsFromSetVoluntaryRefunds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $chargesRulesVoluntaryRefundsItem) {
            // validation for constraint: itemType
            if (!$chargesRulesVoluntaryRefundsItem instanceof \Travelport\UniversalRecord\StructType\VoluntaryRefunds) {
                $invalidValues[] = is_object($chargesRulesVoluntaryRefundsItem) ? get_class($chargesRulesVoluntaryRefundsItem) : sprintf('%s(%s)', gettype($chargesRulesVoluntaryRefundsItem), var_export($chargesRulesVoluntaryRefundsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoluntaryRefunds property can only contain items of type \Travelport\UniversalRecord\StructType\VoluntaryRefunds, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoluntaryRefunds value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VoluntaryRefunds[] $voluntaryRefunds
     * @return \Travelport\UniversalRecord\StructType\ChargesRules
     */
    public function setVoluntaryRefunds(?array $voluntaryRefunds = null): self
    {
        // validation for constraint: array
        if ('' !== ($voluntaryRefundsArrayErrorMessage = self::validateVoluntaryRefundsForArrayConstraintsFromSetVoluntaryRefunds($voluntaryRefunds))) {
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
     * @param \Travelport\UniversalRecord\StructType\VoluntaryRefunds $item
     * @return \Travelport\UniversalRecord\StructType\ChargesRules
     */
    public function addToVoluntaryRefunds(\Travelport\UniversalRecord\StructType\VoluntaryRefunds $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VoluntaryRefunds) {
            throw new InvalidArgumentException(sprintf('The VoluntaryRefunds property can only contain items of type \Travelport\UniversalRecord\StructType\VoluntaryRefunds, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VoluntaryRefunds) && count($this->VoluntaryRefunds) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VoluntaryRefunds)), __LINE__);
        }
        $this->VoluntaryRefunds[] = $item;
        
        return $this;
    }
}
