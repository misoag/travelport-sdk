<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ARCPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: ARC form of payment.ACH Only
 * @subpackage Structs
 */
class ARCPayment extends AbstractStructBase
{
    /**
     * The ARCIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: required
     * @var string
     */
    public string $ARCIdentifier;
    /**
     * The ARCPassword
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    public ?string $ARCPassword = null;
    /**
     * Constructor method for ARCPayment
     * @uses ARCPayment::setARCIdentifier()
     * @uses ARCPayment::setARCPassword()
     * @param string $aRCIdentifier
     * @param string $aRCPassword
     */
    public function __construct(string $aRCIdentifier, ?string $aRCPassword = null)
    {
        $this
            ->setARCIdentifier($aRCIdentifier)
            ->setARCPassword($aRCPassword);
    }
    /**
     * Get ARCIdentifier value
     * @return string
     */
    public function getARCIdentifier(): string
    {
        return $this->ARCIdentifier;
    }
    /**
     * Set ARCIdentifier value
     * @param string $aRCIdentifier
     * @return \Travelport\Hotel\StructType\ARCPayment
     */
    public function setARCIdentifier(string $aRCIdentifier): self
    {
        $this->ARCIdentifier = $aRCIdentifier;
        
        return $this;
    }
    /**
     * Get ARCPassword value
     * @return string|null
     */
    public function getARCPassword(): ?string
    {
        return $this->ARCPassword;
    }
    /**
     * Set ARCPassword value
     * @param string $aRCPassword
     * @return \Travelport\Hotel\StructType\ARCPayment
     */
    public function setARCPassword(?string $aRCPassword = null): self
    {
        $this->ARCPassword = $aRCPassword;
        
        return $this;
    }
}
