<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointOfSale StructType
 * Meta information extracted from the WSDL
 * - documentation: User can use this node to send a specific PCC to access fares allowed only for that PCC. This node gives the capability for fare redistribution at UR level. For fare redistribution at the stored fare level see
 * AirPricingSolution/AirPricingInfo/AirPricingModifiers/PointOfSale.
 * @subpackage Structs
 */
class PointOfSale extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The provider in which the PCC is defined. | 5 Character Provider Code
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
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The IATA
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. This field is the IATA associated to this Point of Sale PCC. Providers: 1G/1V | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    public ?string $IATA = null;
    /**
     * Constructor method for PointOfSale
     * @uses PointOfSale::setProviderCode()
     * @uses PointOfSale::setPseudoCityCode()
     * @uses PointOfSale::setKey()
     * @uses PointOfSale::setIATA()
     * @param string $providerCode
     * @param string $pseudoCityCode
     * @param string $key
     * @param string $iATA
     */
    public function __construct(string $providerCode, string $pseudoCityCode, ?string $key = null, ?string $iATA = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setPseudoCityCode($pseudoCityCode)
            ->setKey($key)
            ->setIATA($iATA);
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
     * @return \Travelport\Hotel\StructType\PointOfSale
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
     * @return \Travelport\Hotel\StructType\PointOfSale
     */
    public function setPseudoCityCode(string $pseudoCityCode): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Hotel\StructType\PointOfSale
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get IATA value
     * @return string|null
     */
    public function getIATA(): ?string
    {
        return $this->IATA;
    }
    /**
     * Set IATA value
     * @param string $iATA
     * @return \Travelport\Hotel\StructType\PointOfSale
     */
    public function setIATA(?string $iATA = null): self
    {
        $this->IATA = $iATA;
        
        return $this;
    }
}
