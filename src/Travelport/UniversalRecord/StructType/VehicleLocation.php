<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: The information for a rental car location.
 * @subpackage Structs
 */
class VehicleLocation extends AbstractStructBase
{
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VendorLocation $VendorLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\UniversalRecord\StructType\Distance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Distance $Distance = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The LocationInformation
     * Meta information extracted from the WSDL
     * - ref: LocationInformation
     * @var \Travelport\UniversalRecord\StructType\LocationInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\LocationInformation $LocationInformation = null;
    /**
     * Constructor method for VehicleLocation
     * @uses VehicleLocation::setVendorLocation()
     * @uses VehicleLocation::setDistance()
     * @uses VehicleLocation::setCoordinateLocation()
     * @uses VehicleLocation::setLocationInformation()
     * @param \Travelport\UniversalRecord\StructType\VendorLocation $vendorLocation
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\UniversalRecord\StructType\LocationInformation $locationInformation
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\VendorLocation $vendorLocation = null, ?\Travelport\UniversalRecord\StructType\Distance $distance = null, ?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\UniversalRecord\StructType\LocationInformation $locationInformation = null)
    {
        $this
            ->setVendorLocation($vendorLocation)
            ->setDistance($distance)
            ->setCoordinateLocation($coordinateLocation)
            ->setLocationInformation($locationInformation);
    }
    /**
     * Get VendorLocation value
     * @return \Travelport\UniversalRecord\StructType\VendorLocation|null
     */
    public function getVendorLocation(): ?\Travelport\UniversalRecord\StructType\VendorLocation
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Travelport\UniversalRecord\StructType\VendorLocation $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleLocation
     */
    public function setVendorLocation(?\Travelport\UniversalRecord\StructType\VendorLocation $vendorLocation = null): self
    {
        $this->VendorLocation = $vendorLocation;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\VehicleLocation
     */
    public function setDistance(?\Travelport\UniversalRecord\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\Travelport\UniversalRecord\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation;
    }
    /**
     * Set CoordinateLocation value
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleLocation
     */
    public function setCoordinateLocation(?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        $this->CoordinateLocation = $coordinateLocation;
        
        return $this;
    }
    /**
     * Get LocationInformation value
     * @return \Travelport\UniversalRecord\StructType\LocationInformation|null
     */
    public function getLocationInformation(): ?\Travelport\UniversalRecord\StructType\LocationInformation
    {
        return $this->LocationInformation;
    }
    /**
     * Set LocationInformation value
     * @param \Travelport\UniversalRecord\StructType\LocationInformation $locationInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleLocation
     */
    public function setLocationInformation(?\Travelport\UniversalRecord\StructType\LocationInformation $locationInformation = null): self
    {
        $this->LocationInformation = $locationInformation;
        
        return $this;
    }
}
