<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirVoidDocumentRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Result of void ticket request. Includes ticket number of voided tickets and air segments with updated status.
 * @subpackage Structs
 */
class AirVoidDocumentRsp extends BaseRsp
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
     * The VoidResultInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: VoidResultInfo
     * @var \Travelport\Air\StructType\VoidResultInfo[]
     */
    public ?array $VoidResultInfo = null;
    /**
     * Constructor method for AirVoidDocumentRsp
     * @uses AirVoidDocumentRsp::setETR()
     * @uses AirVoidDocumentRsp::setVoidResultInfo()
     * @param \Travelport\Air\StructType\ETR[] $eTR
     * @param \Travelport\Air\StructType\VoidResultInfo[] $voidResultInfo
     */
    public function __construct(?array $eTR = null, ?array $voidResultInfo = null)
    {
        $this
            ->setETR($eTR)
            ->setVoidResultInfo($voidResultInfo);
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
     * @return \Travelport\Air\StructType\AirVoidDocumentRsp
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
     * @return \Travelport\Air\StructType\AirVoidDocumentRsp
     */
    public function addToETR(\Travelport\Air\StructType\ETR $item): self
    {
        $this->ETR[] = $item;
        
        return $this;
    }
    /**
     * Get VoidResultInfo value
     * @return \Travelport\Air\StructType\VoidResultInfo[]
     */
    public function getVoidResultInfo(): ?array
    {
        return $this->VoidResultInfo;
    }
    /**
     * Set VoidResultInfo value
     * @param \Travelport\Air\StructType\VoidResultInfo[] $voidResultInfo
     * @return \Travelport\Air\StructType\AirVoidDocumentRsp
     */
    public function setVoidResultInfo(?array $voidResultInfo = null): self
    {
        $this->VoidResultInfo = $voidResultInfo;
        
        return $this;
    }
    /**
     * Add item to VoidResultInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\VoidResultInfo $item
     * @return \Travelport\Air\StructType\AirVoidDocumentRsp
     */
    public function addToVoidResultInfo(\Travelport\Air\StructType\VoidResultInfo $item): self
    {
        $this->VoidResultInfo[] = $item;
        
        return $this;
    }
}
