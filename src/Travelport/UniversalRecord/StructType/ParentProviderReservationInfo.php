<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $UniversalLocatorCode;
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
        // validation for constraint: string
        if (!is_null($universalLocatorCode) && !is_string($universalLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalLocatorCode, true), gettype($universalLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalLocatorCode) && mb_strlen((string) $universalLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalLocatorCode) && mb_strlen((string) $universalLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalLocatorCode)), __LINE__);
        }
        $this->UniversalLocatorCode = $universalLocatorCode;
        
        return $this;
    }
}
