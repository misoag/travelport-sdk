<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\AirPricingSolution|null
     */
    protected ?\Travelport\Util\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * Constructor method for AirScheduleChangedInfo
     * @uses AirScheduleChangedInfo::setAirPricingSolution()
     * @param \Travelport\Util\StructType\AirPricingSolution $airPricingSolution
     */
    public function __construct(?\Travelport\Util\StructType\AirPricingSolution $airPricingSolution = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\Util\StructType\AirPricingSolution|null
     */
    public function getAirPricingSolution(): ?\Travelport\Util\StructType\AirPricingSolution
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\Util\StructType\AirPricingSolution $airPricingSolution
     * @return \Travelport\Util\StructType\AirScheduleChangedInfo
     */
    public function setAirPricingSolution(?\Travelport\Util\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
}
