<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WaiverCode StructType
 * Meta information extracted from the WSDL
 * - documentation: Waiver code to override fare validations
 * @subpackage Structs
 */
class WaiverCode extends AbstractStructBase
{
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $TourCode = null;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDesignator = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $Endorsement = null;
    /**
     * Constructor method for WaiverCode
     * @uses WaiverCode::setTourCode()
     * @uses WaiverCode::setTicketDesignator()
     * @uses WaiverCode::setEndorsement()
     * @param string $tourCode
     * @param string $ticketDesignator
     * @param string $endorsement
     */
    public function __construct(?string $tourCode = null, ?string $ticketDesignator = null, ?string $endorsement = null)
    {
        $this
            ->setTourCode($tourCode)
            ->setTicketDesignator($ticketDesignator)
            ->setEndorsement($endorsement);
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\UniversalRecord\StructType\WaiverCode
     */
    public function setTourCode(?string $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\WaiverCode
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get Endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->Endorsement;
    }
    /**
     * Set Endorsement value
     * @param string $endorsement
     * @return \Travelport\UniversalRecord\StructType\WaiverCode
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        $this->Endorsement = $endorsement;
        
        return $this;
    }
}
