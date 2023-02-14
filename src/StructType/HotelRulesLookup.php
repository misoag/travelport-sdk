<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\HotelProperty|null
     */
    protected ?\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \StructType\HotelStay|null
     */
    protected ?\StructType\HotelStay $HotelStay = null;
    /**
     * The HotelRulesModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelRulesModifiers
     * @var \StructType\HotelRulesModifiers|null
     */
    protected ?\StructType\HotelRulesModifiers $HotelRulesModifiers = null;
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
     * @param \StructType\HotelProperty $hotelProperty
     * @param \StructType\HotelStay $hotelStay
     * @param \StructType\HotelRulesModifiers $hotelRulesModifiers
     * @param string $rulesDetailReqd
     */
    public function __construct(string $ratePlanType, string $base, ?\StructType\HotelProperty $hotelProperty = null, ?\StructType\HotelStay $hotelStay = null, ?\StructType\HotelRulesModifiers $hotelRulesModifiers = null, ?string $rulesDetailReqd = null)
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
     * @return \StructType\HotelRulesLookup
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
     * @return \StructType\HotelRulesLookup
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
     * @return \StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \StructType\HotelProperty $hotelProperty
     * @return \StructType\HotelRulesLookup
     */
    public function setHotelProperty(?\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \StructType\HotelStay|null
     */
    public function getHotelStay(): ?\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \StructType\HotelStay $hotelStay
     * @return \StructType\HotelRulesLookup
     */
    public function setHotelStay(?\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get HotelRulesModifiers value
     * @return \StructType\HotelRulesModifiers|null
     */
    public function getHotelRulesModifiers(): ?\StructType\HotelRulesModifiers
    {
        return $this->HotelRulesModifiers;
    }
    /**
     * Set HotelRulesModifiers value
     * @param \StructType\HotelRulesModifiers $hotelRulesModifiers
     * @return \StructType\HotelRulesLookup
     */
    public function setHotelRulesModifiers(?\StructType\HotelRulesModifiers $hotelRulesModifiers = null): self
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
     * @return \StructType\HotelRulesLookup
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
