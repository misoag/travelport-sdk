<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\TypeWeight|null
     */
    protected ?\Travelport\Util\StructType\TypeWeight $MaxWeight = null;
    /**
     * Constructor method for BaggageAllowance
     * @uses BaggageAllowance::setNumberOfPieces()
     * @uses BaggageAllowance::setMaxWeight()
     * @param int $numberOfPieces
     * @param \Travelport\Util\StructType\TypeWeight $maxWeight
     */
    public function __construct(?int $numberOfPieces = null, ?\Travelport\Util\StructType\TypeWeight $maxWeight = null)
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
     * @return \Travelport\Util\StructType\BaggageAllowance
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
     * @return \Travelport\Util\StructType\TypeWeight|null
     */
    public function getMaxWeight(): ?\Travelport\Util\StructType\TypeWeight
    {
        return $this->MaxWeight;
    }
    /**
     * Set MaxWeight value
     * @param \Travelport\Util\StructType\TypeWeight $maxWeight
     * @return \Travelport\Util\StructType\BaggageAllowance
     */
    public function setMaxWeight(?\Travelport\Util\StructType\TypeWeight $maxWeight = null): self
    {
        $this->MaxWeight = $maxWeight;
        
        return $this;
    }
}
