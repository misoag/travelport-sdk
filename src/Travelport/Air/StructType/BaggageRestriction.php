<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageRestriction StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Baggage restriction rules .
 * @subpackage Structs
 */
class BaggageRestriction extends AbstractStructBase
{
    /**
     * The Dimension
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Dimension
     * @var \Travelport\Air\StructType\Dimension[]
     */
    public ?array $Dimension = null;
    /**
     * The MaxWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeUnitOfMeasure[]
     */
    public ?array $MaxWeight = null;
    /**
     * The TextInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TextInfo
     * @var \Travelport\Air\StructType\TextInfo[]
     */
    public ?array $TextInfo = null;
    /**
     * Constructor method for BaggageRestriction
     * @uses BaggageRestriction::setDimension()
     * @uses BaggageRestriction::setMaxWeight()
     * @uses BaggageRestriction::setTextInfo()
     * @param \Travelport\Air\StructType\Dimension[] $dimension
     * @param \Travelport\Air\StructType\TypeUnitOfMeasure[] $maxWeight
     * @param \Travelport\Air\StructType\TextInfo[] $textInfo
     */
    public function __construct(?array $dimension = null, ?array $maxWeight = null, ?array $textInfo = null)
    {
        $this
            ->setDimension($dimension)
            ->setMaxWeight($maxWeight)
            ->setTextInfo($textInfo);
    }
    /**
     * Get Dimension value
     * @return \Travelport\Air\StructType\Dimension[]
     */
    public function getDimension(): ?array
    {
        return $this->Dimension;
    }
    /**
     * Set Dimension value
     * @param \Travelport\Air\StructType\Dimension[] $dimension
     * @return \Travelport\Air\StructType\BaggageRestriction
     */
    public function setDimension(?array $dimension = null): self
    {
        $this->Dimension = $dimension;
        
        return $this;
    }
    /**
     * Add item to Dimension value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Dimension $item
     * @return \Travelport\Air\StructType\BaggageRestriction
     */
    public function addToDimension(\Travelport\Air\StructType\Dimension $item): self
    {
        $this->Dimension[] = $item;
        
        return $this;
    }
    /**
     * Get MaxWeight value
     * @return \Travelport\Air\StructType\TypeUnitOfMeasure[]
     */
    public function getMaxWeight(): ?array
    {
        return $this->MaxWeight;
    }
    /**
     * Set MaxWeight value
     * @param \Travelport\Air\StructType\TypeUnitOfMeasure[] $maxWeight
     * @return \Travelport\Air\StructType\BaggageRestriction
     */
    public function setMaxWeight(?array $maxWeight = null): self
    {
        $this->MaxWeight = $maxWeight;
        
        return $this;
    }
    /**
     * Add item to MaxWeight value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeUnitOfMeasure $item
     * @return \Travelport\Air\StructType\BaggageRestriction
     */
    public function addToMaxWeight(\Travelport\Air\StructType\TypeUnitOfMeasure $item): self
    {
        $this->MaxWeight[] = $item;
        
        return $this;
    }
    /**
     * Get TextInfo value
     * @return \Travelport\Air\StructType\TextInfo[]
     */
    public function getTextInfo(): ?array
    {
        return $this->TextInfo;
    }
    /**
     * Set TextInfo value
     * @param \Travelport\Air\StructType\TextInfo[] $textInfo
     * @return \Travelport\Air\StructType\BaggageRestriction
     */
    public function setTextInfo(?array $textInfo = null): self
    {
        $this->TextInfo = $textInfo;
        
        return $this;
    }
    /**
     * Add item to TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TextInfo $item
     * @return \Travelport\Air\StructType\BaggageRestriction
     */
    public function addToTextInfo(\Travelport\Air\StructType\TextInfo $item): self
    {
        $this->TextInfo[] = $item;
        
        return $this;
    }
}
