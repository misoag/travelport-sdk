<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\OverridePCC|null
     */
    public ?\Travelport\Air\StructType\OverridePCC $OverridePCC = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Air\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
    /**
     * The TicketAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TicketAgency
     * @var \Travelport\Air\StructType\TicketAgency|null
     */
    public ?\Travelport\Air\StructType\TicketAgency $TicketAgency = null;
    /**
     * Constructor method for PCC
     * @uses PCC::setOverridePCC()
     * @uses PCC::setPointOfSale()
     * @uses PCC::setTicketAgency()
     * @param \Travelport\Air\StructType\OverridePCC $overridePCC
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @param \Travelport\Air\StructType\TicketAgency $ticketAgency
     */
    public function __construct(?\Travelport\Air\StructType\OverridePCC $overridePCC = null, ?array $pointOfSale = null, ?\Travelport\Air\StructType\TicketAgency $ticketAgency = null)
    {
        $this
            ->setOverridePCC($overridePCC)
            ->setPointOfSale($pointOfSale)
            ->setTicketAgency($ticketAgency);
    }
    /**
     * Get OverridePCC value
     * @return \Travelport\Air\StructType\OverridePCC|null
     */
    public function getOverridePCC(): ?\Travelport\Air\StructType\OverridePCC
    {
        return $this->OverridePCC;
    }
    /**
     * Set OverridePCC value
     * @param \Travelport\Air\StructType\OverridePCC $overridePCC
     * @return \Travelport\Air\StructType\PCC
     */
    public function setOverridePCC(?\Travelport\Air\StructType\OverridePCC $overridePCC = null): self
    {
        $this->OverridePCC = $overridePCC;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Air\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\Air\StructType\PCC
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PointOfSale $item
     * @return \Travelport\Air\StructType\PCC
     */
    public function addToPointOfSale(\Travelport\Air\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
        return $this;
    }
    /**
     * Get TicketAgency value
     * @return \Travelport\Air\StructType\TicketAgency|null
     */
    public function getTicketAgency(): ?\Travelport\Air\StructType\TicketAgency
    {
        return $this->TicketAgency;
    }
    /**
     * Set TicketAgency value
     * @param \Travelport\Air\StructType\TicketAgency $ticketAgency
     * @return \Travelport\Air\StructType\PCC
     */
    public function setTicketAgency(?\Travelport\Air\StructType\TicketAgency $ticketAgency = null): self
    {
        $this->TicketAgency = $ticketAgency;
        
        return $this;
    }
}
