<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmbargoList StructType
 * Meta information extracted from the WSDL
 * - documentation: List of embargoes. Provider: 1G, 1V, 1P, 1J
 * @subpackage Structs
 */
class EmbargoList extends AbstractStructBase
{
    /**
     * The Embargo
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 1
     * - ref: Embargo
     * @var \Travelport\Util\StructType\Embargo[]
     */
    protected array $Embargo;
    /**
     * Constructor method for EmbargoList
     * @uses EmbargoList::setEmbargo()
     * @param \Travelport\Util\StructType\Embargo[] $embargo
     */
    public function __construct(array $embargo)
    {
        $this
            ->setEmbargo($embargo);
    }
    /**
     * Get Embargo value
     * @return \Travelport\Util\StructType\Embargo[]
     */
    public function getEmbargo(): array
    {
        return $this->Embargo;
    }
    /**
     * This method is responsible for validating the values passed to the setEmbargo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmbargo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmbargoForArrayConstraintsFromSetEmbargo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $embargoListEmbargoItem) {
            // validation for constraint: itemType
            if (!$embargoListEmbargoItem instanceof \Travelport\Util\StructType\Embargo) {
                $invalidValues[] = is_object($embargoListEmbargoItem) ? get_class($embargoListEmbargoItem) : sprintf('%s(%s)', gettype($embargoListEmbargoItem), var_export($embargoListEmbargoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Embargo property can only contain items of type \Travelport\Util\StructType\Embargo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Embargo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Embargo[] $embargo
     * @return \Travelport\Util\StructType\EmbargoList
     */
    public function setEmbargo(array $embargo): self
    {
        // validation for constraint: array
        if ('' !== ($embargoArrayErrorMessage = self::validateEmbargoForArrayConstraintsFromSetEmbargo($embargo))) {
            throw new InvalidArgumentException($embargoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($embargo) && count($embargo) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($embargo)), __LINE__);
        }
        $this->Embargo = $embargo;
        
        return $this;
    }
    /**
     * Add item to Embargo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Embargo $item
     * @return \Travelport\Util\StructType\EmbargoList
     */
    public function addToEmbargo(\Travelport\Util\StructType\Embargo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Embargo) {
            throw new InvalidArgumentException(sprintf('The Embargo property can only contain items of type \Travelport\Util\StructType\Embargo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Embargo) && count($this->Embargo) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Embargo)), __LINE__);
        }
        $this->Embargo[] = $item;
        
        return $this;
    }
}
