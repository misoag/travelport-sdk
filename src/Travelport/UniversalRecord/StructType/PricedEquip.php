<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedEquip StructType
 * Meta information extracted from the WSDL
 * - documentation: Special Equipment detail and charge for rental
 * @subpackage Structs
 */
class PricedEquip extends AbstractStructBase
{
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Equipment
     * @var \Travelport\UniversalRecord\StructType\Equipment|null
     */
    public ?\Travelport\UniversalRecord\StructType\Equipment $Equipment = null;
    /**
     * The Charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Charge
     * @var \Travelport\UniversalRecord\StructType\Charge|null
     */
    public ?\Travelport\UniversalRecord\StructType\Charge $Charge = null;
    /**
     * Constructor method for PricedEquip
     * @uses PricedEquip::setEquipment()
     * @uses PricedEquip::setCharge()
     * @param \Travelport\UniversalRecord\StructType\Equipment $equipment
     * @param \Travelport\UniversalRecord\StructType\Charge $charge
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Equipment $equipment = null, ?\Travelport\UniversalRecord\StructType\Charge $charge = null)
    {
        $this
            ->setEquipment($equipment)
            ->setCharge($charge);
    }
    /**
     * Get Equipment value
     * @return \Travelport\UniversalRecord\StructType\Equipment|null
     */
    public function getEquipment(): ?\Travelport\UniversalRecord\StructType\Equipment
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param \Travelport\UniversalRecord\StructType\Equipment $equipment
     * @return \Travelport\UniversalRecord\StructType\PricedEquip
     */
    public function setEquipment(?\Travelport\UniversalRecord\StructType\Equipment $equipment = null): self
    {
        $this->Equipment = $equipment;
        
        return $this;
    }
    /**
     * Get Charge value
     * @return \Travelport\UniversalRecord\StructType\Charge|null
     */
    public function getCharge(): ?\Travelport\UniversalRecord\StructType\Charge
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param \Travelport\UniversalRecord\StructType\Charge $charge
     * @return \Travelport\UniversalRecord\StructType\PricedEquip
     */
    public function setCharge(?\Travelport\UniversalRecord\StructType\Charge $charge = null): self
    {
        $this->Charge = $charge;
        
        return $this;
    }
}
