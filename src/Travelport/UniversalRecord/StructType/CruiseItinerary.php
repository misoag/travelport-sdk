<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $DepartureDate = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which this entity departs.
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The ArrivalDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this entity arrives at the destination.
     * - use: optional
     * @var string|null
     */
    protected ?string $ArrivalDate = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which this entity arrives at the destination.
     * - use: optional
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The BoardingDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this passenger boards the entity.
     * - use: optional
     * @var string|null
     */
    protected ?string $BoardingDate = null;
    /**
     * The BoardingTime
     * Meta information extracted from the WSDL
     * - documentation: The time at which this passenger boards the entity.
     * - use: optional
     * @var string|null
     */
    protected ?string $BoardingTime = null;
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
    protected ?string $Status = null;
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
    protected ?string $PortName = null;
    /**
     * The PortIndicator
     * Meta information extracted from the WSDL
     * - documentation: Port of call type. Can be of the following values : P - Port of Cal, S - At Sea, E - Embarkation Port, D - Disembarkation Port | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $PortIndicator = null;
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
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($boardingDate) && !is_string($boardingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boardingDate, true), gettype($boardingDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($boardingTime) && !is_string($boardingTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boardingTime, true), gettype($boardingTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($status) && mb_strlen((string) $status) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $status)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($portName) && !is_string($portName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portName, true), gettype($portName)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($portName) && mb_strlen((string) $portName) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $portName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($portName) && mb_strlen((string) $portName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $portName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($portIndicator) && !is_string($portIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portIndicator, true), gettype($portIndicator)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($portIndicator) && mb_strlen((string) $portIndicator) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $portIndicator)), __LINE__);
        }
        $this->PortIndicator = $portIndicator;
        
        return $this;
    }
}
