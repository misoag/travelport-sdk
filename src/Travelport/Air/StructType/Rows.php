<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rows StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,ACH,MCH. | A wrapper for all the information regarding each of the rows. Providers: ACH, 1G, 1V, 1P
 * @subpackage Structs
 */
class Rows extends AbstractStructBase
{
    /**
     * The Row
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Row
     * @var \Travelport\Air\StructType\Row[]
     */
    public ?array $Row = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Specifies the AirSegment the seat map is for. Providers: ACH, 1G, 1V, 1P | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * Constructor method for Rows
     * @uses Rows::setRow()
     * @uses Rows::setSegmentRef()
     * @param \Travelport\Air\StructType\Row[] $row
     * @param string $segmentRef
     */
    public function __construct(?array $row = null, ?string $segmentRef = null)
    {
        $this
            ->setRow($row)
            ->setSegmentRef($segmentRef);
    }
    /**
     * Get Row value
     * @return \Travelport\Air\StructType\Row[]
     */
    public function getRow(): ?array
    {
        return $this->Row;
    }
    /**
     * Set Row value
     * @param \Travelport\Air\StructType\Row[] $row
     * @return \Travelport\Air\StructType\Rows
     */
    public function setRow(?array $row = null): self
    {
        $this->Row = $row;
        
        return $this;
    }
    /**
     * Add item to Row value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Row $item
     * @return \Travelport\Air\StructType\Rows
     */
    public function addToRow(\Travelport\Air\StructType\Row $item): self
    {
        $this->Row[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\Rows
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
