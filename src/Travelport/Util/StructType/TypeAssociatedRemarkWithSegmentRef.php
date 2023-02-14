<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAssociatedRemarkWithSegmentRef StructType
 * Meta information extracted from the WSDL
 * - documentation: A textual remark container to hold Associated itinerary remarks with segment association
 * @subpackage Structs
 */
class TypeAssociatedRemarkWithSegmentRef extends TypeAssociatedRemark
{
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to an Air/Passive Segment | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * Constructor method for typeAssociatedRemarkWithSegmentRef
     * @uses TypeAssociatedRemarkWithSegmentRef::setSegmentRef()
     * @param string $segmentRef
     */
    public function __construct(?string $segmentRef = null)
    {
        $this
            ->setSegmentRef($segmentRef);
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Util\StructType\TypeAssociatedRemarkWithSegmentRef
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
