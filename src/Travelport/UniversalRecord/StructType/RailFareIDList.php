<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\RailFareID[]
     */
    public ?array $RailFareID = null;
    /**
     * Constructor method for RailFareIDList
     * @uses RailFareIDList::setRailFareID()
     * @param \Travelport\UniversalRecord\StructType\RailFareID[] $railFareID
     */
    public function __construct(?array $railFareID = null)
    {
        $this
            ->setRailFareID($railFareID);
    }
    /**
     * Get RailFareID value
     * @return \Travelport\UniversalRecord\StructType\RailFareID[]
     */
    public function getRailFareID(): ?array
    {
        return $this->RailFareID;
    }
    /**
     * Set RailFareID value
     * @param \Travelport\UniversalRecord\StructType\RailFareID[] $railFareID
     * @return \Travelport\UniversalRecord\StructType\RailFareIDList
     */
    public function setRailFareID(?array $railFareID = null): self
    {
        $this->RailFareID = $railFareID;
        
        return $this;
    }
    /**
     * Add item to RailFareID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareID $item
     * @return \Travelport\UniversalRecord\StructType\RailFareIDList
     */
    public function addToRailFareID(\Travelport\UniversalRecord\StructType\RailFareID $item): self
    {
        $this->RailFareID[] = $item;
        
        return $this;
    }
}
