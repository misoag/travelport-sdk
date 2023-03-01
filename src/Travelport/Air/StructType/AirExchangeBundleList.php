<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeBundleList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirsegmentData
 * @subpackage Structs
 */
class AirExchangeBundleList extends AbstractStructBase
{
    /**
     * The AirExchangeBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirExchangeBundle
     * @var \Travelport\Air\StructType\AirExchangeBundle[]
     */
    public ?array $AirExchangeBundle = null;
    /**
     * Constructor method for AirExchangeBundleList
     * @uses AirExchangeBundleList::setAirExchangeBundle()
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     */
    public function __construct(?array $airExchangeBundle = null)
    {
        $this
            ->setAirExchangeBundle($airExchangeBundle);
    }
    /**
     * Get AirExchangeBundle value
     * @return \Travelport\Air\StructType\AirExchangeBundle[]
     */
    public function getAirExchangeBundle(): ?array
    {
        return $this->AirExchangeBundle;
    }
    /**
     * Set AirExchangeBundle value
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     * @return \Travelport\Air\StructType\AirExchangeBundleList
     */
    public function setAirExchangeBundle(?array $airExchangeBundle = null): self
    {
        $this->AirExchangeBundle = $airExchangeBundle;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirExchangeBundle $item
     * @return \Travelport\Air\StructType\AirExchangeBundleList
     */
    public function addToAirExchangeBundle(\Travelport\Air\StructType\AirExchangeBundle $item): self
    {
        $this->AirExchangeBundle[] = $item;
        
        return $this;
    }
}
