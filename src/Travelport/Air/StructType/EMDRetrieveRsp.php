<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDRetrieveRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Electronic Miscellaneous Document list and detail retrieve response.Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDRetrieveRsp extends BaseRsp
{
    /**
     * The EMDInfo
     * Meta information extracted from the WSDL
     * - choice: EMDInfo | EMDSummaryInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: EMDInfo
     * @var \Travelport\Air\StructType\EMDInfo|null
     */
    public ?\Travelport\Air\StructType\EMDInfo $EMDInfo = null;
    /**
     * The EMDSummaryInfo
     * Meta information extracted from the WSDL
     * - choice: EMDInfo | EMDSummaryInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: EMDSummaryInfo
     * @var \Travelport\Air\StructType\EMDSummaryInfo[]
     */
    public ?array $EMDSummaryInfo = null;
    /**
     * Constructor method for EMDRetrieveRsp
     * @uses EMDRetrieveRsp::setEMDInfo()
     * @uses EMDRetrieveRsp::setEMDSummaryInfo()
     * @param \Travelport\Air\StructType\EMDInfo $eMDInfo
     * @param \Travelport\Air\StructType\EMDSummaryInfo[] $eMDSummaryInfo
     */
    public function __construct(?\Travelport\Air\StructType\EMDInfo $eMDInfo = null, ?array $eMDSummaryInfo = null)
    {
        $this
            ->setEMDInfo($eMDInfo)
            ->setEMDSummaryInfo($eMDSummaryInfo);
    }
    /**
     * Get EMDInfo value
     * @return \Travelport\Air\StructType\EMDInfo|null
     */
    public function getEMDInfo(): ?\Travelport\Air\StructType\EMDInfo
    {
        return $this->EMDInfo ?? null;
    }
    /**
     * Set EMDInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\EMDInfo $eMDInfo
     * @return \Travelport\Air\StructType\EMDRetrieveRsp
     */
    public function setEMDInfo(?\Travelport\Air\StructType\EMDInfo $eMDInfo = null): self
    {
        if (is_null($eMDInfo) || (is_array($eMDInfo) && empty($eMDInfo))) {
            unset($this->EMDInfo);
        } else {
            $this->EMDInfo = $eMDInfo;
        }
        
        return $this;
    }
    /**
     * Get EMDSummaryInfo value
     * @return \Travelport\Air\StructType\EMDSummaryInfo[]|null
     */
    public function getEMDSummaryInfo(): ?array
    {
        return $this->EMDSummaryInfo ?? null;
    }
    /**
     * Set EMDSummaryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\EMDSummaryInfo[] $eMDSummaryInfo
     * @return \Travelport\Air\StructType\EMDRetrieveRsp
     */
    public function setEMDSummaryInfo(?array $eMDSummaryInfo = null): self
    {
        if (is_null($eMDSummaryInfo) || (is_array($eMDSummaryInfo) && empty($eMDSummaryInfo))) {
            unset($this->EMDSummaryInfo);
        } else {
            $this->EMDSummaryInfo = $eMDSummaryInfo;
        }
        
        return $this;
    }
    /**
     * Add item to EMDSummaryInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\EMDSummaryInfo $item
     * @return \Travelport\Air\StructType\EMDRetrieveRsp
     */
    public function addToEMDSummaryInfo(\Travelport\Air\StructType\EMDSummaryInfo $item): self
    {
        $this->EMDSummaryInfo[] = $item;
        
        return $this;
    }
}
