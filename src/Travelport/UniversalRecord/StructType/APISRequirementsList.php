<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APISRequirementsList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of APISRequirements
 * @subpackage Structs
 */
class APISRequirementsList extends AbstractStructBase
{
    /**
     * The APISRequirements
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: APISRequirements
     * @var \Travelport\UniversalRecord\StructType\APISRequirements[]
     */
    protected ?array $APISRequirements = null;
    /**
     * Constructor method for APISRequirementsList
     * @uses APISRequirementsList::setAPISRequirements()
     * @param \Travelport\UniversalRecord\StructType\APISRequirements[] $aPISRequirements
     */
    public function __construct(?array $aPISRequirements = null)
    {
        $this
            ->setAPISRequirements($aPISRequirements);
    }
    /**
     * Get APISRequirements value
     * @return \Travelport\UniversalRecord\StructType\APISRequirements[]
     */
    public function getAPISRequirements(): ?array
    {
        return $this->APISRequirements;
    }
    /**
     * This method is responsible for validating the values passed to the setAPISRequirements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAPISRequirements method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAPISRequirementsForArrayConstraintsFromSetAPISRequirements(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $aPISRequirementsListAPISRequirementsItem) {
            // validation for constraint: itemType
            if (!$aPISRequirementsListAPISRequirementsItem instanceof \Travelport\UniversalRecord\StructType\APISRequirements) {
                $invalidValues[] = is_object($aPISRequirementsListAPISRequirementsItem) ? get_class($aPISRequirementsListAPISRequirementsItem) : sprintf('%s(%s)', gettype($aPISRequirementsListAPISRequirementsItem), var_export($aPISRequirementsListAPISRequirementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The APISRequirements property can only contain items of type \Travelport\UniversalRecord\StructType\APISRequirements, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set APISRequirements value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\APISRequirements[] $aPISRequirements
     * @return \Travelport\UniversalRecord\StructType\APISRequirementsList
     */
    public function setAPISRequirements(?array $aPISRequirements = null): self
    {
        // validation for constraint: array
        if ('' !== ($aPISRequirementsArrayErrorMessage = self::validateAPISRequirementsForArrayConstraintsFromSetAPISRequirements($aPISRequirements))) {
            throw new InvalidArgumentException($aPISRequirementsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($aPISRequirements) && count($aPISRequirements) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($aPISRequirements)), __LINE__);
        }
        $this->APISRequirements = $aPISRequirements;
        
        return $this;
    }
    /**
     * Add item to APISRequirements value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\APISRequirements $item
     * @return \Travelport\UniversalRecord\StructType\APISRequirementsList
     */
    public function addToAPISRequirements(\Travelport\UniversalRecord\StructType\APISRequirements $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\APISRequirements) {
            throw new InvalidArgumentException(sprintf('The APISRequirements property can only contain items of type \Travelport\UniversalRecord\StructType\APISRequirements, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->APISRequirements) && count($this->APISRequirements) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->APISRequirements)), __LINE__);
        }
        $this->APISRequirements[] = $item;
        
        return $this;
    }
}
