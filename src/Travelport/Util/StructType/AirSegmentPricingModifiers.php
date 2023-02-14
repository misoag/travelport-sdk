<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\PermittedBookingCodes|null
     */
    protected ?\Travelport\Util\StructType\PermittedBookingCodes $PermittedBookingCodes = null;
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
     * The CabinClass
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CabinClass = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountCode = null;
    /**
     * The ProhibitAdvancePurchaseFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitAdvancePurchaseFares = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ProhibitPenaltyFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitPenaltyFares = null;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for pricing.
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBasisCode = null;
    /**
     * The FareBreak
     * Meta information extracted from the WSDL
     * - documentation: Fare break point modifier to instruct Fares where it should or should not break the fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBreak = null;
    /**
     * The ConnectionIndicator
     * Meta information extracted from the WSDL
     * - documentation: ConnectionIndicator attribute will be used to map connection indicators AvailabilityAndPricing, TurnAround and Stopover. This attribute is for Wordspan/1P only.
     * - use: optional
     * @var string|null
     */
    protected ?string $ConnectionIndicator = null;
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
     * @param \Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes
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
    public function __construct(?\Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes = null, ?string $airSegmentRef = null, ?string $cabinClass = null, ?string $accountCode = null, ?bool $prohibitAdvancePurchaseFares = false, ?bool $prohibitNonRefundableFares = false, ?bool $prohibitPenaltyFares = false, ?string $fareBasisCode = null, ?string $fareBreak = null, ?string $connectionIndicator = null, ?string $brandTier = null)
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
     * @return \Travelport\Util\StructType\PermittedBookingCodes|null
     */
    public function getPermittedBookingCodes(): ?\Travelport\Util\StructType\PermittedBookingCodes
    {
        return $this->PermittedBookingCodes;
    }
    /**
     * Set PermittedBookingCodes value
     * @param \Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setPermittedBookingCodes(?\Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes = null): self
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares(?bool $prohibitAdvancePurchaseFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitAdvancePurchaseFares) && !is_bool($prohibitAdvancePurchaseFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitAdvancePurchaseFares, true), gettype($prohibitAdvancePurchaseFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setProhibitNonRefundableFares(?bool $prohibitNonRefundableFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitNonRefundableFares) && !is_bool($prohibitNonRefundableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitNonRefundableFares, true), gettype($prohibitNonRefundableFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setProhibitPenaltyFares(?bool $prohibitPenaltyFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitPenaltyFares) && !is_bool($prohibitPenaltyFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitPenaltyFares, true), gettype($prohibitPenaltyFares)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setFareBasisCode(?string $fareBasisCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasisCode, true), gettype($fareBasisCode)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeFareBreak::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFareBreak::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fareBreak
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setFareBreak(?string $fareBreak = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFareBreak::valueIsValid($fareBreak)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFareBreak', is_array($fareBreak) ? implode(', ', $fareBreak) : var_export($fareBreak, true), implode(', ', \Travelport\Util\EnumType\TypeFareBreak::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeConnectionIndicator::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeConnectionIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $connectionIndicator
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
     */
    public function setConnectionIndicator(?string $connectionIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeConnectionIndicator::valueIsValid($connectionIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeConnectionIndicator', is_array($connectionIndicator) ? implode(', ', $connectionIndicator) : var_export($connectionIndicator, true), implode(', ', \Travelport\Util\EnumType\TypeConnectionIndicator::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers
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
}
