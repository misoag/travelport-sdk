<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\HotelProperty[]
     */
    public array $HotelProperty;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
    /**
     * The HotelSearchError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelSearchError[]
     */
    public ?array $HotelSearchError = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    public ?array $CorporateDiscountID = null;
    /**
     * The RateInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateInfo
     * @var \Travelport\UniversalRecord\StructType\RateInfo[]
     */
    public ?array $RateInfo = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\UniversalRecord\StructType\MediaItem|null
     */
    public ?\Travelport\UniversalRecord\StructType\MediaItem $MediaItem = null;
    /**
     * The HotelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelType
     * @var \Travelport\UniversalRecord\StructType\HotelType|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelType $HotelType = null;
    /**
     * The PropertyDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PropertyDescription
     * @var \Travelport\UniversalRecord\StructType\PropertyDescription|null
     */
    public ?\Travelport\UniversalRecord\StructType\PropertyDescription $PropertyDescription = null;
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
     * @param \Travelport\UniversalRecord\StructType\HotelProperty[] $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @param \Travelport\UniversalRecord\StructType\HotelSearchError[] $hotelSearchError
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @param \Travelport\UniversalRecord\StructType\RateInfo[] $rateInfo
     * @param \Travelport\UniversalRecord\StructType\MediaItem $mediaItem
     * @param \Travelport\UniversalRecord\StructType\HotelType $hotelType
     * @param \Travelport\UniversalRecord\StructType\PropertyDescription $propertyDescription
     */
    public function __construct(array $hotelProperty, ?array $vendorLocation = null, ?array $hotelSearchError = null, ?array $corporateDiscountID = null, ?array $rateInfo = null, ?\Travelport\UniversalRecord\StructType\MediaItem $mediaItem = null, ?\Travelport\UniversalRecord\StructType\HotelType $hotelType = null, ?\Travelport\UniversalRecord\StructType\PropertyDescription $propertyDescription = null)
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty[]
     */
    public function getHotelProperty(): array
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\UniversalRecord\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setHotelProperty(array $hotelProperty): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $item
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function addToHotelProperty(\Travelport\UniversalRecord\StructType\HotelProperty $item): self
    {
        $this->HotelProperty[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
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
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function addToVendorLocation(\Travelport\UniversalRecord\StructType\VendorLocation $item): self
    {
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelSearchError value
     * @return \Travelport\UniversalRecord\StructType\HotelSearchError[]
     */
    public function getHotelSearchError(): ?array
    {
        return $this->HotelSearchError;
    }
    /**
     * Set HotelSearchError value
     * @param \Travelport\UniversalRecord\StructType\HotelSearchError[] $hotelSearchError
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setHotelSearchError(?array $hotelSearchError = null): self
    {
        $this->HotelSearchError = $hotelSearchError;
        
        return $this;
    }
    /**
     * Add item to HotelSearchError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelSearchError $item
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function addToHotelSearchError(\Travelport\UniversalRecord\StructType\HotelSearchError $item): self
    {
        $this->HotelSearchError[] = $item;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID $item
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function addToCorporateDiscountID(\Travelport\UniversalRecord\StructType\CorporateDiscountID $item): self
    {
        $this->CorporateDiscountID[] = $item;
        
        return $this;
    }
    /**
     * Get RateInfo value
     * @return \Travelport\UniversalRecord\StructType\RateInfo[]
     */
    public function getRateInfo(): ?array
    {
        return $this->RateInfo;
    }
    /**
     * Set RateInfo value
     * @param \Travelport\UniversalRecord\StructType\RateInfo[] $rateInfo
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setRateInfo(?array $rateInfo = null): self
    {
        $this->RateInfo = $rateInfo;
        
        return $this;
    }
    /**
     * Add item to RateInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RateInfo $item
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function addToRateInfo(\Travelport\UniversalRecord\StructType\RateInfo $item): self
    {
        $this->RateInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \Travelport\UniversalRecord\StructType\MediaItem|null
     */
    public function getMediaItem(): ?\Travelport\UniversalRecord\StructType\MediaItem
    {
        return $this->MediaItem;
    }
    /**
     * Set MediaItem value
     * @param \Travelport\UniversalRecord\StructType\MediaItem $mediaItem
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setMediaItem(?\Travelport\UniversalRecord\StructType\MediaItem $mediaItem = null): self
    {
        $this->MediaItem = $mediaItem;
        
        return $this;
    }
    /**
     * Get HotelType value
     * @return \Travelport\UniversalRecord\StructType\HotelType|null
     */
    public function getHotelType(): ?\Travelport\UniversalRecord\StructType\HotelType
    {
        return $this->HotelType;
    }
    /**
     * Set HotelType value
     * @param \Travelport\UniversalRecord\StructType\HotelType $hotelType
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setHotelType(?\Travelport\UniversalRecord\StructType\HotelType $hotelType = null): self
    {
        $this->HotelType = $hotelType;
        
        return $this;
    }
    /**
     * Get PropertyDescription value
     * @return \Travelport\UniversalRecord\StructType\PropertyDescription|null
     */
    public function getPropertyDescription(): ?\Travelport\UniversalRecord\StructType\PropertyDescription
    {
        return $this->PropertyDescription;
    }
    /**
     * Set PropertyDescription value
     * @param \Travelport\UniversalRecord\StructType\PropertyDescription $propertyDescription
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setPropertyDescription(?\Travelport\UniversalRecord\StructType\PropertyDescription $propertyDescription = null): self
    {
        $this->PropertyDescription = $propertyDescription;
        
        return $this;
    }
}
