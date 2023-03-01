<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentTicketingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies modifiers that a particular segment should be priced with. If this is used, then there must be one for each AirSegment in the AirItinerary.
 * @subpackage Structs
 */
class AirSegmentTicketingModifiers extends AbstractStructBase
{
    /**
     * The BrandTier
     * Meta information extracted from the WSDL
     * - documentation: Modifier to price by specific brand tier number. | Used for Character Strings, length 1 to 10.
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $BrandTier;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirSegmentRef = null;
    /**
     * Constructor method for AirSegmentTicketingModifiers
     * @uses AirSegmentTicketingModifiers::setBrandTier()
     * @uses AirSegmentTicketingModifiers::setAirSegmentRef()
     * @param string $brandTier
     * @param string $airSegmentRef
     */
    public function __construct(string $brandTier, ?string $airSegmentRef = null)
    {
        $this
            ->setBrandTier($brandTier)
            ->setAirSegmentRef($airSegmentRef);
    }
    /**
     * Get BrandTier value
     * @return string
     */
    public function getBrandTier(): string
    {
        return $this->BrandTier;
    }
    /**
     * Set BrandTier value
     * @param string $brandTier
     * @return \Travelport\Air\StructType\AirSegmentTicketingModifiers
     */
    public function setBrandTier(string $brandTier): self
    {
        $this->BrandTier = $brandTier;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return string|null
     */
    public function getAirSegmentRef(): ?string
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param string $airSegmentRef
     * @return \Travelport\Air\StructType\AirSegmentTicketingModifiers
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
}
