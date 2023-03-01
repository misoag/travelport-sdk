<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePolicy StructType
 * Meta information extracted from the WSDL
 * - documentation: Policy information provided by the Vehicle Supplier. Usually relative to a specific location.
 * @subpackage Structs
 */
class VehiclePolicy extends AbstractStructBase
{
    /**
     * The VehicleDisclaimer
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleDisclaimer
     * @var \Travelport\UniversalRecord\StructType\VehicleDisclaimer[]
     */
    public ?array $VehicleDisclaimer = null;
    /**
     * The VehicleDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleDetail
     * @var \Travelport\UniversalRecord\StructType\VehicleDetail[]
     */
    public ?array $VehicleDetail = null;
    /**
     * Constructor method for VehiclePolicy
     * @uses VehiclePolicy::setVehicleDisclaimer()
     * @uses VehiclePolicy::setVehicleDetail()
     * @param \Travelport\UniversalRecord\StructType\VehicleDisclaimer[] $vehicleDisclaimer
     * @param \Travelport\UniversalRecord\StructType\VehicleDetail[] $vehicleDetail
     */
    public function __construct(?array $vehicleDisclaimer = null, ?array $vehicleDetail = null)
    {
        $this
            ->setVehicleDisclaimer($vehicleDisclaimer)
            ->setVehicleDetail($vehicleDetail);
    }
    /**
     * Get VehicleDisclaimer value
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer[]
     */
    public function getVehicleDisclaimer(): ?array
    {
        return $this->VehicleDisclaimer;
    }
    /**
     * Set VehicleDisclaimer value
     * @param \Travelport\UniversalRecord\StructType\VehicleDisclaimer[] $vehicleDisclaimer
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function setVehicleDisclaimer(?array $vehicleDisclaimer = null): self
    {
        $this->VehicleDisclaimer = $vehicleDisclaimer;
        
        return $this;
    }
    /**
     * Add item to VehicleDisclaimer value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDisclaimer $item
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function addToVehicleDisclaimer(\Travelport\UniversalRecord\StructType\VehicleDisclaimer $item): self
    {
        $this->VehicleDisclaimer[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleDetail value
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail[]
     */
    public function getVehicleDetail(): ?array
    {
        return $this->VehicleDetail;
    }
    /**
     * Set VehicleDetail value
     * @param \Travelport\UniversalRecord\StructType\VehicleDetail[] $vehicleDetail
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function setVehicleDetail(?array $vehicleDetail = null): self
    {
        $this->VehicleDetail = $vehicleDetail;
        
        return $this;
    }
    /**
     * Add item to VehicleDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDetail $item
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function addToVehicleDetail(\Travelport\UniversalRecord\StructType\VehicleDetail $item): self
    {
        $this->VehicleDetail[] = $item;
        
        return $this;
    }
}
