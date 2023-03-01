<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\Dimension[]
     */
    public ?array $Dimension = null;
    /**
     * The MaxWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure[]
     */
    public ?array $MaxWeight = null;
    /**
     * The TextInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TextInfo
     * @var \Travelport\UniversalRecord\StructType\TextInfo[]
     */
    public ?array $TextInfo = null;
    /**
     * Constructor method for BaggageRestriction
     * @uses BaggageRestriction::setDimension()
     * @uses BaggageRestriction::setMaxWeight()
     * @uses BaggageRestriction::setTextInfo()
     * @param \Travelport\UniversalRecord\StructType\Dimension[] $dimension
     * @param \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure[] $maxWeight
     * @param \Travelport\UniversalRecord\StructType\TextInfo[] $textInfo
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
     * @return \Travelport\UniversalRecord\StructType\Dimension[]
     */
    public function getDimension(): ?array
    {
        return $this->Dimension;
    }
    /**
     * Set Dimension value
     * @param \Travelport\UniversalRecord\StructType\Dimension[] $dimension
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction
     */
    public function setDimension(?array $dimension = null): self
    {
        $this->Dimension = $dimension;
        
        return $this;
    }
    /**
     * Add item to Dimension value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Dimension $item
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction
     */
    public function addToDimension(\Travelport\UniversalRecord\StructType\Dimension $item): self
    {
        $this->Dimension[] = $item;
        
        return $this;
    }
    /**
     * Get MaxWeight value
     * @return \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure[]
     */
    public function getMaxWeight(): ?array
    {
        return $this->MaxWeight;
    }
    /**
     * Set MaxWeight value
     * @param \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure[] $maxWeight
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction
     */
    public function setMaxWeight(?array $maxWeight = null): self
    {
        $this->MaxWeight = $maxWeight;
        
        return $this;
    }
    /**
     * Add item to MaxWeight value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure $item
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction
     */
    public function addToMaxWeight(\Travelport\UniversalRecord\StructType\TypeUnitOfMeasure $item): self
    {
        $this->MaxWeight[] = $item;
        
        return $this;
    }
    /**
     * Get TextInfo value
     * @return \Travelport\UniversalRecord\StructType\TextInfo[]
     */
    public function getTextInfo(): ?array
    {
        return $this->TextInfo;
    }
    /**
     * Set TextInfo value
     * @param \Travelport\UniversalRecord\StructType\TextInfo[] $textInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction
     */
    public function setTextInfo(?array $textInfo = null): self
    {
        $this->TextInfo = $textInfo;
        
        return $this;
    }
    /**
     * Add item to TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TextInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction
     */
    public function addToTextInfo(\Travelport\UniversalRecord\StructType\TextInfo $item): self
    {
        $this->TextInfo[] = $item;
        
        return $this;
    }
}
