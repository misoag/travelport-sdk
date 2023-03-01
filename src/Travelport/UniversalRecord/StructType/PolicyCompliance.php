<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyCompliance StructType
 * @subpackage Structs
 */
class PolicyCompliance extends AbstractStructBase
{
    /**
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: Policy Compliance Indicator. For In-Policy set to 'true', For Out-Of-Policy set to 'false''.
     * - use: required
     * @var bool
     */
    public bool $InPolicy;
    /**
     * The PolicyToken
     * Meta information extracted from the WSDL
     * - documentation: Optional text message to set the rule or token for which it's In Policy or Out Of Policy. | Used for Character Strings, length 1 to 128.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PolicyToken = null;
    /**
     * Constructor method for PolicyCompliance
     * @uses PolicyCompliance::setInPolicy()
     * @uses PolicyCompliance::setPolicyToken()
     * @param bool $inPolicy
     * @param string $policyToken
     */
    public function __construct(bool $inPolicy, ?string $policyToken = null)
    {
        $this
            ->setInPolicy($inPolicy)
            ->setPolicyToken($policyToken);
    }
    /**
     * Get InPolicy value
     * @return bool
     */
    public function getInPolicy(): bool
    {
        return $this->InPolicy;
    }
    /**
     * Set InPolicy value
     * @param bool $inPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyCompliance
     */
    public function setInPolicy(bool $inPolicy): self
    {
        $this->InPolicy = $inPolicy;
        
        return $this;
    }
    /**
     * Get PolicyToken value
     * @return string|null
     */
    public function getPolicyToken(): ?string
    {
        return $this->PolicyToken;
    }
    /**
     * Set PolicyToken value
     * @param string $policyToken
     * @return \Travelport\UniversalRecord\StructType\PolicyCompliance
     */
    public function setPolicyToken(?string $policyToken = null): self
    {
        $this->PolicyToken = $policyToken;
        
        return $this;
    }
}
