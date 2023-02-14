<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\HotelLocation|null
     */
    protected ?\StructType\HotelLocation $HotelLocation = null;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \StructType\VendorLocation[]
     */
    protected ?array $VendorLocation = null;
    /**
     * The HotelAddress
     * Meta information extracted from the WSDL
     * - documentation: Search by address or postal code. Applicable for 1G, 1V, 1P
     * - minOccurs: 0
     * @var \StructType\TypeStructuredAddress|null
     */
    protected ?\StructType\TypeStructuredAddress $HotelAddress = null;
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - documentation: Search for hotels near a reference point. HotelLocation/Location is mandatory for aggregated scenario if ReferencePoint is used. Applicable for 1G,1V,1P. Country/State are only applicable for 1P
     * - minOccurs: 0
     * @var \StructType\TypeHotelReferencePoint|null
     */
    protected ?\StructType\TypeHotelReferencePoint $ReferencePoint = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \StructType\CoordinateLocation|null
     */
    protected ?\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \StructType\Distance|null
     */
    protected ?\StructType\Distance $Distance = null;
    /**
     * Constructor method for HotelSearchLocation
     * @uses HotelSearchLocation::setHotelLocation()
     * @uses HotelSearchLocation::setVendorLocation()
     * @uses HotelSearchLocation::setHotelAddress()
     * @uses HotelSearchLocation::setReferencePoint()
     * @uses HotelSearchLocation::setCoordinateLocation()
     * @uses HotelSearchLocation::setDistance()
     * @param \StructType\HotelLocation $hotelLocation
     * @param \StructType\VendorLocation[] $vendorLocation
     * @param \StructType\TypeStructuredAddress $hotelAddress
     * @param \StructType\TypeHotelReferencePoint $referencePoint
     * @param \StructType\CoordinateLocation $coordinateLocation
     * @param \StructType\Distance $distance
     */
    public function __construct(?\StructType\HotelLocation $hotelLocation = null, ?array $vendorLocation = null, ?\StructType\TypeStructuredAddress $hotelAddress = null, ?\StructType\TypeHotelReferencePoint $referencePoint = null, ?\StructType\CoordinateLocation $coordinateLocation = null, ?\StructType\Distance $distance = null)
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
     * @return \StructType\HotelLocation|null
     */
    public function getHotelLocation(): ?\StructType\HotelLocation
    {
        return $this->HotelLocation;
    }
    /**
     * Set HotelLocation value
     * @param \StructType\HotelLocation $hotelLocation
     * @return \StructType\HotelSearchLocation
     */
    public function setHotelLocation(?\StructType\HotelLocation $hotelLocation = null): self
    {
        $this->HotelLocation = $hotelLocation;
        
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * This method is responsible for validating the values passed to the setVendorLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendorLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorLocationForArrayConstraintsFromSetVendorLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchLocationVendorLocationItem) {
            // validation for constraint: itemType
            if (!$hotelSearchLocationVendorLocationItem instanceof \StructType\VendorLocation) {
                $invalidValues[] = is_object($hotelSearchLocationVendorLocationItem) ? get_class($hotelSearchLocationVendorLocationItem) : sprintf('%s(%s)', gettype($hotelSearchLocationVendorLocationItem), var_export($hotelSearchLocationVendorLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VendorLocation property can only contain items of type \StructType\VendorLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VendorLocation value
     * @throws InvalidArgumentException
     * @param \StructType\VendorLocation[] $vendorLocation
     * @return \StructType\HotelSearchLocation
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationArrayErrorMessage = self::validateVendorLocationForArrayConstraintsFromSetVendorLocation($vendorLocation))) {
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
     * @param \StructType\VendorLocation $item
     * @return \StructType\HotelSearchLocation
     */
    public function addToVendorLocation(\StructType\VendorLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VendorLocation) {
            throw new InvalidArgumentException(sprintf('The VendorLocation property can only contain items of type \StructType\VendorLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \StructType\TypeStructuredAddress|null
     */
    public function getHotelAddress(): ?\StructType\TypeStructuredAddress
    {
        return $this->HotelAddress;
    }
    /**
     * Set HotelAddress value
     * @param \StructType\TypeStructuredAddress $hotelAddress
     * @return \StructType\HotelSearchLocation
     */
    public function setHotelAddress(?\StructType\TypeStructuredAddress $hotelAddress = null): self
    {
        $this->HotelAddress = $hotelAddress;
        
        return $this;
    }
    /**
     * Get ReferencePoint value
     * @return \StructType\TypeHotelReferencePoint|null
     */
    public function getReferencePoint(): ?\StructType\TypeHotelReferencePoint
    {
        return $this->ReferencePoint;
    }
    /**
     * Set ReferencePoint value
     * @param \StructType\TypeHotelReferencePoint $referencePoint
     * @return \StructType\HotelSearchLocation
     */
    public function setReferencePoint(?\StructType\TypeHotelReferencePoint $referencePoint = null): self
    {
        $this->ReferencePoint = $referencePoint;
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation;
    }
    /**
     * Set CoordinateLocation value
     * @param \StructType\CoordinateLocation $coordinateLocation
     * @return \StructType\HotelSearchLocation
     */
    public function setCoordinateLocation(?\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        $this->CoordinateLocation = $coordinateLocation;
        
        return $this;
    }
    /**
     * Get Distance value
     * @return \StructType\Distance|null
     */
    public function getDistance(): ?\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \StructType\Distance $distance
     * @return \StructType\HotelSearchLocation
     */
    public function setDistance(?\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
