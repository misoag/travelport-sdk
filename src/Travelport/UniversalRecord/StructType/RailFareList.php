<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareInfos
 * @subpackage Structs
 */
class RailFareList extends AbstractStructBase
{
    /**
     * The RailFare
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailFare
     * @var \Travelport\UniversalRecord\StructType\RailFare[]
     */
    public ?array $RailFare = null;
    /**
     * Constructor method for RailFareList
     * @uses RailFareList::setRailFare()
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     */
    public function __construct(?array $railFare = null)
    {
        $this
            ->setRailFare($railFare);
    }
    /**
     * Get RailFare value
     * @return \Travelport\UniversalRecord\StructType\RailFare[]
     */
    public function getRailFare(): ?array
    {
        return $this->RailFare;
    }
    /**
     * Set RailFare value
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     * @return \Travelport\UniversalRecord\StructType\RailFareList
     */
    public function setRailFare(?array $railFare = null): self
    {
        $this->RailFare = $railFare;
        
        return $this;
    }
    /**
     * Add item to RailFare value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFare $item
     * @return \Travelport\UniversalRecord\StructType\RailFareList
     */
    public function addToRailFare(\Travelport\UniversalRecord\StructType\RailFare $item): self
    {
        $this->RailFare[] = $item;
        
        return $this;
    }
}
