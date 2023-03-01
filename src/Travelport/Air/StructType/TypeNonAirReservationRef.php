<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeNonAirReservationRef StructType
 * @subpackage Structs
 */
class TypeNonAirReservationRef extends AbstractStructBase
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $LocatorCode;
    /**
     * Constructor method for typeNonAirReservationRef
     * @uses TypeNonAirReservationRef::setLocatorCode()
     * @param string $locatorCode
     */
    public function __construct(string $locatorCode)
    {
        $this
            ->setLocatorCode($locatorCode);
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\Air\StructType\TypeNonAirReservationRef
     */
    public function setLocatorCode(string $locatorCode): self
    {
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
}
