<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSuperShopperRsp StructType
 * @subpackage Structs
 */
class HotelSuperShopperRsp extends BaseSearchRsp
{
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\Hotel\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
    /**
     * The CurrencyRateConversion
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CurrencyRateConversion
     * @var \Travelport\Hotel\StructType\CurrencyRateConversion[]
     */
    public ?array $CurrencyRateConversion = null;
    /**
     * The HotelSuperShopperResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelSuperShopperResults
     * @var \Travelport\Hotel\StructType\HotelSuperShopperResults[]
     */
    public ?array $HotelSuperShopperResults = null;
    /**
     * The QuickResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: QuickResponse
     * @var \Travelport\Hotel\StructType\QuickResponse|null
     */
    public ?\Travelport\Hotel\StructType\QuickResponse $QuickResponse = null;
    /**
     * Constructor method for HotelSuperShopperRsp
     * @uses HotelSuperShopperRsp::setVendorLocation()
     * @uses HotelSuperShopperRsp::setCurrencyRateConversion()
     * @uses HotelSuperShopperRsp::setHotelSuperShopperResults()
     * @uses HotelSuperShopperRsp::setQuickResponse()
     * @param \Travelport\Hotel\StructType\VendorLocation[] $vendorLocation
     * @param \Travelport\Hotel\StructType\CurrencyRateConversion[] $currencyRateConversion
     * @param \Travelport\Hotel\StructType\HotelSuperShopperResults[] $hotelSuperShopperResults
     * @param \Travelport\Hotel\StructType\QuickResponse $quickResponse
     */
    public function __construct(?array $vendorLocation = null, ?array $currencyRateConversion = null, ?array $hotelSuperShopperResults = null, ?\Travelport\Hotel\StructType\QuickResponse $quickResponse = null)
    {
        $this
            ->setVendorLocation($vendorLocation)
            ->setCurrencyRateConversion($currencyRateConversion)
            ->setHotelSuperShopperResults($hotelSuperShopperResults)
            ->setQuickResponse($quickResponse);
    }
    /**
     * Get VendorLocation value
     * @return \Travelport\Hotel\StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Travelport\Hotel\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        $this->VendorLocation = $vendorLocation;
        
        return $this;
    }
    /**
     * Add item to VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\VendorLocation $item
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function addToVendorLocation(\Travelport\Hotel\StructType\VendorLocation $item): self
    {
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get CurrencyRateConversion value
     * @return \Travelport\Hotel\StructType\CurrencyRateConversion[]
     */
    public function getCurrencyRateConversion(): ?array
    {
        return $this->CurrencyRateConversion;
    }
    /**
     * Set CurrencyRateConversion value
     * @param \Travelport\Hotel\StructType\CurrencyRateConversion[] $currencyRateConversion
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function setCurrencyRateConversion(?array $currencyRateConversion = null): self
    {
        $this->CurrencyRateConversion = $currencyRateConversion;
        
        return $this;
    }
    /**
     * Add item to CurrencyRateConversion value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CurrencyRateConversion $item
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function addToCurrencyRateConversion(\Travelport\Hotel\StructType\CurrencyRateConversion $item): self
    {
        $this->CurrencyRateConversion[] = $item;
        
        return $this;
    }
    /**
     * Get HotelSuperShopperResults value
     * @return \Travelport\Hotel\StructType\HotelSuperShopperResults[]
     */
    public function getHotelSuperShopperResults(): ?array
    {
        return $this->HotelSuperShopperResults;
    }
    /**
     * Set HotelSuperShopperResults value
     * @param \Travelport\Hotel\StructType\HotelSuperShopperResults[] $hotelSuperShopperResults
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function setHotelSuperShopperResults(?array $hotelSuperShopperResults = null): self
    {
        $this->HotelSuperShopperResults = $hotelSuperShopperResults;
        
        return $this;
    }
    /**
     * Add item to HotelSuperShopperResults value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelSuperShopperResults $item
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function addToHotelSuperShopperResults(\Travelport\Hotel\StructType\HotelSuperShopperResults $item): self
    {
        $this->HotelSuperShopperResults[] = $item;
        
        return $this;
    }
    /**
     * Get QuickResponse value
     * @return \Travelport\Hotel\StructType\QuickResponse|null
     */
    public function getQuickResponse(): ?\Travelport\Hotel\StructType\QuickResponse
    {
        return $this->QuickResponse;
    }
    /**
     * Set QuickResponse value
     * @param \Travelport\Hotel\StructType\QuickResponse $quickResponse
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp
     */
    public function setQuickResponse(?\Travelport\Hotel\StructType\QuickResponse $quickResponse = null): self
    {
        $this->QuickResponse = $quickResponse;
        
        return $this;
    }
}
