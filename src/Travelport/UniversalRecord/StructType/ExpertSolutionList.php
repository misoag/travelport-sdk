<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpertSolutionList StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the Expert Solutions retrieved from the Knowledge Base.
 * @subpackage Structs
 */
class ExpertSolutionList extends AbstractStructBase
{
    /**
     * The ExpertSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: ExpertSolution
     * @var \Travelport\UniversalRecord\StructType\ExpertSolution[]
     */
    protected ?array $ExpertSolution = null;
    /**
     * Constructor method for ExpertSolutionList
     * @uses ExpertSolutionList::setExpertSolution()
     * @param \Travelport\UniversalRecord\StructType\ExpertSolution[] $expertSolution
     */
    public function __construct(?array $expertSolution = null)
    {
        $this
            ->setExpertSolution($expertSolution);
    }
    /**
     * Get ExpertSolution value
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution[]
     */
    public function getExpertSolution(): ?array
    {
        return $this->ExpertSolution;
    }
    /**
     * This method is responsible for validating the values passed to the setExpertSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExpertSolution method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExpertSolutionForArrayConstraintsFromSetExpertSolution(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $expertSolutionListExpertSolutionItem) {
            // validation for constraint: itemType
            if (!$expertSolutionListExpertSolutionItem instanceof \Travelport\UniversalRecord\StructType\ExpertSolution) {
                $invalidValues[] = is_object($expertSolutionListExpertSolutionItem) ? get_class($expertSolutionListExpertSolutionItem) : sprintf('%s(%s)', gettype($expertSolutionListExpertSolutionItem), var_export($expertSolutionListExpertSolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExpertSolution property can only contain items of type \Travelport\UniversalRecord\StructType\ExpertSolution, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExpertSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExpertSolution[] $expertSolution
     * @return \Travelport\UniversalRecord\StructType\ExpertSolutionList
     */
    public function setExpertSolution(?array $expertSolution = null): self
    {
        // validation for constraint: array
        if ('' !== ($expertSolutionArrayErrorMessage = self::validateExpertSolutionForArrayConstraintsFromSetExpertSolution($expertSolution))) {
            throw new InvalidArgumentException($expertSolutionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($expertSolution) && count($expertSolution) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($expertSolution)), __LINE__);
        }
        $this->ExpertSolution = $expertSolution;
        
        return $this;
    }
    /**
     * Add item to ExpertSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExpertSolution $item
     * @return \Travelport\UniversalRecord\StructType\ExpertSolutionList
     */
    public function addToExpertSolution(\Travelport\UniversalRecord\StructType\ExpertSolution $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ExpertSolution) {
            throw new InvalidArgumentException(sprintf('The ExpertSolution property can only contain items of type \Travelport\UniversalRecord\StructType\ExpertSolution, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ExpertSolution) && count($this->ExpertSolution) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ExpertSolution)), __LINE__);
        }
        $this->ExpertSolution[] = $item;
        
        return $this;
    }
}
