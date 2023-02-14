<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ARCIdentifier;
    /**
     * The ARCPassword
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    protected ?string $ARCPassword = null;
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
     * @return \Travelport\UniversalRecord\StructType\ARCPayment
     */
    public function setARCIdentifier(string $aRCIdentifier): self
    {
        // validation for constraint: string
        if (!is_null($aRCIdentifier) && !is_string($aRCIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aRCIdentifier, true), gettype($aRCIdentifier)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($aRCIdentifier) && mb_strlen((string) $aRCIdentifier) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $aRCIdentifier)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ARCPayment
     */
    public function setARCPassword(?string $aRCPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($aRCPassword) && !is_string($aRCPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aRCPassword, true), gettype($aRCPassword)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($aRCPassword) && mb_strlen((string) $aRCPassword) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $aRCPassword)), __LINE__);
        }
        $this->ARCPassword = $aRCPassword;
        
        return $this;
    }
}
