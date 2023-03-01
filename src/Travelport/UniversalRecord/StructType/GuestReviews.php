<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\Comments[]
     */
    public ?array $Comments = null;
    /**
     * Constructor method for GuestReviews
     * @uses GuestReviews::setComments()
     * @param \Travelport\UniversalRecord\StructType\Comments[] $comments
     */
    public function __construct(?array $comments = null)
    {
        $this
            ->setComments($comments);
    }
    /**
     * Get Comments value
     * @return \Travelport\UniversalRecord\StructType\Comments[]
     */
    public function getComments(): ?array
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \Travelport\UniversalRecord\StructType\Comments[] $comments
     * @return \Travelport\UniversalRecord\StructType\GuestReviews
     */
    public function setComments(?array $comments = null): self
    {
        $this->Comments = $comments;
        
        return $this;
    }
    /**
     * Add item to Comments value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Comments $item
     * @return \Travelport\UniversalRecord\StructType\GuestReviews
     */
    public function addToComments(\Travelport\UniversalRecord\StructType\Comments $item): self
    {
        $this->Comments[] = $item;
        
        return $this;
    }
}
