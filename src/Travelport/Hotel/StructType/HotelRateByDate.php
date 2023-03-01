<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRateByDate StructType
 * Meta information extracted from the WSDL
 * - documentation: The daily rate details
 * @subpackage Structs
 */
class HotelRateByDate extends AbstractStructBase
{
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $EffectiveDate = null;
    /**
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ExpireDate = null;
    /**
     * The ApproximateBase
     * Meta information extracted from the WSDL
     * - documentation: Hotel base rate expressed in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateBase = null;
    /**
     * The ApproximateTotal
     * Meta information extracted from the WSDL
     * - documentation: Hotel total rate expressed in another currency. Supported Providers: 1P | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateTotal = null;
    /**
     * The Contents
     * Meta information extracted from the WSDL
     * - documentation: Contents will be representing all unformatted data returned by HOST, those are not uAPI supported. Support provider 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $Contents = null;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to describe the Hotel Supplier Base Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Base = null;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Tax associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Tax = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Hotel Supplier Total Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Total = null;
    /**
     * The Surcharge
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Surcharge associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Surcharge = null;
    /**
     * Constructor method for HotelRateByDate
     * @uses HotelRateByDate::setEffectiveDate()
     * @uses HotelRateByDate::setExpireDate()
     * @uses HotelRateByDate::setApproximateBase()
     * @uses HotelRateByDate::setApproximateTotal()
     * @uses HotelRateByDate::setContents()
     * @uses HotelRateByDate::setBase()
     * @uses HotelRateByDate::setTax()
     * @uses HotelRateByDate::setTotal()
     * @uses HotelRateByDate::setSurcharge()
     * @param string $effectiveDate
     * @param string $expireDate
     * @param string $approximateBase
     * @param string $approximateTotal
     * @param string $contents
     * @param string $base
     * @param string $tax
     * @param string $total
     * @param string $surcharge
     */
    public function __construct(?string $effectiveDate = null, ?string $expireDate = null, ?string $approximateBase = null, ?string $approximateTotal = null, ?string $contents = null, ?string $base = null, ?string $tax = null, ?string $total = null, ?string $surcharge = null)
    {
        $this
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate)
            ->setApproximateBase($approximateBase)
            ->setApproximateTotal($approximateTotal)
            ->setContents($contents)
            ->setBase($base)
            ->setTax($tax)
            ->setTotal($total)
            ->setSurcharge($surcharge);
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        $this->ExpireDate = $expireDate;
        
        return $this;
    }
    /**
     * Get ApproximateBase value
     * @return string|null
     */
    public function getApproximateBase(): ?string
    {
        return $this->ApproximateBase;
    }
    /**
     * Set ApproximateBase value
     * @param string $approximateBase
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setApproximateBase(?string $approximateBase = null): self
    {
        $this->ApproximateBase = $approximateBase;
        
        return $this;
    }
    /**
     * Get ApproximateTotal value
     * @return string|null
     */
    public function getApproximateTotal(): ?string
    {
        return $this->ApproximateTotal;
    }
    /**
     * Set ApproximateTotal value
     * @param string $approximateTotal
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setApproximateTotal(?string $approximateTotal = null): self
    {
        $this->ApproximateTotal = $approximateTotal;
        
        return $this;
    }
    /**
     * Get Contents value
     * @return string|null
     */
    public function getContents(): ?string
    {
        return $this->Contents;
    }
    /**
     * Set Contents value
     * @param string $contents
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setContents(?string $contents = null): self
    {
        $this->Contents = $contents;
        
        return $this;
    }
    /**
     * Get Base value
     * @return string|null
     */
    public function getBase(): ?string
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param string $base
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setBase(?string $base = null): self
    {
        $this->Base = $base;
        
        return $this;
    }
    /**
     * Get Tax value
     * @return string|null
     */
    public function getTax(): ?string
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param string $tax
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setTax(?string $tax = null): self
    {
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Get Total value
     * @return string|null
     */
    public function getTotal(): ?string
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setTotal(?string $total = null): self
    {
        $this->Total = $total;
        
        return $this;
    }
    /**
     * Get Surcharge value
     * @return string|null
     */
    public function getSurcharge(): ?string
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param string $surcharge
     * @return \Travelport\Hotel\StructType\HotelRateByDate
     */
    public function setSurcharge(?string $surcharge = null): self
    {
        $this->Surcharge = $surcharge;
        
        return $this;
    }
}
