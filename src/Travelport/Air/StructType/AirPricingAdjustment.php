<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingAdjustment StructType
 * Meta information extracted from the WSDL
 * - documentation: This is a container to adjust price of AirPricingInfo. Pass zero values to remove existing adjustment.
 * @subpackage Structs
 */
class AirPricingAdjustment extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key of AirPricingInfo from booking. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Adjustment
     * Meta information extracted from the WSDL
     * - ref: Adjustment
     * @var \Travelport\Air\StructType\Adjustment|null
     */
    public ?\Travelport\Air\StructType\Adjustment $Adjustment = null;
    /**
     * Constructor method for AirPricingAdjustment
     * @uses AirPricingAdjustment::setKey()
     * @uses AirPricingAdjustment::setAdjustment()
     * @param string $key
     * @param \Travelport\Air\StructType\Adjustment $adjustment
     */
    public function __construct(string $key, ?\Travelport\Air\StructType\Adjustment $adjustment = null)
    {
        $this
            ->setKey($key)
            ->setAdjustment($adjustment);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\AirPricingAdjustment
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Adjustment value
     * @return \Travelport\Air\StructType\Adjustment|null
     */
    public function getAdjustment(): ?\Travelport\Air\StructType\Adjustment
    {
        return $this->Adjustment;
    }
    /**
     * Set Adjustment value
     * @param \Travelport\Air\StructType\Adjustment $adjustment
     * @return \Travelport\Air\StructType\AirPricingAdjustment
     */
    public function setAdjustment(?\Travelport\Air\StructType\Adjustment $adjustment = null): self
    {
        $this->Adjustment = $adjustment;
        
        return $this;
    }
}
