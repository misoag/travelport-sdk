<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripDeleteReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to delete saved Trip
 * @subpackage Structs
 */
class SavedTripDeleteReq extends BaseReq
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Represents a valid Saved Trip locator code | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $LocatorCode = null;
    /**
     * Constructor method for SavedTripDeleteReq
     * @uses SavedTripDeleteReq::setLocatorCode()
     * @param string $locatorCode
     */
    public function __construct(?string $locatorCode = null)
    {
        $this
            ->setLocatorCode($locatorCode);
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
     * @return \Travelport\UniversalRecord\StructType\SavedTripDeleteReq
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
}
