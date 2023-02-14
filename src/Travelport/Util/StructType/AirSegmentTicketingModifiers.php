<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $BrandTier;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirSegmentRef = null;
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
     * @return \Travelport\Util\StructType\AirSegmentTicketingModifiers
     */
    public function setBrandTier(string $brandTier): self
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
     * @return \Travelport\Util\StructType\AirSegmentTicketingModifiers
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airSegmentRef) && !is_string($airSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airSegmentRef, true), gettype($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
}
