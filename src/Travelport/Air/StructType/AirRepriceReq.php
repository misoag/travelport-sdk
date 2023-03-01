<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRepriceReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to reprice a solution.
 * @subpackage Structs
 */
class AirRepriceReq extends AirBaseReq
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution|null
     */
    public ?\Travelport\Air\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * The FareRuleType
     * Meta information extracted from the WSDL
     * - default: none
     * - use: optional
     * @var string|null
     */
    public ?string $FareRuleType = null;
    /**
     * The IgnoreAvailability
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IgnoreAvailability = null;
    /**
     * Constructor method for AirRepriceReq
     * @uses AirRepriceReq::setAirReservationLocatorCode()
     * @uses AirRepriceReq::setAirPricingSolution()
     * @uses AirRepriceReq::setFareRuleType()
     * @uses AirRepriceReq::setIgnoreAvailability()
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\Air\StructType\AirPricingSolution $airPricingSolution
     * @param string $fareRuleType
     * @param bool $ignoreAvailability
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?\Travelport\Air\StructType\AirPricingSolution $airPricingSolution = null, ?string $fareRuleType = null, ?bool $ignoreAvailability = false)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setAirPricingSolution($airPricingSolution)
            ->setFareRuleType($fareRuleType)
            ->setIgnoreAvailability($ignoreAvailability);
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Air\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Air\StructType\AirRepriceReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AirRepriceReq
     */
    public function setAirPricingSolution(?\Travelport\Air\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Get FareRuleType value
     * @return string|null
     */
    public function getFareRuleType(): ?string
    {
        return $this->FareRuleType;
    }
    /**
     * Set FareRuleType value
     * @param string $fareRuleType
     * @return \Travelport\Air\StructType\AirRepriceReq
     */
    public function setFareRuleType(?string $fareRuleType = null): self
    {
        $this->FareRuleType = $fareRuleType;
        
        return $this;
    }
    /**
     * Get IgnoreAvailability value
     * @return bool|null
     */
    public function getIgnoreAvailability(): ?bool
    {
        return $this->IgnoreAvailability;
    }
    /**
     * Set IgnoreAvailability value
     * @param bool $ignoreAvailability
     * @return \Travelport\Air\StructType\AirRepriceReq
     */
    public function setIgnoreAvailability(?bool $ignoreAvailability = false): self
    {
        $this->IgnoreAvailability = $ignoreAvailability;
        
        return $this;
    }
}
