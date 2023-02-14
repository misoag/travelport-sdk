<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Location definition specific to a Vendor in a specific provider (e.g. 1G) system. | Specific vendor rental locations. Applicable only for VehicleSearchAvailability.
 * @subpackage Structs
 */
class VendorLocation extends TypeVendorLocation
{
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\UniversalRecord\StructType\Distance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Distance $Distance = null;
    /**
     * Constructor method for VendorLocation
     * @uses VendorLocation::setDistance()
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Distance $distance = null)
    {
        $this
            ->setDistance($distance);
    }
    /**
     * Get Distance value
     * @return \Travelport\UniversalRecord\StructType\Distance|null
     */
    public function getDistance(): ?\Travelport\UniversalRecord\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     * @return \Travelport\UniversalRecord\StructType\VendorLocation
     */
    public function setDistance(?\Travelport\UniversalRecord\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
