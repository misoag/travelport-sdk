<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $TourCode = null;
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
    protected ?string $TicketDesignator = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $Endorsement = null;
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
     * @return \Travelport\Util\StructType\WaiverCode
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($tourCode) && mb_strlen((string) $tourCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $tourCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\WaiverCode
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
     * @return \Travelport\Util\StructType\WaiverCode
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($endorsement) && mb_strlen((string) $endorsement) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $endorsement)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($endorsement) && mb_strlen((string) $endorsement) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $endorsement)), __LINE__);
        }
        $this->Endorsement = $endorsement;
        
        return $this;
    }
}
