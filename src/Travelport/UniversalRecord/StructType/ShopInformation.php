<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShopInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Shopping Information required for File Finishing
 * @subpackage Structs
 */
class ShopInformation extends AbstractStructBase
{
    /**
     * The SearchRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SearchRequest[]
     */
    public ?array $SearchRequest = null;
    /**
     * The FlightsOffered
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FlightsOffered[]
     */
    public ?array $FlightsOffered = null;
    /**
     * The CabinShopped
     * @var string|null
     */
    public ?string $CabinShopped = null;
    /**
     * The CabinSelected
     * @var string|null
     */
    public ?string $CabinSelected = null;
    /**
     * The LowestFareOffered
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $LowestFareOffered = null;
    /**
     * Constructor method for ShopInformation
     * @uses ShopInformation::setSearchRequest()
     * @uses ShopInformation::setFlightsOffered()
     * @uses ShopInformation::setCabinShopped()
     * @uses ShopInformation::setCabinSelected()
     * @uses ShopInformation::setLowestFareOffered()
     * @param \Travelport\UniversalRecord\StructType\SearchRequest[] $searchRequest
     * @param \Travelport\UniversalRecord\StructType\FlightsOffered[] $flightsOffered
     * @param string $cabinShopped
     * @param string $cabinSelected
     * @param string $lowestFareOffered
     */
    public function __construct(?array $searchRequest = null, ?array $flightsOffered = null, ?string $cabinShopped = null, ?string $cabinSelected = null, ?string $lowestFareOffered = null)
    {
        $this
            ->setSearchRequest($searchRequest)
            ->setFlightsOffered($flightsOffered)
            ->setCabinShopped($cabinShopped)
            ->setCabinSelected($cabinSelected)
            ->setLowestFareOffered($lowestFareOffered);
    }
    /**
     * Get SearchRequest value
     * @return \Travelport\UniversalRecord\StructType\SearchRequest[]
     */
    public function getSearchRequest(): ?array
    {
        return $this->SearchRequest;
    }
    /**
     * Set SearchRequest value
     * @param \Travelport\UniversalRecord\StructType\SearchRequest[] $searchRequest
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function setSearchRequest(?array $searchRequest = null): self
    {
        $this->SearchRequest = $searchRequest;
        
        return $this;
    }
    /**
     * Add item to SearchRequest value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SearchRequest $item
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function addToSearchRequest(\Travelport\UniversalRecord\StructType\SearchRequest $item): self
    {
        $this->SearchRequest[] = $item;
        
        return $this;
    }
    /**
     * Get FlightsOffered value
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered[]
     */
    public function getFlightsOffered(): ?array
    {
        return $this->FlightsOffered;
    }
    /**
     * Set FlightsOffered value
     * @param \Travelport\UniversalRecord\StructType\FlightsOffered[] $flightsOffered
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function setFlightsOffered(?array $flightsOffered = null): self
    {
        $this->FlightsOffered = $flightsOffered;
        
        return $this;
    }
    /**
     * Add item to FlightsOffered value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightsOffered $item
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function addToFlightsOffered(\Travelport\UniversalRecord\StructType\FlightsOffered $item): self
    {
        $this->FlightsOffered[] = $item;
        
        return $this;
    }
    /**
     * Get CabinShopped value
     * @return string|null
     */
    public function getCabinShopped(): ?string
    {
        return $this->CabinShopped;
    }
    /**
     * Set CabinShopped value
     * @param string $cabinShopped
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function setCabinShopped(?string $cabinShopped = null): self
    {
        $this->CabinShopped = $cabinShopped;
        
        return $this;
    }
    /**
     * Get CabinSelected value
     * @return string|null
     */
    public function getCabinSelected(): ?string
    {
        return $this->CabinSelected;
    }
    /**
     * Set CabinSelected value
     * @param string $cabinSelected
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function setCabinSelected(?string $cabinSelected = null): self
    {
        $this->CabinSelected = $cabinSelected;
        
        return $this;
    }
    /**
     * Get LowestFareOffered value
     * @return string|null
     */
    public function getLowestFareOffered(): ?string
    {
        return $this->LowestFareOffered;
    }
    /**
     * Set LowestFareOffered value
     * @param string $lowestFareOffered
     * @return \Travelport\UniversalRecord\StructType\ShopInformation
     */
    public function setLowestFareOffered(?string $lowestFareOffered = null): self
    {
        $this->LowestFareOffered = $lowestFareOffered;
        
        return $this;
    }
}
