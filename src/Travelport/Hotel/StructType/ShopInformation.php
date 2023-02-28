<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Hotel\StructType\SearchRequest[]
     */
    protected ?array $SearchRequest = null;
    /**
     * The FlightsOffered
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\FlightsOffered[]
     */
    protected ?array $FlightsOffered = null;
    /**
     * The CabinShopped
     * @var string|null
     */
    protected ?string $CabinShopped = null;
    /**
     * The CabinSelected
     * @var string|null
     */
    protected ?string $CabinSelected = null;
    /**
     * The LowestFareOffered
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $LowestFareOffered = null;
    /**
     * Constructor method for ShopInformation
     * @uses ShopInformation::setSearchRequest()
     * @uses ShopInformation::setFlightsOffered()
     * @uses ShopInformation::setCabinShopped()
     * @uses ShopInformation::setCabinSelected()
     * @uses ShopInformation::setLowestFareOffered()
     * @param \Travelport\Hotel\StructType\SearchRequest[] $searchRequest
     * @param \Travelport\Hotel\StructType\FlightsOffered[] $flightsOffered
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
     * @return \Travelport\Hotel\StructType\SearchRequest[]
     */
    public function getSearchRequest(): ?array
    {
        return $this->SearchRequest;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchRequestForArrayConstraintFromSetSearchRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shopInformationSearchRequestItem) {
            // validation for constraint: itemType
            if (!$shopInformationSearchRequestItem instanceof \Travelport\Hotel\StructType\SearchRequest) {
                $invalidValues[] = is_object($shopInformationSearchRequestItem) ? get_class($shopInformationSearchRequestItem) : sprintf('%s(%s)', gettype($shopInformationSearchRequestItem), var_export($shopInformationSearchRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchRequest property can only contain items of type \Travelport\Hotel\StructType\SearchRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchRequest value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SearchRequest[] $searchRequest
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function setSearchRequest(?array $searchRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchRequestArrayErrorMessage = self::validateSearchRequestForArrayConstraintFromSetSearchRequest($searchRequest))) {
            throw new InvalidArgumentException($searchRequestArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchRequest) && count($searchRequest) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchRequest)), __LINE__);
        }
        $this->SearchRequest = $searchRequest;
        
        return $this;
    }
    /**
     * Add item to SearchRequest value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SearchRequest $item
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function addToSearchRequest(\Travelport\Hotel\StructType\SearchRequest $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\SearchRequest) {
            throw new InvalidArgumentException(sprintf('The SearchRequest property can only contain items of type \Travelport\Hotel\StructType\SearchRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchRequest) && count($this->SearchRequest) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchRequest)), __LINE__);
        }
        $this->SearchRequest[] = $item;
        
        return $this;
    }
    /**
     * Get FlightsOffered value
     * @return \Travelport\Hotel\StructType\FlightsOffered[]
     */
    public function getFlightsOffered(): ?array
    {
        return $this->FlightsOffered;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlightsOffered method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightsOffered method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightsOfferedForArrayConstraintFromSetFlightsOffered(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shopInformationFlightsOfferedItem) {
            // validation for constraint: itemType
            if (!$shopInformationFlightsOfferedItem instanceof \Travelport\Hotel\StructType\FlightsOffered) {
                $invalidValues[] = is_object($shopInformationFlightsOfferedItem) ? get_class($shopInformationFlightsOfferedItem) : sprintf('%s(%s)', gettype($shopInformationFlightsOfferedItem), var_export($shopInformationFlightsOfferedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightsOffered property can only contain items of type \Travelport\Hotel\StructType\FlightsOffered, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightsOffered value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\FlightsOffered[] $flightsOffered
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function setFlightsOffered(?array $flightsOffered = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightsOfferedArrayErrorMessage = self::validateFlightsOfferedForArrayConstraintFromSetFlightsOffered($flightsOffered))) {
            throw new InvalidArgumentException($flightsOfferedArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightsOffered) && count($flightsOffered) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightsOffered)), __LINE__);
        }
        $this->FlightsOffered = $flightsOffered;
        
        return $this;
    }
    /**
     * Add item to FlightsOffered value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\FlightsOffered $item
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function addToFlightsOffered(\Travelport\Hotel\StructType\FlightsOffered $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\FlightsOffered) {
            throw new InvalidArgumentException(sprintf('The FlightsOffered property can only contain items of type \Travelport\Hotel\StructType\FlightsOffered, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightsOffered) && count($this->FlightsOffered) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightsOffered)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function setCabinShopped(?string $cabinShopped = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinShopped) && !is_string($cabinShopped)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinShopped, true), gettype($cabinShopped)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function setCabinSelected(?string $cabinSelected = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinSelected) && !is_string($cabinSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinSelected, true), gettype($cabinSelected)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\ShopInformation
     */
    public function setLowestFareOffered(?string $lowestFareOffered = null): self
    {
        // validation for constraint: string
        if (!is_null($lowestFareOffered) && !is_string($lowestFareOffered)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lowestFareOffered, true), gettype($lowestFareOffered)), __LINE__);
        }
        $this->LowestFareOffered = $lowestFareOffered;
        
        return $this;
    }
}
