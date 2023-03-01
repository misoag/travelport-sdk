<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoluntaryChange StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify the Ticket Endorsement value
 * @subpackage Structs
 */
class InvoluntaryChange extends AbstractStructBase
{
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: TicketEndorsement
     * @var \Travelport\Air\StructType\TicketEndorsement
     */
    public \Travelport\Air\StructType\TicketEndorsement $TicketEndorsement;
    /**
     * Constructor method for InvoluntaryChange
     * @uses InvoluntaryChange::setTicketEndorsement()
     * @param \Travelport\Air\StructType\TicketEndorsement $ticketEndorsement
     */
    public function __construct(\Travelport\Air\StructType\TicketEndorsement $ticketEndorsement)
    {
        $this
            ->setTicketEndorsement($ticketEndorsement);
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\Air\StructType\TicketEndorsement
     */
    public function getTicketEndorsement(): \Travelport\Air\StructType\TicketEndorsement
    {
        return $this->TicketEndorsement;
    }
    /**
     * Set TicketEndorsement value
     * @param \Travelport\Air\StructType\TicketEndorsement $ticketEndorsement
     * @return \Travelport\Air\StructType\InvoluntaryChange
     */
    public function setTicketEndorsement(\Travelport\Air\StructType\TicketEndorsement $ticketEndorsement): self
    {
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
}
