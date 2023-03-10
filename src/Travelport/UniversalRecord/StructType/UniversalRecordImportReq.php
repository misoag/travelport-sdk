<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordImportReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Imports a external reservation into a G2 Universal Record
 * @subpackage Structs
 */
class UniversalRecordImportReq extends BaseReq
{
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Required if to be imported in existing UniversalRecord. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * The ReturnUnmaskedData
     * Meta information extracted from the WSDL
     * - documentation: When set as True in the request and AAT settings are set to display Unmasked details in the host, then details will be shown in the response. Only supports credit card and debit card. Default value of ReturnUnmaskedData is false.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnUnmaskedData = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for UniversalRecordImportReq
     * @uses UniversalRecordImportReq::setFileFinishingInfo()
     * @uses UniversalRecordImportReq::setUniversalRecordLocatorCode()
     * @uses UniversalRecordImportReq::setReturnUnmaskedData()
     * @uses UniversalRecordImportReq::setProviderCode()
     * @uses UniversalRecordImportReq::setProviderLocatorCode()
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @param string $universalRecordLocatorCode
     * @param bool $returnUnmaskedData
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null, ?string $universalRecordLocatorCode = null, ?bool $returnUnmaskedData = null, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setFileFinishingInfo($fileFinishingInfo)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setReturnUnmaskedData($returnUnmaskedData)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordImportReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string|null
     */
    public function getUniversalRecordLocatorCode(): ?string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordImportReq
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get ReturnUnmaskedData value
     * @return bool|null
     */
    public function getReturnUnmaskedData(): ?bool
    {
        return $this->ReturnUnmaskedData;
    }
    /**
     * Set ReturnUnmaskedData value
     * @param bool $returnUnmaskedData
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordImportReq
     */
    public function setReturnUnmaskedData(?bool $returnUnmaskedData = null): self
    {
        $this->ReturnUnmaskedData = $returnUnmaskedData;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordImportReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordImportReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
