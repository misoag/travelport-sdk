<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Hotel Property description. Maximum of 100 words returned. | Supported Providers:1P | The hotel property. Multiple property can only be supported with GDS property aggrigation. | A single hotel availabilty result.
 * @subpackage Structs
 */
class HotelSearchResult extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty[]
     */
    public array $HotelProperty;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\Hotel\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
    /**
     * The HotelSearchError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\HotelSearchError[]
     */
    public ?array $HotelSearchError = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    public ?array $CorporateDiscountID = null;
    /**
     * The RateInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateInfo
     * @var \Travelport\Hotel\StructType\RateInfo[]
     */
    public ?array $RateInfo = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\Hotel\StructType\MediaItem|null
     */
    public ?\Travelport\Hotel\StructType\MediaItem $MediaItem = null;
    /**
     * The HotelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelType
     * @var \Travelport\Hotel\StructType\HotelType|null
     */
    public ?\Travelport\Hotel\StructType\HotelType $HotelType = null;
    /**
     * The PropertyDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PropertyDescription
     * @var \Travelport\Hotel\StructType\PropertyDescription|null
     */
    public ?\Travelport\Hotel\StructType\PropertyDescription $PropertyDescription = null;
    /**
     * Constructor method for HotelSearchResult
     * @uses HotelSearchResult::setHotelProperty()
     * @uses HotelSearchResult::setVendorLocation()
     * @uses HotelSearchResult::setHotelSearchError()
     * @uses HotelSearchResult::setCorporateDiscountID()
     * @uses HotelSearchResult::setRateInfo()
     * @uses HotelSearchResult::setMediaItem()
     * @uses HotelSearchResult::setHotelType()
     * @uses HotelSearchResult::setPropertyDescription()
     * @param \Travelport\Hotel\StructType\HotelProperty[] $hotelProperty
     * @param \Travelport\Hotel\StructType\VendorLocation[] $vendorLocation
     * @param \Travelport\Hotel\StructType\HotelSearchError[] $hotelSearchError
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @param \Travelport\Hotel\StructType\RateInfo[] $rateInfo
     * @param \Travelport\Hotel\StructType\MediaItem $mediaItem
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     * @param \Travelport\Hotel\StructType\PropertyDescription $propertyDescription
     */
    public function __construct(array $hotelProperty, ?array $vendorLocation = null, ?array $hotelSearchError = null, ?array $corporateDiscountID = null, ?array $rateInfo = null, ?\Travelport\Hotel\StructType\MediaItem $mediaItem = null, ?\Travelport\Hotel\StructType\HotelType $hotelType = null, ?\Travelport\Hotel\StructType\PropertyDescription $propertyDescription = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setVendorLocation($vendorLocation)
            ->setHotelSearchError($hotelSearchError)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setRateInfo($rateInfo)
            ->setMediaItem($mediaItem)
            ->setHotelType($hotelType)
            ->setPropertyDescription($propertyDescription);
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty[]
     */
    public function getHotelProperty(): array
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setHotelProperty(array $hotelProperty): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelProperty $item
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function addToHotelProperty(\Travelport\Hotel\StructType\HotelProperty $item): self
    {
        $this->HotelProperty[] = $item;
        
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
     * @return \Travelport\Hotel\StructType\HotelSearchResult
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
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function addToVendorLocation(\Travelport\Hotel\StructType\VendorLocation $item): self
    {
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelSearchError value
     * @return \Travelport\Hotel\StructType\HotelSearchError[]
     */
    public function getHotelSearchError(): ?array
    {
        return $this->HotelSearchError;
    }
    /**
     * Set HotelSearchError value
     * @param \Travelport\Hotel\StructType\HotelSearchError[] $hotelSearchError
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setHotelSearchError(?array $hotelSearchError = null): self
    {
        $this->HotelSearchError = $hotelSearchError;
        
        return $this;
    }
    /**
     * Add item to HotelSearchError value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelSearchError $item
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function addToHotelSearchError(\Travelport\Hotel\StructType\HotelSearchError $item): self
    {
        $this->HotelSearchError[] = $item;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CorporateDiscountID $item
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function addToCorporateDiscountID(\Travelport\Hotel\StructType\CorporateDiscountID $item): self
    {
        $this->CorporateDiscountID[] = $item;
        
        return $this;
    }
    /**
     * Get RateInfo value
     * @return \Travelport\Hotel\StructType\RateInfo[]
     */
    public function getRateInfo(): ?array
    {
        return $this->RateInfo;
    }
    /**
     * Set RateInfo value
     * @param \Travelport\Hotel\StructType\RateInfo[] $rateInfo
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setRateInfo(?array $rateInfo = null): self
    {
        $this->RateInfo = $rateInfo;
        
        return $this;
    }
    /**
     * Add item to RateInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\RateInfo $item
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function addToRateInfo(\Travelport\Hotel\StructType\RateInfo $item): self
    {
        $this->RateInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \Travelport\Hotel\StructType\MediaItem|null
     */
    public function getMediaItem(): ?\Travelport\Hotel\StructType\MediaItem
    {
        return $this->MediaItem;
    }
    /**
     * Set MediaItem value
     * @param \Travelport\Hotel\StructType\MediaItem $mediaItem
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setMediaItem(?\Travelport\Hotel\StructType\MediaItem $mediaItem = null): self
    {
        $this->MediaItem = $mediaItem;
        
        return $this;
    }
    /**
     * Get HotelType value
     * @return \Travelport\Hotel\StructType\HotelType|null
     */
    public function getHotelType(): ?\Travelport\Hotel\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \Travelport\Hotel\StructType\HotelType $hotelType
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setHotelType(?\Travelport\Hotel\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
    /**
     * Get PropertyDescription value
     * @return \Travelport\Hotel\StructType\PropertyDescription|null
     */
    public function getPropertyDescription(): ?\Travelport\Hotel\StructType\PropertyDescription
    {
        return $this->PropertyDescription;
    }
    /**
     * Set PropertyDescription value
     * @param \Travelport\Hotel\StructType\PropertyDescription $propertyDescription
     * @return \Travelport\Hotel\StructType\HotelSearchResult
     */
    public function setPropertyDescription(?\Travelport\Hotel\StructType\PropertyDescription $propertyDescription = null): self
    {
        $this->PropertyDescription = $propertyDescription;
        
        return $this;
    }
}
