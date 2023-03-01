<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $ActionType;
    /**
     * The AgentCode
     * Meta information extracted from the WSDL
     * - documentation: The AgenctCode who performed the action.
     * - use: required
     * @var string
     */
    public string $AgentCode;
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
    public string $BranchCode;
    /**
     * The AgencyCode
     * Meta information extracted from the WSDL
     * - documentation: The AgencyCode of the agent who performed the action.
     * - use: required
     * @var string
     */
    public string $AgencyCode;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time at which this event took place.
     * - use: required
     * @var string
     */
    public string $EventTime;
    /**
     * The AgentSine
     * Meta information extracted from the WSDL
     * - documentation: The sign in user name of the agent logged into the terminal. PROVIDER SUPPORTED: ACH
     * - use: optional
     * @var string|null
     */
    public ?string $AgentSine = null;
    /**
     * The AgentOverride
     * @var string|null
     */
    public ?string $AgentOverride = null;
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
        $this->AgentOverride = $agentOverride;
        
        return $this;
    }
}
