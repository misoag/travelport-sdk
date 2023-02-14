<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareRuleCategory StructType
 * Meta information extracted from the WSDL
 * - documentation: A collection of fare rule category codes.
 * @subpackage Structs
 */
class AirFareRuleCategory extends AbstractStructBase
{
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - documentation: The Category Code for Air Fare Rule.
     * - maxOccurs: 10
     * @var string[]
     */
    protected ?array $CategoryCode = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
    /**
     * Constructor method for AirFareRuleCategory
     * @uses AirFareRuleCategory::setCategoryCode()
     * @uses AirFareRuleCategory::setFareInfoRef()
     * @param string[] $categoryCode
     * @param string $fareInfoRef
     */
    public function __construct(?array $categoryCode = null, ?string $fareInfoRef = null)
    {
        $this
            ->setCategoryCode($categoryCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get CategoryCode value
     * @return string[]
     */
    public function getCategoryCode(): ?array
    {
        return $this->CategoryCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryCodeForArrayConstraintsFromSetCategoryCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airFareRuleCategoryCategoryCodeItem) {
            // validation for constraint: enumeration
            if (!\Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::valueIsValid($airFareRuleCategoryCategoryCodeItem)) {
                $invalidValues[] = is_object($airFareRuleCategoryCategoryCodeItem) ? get_class($airFareRuleCategoryCategoryCodeItem) : sprintf('%s(%s)', gettype($airFareRuleCategoryCategoryCodeItem), var_export($airFareRuleCategoryCategoryCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryCode value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $categoryCode
     * @return \Travelport\UniversalRecord\StructType\AirFareRuleCategory
     */
    public function setCategoryCode(?array $categoryCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryCodeArrayErrorMessage = self::validateCategoryCodeForArrayConstraintsFromSetCategoryCode($categoryCode))) {
            throw new InvalidArgumentException($categoryCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($categoryCode) && count($categoryCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($categoryCode)), __LINE__);
        }
        $this->CategoryCode = $categoryCode;
        
        return $this;
    }
    /**
     * Add item to CategoryCode value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\AirFareRuleCategory
     */
    public function addToCategoryCode(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareRuleCategoryCode::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->CategoryCode) && count($this->CategoryCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->CategoryCode)), __LINE__);
        }
        $this->CategoryCode[] = $item;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirFareRuleCategory
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoRef) && !is_string($fareInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoRef, true), gettype($fareInfoRef)), __LINE__);
        }
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
