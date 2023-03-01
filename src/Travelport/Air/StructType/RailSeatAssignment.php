<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSeatAssignment StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the seat assignment for a passenger on RailSegment.
 * @subpackage Structs
 */
class RailSeatAssignment extends AbstractStructBase
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
    public string $Status;
    /**
     * The Seat
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Seat;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\Air\StructType\Characteristic[]
     */
    public ?array $Characteristic = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RailSegmentRef = null;
    /**
     * The CoachNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CoachNumber = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for RailSeatAssignment
     * @uses RailSeatAssignment::setStatus()
     * @uses RailSeatAssignment::setSeat()
     * @uses RailSeatAssignment::setCharacteristic()
     * @uses RailSeatAssignment::setKey()
     * @uses RailSeatAssignment::setRailSegmentRef()
     * @uses RailSeatAssignment::setCoachNumber()
     * @uses RailSeatAssignment::setElStat()
     * @uses RailSeatAssignment::setKeyOverride()
     * @param string $status
     * @param string $seat
     * @param \Travelport\Air\StructType\Characteristic[] $characteristic
     * @param string $key
     * @param string $railSegmentRef
     * @param string $coachNumber
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $status, string $seat, ?array $characteristic = null, ?string $key = null, ?string $railSegmentRef = null, ?string $coachNumber = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setStatus($status)
            ->setSeat($seat)
            ->setCharacteristic($characteristic)
            ->setKey($key)
            ->setRailSegmentRef($railSegmentRef)
            ->setCoachNumber($coachNumber)
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
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setStatus(string $status): self
    {
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
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setSeat(string $seat): self
    {
        $this->Seat = $seat;
        
        return $this;
    }
    /**
     * Get Characteristic value
     * @return \Travelport\Air\StructType\Characteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param \Travelport\Air\StructType\Characteristic[] $characteristic
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Add item to Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Characteristic $item
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function addToCharacteristic(\Travelport\Air\StructType\Characteristic $item): self
    {
        $this->Characteristic[] = $item;
        
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
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get RailSegmentRef value
     * @return string|null
     */
    public function getRailSegmentRef(): ?string
    {
        return $this->RailSegmentRef;
    }
    /**
     * Set RailSegmentRef value
     * @param string $railSegmentRef
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setRailSegmentRef(?string $railSegmentRef = null): self
    {
        $this->RailSegmentRef = $railSegmentRef;
        
        return $this;
    }
    /**
     * Get CoachNumber value
     * @return string|null
     */
    public function getCoachNumber(): ?string
    {
        return $this->CoachNumber;
    }
    /**
     * Set CoachNumber value
     * @param string $coachNumber
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setCoachNumber(?string $coachNumber = null): self
    {
        $this->CoachNumber = $coachNumber;
        
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
     * @param string $elStat
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\Air\StructType\RailSeatAssignment
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
