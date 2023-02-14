<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripModifyReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to modify an existing SavedTrip using the LocatorCode of the SavedTrip as the SavedTrip identifier.
 * @subpackage Structs
 */
class SavedTripModifyReq extends BaseReq
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
     * Constructor method for SavedTripModifyReq
     * @uses SavedTripModifyReq::setSavedTrip()
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
     * @return \Travelport\UniversalRecord\StructType\SavedTripModifyReq
     */
    public function setSavedTrip(?\Travelport\UniversalRecord\StructType\SavedTrip $savedTrip = null): self
    {
        $this->SavedTrip = $savedTrip;
        
        return $this;
    }
}
