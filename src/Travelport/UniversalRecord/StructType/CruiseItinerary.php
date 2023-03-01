<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseItinerary StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains one day's journey Record.
 * @subpackage Structs
 */
class CruiseItinerary extends AbstractStructBase
{
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this entity departs.
     * - use: optional
     * @var string|null
     */
    public ?string $DepartureDate = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which this entity departs.
     * - use: optional
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ArrivalDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this entity arrives at the destination.
     * - use: optional
     * @var string|null
     */
    public ?string $ArrivalDate = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which this entity arrives at the destination.
     * - use: optional
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * The BoardingDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this passenger boards the entity.
     * - use: optional
     * @var string|null
     */
    public ?string $BoardingDate = null;
    /**
     * The BoardingTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which this passenger boards the entity.
     * - use: optional
     * @var string|null
     */
    public ?string $BoardingTime = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Port of call status .Possible Values (List): SS - New item, LL - Waitlisted item, NN - Item is no need/need status, IX - Canceled item, HK - Booked item, HL - Booked item, HN - Booked item, UC - Unconfirmed item | Valid 2 letter
     * Status Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The PortName
     * Meta information extracted from the WSDL
     * - documentation: Port of call name | Used for Character Strings, length 1 to 20.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PortName = null;
    /**
     * The PortIndicator
     * Meta information extracted from the WSDL
     * - documentation: Port of call type. Can be of the following values : P - Port of Cal, S - At Sea, E - Embarkation Port, D - Disembarkation Port | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PortIndicator = null;
    /**
     * Constructor method for CruiseItinerary
     * @uses CruiseItinerary::setDepartureDate()
     * @uses CruiseItinerary::setDepartureTime()
     * @uses CruiseItinerary::setArrivalDate()
     * @uses CruiseItinerary::setArrivalTime()
     * @uses CruiseItinerary::setBoardingDate()
     * @uses CruiseItinerary::setBoardingTime()
     * @uses CruiseItinerary::setStatus()
     * @uses CruiseItinerary::setPortName()
     * @uses CruiseItinerary::setPortIndicator()
     * @param string $departureDate
     * @param string $departureTime
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $boardingDate
     * @param string $boardingTime
     * @param string $status
     * @param string $portName
     * @param string $portIndicator
     */
    public function __construct(?string $departureDate = null, ?string $departureTime = null, ?string $arrivalDate = null, ?string $arrivalTime = null, ?string $boardingDate = null, ?string $boardingTime = null, ?string $status = null, ?string $portName = null, ?string $portIndicator = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setBoardingDate($boardingDate)
            ->setBoardingTime($boardingTime)
            ->setStatus($status)
            ->setPortName($portName)
            ->setPortIndicator($portIndicator);
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        $this->DepartureDate = $departureDate;
        
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
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ArrivalDate value
     * @return string|null
     */
    public function getArrivalDate(): ?string
    {
        return $this->ArrivalDate;
    }
    /**
     * Set ArrivalDate value
     * @param string $arrivalDate
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        $this->ArrivalDate = $arrivalDate;
        
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
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get BoardingDate value
     * @return string|null
     */
    public function getBoardingDate(): ?string
    {
        return $this->BoardingDate;
    }
    /**
     * Set BoardingDate value
     * @param string $boardingDate
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setBoardingDate(?string $boardingDate = null): self
    {
        $this->BoardingDate = $boardingDate;
        
        return $this;
    }
    /**
     * Get BoardingTime value
     * @return string|null
     */
    public function getBoardingTime(): ?string
    {
        return $this->BoardingTime;
    }
    /**
     * Set BoardingTime value
     * @param string $boardingTime
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setBoardingTime(?string $boardingTime = null): self
    {
        $this->BoardingTime = $boardingTime;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get PortName value
     * @return string|null
     */
    public function getPortName(): ?string
    {
        return $this->PortName;
    }
    /**
     * Set PortName value
     * @param string $portName
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setPortName(?string $portName = null): self
    {
        $this->PortName = $portName;
        
        return $this;
    }
    /**
     * Get PortIndicator value
     * @return string|null
     */
    public function getPortIndicator(): ?string
    {
        return $this->PortIndicator;
    }
    /**
     * Set PortIndicator value
     * @param string $portIndicator
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary
     */
    public function setPortIndicator(?string $portIndicator = null): self
    {
        $this->PortIndicator = $portIndicator;
        
        return $this;
    }
}
