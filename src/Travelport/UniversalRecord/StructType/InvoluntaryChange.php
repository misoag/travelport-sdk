<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\TicketEndorsement
     */
    protected \Travelport\UniversalRecord\StructType\TicketEndorsement $TicketEndorsement;
    /**
     * Constructor method for InvoluntaryChange
     * @uses InvoluntaryChange::setTicketEndorsement()
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement $ticketEndorsement
     */
    public function __construct(\Travelport\UniversalRecord\StructType\TicketEndorsement $ticketEndorsement)
    {
        $this
            ->setTicketEndorsement($ticketEndorsement);
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\UniversalRecord\StructType\TicketEndorsement
     */
    public function getTicketEndorsement(): \Travelport\UniversalRecord\StructType\TicketEndorsement
    {
        return $this->TicketEndorsement;
    }
    /**
     * Set TicketEndorsement value
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement $ticketEndorsement
     * @return \Travelport\UniversalRecord\StructType\InvoluntaryChange
     */
    public function setTicketEndorsement(\Travelport\UniversalRecord\StructType\TicketEndorsement $ticketEndorsement): self
    {
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
}
