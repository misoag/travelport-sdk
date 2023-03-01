<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripRetrieveReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to Retrieve saved Trip based on locatorcode
 * @subpackage Structs
 */
class SavedTripRetrieveReq extends BaseReq
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Represents a valid Saved Trip locatorcode. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $LocatorCode = null;
    /**
     * The TravelerLastName
     * Meta information extracted from the WSDL
     * - documentation: Match Traveler Last Name. | Type for Traveler Last Name.
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TravelerLastName = null;
    /**
     * Constructor method for SavedTripRetrieveReq
     * @uses SavedTripRetrieveReq::setLocatorCode()
     * @uses SavedTripRetrieveReq::setTravelerLastName()
     * @param string $locatorCode
     * @param string $travelerLastName
     */
    public function __construct(?string $locatorCode = null, ?string $travelerLastName = null)
    {
        $this
            ->setLocatorCode($locatorCode)
            ->setTravelerLastName($travelerLastName);
    }
    /**
     * Get LocatorCode value
     * @return string|null
     */
    public function getLocatorCode(): ?string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\UniversalRecord\StructType\SavedTripRetrieveReq
     */
    public function setLocatorCode(?string $locatorCode = null): self
    {
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get TravelerLastName value
     * @return string|null
     */
    public function getTravelerLastName(): ?string
    {
        return $this->TravelerLastName;
    }
    /**
     * Set TravelerLastName value
     * @param string $travelerLastName
     * @return \Travelport\UniversalRecord\StructType\SavedTripRetrieveReq
     */
    public function setTravelerLastName(?string $travelerLastName = null): self
    {
        $this->TravelerLastName = $travelerLastName;
        
        return $this;
    }
}
