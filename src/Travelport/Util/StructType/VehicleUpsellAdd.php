<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: Add command for adding VehicleUpsellQualify,VehicleUpsellOffer
 * @subpackage Structs
 */
class VehicleUpsellAdd extends AbstractStructBase
{
    /**
     * The VehicleUpsellQualify
     * Meta information extracted from the WSDL
     * - ref: VehicleUpsellQualify
     * @var \Travelport\Util\StructType\VehicleUpsellQualify|null
     */
    protected ?\Travelport\Util\StructType\VehicleUpsellQualify $VehicleUpsellQualify = null;
    /**
     * The VehicleUpsellOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: VehicleUpsellOffer
     * @var \Travelport\Util\StructType\VehicleUpsellOffer|null
     */
    protected ?\Travelport\Util\StructType\VehicleUpsellOffer $VehicleUpsellOffer = null;
    /**
     * Constructor method for VehicleUpsellAdd
     * @uses VehicleUpsellAdd::setVehicleUpsellQualify()
     * @uses VehicleUpsellAdd::setVehicleUpsellOffer()
     * @param \Travelport\Util\StructType\VehicleUpsellQualify $vehicleUpsellQualify
     * @param \Travelport\Util\StructType\VehicleUpsellOffer $vehicleUpsellOffer
     */
    public function __construct(?\Travelport\Util\StructType\VehicleUpsellQualify $vehicleUpsellQualify = null, ?\Travelport\Util\StructType\VehicleUpsellOffer $vehicleUpsellOffer = null)
    {
        $this
            ->setVehicleUpsellQualify($vehicleUpsellQualify)
            ->setVehicleUpsellOffer($vehicleUpsellOffer);
    }
    /**
     * Get VehicleUpsellQualify value
     * @return \Travelport\Util\StructType\VehicleUpsellQualify|null
     */
    public function getVehicleUpsellQualify(): ?\Travelport\Util\StructType\VehicleUpsellQualify
    {
        return $this->VehicleUpsellQualify;
    }
    /**
     * Set VehicleUpsellQualify value
     * @param \Travelport\Util\StructType\VehicleUpsellQualify $vehicleUpsellQualify
     * @return \Travelport\Util\StructType\VehicleUpsellAdd
     */
    public function setVehicleUpsellQualify(?\Travelport\Util\StructType\VehicleUpsellQualify $vehicleUpsellQualify = null): self
    {
        $this->VehicleUpsellQualify = $vehicleUpsellQualify;
        
        return $this;
    }
    /**
     * Get VehicleUpsellOffer value
     * @return \Travelport\Util\StructType\VehicleUpsellOffer|null
     */
    public function getVehicleUpsellOffer(): ?\Travelport\Util\StructType\VehicleUpsellOffer
    {
        return $this->VehicleUpsellOffer;
    }
    /**
     * Set VehicleUpsellOffer value
     * @param \Travelport\Util\StructType\VehicleUpsellOffer $vehicleUpsellOffer
     * @return \Travelport\Util\StructType\VehicleUpsellAdd
     */
    public function setVehicleUpsellOffer(?\Travelport\Util\StructType\VehicleUpsellOffer $vehicleUpsellOffer = null): self
    {
        $this->VehicleUpsellOffer = $vehicleUpsellOffer;
        
        return $this;
    }
}
