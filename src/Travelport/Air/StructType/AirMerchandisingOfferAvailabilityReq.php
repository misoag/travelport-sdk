<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirMerchandisingOfferAvailabilityReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Check with the supplier whether or not the reservation or air solution supports any merchandising offerings.
 * @subpackage Structs
 */
class AirMerchandisingOfferAvailabilityReq extends BaseReq
{
    /**
     * The AgencySellInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencySellInfo
     * @var \Travelport\Air\StructType\AgencySellInfo|null
     */
    public ?\Travelport\Air\StructType\AgencySellInfo $AgencySellInfo = null;
    /**
     * The AirSolution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirSolution
     * @var \Travelport\Air\StructType\AirSolution|null
     */
    public ?\Travelport\Air\StructType\AirSolution $AirSolution = null;
    /**
     * The HostReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HostReservation
     * @var \Travelport\Air\StructType\HostReservation[]
     */
    public ?array $HostReservation = null;
    /**
     * The OfferAvailabilityModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OfferAvailabilityModifiers
     * @var \Travelport\Air\StructType\OfferAvailabilityModifiers[]
     */
    public ?array $OfferAvailabilityModifiers = null;
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
     * Constructor method for AirMerchandisingOfferAvailabilityReq
     * @uses AirMerchandisingOfferAvailabilityReq::setAgencySellInfo()
     * @uses AirMerchandisingOfferAvailabilityReq::setAirSolution()
     * @uses AirMerchandisingOfferAvailabilityReq::setHostReservation()
     * @uses AirMerchandisingOfferAvailabilityReq::setOfferAvailabilityModifiers()
     * @uses AirMerchandisingOfferAvailabilityReq::setMerchandisingPricingModifiers()
     * @param \Travelport\Air\StructType\AgencySellInfo $agencySellInfo
     * @param \Travelport\Air\StructType\AirSolution $airSolution
     * @param \Travelport\Air\StructType\HostReservation[] $hostReservation
     * @param \Travelport\Air\StructType\OfferAvailabilityModifiers[] $offerAvailabilityModifiers
     * @param \Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     */
    public function __construct(?\Travelport\Air\StructType\AgencySellInfo $agencySellInfo = null, ?\Travelport\Air\StructType\AirSolution $airSolution = null, ?array $hostReservation = null, ?array $offerAvailabilityModifiers = null, ?\Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null)
    {
        $this
            ->setAgencySellInfo($agencySellInfo)
            ->setAirSolution($airSolution)
            ->setHostReservation($hostReservation)
            ->setOfferAvailabilityModifiers($offerAvailabilityModifiers)
            ->setMerchandisingPricingModifiers($merchandisingPricingModifiers);
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
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function setAgencySellInfo(?\Travelport\Air\StructType\AgencySellInfo $agencySellInfo = null): self
    {
        $this->AgencySellInfo = $agencySellInfo;
        
        return $this;
    }
    /**
     * Get AirSolution value
     * @return \Travelport\Air\StructType\AirSolution|null
     */
    public function getAirSolution(): ?\Travelport\Air\StructType\AirSolution
    {
        return $this->AirSolution;
    }
    /**
     * Set AirSolution value
     * @param \Travelport\Air\StructType\AirSolution $airSolution
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function setAirSolution(?\Travelport\Air\StructType\AirSolution $airSolution = null): self
    {
        $this->AirSolution = $airSolution;
        
        return $this;
    }
    /**
     * Get HostReservation value
     * @return \Travelport\Air\StructType\HostReservation[]
     */
    public function getHostReservation(): ?array
    {
        return $this->HostReservation;
    }
    /**
     * Set HostReservation value
     * @param \Travelport\Air\StructType\HostReservation[] $hostReservation
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function setHostReservation(?array $hostReservation = null): self
    {
        $this->HostReservation = $hostReservation;
        
        return $this;
    }
    /**
     * Add item to HostReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostReservation $item
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function addToHostReservation(\Travelport\Air\StructType\HostReservation $item): self
    {
        $this->HostReservation[] = $item;
        
        return $this;
    }
    /**
     * Get OfferAvailabilityModifiers value
     * @return \Travelport\Air\StructType\OfferAvailabilityModifiers[]
     */
    public function getOfferAvailabilityModifiers(): ?array
    {
        return $this->OfferAvailabilityModifiers;
    }
    /**
     * Set OfferAvailabilityModifiers value
     * @param \Travelport\Air\StructType\OfferAvailabilityModifiers[] $offerAvailabilityModifiers
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function setOfferAvailabilityModifiers(?array $offerAvailabilityModifiers = null): self
    {
        $this->OfferAvailabilityModifiers = $offerAvailabilityModifiers;
        
        return $this;
    }
    /**
     * Add item to OfferAvailabilityModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\OfferAvailabilityModifiers $item
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function addToOfferAvailabilityModifiers(\Travelport\Air\StructType\OfferAvailabilityModifiers $item): self
    {
        $this->OfferAvailabilityModifiers[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq
     */
    public function setMerchandisingPricingModifiers(?\Travelport\Air\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null): self
    {
        $this->MerchandisingPricingModifiers = $merchandisingPricingModifiers;
        
        return $this;
    }
}
