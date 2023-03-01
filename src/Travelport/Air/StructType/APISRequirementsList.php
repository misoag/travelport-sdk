<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APISRequirementsList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of APISRequirements
 * @subpackage Structs
 */
class APISRequirementsList extends AbstractStructBase
{
    /**
     * The APISRequirements
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: APISRequirements
     * @var \Travelport\Air\StructType\APISRequirements[]
     */
    public ?array $APISRequirements = null;
    /**
     * Constructor method for APISRequirementsList
     * @uses APISRequirementsList::setAPISRequirements()
     * @param \Travelport\Air\StructType\APISRequirements[] $aPISRequirements
     */
    public function __construct(?array $aPISRequirements = null)
    {
        $this
            ->setAPISRequirements($aPISRequirements);
    }
    /**
     * Get APISRequirements value
     * @return \Travelport\Air\StructType\APISRequirements[]
     */
    public function getAPISRequirements(): ?array
    {
        return $this->APISRequirements;
    }
    /**
     * Set APISRequirements value
     * @param \Travelport\Air\StructType\APISRequirements[] $aPISRequirements
     * @return \Travelport\Air\StructType\APISRequirementsList
     */
    public function setAPISRequirements(?array $aPISRequirements = null): self
    {
        $this->APISRequirements = $aPISRequirements;
        
        return $this;
    }
    /**
     * Add item to APISRequirements value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\APISRequirements $item
     * @return \Travelport\Air\StructType\APISRequirementsList
     */
    public function addToAPISRequirements(\Travelport\Air\StructType\APISRequirements $item): self
    {
        $this->APISRequirements[] = $item;
        
        return $this;
    }
}
