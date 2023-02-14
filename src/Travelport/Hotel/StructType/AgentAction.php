<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgentAction StructType
 * Meta information extracted from the WSDL
 * - documentation: Depending on context, this will represent information about which agent perform different actions.
 * @subpackage Structs
 */
class AgentAction extends AbstractStructBase
{
    /**
     * The ActionType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ActionType;
    /**
     * The AgentCode
     * Meta information extracted from the WSDL
     * - documentation: The AgenctCode who performed the action.
     * - use: required
     * @var string
     */
    protected string $AgentCode;
    /**
     * The BranchCode
     * Meta information extracted from the WSDL
     * - documentation: The BranchCode of the branch (working branch, branchcode used for the request. If nothing specified, branchcode for the agent) who performed the action. | Agency Branch Code Identifier
     * - base: xs:string
     * - maxLength: 25
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $BranchCode;
    /**
     * The AgencyCode
     * Meta information extracted from the WSDL
     * - documentation: The AgencyCode of the agent who performed the action.
     * - use: required
     * @var string
     */
    protected string $AgencyCode;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time at which this event took place.
     * - use: required
     * @var string
     */
    protected string $EventTime;
    /**
     * The AgentSine
     * Meta information extracted from the WSDL
     * - documentation: The sign in user name of the agent logged into the terminal. PROVIDER SUPPORTED: ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $AgentSine = null;
    /**
     * The AgentOverride
     * @var string|null
     */
    protected ?string $AgentOverride = null;
    /**
     * Constructor method for AgentAction
     * @uses AgentAction::setActionType()
     * @uses AgentAction::setAgentCode()
     * @uses AgentAction::setBranchCode()
     * @uses AgentAction::setAgencyCode()
     * @uses AgentAction::setEventTime()
     * @uses AgentAction::setAgentSine()
     * @uses AgentAction::setAgentOverride()
     * @param string $actionType
     * @param string $agentCode
     * @param string $branchCode
     * @param string $agencyCode
     * @param string $eventTime
     * @param string $agentSine
     * @param string $agentOverride
     */
    public function __construct(string $actionType, string $agentCode, string $branchCode, string $agencyCode, string $eventTime, ?string $agentSine = null, ?string $agentOverride = null)
    {
        $this
            ->setActionType($actionType)
            ->setAgentCode($agentCode)
            ->setBranchCode($branchCode)
            ->setAgencyCode($agencyCode)
            ->setEventTime($eventTime)
            ->setAgentSine($agentSine)
            ->setAgentOverride($agentOverride);
    }
    /**
     * Get ActionType value
     * @return string
     */
    public function getActionType(): string
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @param string $actionType
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setActionType(string $actionType): self
    {
        // validation for constraint: string
        if (!is_null($actionType) && !is_string($actionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionType, true), gettype($actionType)), __LINE__);
        }
        $this->ActionType = $actionType;
        
        return $this;
    }
    /**
     * Get AgentCode value
     * @return string
     */
    public function getAgentCode(): string
    {
        return $this->AgentCode;
    }
    /**
     * Set AgentCode value
     * @param string $agentCode
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setAgentCode(string $agentCode): self
    {
        // validation for constraint: string
        if (!is_null($agentCode) && !is_string($agentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentCode, true), gettype($agentCode)), __LINE__);
        }
        $this->AgentCode = $agentCode;
        
        return $this;
    }
    /**
     * Get BranchCode value
     * @return string
     */
    public function getBranchCode(): string
    {
        return $this->BranchCode;
    }
    /**
     * Set BranchCode value
     * @param string $branchCode
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setBranchCode(string $branchCode): self
    {
        // validation for constraint: string
        if (!is_null($branchCode) && !is_string($branchCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($branchCode, true), gettype($branchCode)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($branchCode) && mb_strlen((string) $branchCode) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $branchCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($branchCode) && mb_strlen((string) $branchCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $branchCode)), __LINE__);
        }
        $this->BranchCode = $branchCode;
        
        return $this;
    }
    /**
     * Get AgencyCode value
     * @return string
     */
    public function getAgencyCode(): string
    {
        return $this->AgencyCode;
    }
    /**
     * Set AgencyCode value
     * @param string $agencyCode
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setAgencyCode(string $agencyCode): self
    {
        // validation for constraint: string
        if (!is_null($agencyCode) && !is_string($agencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCode, true), gettype($agencyCode)), __LINE__);
        }
        $this->AgencyCode = $agencyCode;
        
        return $this;
    }
    /**
     * Get EventTime value
     * @return string
     */
    public function getEventTime(): string
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setEventTime(string $eventTime): self
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        
        return $this;
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine(): ?string
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setAgentSine(?string $agentSine = null): self
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentSine, true), gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        
        return $this;
    }
    /**
     * Get AgentOverride value
     * @return string|null
     */
    public function getAgentOverride(): ?string
    {
        return $this->AgentOverride;
    }
    /**
     * Set AgentOverride value
     * @param string $agentOverride
     * @return \Travelport\Hotel\StructType\AgentAction
     */
    public function setAgentOverride(?string $agentOverride = null): self
    {
        // validation for constraint: string
        if (!is_null($agentOverride) && !is_string($agentOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentOverride, true), gettype($agentOverride)), __LINE__);
        }
        $this->AgentOverride = $agentOverride;
        
        return $this;
    }
}
