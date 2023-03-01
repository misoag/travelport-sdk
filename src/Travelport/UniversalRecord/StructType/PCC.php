<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PCC StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify pseudo City
 * @subpackage Structs
 */
class PCC extends AbstractStructBase
{
    /**
     * The OverridePCC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:OverridePCC
     * @var \Travelport\UniversalRecord\StructType\OverridePCC|null
     */
    public ?\Travelport\UniversalRecord\StructType\OverridePCC $OverridePCC = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
    /**
     * The TicketAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TicketAgency
     * @var \Travelport\UniversalRecord\StructType\TicketAgency|null
     */
    public ?\Travelport\UniversalRecord\StructType\TicketAgency $TicketAgency = null;
    /**
     * Constructor method for PCC
     * @uses PCC::setOverridePCC()
     * @uses PCC::setPointOfSale()
     * @uses PCC::setTicketAgency()
     * @param \Travelport\UniversalRecord\StructType\OverridePCC $overridePCC
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     * @param \Travelport\UniversalRecord\StructType\TicketAgency $ticketAgency
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\OverridePCC $overridePCC = null, ?array $pointOfSale = null, ?\Travelport\UniversalRecord\StructType\TicketAgency $ticketAgency = null)
    {
        $this
            ->setOverridePCC($overridePCC)
            ->setPointOfSale($pointOfSale)
            ->setTicketAgency($ticketAgency);
    }
    /**
     * Get OverridePCC value
     * @return \Travelport\UniversalRecord\StructType\OverridePCC|null
     */
    public function getOverridePCC(): ?\Travelport\UniversalRecord\StructType\OverridePCC
    {
        return $this->OverridePCC;
    }
    /**
     * Set OverridePCC value
     * @param \Travelport\UniversalRecord\StructType\OverridePCC $overridePCC
     * @return \Travelport\UniversalRecord\StructType\PCC
     */
    public function setOverridePCC(?\Travelport\UniversalRecord\StructType\OverridePCC $overridePCC = null): self
    {
        $this->OverridePCC = $overridePCC;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\PCC
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $item
     * @return \Travelport\UniversalRecord\StructType\PCC
     */
    public function addToPointOfSale(\Travelport\UniversalRecord\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
        return $this;
    }
    /**
     * Get TicketAgency value
     * @return \Travelport\UniversalRecord\StructType\TicketAgency|null
     */
    public function getTicketAgency(): ?\Travelport\UniversalRecord\StructType\TicketAgency
    {
        return $this->TicketAgency;
    }
    /**
     * Set TicketAgency value
     * @param \Travelport\UniversalRecord\StructType\TicketAgency $ticketAgency
     * @return \Travelport\UniversalRecord\StructType\PCC
     */
    public function setTicketAgency(?\Travelport\UniversalRecord\StructType\TicketAgency $ticketAgency = null): self
    {
        $this->TicketAgency = $ticketAgency;
        
        return $this;
    }
}
