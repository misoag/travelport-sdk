<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedRuleCategories StructType
 * @subpackage Structs
 */
class ProhibitedRuleCategories extends AbstractStructBase
{
    /**
     * The FareRuleCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareRuleCategory
     * @var \Travelport\Util\StructType\FareRuleCategory[]
     */
    protected ?array $FareRuleCategory = null;
    /**
     * Constructor method for ProhibitedRuleCategories
     * @uses ProhibitedRuleCategories::setFareRuleCategory()
     * @param \Travelport\Util\StructType\FareRuleCategory[] $fareRuleCategory
     */
    public function __construct(?array $fareRuleCategory = null)
    {
        $this
            ->setFareRuleCategory($fareRuleCategory);
    }
    /**
     * Get FareRuleCategory value
     * @return \Travelport\Util\StructType\FareRuleCategory[]
     */
    public function getFareRuleCategory(): ?array
    {
        return $this->FareRuleCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setFareRuleCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRuleCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleCategoryForArrayConstraintsFromSetFareRuleCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prohibitedRuleCategoriesFareRuleCategoryItem) {
            // validation for constraint: itemType
            if (!$prohibitedRuleCategoriesFareRuleCategoryItem instanceof \Travelport\Util\StructType\FareRuleCategory) {
                $invalidValues[] = is_object($prohibitedRuleCategoriesFareRuleCategoryItem) ? get_class($prohibitedRuleCategoriesFareRuleCategoryItem) : sprintf('%s(%s)', gettype($prohibitedRuleCategoriesFareRuleCategoryItem), var_export($prohibitedRuleCategoriesFareRuleCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRuleCategory property can only contain items of type \Travelport\Util\StructType\FareRuleCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRuleCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleCategory[] $fareRuleCategory
     * @return \Travelport\Util\StructType\ProhibitedRuleCategories
     */
    public function setFareRuleCategory(?array $fareRuleCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleCategoryArrayErrorMessage = self::validateFareRuleCategoryForArrayConstraintsFromSetFareRuleCategory($fareRuleCategory))) {
            throw new InvalidArgumentException($fareRuleCategoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRuleCategory) && count($fareRuleCategory) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRuleCategory)), __LINE__);
        }
        $this->FareRuleCategory = $fareRuleCategory;
        
        return $this;
    }
    /**
     * Add item to FareRuleCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleCategory $item
     * @return \Travelport\Util\StructType\ProhibitedRuleCategories
     */
    public function addToFareRuleCategory(\Travelport\Util\StructType\FareRuleCategory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRuleCategory) {
            throw new InvalidArgumentException(sprintf('The FareRuleCategory property can only contain items of type \Travelport\Util\StructType\FareRuleCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRuleCategory) && count($this->FareRuleCategory) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRuleCategory)), __LINE__);
        }
        $this->FareRuleCategory[] = $item;
        
        return $this;
    }
}