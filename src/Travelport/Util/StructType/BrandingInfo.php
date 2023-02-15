<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: The additional titles associated to the brand or optional service. Providers: ACH, 1G, 1V, 1P, 1J | The price range of the Ancillary Service. Providers: 1G, 1V, 1P, 1J, ACH | Branding information for the Ancillary Service. Returned
 * in Seat Map only. Providers: 1G, 1V, 1P, 1J, ACH
 * @subpackage Structs
 */
class BrandingInfo extends AbstractStructBase
{
    /**
     * The CommercialName
     * Meta information extracted from the WSDL
     * - documentation: The commercial name of the Ancillary Service. Providers: 1G, 1V, 1P, 1J, ACH
     * - use: required
     * @var string
     */
    protected string $CommercialName;
    /**
     * The PriceRange
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: PriceRange
     * @var \Travelport\Util\StructType\PriceRange[]
     */
    protected ?array $PriceRange = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\Util\StructType\TypeTextElement[]
     */
    protected ?array $Text = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Title
     * @var \Travelport\Util\StructType\TypeTextElement[]
     */
    protected ?array $Title = null;
    /**
     * The ImageLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: ImageLocation
     * @var \Travelport\Util\StructType\ImageLocation[]
     */
    protected ?array $ImageLocation = null;
    /**
     * The ServiceGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ServiceGroup
     * @var \Travelport\Util\StructType\ServiceGroup|null
     */
    protected ?\Travelport\Util\StructType\ServiceGroup $ServiceGroup = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Specifies the AirSegment the branding information is for. Providers: ACH, 1G, 1V, 1P, 1J
     * - maxOccurs: 99
     * @var \Travelport\Util\StructType\TypeSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - documentation: The Service Sub Code of the Ancillary Service. Providers: 1G, 1V, 1P, 1J, ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceSubCode = null;
    /**
     * The ExternalServiceName
     * Meta information extracted from the WSDL
     * - documentation: The external name of the Ancillary Service. Providers: 1G, 1V, 1P, 1J, ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $ExternalServiceName = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The type of Ancillary Service. Providers: 1G, 1V, 1P, 1J, ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The Chargeable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the optional service is not offered, is available for a charge, or is included in the brand. Providers: 1G, 1V, 1P, 1J, ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $Chargeable = null;
    /**
     * Constructor method for BrandingInfo
     * @uses BrandingInfo::setCommercialName()
     * @uses BrandingInfo::setPriceRange()
     * @uses BrandingInfo::setText()
     * @uses BrandingInfo::setTitle()
     * @uses BrandingInfo::setImageLocation()
     * @uses BrandingInfo::setServiceGroup()
     * @uses BrandingInfo::setAirSegmentRef()
     * @uses BrandingInfo::setKey()
     * @uses BrandingInfo::setServiceSubCode()
     * @uses BrandingInfo::setExternalServiceName()
     * @uses BrandingInfo::setServiceType()
     * @uses BrandingInfo::setChargeable()
     * @param string $commercialName
     * @param \Travelport\Util\StructType\PriceRange[] $priceRange
     * @param \Travelport\Util\StructType\TypeTextElement[] $text
     * @param \Travelport\Util\StructType\TypeTextElement[] $title
     * @param \Travelport\Util\StructType\ImageLocation[] $imageLocation
     * @param \Travelport\Util\StructType\ServiceGroup $serviceGroup
     * @param \Travelport\Util\StructType\TypeSegmentRef[] $airSegmentRef
     * @param string $key
     * @param string $serviceSubCode
     * @param string $externalServiceName
     * @param string $serviceType
     * @param string $chargeable
     */
    public function __construct(string $commercialName, ?array $priceRange = null, ?array $text = null, ?array $title = null, ?array $imageLocation = null, ?\Travelport\Util\StructType\ServiceGroup $serviceGroup = null, ?array $airSegmentRef = null, ?string $key = null, ?string $serviceSubCode = null, ?string $externalServiceName = null, ?string $serviceType = null, ?string $chargeable = null)
    {
        $this
            ->setCommercialName($commercialName)
            ->setPriceRange($priceRange)
            ->setText($text)
            ->setTitle($title)
            ->setImageLocation($imageLocation)
            ->setServiceGroup($serviceGroup)
            ->setAirSegmentRef($airSegmentRef)
            ->setKey($key)
            ->setServiceSubCode($serviceSubCode)
            ->setExternalServiceName($externalServiceName)
            ->setServiceType($serviceType)
            ->setChargeable($chargeable);
    }
    /**
     * Get CommercialName value
     * @return string
     */
    public function getCommercialName(): string
    {
        return $this->CommercialName;
    }
    /**
     * Set CommercialName value
     * @param string $commercialName
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setCommercialName(string $commercialName): self
    {
        // validation for constraint: string
        if (!is_null($commercialName) && !is_string($commercialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commercialName, true), gettype($commercialName)), __LINE__);
        }
        $this->CommercialName = $commercialName;
        
        return $this;
    }
    /**
     * Get PriceRange value
     * @return \Travelport\Util\StructType\PriceRange[]
     */
    public function getPriceRange(): ?array
    {
        return $this->PriceRange;
    }
    /**
     * This method is responsible for validating the values passed to the setPriceRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPriceRange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePriceRangeForArrayConstraintsFromSetPriceRange(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandingInfoPriceRangeItem) {
            // validation for constraint: itemType
            if (!$brandingInfoPriceRangeItem instanceof \Travelport\Util\StructType\PriceRange) {
                $invalidValues[] = is_object($brandingInfoPriceRangeItem) ? get_class($brandingInfoPriceRangeItem) : sprintf('%s(%s)', gettype($brandingInfoPriceRangeItem), var_export($brandingInfoPriceRangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PriceRange property can only contain items of type \Travelport\Util\StructType\PriceRange, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PriceRange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceRange[] $priceRange
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setPriceRange(?array $priceRange = null): self
    {
        // validation for constraint: array
        if ('' !== ($priceRangeArrayErrorMessage = self::validatePriceRangeForArrayConstraintsFromSetPriceRange($priceRange))) {
            throw new InvalidArgumentException($priceRangeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($priceRange) && count($priceRange) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($priceRange)), __LINE__);
        }
        $this->PriceRange = $priceRange;
        
        return $this;
    }
    /**
     * Add item to PriceRange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceRange $item
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function addToPriceRange(\Travelport\Util\StructType\PriceRange $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PriceRange) {
            throw new InvalidArgumentException(sprintf('The PriceRange property can only contain items of type \Travelport\Util\StructType\PriceRange, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->PriceRange) && count($this->PriceRange) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->PriceRange)), __LINE__);
        }
        $this->PriceRange[] = $item;
        
        return $this;
    }
    /**
     * Get Text value
     * @return \Travelport\Util\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandingInfoTextItem) {
            // validation for constraint: itemType
            if (!$brandingInfoTextItem instanceof \Travelport\Util\StructType\TypeTextElement) {
                $invalidValues[] = is_object($brandingInfoTextItem) ? get_class($brandingInfoTextItem) : sprintf('%s(%s)', gettype($brandingInfoTextItem), var_export($brandingInfoTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement[] $text
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($text) && count($text) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement $item
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function addToText(\Travelport\Util\StructType\TypeTextElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTextElement) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Text) && count($this->Text) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get Title value
     * @return \Travelport\Util\StructType\TypeTextElement[]
     */
    public function getTitle(): ?array
    {
        return $this->Title;
    }
    /**
     * This method is responsible for validating the values passed to the setTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTitle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTitleForArrayConstraintsFromSetTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandingInfoTitleItem) {
            // validation for constraint: itemType
            if (!$brandingInfoTitleItem instanceof \Travelport\Util\StructType\TypeTextElement) {
                $invalidValues[] = is_object($brandingInfoTitleItem) ? get_class($brandingInfoTitleItem) : sprintf('%s(%s)', gettype($brandingInfoTitleItem), var_export($brandingInfoTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Title property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Title value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement[] $title
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setTitle(?array $title = null): self
    {
        // validation for constraint: array
        if ('' !== ($titleArrayErrorMessage = self::validateTitleForArrayConstraintsFromSetTitle($title))) {
            throw new InvalidArgumentException($titleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($title) && count($title) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Add item to Title value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement $item
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function addToTitle(\Travelport\Util\StructType\TypeTextElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTextElement) {
            throw new InvalidArgumentException(sprintf('The Title property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Title) && count($this->Title) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Title)), __LINE__);
        }
        $this->Title[] = $item;
        
        return $this;
    }
    /**
     * Get ImageLocation value
     * @return \Travelport\Util\StructType\ImageLocation[]
     */
    public function getImageLocation(): ?array
    {
        return $this->ImageLocation;
    }
    /**
     * This method is responsible for validating the values passed to the setImageLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImageLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImageLocationForArrayConstraintsFromSetImageLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandingInfoImageLocationItem) {
            // validation for constraint: itemType
            if (!$brandingInfoImageLocationItem instanceof \Travelport\Util\StructType\ImageLocation) {
                $invalidValues[] = is_object($brandingInfoImageLocationItem) ? get_class($brandingInfoImageLocationItem) : sprintf('%s(%s)', gettype($brandingInfoImageLocationItem), var_export($brandingInfoImageLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ImageLocation property can only contain items of type \Travelport\Util\StructType\ImageLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ImageLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ImageLocation[] $imageLocation
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setImageLocation(?array $imageLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($imageLocationArrayErrorMessage = self::validateImageLocationForArrayConstraintsFromSetImageLocation($imageLocation))) {
            throw new InvalidArgumentException($imageLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($imageLocation) && count($imageLocation) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($imageLocation)), __LINE__);
        }
        $this->ImageLocation = $imageLocation;
        
        return $this;
    }
    /**
     * Add item to ImageLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ImageLocation $item
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function addToImageLocation(\Travelport\Util\StructType\ImageLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ImageLocation) {
            throw new InvalidArgumentException(sprintf('The ImageLocation property can only contain items of type \Travelport\Util\StructType\ImageLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->ImageLocation) && count($this->ImageLocation) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->ImageLocation)), __LINE__);
        }
        $this->ImageLocation[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceGroup value
     * @return \Travelport\Util\StructType\ServiceGroup|null
     */
    public function getServiceGroup(): ?\Travelport\Util\StructType\ServiceGroup
    {
        return $this->ServiceGroup;
    }
    /**
     * Set ServiceGroup value
     * @param \Travelport\Util\StructType\ServiceGroup $serviceGroup
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setServiceGroup(?\Travelport\Util\StructType\ServiceGroup $serviceGroup = null): self
    {
        $this->ServiceGroup = $serviceGroup;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Util\StructType\TypeSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandingInfoAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$brandingInfoAirSegmentRefItem instanceof \Travelport\Util\StructType\TypeSegmentRef) {
                $invalidValues[] = is_object($brandingInfoAirSegmentRefItem) ? get_class($brandingInfoAirSegmentRefItem) : sprintf('%s(%s)', gettype($brandingInfoAirSegmentRefItem), var_export($brandingInfoAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\Util\StructType\TypeSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSegmentRef[] $airSegmentRef
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSegmentRef $item
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function addToAirSegmentRef(\Travelport\Util\StructType\TypeSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\Util\StructType\TypeSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ServiceSubCode value
     * @return string|null
     */
    public function getServiceSubCode(): ?string
    {
        return $this->ServiceSubCode;
    }
    /**
     * Set ServiceSubCode value
     * @param string $serviceSubCode
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceSubCode) && !is_string($serviceSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceSubCode, true), gettype($serviceSubCode)), __LINE__);
        }
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
    /**
     * Get ExternalServiceName value
     * @return string|null
     */
    public function getExternalServiceName(): ?string
    {
        return $this->ExternalServiceName;
    }
    /**
     * Set ExternalServiceName value
     * @param string $externalServiceName
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setExternalServiceName(?string $externalServiceName = null): self
    {
        // validation for constraint: string
        if (!is_null($externalServiceName) && !is_string($externalServiceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalServiceName, true), gettype($externalServiceName)), __LINE__);
        }
        $this->ExternalServiceName = $externalServiceName;
        
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Get Chargeable value
     * @return string|null
     */
    public function getChargeable(): ?string
    {
        return $this->Chargeable;
    }
    /**
     * Set Chargeable value
     * @param string $chargeable
     * @return \Travelport\Util\StructType\BrandingInfo
     */
    public function setChargeable(?string $chargeable = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeable) && !is_string($chargeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeable, true), gettype($chargeable)), __LINE__);
        }
        $this->Chargeable = $chargeable;
        
        return $this;
    }
}
