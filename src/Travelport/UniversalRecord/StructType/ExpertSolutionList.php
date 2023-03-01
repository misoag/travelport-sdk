<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpertSolutionList StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the Expert Solutions retrieved from the Knowledge Base.
 * @subpackage Structs
 */
class ExpertSolutionList extends AbstractStructBase
{
    /**
     * The ExpertSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: ExpertSolution
     * @var \Travelport\UniversalRecord\StructType\ExpertSolution[]
     */
    public ?array $ExpertSolution = null;
    /**
     * Constructor method for ExpertSolutionList
     * @uses ExpertSolutionList::setExpertSolution()
     * @param \Travelport\UniversalRecord\StructType\ExpertSolution[] $expertSolution
     */
    public function __construct(?array $expertSolution = null)
    {
        $this
            ->setExpertSolution($expertSolution);
    }
    /**
     * Get ExpertSolution value
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution[]
     */
    public function getExpertSolution(): ?array
    {
        return $this->ExpertSolution;
    }
    /**
     * Set ExpertSolution value
     * @param \Travelport\UniversalRecord\StructType\ExpertSolution[] $expertSolution
     * @return \Travelport\UniversalRecord\StructType\ExpertSolutionList
     */
    public function setExpertSolution(?array $expertSolution = null): self
    {
        $this->ExpertSolution = $expertSolution;
        
        return $this;
    }
    /**
     * Add item to ExpertSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExpertSolution $item
     * @return \Travelport\UniversalRecord\StructType\ExpertSolutionList
     */
    public function addToExpertSolution(\Travelport\UniversalRecord\StructType\ExpertSolution $item): self
    {
        $this->ExpertSolution[] = $item;
        
        return $this;
    }
}
