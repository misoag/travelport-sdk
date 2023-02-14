<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Flight Time Table Response Details
 * @subpackage Structs
 */
class FlightTimeDetail extends AbstractStructBase
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
     * The DaysOfOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeDaysOfOperation|null
     */
    protected ?\Travelport\Util\StructType\TypeDaysOfOperation $DaysOfOperation = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\Util\StructType\Connection|null
     */
    protected ?\Travelport\Util\StructType\Connection $Connection = null;
    /**
     * The VendorCode
     * @var string|null
     */
    protected ?string $VendorCode = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    protected ?string $FlightNumber = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: Flight departure time
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: Flight arrival time
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The StopCount
     * @var int|null
     */
    protected ?int $StopCount = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $Equipment = null;
    /**
     * The ScheduleStartDate
     * Meta information extracted from the WSDL
     * - documentation: Flight time table search start date
     * @var string|null
     */
    protected ?string $ScheduleStartDate = null;
    /**
     * The ScheduleEndDate
     * Meta information extracted from the WSDL
     * - documentation: Flight time table search end date
     * @var string|null
     */
    protected ?string $ScheduleEndDate = null;
    /**
     * The DisplayOption
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has link (carrier specific) display option.
     * @var bool|null
     */
    protected ?bool $DisplayOption = null;
    /**
     * The OnTimePerformance
     * Meta information extracted from the WSDL
     * - documentation: On time performance indicator in percentage.
     * @var int|null
     */
    protected ?int $OnTimePerformance = null;
    /**
     * The DayChange
     * Meta information extracted from the WSDL
     * - documentation: Indicates if flight arrives on same day as departure, previous day, or next day. Like values 00 means Same day , 01 means next day, -1 mean Previous day etc.
     * @var int|null
     */
    protected ?int $DayChange = null;
    /**
     * The JourneyTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates total journey time in minutes.
     * @var int|null
     */
    protected ?int $JourneyTime = null;
    /**
     * The FlightTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates total flight time in minutes.
     * @var int|null
     */
    protected ?int $FlightTime = null;
    /**
     * The StartTerminal
     * Meta information extracted from the WSDL
     * - documentation: Flight start terminal code.
     * @var string|null
     */
    protected ?string $StartTerminal = null;
    /**
     * The EndTerminal
     * Meta information extracted from the WSDL
     * - documentation: Flight end terminal code.
     * @var string|null
     */
    protected ?string $EndTerminal = null;
    /**
     * The FirstIntermediateStop
     * Meta information extracted from the WSDL
     * - documentation: First intermediate stop after board point. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $FirstIntermediateStop = null;
    /**
     * The LastIntermediateStop
     * Meta information extracted from the WSDL
     * - documentation: Last intermediate stop before off point. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LastIntermediateStop = null;
    /**
     * The InsideAvailability
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * @var string|null
     */
    protected ?string $InsideAvailability = null;
    /**
     * The SecureSell
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 0
     * @var string|null
     */
    protected ?string $SecureSell = null;
    /**
     * The AvailabilitySource
     * Meta information extracted from the WSDL
     * - documentation: Availability Source value for Sell.
     * - base: xs:string
     * - maxLength: 1
     * @var string|null
     */
    protected ?string $AvailabilitySource = null;
    /**
     * Constructor method for FlightTimeDetail
     * @uses FlightTimeDetail::setKey()
     * @uses FlightTimeDetail::setDaysOfOperation()
     * @uses FlightTimeDetail::setConnection()
     * @uses FlightTimeDetail::setVendorCode()
     * @uses FlightTimeDetail::setFlightNumber()
     * @uses FlightTimeDetail::setOrigin()
     * @uses FlightTimeDetail::setDestination()
     * @uses FlightTimeDetail::setDepartureTime()
     * @uses FlightTimeDetail::setArrivalTime()
     * @uses FlightTimeDetail::setStopCount()
     * @uses FlightTimeDetail::setEquipment()
     * @uses FlightTimeDetail::setScheduleStartDate()
     * @uses FlightTimeDetail::setScheduleEndDate()
     * @uses FlightTimeDetail::setDisplayOption()
     * @uses FlightTimeDetail::setOnTimePerformance()
     * @uses FlightTimeDetail::setDayChange()
     * @uses FlightTimeDetail::setJourneyTime()
     * @uses FlightTimeDetail::setFlightTime()
     * @uses FlightTimeDetail::setStartTerminal()
     * @uses FlightTimeDetail::setEndTerminal()
     * @uses FlightTimeDetail::setFirstIntermediateStop()
     * @uses FlightTimeDetail::setLastIntermediateStop()
     * @uses FlightTimeDetail::setInsideAvailability()
     * @uses FlightTimeDetail::setSecureSell()
     * @uses FlightTimeDetail::setAvailabilitySource()
     * @param string $key
     * @param \Travelport\Util\StructType\TypeDaysOfOperation $daysOfOperation
     * @param \Travelport\Util\StructType\Connection $connection
     * @param string $vendorCode
     * @param string $flightNumber
     * @param string $origin
     * @param string $destination
     * @param string $departureTime
     * @param string $arrivalTime
     * @param int $stopCount
     * @param string $equipment
     * @param string $scheduleStartDate
     * @param string $scheduleEndDate
     * @param bool $displayOption
     * @param int $onTimePerformance
     * @param int $dayChange
     * @param int $journeyTime
     * @param int $flightTime
     * @param string $startTerminal
     * @param string $endTerminal
     * @param string $firstIntermediateStop
     * @param string $lastIntermediateStop
     * @param string $insideAvailability
     * @param string $secureSell
     * @param string $availabilitySource
     */
    public function __construct(string $key, ?\Travelport\Util\StructType\TypeDaysOfOperation $daysOfOperation = null, ?\Travelport\Util\StructType\Connection $connection = null, ?string $vendorCode = null, ?string $flightNumber = null, ?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $arrivalTime = null, ?int $stopCount = null, ?string $equipment = null, ?string $scheduleStartDate = null, ?string $scheduleEndDate = null, ?bool $displayOption = null, ?int $onTimePerformance = null, ?int $dayChange = null, ?int $journeyTime = null, ?int $flightTime = null, ?string $startTerminal = null, ?string $endTerminal = null, ?string $firstIntermediateStop = null, ?string $lastIntermediateStop = null, ?string $insideAvailability = null, ?string $secureSell = null, ?string $availabilitySource = null)
    {
        $this
            ->setKey($key)
            ->setDaysOfOperation($daysOfOperation)
            ->setConnection($connection)
            ->setVendorCode($vendorCode)
            ->setFlightNumber($flightNumber)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setStopCount($stopCount)
            ->setEquipment($equipment)
            ->setScheduleStartDate($scheduleStartDate)
            ->setScheduleEndDate($scheduleEndDate)
            ->setDisplayOption($displayOption)
            ->setOnTimePerformance($onTimePerformance)
            ->setDayChange($dayChange)
            ->setJourneyTime($journeyTime)
            ->setFlightTime($flightTime)
            ->setStartTerminal($startTerminal)
            ->setEndTerminal($endTerminal)
            ->setFirstIntermediateStop($firstIntermediateStop)
            ->setLastIntermediateStop($lastIntermediateStop)
            ->setInsideAvailability($insideAvailability)
            ->setSecureSell($secureSell)
            ->setAvailabilitySource($availabilitySource);
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * Get DaysOfOperation value
     * @return \Travelport\Util\StructType\TypeDaysOfOperation|null
     */
    public function getDaysOfOperation(): ?\Travelport\Util\StructType\TypeDaysOfOperation
    {
        return $this->DaysOfOperation;
    }
    /**
     * Set DaysOfOperation value
     * @param \Travelport\Util\StructType\TypeDaysOfOperation $daysOfOperation
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setDaysOfOperation(?\Travelport\Util\StructType\TypeDaysOfOperation $daysOfOperation = null): self
    {
        $this->DaysOfOperation = $daysOfOperation;
        
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setConnection(?\Travelport\Util\StructType\Connection $connection = null): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumber) && mb_strlen((string) $flightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * Get StopCount value
     * @return int|null
     */
    public function getStopCount(): ?int
    {
        return $this->StopCount;
    }
    /**
     * Set StopCount value
     * @param int $stopCount
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setStopCount(?int $stopCount = null): self
    {
        // validation for constraint: int
        if (!is_null($stopCount) && !(is_int($stopCount) || ctype_digit($stopCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stopCount, true), gettype($stopCount)), __LINE__);
        }
        $this->StopCount = $stopCount;
        
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * Get ScheduleStartDate value
     * @return string|null
     */
    public function getScheduleStartDate(): ?string
    {
        return $this->ScheduleStartDate;
    }
    /**
     * Set ScheduleStartDate value
     * @param string $scheduleStartDate
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setScheduleStartDate(?string $scheduleStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduleStartDate) && !is_string($scheduleStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleStartDate, true), gettype($scheduleStartDate)), __LINE__);
        }
        $this->ScheduleStartDate = $scheduleStartDate;
        
        return $this;
    }
    /**
     * Get ScheduleEndDate value
     * @return string|null
     */
    public function getScheduleEndDate(): ?string
    {
        return $this->ScheduleEndDate;
    }
    /**
     * Set ScheduleEndDate value
     * @param string $scheduleEndDate
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setScheduleEndDate(?string $scheduleEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduleEndDate) && !is_string($scheduleEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleEndDate, true), gettype($scheduleEndDate)), __LINE__);
        }
        $this->ScheduleEndDate = $scheduleEndDate;
        
        return $this;
    }
    /**
     * Get DisplayOption value
     * @return bool|null
     */
    public function getDisplayOption(): ?bool
    {
        return $this->DisplayOption;
    }
    /**
     * Set DisplayOption value
     * @param bool $displayOption
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setDisplayOption(?bool $displayOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($displayOption) && !is_bool($displayOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayOption, true), gettype($displayOption)), __LINE__);
        }
        $this->DisplayOption = $displayOption;
        
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * Get DayChange value
     * @return int|null
     */
    public function getDayChange(): ?int
    {
        return $this->DayChange;
    }
    /**
     * Set DayChange value
     * @param int $dayChange
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setDayChange(?int $dayChange = null): self
    {
        // validation for constraint: int
        if (!is_null($dayChange) && !(is_int($dayChange) || ctype_digit($dayChange))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayChange, true), gettype($dayChange)), __LINE__);
        }
        $this->DayChange = $dayChange;
        
        return $this;
    }
    /**
     * Get JourneyTime value
     * @return int|null
     */
    public function getJourneyTime(): ?int
    {
        return $this->JourneyTime;
    }
    /**
     * Set JourneyTime value
     * @param int $journeyTime
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setJourneyTime(?int $journeyTime = null): self
    {
        // validation for constraint: int
        if (!is_null($journeyTime) && !(is_int($journeyTime) || ctype_digit($journeyTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journeyTime, true), gettype($journeyTime)), __LINE__);
        }
        $this->JourneyTime = $journeyTime;
        
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
     * @return \Travelport\Util\StructType\FlightTimeDetail
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
     * Get StartTerminal value
     * @return string|null
     */
    public function getStartTerminal(): ?string
    {
        return $this->StartTerminal;
    }
    /**
     * Set StartTerminal value
     * @param string $startTerminal
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setStartTerminal(?string $startTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($startTerminal) && !is_string($startTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTerminal, true), gettype($startTerminal)), __LINE__);
        }
        $this->StartTerminal = $startTerminal;
        
        return $this;
    }
    /**
     * Get EndTerminal value
     * @return string|null
     */
    public function getEndTerminal(): ?string
    {
        return $this->EndTerminal;
    }
    /**
     * Set EndTerminal value
     * @param string $endTerminal
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setEndTerminal(?string $endTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($endTerminal) && !is_string($endTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTerminal, true), gettype($endTerminal)), __LINE__);
        }
        $this->EndTerminal = $endTerminal;
        
        return $this;
    }
    /**
     * Get FirstIntermediateStop value
     * @return string|null
     */
    public function getFirstIntermediateStop(): ?string
    {
        return $this->FirstIntermediateStop;
    }
    /**
     * Set FirstIntermediateStop value
     * @param string $firstIntermediateStop
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setFirstIntermediateStop(?string $firstIntermediateStop = null): self
    {
        // validation for constraint: string
        if (!is_null($firstIntermediateStop) && !is_string($firstIntermediateStop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstIntermediateStop, true), gettype($firstIntermediateStop)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($firstIntermediateStop) && mb_strlen((string) $firstIntermediateStop) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $firstIntermediateStop)), __LINE__);
        }
        $this->FirstIntermediateStop = $firstIntermediateStop;
        
        return $this;
    }
    /**
     * Get LastIntermediateStop value
     * @return string|null
     */
    public function getLastIntermediateStop(): ?string
    {
        return $this->LastIntermediateStop;
    }
    /**
     * Set LastIntermediateStop value
     * @param string $lastIntermediateStop
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setLastIntermediateStop(?string $lastIntermediateStop = null): self
    {
        // validation for constraint: string
        if (!is_null($lastIntermediateStop) && !is_string($lastIntermediateStop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastIntermediateStop, true), gettype($lastIntermediateStop)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($lastIntermediateStop) && mb_strlen((string) $lastIntermediateStop) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $lastIntermediateStop)), __LINE__);
        }
        $this->LastIntermediateStop = $lastIntermediateStop;
        
        return $this;
    }
    /**
     * Get InsideAvailability value
     * @return string|null
     */
    public function getInsideAvailability(): ?string
    {
        return $this->InsideAvailability;
    }
    /**
     * Set InsideAvailability value
     * @param string $insideAvailability
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setInsideAvailability(?string $insideAvailability = null): self
    {
        // validation for constraint: string
        if (!is_null($insideAvailability) && !is_string($insideAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insideAvailability, true), gettype($insideAvailability)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($insideAvailability) && mb_strlen((string) $insideAvailability) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $insideAvailability)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($insideAvailability) && mb_strlen((string) $insideAvailability) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $insideAvailability)), __LINE__);
        }
        $this->InsideAvailability = $insideAvailability;
        
        return $this;
    }
    /**
     * Get SecureSell value
     * @return string|null
     */
    public function getSecureSell(): ?string
    {
        return $this->SecureSell;
    }
    /**
     * Set SecureSell value
     * @param string $secureSell
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setSecureSell(?string $secureSell = null): self
    {
        // validation for constraint: string
        if (!is_null($secureSell) && !is_string($secureSell)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secureSell, true), gettype($secureSell)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($secureSell) && mb_strlen((string) $secureSell) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $secureSell)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($secureSell) && mb_strlen((string) $secureSell) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $secureSell)), __LINE__);
        }
        $this->SecureSell = $secureSell;
        
        return $this;
    }
    /**
     * Get AvailabilitySource value
     * @return string|null
     */
    public function getAvailabilitySource(): ?string
    {
        return $this->AvailabilitySource;
    }
    /**
     * Set AvailabilitySource value
     * @param string $availabilitySource
     * @return \Travelport\Util\StructType\FlightTimeDetail
     */
    public function setAvailabilitySource(?string $availabilitySource = null): self
    {
        // validation for constraint: string
        if (!is_null($availabilitySource) && !is_string($availabilitySource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilitySource, true), gettype($availabilitySource)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($availabilitySource) && mb_strlen((string) $availabilitySource) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $availabilitySource)), __LINE__);
        }
        $this->AvailabilitySource = $availabilitySource;
        
        return $this;
    }
}
