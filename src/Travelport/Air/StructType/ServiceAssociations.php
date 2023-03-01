<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceAssociations StructType
 * @subpackage Structs
 */
class ServiceAssociations extends AbstractStructBase
{
    /**
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Air\StructType\ApplicableSegment[]
     */
    public ?array $ApplicableSegment = null;
    /**
     * Constructor method for ServiceAssociations
     * @uses ServiceAssociations::setApplicableSegment()
     * @param \Travelport\Air\StructType\ApplicableSegment[] $applicableSegment
     */
    public function __construct(?array $applicableSegment = null)
    {
        $this
            ->setApplicableSegment($applicableSegment);
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\Air\StructType\ApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * Set ApplicableSegment value
     * @param \Travelport\Air\StructType\ApplicableSegment[] $applicableSegment
     * @return \Travelport\Air\StructType\ServiceAssociations
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ApplicableSegment $item
     * @return \Travelport\Air\StructType\ServiceAssociations
     */
    public function addToApplicableSegment(\Travelport\Air\StructType\ApplicableSegment $item): self
    {
        $this->ApplicableSegment[] = $item;
        
        return $this;
    }
}
