<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $LocatorCode = null;
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
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
}
