<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPriority StructType
 * Meta information extracted from the WSDL
 * - documentation: Override the search order for hotel availability request
 * @subpackage Structs
 */
class SearchPriority extends AbstractStructBase
{
    /**
     * The Criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 8
     * @var \StructType\Criteria[]
     */
    protected ?array $Criteria = null;
    /**
     * Constructor method for SearchPriority
     * @uses SearchPriority::setCriteria()
     * @param \StructType\Criteria[] $criteria
     */
    public function __construct(?array $criteria = null)
    {
        $this
            ->setCriteria($criteria);
    }
    /**
     * Get Criteria value
     * @return \StructType\Criteria[]
     */
    public function getCriteria(): ?array
    {
        return $this->Criteria;
    }
    /**
     * This method is responsible for validating the values passed to the setCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriteriaForArrayConstraintsFromSetCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchPriorityCriteriaItem) {
            // validation for constraint: itemType
            if (!$searchPriorityCriteriaItem instanceof \StructType\Criteria) {
                $invalidValues[] = is_object($searchPriorityCriteriaItem) ? get_class($searchPriorityCriteriaItem) : sprintf('%s(%s)', gettype($searchPriorityCriteriaItem), var_export($searchPriorityCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Criteria property can only contain items of type \StructType\Criteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Criteria value
     * @throws InvalidArgumentException
     * @param \StructType\Criteria[] $criteria
     * @return \StructType\SearchPriority
     */
    public function setCriteria(?array $criteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($criteriaArrayErrorMessage = self::validateCriteriaForArrayConstraintsFromSetCriteria($criteria))) {
            throw new InvalidArgumentException($criteriaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($criteria) && count($criteria) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 8', count($criteria)), __LINE__);
        }
        $this->Criteria = $criteria;
        
        return $this;
    }
    /**
     * Add item to Criteria value
     * @throws InvalidArgumentException
     * @param \StructType\Criteria $item
     * @return \StructType\SearchPriority
     */
    public function addToCriteria(\StructType\Criteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Criteria) {
            throw new InvalidArgumentException(sprintf('The Criteria property can only contain items of type \StructType\Criteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($this->Criteria) && count($this->Criteria) >= 8) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 8', count($this->Criteria)), __LINE__);
        }
        $this->Criteria[] = $item;
        
        return $this;
    }
}
