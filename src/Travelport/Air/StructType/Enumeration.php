<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\SolutionGroup[]
     */
    public ?array $SolutionGroup = null;
    /**
     * Constructor method for Enumeration
     * @uses Enumeration::setSolutionGroup()
     * @param \Travelport\Air\StructType\SolutionGroup[] $solutionGroup
     */
    public function __construct(?array $solutionGroup = null)
    {
        $this
            ->setSolutionGroup($solutionGroup);
    }
    /**
     * Get SolutionGroup value
     * @return \Travelport\Air\StructType\SolutionGroup[]
     */
    public function getSolutionGroup(): ?array
    {
        return $this->SolutionGroup;
    }
    /**
     * Set SolutionGroup value
     * @param \Travelport\Air\StructType\SolutionGroup[] $solutionGroup
     * @return \Travelport\Air\StructType\Enumeration
     */
    public function setSolutionGroup(?array $solutionGroup = null): self
    {
        $this->SolutionGroup = $solutionGroup;
        
        return $this;
    }
    /**
     * Add item to SolutionGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SolutionGroup $item
     * @return \Travelport\Air\StructType\Enumeration
     */
    public function addToSolutionGroup(\Travelport\Air\StructType\SolutionGroup $item): self
    {
        $this->SolutionGroup[] = $item;
        
        return $this;
    }
}
