<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Search using latitude and longitude. Applicable for 1G, 1V only. Not applicable for HotelSuperShopper | Date and Location information for the Hotel. | Location information for the hotel.
 * @subpackage Structs
 */
class HotelSearchLocation extends AbstractStructBase
{
    /**
     * The HotelLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelLocation
     * @var \Travelport\UniversalRecord\StructType\HotelLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelLocation $HotelLocation = null;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
    /**
     * The HotelAddress
     * Meta information extracted from the WSDL
     * - documentation: Search by address or postal code. Applicable for 1G, 1V, 1P
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $HotelAddress = null;
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - documentation: Search for hotels near a reference point. HotelLocation/Location is mandatory for aggregated scenario if ReferencePoint is used. Applicable for 1G,1V,1P. Country/State are only applicable for 1P
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeHotelReferencePoint|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeHotelReferencePoint $ReferencePoint = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\UniversalRecord\StructType\Distance|null
     */
    public ?\Travelport\UniversalRecord\StructType\Distance $Distance = null;
    /**
     * Constructor method for HotelSearchLocation
     * @uses HotelSearchLocation::setHotelLocation()
     * @uses HotelSearchLocation::setVendorLocation()
     * @uses HotelSearchLocation::setHotelAddress()
     * @uses HotelSearchLocation::setReferencePoint()
     * @uses HotelSearchLocation::setCoordinateLocation()
     * @uses HotelSearchLocation::setDistance()
     * @param \Travelport\UniversalRecord\StructType\HotelLocation $hotelLocation
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $hotelAddress
     * @param \Travelport\UniversalRecord\StructType\TypeHotelReferencePoint $referencePoint
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\HotelLocation $hotelLocation = null, ?array $vendorLocation = null, ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $hotelAddress = null, ?\Travelport\UniversalRecord\StructType\TypeHotelReferencePoint $referencePoint = null, ?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\UniversalRecord\StructType\Distance $distance = null)
    {
        $this
            ->setHotelLocation($hotelLocation)
            ->setVendorLocation($vendorLocation)
            ->setHotelAddress($hotelAddress)
            ->setReferencePoint($referencePoint)
            ->setCoordinateLocation($coordinateLocation)
            ->setDistance($distance);
    }
    /**
     * Get HotelLocation value
     * @return \Travelport\UniversalRecord\StructType\HotelLocation|null
     */
    public function getHotelLocation(): ?\Travelport\UniversalRecord\StructType\HotelLocation
    {
        return $this->HotelLocation;
    }
    /**
     * Set HotelLocation value
     * @param \Travelport\UniversalRecord\StructType\HotelLocation $hotelLocation
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setHotelLocation(?\Travelport\UniversalRecord\StructType\HotelLocation $hotelLocation = null): self
    {
        $this->HotelLocation = $hotelLocation;
        
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        $this->VendorLocation = $vendorLocation;
        
        return $this;
    }
    /**
     * Add item to VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocation $item
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function addToVendorLocation(\Travelport\UniversalRecord\StructType\VendorLocation $item): self
    {
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelAddress value
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    public function getHotelAddress(): ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress
    {
        return $this->HotelAddress;
    }
    /**
     * Set HotelAddress value
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $hotelAddress
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setHotelAddress(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $hotelAddress = null): self
    {
        $this->HotelAddress = $hotelAddress;
        
        return $this;
    }
    /**
     * Get ReferencePoint value
     * @return \Travelport\UniversalRecord\StructType\TypeHotelReferencePoint|null
     */
    public function getReferencePoint(): ?\Travelport\UniversalRecord\StructType\TypeHotelReferencePoint
    {
        return $this->ReferencePoint;
    }
    /**
     * Set ReferencePoint value
     * @param \Travelport\UniversalRecord\StructType\TypeHotelReferencePoint $referencePoint
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setReferencePoint(?\Travelport\UniversalRecord\StructType\TypeHotelReferencePoint $referencePoint = null): self
    {
        $this->ReferencePoint = $referencePoint;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setCoordinateLocation(?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        $this->CoordinateLocation = $coordinateLocation;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setDistance(?\Travelport\UniversalRecord\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
