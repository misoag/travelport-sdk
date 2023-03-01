<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightInfo StructType
 * @subpackage Structs
 */
class FlightInfo extends AbstractStructBase
{
    /**
     * The CriteriaKey
     * Meta information extracted from the WSDL
     * - documentation: An identifier to link the flightinfo responses to the criteria in request. The value populated here is passed in request. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $CriteriaKey;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FlightNumber;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    public string $DepartureDate;
    /**
     * The FlightInfoDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightInfoDetail
     * @var \Travelport\UniversalRecord\StructType\FlightInfoDetail[]
     */
    public ?array $FlightInfoDetail = null;
    /**
     * The FlightInfoErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the Flight referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public ?array $FlightInfoErrorMessage = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ClassOfService = null;
    /**
     * Constructor method for FlightInfo
     * @uses FlightInfo::setCriteriaKey()
     * @uses FlightInfo::setCarrier()
     * @uses FlightInfo::setFlightNumber()
     * @uses FlightInfo::setDepartureDate()
     * @uses FlightInfo::setFlightInfoDetail()
     * @uses FlightInfo::setFlightInfoErrorMessage()
     * @uses FlightInfo::setOrigin()
     * @uses FlightInfo::setDestination()
     * @uses FlightInfo::setClassOfService()
     * @param string $criteriaKey
     * @param string $carrier
     * @param string $flightNumber
     * @param string $departureDate
     * @param \Travelport\UniversalRecord\StructType\FlightInfoDetail[] $flightInfoDetail
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $flightInfoErrorMessage
     * @param string $origin
     * @param string $destination
     * @param string $classOfService
     */
    public function __construct(string $criteriaKey, string $carrier, string $flightNumber, string $departureDate, ?array $flightInfoDetail = null, ?array $flightInfoErrorMessage = null, ?string $origin = null, ?string $destination = null, ?string $classOfService = null)
    {
        $this
            ->setCriteriaKey($criteriaKey)
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setDepartureDate($departureDate)
            ->setFlightInfoDetail($flightInfoDetail)
            ->setFlightInfoErrorMessage($flightInfoErrorMessage)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setClassOfService($classOfService);
    }
    /**
     * Get CriteriaKey value
     * @return string
     */
    public function getCriteriaKey(): string
    {
        return $this->CriteriaKey;
    }
    /**
     * Set CriteriaKey value
     * @param string $criteriaKey
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setCriteriaKey(string $criteriaKey): self
    {
        $this->CriteriaKey = $criteriaKey;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setFlightNumber(string $flightNumber): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setDepartureDate(string $departureDate): self
    {
        $this->DepartureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get FlightInfoDetail value
     * @return \Travelport\UniversalRecord\StructType\FlightInfoDetail[]
     */
    public function getFlightInfoDetail(): ?array
    {
        return $this->FlightInfoDetail;
    }
    /**
     * Set FlightInfoDetail value
     * @param \Travelport\UniversalRecord\StructType\FlightInfoDetail[] $flightInfoDetail
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setFlightInfoDetail(?array $flightInfoDetail = null): self
    {
        $this->FlightInfoDetail = $flightInfoDetail;
        
        return $this;
    }
    /**
     * Add item to FlightInfoDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightInfoDetail $item
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function addToFlightInfoDetail(\Travelport\UniversalRecord\StructType\FlightInfoDetail $item): self
    {
        $this->FlightInfoDetail[] = $item;
        
        return $this;
    }
    /**
     * Get FlightInfoErrorMessage value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public function getFlightInfoErrorMessage(): ?array
    {
        return $this->FlightInfoErrorMessage;
    }
    /**
     * Set FlightInfoErrorMessage value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $flightInfoErrorMessage
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setFlightInfoErrorMessage(?array $flightInfoErrorMessage = null): self
    {
        $this->FlightInfoErrorMessage = $flightInfoErrorMessage;
        
        return $this;
    }
    /**
     * Add item to FlightInfoErrorMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $item
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function addToFlightInfoErrorMessage(\Travelport\UniversalRecord\StructType\TypeResultMessage $item): self
    {
        $this->FlightInfoErrorMessage[] = $item;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
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
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
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
     * @return \Travelport\UniversalRecord\StructType\FlightInfo
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
}
