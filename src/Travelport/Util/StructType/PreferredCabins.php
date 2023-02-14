<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\CabinClass|null
     */
    protected ?\Travelport\Util\StructType\CabinClass $CabinClass = null;
    /**
     * Constructor method for PreferredCabins
     * @uses PreferredCabins::setCabinClass()
     * @param \Travelport\Util\StructType\CabinClass $cabinClass
     */
    public function __construct(?\Travelport\Util\StructType\CabinClass $cabinClass = null)
    {
        $this
            ->setCabinClass($cabinClass);
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Util\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Util\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Util\StructType\CabinClass $cabinClass
     * @return \Travelport\Util\StructType\PreferredCabins
     */
    public function setCabinClass(?\Travelport\Util\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
