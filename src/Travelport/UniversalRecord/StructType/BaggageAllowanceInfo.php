<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowanceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Baggage allowance like URL,Height,Weight etc.
 * @subpackage Structs
 */
class BaggageAllowanceInfo extends BaseBaggageAllowanceInfo
{
    /**
     * The BagDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BagDetails
     * @var \Travelport\UniversalRecord\StructType\BagDetails[]
     */
    public ?array $BagDetails = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $TravelerType = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * Constructor method for BaggageAllowanceInfo
     * @uses BaggageAllowanceInfo::setBagDetails()
     * @uses BaggageAllowanceInfo::setTravelerType()
     * @uses BaggageAllowanceInfo::setFareInfoRef()
     * @param \Travelport\UniversalRecord\StructType\BagDetails[] $bagDetails
     * @param string $travelerType
     * @param string $fareInfoRef
     */
    public function __construct(?array $bagDetails = null, ?string $travelerType = null, ?string $fareInfoRef = null)
    {
        $this
            ->setBagDetails($bagDetails)
            ->setTravelerType($travelerType)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get BagDetails value
     * @return \Travelport\UniversalRecord\StructType\BagDetails[]
     */
    public function getBagDetails(): ?array
    {
        return $this->BagDetails;
    }
    /**
     * Set BagDetails value
     * @param \Travelport\UniversalRecord\StructType\BagDetails[] $bagDetails
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function setBagDetails(?array $bagDetails = null): self
    {
        $this->BagDetails = $bagDetails;
        
        return $this;
    }
    /**
     * Add item to BagDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BagDetails $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function addToBagDetails(\Travelport\UniversalRecord\StructType\BagDetails $item): self
    {
        $this->BagDetails[] = $item;
        
        return $this;
    }
    /**
     * Get TravelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
