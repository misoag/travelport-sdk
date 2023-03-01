<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingTicketingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: AirPricing TicketingModifier information - used to associate Ticketing Modifiers with one or more AirPricingInfos/ProviderReservationInfo
 * @subpackage Structs
 */
class AirPricingTicketingModifiers extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The TicketingModifiers
     * Meta information extracted from the WSDL
     * - ref: TicketingModifiers
     * @var \Travelport\Air\StructType\TicketingModifiers|null
     */
    public ?\Travelport\Air\StructType\TicketingModifiers $TicketingModifiers = null;
    /**
     * Constructor method for AirPricingTicketingModifiers
     * @uses AirPricingTicketingModifiers::setAirPricingInfoRef()
     * @uses AirPricingTicketingModifiers::setTicketingModifiers()
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\Air\StructType\TicketingModifiers $ticketingModifiers
     */
    public function __construct(?array $airPricingInfoRef = null, ?\Travelport\Air\StructType\TicketingModifiers $ticketingModifiers = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTicketingModifiers($ticketingModifiers);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Air\StructType\AirPricingTicketingModifiers
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfoRef $item
     * @return \Travelport\Air\StructType\AirPricingTicketingModifiers
     */
    public function addToAirPricingInfoRef(\Travelport\Air\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingModifiers value
     * @return \Travelport\Air\StructType\TicketingModifiers|null
     */
    public function getTicketingModifiers(): ?\Travelport\Air\StructType\TicketingModifiers
    {
        return $this->TicketingModifiers;
    }
    /**
     * Set TicketingModifiers value
     * @param \Travelport\Air\StructType\TicketingModifiers $ticketingModifiers
     * @return \Travelport\Air\StructType\AirPricingTicketingModifiers
     */
    public function setTicketingModifiers(?\Travelport\Air\StructType\TicketingModifiers $ticketingModifiers = null): self
    {
        $this->TicketingModifiers = $ticketingModifiers;
        
        return $this;
    }
}
