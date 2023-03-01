<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmbargoList StructType
 * Meta information extracted from the WSDL
 * - documentation: List of embargoes. Provider: 1G, 1V, 1P
 * @subpackage Structs
 */
class EmbargoList extends AbstractStructBase
{
    /**
     * The Embargo
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 1
     * - ref: Embargo
     * @var \Travelport\Air\StructType\Embargo[]
     */
    public array $Embargo;
    /**
     * Constructor method for EmbargoList
     * @uses EmbargoList::setEmbargo()
     * @param \Travelport\Air\StructType\Embargo[] $embargo
     */
    public function __construct(array $embargo)
    {
        $this
            ->setEmbargo($embargo);
    }
    /**
     * Get Embargo value
     * @return \Travelport\Air\StructType\Embargo[]
     */
    public function getEmbargo(): array
    {
        return $this->Embargo;
    }
    /**
     * Set Embargo value
     * @param \Travelport\Air\StructType\Embargo[] $embargo
     * @return \Travelport\Air\StructType\EmbargoList
     */
    public function setEmbargo(array $embargo): self
    {
        $this->Embargo = $embargo;
        
        return $this;
    }
    /**
     * Add item to Embargo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Embargo $item
     * @return \Travelport\Air\StructType\EmbargoList
     */
    public function addToEmbargo(\Travelport\Air\StructType\Embargo $item): self
    {
        $this->Embargo[] = $item;
        
        return $this;
    }
}
