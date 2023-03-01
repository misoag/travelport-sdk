<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChildProviderReservationInfo StructType
 * @subpackage Structs
 */
class ChildProviderReservationInfo extends PNRDivideInfo
{
    /**
     * The UniversalLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalLocatorCode = null;
    /**
     * Constructor method for ChildProviderReservationInfo
     * @uses ChildProviderReservationInfo::setUniversalLocatorCode()
     * @param string $universalLocatorCode
     */
    public function __construct(?string $universalLocatorCode = null)
    {
        $this
            ->setUniversalLocatorCode($universalLocatorCode);
    }
    /**
     * Get UniversalLocatorCode value
     * @return string|null
     */
    public function getUniversalLocatorCode(): ?string
    {
        return $this->UniversalLocatorCode;
    }
    /**
     * Set UniversalLocatorCode value
     * @param string $universalLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo
     */
    public function setUniversalLocatorCode(?string $universalLocatorCode = null): self
    {
        $this->UniversalLocatorCode = $universalLocatorCode;
        
        return $this;
    }
}
