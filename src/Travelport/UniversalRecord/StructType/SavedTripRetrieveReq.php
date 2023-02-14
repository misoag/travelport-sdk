<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $LocatorCode = null;
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
    protected ?string $TravelerLastName = null;
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
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $locatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $locatorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($travelerLastName) && !is_string($travelerLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerLastName, true), gettype($travelerLastName)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($travelerLastName) && mb_strlen((string) $travelerLastName) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $travelerLastName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($travelerLastName) && mb_strlen((string) $travelerLastName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $travelerLastName)), __LINE__);
        }
        $this->TravelerLastName = $travelerLastName;
        
        return $this;
    }
}
