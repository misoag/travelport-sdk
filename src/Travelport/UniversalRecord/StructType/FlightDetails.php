<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Specific details within a flight segment.
 * @subpackage Structs
 */
class FlightDetails extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\UniversalRecord\StructType\Connection|null
     */
    public ?\Travelport\UniversalRecord\StructType\Connection $Connection = null;
    /**
     * The Meals
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Meals
     * @var string[]
     */
    public ?array $Meals = null;
    /**
     * The InFlightServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: InFlightServices
     * @var string[]
     */
    public ?array $InFlightServices = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $Equipment = null;
    /**
     * The OnTimePerformance
     * Meta information extracted from the WSDL
     * - documentation: Represents flight on time performance as a percentage from 0 to 100
     * - use: optional
     * @var int|null
     */
    public ?int $OnTimePerformance = null;
    /**
     * The OriginTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $OriginTerminal = null;
    /**
     * The DestinationTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DestinationTerminal = null;
    /**
     * The GroundTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $GroundTime = null;
    /**
     * The AutomatedCheckin
     * Meta information extracted from the WSDL
     * - documentation: “True” indicates that the flight allows automated check-in. The default is “False”.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $AutomatedCheckin = null;
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
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * The FlightTime
     * @var int|null
     */
    public ?int $FlightTime = null;
    /**
     * The TravelTime
     * @var int|null
     */
    public ?int $TravelTime = null;
    /**
     * The Distance
     * @var int|null
     */
    public ?int $Distance = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for FlightDetails
     * @uses FlightDetails::setKey()
     * @uses FlightDetails::setConnection()
     * @uses FlightDetails::setMeals()
     * @uses FlightDetails::setInFlightServices()
     * @uses FlightDetails::setEquipment()
     * @uses FlightDetails::setOnTimePerformance()
     * @uses FlightDetails::setOriginTerminal()
     * @uses FlightDetails::setDestinationTerminal()
     * @uses FlightDetails::setGroundTime()
     * @uses FlightDetails::setAutomatedCheckin()
     * @uses FlightDetails::setOrigin()
     * @uses FlightDetails::setDestination()
     * @uses FlightDetails::setDepartureTime()
     * @uses FlightDetails::setArrivalTime()
     * @uses FlightDetails::setFlightTime()
     * @uses FlightDetails::setTravelTime()
     * @uses FlightDetails::setDistance()
     * @uses FlightDetails::setElStat()
     * @uses FlightDetails::setKeyOverride()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\Connection $connection
     * @param string[] $meals
     * @param string[] $inFlightServices
     * @param string $equipment
     * @param int $onTimePerformance
     * @param string $originTerminal
     * @param string $destinationTerminal
     * @param int $groundTime
     * @param bool $automatedCheckin
     * @param string $origin
     * @param string $destination
     * @param string $departureTime
     * @param string $arrivalTime
     * @param int $flightTime
     * @param int $travelTime
     * @param int $distance
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?\Travelport\UniversalRecord\StructType\Connection $connection = null, ?array $meals = null, ?array $inFlightServices = null, ?string $equipment = null, ?int $onTimePerformance = null, ?string $originTerminal = null, ?string $destinationTerminal = null, ?int $groundTime = null, ?bool $automatedCheckin = false, ?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $arrivalTime = null, ?int $flightTime = null, ?int $travelTime = null, ?int $distance = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setConnection($connection)
            ->setMeals($meals)
            ->setInFlightServices($inFlightServices)
            ->setEquipment($equipment)
            ->setOnTimePerformance($onTimePerformance)
            ->setOriginTerminal($originTerminal)
            ->setDestinationTerminal($destinationTerminal)
            ->setGroundTime($groundTime)
            ->setAutomatedCheckin($automatedCheckin)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setFlightTime($flightTime)
            ->setTravelTime($travelTime)
            ->setDistance($distance)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\UniversalRecord\StructType\Connection|null
     */
    public function getConnection(): ?\Travelport\UniversalRecord\StructType\Connection
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\UniversalRecord\StructType\Connection $connection
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setConnection(?\Travelport\UniversalRecord\StructType\Connection $connection = null): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Get Meals value
     * @return string[]
     */
    public function getMeals(): ?array
    {
        return $this->Meals;
    }
    /**
     * Set Meals value
     * @param string[] $meals
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setMeals(?array $meals = null): self
    {
        $this->Meals = $meals;
        
        return $this;
    }
    /**
     * Add item to Meals value
     * @uses \Travelport\UniversalRecord\EnumType\TypeMealService::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeMealService::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function addToMeals(string $item): self
    {
        $this->Meals[] = $item;
        
        return $this;
    }
    /**
     * Get InFlightServices value
     * @return string[]
     */
    public function getInFlightServices(): ?array
    {
        return $this->InFlightServices;
    }
    /**
     * Set InFlightServices value
     * @param string[] $inFlightServices
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setInFlightServices(?array $inFlightServices = null): self
    {
        $this->InFlightServices = $inFlightServices;
        
        return $this;
    }
    /**
     * Add item to InFlightServices value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function addToInFlightServices(string $item): self
    {
        $this->InFlightServices[] = $item;
        
        return $this;
    }
    /**
     * Get Equipment value
     * @return string|null
     */
    public function getEquipment(): ?string
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param string $equipment
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setEquipment(?string $equipment = null): self
    {
        $this->Equipment = $equipment;
        
        return $this;
    }
    /**
     * Get OnTimePerformance value
     * @return int|null
     */
    public function getOnTimePerformance(): ?int
    {
        return $this->OnTimePerformance;
    }
    /**
     * Set OnTimePerformance value
     * @param int $onTimePerformance
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setOnTimePerformance(?int $onTimePerformance = null): self
    {
        $this->OnTimePerformance = $onTimePerformance;
        
        return $this;
    }
    /**
     * Get OriginTerminal value
     * @return string|null
     */
    public function getOriginTerminal(): ?string
    {
        return $this->OriginTerminal;
    }
    /**
     * Set OriginTerminal value
     * @param string $originTerminal
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setOriginTerminal(?string $originTerminal = null): self
    {
        $this->OriginTerminal = $originTerminal;
        
        return $this;
    }
    /**
     * Get DestinationTerminal value
     * @return string|null
     */
    public function getDestinationTerminal(): ?string
    {
        return $this->DestinationTerminal;
    }
    /**
     * Set DestinationTerminal value
     * @param string $destinationTerminal
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setDestinationTerminal(?string $destinationTerminal = null): self
    {
        $this->DestinationTerminal = $destinationTerminal;
        
        return $this;
    }
    /**
     * Get GroundTime value
     * @return int|null
     */
    public function getGroundTime(): ?int
    {
        return $this->GroundTime;
    }
    /**
     * Set GroundTime value
     * @param int $groundTime
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setGroundTime(?int $groundTime = null): self
    {
        $this->GroundTime = $groundTime;
        
        return $this;
    }
    /**
     * Get AutomatedCheckin value
     * @return bool|null
     */
    public function getAutomatedCheckin(): ?bool
    {
        return $this->AutomatedCheckin;
    }
    /**
     * Set AutomatedCheckin value
     * @param bool $automatedCheckin
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setAutomatedCheckin(?bool $automatedCheckin = false): self
    {
        $this->AutomatedCheckin = $automatedCheckin;
        
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
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
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
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
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
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get FlightTime value
     * @return int|null
     */
    public function getFlightTime(): ?int
    {
        return $this->FlightTime;
    }
    /**
     * Set FlightTime value
     * @param int $flightTime
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setFlightTime(?int $flightTime = null): self
    {
        $this->FlightTime = $flightTime;
        
        return $this;
    }
    /**
     * Get TravelTime value
     * @return int|null
     */
    public function getTravelTime(): ?int
    {
        return $this->TravelTime;
    }
    /**
     * Set TravelTime value
     * @param int $travelTime
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setTravelTime(?int $travelTime = null): self
    {
        $this->TravelTime = $travelTime;
        
        return $this;
    }
    /**
     * Get Distance value
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param int $distance
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setDistance(?int $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\FlightDetails
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
