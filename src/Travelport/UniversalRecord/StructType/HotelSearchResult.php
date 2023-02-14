<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected array $HotelProperty;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    protected ?array $VendorLocation = null;
    /**
     * The HotelSearchError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelSearchError[]
     */
    protected ?array $HotelSearchError = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    protected ?array $CorporateDiscountID = null;
    /**
     * The RateInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateInfo
     * @var \Travelport\UniversalRecord\StructType\RateInfo[]
     */
    protected ?array $RateInfo = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\UniversalRecord\StructType\MediaItem|null
     */
    protected ?\Travelport\UniversalRecord\StructType\MediaItem $MediaItem = null;
    /**
     * The HotelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelType
     * @var \Travelport\UniversalRecord\StructType\HotelType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelType $HotelType = null;
    /**
     * The PropertyDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PropertyDescription
     * @var \Travelport\UniversalRecord\StructType\PropertyDescription|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PropertyDescription $PropertyDescription = null;
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
     * This method is responsible for validating the values passed to the setHotelProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPropertyForArrayConstraintsFromSetHotelProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchResultHotelPropertyItem) {
            // validation for constraint: itemType
            if (!$hotelSearchResultHotelPropertyItem instanceof \Travelport\UniversalRecord\StructType\HotelProperty) {
                $invalidValues[] = is_object($hotelSearchResultHotelPropertyItem) ? get_class($hotelSearchResultHotelPropertyItem) : sprintf('%s(%s)', gettype($hotelSearchResultHotelPropertyItem), var_export($hotelSearchResultHotelPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelProperty property can only contain items of type \Travelport\UniversalRecord\StructType\HotelProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setHotelProperty(array $hotelProperty): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPropertyArrayErrorMessage = self::validateHotelPropertyForArrayConstraintsFromSetHotelProperty($hotelProperty))) {
            throw new InvalidArgumentException($hotelPropertyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelProperty) && count($hotelProperty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelProperty)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelProperty) {
            throw new InvalidArgumentException(sprintf('The HotelProperty property can only contain items of type \Travelport\UniversalRecord\StructType\HotelProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelProperty) && count($this->HotelProperty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelProperty)), __LINE__);
        }
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
        foreach ($values as $hotelSearchResultVendorLocationItem) {
            // validation for constraint: itemType
            if (!$hotelSearchResultVendorLocationItem instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
                $invalidValues[] = is_object($hotelSearchResultVendorLocationItem) ? get_class($hotelSearchResultVendorLocationItem) : sprintf('%s(%s)', gettype($hotelSearchResultVendorLocationItem), var_export($hotelSearchResultVendorLocationItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationArrayErrorMessage = self::validateVendorLocationForArrayConstraintsFromSetVendorLocation($vendorLocation))) {
            throw new InvalidArgumentException($vendorLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vendorLocation) && count($vendorLocation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vendorLocation)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
            throw new InvalidArgumentException(sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VendorLocation) && count($this->VendorLocation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VendorLocation)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setHotelSearchError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelSearchError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelSearchErrorForArrayConstraintsFromSetHotelSearchError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchResultHotelSearchErrorItem) {
            // validation for constraint: itemType
            if (!$hotelSearchResultHotelSearchErrorItem instanceof \Travelport\UniversalRecord\StructType\HotelSearchError) {
                $invalidValues[] = is_object($hotelSearchResultHotelSearchErrorItem) ? get_class($hotelSearchResultHotelSearchErrorItem) : sprintf('%s(%s)', gettype($hotelSearchResultHotelSearchErrorItem), var_export($hotelSearchResultHotelSearchErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelSearchError property can only contain items of type \Travelport\UniversalRecord\StructType\HotelSearchError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelSearchError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelSearchError[] $hotelSearchError
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setHotelSearchError(?array $hotelSearchError = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelSearchErrorArrayErrorMessage = self::validateHotelSearchErrorForArrayConstraintsFromSetHotelSearchError($hotelSearchError))) {
            throw new InvalidArgumentException($hotelSearchErrorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelSearchError) && count($hotelSearchError) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelSearchError)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelSearchError) {
            throw new InvalidArgumentException(sprintf('The HotelSearchError property can only contain items of type \Travelport\UniversalRecord\StructType\HotelSearchError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelSearchError) && count($this->HotelSearchError) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelSearchError)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCorporateDiscountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorporateDiscountID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchResultCorporateDiscountIDItem) {
            // validation for constraint: itemType
            if (!$hotelSearchResultCorporateDiscountIDItem instanceof \Travelport\UniversalRecord\StructType\CorporateDiscountID) {
                $invalidValues[] = is_object($hotelSearchResultCorporateDiscountIDItem) ? get_class($hotelSearchResultCorporateDiscountIDItem) : sprintf('%s(%s)', gettype($hotelSearchResultCorporateDiscountIDItem), var_export($hotelSearchResultCorporateDiscountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CorporateDiscountID property can only contain items of type \Travelport\UniversalRecord\StructType\CorporateDiscountID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($corporateDiscountIDArrayErrorMessage = self::validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID($corporateDiscountID))) {
            throw new InvalidArgumentException($corporateDiscountIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($corporateDiscountID) && count($corporateDiscountID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($corporateDiscountID)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CorporateDiscountID) {
            throw new InvalidArgumentException(sprintf('The CorporateDiscountID property can only contain items of type \Travelport\UniversalRecord\StructType\CorporateDiscountID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CorporateDiscountID) && count($this->CorporateDiscountID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CorporateDiscountID)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRateInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRateInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRateInfoForArrayConstraintsFromSetRateInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchResultRateInfoItem) {
            // validation for constraint: itemType
            if (!$hotelSearchResultRateInfoItem instanceof \Travelport\UniversalRecord\StructType\RateInfo) {
                $invalidValues[] = is_object($hotelSearchResultRateInfoItem) ? get_class($hotelSearchResultRateInfoItem) : sprintf('%s(%s)', gettype($hotelSearchResultRateInfoItem), var_export($hotelSearchResultRateInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RateInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RateInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RateInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RateInfo[] $rateInfo
     * @return \Travelport\UniversalRecord\StructType\HotelSearchResult
     */
    public function setRateInfo(?array $rateInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($rateInfoArrayErrorMessage = self::validateRateInfoForArrayConstraintsFromSetRateInfo($rateInfo))) {
            throw new InvalidArgumentException($rateInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($rateInfo) && count($rateInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($rateInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RateInfo) {
            throw new InvalidArgumentException(sprintf('The RateInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RateInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RateInfo) && count($this->RateInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RateInfo)), __LINE__);
        }
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
