<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected ?string $EffectiveDate = null;
    /**
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ExpireDate = null;
    /**
     * The ApproximateBase
     * Meta information extracted from the WSDL
     * - documentation: Hotel base rate expressed in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateBase = null;
    /**
     * The ApproximateTotal
     * Meta information extracted from the WSDL
     * - documentation: Hotel total rate expressed in another currency. Supported Providers: 1P | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateTotal = null;
    /**
     * The Contents
     * Meta information extracted from the WSDL
     * - documentation: Contents will be representing all unformatted data returned by HOST, those are not uAPI supported. Support provider 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $Contents = null;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to describe the Hotel Supplier Base Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Base = null;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Tax associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Tax = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Hotel Supplier Total Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Total = null;
    /**
     * The Surcharge
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Surcharge associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Surcharge = null;
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
     * @return \StructType\HotelRateByDate
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireDate, true), gettype($expireDate)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setApproximateBase(?string $approximateBase = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBase) && !is_string($approximateBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBase, true), gettype($approximateBase)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setApproximateTotal(?string $approximateTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotal) && !is_string($approximateTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotal, true), gettype($approximateTotal)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setContents(?string $contents = null): self
    {
        // validation for constraint: string
        if (!is_null($contents) && !is_string($contents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contents, true), gettype($contents)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setBase(?string $base = null): self
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setTax(?string $tax = null): self
    {
        // validation for constraint: string
        if (!is_null($tax) && !is_string($tax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setTotal(?string $total = null): self
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
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
     * @return \StructType\HotelRateByDate
     */
    public function setSurcharge(?string $surcharge = null): self
    {
        // validation for constraint: string
        if (!is_null($surcharge) && !is_string($surcharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surcharge, true), gettype($surcharge)), __LINE__);
        }
        $this->Surcharge = $surcharge;
        
        return $this;
    }
}
