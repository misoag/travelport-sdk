<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellQualify StructType
 * Meta information extracted from the WSDL
 * - documentation: Qualify data of Hotel against which Hotel property details search is matched to get an upsell Offer. Each qualify should have an offer.
 * @subpackage Structs
 */
class HotelUpsellQualify extends AbstractStructBase
{
    /**
     * The HotelChainCode
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $HotelChainCode;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $ExpirationDate;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Util\StructType\CorporateDiscountID|null
     */
    protected ?\Travelport\Util\StructType\CorporateDiscountID $CorporateDiscountID = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    protected ?string $HotelCode = null;
    /**
     * The HotelLocation
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $HotelLocation = null;
    /**
     * The RatePlanType
     * Meta information extracted from the WSDL
     * - documentation: Represents the rate plan code of room type for specified hotel property.
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RatePlanType = null;
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
     * The OfferRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Offer. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OfferRef = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for HotelUpsellQualify
     * @uses HotelUpsellQualify::setHotelChainCode()
     * @uses HotelUpsellQualify::setEffectiveDate()
     * @uses HotelUpsellQualify::setExpirationDate()
     * @uses HotelUpsellQualify::setCorporateDiscountID()
     * @uses HotelUpsellQualify::setHotelCode()
     * @uses HotelUpsellQualify::setHotelLocation()
     * @uses HotelUpsellQualify::setRatePlanType()
     * @uses HotelUpsellQualify::setKey()
     * @uses HotelUpsellQualify::setOfferRef()
     * @uses HotelUpsellQualify::setElStat()
     * @uses HotelUpsellQualify::setKeyOverride()
     * @param string $hotelChainCode
     * @param string $effectiveDate
     * @param string $expirationDate
     * @param \Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID
     * @param string $hotelCode
     * @param string $hotelLocation
     * @param string $ratePlanType
     * @param string $key
     * @param string $offerRef
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $hotelChainCode, string $effectiveDate, string $expirationDate, ?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null, ?string $hotelCode = null, ?string $hotelLocation = null, ?string $ratePlanType = null, ?string $key = null, ?string $offerRef = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setHotelChainCode($hotelChainCode)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setHotelCode($hotelCode)
            ->setHotelLocation($hotelLocation)
            ->setRatePlanType($ratePlanType)
            ->setKey($key)
            ->setOfferRef($offerRef)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get HotelChainCode value
     * @return string
     */
    public function getHotelChainCode(): string
    {
        return $this->HotelChainCode;
    }
    /**
     * Set HotelChainCode value
     * @param string $hotelChainCode
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setHotelChainCode(string $hotelChainCode): self
    {
        // validation for constraint: string
        if (!is_null($hotelChainCode) && !is_string($hotelChainCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChainCode, true), gettype($hotelChainCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($hotelChainCode) && mb_strlen((string) $hotelChainCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $hotelChainCode)), __LINE__);
        }
        $this->HotelChainCode = $hotelChainCode;
        
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($effectiveDate) && !preg_match('/[^:Z].*/', $effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($effectiveDate, true)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setExpirationDate(string $expirationDate): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($expirationDate) && !preg_match('/[^:Z].*/', $expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($expirationDate, true)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\Util\StructType\CorporateDiscountID|null
     */
    public function getCorporateDiscountID(): ?\Travelport\Util\StructType\CorporateDiscountID
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setCorporateDiscountID(?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($hotelCode) && mb_strlen((string) $hotelCode) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get HotelLocation value
     * @return string|null
     */
    public function getHotelLocation(): ?string
    {
        return $this->HotelLocation;
    }
    /**
     * Set HotelLocation value
     * @param string $hotelLocation
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setHotelLocation(?string $hotelLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelLocation) && !is_string($hotelLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelLocation, true), gettype($hotelLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($hotelLocation) && mb_strlen((string) $hotelLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $hotelLocation)), __LINE__);
        }
        $this->HotelLocation = $hotelLocation;
        
        return $this;
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType(): ?string
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setRatePlanType(?string $ratePlanType = null): self
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratePlanType, true), gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        
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
     * @return \Travelport\Util\StructType\HotelUpsellQualify
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
     * Get OfferRef value
     * @return string|null
     */
    public function getOfferRef(): ?string
    {
        return $this->OfferRef;
    }
    /**
     * Set OfferRef value
     * @param string $offerRef
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setOfferRef(?string $offerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($offerRef) && !is_string($offerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerRef, true), gettype($offerRef)), __LINE__);
        }
        $this->OfferRef = $offerRef;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Util\StructType\HotelUpsellQualify
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
