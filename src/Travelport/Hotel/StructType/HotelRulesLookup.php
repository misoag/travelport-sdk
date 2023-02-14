<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRulesLookup StructType
 * Meta information extracted from the WSDL
 * - documentation: Details to request Hotel rate rules post shopping request.
 * @subpackage Structs
 */
class HotelRulesLookup extends AbstractStructBase
{
    /**
     * The RatePlanType
     * Meta information extracted from the WSDL
     * - documentation: This is room rate plan type for a particular rate plan
     * - use: required
     * @var string
     */
    protected string $RatePlanType;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: This is the Base Amount for the selected rate plan type as received in Hotel Details/Book/Modify Response. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Base;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    protected ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \Travelport\Hotel\StructType\HotelStay|null
     */
    protected ?\Travelport\Hotel\StructType\HotelStay $HotelStay = null;
    /**
     * The HotelRulesModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelRulesModifiers
     * @var \Travelport\Hotel\StructType\HotelRulesModifiers|null
     */
    protected ?\Travelport\Hotel\StructType\HotelRulesModifiers $HotelRulesModifiers = null;
    /**
     * The RulesDetailReqd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $RulesDetailReqd = null;
    /**
     * Constructor method for HotelRulesLookup
     * @uses HotelRulesLookup::setRatePlanType()
     * @uses HotelRulesLookup::setBase()
     * @uses HotelRulesLookup::setHotelProperty()
     * @uses HotelRulesLookup::setHotelStay()
     * @uses HotelRulesLookup::setHotelRulesModifiers()
     * @uses HotelRulesLookup::setRulesDetailReqd()
     * @param string $ratePlanType
     * @param string $base
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @param \Travelport\Hotel\StructType\HotelRulesModifiers $hotelRulesModifiers
     * @param string $rulesDetailReqd
     */
    public function __construct(string $ratePlanType, string $base, ?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?\Travelport\Hotel\StructType\HotelStay $hotelStay = null, ?\Travelport\Hotel\StructType\HotelRulesModifiers $hotelRulesModifiers = null, ?string $rulesDetailReqd = null)
    {
        $this
            ->setRatePlanType($ratePlanType)
            ->setBase($base)
            ->setHotelProperty($hotelProperty)
            ->setHotelStay($hotelStay)
            ->setHotelRulesModifiers($hotelRulesModifiers)
            ->setRulesDetailReqd($rulesDetailReqd);
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
     * @return \Travelport\Hotel\StructType\HotelRulesLookup
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
     * Get Base value
     * @return string
     */
    public function getBase(): string
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param string $base
     * @return \Travelport\Hotel\StructType\HotelRulesLookup
     */
    public function setBase(string $base): self
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
        $this->Base = $base;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\Hotel\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @return \Travelport\Hotel\StructType\HotelRulesLookup
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\Hotel\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\Hotel\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @return \Travelport\Hotel\StructType\HotelRulesLookup
     */
    public function setHotelStay(?\Travelport\Hotel\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get HotelRulesModifiers value
     * @return \Travelport\Hotel\StructType\HotelRulesModifiers|null
     */
    public function getHotelRulesModifiers(): ?\Travelport\Hotel\StructType\HotelRulesModifiers
    {
        return $this->HotelRulesModifiers;
    }
    /**
     * Set HotelRulesModifiers value
     * @param \Travelport\Hotel\StructType\HotelRulesModifiers $hotelRulesModifiers
     * @return \Travelport\Hotel\StructType\HotelRulesLookup
     */
    public function setHotelRulesModifiers(?\Travelport\Hotel\StructType\HotelRulesModifiers $hotelRulesModifiers = null): self
    {
        $this->HotelRulesModifiers = $hotelRulesModifiers;
        
        return $this;
    }
    /**
     * Get RulesDetailReqd value
     * @return string|null
     */
    public function getRulesDetailReqd(): ?string
    {
        return $this->RulesDetailReqd;
    }
    /**
     * Set RulesDetailReqd value
     * @param string $rulesDetailReqd
     * @return \Travelport\Hotel\StructType\HotelRulesLookup
     */
    public function setRulesDetailReqd(?string $rulesDetailReqd = null): self
    {
        // validation for constraint: string
        if (!is_null($rulesDetailReqd) && !is_string($rulesDetailReqd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rulesDetailReqd, true), gettype($rulesDetailReqd)), __LINE__);
        }
        $this->RulesDetailReqd = $rulesDetailReqd;
        
        return $this;
    }
}
