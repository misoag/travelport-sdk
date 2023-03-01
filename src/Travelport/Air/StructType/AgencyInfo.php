<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\AgentAction[]
     */
    public ?array $AgentAction = null;
    /**
     * Constructor method for AgencyInfo
     * @uses AgencyInfo::setAgentAction()
     * @param \Travelport\Air\StructType\AgentAction[] $agentAction
     */
    public function __construct(?array $agentAction = null)
    {
        $this
            ->setAgentAction($agentAction);
    }
    /**
     * Get AgentAction value
     * @return \Travelport\Air\StructType\AgentAction[]
     */
    public function getAgentAction(): ?array
    {
        return $this->AgentAction;
    }
    /**
     * Set AgentAction value
     * @param \Travelport\Air\StructType\AgentAction[] $agentAction
     * @return \Travelport\Air\StructType\AgencyInfo
     */
    public function setAgentAction(?array $agentAction = null): self
    {
        $this->AgentAction = $agentAction;
        
        return $this;
    }
    /**
     * Add item to AgentAction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AgentAction $item
     * @return \Travelport\Air\StructType\AgencyInfo
     */
    public function addToAgentAction(\Travelport\Air\StructType\AgentAction $item): self
    {
        $this->AgentAction[] = $item;
        
        return $this;
    }
}
