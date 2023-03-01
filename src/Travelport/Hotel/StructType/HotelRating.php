<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRating StructType
 * Meta information extracted from the WSDL
 * - documentation: Search for a range of ratings | Hotel rating information
 * @subpackage Structs
 */
class HotelRating extends AbstractStructBase
{
    /**
     * The RatingProvider
     * Meta information extracted from the WSDL
     * - documentation: Rating providers, ie AAA, NTM
     * - use: required
     * @var string
     */
    public string $RatingProvider;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - documentation: Hotel rating value | Numeric hotel rating
     * - base: xs:integer
     * - choice: Rating | RatingRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var int[]
     */
    public ?array $Rating = null;
    /**
     * The RatingRange
     * Meta information extracted from the WSDL
     * - choice: Rating | RatingRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: RatingRange
     * @var \Travelport\Hotel\StructType\RatingRange|null
     */
    public ?\Travelport\Hotel\StructType\RatingRange $RatingRange = null;
    /**
     * Constructor method for HotelRating
     * @uses HotelRating::setRatingProvider()
     * @uses HotelRating::setRating()
     * @uses HotelRating::setRatingRange()
     * @param string $ratingProvider
     * @param int[] $rating
     * @param \Travelport\Hotel\StructType\RatingRange $ratingRange
     */
    public function __construct(string $ratingProvider, ?array $rating = null, ?\Travelport\Hotel\StructType\RatingRange $ratingRange = null)
    {
        $this
            ->setRatingProvider($ratingProvider)
            ->setRating($rating)
            ->setRatingRange($ratingRange);
    }
    /**
     * Get RatingProvider value
     * @return string
     */
    public function getRatingProvider(): string
    {
        return $this->RatingProvider;
    }
    /**
     * Set RatingProvider value
     * @param string $ratingProvider
     * @return \Travelport\Hotel\StructType\HotelRating
     */
    public function setRatingProvider(string $ratingProvider): self
    {
        $this->RatingProvider = $ratingProvider;
        
        return $this;
    }
    /**
     * Get Rating value
     * @return int[]|null
     */
    public function getRating(): ?array
    {
        return $this->Rating ?? null;
    }
    /**
     * Set Rating value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param int[] $rating
     * @return \Travelport\Hotel\StructType\HotelRating
     */
    public function setRating(?array $rating = null): self
    {
        if (is_null($rating) || (is_array($rating) && empty($rating))) {
            unset($this->Rating);
        } else {
            $this->Rating = $rating;
        }
        
        return $this;
    }
    /**
     * Add item to Rating value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Hotel\StructType\HotelRating
     */
    public function addToRating(int $item): self
    {
        $this->Rating[] = $item;
        
        return $this;
    }
    /**
     * Get RatingRange value
     * @return \Travelport\Hotel\StructType\RatingRange|null
     */
    public function getRatingRange(): ?\Travelport\Hotel\StructType\RatingRange
    {
        return $this->RatingRange ?? null;
    }
    /**
     * Set RatingRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\RatingRange $ratingRange
     * @return \Travelport\Hotel\StructType\HotelRating
     */
    public function setRatingRange(?\Travelport\Hotel\StructType\RatingRange $ratingRange = null): self
    {
        if (is_null($ratingRange) || (is_array($ratingRange) && empty($ratingRange))) {
            unset($this->RatingRange);
        } else {
            $this->RatingRange = $ratingRange;
        }
        
        return $this;
    }
}
