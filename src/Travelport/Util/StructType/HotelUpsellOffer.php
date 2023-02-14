<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellOffer StructType
 * Meta information extracted from the WSDL
 * - documentation: Offer data of Hotel which is used to send a Hotel Upsell request and match a hotel property in the response. Offer is found for a matching qualify.
 * @subpackage Structs
 */
class HotelUpsellOffer extends AbstractStructBase
{
    /**
     * The RatePlanType
     * Meta information extracted from the WSDL
     * - documentation: Represents the rate plan code of room type for specified hotel property.
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $RatePlanType;
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
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
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
     * Constructor method for HotelUpsellOffer
     * @uses HotelUpsellOffer::setRatePlanType()
     * @uses HotelUpsellOffer::setCorporateDiscountID()
     * @uses HotelUpsellOffer::setKey()
     * @uses HotelUpsellOffer::setElStat()
     * @uses HotelUpsellOffer::setKeyOverride()
     * @param string $ratePlanType
     * @param \Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $ratePlanType, ?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setRatePlanType($ratePlanType)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get RatePlanType value
     * @return string
     */
    public function getRatePlanType(): string
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Travelport\Util\StructType\HotelUpsellOffer
     */
    public function setRatePlanType(string $ratePlanType): self
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratePlanType, true), gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        
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
     * @return \Travelport\Util\StructType\HotelUpsellOffer
     */
    public function setCorporateDiscountID(?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
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
     * @return \Travelport\Util\StructType\HotelUpsellOffer
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
     * @return \Travelport\Util\StructType\HotelUpsellOffer
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
     * @return \Travelport\Util\StructType\HotelUpsellOffer
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
