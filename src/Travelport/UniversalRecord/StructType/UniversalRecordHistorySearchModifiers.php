<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $ElementType = null;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: Only search for modifications that occured on that date.
     * - choice: ModifiedDate | ModifiedRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var string|null
     */
    protected ?string $ModifiedDate = null;
    /**
     * The ModifiedRange
     * Meta information extracted from the WSDL
     * - choice: ModifiedDate | ModifiedRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ModifiedRange|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ModifiedRange $ModifiedRange = null;
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
    protected ?int $MaxResults = null;
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
    protected ?int $StartFromResult = null;
    /**
     * The ModifiedBy
     * @var string|null
     */
    protected ?string $ModifiedBy = null;
    /**
     * The DebugMode
     * Meta information extracted from the WSDL
     * - documentation: Returns Debug info. Travelport Internal Usage Only.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DebugMode = null;
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
        // validation for constraint: string
        if (!is_null($elementType) && !is_string($elementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elementType, true), gettype($elementType)), __LINE__);
        }
        $this->ElementType = $elementType;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string|null
     */
    public function getModifiedDate(): ?string
    {
        return isset($this->ModifiedDate) ? $this->ModifiedDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setModifiedDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setModifiedDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateModifiedDateForChoiceConstraintsFromSetModifiedDate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ModifiedRange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ModifiedDate can\'t be set as the property %s is already set. Only one property must be set among these properties: ModifiedDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ModifiedDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedDate(?string $modifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        // validation for constraint: choice(ModifiedDate, ModifiedRange)
        if ('' !== ($modifiedDateChoiceErrorMessage = self::validateModifiedDateForChoiceConstraintsFromSetModifiedDate($modifiedDate))) {
            throw new InvalidArgumentException($modifiedDateChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->ModifiedRange) ? $this->ModifiedRange : null;
    }
    /**
     * This method is responsible for validating the value passed to the setModifiedRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setModifiedRange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateModifiedRangeForChoiceConstraintsFromSetModifiedRange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ModifiedDate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ModifiedRange can\'t be set as the property %s is already set. Only one property must be set among these properties: ModifiedRange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ModifiedRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ModifiedRange $modifiedRange
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedRange(?\Travelport\UniversalRecord\StructType\ModifiedRange $modifiedRange = null): self
    {
        // validation for constraint: choice(ModifiedDate, ModifiedRange)
        if ('' !== ($modifiedRangeChoiceErrorMessage = self::validateModifiedRangeForChoiceConstraintsFromSetModifiedRange($modifiedRange))) {
            throw new InvalidArgumentException($modifiedRangeChoiceErrorMessage, __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($maxResults) && !(is_int($maxResults) || ctype_digit($maxResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResults, true), gettype($maxResults)), __LINE__);
        }
        // validation for constraint: maxInclusive(200)
        if (!is_null($maxResults) && $maxResults > 200) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 200', var_export($maxResults, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($maxResults) && $maxResults < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($maxResults, true)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($startFromResult) && !(is_int($startFromResult) || ctype_digit($startFromResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startFromResult, true), gettype($startFromResult)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($startFromResult) && $startFromResult < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($startFromResult, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($modifiedBy) && !is_string($modifiedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedBy, true), gettype($modifiedBy)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($debugMode) && !is_bool($debugMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($debugMode, true), gettype($debugMode)), __LINE__);
        }
        $this->DebugMode = $debugMode;
        
        return $this;
    }
}
