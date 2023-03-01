<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeDefaultBrandDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines for which air segment the brand is applicable. | Images associated to the brand | Text associated to the brand
 * @subpackage Structs
 */
class TypeDefaultBrandDetail extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public ?array $Text = null;
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
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: ApplicableSegment
     * @var \Travelport\UniversalRecord\StructType\TypeApplicableSegment[]
     */
    public ?array $ApplicableSegment = null;
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $BrandID = null;
    /**
     * Constructor method for typeDefaultBrandDetail
     * @uses TypeDefaultBrandDetail::setText()
     * @uses TypeDefaultBrandDetail::setImageLocation()
     * @uses TypeDefaultBrandDetail::setApplicableSegment()
     * @uses TypeDefaultBrandDetail::setBrandID()
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @param \Travelport\UniversalRecord\StructType\ImageLocation[] $imageLocation
     * @param \Travelport\UniversalRecord\StructType\TypeApplicableSegment[] $applicableSegment
     * @param string $brandID
     */
    public function __construct(?array $text = null, ?array $imageLocation = null, ?array $applicableSegment = null, ?string $brandID = null)
    {
        $this
            ->setText($text)
            ->setImageLocation($imageLocation)
            ->setApplicableSegment($applicableSegment)
            ->setBrandID($brandID);
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
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
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
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function addToText(\Travelport\UniversalRecord\StructType\TypeTextElement $item): self
    {
        $this->Text[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
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
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function addToImageLocation(\Travelport\UniversalRecord\StructType\ImageLocation $item): self
    {
        $this->ImageLocation[] = $item;
        
        return $this;
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * Set ApplicableSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeApplicableSegment[] $applicableSegment
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeApplicableSegment $item
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function addToApplicableSegment(\Travelport\UniversalRecord\StructType\TypeApplicableSegment $item): self
    {
        $this->ApplicableSegment[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function setBrandID(?string $brandID = null): self
    {
        $this->BrandID = $brandID;
        
        return $this;
    }
}
