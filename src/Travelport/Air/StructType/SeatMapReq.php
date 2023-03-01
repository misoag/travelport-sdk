<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request a seat map for the give flight information
 * @subpackage Structs
 */
class SeatMapReq extends BaseReq
{
    /**
     * The ReturnSeatPricing
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH-When set to true the price of the seat will be returned if it exists.
     * - use: required
     * @var bool
     */
    public bool $ReturnSeatPricing;
    /**
     * The AgencySellInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencySellInfo
     * @var \Travelport\Air\StructType\AgencySellInfo|null
     */
    public ?\Travelport\Air\StructType\AgencySellInfo $AgencySellInfo = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The SearchTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SearchTraveler
     * @var \Travelport\Air\StructType\SearchTraveler[]
     */
    public ?array $SearchTraveler = null;
    /**
     * The HostReservation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HostReservation
     * @var \Travelport\Air\StructType\HostReservation|null
     */
    public ?\Travelport\Air\StructType\HostReservation $HostReservation = null;
    /**
     * The MerchandisingPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MerchandisingPricingModifiers
     * @var \Travelport\Air\StructType\MerchandisingPricingModifiers|null
     */
    public ?\Travelport\Air\StructType\MerchandisingPricingModifiers $MerchandisingPricingModifiers = null;
    /**
     * The ReturnBrandingInfo
     * Meta information extracted from the WSDL
     * - documentation: A value of true will return the BrandingInfo block in the response if applicable. A value of false will not return the BrandingInfo block in the response. Providers: 1G, 1V, 1P, ACH
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnBrandingInfo = null;
    /**
     * Constructor method for SeatMapReq
     * @uses SeatMapReq::setReturnSeatPricing()
     * @uses SeatMapReq::setAgencySellInfo()
     * @uses SeatMapReq::setAirSegment()
     * @uses SeatMapReq::setHostToken()
     * @uses SeatMapReq::setSearchTraveler()
     * @uses SeatMapReq::setHostReservation()
     * @uses SeatMapReq::setMerchandisingPricingModifiers()
     * @uses SeatMapReq::setReturnBrandingInfo()
     * @param bool $returnSeatPricing
     * @param \Travelport\Air\StructType\AgencySellInfo $agencySellInfo
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\SearchTraveler[] $searchTraveler
     * @param \Travelport\Air\StructType\HostReservation $hostReservation
     * @param \Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     * @param bool $returnBrandingInfo
     */
    public function __construct(bool $returnSeatPricing, ?\Travelport\Air\StructType\AgencySellInfo $agencySellInfo = null, ?array $airSegment = null, ?array $hostToken = null, ?array $searchTraveler = null, ?\Travelport\Air\StructType\HostReservation $hostReservation = null, ?\Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null, ?bool $returnBrandingInfo = false)
    {
        $this
            ->setReturnSeatPricing($returnSeatPricing)
            ->setAgencySellInfo($agencySellInfo)
            ->setAirSegment($airSegment)
            ->setHostToken($hostToken)
            ->setSearchTraveler($searchTraveler)
            ->setHostReservation($hostReservation)
            ->setMerchandisingPricingModifiers($merchandisingPricingModifiers)
            ->setReturnBrandingInfo($returnBrandingInfo);
    }
    /**
     * Get ReturnSeatPricing value
     * @return bool
     */
    public function getReturnSeatPricing(): bool
    {
        return $this->ReturnSeatPricing;
    }
    /**
     * Set ReturnSeatPricing value
     * @param bool $returnSeatPricing
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setReturnSeatPricing(bool $returnSeatPricing): self
    {
        $this->ReturnSeatPricing = $returnSeatPricing;
        
        return $this;
    }
    /**
     * Get AgencySellInfo value
     * @return \Travelport\Air\StructType\AgencySellInfo|null
     */
    public function getAgencySellInfo(): ?\Travelport\Air\StructType\AgencySellInfo
    {
        return $this->AgencySellInfo;
    }
    /**
     * Set AgencySellInfo value
     * @param \Travelport\Air\StructType\AgencySellInfo $agencySellInfo
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setAgencySellInfo(?\Travelport\Air\StructType\AgencySellInfo $agencySellInfo = null): self
    {
        $this->AgencySellInfo = $agencySellInfo;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function addToAirSegment(\Travelport\Air\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostToken $item
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get SearchTraveler value
     * @return \Travelport\Air\StructType\SearchTraveler[]
     */
    public function getSearchTraveler(): ?array
    {
        return $this->SearchTraveler;
    }
    /**
     * Set SearchTraveler value
     * @param \Travelport\Air\StructType\SearchTraveler[] $searchTraveler
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setSearchTraveler(?array $searchTraveler = null): self
    {
        $this->SearchTraveler = $searchTraveler;
        
        return $this;
    }
    /**
     * Add item to SearchTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchTraveler $item
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function addToSearchTraveler(\Travelport\Air\StructType\SearchTraveler $item): self
    {
        $this->SearchTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get HostReservation value
     * @return \Travelport\Air\StructType\HostReservation|null
     */
    public function getHostReservation(): ?\Travelport\Air\StructType\HostReservation
    {
        return $this->HostReservation;
    }
    /**
     * Set HostReservation value
     * @param \Travelport\Air\StructType\HostReservation $hostReservation
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setHostReservation(?\Travelport\Air\StructType\HostReservation $hostReservation = null): self
    {
        $this->HostReservation = $hostReservation;
        
        return $this;
    }
    /**
     * Get MerchandisingPricingModifiers value
     * @return \Travelport\Air\StructType\MerchandisingPricingModifiers|null
     */
    public function getMerchandisingPricingModifiers(): ?\Travelport\Air\StructType\MerchandisingPricingModifiers
    {
        return $this->MerchandisingPricingModifiers;
    }
    /**
     * Set MerchandisingPricingModifiers value
     * @param \Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setMerchandisingPricingModifiers(?\Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null): self
    {
        $this->MerchandisingPricingModifiers = $merchandisingPricingModifiers;
        
        return $this;
    }
    /**
     * Get ReturnBrandingInfo value
     * @return bool|null
     */
    public function getReturnBrandingInfo(): ?bool
    {
        return $this->ReturnBrandingInfo;
    }
    /**
     * Set ReturnBrandingInfo value
     * @param bool $returnBrandingInfo
     * @return \Travelport\Air\StructType\SeatMapReq
     */
    public function setReturnBrandingInfo(?bool $returnBrandingInfo = false): self
    {
        $this->ReturnBrandingInfo = $returnBrandingInfo;
        
        return $this;
    }
}
