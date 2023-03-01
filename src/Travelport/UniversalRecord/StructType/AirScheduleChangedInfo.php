<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * Constructor method for AirScheduleChangedInfo
     * @uses AirScheduleChangedInfo::setAirPricingSolution()
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution|null
     */
    public function getAirPricingSolution(): ?\Travelport\UniversalRecord\StructType\AirPricingSolution
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\AirScheduleChangedInfo
     */
    public function setAirPricingSolution(?\Travelport\UniversalRecord\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
}
