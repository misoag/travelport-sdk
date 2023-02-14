<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatingRange StructType
 * Meta information extracted from the WSDL
 * - documentation: Search for a range of rating
 * @subpackage Structs
 */
class RatingRange extends AbstractStructBase
{
    /**
     * The MinimumRating
     * Meta information extracted from the WSDL
     * - documentation: Numeric hotel rating
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    protected ?int $MinimumRating = null;
    /**
     * The MaximumRating
     * Meta information extracted from the WSDL
     * - documentation: Numeric hotel rating
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    protected ?int $MaximumRating = null;
    /**
     * Constructor method for RatingRange
     * @uses RatingRange::setMinimumRating()
     * @uses RatingRange::setMaximumRating()
     * @param int $minimumRating
     * @param int $maximumRating
     */
    public function __construct(?int $minimumRating = null, ?int $maximumRating = null)
    {
        $this
            ->setMinimumRating($minimumRating)
            ->setMaximumRating($maximumRating);
    }
    /**
     * Get MinimumRating value
     * @return int|null
     */
    public function getMinimumRating(): ?int
    {
        return $this->MinimumRating;
    }
    /**
     * Set MinimumRating value
     * @param int $minimumRating
     * @return \Travelport\UniversalRecord\StructType\RatingRange
     */
    public function setMinimumRating(?int $minimumRating = null): self
    {
        // validation for constraint: int
        if (!is_null($minimumRating) && !(is_int($minimumRating) || ctype_digit($minimumRating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumRating, true), gettype($minimumRating)), __LINE__);
        }
        $this->MinimumRating = $minimumRating;
        
        return $this;
    }
    /**
     * Get MaximumRating value
     * @return int|null
     */
    public function getMaximumRating(): ?int
    {
        return $this->MaximumRating;
    }
    /**
     * Set MaximumRating value
     * @param int $maximumRating
     * @return \Travelport\UniversalRecord\StructType\RatingRange
     */
    public function setMaximumRating(?int $maximumRating = null): self
    {
        // validation for constraint: int
        if (!is_null($maximumRating) && !(is_int($maximumRating) || ctype_digit($maximumRating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumRating, true), gettype($maximumRating)), __LINE__);
        }
        $this->MaximumRating = $maximumRating;
        
        return $this;
    }
}
