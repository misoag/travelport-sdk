<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $SavedTripName = null;
    /**
     * The ExcludeURAssociated
     * Meta information extracted from the WSDL
     * - documentation: Exclude SavedTrips associated with a UniversalRecord.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ExcludeURAssociated = null;
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
        // validation for constraint: string
        if (!is_null($savedTripName) && !is_string($savedTripName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savedTripName, true), gettype($savedTripName)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($excludeURAssociated) && !is_bool($excludeURAssociated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeURAssociated, true), gettype($excludeURAssociated)), __LINE__);
        }
        $this->ExcludeURAssociated = $excludeURAssociated;
        
        return $this;
    }
}
