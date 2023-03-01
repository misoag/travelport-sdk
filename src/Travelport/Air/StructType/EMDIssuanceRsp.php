<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDIssuanceRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Electronic Miscellaneous Document issuance response.Supported providers are 1V/1G/1P
 * @subpackage Structs
 */
class EMDIssuanceRsp extends BaseRsp
{
    /**
     * The EMDSummaryInfo
     * Meta information extracted from the WSDL
     * - choice: EMDSummaryInfo | EMDInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: EMDSummaryInfo
     * @var \Travelport\Air\StructType\EMDSummaryInfo[]
     */
    public ?array $EMDSummaryInfo = null;
    /**
     * The EMDInfo
     * Meta information extracted from the WSDL
     * - choice: EMDSummaryInfo | EMDInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: EMDInfo
     * @var \Travelport\Air\StructType\EMDInfo[]
     */
    public ?array $EMDInfo = null;
    /**
     * Constructor method for EMDIssuanceRsp
     * @uses EMDIssuanceRsp::setEMDSummaryInfo()
     * @uses EMDIssuanceRsp::setEMDInfo()
     * @param \Travelport\Air\StructType\EMDSummaryInfo[] $eMDSummaryInfo
     * @param \Travelport\Air\StructType\EMDInfo[] $eMDInfo
     */
    public function __construct(?array $eMDSummaryInfo = null, ?array $eMDInfo = null)
    {
        $this
            ->setEMDSummaryInfo($eMDSummaryInfo)
            ->setEMDInfo($eMDInfo);
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
     * @return \Travelport\Air\StructType\EMDIssuanceRsp
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
     * @return \Travelport\Air\StructType\EMDIssuanceRsp
     */
    public function addToEMDSummaryInfo(\Travelport\Air\StructType\EMDSummaryInfo $item): self
    {
        $this->EMDSummaryInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EMDInfo value
     * @return \Travelport\Air\StructType\EMDInfo[]|null
     */
    public function getEMDInfo(): ?array
    {
        return $this->EMDInfo ?? null;
    }
    /**
     * Set EMDInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\EMDInfo[] $eMDInfo
     * @return \Travelport\Air\StructType\EMDIssuanceRsp
     */
    public function setEMDInfo(?array $eMDInfo = null): self
    {
        if (is_null($eMDInfo) || (is_array($eMDInfo) && empty($eMDInfo))) {
            unset($this->EMDInfo);
        } else {
            $this->EMDInfo = $eMDInfo;
        }
        
        return $this;
    }
    /**
     * Add item to EMDInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\EMDInfo $item
     * @return \Travelport\Air\StructType\EMDIssuanceRsp
     */
    public function addToEMDInfo(\Travelport\Air\StructType\EMDInfo $item): self
    {
        $this->EMDInfo[] = $item;
        
        return $this;
    }
}
