<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestReviews StructType
 * Meta information extracted from the WSDL
 * - documentation: Comments and Reviews from hotel guests
 * @subpackage Structs
 */
class GuestReviews extends AbstractStructBase
{
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Hotel\StructType\Comments[]
     */
    protected ?array $Comments = null;
    /**
     * Constructor method for GuestReviews
     * @uses GuestReviews::setComments()
     * @param \Travelport\Hotel\StructType\Comments[] $comments
     */
    public function __construct(?array $comments = null)
    {
        $this
            ->setComments($comments);
    }
    /**
     * Get Comments value
     * @return \Travelport\Hotel\StructType\Comments[]
     */
    public function getComments(): ?array
    {
        return $this->Comments;
    }
    /**
     * This method is responsible for validating the values passed to the setComments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setComments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommentsForArrayConstraintsFromSetComments(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $guestReviewsCommentsItem) {
            // validation for constraint: itemType
            if (!$guestReviewsCommentsItem instanceof \Travelport\Hotel\StructType\Comments) {
                $invalidValues[] = is_object($guestReviewsCommentsItem) ? get_class($guestReviewsCommentsItem) : sprintf('%s(%s)', gettype($guestReviewsCommentsItem), var_export($guestReviewsCommentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Comments property can only contain items of type \Travelport\Hotel\StructType\Comments, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Comments value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Comments[] $comments
     * @return \Travelport\Hotel\StructType\GuestReviews
     */
    public function setComments(?array $comments = null): self
    {
        // validation for constraint: array
        if ('' !== ($commentsArrayErrorMessage = self::validateCommentsForArrayConstraintsFromSetComments($comments))) {
            throw new InvalidArgumentException($commentsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($comments) && count($comments) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($comments)), __LINE__);
        }
        $this->Comments = $comments;
        
        return $this;
    }
    /**
     * Add item to Comments value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Comments $item
     * @return \Travelport\Hotel\StructType\GuestReviews
     */
    public function addToComments(\Travelport\Hotel\StructType\Comments $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\Comments) {
            throw new InvalidArgumentException(sprintf('The Comments property can only contain items of type \Travelport\Hotel\StructType\Comments, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Comments) && count($this->Comments) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Comments)), __LINE__);
        }
        $this->Comments[] = $item;
        
        return $this;
    }
}
