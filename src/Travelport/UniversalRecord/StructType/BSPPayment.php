<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $BSPIdentifier;
    /**
     * The BSPPassword
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    protected ?string $BSPPassword = null;
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
     * @return \Travelport\UniversalRecord\StructType\BSPPayment
     */
    public function setBSPIdentifier(string $bSPIdentifier): self
    {
        // validation for constraint: string
        if (!is_null($bSPIdentifier) && !is_string($bSPIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bSPIdentifier, true), gettype($bSPIdentifier)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($bSPIdentifier) && mb_strlen((string) $bSPIdentifier) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $bSPIdentifier)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BSPPayment
     */
    public function setBSPPassword(?string $bSPPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($bSPPassword) && !is_string($bSPPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bSPPassword, true), gettype($bSPPassword)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($bSPPassword) && mb_strlen((string) $bSPPassword) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $bSPPassword)), __LINE__);
        }
        $this->BSPPassword = $bSPPassword;
        
        return $this;
    }
}
