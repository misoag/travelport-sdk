<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\FareNote|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareNote $FareNote = null;
    /**
     * The ChangeOfPlane
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change planes between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ChangeOfPlane = null;
    /**
     * The ChangeOfTerminal
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change terminals between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ChangeOfTerminal = null;
    /**
     * The ChangeOfAirport
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change airports between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ChangeOfAirport = null;
    /**
     * The StopOver
     * Meta information extracted from the WSDL
     * - documentation: Indicates that there is a significant delay between flights (usually 12 hours or more)
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $StopOver = null;
    /**
     * The MinConnectionTime
     * Meta information extracted from the WSDL
     * - documentation: The minimum time needed to connect between the two different destinations.
     * - use: optional
     * @var int|null
     */
    public ?int $MinConnectionTime = null;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: The actual duration (in minutes) between flights.
     * - use: optional
     * @var int|null
     */
    public ?int $Duration = null;
    /**
     * The SegmentIndex
     * Meta information extracted from the WSDL
     * - documentation: The sequential AirSegment number that this connection information applies to.
     * - use: optional
     * @var int|null
     */
    public ?int $SegmentIndex = null;
    /**
     * The FlightDetailsIndex
     * Meta information extracted from the WSDL
     * - documentation: The sequential FlightDetails number that this connection information applies to.
     * - use: optional
     * @var int|null
     */
    public ?int $FlightDetailsIndex = null;
    /**
     * The IncludeStopOverToFareQuote
     * Meta information extracted from the WSDL
     * - documentation: The field determines to quote fares with or without stop overs,the values can be NoStopOver,StopOver and IgnoreSegment.
     * - use: optional
     * @var string|null
     */
    public ?string $IncludeStopOverToFareQuote = null;
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
     * @param \Travelport\UniversalRecord\StructType\FareNote $fareNote
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
    public function __construct(?\Travelport\UniversalRecord\StructType\FareNote $fareNote = null, ?bool $changeOfPlane = false, ?bool $changeOfTerminal = false, ?bool $changeOfAirport = false, ?bool $stopOver = false, ?int $minConnectionTime = null, ?int $duration = null, ?int $segmentIndex = null, ?int $flightDetailsIndex = null, ?string $includeStopOverToFareQuote = null)
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
     * @return \Travelport\UniversalRecord\StructType\FareNote|null
     */
    public function getFareNote(): ?\Travelport\UniversalRecord\StructType\FareNote
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\UniversalRecord\StructType\FareNote $fareNote
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setFareNote(?\Travelport\UniversalRecord\StructType\FareNote $fareNote = null): self
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setChangeOfPlane(?bool $changeOfPlane = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setChangeOfTerminal(?bool $changeOfTerminal = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setChangeOfAirport(?bool $changeOfAirport = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setStopOver(?bool $stopOver = false): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setMinConnectionTime(?int $minConnectionTime = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setDuration(?int $duration = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setSegmentIndex(?int $segmentIndex = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setFlightDetailsIndex(?int $flightDetailsIndex = null): self
    {
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
     * @param string $includeStopOverToFareQuote
     * @return \Travelport\UniversalRecord\StructType\Connection
     */
    public function setIncludeStopOverToFareQuote(?string $includeStopOverToFareQuote = null): self
    {
        $this->IncludeStopOverToFareQuote = $includeStopOverToFareQuote;
        
        return $this;
    }
}
