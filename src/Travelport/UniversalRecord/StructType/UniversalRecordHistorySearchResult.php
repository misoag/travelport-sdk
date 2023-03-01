<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordHistorySearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Universal Record history result.
 * @subpackage Structs
 */
class UniversalRecordHistorySearchResult extends AbstractStructBase
{
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: When the Universal Record was modified.
     * - use: required
     * @var string
     */
    public string $ModifiedDate;
    /**
     * The ElementType
     * Meta information extracted from the WSDL
     * - documentation: The type of element that was added or deleted
     * - use: required
     * @var string
     */
    public string $ElementType;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: The action that was taken on the defined element
     * - use: required
     * @var string
     */
    public string $Action;
    /**
     * The Old
     * Meta information extracted from the WSDL
     * - documentation: Representation of the element before the modification took place.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Old = null;
    /**
     * The New
     * Meta information extracted from the WSDL
     * - documentation: Representation of the element after the modification took place.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $New = null;
    /**
     * The ModifiedBy
     * Meta information extracted from the WSDL
     * - documentation: The agent or entity that performed the modification
     * - use: optional
     * @var string|null
     */
    public ?string $ModifiedBy = null;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - documentation: System generated unique identifier for this atomic transaction. Travelport Internal Usage Only.
     * - use: optional
     * @var string|null
     */
    public ?string $TransactionId = null;
    /**
     * The AgentOverride
     * @var string|null
     */
    public ?string $AgentOverride = null;
    /**
     * Constructor method for UniversalRecordHistorySearchResult
     * @uses UniversalRecordHistorySearchResult::setModifiedDate()
     * @uses UniversalRecordHistorySearchResult::setElementType()
     * @uses UniversalRecordHistorySearchResult::setAction()
     * @uses UniversalRecordHistorySearchResult::setOld()
     * @uses UniversalRecordHistorySearchResult::setNew()
     * @uses UniversalRecordHistorySearchResult::setModifiedBy()
     * @uses UniversalRecordHistorySearchResult::setTransactionId()
     * @uses UniversalRecordHistorySearchResult::setAgentOverride()
     * @param string $modifiedDate
     * @param string $elementType
     * @param string $action
     * @param string $old
     * @param string $new
     * @param string $modifiedBy
     * @param string $transactionId
     * @param string $agentOverride
     */
    public function __construct(string $modifiedDate, string $elementType, string $action, ?string $old = null, ?string $new = null, ?string $modifiedBy = null, ?string $transactionId = null, ?string $agentOverride = null)
    {
        $this
            ->setModifiedDate($modifiedDate)
            ->setElementType($elementType)
            ->setAction($action)
            ->setOld($old)
            ->setNew($new)
            ->setModifiedBy($modifiedBy)
            ->setTransactionId($transactionId)
            ->setAgentOverride($agentOverride);
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get ElementType value
     * @return string
     */
    public function getElementType(): string
    {
        return $this->ElementType;
    }
    /**
     * Set ElementType value
     * @param string $elementType
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setElementType(string $elementType): self
    {
        $this->ElementType = $elementType;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction(): string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setAction(string $action): self
    {
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get Old value
     * @return string|null
     */
    public function getOld(): ?string
    {
        return $this->Old;
    }
    /**
     * Set Old value
     * @param string $old
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setOld(?string $old = null): self
    {
        $this->Old = $old;
        
        return $this;
    }
    /**
     * Get New value
     * @return string|null
     */
    public function getNew(): ?string
    {
        return $this->New;
    }
    /**
     * Set New value
     * @param string $new
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setNew(?string $new = null): self
    {
        $this->New = $new;
        
        return $this;
    }
    /**
     * Get ModifiedBy value
     * @return string|null
     */
    public function getModifiedBy(): ?string
    {
        return $this->ModifiedBy;
    }
    /**
     * Set ModifiedBy value
     * @param string $modifiedBy
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setModifiedBy(?string $modifiedBy = null): self
    {
        $this->ModifiedBy = $modifiedBy;
        
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        $this->TransactionId = $transactionId;
        
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult
     */
    public function setAgentOverride(?string $agentOverride = null): self
    {
        $this->AgentOverride = $agentOverride;
        
        return $this;
    }
}
