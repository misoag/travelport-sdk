<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketAgency StructType
 * Meta information extracted from the WSDL
 * - documentation: This modifier will override the pseudo of the ticketing agency found in the AAT (TKAG). Used for all plating carrier validation.
 * @subpackage Structs
 */
class TicketAgency extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $PseudoCityCode;
    /**
     * Constructor method for TicketAgency
     * @uses TicketAgency::setProviderCode()
     * @uses TicketAgency::setPseudoCityCode()
     * @param string $providerCode
     * @param string $pseudoCityCode
     */
    public function __construct(string $providerCode, string $pseudoCityCode)
    {
        $this
            ->setProviderCode($providerCode)
            ->setPseudoCityCode($pseudoCityCode);
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\TicketAgency
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string
     */
    public function getPseudoCityCode(): string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\UniversalRecord\StructType\TicketAgency
     */
    public function setPseudoCityCode(string $pseudoCityCode): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
}
