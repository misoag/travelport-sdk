<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CHGType StructType
 * Meta information extracted from the WSDL
 * - documentation: PenFee list will be populated
 * @subpackage Structs
 */
class CHGType extends AbstractStructBase
{
    /**
     * The PenFee
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PenFeeType[]
     */
    public ?array $PenFee = null;
    /**
     * Constructor method for CHGType
     * @uses CHGType::setPenFee()
     * @param \Travelport\UniversalRecord\StructType\PenFeeType[] $penFee
     */
    public function __construct(?array $penFee = null)
    {
        $this
            ->setPenFee($penFee);
    }
    /**
     * Get PenFee value
     * @return \Travelport\UniversalRecord\StructType\PenFeeType[]
     */
    public function getPenFee(): ?array
    {
        return $this->PenFee;
    }
    /**
     * Set PenFee value
     * @param \Travelport\UniversalRecord\StructType\PenFeeType[] $penFee
     * @return \Travelport\UniversalRecord\StructType\CHGType
     */
    public function setPenFee(?array $penFee = null): self
    {
        $this->PenFee = $penFee;
        
        return $this;
    }
    /**
     * Add item to PenFee value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PenFeeType $item
     * @return \Travelport\UniversalRecord\StructType\CHGType
     */
    public function addToPenFee(\Travelport\UniversalRecord\StructType\PenFeeType $item): self
    {
        $this->PenFee[] = $item;
        
        return $this;
    }
}
