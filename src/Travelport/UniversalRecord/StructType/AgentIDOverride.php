<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ProviderCode;
    /**
     * The AgentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $AgentID;
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
    protected ?string $SupplierCode = null;
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
     * @return \Travelport\UniversalRecord\StructType\AgentIDOverride
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AgentIDOverride
     */
    public function setAgentID(string $agentID): self
    {
        // validation for constraint: string
        if (!is_null($agentID) && !is_string($agentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentID, true), gettype($agentID)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($agentID) && mb_strlen((string) $agentID) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $agentID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($agentID) && mb_strlen((string) $agentID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $agentID)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AgentIDOverride
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
