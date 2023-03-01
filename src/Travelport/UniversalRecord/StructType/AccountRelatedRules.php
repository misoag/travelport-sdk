<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\BookingRules[]
     */
    public ?array $BookingRules = null;
    /**
     * The RoutingRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RoutingRules
     * @var \Travelport\UniversalRecord\StructType\RoutingRules|null
     */
    public ?\Travelport\UniversalRecord\StructType\RoutingRules $RoutingRules = null;
    /**
     * Constructor method for AccountRelatedRules
     * @uses AccountRelatedRules::setBookingRules()
     * @uses AccountRelatedRules::setRoutingRules()
     * @param \Travelport\UniversalRecord\StructType\BookingRules[] $bookingRules
     * @param \Travelport\UniversalRecord\StructType\RoutingRules $routingRules
     */
    public function __construct(?array $bookingRules = null, ?\Travelport\UniversalRecord\StructType\RoutingRules $routingRules = null)
    {
        $this
            ->setBookingRules($bookingRules)
            ->setRoutingRules($routingRules);
    }
    /**
     * Get BookingRules value
     * @return \Travelport\UniversalRecord\StructType\BookingRules[]
     */
    public function getBookingRules(): ?array
    {
        return $this->BookingRules;
    }
    /**
     * Set BookingRules value
     * @param \Travelport\UniversalRecord\StructType\BookingRules[] $bookingRules
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules
     */
    public function setBookingRules(?array $bookingRules = null): self
    {
        $this->BookingRules = $bookingRules;
        
        return $this;
    }
    /**
     * Add item to BookingRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingRules $item
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules
     */
    public function addToBookingRules(\Travelport\UniversalRecord\StructType\BookingRules $item): self
    {
        $this->BookingRules[] = $item;
        
        return $this;
    }
    /**
     * Get RoutingRules value
     * @return \Travelport\UniversalRecord\StructType\RoutingRules|null
     */
    public function getRoutingRules(): ?\Travelport\UniversalRecord\StructType\RoutingRules
    {
        return $this->RoutingRules;
    }
    /**
     * Set RoutingRules value
     * @param \Travelport\UniversalRecord\StructType\RoutingRules $routingRules
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules
     */
    public function setRoutingRules(?\Travelport\UniversalRecord\StructType\RoutingRules $routingRules = null): self
    {
        $this->RoutingRules = $routingRules;
        
        return $this;
    }
}
