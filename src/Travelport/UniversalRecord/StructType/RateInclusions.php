<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateInclusions StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides the list of additional charges included in Rate. e.g Tax, Airport Surcharge, CDW etc
 * @subpackage Structs
 */
class RateInclusions extends AbstractStructBase
{
    /**
     * The IncludedItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: IncludedItem
     * @var \Travelport\UniversalRecord\StructType\IncludedItem[]
     */
    public ?array $IncludedItem = null;
    /**
     * Constructor method for RateInclusions
     * @uses RateInclusions::setIncludedItem()
     * @param \Travelport\UniversalRecord\StructType\IncludedItem[] $includedItem
     */
    public function __construct(?array $includedItem = null)
    {
        $this
            ->setIncludedItem($includedItem);
    }
    /**
     * Get IncludedItem value
     * @return \Travelport\UniversalRecord\StructType\IncludedItem[]
     */
    public function getIncludedItem(): ?array
    {
        return $this->IncludedItem;
    }
    /**
     * Set IncludedItem value
     * @param \Travelport\UniversalRecord\StructType\IncludedItem[] $includedItem
     * @return \Travelport\UniversalRecord\StructType\RateInclusions
     */
    public function setIncludedItem(?array $includedItem = null): self
    {
        $this->IncludedItem = $includedItem;
        
        return $this;
    }
    /**
     * Add item to IncludedItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\IncludedItem $item
     * @return \Travelport\UniversalRecord\StructType\RateInclusions
     */
    public function addToIncludedItem(\Travelport\UniversalRecord\StructType\IncludedItem $item): self
    {
        $this->IncludedItem[] = $item;
        
        return $this;
    }
}
