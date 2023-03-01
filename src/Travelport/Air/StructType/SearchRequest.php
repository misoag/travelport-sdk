<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Search parameters that were used in LFS request
 * @subpackage Structs
 */
class SearchRequest extends AbstractStructBase
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: Date and Time at which this entity departs. This does not include Time Zone information since it can be derived from origin location
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * @var string|null
     */
    public ?string $ClassOfService = null;
    /**
     * Constructor method for SearchRequest
     * @uses SearchRequest::setOrigin()
     * @uses SearchRequest::setDestination()
     * @uses SearchRequest::setDepartureTime()
     * @uses SearchRequest::setClassOfService()
     * @param string $origin
     * @param string $destination
     * @param string $departureTime
     * @param string $classOfService
     */
    public function __construct(?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $classOfService = null)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartureTime($departureTime)
            ->setClassOfService($classOfService);
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\SearchRequest
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\SearchRequest
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\Air\StructType\SearchRequest
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\Air\StructType\SearchRequest
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
}
