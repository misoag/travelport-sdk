<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParentProviderReservationInfo StructType
 * @subpackage Structs
 */
class ParentProviderReservationInfo extends PNRDivideInfo
{
    /**
     * The UniversalLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $UniversalLocatorCode;
    /**
     * Constructor method for ParentProviderReservationInfo
     * @uses ParentProviderReservationInfo::setUniversalLocatorCode()
     * @param string $universalLocatorCode
     */
    public function __construct(string $universalLocatorCode)
    {
        $this
            ->setUniversalLocatorCode($universalLocatorCode);
    }
    /**
     * Get UniversalLocatorCode value
     * @return string
     */
    public function getUniversalLocatorCode(): string
    {
        return $this->UniversalLocatorCode;
    }
    /**
     * Set UniversalLocatorCode value
     * @param string $universalLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo
     */
    public function setUniversalLocatorCode(string $universalLocatorCode): self
    {
        $this->UniversalLocatorCode = $universalLocatorCode;
        
        return $this;
    }
}
