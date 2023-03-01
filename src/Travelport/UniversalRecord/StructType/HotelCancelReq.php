<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelCancelReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Cancel request for a hotel booking. Given a provider code and a provider locator code.
 * @subpackage Structs
 */
class HotelCancelReq extends BaseReq
{
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    public int $Version;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:HotelStay
     * @var \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelStay $HotelStay = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for HotelCancelReq
     * @uses HotelCancelReq::setVersion()
     * @uses HotelCancelReq::setHotelProperty()
     * @uses HotelCancelReq::setHotelStay()
     * @uses HotelCancelReq::setFileFinishingInfo()
     * @uses HotelCancelReq::setSupplierCode()
     * @uses HotelCancelReq::setSupplierLocatorCode()
     * @uses HotelCancelReq::setProviderCode()
     * @uses HotelCancelReq::setProviderLocatorCode()
     * @param int $version
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\HotelStay $hotelStay
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @param string $supplierCode
     * @param string $supplierLocatorCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(int $version, ?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null, ?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null, ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null, ?string $supplierCode = null, ?string $supplierLocatorCode = null, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setVersion($version)
            ->setHotelProperty($hotelProperty)
            ->setHotelStay($hotelStay)
            ->setFileFinishingInfo($fileFinishingInfo)
            ->setSupplierCode($supplierCode)
            ->setSupplierLocatorCode($supplierLocatorCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setVersion(int $version): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\UniversalRecord\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setHotelProperty(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\UniversalRecord\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\UniversalRecord\StructType\HotelStay $hotelStay
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setHotelStay(?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\UniversalRecord\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get SupplierLocatorCode value
     * @return string|null
     */
    public function getSupplierLocatorCode(): ?string
    {
        return $this->SupplierLocatorCode;
    }
    /**
     * Set SupplierLocatorCode value
     * @param string $supplierLocatorCode
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setSupplierLocatorCode(?string $supplierLocatorCode = null): self
    {
        $this->SupplierLocatorCode = $supplierLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\HotelCancelReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
