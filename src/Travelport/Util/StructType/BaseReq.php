<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\OverridePCC|null
     */
    protected ?\Travelport\Util\StructType\OverridePCC $OverridePCC = null;
    /**
     * The RetrieveProviderReservationDetails
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RetrieveProviderReservationDetails = null;
    /**
     * Constructor method for BaseReq
     * @uses BaseReq::setOverridePCC()
     * @uses BaseReq::setRetrieveProviderReservationDetails()
     * @param \Travelport\Util\StructType\OverridePCC $overridePCC
     * @param bool $retrieveProviderReservationDetails
     */
    public function __construct(?\Travelport\Util\StructType\OverridePCC $overridePCC = null, ?bool $retrieveProviderReservationDetails = false)
    {
        $this
            ->setOverridePCC($overridePCC)
            ->setRetrieveProviderReservationDetails($retrieveProviderReservationDetails);
    }
    /**
     * Get OverridePCC value
     * @return \Travelport\Util\StructType\OverridePCC|null
     */
    public function getOverridePCC(): ?\Travelport\Util\StructType\OverridePCC
    {
        return $this->OverridePCC;
    }
    /**
     * Set OverridePCC value
     * @param \Travelport\Util\StructType\OverridePCC $overridePCC
     * @return \Travelport\Util\StructType\BaseReq
     */
    public function setOverridePCC(?\Travelport\Util\StructType\OverridePCC $overridePCC = null): self
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
     * @return \Travelport\Util\StructType\BaseReq
     */
    public function setRetrieveProviderReservationDetails(?bool $retrieveProviderReservationDetails = false): self
    {
        // validation for constraint: boolean
        if (!is_null($retrieveProviderReservationDetails) && !is_bool($retrieveProviderReservationDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retrieveProviderReservationDetails, true), gettype($retrieveProviderReservationDetails)), __LINE__);
        }
        $this->RetrieveProviderReservationDetails = $retrieveProviderReservationDetails;
        
        return $this;
    }
}
