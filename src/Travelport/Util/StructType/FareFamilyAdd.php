<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareFamilyAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: Branded fare admin request element to add a FareFamily.
 * @subpackage Structs
 */
class FareFamilyAdd extends AbstractStructBase
{
    /**
     * The FareFamily
     * Meta information extracted from the WSDL
     * - ref: FareFamily
     * @var \Travelport\Util\StructType\FareFamily|null
     */
    protected ?\Travelport\Util\StructType\FareFamily $FareFamily = null;
    /**
     * Constructor method for FareFamilyAdd
     * @uses FareFamilyAdd::setFareFamily()
     * @param \Travelport\Util\StructType\FareFamily $fareFamily
     */
    public function __construct(?\Travelport\Util\StructType\FareFamily $fareFamily = null)
    {
        $this
            ->setFareFamily($fareFamily);
    }
    /**
     * Get FareFamily value
     * @return \Travelport\Util\StructType\FareFamily|null
     */
    public function getFareFamily(): ?\Travelport\Util\StructType\FareFamily
    {
        return $this->FareFamily;
    }
    /**
     * Set FareFamily value
     * @param \Travelport\Util\StructType\FareFamily $fareFamily
     * @return \Travelport\Util\StructType\FareFamilyAdd
     */
    public function setFareFamily(?\Travelport\Util\StructType\FareFamily $fareFamily = null): self
    {
        $this->FareFamily = $fareFamily;
        
        return $this;
    }
}
