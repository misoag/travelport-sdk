<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActionDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to the storing of the fare: Agent, Date and Action for Provider: 1P
 * @subpackage Structs
 */
class ActionDetails extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: PCC in the host of the agent who stored the fare for Provider: 1P | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The AgentSine
     * Meta information extracted from the WSDL
     * - documentation: The sign in of the user who stored the fare for Provider: 1P
     * - use: optional
     * @var string|null
     */
    public ?string $AgentSine = null;
    /**
     * The EventDate
     * Meta information extracted from the WSDL
     * - documentation: Date at which the fare was stored for Provider: 1P
     * - use: optional
     * @var string|null
     */
    public ?string $EventDate = null;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: Time at which the fare was stored for Provider: 1P
     * - use: optional
     * @var string|null
     */
    public ?string $EventTime = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The type of action the agent performed for Provider: 1P
     * - use: optional
     * @var string|null
     */
    public ?string $Text = null;
    /**
     * Constructor method for ActionDetails
     * @uses ActionDetails::setPseudoCityCode()
     * @uses ActionDetails::setAgentSine()
     * @uses ActionDetails::setEventDate()
     * @uses ActionDetails::setEventTime()
     * @uses ActionDetails::setText()
     * @param string $pseudoCityCode
     * @param string $agentSine
     * @param string $eventDate
     * @param string $eventTime
     * @param string $text
     */
    public function __construct(?string $pseudoCityCode = null, ?string $agentSine = null, ?string $eventDate = null, ?string $eventTime = null, ?string $text = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setAgentSine($agentSine)
            ->setEventDate($eventDate)
            ->setEventTime($eventTime)
            ->setText($text);
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\Air\StructType\ActionDetails
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
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
     * @return \Travelport\Air\StructType\ActionDetails
     */
    public function setAgentSine(?string $agentSine = null): self
    {
        $this->AgentSine = $agentSine;
        
        return $this;
    }
    /**
     * Get EventDate value
     * @return string|null
     */
    public function getEventDate(): ?string
    {
        return $this->EventDate;
    }
    /**
     * Set EventDate value
     * @param string $eventDate
     * @return \Travelport\Air\StructType\ActionDetails
     */
    public function setEventDate(?string $eventDate = null): self
    {
        $this->EventDate = $eventDate;
        
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime(): ?string
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \Travelport\Air\StructType\ActionDetails
     */
    public function setEventTime(?string $eventTime = null): self
    {
        $this->EventTime = $eventTime;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\Air\StructType\ActionDetails
     */
    public function setText(?string $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
}
