<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for McoSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Modifiers to narrow the MCO search results.
 * @subpackage Structs
 */
class McoSearchModifiers extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Find all MCOs of a particular type
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Find all MCOs of a particular status.
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - default: 20
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxResults = null;
    /**
     * The StartFromResult
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - default: 0
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $StartFromResult = null;
    /**
     * The IncludeName
     * Meta information extracted from the WSDL
     * - documentation: Should the McoSearchResult include the name on the MCO
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeName = null;
    /**
     * Constructor method for McoSearchModifiers
     * @uses McoSearchModifiers::setType()
     * @uses McoSearchModifiers::setStatus()
     * @uses McoSearchModifiers::setMaxResults()
     * @uses McoSearchModifiers::setStartFromResult()
     * @uses McoSearchModifiers::setIncludeName()
     * @param string $type
     * @param string $status
     * @param int $maxResults
     * @param int $startFromResult
     * @param bool $includeName
     */
    public function __construct(?string $type = null, ?string $status = null, ?int $maxResults = 20, ?int $startFromResult = 0, ?bool $includeName = false)
    {
        $this
            ->setType($type)
            ->setStatus($status)
            ->setMaxResults($maxResults)
            ->setStartFromResult($startFromResult)
            ->setIncludeName($includeName);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\Util\EnumType\TypeMCOType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMCOType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\McoSearchModifiers
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMCOType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMCOType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeMCOType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Travelport\Util\EnumType\TypeMCOStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMCOStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Travelport\Util\StructType\McoSearchModifiers
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMCOStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMCOStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Travelport\Util\EnumType\TypeMCOStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
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
     * @return \Travelport\Util\StructType\McoSearchModifiers
     */
    public function setMaxResults(?int $maxResults = 20): self
    {
        // validation for constraint: int
        if (!is_null($maxResults) && !(is_int($maxResults) || ctype_digit($maxResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResults, true), gettype($maxResults)), __LINE__);
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
     * @return \Travelport\Util\StructType\McoSearchModifiers
     */
    public function setStartFromResult(?int $startFromResult = 0): self
    {
        // validation for constraint: int
        if (!is_null($startFromResult) && !(is_int($startFromResult) || ctype_digit($startFromResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startFromResult, true), gettype($startFromResult)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($startFromResult) && $startFromResult < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($startFromResult, true)), __LINE__);
        }
        $this->StartFromResult = $startFromResult;
        
        return $this;
    }
    /**
     * Get IncludeName value
     * @return bool|null
     */
    public function getIncludeName(): ?bool
    {
        return $this->IncludeName;
    }
    /**
     * Set IncludeName value
     * @param bool $includeName
     * @return \Travelport\Util\StructType\McoSearchModifiers
     */
    public function setIncludeName(?bool $includeName = false): self
    {
        // validation for constraint: boolean
        if (!is_null($includeName) && !is_bool($includeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeName, true), gettype($includeName)), __LINE__);
        }
        $this->IncludeName = $includeName;
        
        return $this;
    }
}
