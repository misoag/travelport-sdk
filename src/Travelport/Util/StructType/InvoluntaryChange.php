<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\TicketEndorsement
     */
    protected \Travelport\Util\StructType\TicketEndorsement $TicketEndorsement;
    /**
     * Constructor method for InvoluntaryChange
     * @uses InvoluntaryChange::setTicketEndorsement()
     * @param \Travelport\Util\StructType\TicketEndorsement $ticketEndorsement
     */
    public function __construct(\Travelport\Util\StructType\TicketEndorsement $ticketEndorsement)
    {
        $this
            ->setTicketEndorsement($ticketEndorsement);
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\Util\StructType\TicketEndorsement
     */
    public function getTicketEndorsement(): \Travelport\Util\StructType\TicketEndorsement
    {
        return $this->TicketEndorsement;
    }
    /**
     * Set TicketEndorsement value
     * @param \Travelport\Util\StructType\TicketEndorsement $ticketEndorsement
     * @return \Travelport\Util\StructType\InvoluntaryChange
     */
    public function setTicketEndorsement(\Travelport\Util\StructType\TicketEndorsement $ticketEndorsement): self
    {
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
}
