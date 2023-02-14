<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StructuredFareRulesType StructType
 * @subpackage Structs
 */
class StructuredFareRulesType extends AbstractStructBase
{
    /**
     * The FareRuleCategoryType
     * Meta information extracted from the WSDL
     * - documentation: For FareRulesType element
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\FareRuleCategoryTypes[]
     */
    protected ?array $FareRuleCategoryType = null;
    /**
     * Constructor method for StructuredFareRulesType
     * @uses StructuredFareRulesType::setFareRuleCategoryType()
     * @param \Travelport\Util\StructType\FareRuleCategoryTypes[] $fareRuleCategoryType
     */
    public function __construct(?array $fareRuleCategoryType = null)
    {
        $this
            ->setFareRuleCategoryType($fareRuleCategoryType);
    }
    /**
     * Get FareRuleCategoryType value
     * @return \Travelport\Util\StructType\FareRuleCategoryTypes[]
     */
    public function getFareRuleCategoryType(): ?array
    {
        return $this->FareRuleCategoryType;
    }
    /**
     * This method is responsible for validating the values passed to the setFareRuleCategoryType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRuleCategoryType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleCategoryTypeForArrayConstraintsFromSetFareRuleCategoryType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $structuredFareRulesTypeFareRuleCategoryTypeItem) {
            // validation for constraint: itemType
            if (!$structuredFareRulesTypeFareRuleCategoryTypeItem instanceof \Travelport\Util\StructType\FareRuleCategoryTypes) {
                $invalidValues[] = is_object($structuredFareRulesTypeFareRuleCategoryTypeItem) ? get_class($structuredFareRulesTypeFareRuleCategoryTypeItem) : sprintf('%s(%s)', gettype($structuredFareRulesTypeFareRuleCategoryTypeItem), var_export($structuredFareRulesTypeFareRuleCategoryTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRuleCategoryType property can only contain items of type \Travelport\Util\StructType\FareRuleCategoryTypes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRuleCategoryType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleCategoryTypes[] $fareRuleCategoryType
     * @return \Travelport\Util\StructType\StructuredFareRulesType
     */
    public function setFareRuleCategoryType(?array $fareRuleCategoryType = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleCategoryTypeArrayErrorMessage = self::validateFareRuleCategoryTypeForArrayConstraintsFromSetFareRuleCategoryType($fareRuleCategoryType))) {
            throw new InvalidArgumentException($fareRuleCategoryTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($fareRuleCategoryType) && count($fareRuleCategoryType) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($fareRuleCategoryType)), __LINE__);
        }
        $this->FareRuleCategoryType = $fareRuleCategoryType;
        
        return $this;
    }
    /**
     * Add item to FareRuleCategoryType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleCategoryTypes $item
     * @return \Travelport\Util\StructType\StructuredFareRulesType
     */
    public function addToFareRuleCategoryType(\Travelport\Util\StructType\FareRuleCategoryTypes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRuleCategoryTypes) {
            throw new InvalidArgumentException(sprintf('The FareRuleCategoryType property can only contain items of type \Travelport\Util\StructType\FareRuleCategoryTypes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->FareRuleCategoryType) && count($this->FareRuleCategoryType) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->FareRuleCategoryType)), __LINE__);
        }
        $this->FareRuleCategoryType[] = $item;
        
        return $this;
    }
}
