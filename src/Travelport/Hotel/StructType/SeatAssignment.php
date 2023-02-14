<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatAssignment StructType
 * @subpackage Structs
 */
class SeatAssignment extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Valid 2 letter Status Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Status;
    /**
     * The Seat
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Seat;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The SeatTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The 4 letter SSR code like SMSW,NSSW,SMST etc. | Valid 4 letter Seat Type Code
     * - base: xs:string
     * - length: 4
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $SeatTypeCode = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * The FlightDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FlightDetailsRef = null;
    /**
     * The RailCoachNumber
     * Meta information extracted from the WSDL
     * - documentation: Coach number for which rail seatmap/coachmap is returned.
     * - use: optional
     * @var string|null
     */
    protected ?string $RailCoachNumber = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for SeatAssignment
     * @uses SeatAssignment::setStatus()
     * @uses SeatAssignment::setSeat()
     * @uses SeatAssignment::setKey()
     * @uses SeatAssignment::setSeatTypeCode()
     * @uses SeatAssignment::setSegmentRef()
     * @uses SeatAssignment::setFlightDetailsRef()
     * @uses SeatAssignment::setRailCoachNumber()
     * @uses SeatAssignment::setElStat()
     * @uses SeatAssignment::setKeyOverride()
     * @param string $status
     * @param string $seat
     * @param string $key
     * @param string $seatTypeCode
     * @param string $segmentRef
     * @param string $flightDetailsRef
     * @param string $railCoachNumber
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $status, string $seat, ?string $key = null, ?string $seatTypeCode = null, ?string $segmentRef = null, ?string $flightDetailsRef = null, ?string $railCoachNumber = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setStatus($status)
            ->setSeat($seat)
            ->setKey($key)
            ->setSeatTypeCode($seatTypeCode)
            ->setSegmentRef($segmentRef)
            ->setFlightDetailsRef($flightDetailsRef)
            ->setRailCoachNumber($railCoachNumber)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setStatus(string $status): self
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
     * Get Seat value
     * @return string
     */
    public function getSeat(): string
    {
        return $this->Seat;
    }
    /**
     * Set Seat value
     * @param string $seat
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setSeat(string $seat): self
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat, true), gettype($seat)), __LINE__);
        }
        $this->Seat = $seat;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get SeatTypeCode value
     * @return string|null
     */
    public function getSeatTypeCode(): ?string
    {
        return $this->SeatTypeCode;
    }
    /**
     * Set SeatTypeCode value
     * @param string $seatTypeCode
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setSeatTypeCode(?string $seatTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($seatTypeCode) && !is_string($seatTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatTypeCode, true), gettype($seatTypeCode)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($seatTypeCode) && mb_strlen((string) $seatTypeCode) !== 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen((string) $seatTypeCode)), __LINE__);
        }
        $this->SeatTypeCode = $seatTypeCode;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get FlightDetailsRef value
     * @return string|null
     */
    public function getFlightDetailsRef(): ?string
    {
        return $this->FlightDetailsRef;
    }
    /**
     * Set FlightDetailsRef value
     * @param string $flightDetailsRef
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setFlightDetailsRef(?string $flightDetailsRef = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDetailsRef) && !is_string($flightDetailsRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDetailsRef, true), gettype($flightDetailsRef)), __LINE__);
        }
        $this->FlightDetailsRef = $flightDetailsRef;
        
        return $this;
    }
    /**
     * Get RailCoachNumber value
     * @return string|null
     */
    public function getRailCoachNumber(): ?string
    {
        return $this->RailCoachNumber;
    }
    /**
     * Set RailCoachNumber value
     * @param string $railCoachNumber
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($railCoachNumber) && !is_string($railCoachNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railCoachNumber, true), gettype($railCoachNumber)), __LINE__);
        }
        $this->RailCoachNumber = $railCoachNumber;
        
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
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\SeatAssignment
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Hotel\StructType\SeatAssignment
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
