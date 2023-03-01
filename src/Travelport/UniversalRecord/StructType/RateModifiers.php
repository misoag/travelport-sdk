<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateModifiers StructType
 * @subpackage Structs
 */
class RateModifiers extends AbstractStructBase
{
    /**
     * The RateCode
     * Meta information extracted from the WSDL
     * - documentation: The code of this rate.
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $RateCode = null;
    /**
     * The DiscountNumber
     * Meta information extracted from the WSDL
     * - documentation: A supplier-specific number which may identify a special rate associated with a traveler's organization
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    public ?string $DiscountNumber = null;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $VendorCode = null;
    /**
     * The PromotionalCode
     * Meta information extracted from the WSDL
     * - documentation: Specific coupon or promotion code
     * - use: optional
     * @var string|null
     */
    public ?string $PromotionalCode = null;
    /**
     * The VendorLocationRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $VendorLocationRef = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour number or code. Providers: 1P, 1G, 1V.
     * - use: optional
     * @var string|null
     */
    public ?string $TourCode = null;
    /**
     * Constructor method for RateModifiers
     * @uses RateModifiers::setRateCode()
     * @uses RateModifiers::setDiscountNumber()
     * @uses RateModifiers::setVendorCode()
     * @uses RateModifiers::setPromotionalCode()
     * @uses RateModifiers::setVendorLocationRef()
     * @uses RateModifiers::setTourCode()
     * @param string $rateCode
     * @param string $discountNumber
     * @param string $vendorCode
     * @param string $promotionalCode
     * @param string $vendorLocationRef
     * @param string $tourCode
     */
    public function __construct(?string $rateCode = null, ?string $discountNumber = null, ?string $vendorCode = null, ?string $promotionalCode = null, ?string $vendorLocationRef = null, ?string $tourCode = null)
    {
        $this
            ->setRateCode($rateCode)
            ->setDiscountNumber($discountNumber)
            ->setVendorCode($vendorCode)
            ->setPromotionalCode($promotionalCode)
            ->setVendorLocationRef($vendorLocationRef)
            ->setTourCode($tourCode);
    }
    /**
     * Get RateCode value
     * @return string|null
     */
    public function getRateCode(): ?string
    {
        return $this->RateCode;
    }
    /**
     * Set RateCode value
     * @param string $rateCode
     * @return \Travelport\UniversalRecord\StructType\RateModifiers
     */
    public function setRateCode(?string $rateCode = null): self
    {
        $this->RateCode = $rateCode;
        
        return $this;
    }
    /**
     * Get DiscountNumber value
     * @return string|null
     */
    public function getDiscountNumber(): ?string
    {
        return $this->DiscountNumber;
    }
    /**
     * Set DiscountNumber value
     * @param string $discountNumber
     * @return \Travelport\UniversalRecord\StructType\RateModifiers
     */
    public function setDiscountNumber(?string $discountNumber = null): self
    {
        $this->DiscountNumber = $discountNumber;
        
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
     * @return \Travelport\UniversalRecord\StructType\RateModifiers
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
    /**
     * Get PromotionalCode value
     * @return string|null
     */
    public function getPromotionalCode(): ?string
    {
        return $this->PromotionalCode;
    }
    /**
     * Set PromotionalCode value
     * @param string $promotionalCode
     * @return \Travelport\UniversalRecord\StructType\RateModifiers
     */
    public function setPromotionalCode(?string $promotionalCode = null): self
    {
        $this->PromotionalCode = $promotionalCode;
        
        return $this;
    }
    /**
     * Get VendorLocationRef value
     * @return string|null
     */
    public function getVendorLocationRef(): ?string
    {
        return $this->VendorLocationRef;
    }
    /**
     * Set VendorLocationRef value
     * @param string $vendorLocationRef
     * @return \Travelport\UniversalRecord\StructType\RateModifiers
     */
    public function setVendorLocationRef(?string $vendorLocationRef = null): self
    {
        $this->VendorLocationRef = $vendorLocationRef;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\UniversalRecord\StructType\RateModifiers
     */
    public function setTourCode(?string $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
}
