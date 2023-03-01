<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedCabins StructType
 * @subpackage Structs
 */
class PermittedCabins extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - ref: common:CabinClass
     * @var \Travelport\Air\StructType\CabinClass[]
     */
    public ?array $CabinClass = null;
    /**
     * Constructor method for PermittedCabins
     * @uses PermittedCabins::setCabinClass()
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
     * @return \Travelport\Air\StructType\PermittedCabins
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
     * @return \Travelport\Air\StructType\PermittedCabins
     */
    public function addToCabinClass(\Travelport\Air\StructType\CabinClass $item): self
    {
        $this->CabinClass[] = $item;
        
        return $this;
    }
}
