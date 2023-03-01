<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverridePCC StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to emulate to another PCC or SID. Providers: 1G, 1V, 1P.
 * @subpackage Structs
 */
class OverridePCC extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the provider (e.g. 1G, 1S) | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PCC in the host system. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $PseudoCityCode;
    /**
     * Constructor method for OverridePCC
     * @uses OverridePCC::setProviderCode()
     * @uses OverridePCC::setPseudoCityCode()
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
     * @return \Travelport\Air\StructType\OverridePCC
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
     * @return \Travelport\Air\StructType\OverridePCC
     */
    public function setPseudoCityCode(string $pseudoCityCode): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
}
