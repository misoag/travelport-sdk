<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareIDList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareIDs
 * @subpackage Structs
 */
class RailFareIDList extends AbstractStructBase
{
    /**
     * The RailFareID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailFareID
     * @var \Travelport\Air\StructType\RailFareID[]
     */
    public ?array $RailFareID = null;
    /**
     * Constructor method for RailFareIDList
     * @uses RailFareIDList::setRailFareID()
     * @param \Travelport\Air\StructType\RailFareID[] $railFareID
     */
    public function __construct(?array $railFareID = null)
    {
        $this
            ->setRailFareID($railFareID);
    }
    /**
     * Get RailFareID value
     * @return \Travelport\Air\StructType\RailFareID[]
     */
    public function getRailFareID(): ?array
    {
        return $this->RailFareID;
    }
    /**
     * Set RailFareID value
     * @param \Travelport\Air\StructType\RailFareID[] $railFareID
     * @return \Travelport\Air\StructType\RailFareIDList
     */
    public function setRailFareID(?array $railFareID = null): self
    {
        $this->RailFareID = $railFareID;
        
        return $this;
    }
    /**
     * Add item to RailFareID value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailFareID $item
     * @return \Travelport\Air\StructType\RailFareIDList
     */
    public function addToRailFareID(\Travelport\Air\StructType\RailFareID $item): self
    {
        $this->RailFareID[] = $item;
        
        return $this;
    }
}
