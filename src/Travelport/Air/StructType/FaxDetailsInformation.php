<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The FaxDetails
     * Meta information extracted from the WSDL
     * - ref: FaxDetails
     * @var \Travelport\Air\StructType\FaxDetails|null
     */
    public ?\Travelport\Air\StructType\FaxDetails $FaxDetails = null;
    /**
     * Constructor method for FaxDetailsInformation
     * @uses FaxDetailsInformation::setAirPricingInfoRef()
     * @uses FaxDetailsInformation::setFaxDetails()
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\Air\StructType\FaxDetails $faxDetails
     */
    public function __construct(?array $airPricingInfoRef = null, ?\Travelport\Air\StructType\FaxDetails $faxDetails = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFaxDetails($faxDetails);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Air\StructType\FaxDetailsInformation
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfoRef $item
     * @return \Travelport\Air\StructType\FaxDetailsInformation
     */
    public function addToAirPricingInfoRef(\Travelport\Air\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get FaxDetails value
     * @return \Travelport\Air\StructType\FaxDetails|null
     */
    public function getFaxDetails(): ?\Travelport\Air\StructType\FaxDetails
    {
        return $this->FaxDetails;
    }
    /**
     * Set FaxDetails value
     * @param \Travelport\Air\StructType\FaxDetails $faxDetails
     * @return \Travelport\Air\StructType\FaxDetailsInformation
     */
    public function setFaxDetails(?\Travelport\Air\StructType\FaxDetails $faxDetails = null): self
    {
        $this->FaxDetails = $faxDetails;
        
        return $this;
    }
}
