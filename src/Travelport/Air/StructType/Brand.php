<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\TypeTextElement[]
     */
    public ?array $Title = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\Air\StructType\TypeTextElement[]
     */
    public ?array $Text = null;
    /**
     * The ImageLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: ImageLocation
     * @var \Travelport\Air\StructType\ImageLocation[]
     */
    public ?array $ImageLocation = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The Rules
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Rules
     * @var \Travelport\Air\StructType\Rules[]
     */
    public ?array $Rules = null;
    /**
     * The ServiceAssociations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ServiceAssociations
     * @var \Travelport\Air\StructType\ServiceAssociations|null
     */
    public ?\Travelport\Air\StructType\ServiceAssociations $ServiceAssociations = null;
    /**
     * The UpsellBrand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UpsellBrand
     * @var \Travelport\Air\StructType\UpsellBrand|null
     */
    public ?\Travelport\Air\StructType\UpsellBrand $UpsellBrand = null;
    /**
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeApplicableSegment[]
     */
    public ?array $ApplicableSegment = null;
    /**
     * The DefaultBrandDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: DefaultBrandDetail
     * @var \Travelport\Air\StructType\TypeDefaultBrandDetail[]
     */
    public ?array $DefaultBrandDetail = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Brand Key | Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * @var string|null
     */
    public ?string $BrandID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The Title of the brand
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The AirItineraryDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: AirItinerary associated with this brand | Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $AirItineraryDetailsRef = null;
    /**
     * The UpSellBrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * @var string|null
     */
    public ?string $UpSellBrandID = null;
    /**
     * The BrandFound
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether brand for the fare was found for carrier or not
     * @var bool|null
     */
    public ?bool $BrandFound = null;
    /**
     * The UpSellBrandFound
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether upsell brand for the fare was found for carrier or not
     * @var bool|null
     */
    public ?bool $UpSellBrandFound = null;
    /**
     * The BrandedDetailsAvailable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if full details of the brand is available
     * @var bool|null
     */
    public ?bool $BrandedDetailsAvailable = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Carrier = null;
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
    public ?string $BrandTier = null;
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
    public ?string $BrandMaintained = null;
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
     * @param \Travelport\Air\StructType\TypeTextElement[] $title
     * @param \Travelport\Air\StructType\TypeTextElement[] $text
     * @param \Travelport\Air\StructType\ImageLocation[] $imageLocation
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\Rules[] $rules
     * @param \Travelport\Air\StructType\ServiceAssociations $serviceAssociations
     * @param \Travelport\Air\StructType\UpsellBrand $upsellBrand
     * @param \Travelport\Air\StructType\TypeApplicableSegment[] $applicableSegment
     * @param \Travelport\Air\StructType\TypeDefaultBrandDetail[] $defaultBrandDetail
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
    public function __construct(?array $title = null, ?array $text = null, ?array $imageLocation = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?array $rules = null, ?\Travelport\Air\StructType\ServiceAssociations $serviceAssociations = null, ?\Travelport\Air\StructType\UpsellBrand $upsellBrand = null, ?array $applicableSegment = null, ?array $defaultBrandDetail = null, ?string $key = null, ?string $brandID = null, ?string $name = null, ?string $airItineraryDetailsRef = null, ?string $upSellBrandID = null, ?bool $brandFound = null, ?bool $upSellBrandFound = null, ?bool $brandedDetailsAvailable = null, ?string $carrier = null, ?string $brandTier = null, ?string $brandMaintained = null)
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
     * @return \Travelport\Air\StructType\TypeTextElement[]
     */
    public function getTitle(): ?array
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param \Travelport\Air\StructType\TypeTextElement[] $title
     * @return \Travelport\Air\StructType\Brand
     */
    public function setTitle(?array $title = null): self
    {
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Add item to Title value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTextElement $item
     * @return \Travelport\Air\StructType\Brand
     */
    public function addToTitle(\Travelport\Air\StructType\TypeTextElement $item): self
    {
        $this->Title[] = $item;
        
        return $this;
    }
    /**
     * Get Text value
     * @return \Travelport\Air\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param \Travelport\Air\StructType\TypeTextElement[] $text
     * @return \Travelport\Air\StructType\Brand
     */
    public function setText(?array $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTextElement $item
     * @return \Travelport\Air\StructType\Brand
     */
    public function addToText(\Travelport\Air\StructType\TypeTextElement $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get ImageLocation value
     * @return \Travelport\Air\StructType\ImageLocation[]
     */
    public function getImageLocation(): ?array
    {
        return $this->ImageLocation;
    }
    /**
     * Set ImageLocation value
     * @param \Travelport\Air\StructType\ImageLocation[] $imageLocation
     * @return \Travelport\Air\StructType\Brand
     */
    public function setImageLocation(?array $imageLocation = null): self
    {
        $this->ImageLocation = $imageLocation;
        
        return $this;
    }
    /**
     * Add item to ImageLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ImageLocation $item
     * @return \Travelport\Air\StructType\Brand
     */
    public function addToImageLocation(\Travelport\Air\StructType\ImageLocation $item): self
    {
        $this->ImageLocation[] = $item;
        
        return $this;
    }
    /**
     * Get OptionalServices value
     * @return \Travelport\Air\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\Air\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @return \Travelport\Air\StructType\Brand
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get Rules value
     * @return \Travelport\Air\StructType\Rules[]
     */
    public function getRules(): ?array
    {
        return $this->Rules;
    }
    /**
     * Set Rules value
     * @param \Travelport\Air\StructType\Rules[] $rules
     * @return \Travelport\Air\StructType\Brand
     */
    public function setRules(?array $rules = null): self
    {
        $this->Rules = $rules;
        
        return $this;
    }
    /**
     * Add item to Rules value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Rules $item
     * @return \Travelport\Air\StructType\Brand
     */
    public function addToRules(\Travelport\Air\StructType\Rules $item): self
    {
        $this->Rules[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceAssociations value
     * @return \Travelport\Air\StructType\ServiceAssociations|null
     */
    public function getServiceAssociations(): ?\Travelport\Air\StructType\ServiceAssociations
    {
        return $this->ServiceAssociations;
    }
    /**
     * Set ServiceAssociations value
     * @param \Travelport\Air\StructType\ServiceAssociations $serviceAssociations
     * @return \Travelport\Air\StructType\Brand
     */
    public function setServiceAssociations(?\Travelport\Air\StructType\ServiceAssociations $serviceAssociations = null): self
    {
        $this->ServiceAssociations = $serviceAssociations;
        
        return $this;
    }
    /**
     * Get UpsellBrand value
     * @return \Travelport\Air\StructType\UpsellBrand|null
     */
    public function getUpsellBrand(): ?\Travelport\Air\StructType\UpsellBrand
    {
        return $this->UpsellBrand;
    }
    /**
     * Set UpsellBrand value
     * @param \Travelport\Air\StructType\UpsellBrand $upsellBrand
     * @return \Travelport\Air\StructType\Brand
     */
    public function setUpsellBrand(?\Travelport\Air\StructType\UpsellBrand $upsellBrand = null): self
    {
        $this->UpsellBrand = $upsellBrand;
        
        return $this;
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\Air\StructType\TypeApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * Set ApplicableSegment value
     * @param \Travelport\Air\StructType\TypeApplicableSegment[] $applicableSegment
     * @return \Travelport\Air\StructType\Brand
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeApplicableSegment $item
     * @return \Travelport\Air\StructType\Brand
     */
    public function addToApplicableSegment(\Travelport\Air\StructType\TypeApplicableSegment $item): self
    {
        $this->ApplicableSegment[] = $item;
        
        return $this;
    }
    /**
     * Get DefaultBrandDetail value
     * @return \Travelport\Air\StructType\TypeDefaultBrandDetail[]
     */
    public function getDefaultBrandDetail(): ?array
    {
        return $this->DefaultBrandDetail;
    }
    /**
     * Set DefaultBrandDetail value
     * @param \Travelport\Air\StructType\TypeDefaultBrandDetail[] $defaultBrandDetail
     * @return \Travelport\Air\StructType\Brand
     */
    public function setDefaultBrandDetail(?array $defaultBrandDetail = null): self
    {
        $this->DefaultBrandDetail = $defaultBrandDetail;
        
        return $this;
    }
    /**
     * Add item to DefaultBrandDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeDefaultBrandDetail $item
     * @return \Travelport\Air\StructType\Brand
     */
    public function addToDefaultBrandDetail(\Travelport\Air\StructType\TypeDefaultBrandDetail $item): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setBrandID(?string $brandID = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setName(?string $name = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setAirItineraryDetailsRef(?string $airItineraryDetailsRef = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setUpSellBrandID(?string $upSellBrandID = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setBrandFound(?bool $brandFound = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setUpSellBrandFound(?bool $upSellBrandFound = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setBrandedDetailsAvailable(?bool $brandedDetailsAvailable = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setCarrier(?string $carrier = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setBrandTier(?string $brandTier = null): self
    {
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
     * @return \Travelport\Air\StructType\Brand
     */
    public function setBrandMaintained(?string $brandMaintained = null): self
    {
        $this->BrandMaintained = $brandMaintained;
        
        return $this;
    }
}
