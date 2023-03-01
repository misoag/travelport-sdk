<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPriority StructType
 * Meta information extracted from the WSDL
 * - documentation: Override the search order for hotel availability request
 * @subpackage Structs
 */
class SearchPriority extends AbstractStructBase
{
    /**
     * The Criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 8
     * @var \Travelport\UniversalRecord\StructType\Criteria[]
     */
    public ?array $Criteria = null;
    /**
     * Constructor method for SearchPriority
     * @uses SearchPriority::setCriteria()
     * @param \Travelport\UniversalRecord\StructType\Criteria[] $criteria
     */
    public function __construct(?array $criteria = null)
    {
        $this
            ->setCriteria($criteria);
    }
    /**
     * Get Criteria value
     * @return \Travelport\UniversalRecord\StructType\Criteria[]
     */
    public function getCriteria(): ?array
    {
        return $this->Criteria;
    }
    /**
     * Set Criteria value
     * @param \Travelport\UniversalRecord\StructType\Criteria[] $criteria
     * @return \Travelport\UniversalRecord\StructType\SearchPriority
     */
    public function setCriteria(?array $criteria = null): self
    {
        $this->Criteria = $criteria;
        
        return $this;
    }
    /**
     * Add item to Criteria value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Criteria $item
     * @return \Travelport\UniversalRecord\StructType\SearchPriority
     */
    public function addToCriteria(\Travelport\UniversalRecord\StructType\Criteria $item): self
    {
        $this->Criteria[] = $item;
        
        return $this;
    }
}
