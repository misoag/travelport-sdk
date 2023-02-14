<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\AgentAction[]
     */
    protected ?array $AgentAction = null;
    /**
     * Constructor method for AgencyInfo
     * @uses AgencyInfo::setAgentAction()
     * @param \StructType\AgentAction[] $agentAction
     */
    public function __construct(?array $agentAction = null)
    {
        $this
            ->setAgentAction($agentAction);
    }
    /**
     * Get AgentAction value
     * @return \StructType\AgentAction[]
     */
    public function getAgentAction(): ?array
    {
        return $this->AgentAction;
    }
    /**
     * This method is responsible for validating the values passed to the setAgentAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgentAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgentActionForArrayConstraintsFromSetAgentAction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $agencyInfoAgentActionItem) {
            // validation for constraint: itemType
            if (!$agencyInfoAgentActionItem instanceof \StructType\AgentAction) {
                $invalidValues[] = is_object($agencyInfoAgentActionItem) ? get_class($agencyInfoAgentActionItem) : sprintf('%s(%s)', gettype($agencyInfoAgentActionItem), var_export($agencyInfoAgentActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AgentAction property can only contain items of type \StructType\AgentAction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AgentAction value
     * @throws InvalidArgumentException
     * @param \StructType\AgentAction[] $agentAction
     * @return \StructType\AgencyInfo
     */
    public function setAgentAction(?array $agentAction = null): self
    {
        // validation for constraint: array
        if ('' !== ($agentActionArrayErrorMessage = self::validateAgentActionForArrayConstraintsFromSetAgentAction($agentAction))) {
            throw new InvalidArgumentException($agentActionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($agentAction) && count($agentAction) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($agentAction)), __LINE__);
        }
        $this->AgentAction = $agentAction;
        
        return $this;
    }
    /**
     * Add item to AgentAction value
     * @throws InvalidArgumentException
     * @param \StructType\AgentAction $item
     * @return \StructType\AgencyInfo
     */
    public function addToAgentAction(\StructType\AgentAction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AgentAction) {
            throw new InvalidArgumentException(sprintf('The AgentAction property can only contain items of type \StructType\AgentAction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AgentAction) && count($this->AgentAction) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AgentAction)), __LINE__);
        }
        $this->AgentAction[] = $item;
        
        return $this;
    }
}
