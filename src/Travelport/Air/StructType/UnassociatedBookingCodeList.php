<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnassociatedBookingCodeList StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists classes of service by segment sent in the request which are not associated to a brand.
 * @subpackage Structs
 */
class UnassociatedBookingCodeList extends AbstractStructBase
{
    /**
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeApplicableSegment[]
     */
    public ?array $ApplicableSegment = null;
    /**
     * Constructor method for UnassociatedBookingCodeList
     * @uses UnassociatedBookingCodeList::setApplicableSegment()
     * @param \Travelport\Air\StructType\TypeApplicableSegment[] $applicableSegment
     */
    public function __construct(?array $applicableSegment = null)
    {
        $this
            ->setApplicableSegment($applicableSegment);
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\Air\StructType\TypeApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * Set ApplicableSegment value
     * @param \Travelport\Air\StructType\TypeApplicableSegment[] $applicableSegment
     * @return \Travelport\Air\StructType\UnassociatedBookingCodeList
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeApplicableSegment $item
     * @return \Travelport\Air\StructType\UnassociatedBookingCodeList
     */
    public function addToApplicableSegment(\Travelport\Air\StructType\TypeApplicableSegment $item): self
    {
        $this->ApplicableSegment[] = $item;
        
        return $this;
    }
}
