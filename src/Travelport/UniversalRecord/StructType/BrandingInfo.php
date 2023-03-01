<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: The additional titles associated to the brand or optional service. Providers: ACH, 1G, 1V, 1P | The price range of the Ancillary Service. Providers: 1G, 1V, 1P, ACH | Branding information for the Ancillary Service. Returned in Seat
 * Map only. Providers: 1G, 1V, 1P, ACH
 * @subpackage Structs
 */
class BrandingInfo extends AbstractStructBase
{
    /**
     * The CommercialName
     * Meta information extracted from the WSDL
     * - documentation: The commercial name of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * - use: required
     * @var string
     */
    public string $CommercialName;
    /**
     * The PriceRange
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: PriceRange
     * @var \Travelport\UniversalRecord\StructType\PriceRange[]
     */
    public ?array $PriceRange = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public ?array $Text = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Title
     * @var \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public ?array $Title = null;
    /**
     * The ImageLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: ImageLocation
     * @var \Travelport\UniversalRecord\StructType\ImageLocation[]
     */
    public ?array $ImageLocation = null;
    /**
     * The ServiceGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ServiceGroup
     * @var \Travelport\UniversalRecord\StructType\ServiceGroup|null
     */
    public ?\Travelport\UniversalRecord\StructType\ServiceGroup $ServiceGroup = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Specifies the AirSegment the branding information is for. Providers: ACH, 1G, 1V, 1P
     * - maxOccurs: 99
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - documentation: The Service Sub Code of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceSubCode = null;
    /**
     * The ExternalServiceName
     * Meta information extracted from the WSDL
     * - documentation: The external name of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * - use: optional
     * @var string|null
     */
    public ?string $ExternalServiceName = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The type of Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceType = null;
    /**
     * The Chargeable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the optional service is not offered, is available for a charge, or is included in the brand. Providers: 1G, 1V, 1P, ACH
     * - use: optional
     * @var string|null
     */
    public ?string $Chargeable = null;
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
     * @param \Travelport\UniversalRecord\StructType\PriceRange[] $priceRange
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $title
     * @param \Travelport\UniversalRecord\StructType\ImageLocation[] $imageLocation
     * @param \Travelport\UniversalRecord\StructType\ServiceGroup $serviceGroup
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $airSegmentRef
     * @param string $key
     * @param string $serviceSubCode
     * @param string $externalServiceName
     * @param string $serviceType
     * @param string $chargeable
     */
    public function __construct(string $commercialName, ?array $priceRange = null, ?array $text = null, ?array $title = null, ?array $imageLocation = null, ?\Travelport\UniversalRecord\StructType\ServiceGroup $serviceGroup = null, ?array $airSegmentRef = null, ?string $key = null, ?string $serviceSubCode = null, ?string $externalServiceName = null, ?string $serviceType = null, ?string $chargeable = null)
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
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setCommercialName(string $commercialName): self
    {
        $this->CommercialName = $commercialName;
        
        return $this;
    }
    /**
     * Get PriceRange value
     * @return \Travelport\UniversalRecord\StructType\PriceRange[]
     */
    public function getPriceRange(): ?array
    {
        return $this->PriceRange;
    }
    /**
     * Set PriceRange value
     * @param \Travelport\UniversalRecord\StructType\PriceRange[] $priceRange
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setPriceRange(?array $priceRange = null): self
    {
        $this->PriceRange = $priceRange;
        
        return $this;
    }
    /**
     * Add item to PriceRange value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PriceRange $item
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function addToPriceRange(\Travelport\UniversalRecord\StructType\PriceRange $item): self
    {
        $this->PriceRange[] = $item;
        
        return $this;
    }
    /**
     * Get Text value
     * @return \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setText(?array $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement $item
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function addToText(\Travelport\UniversalRecord\StructType\TypeTextElement $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get Title value
     * @return \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public function getTitle(): ?array
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $title
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setTitle(?array $title = null): self
    {
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Add item to Title value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement $item
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function addToTitle(\Travelport\UniversalRecord\StructType\TypeTextElement $item): self
    {
        $this->Title[] = $item;
        
        return $this;
    }
    /**
     * Get ImageLocation value
     * @return \Travelport\UniversalRecord\StructType\ImageLocation[]
     */
    public function getImageLocation(): ?array
    {
        return $this->ImageLocation;
    }
    /**
     * Set ImageLocation value
     * @param \Travelport\UniversalRecord\StructType\ImageLocation[] $imageLocation
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setImageLocation(?array $imageLocation = null): self
    {
        $this->ImageLocation = $imageLocation;
        
        return $this;
    }
    /**
     * Add item to ImageLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ImageLocation $item
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function addToImageLocation(\Travelport\UniversalRecord\StructType\ImageLocation $item): self
    {
        $this->ImageLocation[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceGroup value
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup|null
     */
    public function getServiceGroup(): ?\Travelport\UniversalRecord\StructType\ServiceGroup
    {
        return $this->ServiceGroup;
    }
    /**
     * Set ServiceGroup value
     * @param \Travelport\UniversalRecord\StructType\ServiceGroup $serviceGroup
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setServiceGroup(?\Travelport\UniversalRecord\StructType\ServiceGroup $serviceGroup = null): self
    {
        $this->ServiceGroup = $serviceGroup;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\TypeSegmentRef $item): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setExternalServiceName(?string $externalServiceName = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setServiceType(?string $serviceType = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\BrandingInfo
     */
    public function setChargeable(?string $chargeable = null): self
    {
        $this->Chargeable = $chargeable;
        
        return $this;
    }
}
