<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?array $Comments = null;
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
     * Set Comments value
     * @param \Travelport\Hotel\StructType\Comments[] $comments
     * @return \Travelport\Hotel\StructType\GuestReviews
     */
    public function setComments(?array $comments = null): self
    {
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
        $this->Comments[] = $item;
        
        return $this;
    }
}
