<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?array $Entry = null;
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
     * Set Entry value
     * @param \Travelport\Hotel\StructType\Entry[] $entry
     * @return \Travelport\Hotel\StructType\Auxdata
     */
    public function setEntry(?array $entry = null): self
    {
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
        $this->Entry[] = $item;
        
        return $this;
    }
}
