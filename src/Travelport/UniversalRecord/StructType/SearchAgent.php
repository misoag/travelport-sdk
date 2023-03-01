<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAgent StructType
 * Meta information extracted from the WSDL
 * - documentation: Search restriction by Agent
 * @subpackage Structs
 */
class SearchAgent extends AbstractStructBase
{
    /**
     * The BranchId
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BranchId
     * @var string[]
     */
    public ?array $BranchId = null;
    /**
     * The CreatedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent ID that created a PNR.
     * - use: optional
     * @var string|null
     */
    public ?string $CreatedByAgent = null;
    /**
     * The ModifiedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent ID that modified a PNR last.
     * - use: optional
     * @var string|null
     */
    public ?string $ModifiedByAgent = null;
    /**
     * The TicketedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent ID that ticketed a PNR.
     * - use: optional
     * @var string|null
     */
    public ?string $TicketedByAgent = null;
    /**
     * Constructor method for SearchAgent
     * @uses SearchAgent::setBranchId()
     * @uses SearchAgent::setCreatedByAgent()
     * @uses SearchAgent::setModifiedByAgent()
     * @uses SearchAgent::setTicketedByAgent()
     * @param string[] $branchId
     * @param string $createdByAgent
     * @param string $modifiedByAgent
     * @param string $ticketedByAgent
     */
    public function __construct(?array $branchId = null, ?string $createdByAgent = null, ?string $modifiedByAgent = null, ?string $ticketedByAgent = null)
    {
        $this
            ->setBranchId($branchId)
            ->setCreatedByAgent($createdByAgent)
            ->setModifiedByAgent($modifiedByAgent)
            ->setTicketedByAgent($ticketedByAgent);
    }
    /**
     * Get BranchId value
     * @return string[]
     */
    public function getBranchId(): ?array
    {
        return $this->BranchId;
    }
    /**
     * Set BranchId value
     * @param string[] $branchId
     * @return \Travelport\UniversalRecord\StructType\SearchAgent
     */
    public function setBranchId(?array $branchId = null): self
    {
        $this->BranchId = $branchId;
        
        return $this;
    }
    /**
     * Add item to BranchId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\SearchAgent
     */
    public function addToBranchId(string $item): self
    {
        $this->BranchId[] = $item;
        
        return $this;
    }
    /**
     * Get CreatedByAgent value
     * @return string|null
     */
    public function getCreatedByAgent(): ?string
    {
        return $this->CreatedByAgent;
    }
    /**
     * Set CreatedByAgent value
     * @param string $createdByAgent
     * @return \Travelport\UniversalRecord\StructType\SearchAgent
     */
    public function setCreatedByAgent(?string $createdByAgent = null): self
    {
        $this->CreatedByAgent = $createdByAgent;
        
        return $this;
    }
    /**
     * Get ModifiedByAgent value
     * @return string|null
     */
    public function getModifiedByAgent(): ?string
    {
        return $this->ModifiedByAgent;
    }
    /**
     * Set ModifiedByAgent value
     * @param string $modifiedByAgent
     * @return \Travelport\UniversalRecord\StructType\SearchAgent
     */
    public function setModifiedByAgent(?string $modifiedByAgent = null): self
    {
        $this->ModifiedByAgent = $modifiedByAgent;
        
        return $this;
    }
    /**
     * Get TicketedByAgent value
     * @return string|null
     */
    public function getTicketedByAgent(): ?string
    {
        return $this->TicketedByAgent;
    }
    /**
     * Set TicketedByAgent value
     * @param string $ticketedByAgent
     * @return \Travelport\UniversalRecord\StructType\SearchAgent
     */
    public function setTicketedByAgent(?string $ticketedByAgent = null): self
    {
        $this->TicketedByAgent = $ticketedByAgent;
        
        return $this;
    }
}
