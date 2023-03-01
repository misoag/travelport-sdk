<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundRsp StructType
 * @subpackage Structs
 */
class AirRefundRsp extends BaseRsp
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
     * The TCR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCR
     * @var \Travelport\Air\StructType\TCR[]
     */
    public ?array $TCR = null;
    /**
     * The RefundFailureInfo
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTicketFailureInfo[]
     */
    public ?array $RefundFailureInfo = null;
    /**
     * Constructor method for AirRefundRsp
     * @uses AirRefundRsp::setETR()
     * @uses AirRefundRsp::setTCR()
     * @uses AirRefundRsp::setRefundFailureInfo()
     * @param \Travelport\Air\StructType\ETR[] $eTR
     * @param \Travelport\Air\StructType\TCR[] $tCR
     * @param \Travelport\Air\StructType\TypeTicketFailureInfo[] $refundFailureInfo
     */
    public function __construct(?array $eTR = null, ?array $tCR = null, ?array $refundFailureInfo = null)
    {
        $this
            ->setETR($eTR)
            ->setTCR($tCR)
            ->setRefundFailureInfo($refundFailureInfo);
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
     * @return \Travelport\Air\StructType\AirRefundRsp
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
     * @return \Travelport\Air\StructType\AirRefundRsp
     */
    public function addToETR(\Travelport\Air\StructType\ETR $item): self
    {
        $this->ETR[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirRefundRsp
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
     * @return \Travelport\Air\StructType\AirRefundRsp
     */
    public function addToTCR(\Travelport\Air\StructType\TCR $item): self
    {
        $this->TCR[] = $item;
        
        return $this;
    }
    /**
     * Get RefundFailureInfo value
     * @return \Travelport\Air\StructType\TypeTicketFailureInfo[]
     */
    public function getRefundFailureInfo(): ?array
    {
        return $this->RefundFailureInfo;
    }
    /**
     * Set RefundFailureInfo value
     * @param \Travelport\Air\StructType\TypeTicketFailureInfo[] $refundFailureInfo
     * @return \Travelport\Air\StructType\AirRefundRsp
     */
    public function setRefundFailureInfo(?array $refundFailureInfo = null): self
    {
        $this->RefundFailureInfo = $refundFailureInfo;
        
        return $this;
    }
    /**
     * Add item to RefundFailureInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTicketFailureInfo $item
     * @return \Travelport\Air\StructType\AirRefundRsp
     */
    public function addToRefundFailureInfo(\Travelport\Air\StructType\TypeTicketFailureInfo $item): self
    {
        $this->RefundFailureInfo[] = $item;
        
        return $this;
    }
}
