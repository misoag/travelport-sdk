<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Origin;
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
    protected string $Destination;
    /**
     * The CodeshareInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CodeshareInfo
     * @var \Travelport\Util\StructType\CodeshareInfo|null
     */
    protected ?\Travelport\Util\StructType\CodeshareInfo $CodeshareInfo = null;
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
     * The Variance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Variance
     * @var \Travelport\Util\StructType\Variance[]
     */
    protected ?array $Variance = null;
    /**
     * The ScheduledDepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity is scheduled to depart. This does not include time zone information since it can be derived from the origin location.
     * - use: optional
     * @var string|null
     */
    protected ?string $ScheduledDepartureTime = null;
    /**
     * The ScheduledArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity is scheduled to arrive at the destination. This does not include time zone information since it can be derived from the origin location.
     * - use: optional
     * @var string|null
     */
    protected ?string $ScheduledArrivalTime = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total time spent (minutes) traveling including flight time and ground time.
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelTime = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: Identifies if this particular segment is E-Ticketable
     * - use: optional
     * @var string|null
     */
    protected ?string $ETicketability = null;
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
     * The OriginTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginTerminal = null;
    /**
     * The OriginGate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginGate = null;
    /**
     * The DestinationTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DestinationTerminal = null;
    /**
     * The DestinationGate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - use: optional
     * @var string|null
     */
    protected ?string $DestinationGate = null;
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
     * @param \Travelport\Util\StructType\CodeshareInfo $codeshareInfo
     * @param string[] $meals
     * @param string[] $inFlightServices
     * @param \Travelport\Util\StructType\Variance[] $variance
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
    public function __construct(string $origin, string $destination, ?\Travelport\Util\StructType\CodeshareInfo $codeshareInfo = null, ?array $meals = null, ?array $inFlightServices = null, ?array $variance = null, ?string $scheduledDepartureTime = null, ?string $scheduledArrivalTime = null, ?int $travelTime = null, ?string $eTicketability = null, ?string $equipment = null, ?string $originTerminal = null, ?string $originGate = null, ?string $destinationTerminal = null, ?string $destinationGate = null, ?bool $automatedCheckin = false)
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setOrigin(string $origin): self
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
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setDestination(string $destination): self
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
     * Get CodeshareInfo value
     * @return \Travelport\Util\StructType\CodeshareInfo|null
     */
    public function getCodeshareInfo(): ?\Travelport\Util\StructType\CodeshareInfo
    {
        return $this->CodeshareInfo;
    }
    /**
     * Set CodeshareInfo value
     * @param \Travelport\Util\StructType\CodeshareInfo $codeshareInfo
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setCodeshareInfo(?\Travelport\Util\StructType\CodeshareInfo $codeshareInfo = null): self
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
     * This method is responsible for validating the values passed to the setMeals method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeals method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMealsForArrayConstraintsFromSetMeals(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightInfoDetailMealsItem) {
            // validation for constraint: enumeration
            if (!\Travelport\Util\EnumType\TypeMealService::valueIsValid($flightInfoDetailMealsItem)) {
                $invalidValues[] = is_object($flightInfoDetailMealsItem) ? get_class($flightInfoDetailMealsItem) : sprintf('%s(%s)', gettype($flightInfoDetailMealsItem), var_export($flightInfoDetailMealsItem, true));
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setMeals(?array $meals = null): self
    {
        // validation for constraint: array
        if ('' !== ($mealsArrayErrorMessage = self::validateMealsForArrayConstraintsFromSetMeals($meals))) {
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
     * This method is responsible for validating the values passed to the setInFlightServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInFlightServices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInFlightServicesForArrayConstraintsFromSetInFlightServices(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightInfoDetailInFlightServicesItem) {
            // validation for constraint: itemType
            if (!is_string($flightInfoDetailInFlightServicesItem)) {
                $invalidValues[] = is_object($flightInfoDetailInFlightServicesItem) ? get_class($flightInfoDetailInFlightServicesItem) : sprintf('%s(%s)', gettype($flightInfoDetailInFlightServicesItem), var_export($flightInfoDetailInFlightServicesItem, true));
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setInFlightServices(?array $inFlightServices = null): self
    {
        // validation for constraint: array
        if ('' !== ($inFlightServicesArrayErrorMessage = self::validateInFlightServicesForArrayConstraintsFromSetInFlightServices($inFlightServices))) {
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
     * Get Variance value
     * @return \Travelport\Util\StructType\Variance[]
     */
    public function getVariance(): ?array
    {
        return $this->Variance;
    }
    /**
     * This method is responsible for validating the values passed to the setVariance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVarianceForArrayConstraintsFromSetVariance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightInfoDetailVarianceItem) {
            // validation for constraint: itemType
            if (!$flightInfoDetailVarianceItem instanceof \Travelport\Util\StructType\Variance) {
                $invalidValues[] = is_object($flightInfoDetailVarianceItem) ? get_class($flightInfoDetailVarianceItem) : sprintf('%s(%s)', gettype($flightInfoDetailVarianceItem), var_export($flightInfoDetailVarianceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Variance property can only contain items of type \Travelport\Util\StructType\Variance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Variance value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Variance[] $variance
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setVariance(?array $variance = null): self
    {
        // validation for constraint: array
        if ('' !== ($varianceArrayErrorMessage = self::validateVarianceForArrayConstraintsFromSetVariance($variance))) {
            throw new InvalidArgumentException($varianceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($variance) && count($variance) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($variance)), __LINE__);
        }
        $this->Variance = $variance;
        
        return $this;
    }
    /**
     * Add item to Variance value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Variance $item
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function addToVariance(\Travelport\Util\StructType\Variance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Variance) {
            throw new InvalidArgumentException(sprintf('The Variance property can only contain items of type \Travelport\Util\StructType\Variance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Variance) && count($this->Variance) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Variance)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setScheduledDepartureTime(?string $scheduledDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduledDepartureTime) && !is_string($scheduledDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledDepartureTime, true), gettype($scheduledDepartureTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setScheduledArrivalTime(?string $scheduledArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduledArrivalTime) && !is_string($scheduledArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledArrivalTime, true), gettype($scheduledArrivalTime)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
     * Get ETicketability value
     * @return string|null
     */
    public function getETicketability(): ?string
    {
        return $this->ETicketability;
    }
    /**
     * Set ETicketability value
     * @uses \Travelport\Util\EnumType\TypeEticketability::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeEticketability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eTicketability
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setETicketability(?string $eTicketability = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeEticketability::valueIsValid($eTicketability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeEticketability', is_array($eTicketability) ? implode(', ', $eTicketability) : var_export($eTicketability, true), implode(', ', \Travelport\Util\EnumType\TypeEticketability::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setOriginGate(?string $originGate = null): self
    {
        // validation for constraint: string
        if (!is_null($originGate) && !is_string($originGate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originGate, true), gettype($originGate)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($originGate) && mb_strlen((string) $originGate) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $originGate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
     */
    public function setDestinationGate(?string $destinationGate = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationGate) && !is_string($destinationGate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationGate, true), gettype($destinationGate)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($destinationGate) && mb_strlen((string) $destinationGate) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $destinationGate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FlightInfoDetail
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
}
