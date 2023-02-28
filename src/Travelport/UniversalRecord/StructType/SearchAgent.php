<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $BranchId = null;
    /**
     * The CreatedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent ID that created a PNR.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreatedByAgent = null;
    /**
     * The ModifiedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent ID that modified a PNR last.
     * - use: optional
     * @var string|null
     */
    protected ?string $ModifiedByAgent = null;
    /**
     * The TicketedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent ID that ticketed a PNR.
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketedByAgent = null;
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
     * This method is responsible for validating the value(s) passed to the setBranchId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBranchId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBranchIdForArrayConstraintFromSetBranchId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAgentBranchIdItem) {
            // validation for constraint: itemType
            if (!is_string($searchAgentBranchIdItem)) {
                $invalidValues[] = is_object($searchAgentBranchIdItem) ? get_class($searchAgentBranchIdItem) : sprintf('%s(%s)', gettype($searchAgentBranchIdItem), var_export($searchAgentBranchIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BranchId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BranchId value
     * @throws InvalidArgumentException
     * @param string[] $branchId
     * @return \Travelport\UniversalRecord\StructType\SearchAgent
     */
    public function setBranchId(?array $branchId = null): self
    {
        // validation for constraint: array
        if ('' !== ($branchIdArrayErrorMessage = self::validateBranchIdForArrayConstraintFromSetBranchId($branchId))) {
            throw new InvalidArgumentException($branchIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($branchId) && count($branchId) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($branchId)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BranchId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BranchId) && count($this->BranchId) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BranchId)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($createdByAgent) && !is_string($createdByAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdByAgent, true), gettype($createdByAgent)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($modifiedByAgent) && !is_string($modifiedByAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedByAgent, true), gettype($modifiedByAgent)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($ticketedByAgent) && !is_string($ticketedByAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketedByAgent, true), gettype($ticketedByAgent)), __LINE__);
        }
        $this->TicketedByAgent = $ticketedByAgent;
        
        return $this;
    }
}
