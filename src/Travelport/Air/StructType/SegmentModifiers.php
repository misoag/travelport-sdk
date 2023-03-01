<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used to pass the ticket validity dates | To be used to modify the ticket modifiers for air segment
 * @subpackage Structs
 */
class SegmentModifiers extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - ref: AirSegmentRef
     * @var \Travelport\Air\StructType\AirSegmentRef|null
     */
    public ?\Travelport\Air\StructType\AirSegmentRef $AirSegmentRef = null;
    /**
     * The TicketValidity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TicketValidity
     * @var \Travelport\Air\StructType\TicketValidity|null
     */
    public ?\Travelport\Air\StructType\TicketValidity $TicketValidity = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Travelport\Air\StructType\BaggageAllowance|null
     */
    public ?\Travelport\Air\StructType\BaggageAllowance $BaggageAllowance = null;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $TicketDesignator = null;
    /**
     * Constructor method for SegmentModifiers
     * @uses SegmentModifiers::setAirSegmentRef()
     * @uses SegmentModifiers::setTicketValidity()
     * @uses SegmentModifiers::setBaggageAllowance()
     * @uses SegmentModifiers::setTicketDesignator()
     * @param \Travelport\Air\StructType\AirSegmentRef $airSegmentRef
     * @param \Travelport\Air\StructType\TicketValidity $ticketValidity
     * @param \Travelport\Air\StructType\BaggageAllowance $baggageAllowance
     * @param string $ticketDesignator
     */
    public function __construct(?\Travelport\Air\StructType\AirSegmentRef $airSegmentRef = null, ?\Travelport\Air\StructType\TicketValidity $ticketValidity = null, ?\Travelport\Air\StructType\BaggageAllowance $baggageAllowance = null, ?string $ticketDesignator = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setTicketValidity($ticketValidity)
            ->setBaggageAllowance($baggageAllowance)
            ->setTicketDesignator($ticketDesignator);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Air\StructType\AirSegmentRef|null
     */
    public function getAirSegmentRef(): ?\Travelport\Air\StructType\AirSegmentRef
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\Air\StructType\AirSegmentRef $airSegmentRef
     * @return \Travelport\Air\StructType\SegmentModifiers
     */
    public function setAirSegmentRef(?\Travelport\Air\StructType\AirSegmentRef $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Get TicketValidity value
     * @return \Travelport\Air\StructType\TicketValidity|null
     */
    public function getTicketValidity(): ?\Travelport\Air\StructType\TicketValidity
    {
        return $this->TicketValidity;
    }
    /**
     * Set TicketValidity value
     * @param \Travelport\Air\StructType\TicketValidity $ticketValidity
     * @return \Travelport\Air\StructType\SegmentModifiers
     */
    public function setTicketValidity(?\Travelport\Air\StructType\TicketValidity $ticketValidity = null): self
    {
        $this->TicketValidity = $ticketValidity;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Travelport\Air\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance(): ?\Travelport\Air\StructType\BaggageAllowance
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Travelport\Air\StructType\BaggageAllowance $baggageAllowance
     * @return \Travelport\Air\StructType\SegmentModifiers
     */
    public function setBaggageAllowance(?\Travelport\Air\StructType\BaggageAllowance $baggageAllowance = null): self
    {
        $this->BaggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @param string $ticketDesignator
     * @return \Travelport\Air\StructType\SegmentModifiers
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
}
