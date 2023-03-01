<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\CabinClass|null
     */
    public ?\Travelport\UniversalRecord\StructType\CabinClass $CabinClass = null;
    /**
     * Constructor method for PreferredCabins
     * @uses PreferredCabins::setCabinClass()
     * @param \Travelport\UniversalRecord\StructType\CabinClass $cabinClass
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\CabinClass $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\UniversalRecord\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\UniversalRecord\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\UniversalRecord\StructType\CabinClass $cabinClass
     * @return \Travelport\UniversalRecord\StructType\PreferredCabins
     */
    public function setCabinClass(?\Travelport\UniversalRecord\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
