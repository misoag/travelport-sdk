<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareSurcharge StructType
 * Meta information extracted from the WSDL
 * - documentation: Surcharges for a fare component
 * @subpackage Structs
 */
class FareSurcharge extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * The CouponRef
     * Meta information extracted from the WSDL
     * - documentation: The coupon to which that surcharge is relative (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CouponRef = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for FareSurcharge
     * @uses FareSurcharge::setType()
     * @uses FareSurcharge::setAmount()
     * @uses FareSurcharge::setKey()
     * @uses FareSurcharge::setSegmentRef()
     * @uses FareSurcharge::setCouponRef()
     * @uses FareSurcharge::setElStat()
     * @uses FareSurcharge::setKeyOverride()
     * @param string $type
     * @param string $amount
     * @param string $key
     * @param string $segmentRef
     * @param string $couponRef
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, string $amount, ?string $key = null, ?string $segmentRef = null, ?string $couponRef = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
            ->setAmount($amount)
            ->setKey($key)
            ->setSegmentRef($segmentRef)
            ->setCouponRef($couponRef)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
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
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get CouponRef value
     * @return string|null
     */
    public function getCouponRef(): ?string
    {
        return $this->CouponRef;
    }
    /**
     * Set CouponRef value
     * @param string $couponRef
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setCouponRef(?string $couponRef = null): self
    {
        $this->CouponRef = $couponRef;
        
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
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareSurcharge
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
