<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Enumeration StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides the capability to group the results into differnt trip type and diversification strategies.
 * @subpackage Structs
 */
class Enumeration extends AbstractStructBase
{
    /**
     * The SolutionGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: SolutionGroup
     * @var \Travelport\Util\StructType\SolutionGroup[]
     */
    protected ?array $SolutionGroup = null;
    /**
     * Constructor method for Enumeration
     * @uses Enumeration::setSolutionGroup()
     * @param \Travelport\Util\StructType\SolutionGroup[] $solutionGroup
     */
    public function __construct(?array $solutionGroup = null)
    {
        $this
            ->setSolutionGroup($solutionGroup);
    }
    /**
     * Get SolutionGroup value
     * @return \Travelport\Util\StructType\SolutionGroup[]
     */
    public function getSolutionGroup(): ?array
    {
        return $this->SolutionGroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSolutionGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSolutionGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSolutionGroupForArrayConstraintFromSetSolutionGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $enumerationSolutionGroupItem) {
            // validation for constraint: itemType
            if (!$enumerationSolutionGroupItem instanceof \Travelport\Util\StructType\SolutionGroup) {
                $invalidValues[] = is_object($enumerationSolutionGroupItem) ? get_class($enumerationSolutionGroupItem) : sprintf('%s(%s)', gettype($enumerationSolutionGroupItem), var_export($enumerationSolutionGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SolutionGroup property can only contain items of type \Travelport\Util\StructType\SolutionGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SolutionGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SolutionGroup[] $solutionGroup
     * @return \Travelport\Util\StructType\Enumeration
     */
    public function setSolutionGroup(?array $solutionGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($solutionGroupArrayErrorMessage = self::validateSolutionGroupForArrayConstraintFromSetSolutionGroup($solutionGroup))) {
            throw new InvalidArgumentException($solutionGroupArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($solutionGroup) && count($solutionGroup) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($solutionGroup)), __LINE__);
        }
        $this->SolutionGroup = $solutionGroup;
        
        return $this;
    }
    /**
     * Add item to SolutionGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SolutionGroup $item
     * @return \Travelport\Util\StructType\Enumeration
     */
    public function addToSolutionGroup(\Travelport\Util\StructType\SolutionGroup $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SolutionGroup) {
            throw new InvalidArgumentException(sprintf('The SolutionGroup property can only contain items of type \Travelport\Util\StructType\SolutionGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SolutionGroup) && count($this->SolutionGroup) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SolutionGroup)), __LINE__);
        }
        $this->SolutionGroup[] = $item;
        
        return $this;
    }
}
