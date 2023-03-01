<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\CabinClass[]
     */
    public ?array $CabinClass = null;
    /**
     * Constructor method for ProhibitedCabins
     * @uses ProhibitedCabins::setCabinClass()
     * @param \Travelport\Air\StructType\CabinClass[] $cabinClass
     */
    public function __construct(?array $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Air\StructType\CabinClass[]
     */
    public function getCabinClass(): ?array
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Air\StructType\CabinClass[] $cabinClass
     * @return \Travelport\Air\StructType\ProhibitedCabins
     */
    public function setCabinClass(?array $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Add item to CabinClass value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CabinClass $item
     * @return \Travelport\Air\StructType\ProhibitedCabins
     */
    public function addToCabinClass(\Travelport\Air\StructType\CabinClass $item): self
    {
        $this->CabinClass[] = $item;
        
        return $this;
    }
}
