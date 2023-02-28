<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\Util\StructType\Connection|null
     */
    protected ?\Travelport\Util\StructType\Connection $Connection = null;
    /**
     * The Meals
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Meals
     * @var string[]
     */
    protected ?array $Meals = null;
    /**
     * The InFlightServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: InFlightServices
     * @var string[]
     */
    protected ?array $InFlightServices = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $Equipment = null;
    /**
     * The OnTimePerformance
     * Meta information extracted from the WSDL
     * - documentation: Represents flight on time performance as a percentage from 0 to 100
     * - use: optional
     * @var int|null
     */
    protected ?int $OnTimePerformance = null;
    /**
     * The OriginTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginTerminal = null;
    /**
     * The DestinationTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DestinationTerminal = null;
    /**
     * The GroundTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $GroundTime = null;
    /**
     * The AutomatedCheckin
     * Meta information extracted from the WSDL
     * - documentation: “True” indicates that the flight allows automated check-in. The default is “False”.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AutomatedCheckin = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The DepartureTime
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The FlightTime
     * @var int|null
     */
    protected ?int $FlightTime = null;
    /**
     * The TravelTime
     * @var int|null
     */
    protected ?int $TravelTime = null;
    /**
     * The Distance
     * @var int|null
     */
    protected ?int $Distance = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\Util\StructType\Connection $connection
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
    public function __construct(string $key, ?\Travelport\Util\StructType\Connection $connection = null, ?array $meals = null, ?array $inFlightServices = null, ?string $equipment = null, ?int $onTimePerformance = null, ?string $originTerminal = null, ?string $destinationTerminal = null, ?int $groundTime = null, ?bool $automatedCheckin = false, ?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $arrivalTime = null, ?int $flightTime = null, ?int $travelTime = null, ?int $distance = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\Util\StructType\Connection|null
     */
    public function getConnection(): ?\Travelport\Util\StructType\Connection
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\Util\StructType\Connection $connection
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setConnection(?\Travelport\Util\StructType\Connection $connection = null): self
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
     * This method is responsible for validating the value(s) passed to the setMeals method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeals method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMealsForArrayConstraintFromSetMeals(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightDetailsMealsItem) {
            // validation for constraint: enumeration
            if (!\Travelport\Util\EnumType\TypeMealService::valueIsValid($flightDetailsMealsItem)) {
                $invalidValues[] = is_object($flightDetailsMealsItem) ? get_class($flightDetailsMealsItem) : sprintf('%s(%s)', gettype($flightDetailsMealsItem), var_export($flightDetailsMealsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMealService', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Travelport\Util\EnumType\TypeMealService::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Meals value
     * @uses \Travelport\Util\EnumType\TypeMealService::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMealService::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $meals
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setMeals(?array $meals = null): self
    {
        // validation for constraint: array
        if ('' !== ($mealsArrayErrorMessage = self::validateMealsForArrayConstraintFromSetMeals($meals))) {
            throw new InvalidArgumentException($mealsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($meals) && count($meals) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($meals)), __LINE__);
        }
        $this->Meals = $meals;
        
        return $this;
    }
    /**
     * Add item to Meals value
     * @uses \Travelport\Util\EnumType\TypeMealService::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMealService::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function addToMeals(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMealService::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMealService', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Travelport\Util\EnumType\TypeMealService::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Meals) && count($this->Meals) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Meals)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setInFlightServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInFlightServices method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInFlightServicesForArrayConstraintFromSetInFlightServices(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightDetailsInFlightServicesItem) {
            // validation for constraint: itemType
            if (!is_string($flightDetailsInFlightServicesItem)) {
                $invalidValues[] = is_object($flightDetailsInFlightServicesItem) ? get_class($flightDetailsInFlightServicesItem) : sprintf('%s(%s)', gettype($flightDetailsInFlightServicesItem), var_export($flightDetailsInFlightServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InFlightServices property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InFlightServices value
     * @throws InvalidArgumentException
     * @param string[] $inFlightServices
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setInFlightServices(?array $inFlightServices = null): self
    {
        // validation for constraint: array
        if ('' !== ($inFlightServicesArrayErrorMessage = self::validateInFlightServicesForArrayConstraintFromSetInFlightServices($inFlightServices))) {
            throw new InvalidArgumentException($inFlightServicesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($inFlightServices) && count($inFlightServices) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($inFlightServices)), __LINE__);
        }
        $this->InFlightServices = $inFlightServices;
        
        return $this;
    }
    /**
     * Add item to InFlightServices value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function addToInFlightServices(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The InFlightServices property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->InFlightServices) && count($this->InFlightServices) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->InFlightServices)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setEquipment(?string $equipment = null): self
    {
        // validation for constraint: string
        if (!is_null($equipment) && !is_string($equipment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipment, true), gettype($equipment)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($equipment) && mb_strlen((string) $equipment) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $equipment)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setOnTimePerformance(?int $onTimePerformance = null): self
    {
        // validation for constraint: int
        if (!is_null($onTimePerformance) && !(is_int($onTimePerformance) || ctype_digit($onTimePerformance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($onTimePerformance, true), gettype($onTimePerformance)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setOriginTerminal(?string $originTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($originTerminal) && !is_string($originTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originTerminal, true), gettype($originTerminal)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setDestinationTerminal(?string $destinationTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationTerminal) && !is_string($destinationTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationTerminal, true), gettype($destinationTerminal)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setGroundTime(?int $groundTime = null): self
    {
        // validation for constraint: int
        if (!is_null($groundTime) && !(is_int($groundTime) || ctype_digit($groundTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groundTime, true), gettype($groundTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setAutomatedCheckin(?bool $automatedCheckin = false): self
    {
        // validation for constraint: boolean
        if (!is_null($automatedCheckin) && !is_bool($automatedCheckin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automatedCheckin, true), gettype($automatedCheckin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setFlightTime(?int $flightTime = null): self
    {
        // validation for constraint: int
        if (!is_null($flightTime) && !(is_int($flightTime) || ctype_digit($flightTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightTime, true), gettype($flightTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setTravelTime(?int $travelTime = null): self
    {
        // validation for constraint: int
        if (!is_null($travelTime) && !(is_int($travelTime) || ctype_digit($travelTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelTime, true), gettype($travelTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setDistance(?int $distance = null): self
    {
        // validation for constraint: int
        if (!is_null($distance) && !(is_int($distance) || ctype_digit($distance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distance, true), gettype($distance)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightDetails
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
