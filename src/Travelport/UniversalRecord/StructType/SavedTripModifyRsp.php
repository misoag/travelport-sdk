<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripModifyRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to SavedTripModifyReq. Contains the SavedTrip successfully modified.
 * @subpackage Structs
 */
class SavedTripModifyRsp extends BaseRsp
{
    /**
     * The SavedTrip
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SavedTrip
     * @var \Travelport\UniversalRecord\StructType\SavedTrip|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SavedTrip $SavedTrip = null;
    /**
     * Constructor method for SavedTripModifyRsp
     * @uses SavedTripModifyRsp::setSavedTrip()
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
     * @return \Travelport\UniversalRecord\StructType\SavedTripModifyRsp
     */
    public function setSavedTrip(?\Travelport\UniversalRecord\StructType\SavedTrip $savedTrip = null): self
    {
        $this->SavedTrip = $savedTrip;
        
        return $this;
    }
}
