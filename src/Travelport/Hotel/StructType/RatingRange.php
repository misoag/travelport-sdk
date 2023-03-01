<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?int $MinimumRating = null;
    /**
     * The MaximumRating
     * Meta information extracted from the WSDL
     * - documentation: Numeric hotel rating
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    public ?int $MaximumRating = null;
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
     * @return \Travelport\Hotel\StructType\RatingRange
     */
    public function setMinimumRating(?int $minimumRating = null): self
    {
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
     * @return \Travelport\Hotel\StructType\RatingRange
     */
    public function setMaximumRating(?int $maximumRating = null): self
    {
        $this->MaximumRating = $maximumRating;
        
        return $this;
    }
}
