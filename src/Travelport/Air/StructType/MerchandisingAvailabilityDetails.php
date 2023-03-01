<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchandisingAvailabilityDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Rich Content and Branding for an air segment
 * @subpackage Structs
 */
class MerchandisingAvailabilityDetails extends AbstractStructBase
{
    /**
     * The AirItineraryDetails
     * Meta information extracted from the WSDL
     * - ref: AirItineraryDetails
     * @var \Travelport\Air\StructType\AirItineraryDetails|null
     */
    public ?\Travelport\Air\StructType\AirItineraryDetails $AirItineraryDetails = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Air\StructType\AccountCode|null
     */
    public ?\Travelport\Air\StructType\AccountCode $AccountCode = null;
    /**
     * Constructor method for MerchandisingAvailabilityDetails
     * @uses MerchandisingAvailabilityDetails::setAirItineraryDetails()
     * @uses MerchandisingAvailabilityDetails::setAccountCode()
     * @param \Travelport\Air\StructType\AirItineraryDetails $airItineraryDetails
     * @param \Travelport\Air\StructType\AccountCode $accountCode
     */
    public function __construct(?\Travelport\Air\StructType\AirItineraryDetails $airItineraryDetails = null, ?\Travelport\Air\StructType\AccountCode $accountCode = null)
    {
        $this
            ->setAirItineraryDetails($airItineraryDetails)
            ->setAccountCode($accountCode);
    }
    /**
     * Get AirItineraryDetails value
     * @return \Travelport\Air\StructType\AirItineraryDetails|null
     */
    public function getAirItineraryDetails(): ?\Travelport\Air\StructType\AirItineraryDetails
    {
        return $this->AirItineraryDetails;
    }
    /**
     * Set AirItineraryDetails value
     * @param \Travelport\Air\StructType\AirItineraryDetails $airItineraryDetails
     * @return \Travelport\Air\StructType\MerchandisingAvailabilityDetails
     */
    public function setAirItineraryDetails(?\Travelport\Air\StructType\AirItineraryDetails $airItineraryDetails = null): self
    {
        $this->AirItineraryDetails = $airItineraryDetails;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Air\StructType\AccountCode|null
     */
    public function getAccountCode(): ?\Travelport\Air\StructType\AccountCode
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Air\StructType\AccountCode $accountCode
     * @return \Travelport\Air\StructType\MerchandisingAvailabilityDetails
     */
    public function setAccountCode(?\Travelport\Air\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
}
