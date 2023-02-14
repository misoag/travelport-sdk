<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ProviderCode;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $PseudoCityCode;
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
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
}
