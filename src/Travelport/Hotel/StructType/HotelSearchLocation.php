<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\HotelLocation|null
     */
    public ?\Travelport\Hotel\StructType\HotelLocation $HotelLocation = null;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\Hotel\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
    /**
     * The HotelAddress
     * Meta information extracted from the WSDL
     * - documentation: Search by address or postal code. Applicable for 1G, 1V, 1P
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $HotelAddress = null;
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - documentation: Search for hotels near a reference point. HotelLocation/Location is mandatory for aggregated scenario if ReferencePoint is used. Applicable for 1G,1V,1P. Country/State are only applicable for 1P
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeHotelReferencePoint|null
     */
    public ?\Travelport\Hotel\StructType\TypeHotelReferencePoint $ReferencePoint = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \Travelport\Hotel\StructType\CoordinateLocation|null
     */
    public ?\Travelport\Hotel\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\Hotel\StructType\Distance|null
     */
    public ?\Travelport\Hotel\StructType\Distance $Distance = null;
    /**
     * Constructor method for HotelSearchLocation
     * @uses HotelSearchLocation::setHotelLocation()
     * @uses HotelSearchLocation::setVendorLocation()
     * @uses HotelSearchLocation::setHotelAddress()
     * @uses HotelSearchLocation::setReferencePoint()
     * @uses HotelSearchLocation::setCoordinateLocation()
     * @uses HotelSearchLocation::setDistance()
     * @param \Travelport\Hotel\StructType\HotelLocation $hotelLocation
     * @param \Travelport\Hotel\StructType\VendorLocation[] $vendorLocation
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $hotelAddress
     * @param \Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint
     * @param \Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\Hotel\StructType\Distance $distance
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelLocation $hotelLocation = null, ?array $vendorLocation = null, ?\Travelport\Hotel\StructType\TypeStructuredAddress $hotelAddress = null, ?\Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint = null, ?\Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\Hotel\StructType\Distance $distance = null)
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
     * @return \Travelport\Hotel\StructType\HotelLocation|null
     */
    public function getHotelLocation(): ?\Travelport\Hotel\StructType\HotelLocation
    {
        return $this->HotelLocation;
    }
    /**
     * Set HotelLocation value
     * @param \Travelport\Hotel\StructType\HotelLocation $hotelLocation
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function setHotelLocation(?\Travelport\Hotel\StructType\HotelLocation $hotelLocation = null): self
    {
        $this->HotelLocation = $hotelLocation;
        
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \Travelport\Hotel\StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Travelport\Hotel\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        $this->VendorLocation = $vendorLocation;
        
        return $this;
    }
    /**
     * Add item to VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\VendorLocation $item
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function addToVendorLocation(\Travelport\Hotel\StructType\VendorLocation $item): self
    {
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelAddress value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getHotelAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->HotelAddress;
    }
    /**
     * Set HotelAddress value
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $hotelAddress
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function setHotelAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $hotelAddress = null): self
    {
        $this->HotelAddress = $hotelAddress;
        
        return $this;
    }
    /**
     * Get ReferencePoint value
     * @return \Travelport\Hotel\StructType\TypeHotelReferencePoint|null
     */
    public function getReferencePoint(): ?\Travelport\Hotel\StructType\TypeHotelReferencePoint
    {
        return $this->ReferencePoint;
    }
    /**
     * Set ReferencePoint value
     * @param \Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function setReferencePoint(?\Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint = null): self
    {
        $this->ReferencePoint = $referencePoint;
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \Travelport\Hotel\StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\Travelport\Hotel\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation;
    }
    /**
     * Set CoordinateLocation value
     * @param \Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function setCoordinateLocation(?\Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        $this->CoordinateLocation = $coordinateLocation;
        
        return $this;
    }
    /**
     * Get Distance value
     * @return \Travelport\Hotel\StructType\Distance|null
     */
    public function getDistance(): ?\Travelport\Hotel\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\Hotel\StructType\Distance $distance
     * @return \Travelport\Hotel\StructType\HotelSearchLocation
     */
    public function setDistance(?\Travelport\Hotel\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
