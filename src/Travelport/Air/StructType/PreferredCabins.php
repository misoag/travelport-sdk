<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredCabins StructType
 * @subpackage Structs
 */
class PreferredCabins extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - ref: common:CabinClass
     * @var \Travelport\Air\StructType\CabinClass|null
     */
    public ?\Travelport\Air\StructType\CabinClass $CabinClass = null;
    /**
     * Constructor method for PreferredCabins
     * @uses PreferredCabins::setCabinClass()
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     */
    public function __construct(?\Travelport\Air\StructType\CabinClass $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Air\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Air\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @return \Travelport\Air\StructType\PreferredCabins
     */
    public function setCabinClass(?\Travelport\Air\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
