<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaxDetailsInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns related air pricing infos. | Container to send Fax details Information for ticketing
 * @subpackage Structs
 */
class FaxDetailsInformation extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The FaxDetails
     * Meta information extracted from the WSDL
     * - ref: FaxDetails
     * @var \Travelport\UniversalRecord\StructType\FaxDetails|null
     */
    public ?\Travelport\UniversalRecord\StructType\FaxDetails $FaxDetails = null;
    /**
     * Constructor method for FaxDetailsInformation
     * @uses FaxDetailsInformation::setAirPricingInfoRef()
     * @uses FaxDetailsInformation::setFaxDetails()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\FaxDetails $faxDetails
     */
    public function __construct(?array $airPricingInfoRef = null, ?\Travelport\UniversalRecord\StructType\FaxDetails $faxDetails = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFaxDetails($faxDetails);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\FaxDetailsInformation
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\FaxDetailsInformation
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get FaxDetails value
     * @return \Travelport\UniversalRecord\StructType\FaxDetails|null
     */
    public function getFaxDetails(): ?\Travelport\UniversalRecord\StructType\FaxDetails
    {
        return $this->FaxDetails;
    }
    /**
     * Set FaxDetails value
     * @param \Travelport\UniversalRecord\StructType\FaxDetails $faxDetails
     * @return \Travelport\UniversalRecord\StructType\FaxDetailsInformation
     */
    public function setFaxDetails(?\Travelport\UniversalRecord\StructType\FaxDetails $faxDetails = null): self
    {
        $this->FaxDetails = $faxDetails;
        
        return $this;
    }
}
