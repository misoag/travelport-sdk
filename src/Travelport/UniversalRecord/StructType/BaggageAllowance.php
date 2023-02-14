<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?int $NumberOfPieces = null;
    /**
     * The MaxWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeWeight|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeWeight $MaxWeight = null;
    /**
     * Constructor method for BaggageAllowance
     * @uses BaggageAllowance::setNumberOfPieces()
     * @uses BaggageAllowance::setMaxWeight()
     * @param int $numberOfPieces
     * @param \Travelport\UniversalRecord\StructType\TypeWeight $maxWeight
     */
    public function __construct(?int $numberOfPieces = null, ?\Travelport\UniversalRecord\StructType\TypeWeight $maxWeight = null)
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
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowance
     */
    public function setNumberOfPieces(?int $numberOfPieces = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfPieces) && !(is_int($numberOfPieces) || ctype_digit($numberOfPieces))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPieces, true), gettype($numberOfPieces)), __LINE__);
        }
        $this->NumberOfPieces = $numberOfPieces;
        
        return $this;
    }
    /**
     * Get MaxWeight value
     * @return \Travelport\UniversalRecord\StructType\TypeWeight|null
     */
    public function getMaxWeight(): ?\Travelport\UniversalRecord\StructType\TypeWeight
    {
        return $this->MaxWeight;
    }
    /**
     * Set MaxWeight value
     * @param \Travelport\UniversalRecord\StructType\TypeWeight $maxWeight
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowance
     */
    public function setMaxWeight(?\Travelport\UniversalRecord\StructType\TypeWeight $maxWeight = null): self
    {
        $this->MaxWeight = $maxWeight;
        
        return $this;
    }
}
