<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareNoteList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of Notes
 * @subpackage Structs
 */
class RailFareNoteList extends AbstractStructBase
{
    /**
     * The RailFareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareNote
     * @var \Travelport\UniversalRecord\StructType\RailFareNote[]
     */
    protected ?array $RailFareNote = null;
    /**
     * Constructor method for RailFareNoteList
     * @uses RailFareNoteList::setRailFareNote()
     * @param \Travelport\UniversalRecord\StructType\RailFareNote[] $railFareNote
     */
    public function __construct(?array $railFareNote = null)
    {
        $this
            ->setRailFareNote($railFareNote);
    }
    /**
     * Get RailFareNote value
     * @return \Travelport\UniversalRecord\StructType\RailFareNote[]
     */
    public function getRailFareNote(): ?array
    {
        return $this->RailFareNote;
    }
    /**
     * This method is responsible for validating the values passed to the setRailFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareNote method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareNoteForArrayConstraintsFromSetRailFareNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareNoteListRailFareNoteItem) {
            // validation for constraint: itemType
            if (!$railFareNoteListRailFareNoteItem instanceof \Travelport\UniversalRecord\StructType\RailFareNote) {
                $invalidValues[] = is_object($railFareNoteListRailFareNoteItem) ? get_class($railFareNoteListRailFareNoteItem) : sprintf('%s(%s)', gettype($railFareNoteListRailFareNoteItem), var_export($railFareNoteListRailFareNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareNote property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailFareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNote[] $railFareNote
     * @return \Travelport\UniversalRecord\StructType\RailFareNoteList
     */
    public function setRailFareNote(?array $railFareNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareNoteArrayErrorMessage = self::validateRailFareNoteForArrayConstraintsFromSetRailFareNote($railFareNote))) {
            throw new InvalidArgumentException($railFareNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareNote) && count($railFareNote) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareNote)), __LINE__);
        }
        $this->RailFareNote = $railFareNote;
        
        return $this;
    }
    /**
     * Add item to RailFareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNote $item
     * @return \Travelport\UniversalRecord\StructType\RailFareNoteList
     */
    public function addToRailFareNote(\Travelport\UniversalRecord\StructType\RailFareNote $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareNote) {
            throw new InvalidArgumentException(sprintf('The RailFareNote property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareNote) && count($this->RailFareNote) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareNote)), __LINE__);
        }
        $this->RailFareNote[] = $item;
        
        return $this;
    }
}
