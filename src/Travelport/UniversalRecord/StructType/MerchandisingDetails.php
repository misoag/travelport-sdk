<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchandisingDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Rich Content and Branding for a fare brand.
 * @subpackage Structs
 */
class MerchandisingDetails extends AbstractStructBase
{
    /**
     * The AirItineraryDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: AirItineraryDetails
     * @var \Travelport\UniversalRecord\StructType\AirItineraryDetails[]
     */
    public ?array $AirItineraryDetails = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public ?array $AccountCode = null;
    /**
     * Constructor method for MerchandisingDetails
     * @uses MerchandisingDetails::setAirItineraryDetails()
     * @uses MerchandisingDetails::setAccountCode()
     * @param \Travelport\UniversalRecord\StructType\AirItineraryDetails[] $airItineraryDetails
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     */
    public function __construct(?array $airItineraryDetails = null, ?array $accountCode = null)
    {
        $this
            ->setAirItineraryDetails($airItineraryDetails)
            ->setAccountCode($accountCode);
    }
    /**
     * Get AirItineraryDetails value
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails[]
     */
    public function getAirItineraryDetails(): ?array
    {
        return $this->AirItineraryDetails;
    }
    /**
     * Set AirItineraryDetails value
     * @param \Travelport\UniversalRecord\StructType\AirItineraryDetails[] $airItineraryDetails
     * @return \Travelport\UniversalRecord\StructType\MerchandisingDetails
     */
    public function setAirItineraryDetails(?array $airItineraryDetails = null): self
    {
        $this->AirItineraryDetails = $airItineraryDetails;
        
        return $this;
    }
    /**
     * Add item to AirItineraryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirItineraryDetails $item
     * @return \Travelport\UniversalRecord\StructType\MerchandisingDetails
     */
    public function addToAirItineraryDetails(\Travelport\UniversalRecord\StructType\AirItineraryDetails $item): self
    {
        $this->AirItineraryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @return \Travelport\UniversalRecord\StructType\MerchandisingDetails
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode $item
     * @return \Travelport\UniversalRecord\StructType\MerchandisingDetails
     */
    public function addToAccountCode(\Travelport\UniversalRecord\StructType\AccountCode $item): self
    {
        $this->AccountCode[] = $item;
        
        return $this;
    }
}
