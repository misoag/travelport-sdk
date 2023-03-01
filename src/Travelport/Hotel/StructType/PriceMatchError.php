<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceMatchError StructType
 * @subpackage Structs
 */
class PriceMatchError extends AbstractStructBase
{
    /**
     * The ErrorMessage
     * @var string|null
     */
    public ?string $ErrorMessage = null;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the vendor (e.g. HZ, etc.) | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $VendorCode = null;
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $HotelChain = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel. | Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    public ?string $HotelCode = null;
    /**
     * The ReqBase
     * Meta information extracted from the WSDL
     * - documentation: BaseRate in the request.
     * - use: optional
     * @var float|null
     */
    public ?float $ReqBase = null;
    /**
     * The RspBase
     * Meta information extracted from the WSDL
     * - documentation: BaseRate retruned from the supplier.
     * - use: optional
     * @var float|null
     */
    public ?float $RspBase = null;
    /**
     * The BaseDiff
     * Meta information extracted from the WSDL
     * - documentation: BaseRate Difference.
     * - use: optional
     * @var float|null
     */
    public ?float $BaseDiff = null;
    /**
     * The ReqTotal
     * Meta information extracted from the WSDL
     * - documentation: Estimated Total Amount in the request.
     * - use: optional
     * @var float|null
     */
    public ?float $ReqTotal = null;
    /**
     * The RspTotal
     * Meta information extracted from the WSDL
     * - documentation: Estimated Total Amount returned from the supplier.
     * - use: optional
     * @var float|null
     */
    public ?float $RspTotal = null;
    /**
     * The TotalDiff
     * Meta information extracted from the WSDL
     * - documentation: Estimated Total Amount difference.
     * - use: optional
     * @var float|null
     */
    public ?float $TotalDiff = null;
    /**
     * Constructor method for PriceMatchError
     * @uses PriceMatchError::setErrorMessage()
     * @uses PriceMatchError::setVendorCode()
     * @uses PriceMatchError::setHotelChain()
     * @uses PriceMatchError::setHotelCode()
     * @uses PriceMatchError::setReqBase()
     * @uses PriceMatchError::setRspBase()
     * @uses PriceMatchError::setBaseDiff()
     * @uses PriceMatchError::setReqTotal()
     * @uses PriceMatchError::setRspTotal()
     * @uses PriceMatchError::setTotalDiff()
     * @param string $errorMessage
     * @param string $vendorCode
     * @param string $hotelChain
     * @param string $hotelCode
     * @param float $reqBase
     * @param float $rspBase
     * @param float $baseDiff
     * @param float $reqTotal
     * @param float $rspTotal
     * @param float $totalDiff
     */
    public function __construct(?string $errorMessage = null, ?string $vendorCode = null, ?string $hotelChain = null, ?string $hotelCode = null, ?float $reqBase = null, ?float $rspBase = null, ?float $baseDiff = null, ?float $reqTotal = null, ?float $rspTotal = null, ?float $totalDiff = null)
    {
        $this
            ->setErrorMessage($errorMessage)
            ->setVendorCode($vendorCode)
            ->setHotelChain($hotelChain)
            ->setHotelCode($hotelCode)
            ->setReqBase($reqBase)
            ->setRspBase($rspBase)
            ->setBaseDiff($baseDiff)
            ->setReqTotal($reqTotal)
            ->setRspTotal($rspTotal)
            ->setTotalDiff($totalDiff);
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
    /**
     * Get HotelChain value
     * @return string|null
     */
    public function getHotelChain(): ?string
    {
        return $this->HotelChain;
    }
    /**
     * Set HotelChain value
     * @param string $hotelChain
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setHotelChain(?string $hotelChain = null): self
    {
        $this->HotelChain = $hotelChain;
        
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
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get ReqBase value
     * @return float|null
     */
    public function getReqBase(): ?float
    {
        return $this->ReqBase;
    }
    /**
     * Set ReqBase value
     * @param float $reqBase
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setReqBase(?float $reqBase = null): self
    {
        $this->ReqBase = $reqBase;
        
        return $this;
    }
    /**
     * Get RspBase value
     * @return float|null
     */
    public function getRspBase(): ?float
    {
        return $this->RspBase;
    }
    /**
     * Set RspBase value
     * @param float $rspBase
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setRspBase(?float $rspBase = null): self
    {
        $this->RspBase = $rspBase;
        
        return $this;
    }
    /**
     * Get BaseDiff value
     * @return float|null
     */
    public function getBaseDiff(): ?float
    {
        return $this->BaseDiff;
    }
    /**
     * Set BaseDiff value
     * @param float $baseDiff
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setBaseDiff(?float $baseDiff = null): self
    {
        $this->BaseDiff = $baseDiff;
        
        return $this;
    }
    /**
     * Get ReqTotal value
     * @return float|null
     */
    public function getReqTotal(): ?float
    {
        return $this->ReqTotal;
    }
    /**
     * Set ReqTotal value
     * @param float $reqTotal
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setReqTotal(?float $reqTotal = null): self
    {
        $this->ReqTotal = $reqTotal;
        
        return $this;
    }
    /**
     * Get RspTotal value
     * @return float|null
     */
    public function getRspTotal(): ?float
    {
        return $this->RspTotal;
    }
    /**
     * Set RspTotal value
     * @param float $rspTotal
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setRspTotal(?float $rspTotal = null): self
    {
        $this->RspTotal = $rspTotal;
        
        return $this;
    }
    /**
     * Get TotalDiff value
     * @return float|null
     */
    public function getTotalDiff(): ?float
    {
        return $this->TotalDiff;
    }
    /**
     * Set TotalDiff value
     * @param float $totalDiff
     * @return \Travelport\Hotel\StructType\PriceMatchError
     */
    public function setTotalDiff(?float $totalDiff = null): self
    {
        $this->TotalDiff = $totalDiff;
        
        return $this;
    }
}
