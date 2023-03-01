<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordErrorInfo StructType
 * @subpackage Structs
 */
class UniversalRecordErrorInfo extends TypeErrorInfo
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Universal Record Locator Code. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * @var string|null
     */
    public ?string $LocatorCode = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of Universal Record. | Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * @var int|null
     */
    public ?int $Version = null;
    /**
     * Constructor method for UniversalRecordErrorInfo
     * @uses UniversalRecordErrorInfo::setLocatorCode()
     * @uses UniversalRecordErrorInfo::setVersion()
     * @param string $locatorCode
     * @param int $version
     */
    public function __construct(?string $locatorCode = null, ?int $version = null)
    {
        $this
            ->setLocatorCode($locatorCode)
            ->setVersion($version);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordErrorInfo
     */
    public function setLocatorCode(?string $locatorCode = null): self
    {
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordErrorInfo
     */
    public function setVersion(?int $version = null): self
    {
        $this->Version = $version;
        
        return $this;
    }
}
