<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRulesFilterCategory StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Rules Filter if requested will return rules for requested category in the response. Applicable for providers 1G,1V,1P.
 * @subpackage Structs
 */
class FareRulesFilterCategory extends AbstractStructBase
{
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - documentation: Fare Rules Filter category can be requested. Currently only '˜MIN, MAX, ADV, CHG, OTH' is supported. Applicable for Providers 1G,1V,1P.
     * - maxOccurs: 35
     * - minOccurs: 1
     * @var string[]
     */
    protected array $CategoryCode;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: This tells if Low Fare Finder was used.
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
    /**
     * Constructor method for FareRulesFilterCategory
     * @uses FareRulesFilterCategory::setCategoryCode()
     * @uses FareRulesFilterCategory::setFareInfoRef()
     * @param string[] $categoryCode
     * @param string $fareInfoRef
     */
    public function __construct(array $categoryCode, ?string $fareInfoRef = null)
    {
        $this
            ->setCategoryCode($categoryCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get CategoryCode value
     * @return string[]
     */
    public function getCategoryCode(): array
    {
        return $this->CategoryCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCategoryCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryCodeForArrayConstraintFromSetCategoryCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRulesFilterCategoryCategoryCodeItem) {
            // validation for constraint: itemType
            if (!is_string($fareRulesFilterCategoryCategoryCodeItem)) {
                $invalidValues[] = is_object($fareRulesFilterCategoryCategoryCodeItem) ? get_class($fareRulesFilterCategoryCategoryCodeItem) : sprintf('%s(%s)', gettype($fareRulesFilterCategoryCategoryCodeItem), var_export($fareRulesFilterCategoryCategoryCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryCode value
     * @throws InvalidArgumentException
     * @param string[] $categoryCode
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilterCategory
     */
    public function setCategoryCode(array $categoryCode): self
    {
        // validation for constraint: array
        if ('' !== ($categoryCodeArrayErrorMessage = self::validateCategoryCodeForArrayConstraintFromSetCategoryCode($categoryCode))) {
            throw new InvalidArgumentException($categoryCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(35)
        if (is_array($categoryCode) && count($categoryCode) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 35', count($categoryCode)), __LINE__);
        }
        $this->CategoryCode = $categoryCode;
        
        return $this;
    }
    /**
     * Add item to CategoryCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilterCategory
     */
    public function addToCategoryCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CategoryCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(35)
        if (is_array($this->CategoryCode) && count($this->CategoryCode) >= 35) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 35', count($this->CategoryCode)), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilterCategory
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
