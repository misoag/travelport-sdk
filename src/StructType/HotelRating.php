<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $RatingProvider;
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
    protected ?array $Rating = null;
    /**
     * The RatingRange
     * Meta information extracted from the WSDL
     * - choice: Rating | RatingRange
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: RatingRange
     * @var \StructType\RatingRange|null
     */
    protected ?\StructType\RatingRange $RatingRange = null;
    /**
     * Constructor method for HotelRating
     * @uses HotelRating::setRatingProvider()
     * @uses HotelRating::setRating()
     * @uses HotelRating::setRatingRange()
     * @param string $ratingProvider
     * @param int[] $rating
     * @param \StructType\RatingRange $ratingRange
     */
    public function __construct(string $ratingProvider, ?array $rating = null, ?\StructType\RatingRange $ratingRange = null)
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
     * @return \StructType\HotelRating
     */
    public function setRatingProvider(string $ratingProvider): self
    {
        // validation for constraint: string
        if (!is_null($ratingProvider) && !is_string($ratingProvider)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratingProvider, true), gettype($ratingProvider)), __LINE__);
        }
        $this->RatingProvider = $ratingProvider;
        
        return $this;
    }
    /**
     * Get Rating value
     * @return int[]
     */
    public function getRating(): ?array
    {
        return isset($this->Rating) ? $this->Rating : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRating method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRating method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRatingForArrayConstraintsFromSetRating(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRatingRatingItem) {
            // validation for constraint: itemType
            if (!(is_int($hotelRatingRatingItem) || ctype_digit($hotelRatingRatingItem))) {
                $invalidValues[] = is_object($hotelRatingRatingItem) ? get_class($hotelRatingRatingItem) : sprintf('%s(%s)', gettype($hotelRatingRatingItem), var_export($hotelRatingRatingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rating property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setRating method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRating method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRatingForChoiceConstraintsFromSetRating($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RatingRange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Rating can\'t be set as the property %s is already set. Only one property must be set among these properties: Rating, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Rating value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param int[] $rating
     * @return \StructType\HotelRating
     */
    public function setRating(?array $rating = null): self
    {
        // validation for constraint: array
        if ('' !== ($ratingArrayErrorMessage = self::validateRatingForArrayConstraintsFromSetRating($rating))) {
            throw new InvalidArgumentException($ratingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Rating, RatingRange)
        if ('' !== ($ratingChoiceErrorMessage = self::validateRatingForChoiceConstraintsFromSetRating($rating))) {
            throw new InvalidArgumentException($ratingChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($rating) && count($rating) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($rating)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($rating) && count($rating) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($rating)), __LINE__);
        }
        if (is_null($rating) || (is_array($rating) && empty($rating))) {
            unset($this->Rating);
        } else {
            $this->Rating = $rating;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToRating method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRating method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToRating($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RatingRange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Rating can\'t be set as the property %s is already set. Only one property must be set among these properties: Rating, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Rating value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \StructType\HotelRating
     */
    public function addToRating(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The Rating property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Rating, RatingRange)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToRating($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Rating) && count($this->Rating) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Rating)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Rating) && count($this->Rating) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Rating)), __LINE__);
        }
        $this->Rating[] = $item;
        
        return $this;
    }
    /**
     * Get RatingRange value
     * @return \StructType\RatingRange|null
     */
    public function getRatingRange(): ?\StructType\RatingRange
    {
        return isset($this->RatingRange) ? $this->RatingRange : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRatingRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRatingRange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRatingRangeForChoiceConstraintsFromSetRatingRange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Rating',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RatingRange can\'t be set as the property %s is already set. Only one property must be set among these properties: RatingRange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RatingRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\RatingRange $ratingRange
     * @return \StructType\HotelRating
     */
    public function setRatingRange(?\StructType\RatingRange $ratingRange = null): self
    {
        // validation for constraint: choice(Rating, RatingRange)
        if ('' !== ($ratingRangeChoiceErrorMessage = self::validateRatingRangeForChoiceConstraintsFromSetRatingRange($ratingRange))) {
            throw new InvalidArgumentException($ratingRangeChoiceErrorMessage, __LINE__);
        }
        if (is_null($ratingRange) || (is_array($ratingRange) && empty($ratingRange))) {
            unset($this->RatingRange);
        } else {
            $this->RatingRange = $ratingRange;
        }
        
        return $this;
    }
}
