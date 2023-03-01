<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedCabins StructType
 * @subpackage Structs
 */
class ProhibitedCabins extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - ref: common:CabinClass
     * @var \Travelport\UniversalRecord\StructType\CabinClass[]
     */
    public ?array $CabinClass = null;
    /**
     * Constructor method for ProhibitedCabins
     * @uses ProhibitedCabins::setCabinClass()
     * @param \Travelport\UniversalRecord\StructType\CabinClass[] $cabinClass
     */
    public function __construct(?array $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\UniversalRecord\StructType\CabinClass[]
     */
    public function getCabinClass(): ?array
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\UniversalRecord\StructType\CabinClass[] $cabinClass
     * @return \Travelport\UniversalRecord\StructType\ProhibitedCabins
     */
    public function setCabinClass(?array $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Add item to CabinClass value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CabinClass $item
     * @return \Travelport\UniversalRecord\StructType\ProhibitedCabins
     */
    public function addToCabinClass(\Travelport\UniversalRecord\StructType\CabinClass $item): self
    {
        $this->CabinClass[] = $item;
        
        return $this;
    }
}
