<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeEligibilityReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to determine if the fares in an itinerary are exchangeable
 * @subpackage Structs
 */
class AirExchangeEligibilityReq extends BaseReq
{
    /**
     * The ProviderReservationInfo
     * @var \Travelport\Air\StructType\ProviderReservationInfo|null
     */
    public ?\Travelport\Air\StructType\ProviderReservationInfo $ProviderReservationInfo = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type choices are "Detail" or "Summary" Default will be Summary
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for AirExchangeEligibilityReq
     * @uses AirExchangeEligibilityReq::setProviderReservationInfo()
     * @uses AirExchangeEligibilityReq::setType()
     * @param \Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo
     * @param string $type
     */
    public function __construct(?\Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo = null, ?string $type = null)
    {
        $this
            ->setProviderReservationInfo($providerReservationInfo)
            ->setType($type);
    }
    /**
     * Get ProviderReservationInfo value
     * @return \Travelport\Air\StructType\ProviderReservationInfo|null
     */
    public function getProviderReservationInfo(): ?\Travelport\Air\StructType\ProviderReservationInfo
    {
        return $this->ProviderReservationInfo;
    }
    /**
     * Set ProviderReservationInfo value
     * @param \Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo
     * @return \Travelport\Air\StructType\AirExchangeEligibilityReq
     */
    public function setProviderReservationInfo(?\Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo = null): self
    {
        $this->ProviderReservationInfo = $providerReservationInfo;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\AirExchangeEligibilityReq
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
