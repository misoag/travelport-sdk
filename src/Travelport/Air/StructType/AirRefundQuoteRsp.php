<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundQuoteRsp StructType
 * @subpackage Structs
 */
class AirRefundQuoteRsp extends BaseRsp
{
    /**
     * The AirRefundBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirRefundBundle
     * @var \Travelport\Air\StructType\AirRefundBundle[]
     */
    public ?array $AirRefundBundle = null;
    /**
     * The TCRRefundBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCRRefundBundle
     * @var \Travelport\Air\StructType\TCRRefundBundle[]
     */
    public ?array $TCRRefundBundle = null;
    /**
     * Constructor method for AirRefundQuoteRsp
     * @uses AirRefundQuoteRsp::setAirRefundBundle()
     * @uses AirRefundQuoteRsp::setTCRRefundBundle()
     * @param \Travelport\Air\StructType\AirRefundBundle[] $airRefundBundle
     * @param \Travelport\Air\StructType\TCRRefundBundle[] $tCRRefundBundle
     */
    public function __construct(?array $airRefundBundle = null, ?array $tCRRefundBundle = null)
    {
        $this
            ->setAirRefundBundle($airRefundBundle)
            ->setTCRRefundBundle($tCRRefundBundle);
    }
    /**
     * Get AirRefundBundle value
     * @return \Travelport\Air\StructType\AirRefundBundle[]
     */
    public function getAirRefundBundle(): ?array
    {
        return $this->AirRefundBundle;
    }
    /**
     * Set AirRefundBundle value
     * @param \Travelport\Air\StructType\AirRefundBundle[] $airRefundBundle
     * @return \Travelport\Air\StructType\AirRefundQuoteRsp
     */
    public function setAirRefundBundle(?array $airRefundBundle = null): self
    {
        $this->AirRefundBundle = $airRefundBundle;
        
        return $this;
    }
    /**
     * Add item to AirRefundBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirRefundBundle $item
     * @return \Travelport\Air\StructType\AirRefundQuoteRsp
     */
    public function addToAirRefundBundle(\Travelport\Air\StructType\AirRefundBundle $item): self
    {
        $this->AirRefundBundle[] = $item;
        
        return $this;
    }
    /**
     * Get TCRRefundBundle value
     * @return \Travelport\Air\StructType\TCRRefundBundle[]
     */
    public function getTCRRefundBundle(): ?array
    {
        return $this->TCRRefundBundle;
    }
    /**
     * Set TCRRefundBundle value
     * @param \Travelport\Air\StructType\TCRRefundBundle[] $tCRRefundBundle
     * @return \Travelport\Air\StructType\AirRefundQuoteRsp
     */
    public function setTCRRefundBundle(?array $tCRRefundBundle = null): self
    {
        $this->TCRRefundBundle = $tCRRefundBundle;
        
        return $this;
    }
    /**
     * Add item to TCRRefundBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TCRRefundBundle $item
     * @return \Travelport\Air\StructType\AirRefundQuoteRsp
     */
    public function addToTCRRefundBundle(\Travelport\Air\StructType\TCRRefundBundle $item): self
    {
        $this->TCRRefundBundle[] = $item;
        
        return $this;
    }
}
