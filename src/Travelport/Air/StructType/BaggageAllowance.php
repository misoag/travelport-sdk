<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowance StructType
 * Meta information extracted from the WSDL
 * - documentation: Free Baggage Allowance
 * @subpackage Structs
 */
class BaggageAllowance extends AbstractStructBase
{
    /**
     * The NumberOfPieces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $NumberOfPieces = null;
    /**
     * The MaxWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeWeight|null
     */
    public ?\Travelport\Air\StructType\TypeWeight $MaxWeight = null;
    /**
     * Constructor method for BaggageAllowance
     * @uses BaggageAllowance::setNumberOfPieces()
     * @uses BaggageAllowance::setMaxWeight()
     * @param int $numberOfPieces
     * @param \Travelport\Air\StructType\TypeWeight $maxWeight
     */
    public function __construct(?int $numberOfPieces = null, ?\Travelport\Air\StructType\TypeWeight $maxWeight = null)
    {
        $this
            ->setNumberOfPieces($numberOfPieces)
            ->setMaxWeight($maxWeight);
    }
    /**
     * Get NumberOfPieces value
     * @return int|null
     */
    public function getNumberOfPieces(): ?int
    {
        return $this->NumberOfPieces;
    }
    /**
     * Set NumberOfPieces value
     * @param int $numberOfPieces
     * @return \Travelport\Air\StructType\BaggageAllowance
     */
    public function setNumberOfPieces(?int $numberOfPieces = null): self
    {
        $this->NumberOfPieces = $numberOfPieces;
        
        return $this;
    }
    /**
     * Get MaxWeight value
     * @return \Travelport\Air\StructType\TypeWeight|null
     */
    public function getMaxWeight(): ?\Travelport\Air\StructType\TypeWeight
    {
        return $this->MaxWeight;
    }
    /**
     * Set MaxWeight value
     * @param \Travelport\Air\StructType\TypeWeight $maxWeight
     * @return \Travelport\Air\StructType\BaggageAllowance
     */
    public function setMaxWeight(?\Travelport\Air\StructType\TypeWeight $maxWeight = null): self
    {
        $this->MaxWeight = $maxWeight;
        
        return $this;
    }
}
