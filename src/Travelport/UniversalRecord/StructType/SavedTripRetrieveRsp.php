<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripRetrieveRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to SavedTripRetrieveReq. Contains the SavedTrip successfully Retrieved.
 * @subpackage Structs
 */
class SavedTripRetrieveRsp extends BaseRsp
{
    /**
     * The SavedTrip
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SavedTrip
     * @var \Travelport\UniversalRecord\StructType\SavedTrip|null
     */
    public ?\Travelport\UniversalRecord\StructType\SavedTrip $SavedTrip = null;
    /**
     * Constructor method for SavedTripRetrieveRsp
     * @uses SavedTripRetrieveRsp::setSavedTrip()
     * @param \Travelport\UniversalRecord\StructType\SavedTrip $savedTrip
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\SavedTrip $savedTrip = null)
    {
        $this
            ->setSavedTrip($savedTrip);
    }
    /**
     * Get SavedTrip value
     * @return \Travelport\UniversalRecord\StructType\SavedTrip|null
     */
    public function getSavedTrip(): ?\Travelport\UniversalRecord\StructType\SavedTrip
    {
        return $this->SavedTrip;
    }
    /**
     * Set SavedTrip value
     * @param \Travelport\UniversalRecord\StructType\SavedTrip $savedTrip
     * @return \Travelport\UniversalRecord\StructType\SavedTripRetrieveRsp
     */
    public function setSavedTrip(?\Travelport\UniversalRecord\StructType\SavedTrip $savedTrip = null): self
    {
        $this->SavedTrip = $savedTrip;
        
        return $this;
    }
}
