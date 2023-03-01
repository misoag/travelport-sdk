<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\AgentAction[]
     */
    public ?array $AgentAction = null;
    /**
     * Constructor method for AgencyInfo
     * @uses AgencyInfo::setAgentAction()
     * @param \Travelport\Hotel\StructType\AgentAction[] $agentAction
     */
    public function __construct(?array $agentAction = null)
    {
        $this
            ->setAgentAction($agentAction);
    }
    /**
     * Get AgentAction value
     * @return \Travelport\Hotel\StructType\AgentAction[]
     */
    public function getAgentAction(): ?array
    {
        return $this->AgentAction;
    }
    /**
     * Set AgentAction value
     * @param \Travelport\Hotel\StructType\AgentAction[] $agentAction
     * @return \Travelport\Hotel\StructType\AgencyInfo
     */
    public function setAgentAction(?array $agentAction = null): self
    {
        $this->AgentAction = $agentAction;
        
        return $this;
    }
    /**
     * Add item to AgentAction value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\AgentAction $item
     * @return \Travelport\Hotel\StructType\AgencyInfo
     */
    public function addToAgentAction(\Travelport\Hotel\StructType\AgentAction $item): self
    {
        $this->AgentAction[] = $item;
        
        return $this;
    }
}
