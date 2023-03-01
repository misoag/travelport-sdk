<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirScheduleChangedInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Contents will be a new AirPricingSolution that contains all the new schedule information as well as the pricing information. | Returned when the requested schedule does not match the host system schedule
 * @subpackage Structs
 */
class AirScheduleChangedInfo extends AbstractStructBase
{
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution|null
     */
    public ?\Travelport\Air\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * Constructor method for AirScheduleChangedInfo
     * @uses AirScheduleChangedInfo::setAirPricingSolution()
     * @param \Travelport\Air\StructType\AirPricingSolution $airPricingSolution
     */
    public function __construct(?\Travelport\Air\StructType\AirPricingSolution $airPricingSolution = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\Air\StructType\AirPricingSolution|null
     */
    public function getAirPricingSolution(): ?\Travelport\Air\StructType\AirPricingSolution
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\Air\StructType\AirPricingSolution $airPricingSolution
     * @return \Travelport\Air\StructType\AirScheduleChangedInfo
     */
    public function setAirPricingSolution(?\Travelport\Air\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
}
