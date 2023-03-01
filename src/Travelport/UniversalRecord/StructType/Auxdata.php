<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\Entry[]
     */
    public ?array $Entry = null;
    /**
     * Constructor method for Auxdata
     * @uses Auxdata::setEntry()
     * @param \Travelport\UniversalRecord\StructType\Entry[] $entry
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Travelport\UniversalRecord\StructType\Entry[]
     */
    public function getEntry(): ?array
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @param \Travelport\UniversalRecord\StructType\Entry[] $entry
     * @return \Travelport\UniversalRecord\StructType\Auxdata
     */
    public function setEntry(?array $entry = null): self
    {
        $this->Entry = $entry;
        
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Entry $item
     * @return \Travelport\UniversalRecord\StructType\Auxdata
     */
    public function addToEntry(\Travelport\UniversalRecord\StructType\Entry $item): self
    {
        $this->Entry[] = $item;
        
        return $this;
    }
}
