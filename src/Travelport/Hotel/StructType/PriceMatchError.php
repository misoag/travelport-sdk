<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?string $ErrorMessage = null;
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
    protected ?string $VendorCode = null;
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $HotelChain = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel. | Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    protected ?string $HotelCode = null;
    /**
     * The ReqBase
     * Meta information extracted from the WSDL
     * - documentation: BaseRate in the request.
     * - use: optional
     * @var float|null
     */
    protected ?float $ReqBase = null;
    /**
     * The RspBase
     * Meta information extracted from the WSDL
     * - documentation: BaseRate retruned from the supplier.
     * - use: optional
     * @var float|null
     */
    protected ?float $RspBase = null;
    /**
     * The BaseDiff
     * Meta information extracted from the WSDL
     * - documentation: BaseRate Difference.
     * - use: optional
     * @var float|null
     */
    protected ?float $BaseDiff = null;
    /**
     * The ReqTotal
     * Meta information extracted from the WSDL
     * - documentation: Estimated Total Amount in the request.
     * - use: optional
     * @var float|null
     */
    protected ?float $ReqTotal = null;
    /**
     * The RspTotal
     * Meta information extracted from the WSDL
     * - documentation: Estimated Total Amount returned from the supplier.
     * - use: optional
     * @var float|null
     */
    protected ?float $RspTotal = null;
    /**
     * The TotalDiff
     * Meta information extracted from the WSDL
     * - documentation: Estimated Total Amount difference.
     * - use: optional
     * @var float|null
     */
    protected ?float $TotalDiff = null;
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
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $vendorCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($hotelChain) && !is_string($hotelChain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChain, true), gettype($hotelChain)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($hotelChain) && mb_strlen((string) $hotelChain) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $hotelChain)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($reqBase) && !(is_float($reqBase) || is_numeric($reqBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reqBase, true), gettype($reqBase)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($rspBase) && !(is_float($rspBase) || is_numeric($rspBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rspBase, true), gettype($rspBase)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($baseDiff) && !(is_float($baseDiff) || is_numeric($baseDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseDiff, true), gettype($baseDiff)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($reqTotal) && !(is_float($reqTotal) || is_numeric($reqTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reqTotal, true), gettype($reqTotal)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($rspTotal) && !(is_float($rspTotal) || is_numeric($rspTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rspTotal, true), gettype($rspTotal)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($totalDiff) && !(is_float($totalDiff) || is_numeric($totalDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDiff, true), gettype($totalDiff)), __LINE__);
        }
        $this->TotalDiff = $totalDiff;
        
        return $this;
    }
}
