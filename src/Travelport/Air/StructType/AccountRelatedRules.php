<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountRelatedRules StructType
 * @subpackage Structs
 */
class AccountRelatedRules extends AbstractStructBase
{
    /**
     * The BookingRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingRules
     * @var \Travelport\Air\StructType\BookingRules[]
     */
    public ?array $BookingRules = null;
    /**
     * The RoutingRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RoutingRules
     * @var \Travelport\Air\StructType\RoutingRules|null
     */
    public ?\Travelport\Air\StructType\RoutingRules $RoutingRules = null;
    /**
     * Constructor method for AccountRelatedRules
     * @uses AccountRelatedRules::setBookingRules()
     * @uses AccountRelatedRules::setRoutingRules()
     * @param \Travelport\Air\StructType\BookingRules[] $bookingRules
     * @param \Travelport\Air\StructType\RoutingRules $routingRules
     */
    public function __construct(?array $bookingRules = null, ?\Travelport\Air\StructType\RoutingRules $routingRules = null)
    {
        $this
            ->setBookingRules($bookingRules)
            ->setRoutingRules($routingRules);
    }
    /**
     * Get BookingRules value
     * @return \Travelport\Air\StructType\BookingRules[]
     */
    public function getBookingRules(): ?array
    {
        return $this->BookingRules;
    }
    /**
     * Set BookingRules value
     * @param \Travelport\Air\StructType\BookingRules[] $bookingRules
     * @return \Travelport\Air\StructType\AccountRelatedRules
     */
    public function setBookingRules(?array $bookingRules = null): self
    {
        $this->BookingRules = $bookingRules;
        
        return $this;
    }
    /**
     * Add item to BookingRules value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingRules $item
     * @return \Travelport\Air\StructType\AccountRelatedRules
     */
    public function addToBookingRules(\Travelport\Air\StructType\BookingRules $item): self
    {
        $this->BookingRules[] = $item;
        
        return $this;
    }
    /**
     * Get RoutingRules value
     * @return \Travelport\Air\StructType\RoutingRules|null
     */
    public function getRoutingRules(): ?\Travelport\Air\StructType\RoutingRules
    {
        return $this->RoutingRules;
    }
    /**
     * Set RoutingRules value
     * @param \Travelport\Air\StructType\RoutingRules $routingRules
     * @return \Travelport\Air\StructType\AccountRelatedRules
     */
    public function setRoutingRules(?\Travelport\Air\StructType\RoutingRules $routingRules = null): self
    {
        $this->RoutingRules = $routingRules;
        
        return $this;
    }
}
