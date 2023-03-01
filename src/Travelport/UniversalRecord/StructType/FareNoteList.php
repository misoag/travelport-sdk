<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\FareNote[]
     */
    public ?array $FareNote = null;
    /**
     * Constructor method for FareNoteList
     * @uses FareNoteList::setFareNote()
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     */
    public function __construct(?array $fareNote = null)
    {
        $this
            ->setFareNote($fareNote);
    }
    /**
     * Get FareNote value
     * @return \Travelport\UniversalRecord\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     * @return \Travelport\UniversalRecord\StructType\FareNoteList
     */
    public function setFareNote(?array $fareNote = null): self
    {
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareNote $item
     * @return \Travelport\UniversalRecord\StructType\FareNoteList
     */
    public function addToFareNote(\Travelport\UniversalRecord\StructType\FareNote $item): self
    {
        $this->FareNote[] = $item;
        
        return $this;
    }
}
