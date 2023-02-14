<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The Adjustment
     * Meta information extracted from the WSDL
     * - ref: Adjustment
     * @var \Travelport\Util\StructType\Adjustment|null
     */
    protected ?\Travelport\Util\StructType\Adjustment $Adjustment = null;
    /**
     * Constructor method for AirPricingAdjustment
     * @uses AirPricingAdjustment::setKey()
     * @uses AirPricingAdjustment::setAdjustment()
     * @param string $key
     * @param \Travelport\Util\StructType\Adjustment $adjustment
     */
    public function __construct(string $key, ?\Travelport\Util\StructType\Adjustment $adjustment = null)
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
     * @return \Travelport\Util\StructType\AirPricingAdjustment
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Adjustment value
     * @return \Travelport\Util\StructType\Adjustment|null
     */
    public function getAdjustment(): ?\Travelport\Util\StructType\Adjustment
    {
        return $this->Adjustment;
    }
    /**
     * Set Adjustment value
     * @param \Travelport\Util\StructType\Adjustment $adjustment
     * @return \Travelport\Util\StructType\AirPricingAdjustment
     */
    public function setAdjustment(?\Travelport\Util\StructType\Adjustment $adjustment = null): self
    {
        $this->Adjustment = $adjustment;
        
        return $this;
    }
}
