<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirSegmentRef $AirSegmentRef = null;
    /**
     * The TicketValidity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TicketValidity
     * @var \Travelport\UniversalRecord\StructType\TicketValidity|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TicketValidity $TicketValidity = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BaggageAllowance $BaggageAllowance = null;
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
    protected ?string $TicketDesignator = null;
    /**
     * Constructor method for SegmentModifiers
     * @uses SegmentModifiers::setAirSegmentRef()
     * @uses SegmentModifiers::setTicketValidity()
     * @uses SegmentModifiers::setBaggageAllowance()
     * @uses SegmentModifiers::setTicketDesignator()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\TicketValidity $ticketValidity
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance
     * @param string $ticketDesignator
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirSegmentRef $airSegmentRef = null, ?\Travelport\UniversalRecord\StructType\TicketValidity $ticketValidity = null, ?\Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance = null, ?string $ticketDesignator = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setTicketValidity($ticketValidity)
            ->setBaggageAllowance($baggageAllowance)
            ->setTicketDesignator($ticketDesignator);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef|null
     */
    public function getAirSegmentRef(): ?\Travelport\UniversalRecord\StructType\AirSegmentRef
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SegmentModifiers
     */
    public function setAirSegmentRef(?\Travelport\UniversalRecord\StructType\AirSegmentRef $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Get TicketValidity value
     * @return \Travelport\UniversalRecord\StructType\TicketValidity|null
     */
    public function getTicketValidity(): ?\Travelport\UniversalRecord\StructType\TicketValidity
    {
        return $this->TicketValidity;
    }
    /**
     * Set TicketValidity value
     * @param \Travelport\UniversalRecord\StructType\TicketValidity $ticketValidity
     * @return \Travelport\UniversalRecord\StructType\SegmentModifiers
     */
    public function setTicketValidity(?\Travelport\UniversalRecord\StructType\TicketValidity $ticketValidity = null): self
    {
        $this->TicketValidity = $ticketValidity;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance(): ?\Travelport\UniversalRecord\StructType\BaggageAllowance
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance
     * @return \Travelport\UniversalRecord\StructType\SegmentModifiers
     */
    public function setBaggageAllowance(?\Travelport\UniversalRecord\StructType\BaggageAllowance $baggageAllowance = null): self
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
     * @return \Travelport\UniversalRecord\StructType\SegmentModifiers
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
}
