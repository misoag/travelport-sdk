<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSPPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: BSP form of payment.ACH Only
 * @subpackage Structs
 */
class BSPPayment extends AbstractStructBase
{
    /**
     * The BSPIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: required
     * @var string
     */
    public string $BSPIdentifier;
    /**
     * The BSPPassword
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    public ?string $BSPPassword = null;
    /**
     * Constructor method for BSPPayment
     * @uses BSPPayment::setBSPIdentifier()
     * @uses BSPPayment::setBSPPassword()
     * @param string $bSPIdentifier
     * @param string $bSPPassword
     */
    public function __construct(string $bSPIdentifier, ?string $bSPPassword = null)
    {
        $this
            ->setBSPIdentifier($bSPIdentifier)
            ->setBSPPassword($bSPPassword);
    }
    /**
     * Get BSPIdentifier value
     * @return string
     */
    public function getBSPIdentifier(): string
    {
        return $this->BSPIdentifier;
    }
    /**
     * Set BSPIdentifier value
     * @param string $bSPIdentifier
     * @return \Travelport\Hotel\StructType\BSPPayment
     */
    public function setBSPIdentifier(string $bSPIdentifier): self
    {
        $this->BSPIdentifier = $bSPIdentifier;
        
        return $this;
    }
    /**
     * Get BSPPassword value
     * @return string|null
     */
    public function getBSPPassword(): ?string
    {
        return $this->BSPPassword;
    }
    /**
     * Set BSPPassword value
     * @param string $bSPPassword
     * @return \Travelport\Hotel\StructType\BSPPayment
     */
    public function setBSPPassword(?string $bSPPassword = null): self
    {
        $this->BSPPassword = $bSPPassword;
        
        return $this;
    }
}
