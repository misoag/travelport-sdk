<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateInclusions StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides the list of additional charges included in Rate. e.g Tax, Airport Surcharge, CDW etc
 * @subpackage Structs
 */
class RateInclusions extends AbstractStructBase
{
    /**
     * The IncludedItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: IncludedItem
     * @var \Travelport\UniversalRecord\StructType\IncludedItem[]
     */
    protected ?array $IncludedItem = null;
    /**
     * Constructor method for RateInclusions
     * @uses RateInclusions::setIncludedItem()
     * @param \Travelport\UniversalRecord\StructType\IncludedItem[] $includedItem
     */
    public function __construct(?array $includedItem = null)
    {
        $this
            ->setIncludedItem($includedItem);
    }
    /**
     * Get IncludedItem value
     * @return \Travelport\UniversalRecord\StructType\IncludedItem[]
     */
    public function getIncludedItem(): ?array
    {
        return $this->IncludedItem;
    }
    /**
     * This method is responsible for validating the values passed to the setIncludedItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncludedItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncludedItemForArrayConstraintsFromSetIncludedItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rateInclusionsIncludedItemItem) {
            // validation for constraint: itemType
            if (!$rateInclusionsIncludedItemItem instanceof \Travelport\UniversalRecord\StructType\IncludedItem) {
                $invalidValues[] = is_object($rateInclusionsIncludedItemItem) ? get_class($rateInclusionsIncludedItemItem) : sprintf('%s(%s)', gettype($rateInclusionsIncludedItemItem), var_export($rateInclusionsIncludedItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncludedItem property can only contain items of type \Travelport\UniversalRecord\StructType\IncludedItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IncludedItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\IncludedItem[] $includedItem
     * @return \Travelport\UniversalRecord\StructType\RateInclusions
     */
    public function setIncludedItem(?array $includedItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($includedItemArrayErrorMessage = self::validateIncludedItemForArrayConstraintsFromSetIncludedItem($includedItem))) {
            throw new InvalidArgumentException($includedItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($includedItem) && count($includedItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($includedItem)), __LINE__);
        }
        $this->IncludedItem = $includedItem;
        
        return $this;
    }
    /**
     * Add item to IncludedItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\IncludedItem $item
     * @return \Travelport\UniversalRecord\StructType\RateInclusions
     */
    public function addToIncludedItem(\Travelport\UniversalRecord\StructType\IncludedItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\IncludedItem) {
            throw new InvalidArgumentException(sprintf('The IncludedItem property can only contain items of type \Travelport\UniversalRecord\StructType\IncludedItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->IncludedItem) && count($this->IncludedItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->IncludedItem)), __LINE__);
        }
        $this->IncludedItem[] = $item;
        
        return $this;
    }
}
