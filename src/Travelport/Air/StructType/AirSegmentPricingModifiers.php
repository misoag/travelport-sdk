<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentPricingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies modifiers that a particular segment should be priced in. If this is used, then there must be one for each AirSegment in the AirItinerary.
 * @subpackage Structs
 */
class AirSegmentPricingModifiers extends AbstractStructBase
{
    /**
     * The PermittedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PermittedBookingCodes|null
     */
    public ?\Travelport\Air\StructType\PermittedBookingCodes $PermittedBookingCodes = null;
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
     * The CabinClass
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
    /**
     * The ProhibitAdvancePurchaseFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitAdvancePurchaseFares = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ProhibitPenaltyFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitPenaltyFares = null;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for pricing.
     * - use: optional
     * @var string|null
     */
    public ?string $FareBasisCode = null;
    /**
     * The FareBreak
     * Meta information extracted from the WSDL
     * - documentation: Fare break point modifier to instruct Fares where it should or should not break the fare.
     * - use: optional
     * @var string|null
     */
    public ?string $FareBreak = null;
    /**
     * The ConnectionIndicator
     * Meta information extracted from the WSDL
     * - documentation: ConnectionIndicator attribute will be used to map connection indicators AvailabilityAndPricing, TurnAround and Stopover. This attribute is for Wordspan/1P only.
     * - use: optional
     * @var string|null
     */
    public ?string $ConnectionIndicator = null;
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
     * Constructor method for AirSegmentPricingModifiers
     * @uses AirSegmentPricingModifiers::setPermittedBookingCodes()
     * @uses AirSegmentPricingModifiers::setAirSegmentRef()
     * @uses AirSegmentPricingModifiers::setCabinClass()
     * @uses AirSegmentPricingModifiers::setAccountCode()
     * @uses AirSegmentPricingModifiers::setProhibitAdvancePurchaseFares()
     * @uses AirSegmentPricingModifiers::setProhibitNonRefundableFares()
     * @uses AirSegmentPricingModifiers::setProhibitPenaltyFares()
     * @uses AirSegmentPricingModifiers::setFareBasisCode()
     * @uses AirSegmentPricingModifiers::setFareBreak()
     * @uses AirSegmentPricingModifiers::setConnectionIndicator()
     * @uses AirSegmentPricingModifiers::setBrandTier()
     * @param \Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes
     * @param string $airSegmentRef
     * @param string $cabinClass
     * @param string $accountCode
     * @param bool $prohibitAdvancePurchaseFares
     * @param bool $prohibitNonRefundableFares
     * @param bool $prohibitPenaltyFares
     * @param string $fareBasisCode
     * @param string $fareBreak
     * @param string $connectionIndicator
     * @param string $brandTier
     */
    public function __construct(?\Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes = null, ?string $airSegmentRef = null, ?string $cabinClass = null, ?string $accountCode = null, ?bool $prohibitAdvancePurchaseFares = false, ?bool $prohibitNonRefundableFares = false, ?bool $prohibitPenaltyFares = false, ?string $fareBasisCode = null, ?string $fareBreak = null, ?string $connectionIndicator = null, ?string $brandTier = null)
    {
        $this
            ->setPermittedBookingCodes($permittedBookingCodes)
            ->setAirSegmentRef($airSegmentRef)
            ->setCabinClass($cabinClass)
            ->setAccountCode($accountCode)
            ->setProhibitAdvancePurchaseFares($prohibitAdvancePurchaseFares)
            ->setProhibitNonRefundableFares($prohibitNonRefundableFares)
            ->setProhibitPenaltyFares($prohibitPenaltyFares)
            ->setFareBasisCode($fareBasisCode)
            ->setFareBreak($fareBreak)
            ->setConnectionIndicator($connectionIndicator)
            ->setBrandTier($brandTier);
    }
    /**
     * Get PermittedBookingCodes value
     * @return \Travelport\Air\StructType\PermittedBookingCodes|null
     */
    public function getPermittedBookingCodes(): ?\Travelport\Air\StructType\PermittedBookingCodes
    {
        return $this->PermittedBookingCodes;
    }
    /**
     * Set PermittedBookingCodes value
     * @param \Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setPermittedBookingCodes(?\Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes = null): self
    {
        $this->PermittedBookingCodes = $permittedBookingCodes;
        
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
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get ProhibitAdvancePurchaseFares value
     * @return bool|null
     */
    public function getProhibitAdvancePurchaseFares(): ?bool
    {
        return $this->ProhibitAdvancePurchaseFares;
    }
    /**
     * Set ProhibitAdvancePurchaseFares value
     * @param bool $prohibitAdvancePurchaseFares
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares(?bool $prohibitAdvancePurchaseFares = false): self
    {
        $this->ProhibitAdvancePurchaseFares = $prohibitAdvancePurchaseFares;
        
        return $this;
    }
    /**
     * Get ProhibitNonRefundableFares value
     * @return bool|null
     */
    public function getProhibitNonRefundableFares(): ?bool
    {
        return $this->ProhibitNonRefundableFares;
    }
    /**
     * Set ProhibitNonRefundableFares value
     * @param bool $prohibitNonRefundableFares
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setProhibitNonRefundableFares(?bool $prohibitNonRefundableFares = false): self
    {
        $this->ProhibitNonRefundableFares = $prohibitNonRefundableFares;
        
        return $this;
    }
    /**
     * Get ProhibitPenaltyFares value
     * @return bool|null
     */
    public function getProhibitPenaltyFares(): ?bool
    {
        return $this->ProhibitPenaltyFares;
    }
    /**
     * Set ProhibitPenaltyFares value
     * @param bool $prohibitPenaltyFares
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setProhibitPenaltyFares(?bool $prohibitPenaltyFares = false): self
    {
        $this->ProhibitPenaltyFares = $prohibitPenaltyFares;
        
        return $this;
    }
    /**
     * Get FareBasisCode value
     * @return string|null
     */
    public function getFareBasisCode(): ?string
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setFareBasisCode(?string $fareBasisCode = null): self
    {
        $this->FareBasisCode = $fareBasisCode;
        
        return $this;
    }
    /**
     * Get FareBreak value
     * @return string|null
     */
    public function getFareBreak(): ?string
    {
        return $this->FareBreak;
    }
    /**
     * Set FareBreak value
     * @param string $fareBreak
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setFareBreak(?string $fareBreak = null): self
    {
        $this->FareBreak = $fareBreak;
        
        return $this;
    }
    /**
     * Get ConnectionIndicator value
     * @return string|null
     */
    public function getConnectionIndicator(): ?string
    {
        return $this->ConnectionIndicator;
    }
    /**
     * Set ConnectionIndicator value
     * @param string $connectionIndicator
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setConnectionIndicator(?string $connectionIndicator = null): self
    {
        $this->ConnectionIndicator = $connectionIndicator;
        
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
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers
     */
    public function setBrandTier(?string $brandTier = null): self
    {
        $this->BrandTier = $brandTier;
        
        return $this;
    }
}
