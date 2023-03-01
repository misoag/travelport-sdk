<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightInfoDetail StructType
 * @subpackage Structs
 */
class FlightInfoDetail extends AbstractStructBase
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The CodeshareInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CodeshareInfo
     * @var \Travelport\Air\StructType\CodeshareInfo|null
     */
    public ?\Travelport\Air\StructType\CodeshareInfo $CodeshareInfo = null;
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
     * The Variance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Variance
     * @var \Travelport\Air\StructType\Variance[]
     */
    public ?array $Variance = null;
    /**
     * The ScheduledDepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity is scheduled to depart. This does not include time zone information since it can be derived from the origin location.
     * - use: optional
     * @var string|null
     */
    public ?string $ScheduledDepartureTime = null;
    /**
     * The ScheduledArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity is scheduled to arrive at the destination. This does not include time zone information since it can be derived from the origin location.
     * - use: optional
     * @var string|null
     */
    public ?string $ScheduledArrivalTime = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total time spent (minutes) traveling including flight time and ground time.
     * - use: optional
     * @var int|null
     */
    public ?int $TravelTime = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: Identifies if this particular segment is E-Ticketable
     * - use: optional
     * @var string|null
     */
    public ?string $ETicketability = null;
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
     * The OriginTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $OriginTerminal = null;
    /**
     * The OriginGate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - use: optional
     * @var string|null
     */
    public ?string $OriginGate = null;
    /**
     * The DestinationTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DestinationTerminal = null;
    /**
     * The DestinationGate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - use: optional
     * @var string|null
     */
    public ?string $DestinationGate = null;
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
     * Constructor method for FlightInfoDetail
     * @uses FlightInfoDetail::setOrigin()
     * @uses FlightInfoDetail::setDestination()
     * @uses FlightInfoDetail::setCodeshareInfo()
     * @uses FlightInfoDetail::setMeals()
     * @uses FlightInfoDetail::setInFlightServices()
     * @uses FlightInfoDetail::setVariance()
     * @uses FlightInfoDetail::setScheduledDepartureTime()
     * @uses FlightInfoDetail::setScheduledArrivalTime()
     * @uses FlightInfoDetail::setTravelTime()
     * @uses FlightInfoDetail::setETicketability()
     * @uses FlightInfoDetail::setEquipment()
     * @uses FlightInfoDetail::setOriginTerminal()
     * @uses FlightInfoDetail::setOriginGate()
     * @uses FlightInfoDetail::setDestinationTerminal()
     * @uses FlightInfoDetail::setDestinationGate()
     * @uses FlightInfoDetail::setAutomatedCheckin()
     * @param string $origin
     * @param string $destination
     * @param \Travelport\Air\StructType\CodeshareInfo $codeshareInfo
     * @param string[] $meals
     * @param string[] $inFlightServices
     * @param \Travelport\Air\StructType\Variance[] $variance
     * @param string $scheduledDepartureTime
     * @param string $scheduledArrivalTime
     * @param int $travelTime
     * @param string $eTicketability
     * @param string $equipment
     * @param string $originTerminal
     * @param string $originGate
     * @param string $destinationTerminal
     * @param string $destinationGate
     * @param bool $automatedCheckin
     */
    public function __construct(string $origin, string $destination, ?\Travelport\Air\StructType\CodeshareInfo $codeshareInfo = null, ?array $meals = null, ?array $inFlightServices = null, ?array $variance = null, ?string $scheduledDepartureTime = null, ?string $scheduledArrivalTime = null, ?int $travelTime = null, ?string $eTicketability = null, ?string $equipment = null, ?string $originTerminal = null, ?string $originGate = null, ?string $destinationTerminal = null, ?string $destinationGate = null, ?bool $automatedCheckin = false)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCodeshareInfo($codeshareInfo)
            ->setMeals($meals)
            ->setInFlightServices($inFlightServices)
            ->setVariance($variance)
            ->setScheduledDepartureTime($scheduledDepartureTime)
            ->setScheduledArrivalTime($scheduledArrivalTime)
            ->setTravelTime($travelTime)
            ->setETicketability($eTicketability)
            ->setEquipment($equipment)
            ->setOriginTerminal($originTerminal)
            ->setOriginGate($originGate)
            ->setDestinationTerminal($destinationTerminal)
            ->setDestinationGate($destinationGate)
            ->setAutomatedCheckin($automatedCheckin);
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get CodeshareInfo value
     * @return \Travelport\Air\StructType\CodeshareInfo|null
     */
    public function getCodeshareInfo(): ?\Travelport\Air\StructType\CodeshareInfo
    {
        return $this->CodeshareInfo;
    }
    /**
     * Set CodeshareInfo value
     * @param \Travelport\Air\StructType\CodeshareInfo $codeshareInfo
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setCodeshareInfo(?\Travelport\Air\StructType\CodeshareInfo $codeshareInfo = null): self
    {
        $this->CodeshareInfo = $codeshareInfo;
        
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setMeals(?array $meals = null): self
    {
        $this->Meals = $meals;
        
        return $this;
    }
    /**
     * Add item to Meals value
     * @uses \Travelport\Air\EnumType\TypeMealService::valueIsValid()
     * @uses \Travelport\Air\EnumType\TypeMealService::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\FlightInfoDetail
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function addToInFlightServices(string $item): self
    {
        $this->InFlightServices[] = $item;
        
        return $this;
    }
    /**
     * Get Variance value
     * @return \Travelport\Air\StructType\Variance[]
     */
    public function getVariance(): ?array
    {
        return $this->Variance;
    }
    /**
     * Set Variance value
     * @param \Travelport\Air\StructType\Variance[] $variance
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setVariance(?array $variance = null): self
    {
        $this->Variance = $variance;
        
        return $this;
    }
    /**
     * Add item to Variance value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Variance $item
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function addToVariance(\Travelport\Air\StructType\Variance $item): self
    {
        $this->Variance[] = $item;
        
        return $this;
    }
    /**
     * Get ScheduledDepartureTime value
     * @return string|null
     */
    public function getScheduledDepartureTime(): ?string
    {
        return $this->ScheduledDepartureTime;
    }
    /**
     * Set ScheduledDepartureTime value
     * @param string $scheduledDepartureTime
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setScheduledDepartureTime(?string $scheduledDepartureTime = null): self
    {
        $this->ScheduledDepartureTime = $scheduledDepartureTime;
        
        return $this;
    }
    /**
     * Get ScheduledArrivalTime value
     * @return string|null
     */
    public function getScheduledArrivalTime(): ?string
    {
        return $this->ScheduledArrivalTime;
    }
    /**
     * Set ScheduledArrivalTime value
     * @param string $scheduledArrivalTime
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setScheduledArrivalTime(?string $scheduledArrivalTime = null): self
    {
        $this->ScheduledArrivalTime = $scheduledArrivalTime;
        
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setTravelTime(?int $travelTime = null): self
    {
        $this->TravelTime = $travelTime;
        
        return $this;
    }
    /**
     * Get ETicketability value
     * @return string|null
     */
    public function getETicketability(): ?string
    {
        return $this->ETicketability;
    }
    /**
     * Set ETicketability value
     * @param string $eTicketability
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setETicketability(?string $eTicketability = null): self
    {
        $this->ETicketability = $eTicketability;
        
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setEquipment(?string $equipment = null): self
    {
        $this->Equipment = $equipment;
        
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setOriginTerminal(?string $originTerminal = null): self
    {
        $this->OriginTerminal = $originTerminal;
        
        return $this;
    }
    /**
     * Get OriginGate value
     * @return string|null
     */
    public function getOriginGate(): ?string
    {
        return $this->OriginGate;
    }
    /**
     * Set OriginGate value
     * @param string $originGate
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setOriginGate(?string $originGate = null): self
    {
        $this->OriginGate = $originGate;
        
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setDestinationTerminal(?string $destinationTerminal = null): self
    {
        $this->DestinationTerminal = $destinationTerminal;
        
        return $this;
    }
    /**
     * Get DestinationGate value
     * @return string|null
     */
    public function getDestinationGate(): ?string
    {
        return $this->DestinationGate;
    }
    /**
     * Set DestinationGate value
     * @param string $destinationGate
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setDestinationGate(?string $destinationGate = null): self
    {
        $this->DestinationGate = $destinationGate;
        
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
     * @return \Travelport\Air\StructType\FlightInfoDetail
     */
    public function setAutomatedCheckin(?bool $automatedCheckin = false): self
    {
        $this->AutomatedCheckin = $automatedCheckin;
        
        return $this;
    }
}
