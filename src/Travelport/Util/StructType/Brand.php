<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Brand StructType
 * Meta information extracted from the WSDL
 * - documentation: Default brand details. | The unique identifier of the Upsell brand | Service associated with this brand | Brand rules | Images associated to the brand | Text associated to the brand | The additional titles associated to the brand |
 * Commercially recognized product offered by an airline
 * @subpackage Structs
 */
class Brand extends AbstractStructBase
{
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
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\Util\StructType\TypeTextElement[]
     */
    protected ?array $Text = null;
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
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Util\StructType\OptionalServices|null
     */
    protected ?\Travelport\Util\StructType\OptionalServices $OptionalServices = null;
    /**
     * The Rules
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Rules
     * @var \Travelport\Util\StructType\Rules[]
     */
    protected ?array $Rules = null;
    /**
     * The ServiceAssociations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ServiceAssociations
     * @var \Travelport\Util\StructType\ServiceAssociations|null
     */
    protected ?\Travelport\Util\StructType\ServiceAssociations $ServiceAssociations = null;
    /**
     * The UpsellBrand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UpsellBrand
     * @var \Travelport\Util\StructType\UpsellBrand|null
     */
    protected ?\Travelport\Util\StructType\UpsellBrand $UpsellBrand = null;
    /**
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeApplicableSegment[]
     */
    protected ?array $ApplicableSegment = null;
    /**
     * The DefaultBrandDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: DefaultBrandDetail
     * @var \Travelport\Util\StructType\TypeDefaultBrandDetail[]
     */
    protected ?array $DefaultBrandDetail = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Brand Key | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * @var string|null
     */
    protected ?string $BrandID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The Title of the brand
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The AirItineraryDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: AirItinerary associated with this brand | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $AirItineraryDetailsRef = null;
    /**
     * The UpSellBrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * @var string|null
     */
    protected ?string $UpSellBrandID = null;
    /**
     * The BrandFound
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether brand for the fare was found for carrier or not
     * @var bool|null
     */
    protected ?bool $BrandFound = null;
    /**
     * The UpSellBrandFound
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether upsell brand for the fare was found for carrier or not
     * @var bool|null
     */
    protected ?bool $UpSellBrandFound = null;
    /**
     * The BrandedDetailsAvailable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if full details of the brand is available
     * @var bool|null
     */
    protected ?bool $BrandedDetailsAvailable = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The BrandTier
     * Meta information extracted from the WSDL
     * - documentation: Modifier to price by specific brand tier number. | Used for Character Strings, length 1 to 10.
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $BrandTier = null;
    /**
     * The BrandMaintained
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the brand was maintained from the original ticket. | Used for Character Strings, length 1 to 99.
     * - base: xs:string
     * - maxLength: 99
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $BrandMaintained = null;
    /**
     * Constructor method for Brand
     * @uses Brand::setTitle()
     * @uses Brand::setText()
     * @uses Brand::setImageLocation()
     * @uses Brand::setOptionalServices()
     * @uses Brand::setRules()
     * @uses Brand::setServiceAssociations()
     * @uses Brand::setUpsellBrand()
     * @uses Brand::setApplicableSegment()
     * @uses Brand::setDefaultBrandDetail()
     * @uses Brand::setKey()
     * @uses Brand::setBrandID()
     * @uses Brand::setName()
     * @uses Brand::setAirItineraryDetailsRef()
     * @uses Brand::setUpSellBrandID()
     * @uses Brand::setBrandFound()
     * @uses Brand::setUpSellBrandFound()
     * @uses Brand::setBrandedDetailsAvailable()
     * @uses Brand::setCarrier()
     * @uses Brand::setBrandTier()
     * @uses Brand::setBrandMaintained()
     * @param \Travelport\Util\StructType\TypeTextElement[] $title
     * @param \Travelport\Util\StructType\TypeTextElement[] $text
     * @param \Travelport\Util\StructType\ImageLocation[] $imageLocation
     * @param \Travelport\Util\StructType\OptionalServices $optionalServices
     * @param \Travelport\Util\StructType\Rules[] $rules
     * @param \Travelport\Util\StructType\ServiceAssociations $serviceAssociations
     * @param \Travelport\Util\StructType\UpsellBrand $upsellBrand
     * @param \Travelport\Util\StructType\TypeApplicableSegment[] $applicableSegment
     * @param \Travelport\Util\StructType\TypeDefaultBrandDetail[] $defaultBrandDetail
     * @param string $key
     * @param string $brandID
     * @param string $name
     * @param string $airItineraryDetailsRef
     * @param string $upSellBrandID
     * @param bool $brandFound
     * @param bool $upSellBrandFound
     * @param bool $brandedDetailsAvailable
     * @param string $carrier
     * @param string $brandTier
     * @param string $brandMaintained
     */
    public function __construct(?array $title = null, ?array $text = null, ?array $imageLocation = null, ?\Travelport\Util\StructType\OptionalServices $optionalServices = null, ?array $rules = null, ?\Travelport\Util\StructType\ServiceAssociations $serviceAssociations = null, ?\Travelport\Util\StructType\UpsellBrand $upsellBrand = null, ?array $applicableSegment = null, ?array $defaultBrandDetail = null, ?string $key = null, ?string $brandID = null, ?string $name = null, ?string $airItineraryDetailsRef = null, ?string $upSellBrandID = null, ?bool $brandFound = null, ?bool $upSellBrandFound = null, ?bool $brandedDetailsAvailable = null, ?string $carrier = null, ?string $brandTier = null, ?string $brandMaintained = null)
    {
        $this
            ->setTitle($title)
            ->setText($text)
            ->setImageLocation($imageLocation)
            ->setOptionalServices($optionalServices)
            ->setRules($rules)
            ->setServiceAssociations($serviceAssociations)
            ->setUpsellBrand($upsellBrand)
            ->setApplicableSegment($applicableSegment)
            ->setDefaultBrandDetail($defaultBrandDetail)
            ->setKey($key)
            ->setBrandID($brandID)
            ->setName($name)
            ->setAirItineraryDetailsRef($airItineraryDetailsRef)
            ->setUpSellBrandID($upSellBrandID)
            ->setBrandFound($brandFound)
            ->setUpSellBrandFound($upSellBrandFound)
            ->setBrandedDetailsAvailable($brandedDetailsAvailable)
            ->setCarrier($carrier)
            ->setBrandTier($brandTier)
            ->setBrandMaintained($brandMaintained);
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
     * This method is responsible for validating the value(s) passed to the setTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTitle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTitleForArrayConstraintFromSetTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandTitleItem) {
            // validation for constraint: itemType
            if (!$brandTitleItem instanceof \Travelport\Util\StructType\TypeTextElement) {
                $invalidValues[] = is_object($brandTitleItem) ? get_class($brandTitleItem) : sprintf('%s(%s)', gettype($brandTitleItem), var_export($brandTitleItem, true));
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
     * @return \Travelport\Util\StructType\Brand
     */
    public function setTitle(?array $title = null): self
    {
        // validation for constraint: array
        if ('' !== ($titleArrayErrorMessage = self::validateTitleForArrayConstraintFromSetTitle($title))) {
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
     * @return \Travelport\Util\StructType\Brand
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
     * Get Text value
     * @return \Travelport\Util\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandTextItem) {
            // validation for constraint: itemType
            if (!$brandTextItem instanceof \Travelport\Util\StructType\TypeTextElement) {
                $invalidValues[] = is_object($brandTextItem) ? get_class($brandTextItem) : sprintf('%s(%s)', gettype($brandTextItem), var_export($brandTextItem, true));
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
     * @return \Travelport\Util\StructType\Brand
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($text) && count($text) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTextElement $item
     * @return \Travelport\Util\StructType\Brand
     */
    public function addToText(\Travelport\Util\StructType\TypeTextElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTextElement) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type \Travelport\Util\StructType\TypeTextElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->Text) && count($this->Text) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
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
     * This method is responsible for validating the value(s) passed to the setImageLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImageLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImageLocationForArrayConstraintFromSetImageLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandImageLocationItem) {
            // validation for constraint: itemType
            if (!$brandImageLocationItem instanceof \Travelport\Util\StructType\ImageLocation) {
                $invalidValues[] = is_object($brandImageLocationItem) ? get_class($brandImageLocationItem) : sprintf('%s(%s)', gettype($brandImageLocationItem), var_export($brandImageLocationItem, true));
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
     * @return \Travelport\Util\StructType\Brand
     */
    public function setImageLocation(?array $imageLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($imageLocationArrayErrorMessage = self::validateImageLocationForArrayConstraintFromSetImageLocation($imageLocation))) {
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
     * @return \Travelport\Util\StructType\Brand
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
     * Get OptionalServices value
     * @return \Travelport\Util\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\Util\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\Util\StructType\OptionalServices $optionalServices
     * @return \Travelport\Util\StructType\Brand
     */
    public function setOptionalServices(?\Travelport\Util\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get Rules value
     * @return \Travelport\Util\StructType\Rules[]
     */
    public function getRules(): ?array
    {
        return $this->Rules;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRules method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRules method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRulesForArrayConstraintFromSetRules(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandRulesItem) {
            // validation for constraint: itemType
            if (!$brandRulesItem instanceof \Travelport\Util\StructType\Rules) {
                $invalidValues[] = is_object($brandRulesItem) ? get_class($brandRulesItem) : sprintf('%s(%s)', gettype($brandRulesItem), var_export($brandRulesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rules property can only contain items of type \Travelport\Util\StructType\Rules, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Rules value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Rules[] $rules
     * @return \Travelport\Util\StructType\Brand
     */
    public function setRules(?array $rules = null): self
    {
        // validation for constraint: array
        if ('' !== ($rulesArrayErrorMessage = self::validateRulesForArrayConstraintFromSetRules($rules))) {
            throw new InvalidArgumentException($rulesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($rules) && count($rules) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($rules)), __LINE__);
        }
        $this->Rules = $rules;
        
        return $this;
    }
    /**
     * Add item to Rules value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Rules $item
     * @return \Travelport\Util\StructType\Brand
     */
    public function addToRules(\Travelport\Util\StructType\Rules $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Rules) {
            throw new InvalidArgumentException(sprintf('The Rules property can only contain items of type \Travelport\Util\StructType\Rules, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Rules) && count($this->Rules) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Rules)), __LINE__);
        }
        $this->Rules[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceAssociations value
     * @return \Travelport\Util\StructType\ServiceAssociations|null
     */
    public function getServiceAssociations(): ?\Travelport\Util\StructType\ServiceAssociations
    {
        return $this->ServiceAssociations;
    }
    /**
     * Set ServiceAssociations value
     * @param \Travelport\Util\StructType\ServiceAssociations $serviceAssociations
     * @return \Travelport\Util\StructType\Brand
     */
    public function setServiceAssociations(?\Travelport\Util\StructType\ServiceAssociations $serviceAssociations = null): self
    {
        $this->ServiceAssociations = $serviceAssociations;
        
        return $this;
    }
    /**
     * Get UpsellBrand value
     * @return \Travelport\Util\StructType\UpsellBrand|null
     */
    public function getUpsellBrand(): ?\Travelport\Util\StructType\UpsellBrand
    {
        return $this->UpsellBrand;
    }
    /**
     * Set UpsellBrand value
     * @param \Travelport\Util\StructType\UpsellBrand $upsellBrand
     * @return \Travelport\Util\StructType\Brand
     */
    public function setUpsellBrand(?\Travelport\Util\StructType\UpsellBrand $upsellBrand = null): self
    {
        $this->UpsellBrand = $upsellBrand;
        
        return $this;
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\Util\StructType\TypeApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setApplicableSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicableSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicableSegmentForArrayConstraintFromSetApplicableSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandApplicableSegmentItem) {
            // validation for constraint: itemType
            if (!$brandApplicableSegmentItem instanceof \Travelport\Util\StructType\TypeApplicableSegment) {
                $invalidValues[] = is_object($brandApplicableSegmentItem) ? get_class($brandApplicableSegmentItem) : sprintf('%s(%s)', gettype($brandApplicableSegmentItem), var_export($brandApplicableSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplicableSegment property can only contain items of type \Travelport\Util\StructType\TypeApplicableSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeApplicableSegment[] $applicableSegment
     * @return \Travelport\Util\StructType\Brand
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($applicableSegmentArrayErrorMessage = self::validateApplicableSegmentForArrayConstraintFromSetApplicableSegment($applicableSegment))) {
            throw new InvalidArgumentException($applicableSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($applicableSegment) && count($applicableSegment) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($applicableSegment)), __LINE__);
        }
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeApplicableSegment $item
     * @return \Travelport\Util\StructType\Brand
     */
    public function addToApplicableSegment(\Travelport\Util\StructType\TypeApplicableSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeApplicableSegment) {
            throw new InvalidArgumentException(sprintf('The ApplicableSegment property can only contain items of type \Travelport\Util\StructType\TypeApplicableSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->ApplicableSegment) && count($this->ApplicableSegment) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->ApplicableSegment)), __LINE__);
        }
        $this->ApplicableSegment[] = $item;
        
        return $this;
    }
    /**
     * Get DefaultBrandDetail value
     * @return \Travelport\Util\StructType\TypeDefaultBrandDetail[]
     */
    public function getDefaultBrandDetail(): ?array
    {
        return $this->DefaultBrandDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDefaultBrandDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDefaultBrandDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDefaultBrandDetailForArrayConstraintFromSetDefaultBrandDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandDefaultBrandDetailItem) {
            // validation for constraint: itemType
            if (!$brandDefaultBrandDetailItem instanceof \Travelport\Util\StructType\TypeDefaultBrandDetail) {
                $invalidValues[] = is_object($brandDefaultBrandDetailItem) ? get_class($brandDefaultBrandDetailItem) : sprintf('%s(%s)', gettype($brandDefaultBrandDetailItem), var_export($brandDefaultBrandDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DefaultBrandDetail property can only contain items of type \Travelport\Util\StructType\TypeDefaultBrandDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DefaultBrandDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeDefaultBrandDetail[] $defaultBrandDetail
     * @return \Travelport\Util\StructType\Brand
     */
    public function setDefaultBrandDetail(?array $defaultBrandDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($defaultBrandDetailArrayErrorMessage = self::validateDefaultBrandDetailForArrayConstraintFromSetDefaultBrandDetail($defaultBrandDetail))) {
            throw new InvalidArgumentException($defaultBrandDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($defaultBrandDetail) && count($defaultBrandDetail) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($defaultBrandDetail)), __LINE__);
        }
        $this->DefaultBrandDetail = $defaultBrandDetail;
        
        return $this;
    }
    /**
     * Add item to DefaultBrandDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeDefaultBrandDetail $item
     * @return \Travelport\Util\StructType\Brand
     */
    public function addToDefaultBrandDetail(\Travelport\Util\StructType\TypeDefaultBrandDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeDefaultBrandDetail) {
            throw new InvalidArgumentException(sprintf('The DefaultBrandDetail property can only contain items of type \Travelport\Util\StructType\TypeDefaultBrandDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->DefaultBrandDetail) && count($this->DefaultBrandDetail) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->DefaultBrandDetail)), __LINE__);
        }
        $this->DefaultBrandDetail[] = $item;
        
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
     * @return \Travelport\Util\StructType\Brand
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
     * Get BrandID value
     * @return string|null
     */
    public function getBrandID(): ?string
    {
        return $this->BrandID;
    }
    /**
     * Set BrandID value
     * @param string $brandID
     * @return \Travelport\Util\StructType\Brand
     */
    public function setBrandID(?string $brandID = null): self
    {
        // validation for constraint: string
        if (!is_null($brandID) && !is_string($brandID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandID, true), gettype($brandID)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($brandID) && mb_strlen((string) $brandID) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $brandID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($brandID) && mb_strlen((string) $brandID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $brandID)), __LINE__);
        }
        $this->BrandID = $brandID;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Util\StructType\Brand
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get AirItineraryDetailsRef value
     * @return string|null
     */
    public function getAirItineraryDetailsRef(): ?string
    {
        return $this->AirItineraryDetailsRef;
    }
    /**
     * Set AirItineraryDetailsRef value
     * @param string $airItineraryDetailsRef
     * @return \Travelport\Util\StructType\Brand
     */
    public function setAirItineraryDetailsRef(?string $airItineraryDetailsRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airItineraryDetailsRef) && !is_string($airItineraryDetailsRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airItineraryDetailsRef, true), gettype($airItineraryDetailsRef)), __LINE__);
        }
        $this->AirItineraryDetailsRef = $airItineraryDetailsRef;
        
        return $this;
    }
    /**
     * Get UpSellBrandID value
     * @return string|null
     */
    public function getUpSellBrandID(): ?string
    {
        return $this->UpSellBrandID;
    }
    /**
     * Set UpSellBrandID value
     * @param string $upSellBrandID
     * @return \Travelport\Util\StructType\Brand
     */
    public function setUpSellBrandID(?string $upSellBrandID = null): self
    {
        // validation for constraint: string
        if (!is_null($upSellBrandID) && !is_string($upSellBrandID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($upSellBrandID, true), gettype($upSellBrandID)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($upSellBrandID) && mb_strlen((string) $upSellBrandID) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $upSellBrandID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($upSellBrandID) && mb_strlen((string) $upSellBrandID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $upSellBrandID)), __LINE__);
        }
        $this->UpSellBrandID = $upSellBrandID;
        
        return $this;
    }
    /**
     * Get BrandFound value
     * @return bool|null
     */
    public function getBrandFound(): ?bool
    {
        return $this->BrandFound;
    }
    /**
     * Set BrandFound value
     * @param bool $brandFound
     * @return \Travelport\Util\StructType\Brand
     */
    public function setBrandFound(?bool $brandFound = null): self
    {
        // validation for constraint: boolean
        if (!is_null($brandFound) && !is_bool($brandFound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($brandFound, true), gettype($brandFound)), __LINE__);
        }
        $this->BrandFound = $brandFound;
        
        return $this;
    }
    /**
     * Get UpSellBrandFound value
     * @return bool|null
     */
    public function getUpSellBrandFound(): ?bool
    {
        return $this->UpSellBrandFound;
    }
    /**
     * Set UpSellBrandFound value
     * @param bool $upSellBrandFound
     * @return \Travelport\Util\StructType\Brand
     */
    public function setUpSellBrandFound(?bool $upSellBrandFound = null): self
    {
        // validation for constraint: boolean
        if (!is_null($upSellBrandFound) && !is_bool($upSellBrandFound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($upSellBrandFound, true), gettype($upSellBrandFound)), __LINE__);
        }
        $this->UpSellBrandFound = $upSellBrandFound;
        
        return $this;
    }
    /**
     * Get BrandedDetailsAvailable value
     * @return bool|null
     */
    public function getBrandedDetailsAvailable(): ?bool
    {
        return $this->BrandedDetailsAvailable;
    }
    /**
     * Set BrandedDetailsAvailable value
     * @param bool $brandedDetailsAvailable
     * @return \Travelport\Util\StructType\Brand
     */
    public function setBrandedDetailsAvailable(?bool $brandedDetailsAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($brandedDetailsAvailable) && !is_bool($brandedDetailsAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($brandedDetailsAvailable, true), gettype($brandedDetailsAvailable)), __LINE__);
        }
        $this->BrandedDetailsAvailable = $brandedDetailsAvailable;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Util\StructType\Brand
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get BrandTier value
     * @return string|null
     */
    public function getBrandTier(): ?string
    {
        return $this->BrandTier;
    }
    /**
     * Set BrandTier value
     * @param string $brandTier
     * @return \Travelport\Util\StructType\Brand
     */
    public function setBrandTier(?string $brandTier = null): self
    {
        // validation for constraint: string
        if (!is_null($brandTier) && !is_string($brandTier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandTier, true), gettype($brandTier)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($brandTier) && mb_strlen((string) $brandTier) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $brandTier)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($brandTier) && mb_strlen((string) $brandTier) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $brandTier)), __LINE__);
        }
        $this->BrandTier = $brandTier;
        
        return $this;
    }
    /**
     * Get BrandMaintained value
     * @return string|null
     */
    public function getBrandMaintained(): ?string
    {
        return $this->BrandMaintained;
    }
    /**
     * Set BrandMaintained value
     * @param string $brandMaintained
     * @return \Travelport\Util\StructType\Brand
     */
    public function setBrandMaintained(?string $brandMaintained = null): self
    {
        // validation for constraint: string
        if (!is_null($brandMaintained) && !is_string($brandMaintained)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandMaintained, true), gettype($brandMaintained)), __LINE__);
        }
        // validation for constraint: maxLength(99)
        if (!is_null($brandMaintained) && mb_strlen((string) $brandMaintained) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 99', mb_strlen((string) $brandMaintained)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($brandMaintained) && mb_strlen((string) $brandMaintained) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $brandMaintained)), __LINE__);
        }
        $this->BrandMaintained = $brandMaintained;
        
        return $this;
    }
}
