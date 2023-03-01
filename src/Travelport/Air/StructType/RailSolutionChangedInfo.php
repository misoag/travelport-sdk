<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSolutionChangedInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: If RetainReservation is None, this will contain the new values returned from the provider. If RetainReservation is Price, Schedule, or Both and there is a price/schedule change, this will contain the new values that were returned
 * from the provider. If RetainReservation is Price, Schedule, or Both and there isn’t a price/schedule change, this element will not be returned.
 * @subpackage Structs
 */
class RailSolutionChangedInfo extends AbstractStructBase
{
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ReasonCode;
    /**
     * The RailPricingSolution
     * Meta information extracted from the WSDL
     * - ref: RailPricingSolution
     * @var \Travelport\Air\StructType\RailPricingSolution|null
     */
    public ?\Travelport\Air\StructType\RailPricingSolution $RailPricingSolution = null;
    /**
     * Constructor method for RailSolutionChangedInfo
     * @uses RailSolutionChangedInfo::setReasonCode()
     * @uses RailSolutionChangedInfo::setRailPricingSolution()
     * @param string $reasonCode
     * @param \Travelport\Air\StructType\RailPricingSolution $railPricingSolution
     */
    public function __construct(string $reasonCode, ?\Travelport\Air\StructType\RailPricingSolution $railPricingSolution = null)
    {
        $this
            ->setReasonCode($reasonCode)
            ->setRailPricingSolution($railPricingSolution);
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
     * @return \Travelport\Air\StructType\RailSolutionChangedInfo
     */
    public function setReasonCode(string $reasonCode): self
    {
        $this->ReasonCode = $reasonCode;
        
        return $this;
    }
    /**
     * Get RailPricingSolution value
     * @return \Travelport\Air\StructType\RailPricingSolution|null
     */
    public function getRailPricingSolution(): ?\Travelport\Air\StructType\RailPricingSolution
    {
        return $this->RailPricingSolution;
    }
    /**
     * Set RailPricingSolution value
     * @param \Travelport\Air\StructType\RailPricingSolution $railPricingSolution
     * @return \Travelport\Air\StructType\RailSolutionChangedInfo
     */
    public function setRailPricingSolution(?\Travelport\Air\StructType\RailPricingSolution $railPricingSolution = null): self
    {
        $this->RailPricingSolution = $railPricingSolution;
        
        return $this;
    }
}
