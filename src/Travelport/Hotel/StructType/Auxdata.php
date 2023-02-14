<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Auxdata StructType
 * @subpackage Structs
 */
class Auxdata extends AbstractStructBase
{
    /**
     * The Entry
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Hotel\StructType\Entry[]
     */
    protected ?array $Entry = null;
    /**
     * Constructor method for Auxdata
     * @uses Auxdata::setEntry()
     * @param \Travelport\Hotel\StructType\Entry[] $entry
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Travelport\Hotel\StructType\Entry[]
     */
    public function getEntry(): ?array
    {
        return $this->Entry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $auxdataEntryItem) {
            // validation for constraint: itemType
            if (!$auxdataEntryItem instanceof \Travelport\Hotel\StructType\Entry) {
                $invalidValues[] = is_object($auxdataEntryItem) ? get_class($auxdataEntryItem) : sprintf('%s(%s)', gettype($auxdataEntryItem), var_export($auxdataEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entry property can only contain items of type \Travelport\Hotel\StructType\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Entry value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Entry[] $entry
     * @return \Travelport\Hotel\StructType\Auxdata
     */
    public function setEntry(?array $entry = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($entry) && count($entry) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($entry)), __LINE__);
        }
        $this->Entry = $entry;
        
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Entry $item
     * @return \Travelport\Hotel\StructType\Auxdata
     */
    public function addToEntry(\Travelport\Hotel\StructType\Entry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\Entry) {
            throw new InvalidArgumentException(sprintf('The Entry property can only contain items of type \Travelport\Hotel\StructType\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Entry) && count($this->Entry) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Entry)), __LINE__);
        }
        $this->Entry[] = $item;
        
        return $this;
    }
}
