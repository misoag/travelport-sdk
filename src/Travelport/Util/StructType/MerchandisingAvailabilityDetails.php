<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\AirItineraryDetails|null
     */
    protected ?\Travelport\Util\StructType\AirItineraryDetails $AirItineraryDetails = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode|null
     */
    protected ?\Travelport\Util\StructType\AccountCode $AccountCode = null;
    /**
     * Constructor method for MerchandisingAvailabilityDetails
     * @uses MerchandisingAvailabilityDetails::setAirItineraryDetails()
     * @uses MerchandisingAvailabilityDetails::setAccountCode()
     * @param \Travelport\Util\StructType\AirItineraryDetails $airItineraryDetails
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     */
    public function __construct(?\Travelport\Util\StructType\AirItineraryDetails $airItineraryDetails = null, ?\Travelport\Util\StructType\AccountCode $accountCode = null)
    {
        $this
            ->setAirItineraryDetails($airItineraryDetails)
            ->setAccountCode($accountCode);
    }
    /**
     * Get AirItineraryDetails value
     * @return \Travelport\Util\StructType\AirItineraryDetails|null
     */
    public function getAirItineraryDetails(): ?\Travelport\Util\StructType\AirItineraryDetails
    {
        return $this->AirItineraryDetails;
    }
    /**
     * Set AirItineraryDetails value
     * @param \Travelport\Util\StructType\AirItineraryDetails $airItineraryDetails
     * @return \Travelport\Util\StructType\MerchandisingAvailabilityDetails
     */
    public function setAirItineraryDetails(?\Travelport\Util\StructType\AirItineraryDetails $airItineraryDetails = null): self
    {
        $this->AirItineraryDetails = $airItineraryDetails;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Util\StructType\AccountCode|null
     */
    public function getAccountCode(): ?\Travelport\Util\StructType\AccountCode
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     * @return \Travelport\Util\StructType\MerchandisingAvailabilityDetails
     */
    public function setAccountCode(?\Travelport\Util\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
}
