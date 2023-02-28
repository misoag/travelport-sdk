<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\UniversalRecord\StructType\HotelLocation $HotelLocation = null;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    protected ?array $VendorLocation = null;
    /**
     * The HotelAddress
     * Meta information extracted from the WSDL
     * - documentation: Search by address or postal code. Applicable for 1G, 1V, 1P
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $HotelAddress = null;
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - documentation: Search for hotels near a reference point. HotelLocation/Location is mandatory for aggregated scenario if ReferencePoint is used. Applicable for 1G,1V,1P. Country/State are only applicable for 1P
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeHotelReferencePoint|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeHotelReferencePoint $ReferencePoint = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\UniversalRecord\StructType\Distance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Distance $Distance = null;
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
     * This method is responsible for validating the value(s) passed to the setVendorLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendorLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorLocationForArrayConstraintFromSetVendorLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchLocationVendorLocationItem) {
            // validation for constraint: itemType
            if (!$hotelSearchLocationVendorLocationItem instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
                $invalidValues[] = is_object($hotelSearchLocationVendorLocationItem) ? get_class($hotelSearchLocationVendorLocationItem) : sprintf('%s(%s)', gettype($hotelSearchLocationVendorLocationItem), var_export($hotelSearchLocationVendorLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\HotelSearchLocation
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationArrayErrorMessage = self::validateVendorLocationForArrayConstraintFromSetVendorLocation($vendorLocation))) {
            throw new InvalidArgumentException($vendorLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($vendorLocation) && count($vendorLocation) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($vendorLocation)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
            throw new InvalidArgumentException(sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->VendorLocation) && count($this->VendorLocation) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->VendorLocation)), __LINE__);
        }
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
