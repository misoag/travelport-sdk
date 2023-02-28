<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareNoteList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of Notes
 * @subpackage Structs
 */
class FareNoteList extends AbstractStructBase
{
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\Util\StructType\FareNote[]
     */
    protected ?array $FareNote = null;
    /**
     * Constructor method for FareNoteList
     * @uses FareNoteList::setFareNote()
     * @param \Travelport\Util\StructType\FareNote[] $fareNote
     */
    public function __construct(?array $fareNote = null)
    {
        $this
            ->setFareNote($fareNote);
    }
    /**
     * Get FareNote value
     * @return \Travelport\Util\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareNoteForArrayConstraintFromSetFareNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareNoteListFareNoteItem) {
            // validation for constraint: itemType
            if (!$fareNoteListFareNoteItem instanceof \Travelport\Util\StructType\FareNote) {
                $invalidValues[] = is_object($fareNoteListFareNoteItem) ? get_class($fareNoteListFareNoteItem) : sprintf('%s(%s)', gettype($fareNoteListFareNoteItem), var_export($fareNoteListFareNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareNote property can only contain items of type \Travelport\Util\StructType\FareNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareNote[] $fareNote
     * @return \Travelport\Util\StructType\FareNoteList
     */
    public function setFareNote(?array $fareNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareNoteArrayErrorMessage = self::validateFareNoteForArrayConstraintFromSetFareNote($fareNote))) {
            throw new InvalidArgumentException($fareNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareNote) && count($fareNote) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareNote)), __LINE__);
        }
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareNote $item
     * @return \Travelport\Util\StructType\FareNoteList
     */
    public function addToFareNote(\Travelport\Util\StructType\FareNote $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareNote) {
            throw new InvalidArgumentException(sprintf('The FareNote property can only contain items of type \Travelport\Util\StructType\FareNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareNote) && count($this->FareNote) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareNote)), __LINE__);
        }
        $this->FareNote[] = $item;
        
        return $this;
    }
}
