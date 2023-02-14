<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for VehicleUpsell.
 * @subpackage Structs
 */
class VehicleUpsellSearchCriteria extends AbstractStructBase
{
    /**
     * The VehicleUpsellQualifySearchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: VehicleUpsellQualifySearchCriteria
     * @var \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    protected \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria $VehicleUpsellQualifySearchCriteria;
    /**
     * The VehicleUpsellOfferSearchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: VehicleUpsellOfferSearchCriteria
     * @var \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria|null
     */
    protected ?\Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria $VehicleUpsellOfferSearchCriteria = null;
    /**
     * Constructor method for VehicleUpsellSearchCriteria
     * @uses VehicleUpsellSearchCriteria::setVehicleUpsellQualifySearchCriteria()
     * @uses VehicleUpsellSearchCriteria::setVehicleUpsellOfferSearchCriteria()
     * @param \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria $vehicleUpsellQualifySearchCriteria
     * @param \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria $vehicleUpsellOfferSearchCriteria
     */
    public function __construct(\Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria $vehicleUpsellQualifySearchCriteria, ?\Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria $vehicleUpsellOfferSearchCriteria = null)
    {
        $this
            ->setVehicleUpsellQualifySearchCriteria($vehicleUpsellQualifySearchCriteria)
            ->setVehicleUpsellOfferSearchCriteria($vehicleUpsellOfferSearchCriteria);
    }
    /**
     * Get VehicleUpsellQualifySearchCriteria value
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function getVehicleUpsellQualifySearchCriteria(): \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
    {
        return $this->VehicleUpsellQualifySearchCriteria;
    }
    /**
     * Set VehicleUpsellQualifySearchCriteria value
     * @param \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria $vehicleUpsellQualifySearchCriteria
     * @return \Travelport\Util\StructType\VehicleUpsellSearchCriteria
     */
    public function setVehicleUpsellQualifySearchCriteria(\Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria $vehicleUpsellQualifySearchCriteria): self
    {
        $this->VehicleUpsellQualifySearchCriteria = $vehicleUpsellQualifySearchCriteria;
        
        return $this;
    }
    /**
     * Get VehicleUpsellOfferSearchCriteria value
     * @return \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria|null
     */
    public function getVehicleUpsellOfferSearchCriteria(): ?\Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria
    {
        return $this->VehicleUpsellOfferSearchCriteria;
    }
    /**
     * Set VehicleUpsellOfferSearchCriteria value
     * @param \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria $vehicleUpsellOfferSearchCriteria
     * @return \Travelport\Util\StructType\VehicleUpsellSearchCriteria
     */
    public function setVehicleUpsellOfferSearchCriteria(?\Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria $vehicleUpsellOfferSearchCriteria = null): self
    {
        $this->VehicleUpsellOfferSearchCriteria = $vehicleUpsellOfferSearchCriteria;
        
        return $this;
    }
}
