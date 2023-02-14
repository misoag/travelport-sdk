<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $LocatorCode = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of Universal Record. | Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * @var int|null
     */
    protected ?int $Version = null;
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
