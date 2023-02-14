<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSolutionChangedInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: If RetainReservation is None, this will contain the new values returned from the provider. If RetainReservation is Price, Schedule, or Both and there is a price/schedule change, this will contain the new values that were returned
 * from the provider. If RetainReservation is Price, Schedule, or Both and there isn’t a price/schedule change, this element will not be returned.
 * @subpackage Structs
 */
class AirSolutionChangedInfo extends AbstractStructBase
{
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ReasonCode;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - ref: AirPricingSolution
     * @var \Travelport\Util\StructType\AirPricingSolution|null
     */
    protected ?\Travelport\Util\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * Constructor method for AirSolutionChangedInfo
     * @uses AirSolutionChangedInfo::setReasonCode()
     * @uses AirSolutionChangedInfo::setAirPricingSolution()
     * @param string $reasonCode
     * @param \Travelport\Util\StructType\AirPricingSolution $airPricingSolution
     */
    public function __construct(string $reasonCode, ?\Travelport\Util\StructType\AirPricingSolution $airPricingSolution = null)
    {
        $this
            ->setReasonCode($reasonCode)
            ->setAirPricingSolution($airPricingSolution);
    }
    /**
     * Get ReasonCode value
     * @return string
     */
    public function getReasonCode(): string
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $reasonCode
     * @return \Travelport\Util\StructType\AirSolutionChangedInfo
     */
    public function setReasonCode(string $reasonCode): self
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonCode, true), gettype($reasonCode)), __LINE__);
        }
        $this->ReasonCode = $reasonCode;
        
        return $this;
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
     * @return \Travelport\Util\StructType\AirSolutionChangedInfo
     */
    public function setAirPricingSolution(?\Travelport\Util\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
}
