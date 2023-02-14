<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Status;
    /**
     * The Seat
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Seat;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\Util\StructType\Characteristic[]
     */
    protected ?array $Characteristic = null;
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
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RailSegmentRef = null;
    /**
     * The CoachNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CoachNumber = null;
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
     * @param \Travelport\Util\StructType\Characteristic[] $characteristic
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
     * @return \Travelport\Util\StructType\RailSeatAssignment
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
     * @return \Travelport\Util\StructType\RailSeatAssignment
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
     * Get Characteristic value
     * @return \Travelport\Util\StructType\Characteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->Characteristic;
    }
    /**
     * This method is responsible for validating the values passed to the setCharacteristic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristic method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicForArrayConstraintsFromSetCharacteristic(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSeatAssignmentCharacteristicItem) {
            // validation for constraint: itemType
            if (!$railSeatAssignmentCharacteristicItem instanceof \Travelport\Util\StructType\Characteristic) {
                $invalidValues[] = is_object($railSeatAssignmentCharacteristicItem) ? get_class($railSeatAssignmentCharacteristicItem) : sprintf('%s(%s)', gettype($railSeatAssignmentCharacteristicItem), var_export($railSeatAssignmentCharacteristicItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Characteristic property can only contain items of type \Travelport\Util\StructType\Characteristic, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Characteristic[] $characteristic
     * @return \Travelport\Util\StructType\RailSeatAssignment
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        // validation for constraint: array
        if ('' !== ($characteristicArrayErrorMessage = self::validateCharacteristicForArrayConstraintsFromSetCharacteristic($characteristic))) {
            throw new InvalidArgumentException($characteristicArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($characteristic) && count($characteristic) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($characteristic)), __LINE__);
        }
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Add item to Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Characteristic $item
     * @return \Travelport\Util\StructType\RailSeatAssignment
     */
    public function addToCharacteristic(\Travelport\Util\StructType\Characteristic $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Characteristic) {
            throw new InvalidArgumentException(sprintf('The Characteristic property can only contain items of type \Travelport\Util\StructType\Characteristic, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Characteristic) && count($this->Characteristic) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Characteristic)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\RailSeatAssignment
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
     * @return \Travelport\Util\StructType\RailSeatAssignment
     */
    public function setRailSegmentRef(?string $railSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($railSegmentRef) && !is_string($railSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railSegmentRef, true), gettype($railSegmentRef)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\RailSeatAssignment
     */
    public function setCoachNumber(?string $coachNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($coachNumber) && !is_string($coachNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coachNumber, true), gettype($coachNumber)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\RailSeatAssignment
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Util\StructType\RailSeatAssignment
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
