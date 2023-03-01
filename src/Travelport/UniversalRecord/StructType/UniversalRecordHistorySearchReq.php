<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $UniversalRecordLocatorCode;
    /**
     * The UniversalRecordHistorySearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecordHistorySearchModifiers
     * @var \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchModifiers $UniversalRecordHistorySearchModifiers = null;
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
