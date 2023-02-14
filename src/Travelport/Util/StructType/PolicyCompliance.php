<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected bool $InPolicy;
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
    protected ?string $PolicyToken = null;
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
     * @return \Travelport\Util\StructType\PolicyCompliance
     */
    public function setInPolicy(bool $inPolicy): self
    {
        // validation for constraint: boolean
        if (!is_null($inPolicy) && !is_bool($inPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPolicy, true), gettype($inPolicy)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PolicyCompliance
     */
    public function setPolicyToken(?string $policyToken = null): self
    {
        // validation for constraint: string
        if (!is_null($policyToken) && !is_string($policyToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyToken, true), gettype($policyToken)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($policyToken) && mb_strlen((string) $policyToken) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $policyToken)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($policyToken) && mb_strlen((string) $policyToken) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $policyToken)), __LINE__);
        }
        $this->PolicyToken = $policyToken;
        
        return $this;
    }
}
