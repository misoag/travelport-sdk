<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Tracks the various agent/agency information
 * @subpackage Structs
 */
class AgencyInfo extends AbstractStructBase
{
    /**
     * The AgentAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AgentAction
     * @var \Travelport\UniversalRecord\StructType\AgentAction[]
     */
    public ?array $AgentAction = null;
    /**
     * Constructor method for AgencyInfo
     * @uses AgencyInfo::setAgentAction()
     * @param \Travelport\UniversalRecord\StructType\AgentAction[] $agentAction
     */
    public function __construct(?array $agentAction = null)
    {
        $this
            ->setAgentAction($agentAction);
    }
    /**
     * Get AgentAction value
     * @return \Travelport\UniversalRecord\StructType\AgentAction[]
     */
    public function getAgentAction(): ?array
    {
        return $this->AgentAction;
    }
    /**
     * Set AgentAction value
     * @param \Travelport\UniversalRecord\StructType\AgentAction[] $agentAction
     * @return \Travelport\UniversalRecord\StructType\AgencyInfo
     */
    public function setAgentAction(?array $agentAction = null): self
    {
        $this->AgentAction = $agentAction;
        
        return $this;
    }
    /**
     * Add item to AgentAction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AgentAction $item
     * @return \Travelport\UniversalRecord\StructType\AgencyInfo
     */
    public function addToAgentAction(\Travelport\UniversalRecord\StructType\AgentAction $item): self
    {
        $this->AgentAction[] = $item;
        
        return $this;
    }
}
