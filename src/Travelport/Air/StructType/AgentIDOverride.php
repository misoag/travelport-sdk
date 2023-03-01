<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgentIDOverride StructType
 * Meta information extracted from the WSDL
 * - documentation: Vendor specific agent identifier overrides to be used to access vendor systems.
 * @subpackage Structs
 */
class AgentIDOverride extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Provider code to route the AgentId to proper provider. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The AgentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $AgentID;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Supplier code to determine which vendor this AgentId belongs to. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for AgentIDOverride
     * @uses AgentIDOverride::setProviderCode()
     * @uses AgentIDOverride::setAgentID()
     * @uses AgentIDOverride::setSupplierCode()
     * @param string $providerCode
     * @param string $agentID
     * @param string $supplierCode
     */
    public function __construct(string $providerCode, string $agentID, ?string $supplierCode = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setAgentID($agentID)
            ->setSupplierCode($supplierCode);
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
     * @return \Travelport\Air\StructType\AgentIDOverride
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get AgentID value
     * @return string
     */
    public function getAgentID(): string
    {
        return $this->AgentID;
    }
    /**
     * Set AgentID value
     * @param string $agentID
     * @return \Travelport\Air\StructType\AgentIDOverride
     */
    public function setAgentID(string $agentID): self
    {
        $this->AgentID = $agentID;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\AgentIDOverride
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
