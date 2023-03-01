<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedCarriers StructType
 * @subpackage Structs
 */
class PermittedCarriers extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:Carrier
     * @var \Travelport\UniversalRecord\StructType\Carrier[]
     */
    public ?array $Carrier = null;
    /**
     * Constructor method for PermittedCarriers
     * @uses PermittedCarriers::setCarrier()
     * @param \Travelport\UniversalRecord\StructType\Carrier[] $carrier
     */
    public function __construct(?array $carrier = null)
    {
        $this
            ->setCarrier($carrier);
    }
    /**
     * Get Carrier value
     * @return \Travelport\UniversalRecord\StructType\Carrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param \Travelport\UniversalRecord\StructType\Carrier[] $carrier
     * @return \Travelport\UniversalRecord\StructType\PermittedCarriers
     */
    public function setCarrier(?array $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Carrier $item
     * @return \Travelport\UniversalRecord\StructType\PermittedCarriers
     */
    public function addToCarrier(\Travelport\UniversalRecord\StructType\Carrier $item): self
    {
        $this->Carrier[] = $item;
        
        return $this;
    }
}
