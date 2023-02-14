<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordHistorySearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Search the history of a Universal Record.
 * @subpackage Structs
 */
class UniversalRecordHistorySearchReq extends BaseReq
{
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Represents a valid Universal Record locator code | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $UniversalRecordLocatorCode;
    /**
     * The UniversalRecordHistorySearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecordHistorySearchModifiers
     * @var \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers $UniversalRecordHistorySearchModifiers = null;
    /**
     * Constructor method for UniversalRecordHistorySearchReq
     * @uses UniversalRecordHistorySearchReq::setUniversalRecordLocatorCode()
     * @uses UniversalRecordHistorySearchReq::setUniversalRecordHistorySearchModifiers()
     * @param string $universalRecordLocatorCode
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers $universalRecordHistorySearchModifiers
     */
    public function __construct(string $universalRecordLocatorCode, ?\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers $universalRecordHistorySearchModifiers = null)
    {
        $this
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setUniversalRecordHistorySearchModifiers($universalRecordHistorySearchModifiers);
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string
     */
    public function getUniversalRecordLocatorCode(): string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get UniversalRecordHistorySearchModifiers value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers|null
     */
    public function getUniversalRecordHistorySearchModifiers(): ?\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers
    {
        return $this->UniversalRecordHistorySearchModifiers;
    }
    /**
     * Set UniversalRecordHistorySearchModifiers value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers $universalRecordHistorySearchModifiers
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchReq
     */
    public function setUniversalRecordHistorySearchModifiers(?\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers $universalRecordHistorySearchModifiers = null): self
    {
        $this->UniversalRecordHistorySearchModifiers = $universalRecordHistorySearchModifiers;
        
        return $this;
    }
}
