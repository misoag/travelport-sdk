<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Connection StructType
 * Meta information extracted from the WSDL
 * - documentation: Flight Connection Information
 * @subpackage Structs
 */
class Connection extends AbstractStructBase
{
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\Util\StructType\FareNote|null
     */
    protected ?\Travelport\Util\StructType\FareNote $FareNote = null;
    /**
     * The ChangeOfPlane
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change planes between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ChangeOfPlane = null;
    /**
     * The ChangeOfTerminal
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change terminals between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ChangeOfTerminal = null;
    /**
     * The ChangeOfAirport
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change airports between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ChangeOfAirport = null;
    /**
     * The StopOver
     * Meta information extracted from the WSDL
     * - documentation: Indicates that there is a significant delay between flights (usually 12 hours or more)
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $StopOver = null;
    /**
     * The MinConnectionTime
     * Meta information extracted from the WSDL
     * - documentation: The minimum time needed to connect between the two different destinations.
     * - use: optional
     * @var int|null
     */
    protected ?int $MinConnectionTime = null;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: The actual duration (in minutes) between flights.
     * - use: optional
     * @var int|null
     */
    protected ?int $Duration = null;
    /**
     * The SegmentIndex
     * Meta information extracted from the WSDL
     * - documentation: The sequential AirSegment number that this connection information applies to.
     * - use: optional
     * @var int|null
     */
    protected ?int $SegmentIndex = null;
    /**
     * The FlightDetailsIndex
     * Meta information extracted from the WSDL
     * - documentation: The sequential FlightDetails number that this connection information applies to.
     * - use: optional
     * @var int|null
     */
    protected ?int $FlightDetailsIndex = null;
    /**
     * The IncludeStopOverToFareQuote
     * Meta information extracted from the WSDL
     * - documentation: The field determines to quote fares with or without stop overs,the values can be NoStopOver,StopOver and IgnoreSegment.
     * - use: optional
     * @var string|null
     */
    protected ?string $IncludeStopOverToFareQuote = null;
    /**
     * Constructor method for Connection
     * @uses Connection::setFareNote()
     * @uses Connection::setChangeOfPlane()
     * @uses Connection::setChangeOfTerminal()
     * @uses Connection::setChangeOfAirport()
     * @uses Connection::setStopOver()
     * @uses Connection::setMinConnectionTime()
     * @uses Connection::setDuration()
     * @uses Connection::setSegmentIndex()
     * @uses Connection::setFlightDetailsIndex()
     * @uses Connection::setIncludeStopOverToFareQuote()
     * @param \Travelport\Util\StructType\FareNote $fareNote
     * @param bool $changeOfPlane
     * @param bool $changeOfTerminal
     * @param bool $changeOfAirport
     * @param bool $stopOver
     * @param int $minConnectionTime
     * @param int $duration
     * @param int $segmentIndex
     * @param int $flightDetailsIndex
     * @param string $includeStopOverToFareQuote
     */
    public function __construct(?\Travelport\Util\StructType\FareNote $fareNote = null, ?bool $changeOfPlane = false, ?bool $changeOfTerminal = false, ?bool $changeOfAirport = false, ?bool $stopOver = false, ?int $minConnectionTime = null, ?int $duration = null, ?int $segmentIndex = null, ?int $flightDetailsIndex = null, ?string $includeStopOverToFareQuote = null)
    {
        $this
            ->setFareNote($fareNote)
            ->setChangeOfPlane($changeOfPlane)
            ->setChangeOfTerminal($changeOfTerminal)
            ->setChangeOfAirport($changeOfAirport)
            ->setStopOver($stopOver)
            ->setMinConnectionTime($minConnectionTime)
            ->setDuration($duration)
            ->setSegmentIndex($segmentIndex)
            ->setFlightDetailsIndex($flightDetailsIndex)
            ->setIncludeStopOverToFareQuote($includeStopOverToFareQuote);
    }
    /**
     * Get FareNote value
     * @return \Travelport\Util\StructType\FareNote|null
     */
    public function getFareNote(): ?\Travelport\Util\StructType\FareNote
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\Util\StructType\FareNote $fareNote
     * @return \Travelport\Util\StructType\Connection
     */
    public function setFareNote(?\Travelport\Util\StructType\FareNote $fareNote = null): self
    {
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Get ChangeOfPlane value
     * @return bool|null
     */
    public function getChangeOfPlane(): ?bool
    {
        return $this->ChangeOfPlane;
    }
    /**
     * Set ChangeOfPlane value
     * @param bool $changeOfPlane
     * @return \Travelport\Util\StructType\Connection
     */
    public function setChangeOfPlane(?bool $changeOfPlane = false): self
    {
        // validation for constraint: boolean
        if (!is_null($changeOfPlane) && !is_bool($changeOfPlane)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changeOfPlane, true), gettype($changeOfPlane)), __LINE__);
        }
        $this->ChangeOfPlane = $changeOfPlane;
        
        return $this;
    }
    /**
     * Get ChangeOfTerminal value
     * @return bool|null
     */
    public function getChangeOfTerminal(): ?bool
    {
        return $this->ChangeOfTerminal;
    }
    /**
     * Set ChangeOfTerminal value
     * @param bool $changeOfTerminal
     * @return \Travelport\Util\StructType\Connection
     */
    public function setChangeOfTerminal(?bool $changeOfTerminal = false): self
    {
        // validation for constraint: boolean
        if (!is_null($changeOfTerminal) && !is_bool($changeOfTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changeOfTerminal, true), gettype($changeOfTerminal)), __LINE__);
        }
        $this->ChangeOfTerminal = $changeOfTerminal;
        
        return $this;
    }
    /**
     * Get ChangeOfAirport value
     * @return bool|null
     */
    public function getChangeOfAirport(): ?bool
    {
        return $this->ChangeOfAirport;
    }
    /**
     * Set ChangeOfAirport value
     * @param bool $changeOfAirport
     * @return \Travelport\Util\StructType\Connection
     */
    public function setChangeOfAirport(?bool $changeOfAirport = false): self
    {
        // validation for constraint: boolean
        if (!is_null($changeOfAirport) && !is_bool($changeOfAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changeOfAirport, true), gettype($changeOfAirport)), __LINE__);
        }
        $this->ChangeOfAirport = $changeOfAirport;
        
        return $this;
    }
    /**
     * Get StopOver value
     * @return bool|null
     */
    public function getStopOver(): ?bool
    {
        return $this->StopOver;
    }
    /**
     * Set StopOver value
     * @param bool $stopOver
     * @return \Travelport\Util\StructType\Connection
     */
    public function setStopOver(?bool $stopOver = false): self
    {
        // validation for constraint: boolean
        if (!is_null($stopOver) && !is_bool($stopOver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stopOver, true), gettype($stopOver)), __LINE__);
        }
        $this->StopOver = $stopOver;
        
        return $this;
    }
    /**
     * Get MinConnectionTime value
     * @return int|null
     */
    public function getMinConnectionTime(): ?int
    {
        return $this->MinConnectionTime;
    }
    /**
     * Set MinConnectionTime value
     * @param int $minConnectionTime
     * @return \Travelport\Util\StructType\Connection
     */
    public function setMinConnectionTime(?int $minConnectionTime = null): self
    {
        // validation for constraint: int
        if (!is_null($minConnectionTime) && !(is_int($minConnectionTime) || ctype_digit($minConnectionTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minConnectionTime, true), gettype($minConnectionTime)), __LINE__);
        }
        $this->MinConnectionTime = $minConnectionTime;
        
        return $this;
    }
    /**
     * Get Duration value
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param int $duration
     * @return \Travelport\Util\StructType\Connection
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        
        return $this;
    }
    /**
     * Get SegmentIndex value
     * @return int|null
     */
    public function getSegmentIndex(): ?int
    {
        return $this->SegmentIndex;
    }
    /**
     * Set SegmentIndex value
     * @param int $segmentIndex
     * @return \Travelport\Util\StructType\Connection
     */
    public function setSegmentIndex(?int $segmentIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentIndex) && !(is_int($segmentIndex) || ctype_digit($segmentIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentIndex, true), gettype($segmentIndex)), __LINE__);
        }
        $this->SegmentIndex = $segmentIndex;
        
        return $this;
    }
    /**
     * Get FlightDetailsIndex value
     * @return int|null
     */
    public function getFlightDetailsIndex(): ?int
    {
        return $this->FlightDetailsIndex;
    }
    /**
     * Set FlightDetailsIndex value
     * @param int $flightDetailsIndex
     * @return \Travelport\Util\StructType\Connection
     */
    public function setFlightDetailsIndex(?int $flightDetailsIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($flightDetailsIndex) && !(is_int($flightDetailsIndex) || ctype_digit($flightDetailsIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightDetailsIndex, true), gettype($flightDetailsIndex)), __LINE__);
        }
        $this->FlightDetailsIndex = $flightDetailsIndex;
        
        return $this;
    }
    /**
     * Get IncludeStopOverToFareQuote value
     * @return string|null
     */
    public function getIncludeStopOverToFareQuote(): ?string
    {
        return $this->IncludeStopOverToFareQuote;
    }
    /**
     * Set IncludeStopOverToFareQuote value
     * @uses \Travelport\Util\EnumType\TypeIgnoreStopOver::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeIgnoreStopOver::getValidValues()
     * @throws InvalidArgumentException
     * @param string $includeStopOverToFareQuote
     * @return \Travelport\Util\StructType\Connection
     */
    public function setIncludeStopOverToFareQuote(?string $includeStopOverToFareQuote = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeIgnoreStopOver::valueIsValid($includeStopOverToFareQuote)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeIgnoreStopOver', is_array($includeStopOverToFareQuote) ? implode(', ', $includeStopOverToFareQuote) : var_export($includeStopOverToFareQuote, true), implode(', ', \Travelport\Util\EnumType\TypeIgnoreStopOver::getValidValues())), __LINE__);
        }
        $this->IncludeStopOverToFareQuote = $includeStopOverToFareQuote;
        
        return $this;
    }
}
