<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRetrieveDocumentRsp StructType
 * @subpackage Structs
 */
class AirRetrieveDocumentRsp extends BaseRsp
{
    /**
     * The ETR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ETR
     * @var \Travelport\Air\StructType\ETR[]
     */
    public ?array $ETR = null;
    /**
     * The MCO
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MCO
     * @var \Travelport\Air\StructType\MCO[]
     */
    public ?array $MCO = null;
    /**
     * The TCR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCR
     * @var \Travelport\Air\StructType\TCR[]
     */
    public ?array $TCR = null;
    /**
     * The DocumentFailureInfo
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P-Will be optionally returned if there are duplicate ticket numbers.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeFailureInfo[]
     */
    public ?array $DocumentFailureInfo = null;
    /**
     * The ServiceFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:ServiceFeeInfo
     * @var \Travelport\Air\StructType\ServiceFeeInfo[]
     */
    public ?array $ServiceFeeInfo = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P-Represents a valid Universal Record locator code. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * Constructor method for AirRetrieveDocumentRsp
     * @uses AirRetrieveDocumentRsp::setETR()
     * @uses AirRetrieveDocumentRsp::setMCO()
     * @uses AirRetrieveDocumentRsp::setTCR()
     * @uses AirRetrieveDocumentRsp::setDocumentFailureInfo()
     * @uses AirRetrieveDocumentRsp::setServiceFeeInfo()
     * @uses AirRetrieveDocumentRsp::setUniversalRecordLocatorCode()
     * @param \Travelport\Air\StructType\ETR[] $eTR
     * @param \Travelport\Air\StructType\MCO[] $mCO
     * @param \Travelport\Air\StructType\TCR[] $tCR
     * @param \Travelport\Air\StructType\TypeFailureInfo[] $documentFailureInfo
     * @param \Travelport\Air\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @param string $universalRecordLocatorCode
     */
    public function __construct(?array $eTR = null, ?array $mCO = null, ?array $tCR = null, ?array $documentFailureInfo = null, ?array $serviceFeeInfo = null, ?string $universalRecordLocatorCode = null)
    {
        $this
            ->setETR($eTR)
            ->setMCO($mCO)
            ->setTCR($tCR)
            ->setDocumentFailureInfo($documentFailureInfo)
            ->setServiceFeeInfo($serviceFeeInfo)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode);
    }
    /**
     * Get ETR value
     * @return \Travelport\Air\StructType\ETR[]
     */
    public function getETR(): ?array
    {
        return $this->ETR;
    }
    /**
     * Set ETR value
     * @param \Travelport\Air\StructType\ETR[] $eTR
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function setETR(?array $eTR = null): self
    {
        $this->ETR = $eTR;
        
        return $this;
    }
    /**
     * Add item to ETR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ETR $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function addToETR(\Travelport\Air\StructType\ETR $item): self
    {
        $this->ETR[] = $item;
        
        return $this;
    }
    /**
     * Get MCO value
     * @return \Travelport\Air\StructType\MCO[]
     */
    public function getMCO(): ?array
    {
        return $this->MCO;
    }
    /**
     * Set MCO value
     * @param \Travelport\Air\StructType\MCO[] $mCO
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function setMCO(?array $mCO = null): self
    {
        $this->MCO = $mCO;
        
        return $this;
    }
    /**
     * Add item to MCO value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\MCO $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function addToMCO(\Travelport\Air\StructType\MCO $item): self
    {
        $this->MCO[] = $item;
        
        return $this;
    }
    /**
     * Get TCR value
     * @return \Travelport\Air\StructType\TCR[]
     */
    public function getTCR(): ?array
    {
        return $this->TCR;
    }
    /**
     * Set TCR value
     * @param \Travelport\Air\StructType\TCR[] $tCR
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function setTCR(?array $tCR = null): self
    {
        $this->TCR = $tCR;
        
        return $this;
    }
    /**
     * Add item to TCR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TCR $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function addToTCR(\Travelport\Air\StructType\TCR $item): self
    {
        $this->TCR[] = $item;
        
        return $this;
    }
    /**
     * Get DocumentFailureInfo value
     * @return \Travelport\Air\StructType\TypeFailureInfo[]
     */
    public function getDocumentFailureInfo(): ?array
    {
        return $this->DocumentFailureInfo;
    }
    /**
     * Set DocumentFailureInfo value
     * @param \Travelport\Air\StructType\TypeFailureInfo[] $documentFailureInfo
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function setDocumentFailureInfo(?array $documentFailureInfo = null): self
    {
        $this->DocumentFailureInfo = $documentFailureInfo;
        
        return $this;
    }
    /**
     * Add item to DocumentFailureInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeFailureInfo $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function addToDocumentFailureInfo(\Travelport\Air\StructType\TypeFailureInfo $item): self
    {
        $this->DocumentFailureInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceFeeInfo value
     * @return \Travelport\Air\StructType\ServiceFeeInfo[]
     */
    public function getServiceFeeInfo(): ?array
    {
        return $this->ServiceFeeInfo;
    }
    /**
     * Set ServiceFeeInfo value
     * @param \Travelport\Air\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function setServiceFeeInfo(?array $serviceFeeInfo = null): self
    {
        $this->ServiceFeeInfo = $serviceFeeInfo;
        
        return $this;
    }
    /**
     * Add item to ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ServiceFeeInfo $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function addToServiceFeeInfo(\Travelport\Air\StructType\ServiceFeeInfo $item): self
    {
        $this->ServiceFeeInfo[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
}
