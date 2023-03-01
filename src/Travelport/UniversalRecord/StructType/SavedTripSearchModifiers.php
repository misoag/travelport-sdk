<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the SavedTrip Search request.
 * @subpackage Structs
 */
class SavedTripSearchModifiers extends BaseSearchModifiers
{
    /**
     * The SavedTripName
     * Meta information extracted from the WSDL
     * - documentation: Represents name of a savedTrip.
     * - use: optional
     * @var string|null
     */
    public ?string $SavedTripName = null;
    /**
     * The ExcludeURAssociated
     * Meta information extracted from the WSDL
     * - documentation: Exclude SavedTrips associated with a UniversalRecord.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeURAssociated = null;
    /**
     * Constructor method for SavedTripSearchModifiers
     * @uses SavedTripSearchModifiers::setSavedTripName()
     * @uses SavedTripSearchModifiers::setExcludeURAssociated()
     * @param string $savedTripName
     * @param bool $excludeURAssociated
     */
    public function __construct(?string $savedTripName = null, ?bool $excludeURAssociated = true)
    {
        $this
            ->setSavedTripName($savedTripName)
            ->setExcludeURAssociated($excludeURAssociated);
    }
    /**
     * Get SavedTripName value
     * @return string|null
     */
    public function getSavedTripName(): ?string
    {
        return $this->SavedTripName;
    }
    /**
     * Set SavedTripName value
     * @param string $savedTripName
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchModifiers
     */
    public function setSavedTripName(?string $savedTripName = null): self
    {
        $this->SavedTripName = $savedTripName;
        
        return $this;
    }
    /**
     * Get ExcludeURAssociated value
     * @return bool|null
     */
    public function getExcludeURAssociated(): ?bool
    {
        return $this->ExcludeURAssociated;
    }
    /**
     * Set ExcludeURAssociated value
     * @param bool $excludeURAssociated
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchModifiers
     */
    public function setExcludeURAssociated(?bool $excludeURAssociated = true): self
    {
        $this->ExcludeURAssociated = $excludeURAssociated;
        
        return $this;
    }
}
