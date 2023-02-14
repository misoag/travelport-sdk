<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\AirItineraryDetails|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirItineraryDetails $AirItineraryDetails = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AccountCode $AccountCode = null;
    /**
     * Constructor method for MerchandisingAvailabilityDetails
     * @uses MerchandisingAvailabilityDetails::setAirItineraryDetails()
     * @uses MerchandisingAvailabilityDetails::setAccountCode()
     * @param \Travelport\UniversalRecord\StructType\AirItineraryDetails $airItineraryDetails
     * @param \Travelport\UniversalRecord\StructType\AccountCode $accountCode
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirItineraryDetails $airItineraryDetails = null, ?\Travelport\UniversalRecord\StructType\AccountCode $accountCode = null)
    {
        $this
            ->setAirItineraryDetails($airItineraryDetails)
            ->setAccountCode($accountCode);
    }
    /**
     * Get AirItineraryDetails value
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails|null
     */
    public function getAirItineraryDetails(): ?\Travelport\UniversalRecord\StructType\AirItineraryDetails
    {
        return $this->AirItineraryDetails;
    }
    /**
     * Set AirItineraryDetails value
     * @param \Travelport\UniversalRecord\StructType\AirItineraryDetails $airItineraryDetails
     * @return \Travelport\UniversalRecord\StructType\MerchandisingAvailabilityDetails
     */
    public function setAirItineraryDetails(?\Travelport\UniversalRecord\StructType\AirItineraryDetails $airItineraryDetails = null): self
    {
        $this->AirItineraryDetails = $airItineraryDetails;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\UniversalRecord\StructType\AccountCode|null
     */
    public function getAccountCode(): ?\Travelport\UniversalRecord\StructType\AccountCode
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\UniversalRecord\StructType\AccountCode $accountCode
     * @return \Travelport\UniversalRecord\StructType\MerchandisingAvailabilityDetails
     */
    public function setAccountCode(?\Travelport\UniversalRecord\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
}
