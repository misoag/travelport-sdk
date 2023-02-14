<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Modifiers to narrow the reference data search results.
 * @subpackage Structs
 */
class ReferenceDataSearchModifiers extends AbstractStructBase
{
    /**
     * The RailStationLocationModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailStationLocationModifiers
     * @var \Travelport\Util\StructType\RailStationLocationModifiers|null
     */
    protected ?\Travelport\Util\StructType\RailStationLocationModifiers $RailStationLocationModifiers = null;
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
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Provider Specific restriction(e.g. 1G, 1P etc) . | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * Constructor method for ReferenceDataSearchModifiers
     * @uses ReferenceDataSearchModifiers::setRailStationLocationModifiers()
     * @uses ReferenceDataSearchModifiers::setMaxResults()
     * @uses ReferenceDataSearchModifiers::setStartFromResult()
     * @uses ReferenceDataSearchModifiers::setProviderCode()
     * @param \Travelport\Util\StructType\RailStationLocationModifiers $railStationLocationModifiers
     * @param int $maxResults
     * @param int $startFromResult
     * @param string $providerCode
     */
    public function __construct(?\Travelport\Util\StructType\RailStationLocationModifiers $railStationLocationModifiers = null, ?int $maxResults = 20, ?int $startFromResult = 0, ?string $providerCode = null)
    {
        $this
            ->setRailStationLocationModifiers($railStationLocationModifiers)
            ->setMaxResults($maxResults)
            ->setStartFromResult($startFromResult)
            ->setProviderCode($providerCode);
    }
    /**
     * Get RailStationLocationModifiers value
     * @return \Travelport\Util\StructType\RailStationLocationModifiers|null
     */
    public function getRailStationLocationModifiers(): ?\Travelport\Util\StructType\RailStationLocationModifiers
    {
        return $this->RailStationLocationModifiers;
    }
    /**
     * Set RailStationLocationModifiers value
     * @param \Travelport\Util\StructType\RailStationLocationModifiers $railStationLocationModifiers
     * @return \Travelport\Util\StructType\ReferenceDataSearchModifiers
     */
    public function setRailStationLocationModifiers(?\Travelport\Util\StructType\RailStationLocationModifiers $railStationLocationModifiers = null): self
    {
        $this->RailStationLocationModifiers = $railStationLocationModifiers;
        
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
     * @return \Travelport\Util\StructType\ReferenceDataSearchModifiers
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
     * @return \Travelport\Util\StructType\ReferenceDataSearchModifiers
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
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Util\StructType\ReferenceDataSearchModifiers
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
