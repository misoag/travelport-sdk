<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActionDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to the storing of the fare: Agent, Date and Action for Provider: 1P/1J
 * @subpackage Structs
 */
class ActionDetails extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: PCC in the host of the agent who stored the fare for Provider: 1P/1J | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PseudoCityCode = null;
    /**
     * The AgentSine
     * Meta information extracted from the WSDL
     * - documentation: The sign in of the user who stored the fare for Provider: 1P/1J
     * - use: optional
     * @var string|null
     */
    protected ?string $AgentSine = null;
    /**
     * The EventDate
     * Meta information extracted from the WSDL
     * - documentation: Date at which the fare was stored for Provider: 1P/1J
     * - use: optional
     * @var string|null
     */
    protected ?string $EventDate = null;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: Time at which the fare was stored for Provider: 1P/1J
     * - use: optional
     * @var string|null
     */
    protected ?string $EventTime = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The type of action the agent performed for Provider: 1P/1J
     * - use: optional
     * @var string|null
     */
    protected ?string $Text = null;
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
     * @return \Travelport\Util\StructType\ActionDetails
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ActionDetails
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
     * @return \Travelport\Util\StructType\ActionDetails
     */
    public function setEventDate(?string $eventDate = null): self
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDate, true), gettype($eventDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ActionDetails
     */
    public function setEventTime(?string $eventTime = null): self
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ActionDetails
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
}
