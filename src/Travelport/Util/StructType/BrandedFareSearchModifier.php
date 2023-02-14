<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandedFareSearchModifier StructType
 * Meta information extracted from the WSDL
 * - documentation: Search modifiers for Upsell.
 * @subpackage Structs
 */
class BrandedFareSearchModifier extends AbstractStructBase
{
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
     * Constructor method for BrandedFareSearchModifier
     * @uses BrandedFareSearchModifier::setMaxResults()
     * @uses BrandedFareSearchModifier::setStartFromResult()
     * @param int $maxResults
     * @param int $startFromResult
     */
    public function __construct(?int $maxResults = 20, ?int $startFromResult = 1)
    {
        $this
            ->setMaxResults($maxResults)
            ->setStartFromResult($startFromResult);
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
     * @return \Travelport\Util\StructType\BrandedFareSearchModifier
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
     * @return \Travelport\Util\StructType\BrandedFareSearchModifier
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
}
