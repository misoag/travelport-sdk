<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordCancelReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to Cancel an Universal Record
 * @subpackage Structs
 */
class UniversalRecordCancelReq extends BaseReq
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
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    public int $Version;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * Constructor method for UniversalRecordCancelReq
     * @uses UniversalRecordCancelReq::setUniversalRecordLocatorCode()
     * @uses UniversalRecordCancelReq::setVersion()
     * @uses UniversalRecordCancelReq::setFileFinishingInfo()
     * @param string $universalRecordLocatorCode
     * @param int $version
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     */
    public function __construct(string $universalRecordLocatorCode, int $version, ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null)
    {
        $this
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setVersion($version)
            ->setFileFinishingInfo($fileFinishingInfo);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelReq
     */
    public function setVersion(int $version): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\UniversalRecord\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
}
