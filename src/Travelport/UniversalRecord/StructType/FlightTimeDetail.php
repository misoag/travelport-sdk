<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Key;
    /**
     * The DaysOfOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDaysOfOperation|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDaysOfOperation $DaysOfOperation = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\UniversalRecord\StructType\Connection|null
     */
    public ?\Travelport\UniversalRecord\StructType\Connection $Connection = null;
    /**
     * The VendorCode
     * @var string|null
     */
    public ?string $VendorCode = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    public ?string $FlightNumber = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: Flight departure time
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: Flight arrival time
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * The StopCount
     * @var int|null
     */
    public ?int $StopCount = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $Equipment = null;
    /**
     * The ScheduleStartDate
     * Meta information extracted from the WSDL
     * - documentation: Flight time table search start date
     * @var string|null
     */
    public ?string $ScheduleStartDate = null;
    /**
     * The ScheduleEndDate
     * Meta information extracted from the WSDL
     * - documentation: Flight time table search end date
     * @var string|null
     */
    public ?string $ScheduleEndDate = null;
    /**
     * The DisplayOption
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has link (carrier specific) display option.
     * @var bool|null
     */
    public ?bool $DisplayOption = null;
    /**
     * The OnTimePerformance
     * Meta information extracted from the WSDL
     * - documentation: On time performance indicator in percentage.
     * @var int|null
     */
    public ?int $OnTimePerformance = null;
    /**
     * The DayChange
     * Meta information extracted from the WSDL
     * - documentation: Indicates if flight arrives on same day as departure, previous day, or next day. Like values 00 means Same day , 01 means next day, -1 mean Previous day etc.
     * @var int|null
     */
    public ?int $DayChange = null;
    /**
     * The JourneyTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates total journey time in minutes.
     * @var int|null
     */
    public ?int $JourneyTime = null;
    /**
     * The FlightTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates total flight time in minutes.
     * @var int|null
     */
    public ?int $FlightTime = null;
    /**
     * The StartTerminal
     * Meta information extracted from the WSDL
     * - documentation: Flight start terminal code.
     * @var string|null
     */
    public ?string $StartTerminal = null;
    /**
     * The EndTerminal
     * Meta information extracted from the WSDL
     * - documentation: Flight end terminal code.
     * @var string|null
     */
    public ?string $EndTerminal = null;
    /**
     * The FirstIntermediateStop
     * Meta information extracted from the WSDL
     * - documentation: First intermediate stop after board point. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $FirstIntermediateStop = null;
    /**
     * The LastIntermediateStop
     * Meta information extracted from the WSDL
     * - documentation: Last intermediate stop before off point. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $LastIntermediateStop = null;
    /**
     * The InsideAvailability
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * @var string|null
     */
    public ?string $InsideAvailability = null;
    /**
     * The SecureSell
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 0
     * @var string|null
     */
    public ?string $SecureSell = null;
    /**
     * The AvailabilitySource
     * Meta information extracted from the WSDL
     * - documentation: Availability Source value for Sell.
     * - base: xs:string
     * - maxLength: 1
     * @var string|null
     */
    public ?string $AvailabilitySource = null;
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
     * @param \Travelport\UniversalRecord\StructType\TypeDaysOfOperation $daysOfOperation
     * @param \Travelport\UniversalRecord\StructType\Connection $connection
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
    public function __construct(string $key, ?\Travelport\UniversalRecord\StructType\TypeDaysOfOperation $daysOfOperation = null, ?\Travelport\UniversalRecord\StructType\Connection $connection = null, ?string $vendorCode = null, ?string $flightNumber = null, ?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $arrivalTime = null, ?int $stopCount = null, ?string $equipment = null, ?string $scheduleStartDate = null, ?string $scheduleEndDate = null, ?bool $displayOption = null, ?int $onTimePerformance = null, ?int $dayChange = null, ?int $journeyTime = null, ?int $flightTime = null, ?string $startTerminal = null, ?string $endTerminal = null, ?string $firstIntermediateStop = null, ?string $lastIntermediateStop = null, ?string $insideAvailability = null, ?string $secureSell = null, ?string $availabilitySource = null)
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get DaysOfOperation value
     * @return \Travelport\UniversalRecord\StructType\TypeDaysOfOperation|null
     */
    public function getDaysOfOperation(): ?\Travelport\UniversalRecord\StructType\TypeDaysOfOperation
    {
        return $this->DaysOfOperation;
    }
    /**
     * Set DaysOfOperation value
     * @param \Travelport\UniversalRecord\StructType\TypeDaysOfOperation $daysOfOperation
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setDaysOfOperation(?\Travelport\UniversalRecord\StructType\TypeDaysOfOperation $daysOfOperation = null): self
    {
        $this->DaysOfOperation = $daysOfOperation;
        
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setConnection(?\Travelport\UniversalRecord\StructType\Connection $connection = null): self
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setStopCount(?int $stopCount = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setEquipment(?string $equipment = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setScheduleStartDate(?string $scheduleStartDate = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setScheduleEndDate(?string $scheduleEndDate = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setDisplayOption(?bool $displayOption = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setOnTimePerformance(?int $onTimePerformance = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setDayChange(?int $dayChange = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setJourneyTime(?int $journeyTime = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setFlightTime(?int $flightTime = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setStartTerminal(?string $startTerminal = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setEndTerminal(?string $endTerminal = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setFirstIntermediateStop(?string $firstIntermediateStop = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setLastIntermediateStop(?string $lastIntermediateStop = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setInsideAvailability(?string $insideAvailability = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setSecureSell(?string $secureSell = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FlightTimeDetail
     */
    public function setAvailabilitySource(?string $availabilitySource = null): self
    {
        $this->AvailabilitySource = $availabilitySource;
        
        return $this;
    }
}
