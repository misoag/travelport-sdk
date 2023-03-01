<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\RailFareNote[]
     */
    public ?array $RailFareNote = null;
    /**
     * Constructor method for RailFareNoteList
     * @uses RailFareNoteList::setRailFareNote()
     * @param \Travelport\Air\StructType\RailFareNote[] $railFareNote
     */
    public function __construct(?array $railFareNote = null)
    {
        $this
            ->setRailFareNote($railFareNote);
    }
    /**
     * Get RailFareNote value
     * @return \Travelport\Air\StructType\RailFareNote[]
     */
    public function getRailFareNote(): ?array
    {
        return $this->RailFareNote;
    }
    /**
     * Set RailFareNote value
     * @param \Travelport\Air\StructType\RailFareNote[] $railFareNote
     * @return \Travelport\Air\StructType\RailFareNoteList
     */
    public function setRailFareNote(?array $railFareNote = null): self
    {
        $this->RailFareNote = $railFareNote;
        
        return $this;
    }
    /**
     * Add item to RailFareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailFareNote $item
     * @return \Travelport\Air\StructType\RailFareNoteList
     */
    public function addToRailFareNote(\Travelport\Air\StructType\RailFareNote $item): self
    {
        $this->RailFareNote[] = $item;
        
        return $this;
    }
}
