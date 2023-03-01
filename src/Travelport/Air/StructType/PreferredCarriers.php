<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredCarriers StructType
 * @subpackage Structs
 */
class PreferredCarriers extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:Carrier
     * @var \Travelport\Air\StructType\Carrier[]
     */
    public ?array $Carrier = null;
    /**
     * Constructor method for PreferredCarriers
     * @uses PreferredCarriers::setCarrier()
     * @param \Travelport\Air\StructType\Carrier[] $carrier
     */
    public function __construct(?array $carrier = null)
    {
        $this
            ->setCarrier($carrier);
    }
    /**
     * Get Carrier value
     * @return \Travelport\Air\StructType\Carrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param \Travelport\Air\StructType\Carrier[] $carrier
     * @return \Travelport\Air\StructType\PreferredCarriers
     */
    public function setCarrier(?array $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Carrier $item
     * @return \Travelport\Air\StructType\PreferredCarriers
     */
    public function addToCarrier(\Travelport\Air\StructType\Carrier $item): self
    {
        $this->Carrier[] = $item;
        
        return $this;
    }
}
