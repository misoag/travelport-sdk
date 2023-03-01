<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordHistorySearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Universal Record history request.
 * @subpackage Structs
 */
class UniversalRecordHistorySearchModifiers extends AbstractStructBase
{
    /**
     * The ElementType
     * Meta information extracted from the WSDL
     * - documentation: The Type of History that is to be searched for.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $ElementType = null;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: Only search for modifications that occured on that date.
     * - choice: ModifiedDate | ModifiedRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var string|null
     */
    public ?string $ModifiedDate = null;
    /**
     * The ModifiedRange
     * Meta information extracted from the WSDL
     * - choice: ModifiedDate | ModifiedRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ModifiedRange|null
     */
    public ?\Travelport\UniversalRecord\StructType\ModifiedRange $ModifiedRange = null;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - documentation: Used to limit the number of results returned, particularly in more general searches that may return a large result set.
     * - base: xs:integer
     * - default: 20
     * - maxInclusive: 200
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $MaxResults = null;
    /**
     * The StartFromResult
     * Meta information extracted from the WSDL
     * - documentation: Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the begining of the result set.
     * - base: xs:integer
     * - default: 1
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $StartFromResult = null;
    /**
     * The ModifiedBy
     * @var string|null
     */
    public ?string $ModifiedBy = null;
    /**
     * The DebugMode
     * Meta information extracted from the WSDL
     * - documentation: Returns Debug info. Travelport Internal Usage Only.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $DebugMode = null;
    /**
     * Constructor method for UniversalRecordHistorySearchModifiers
     * @uses UniversalRecordHistorySearchModifiers::setElementType()
     * @uses UniversalRecordHistorySearchModifiers::setModifiedDate()
     * @uses UniversalRecordHistorySearchModifiers::setModifiedRange()
     * @uses UniversalRecordHistorySearchModifiers::setMaxResults()
     * @uses UniversalRecordHistorySearchModifiers::setStartFromResult()
     * @uses UniversalRecordHistorySearchModifiers::setModifiedBy()
     * @uses UniversalRecordHistorySearchModifiers::setDebugMode()
     * @param string $elementType
     * @param string $modifiedDate
     * @param \Travelport\UniversalRecord\StructType\ModifiedRange $modifiedRange
     * @param int $maxResults
     * @param int $startFromResult
     * @param string $modifiedBy
     * @param bool $debugMode
     */
    public function __construct(?string $elementType = null, ?string $modifiedDate = null, ?\Travelport\UniversalRecord\StructType\ModifiedRange $modifiedRange = null, ?int $maxResults = 20, ?int $startFromResult = 1, ?string $modifiedBy = null, ?bool $debugMode = false)
    {
        $this
            ->setElementType($elementType)
            ->setModifiedDate($modifiedDate)
            ->setModifiedRange($modifiedRange)
            ->setMaxResults($maxResults)
            ->setStartFromResult($startFromResult)
            ->setModifiedBy($modifiedBy)
            ->setDebugMode($debugMode);
    }
    /**
     * Get ElementType value
     * @return string|null
     */
    public function getElementType(): ?string
    {
        return $this->ElementType;
    }
    /**
     * Set ElementType value
     * @param string $elementType
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setElementType(?string $elementType = null): self
    {
        $this->ElementType = $elementType;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string|null
     */
    public function getModifiedDate(): ?string
    {
        return $this->ModifiedDate ?? null;
    }
    /**
     * Set ModifiedDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedDate(?string $modifiedDate = null): self
    {
        if (is_null($modifiedDate) || (is_array($modifiedDate) && empty($modifiedDate))) {
            unset($this->ModifiedDate);
        } else {
            $this->ModifiedDate = $modifiedDate;
        }
        
        return $this;
    }
    /**
     * Get ModifiedRange value
     * @return \Travelport\UniversalRecord\StructType\ModifiedRange|null
     */
    public function getModifiedRange(): ?\Travelport\UniversalRecord\StructType\ModifiedRange
    {
        return $this->ModifiedRange ?? null;
    }
    /**
     * Set ModifiedRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ModifiedRange $modifiedRange
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedRange(?\Travelport\UniversalRecord\StructType\ModifiedRange $modifiedRange = null): self
    {
        if (is_null($modifiedRange) || (is_array($modifiedRange) && empty($modifiedRange))) {
            unset($this->ModifiedRange);
        } else {
            $this->ModifiedRange = $modifiedRange;
        }
        
        return $this;
    }
    /**
     * Get MaxResults value
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->MaxResults;
    }
    /**
     * Set MaxResults value
     * @param int $maxResults
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setMaxResults(?int $maxResults = 20): self
    {
        $this->MaxResults = $maxResults;
        
        return $this;
    }
    /**
     * Get StartFromResult value
     * @return int|null
     */
    public function getStartFromResult(): ?int
    {
        return $this->StartFromResult;
    }
    /**
     * Set StartFromResult value
     * @param int $startFromResult
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setStartFromResult(?int $startFromResult = 1): self
    {
        $this->StartFromResult = $startFromResult;
        
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedBy(?string $modifiedBy = null): self
    {
        $this->ModifiedBy = $modifiedBy;
        
        return $this;
    }
    /**
     * Get DebugMode value
     * @return bool|null
     */
    public function getDebugMode(): ?bool
    {
        return $this->DebugMode;
    }
    /**
     * Set DebugMode value
     * @param bool $debugMode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setDebugMode(?bool $debugMode = false): self
    {
        $this->DebugMode = $debugMode;
        
        return $this;
    }
}
