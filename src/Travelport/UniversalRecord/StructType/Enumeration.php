<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Enumeration StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides the capability to group the results into differnt trip type and diversification strategies.
 * @subpackage Structs
 */
class Enumeration extends AbstractStructBase
{
    /**
     * The SolutionGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: SolutionGroup
     * @var \Travelport\UniversalRecord\StructType\SolutionGroup[]
     */
    public ?array $SolutionGroup = null;
    /**
     * Constructor method for Enumeration
     * @uses Enumeration::setSolutionGroup()
     * @param \Travelport\UniversalRecord\StructType\SolutionGroup[] $solutionGroup
     */
    public function __construct(?array $solutionGroup = null)
    {
        $this
            ->setSolutionGroup($solutionGroup);
    }
    /**
     * Get SolutionGroup value
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup[]
     */
    public function getSolutionGroup(): ?array
    {
        return $this->SolutionGroup;
    }
    /**
     * Set SolutionGroup value
     * @param \Travelport\UniversalRecord\StructType\SolutionGroup[] $solutionGroup
     * @return \Travelport\UniversalRecord\StructType\Enumeration
     */
    public function setSolutionGroup(?array $solutionGroup = null): self
    {
        $this->SolutionGroup = $solutionGroup;
        
        return $this;
    }
    /**
     * Add item to SolutionGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SolutionGroup $item
     * @return \Travelport\UniversalRecord\StructType\Enumeration
     */
    public function addToSolutionGroup(\Travelport\UniversalRecord\StructType\SolutionGroup $item): self
    {
        $this->SolutionGroup[] = $item;
        
        return $this;
    }
}
