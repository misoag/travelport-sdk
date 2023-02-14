<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellQualifySearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for HotelUpsellQualify.
 * @subpackage Structs
 */
class HotelUpsellQualifySearchCriteria extends UpsellSearchCriteria
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
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
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
     * Constructor method for HotelUpsellQualifySearchCriteria
     * @uses HotelUpsellQualifySearchCriteria::setHotelChainCode()
     * @uses HotelUpsellQualifySearchCriteria::setCorporateDiscountID()
     * @uses HotelUpsellQualifySearchCriteria::setHotelCode()
     * @uses HotelUpsellQualifySearchCriteria::setHotelLocation()
     * @uses HotelUpsellQualifySearchCriteria::setRatePlanType()
     * @param string $hotelChainCode
     * @param \Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID
     * @param string $hotelCode
     * @param string $hotelLocation
     * @param string $ratePlanType
     */
    public function __construct(string $hotelChainCode, ?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null, ?string $hotelCode = null, ?string $hotelLocation = null, ?string $ratePlanType = null)
    {
        $this
            ->setHotelChainCode($hotelChainCode)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setHotelCode($hotelCode)
            ->setHotelLocation($hotelLocation)
            ->setRatePlanType($ratePlanType);
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
     * @return \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
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
     * @return \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
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
     * @return \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
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
     * @return \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
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
     * @return \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
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
}
