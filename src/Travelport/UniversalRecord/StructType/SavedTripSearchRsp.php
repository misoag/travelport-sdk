<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response containing summary information of savedTrip
 * @subpackage Structs
 */
class SavedTripSearchRsp extends BaseRsp
{
    /**
     * The SavedTripSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SavedTripSearchResult
     * @var \Travelport\UniversalRecord\StructType\SavedTripSearchResult[]
     */
    public ?array $SavedTripSearchResult = null;
    /**
     * Constructor method for SavedTripSearchRsp
     * @uses SavedTripSearchRsp::setSavedTripSearchResult()
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchResult[] $savedTripSearchResult
     */
    public function __construct(?array $savedTripSearchResult = null)
    {
        $this
            ->setSavedTripSearchResult($savedTripSearchResult);
    }
    /**
     * Get SavedTripSearchResult value
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult[]
     */
    public function getSavedTripSearchResult(): ?array
    {
        return $this->SavedTripSearchResult;
    }
    /**
     * Set SavedTripSearchResult value
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchResult[] $savedTripSearchResult
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchRsp
     */
    public function setSavedTripSearchResult(?array $savedTripSearchResult = null): self
    {
        $this->SavedTripSearchResult = $savedTripSearchResult;
        
        return $this;
    }
    /**
     * Add item to SavedTripSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchResult $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchRsp
     */
    public function addToSavedTripSearchResult(\Travelport\UniversalRecord\StructType\SavedTripSearchResult $item): self
    {
        $this->SavedTripSearchResult[] = $item;
        
        return $this;
    }
}
