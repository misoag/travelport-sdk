<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralTimeTable StructType
 * @subpackage Structs
 */
class GeneralTimeTable extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $StartDate;
    /**
     * The DaysOfOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeDaysOfOperation|null
     */
    public ?\Travelport\Air\StructType\TypeDaysOfOperation $DaysOfOperation = null;
    /**
     * The FlightOrigin
     * @var \Travelport\Air\StructType\TypeLocation|null
     */
    public ?\Travelport\Air\StructType\TypeLocation $FlightOrigin = null;
    /**
     * The FlightDestination
     * @var \Travelport\Air\StructType\TypeLocation|null
     */
    public ?\Travelport\Air\StructType\TypeLocation $FlightDestination = null;
    /**
     * The CarrierList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CarrierList
     * @var \Travelport\Air\StructType\CarrierList|null
     */
    public ?\Travelport\Air\StructType\CarrierList $CarrierList = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $EndDate = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Flight start time of flight time tabel .
     * - use: optional
     * @var string|null
     */
    public ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Flight end time of flight time tabel .
     * - use: optional
     * @var string|null
     */
    public ?string $EndTime = null;
    /**
     * The IncludeConnection
     * Meta information extracted from the WSDL
     * - documentation: Include or exclude connecting flights.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeConnection = null;
    /**
     * Constructor method for GeneralTimeTable
     * @uses GeneralTimeTable::setStartDate()
     * @uses GeneralTimeTable::setDaysOfOperation()
     * @uses GeneralTimeTable::setFlightOrigin()
     * @uses GeneralTimeTable::setFlightDestination()
     * @uses GeneralTimeTable::setCarrierList()
     * @uses GeneralTimeTable::setEndDate()
     * @uses GeneralTimeTable::setStartTime()
     * @uses GeneralTimeTable::setEndTime()
     * @uses GeneralTimeTable::setIncludeConnection()
     * @param string $startDate
     * @param \Travelport\Air\StructType\TypeDaysOfOperation $daysOfOperation
     * @param \Travelport\Air\StructType\TypeLocation $flightOrigin
     * @param \Travelport\Air\StructType\TypeLocation $flightDestination
     * @param \Travelport\Air\StructType\CarrierList $carrierList
     * @param string $endDate
     * @param string $startTime
     * @param string $endTime
     * @param bool $includeConnection
     */
    public function __construct(string $startDate, ?\Travelport\Air\StructType\TypeDaysOfOperation $daysOfOperation = null, ?\Travelport\Air\StructType\TypeLocation $flightOrigin = null, ?\Travelport\Air\StructType\TypeLocation $flightDestination = null, ?\Travelport\Air\StructType\CarrierList $carrierList = null, ?string $endDate = null, ?string $startTime = null, ?string $endTime = null, ?bool $includeConnection = null)
    {
        $this
            ->setStartDate($startDate)
            ->setDaysOfOperation($daysOfOperation)
            ->setFlightOrigin($flightOrigin)
            ->setFlightDestination($flightDestination)
            ->setCarrierList($carrierList)
            ->setEndDate($endDate)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setIncludeConnection($includeConnection);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setStartDate(string $startDate): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get DaysOfOperation value
     * @return \Travelport\Air\StructType\TypeDaysOfOperation|null
     */
    public function getDaysOfOperation(): ?\Travelport\Air\StructType\TypeDaysOfOperation
    {
        return $this->DaysOfOperation;
    }
    /**
     * Set DaysOfOperation value
     * @param \Travelport\Air\StructType\TypeDaysOfOperation $daysOfOperation
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setDaysOfOperation(?\Travelport\Air\StructType\TypeDaysOfOperation $daysOfOperation = null): self
    {
        $this->DaysOfOperation = $daysOfOperation;
        
        return $this;
    }
    /**
     * Get FlightOrigin value
     * @return \Travelport\Air\StructType\TypeLocation|null
     */
    public function getFlightOrigin(): ?\Travelport\Air\StructType\TypeLocation
    {
        return $this->FlightOrigin;
    }
    /**
     * Set FlightOrigin value
     * @param \Travelport\Air\StructType\TypeLocation $flightOrigin
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setFlightOrigin(?\Travelport\Air\StructType\TypeLocation $flightOrigin = null): self
    {
        $this->FlightOrigin = $flightOrigin;
        
        return $this;
    }
    /**
     * Get FlightDestination value
     * @return \Travelport\Air\StructType\TypeLocation|null
     */
    public function getFlightDestination(): ?\Travelport\Air\StructType\TypeLocation
    {
        return $this->FlightDestination;
    }
    /**
     * Set FlightDestination value
     * @param \Travelport\Air\StructType\TypeLocation $flightDestination
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setFlightDestination(?\Travelport\Air\StructType\TypeLocation $flightDestination = null): self
    {
        $this->FlightDestination = $flightDestination;
        
        return $this;
    }
    /**
     * Get CarrierList value
     * @return \Travelport\Air\StructType\CarrierList|null
     */
    public function getCarrierList(): ?\Travelport\Air\StructType\CarrierList
    {
        return $this->CarrierList;
    }
    /**
     * Set CarrierList value
     * @param \Travelport\Air\StructType\CarrierList $carrierList
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setCarrierList(?\Travelport\Air\StructType\CarrierList $carrierList = null): self
    {
        $this->CarrierList = $carrierList;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setEndDate(?string $endDate = null): self
    {
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setStartTime(?string $startTime = null): self
    {
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setEndTime(?string $endTime = null): self
    {
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get IncludeConnection value
     * @return bool|null
     */
    public function getIncludeConnection(): ?bool
    {
        return $this->IncludeConnection;
    }
    /**
     * Set IncludeConnection value
     * @param bool $includeConnection
     * @return \Travelport\Air\StructType\GeneralTimeTable
     */
    public function setIncludeConnection(?bool $includeConnection = null): self
    {
        $this->IncludeConnection = $includeConnection;
        
        return $this;
    }
}
