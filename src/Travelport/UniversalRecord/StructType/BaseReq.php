<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseReq StructType
 * @subpackage Structs
 */
class BaseReq extends BaseCoreReq
{
    /**
     * The OverridePCC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: OverridePCC
     * @var \Travelport\UniversalRecord\StructType\OverridePCC|null
     */
    public ?\Travelport\UniversalRecord\StructType\OverridePCC $OverridePCC = null;
    /**
     * The RetrieveProviderReservationDetails
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $RetrieveProviderReservationDetails = null;
    /**
     * Constructor method for BaseReq
     * @uses BaseReq::setOverridePCC()
     * @uses BaseReq::setRetrieveProviderReservationDetails()
     * @param \Travelport\UniversalRecord\StructType\OverridePCC $overridePCC
     * @param bool $retrieveProviderReservationDetails
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\OverridePCC $overridePCC = null, ?bool $retrieveProviderReservationDetails = false)
    {
        $this
            ->setOverridePCC($overridePCC)
            ->setRetrieveProviderReservationDetails($retrieveProviderReservationDetails);
    }
    /**
     * Get OverridePCC value
     * @return \Travelport\UniversalRecord\StructType\OverridePCC|null
     */
    public function getOverridePCC(): ?\Travelport\UniversalRecord\StructType\OverridePCC
    {
        return $this->OverridePCC;
    }
    /**
     * Set OverridePCC value
     * @param \Travelport\UniversalRecord\StructType\OverridePCC $overridePCC
     * @return \Travelport\UniversalRecord\StructType\BaseReq
     */
    public function setOverridePCC(?\Travelport\UniversalRecord\StructType\OverridePCC $overridePCC = null): self
    {
        $this->OverridePCC = $overridePCC;
        
        return $this;
    }
    /**
     * Get RetrieveProviderReservationDetails value
     * @return bool|null
     */
    public function getRetrieveProviderReservationDetails(): ?bool
    {
        return $this->RetrieveProviderReservationDetails;
    }
    /**
     * Set RetrieveProviderReservationDetails value
     * @param bool $retrieveProviderReservationDetails
     * @return \Travelport\UniversalRecord\StructType\BaseReq
     */
    public function setRetrieveProviderReservationDetails(?bool $retrieveProviderReservationDetails = false): self
    {
        $this->RetrieveProviderReservationDetails = $retrieveProviderReservationDetails;
        
        return $this;
    }
}
