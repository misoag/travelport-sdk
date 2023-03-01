<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Characteristic StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the characteristics of the seat with seat type, value and description. | Defines coach characteristics such as accommodation class, smoking choice, etc.
 * @subpackage Structs
 */
class Characteristic extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * The SeatType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatType = null;
    /**
     * The SeatDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatDescription = null;
    /**
     * The SeatValue
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatValue = null;
    /**
     * The SeatValueDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatValueDescription = null;
    /**
     * The Smoking
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Smoking = null;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Class = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Position = null;
    /**
     * The RowLocation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $RowLocation = null;
    /**
     * The PADISCode
     * Meta information extracted from the WSDL
     * - documentation: Industry standard code that defines seat and row characteristic. | Used for Character Strings, length 1 to 99.
     * - base: xs:string
     * - maxLength: 99
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PADISCode = null;
    /**
     * Constructor method for Characteristic
     * @uses Characteristic::setValue()
     * @uses Characteristic::setSeatType()
     * @uses Characteristic::setSeatDescription()
     * @uses Characteristic::setSeatValue()
     * @uses Characteristic::setSeatValueDescription()
     * @uses Characteristic::setSmoking()
     * @uses Characteristic::setClass()
     * @uses Characteristic::setPosition()
     * @uses Characteristic::setRowLocation()
     * @uses Characteristic::setPADISCode()
     * @param string $value
     * @param string $seatType
     * @param string $seatDescription
     * @param string $seatValue
     * @param string $seatValueDescription
     * @param bool $smoking
     * @param string $class
     * @param string $position
     * @param string $rowLocation
     * @param string $pADISCode
     */
    public function __construct(string $value, ?string $seatType = null, ?string $seatDescription = null, ?string $seatValue = null, ?string $seatValueDescription = null, ?bool $smoking = false, ?string $class = null, ?string $position = null, ?string $rowLocation = null, ?string $pADISCode = null)
    {
        $this
            ->setValue($value)
            ->setSeatType($seatType)
            ->setSeatDescription($seatDescription)
            ->setSeatValue($seatValue)
            ->setSeatValueDescription($seatValueDescription)
            ->setSmoking($smoking)
            ->setClass($class)
            ->setPosition($position)
            ->setRowLocation($rowLocation)
            ->setPADISCode($pADISCode);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get SeatType value
     * @return string|null
     */
    public function getSeatType(): ?string
    {
        return $this->SeatType;
    }
    /**
     * Set SeatType value
     * @param string $seatType
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setSeatType(?string $seatType = null): self
    {
        $this->SeatType = $seatType;
        
        return $this;
    }
    /**
     * Get SeatDescription value
     * @return string|null
     */
    public function getSeatDescription(): ?string
    {
        return $this->SeatDescription;
    }
    /**
     * Set SeatDescription value
     * @param string $seatDescription
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setSeatDescription(?string $seatDescription = null): self
    {
        $this->SeatDescription = $seatDescription;
        
        return $this;
    }
    /**
     * Get SeatValue value
     * @return string|null
     */
    public function getSeatValue(): ?string
    {
        return $this->SeatValue;
    }
    /**
     * Set SeatValue value
     * @param string $seatValue
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setSeatValue(?string $seatValue = null): self
    {
        $this->SeatValue = $seatValue;
        
        return $this;
    }
    /**
     * Get SeatValueDescription value
     * @return string|null
     */
    public function getSeatValueDescription(): ?string
    {
        return $this->SeatValueDescription;
    }
    /**
     * Set SeatValueDescription value
     * @param string $seatValueDescription
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setSeatValueDescription(?string $seatValueDescription = null): self
    {
        $this->SeatValueDescription = $seatValueDescription;
        
        return $this;
    }
    /**
     * Get Smoking value
     * @return bool|null
     */
    public function getSmoking(): ?bool
    {
        return $this->Smoking;
    }
    /**
     * Set Smoking value
     * @param bool $smoking
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setSmoking(?bool $smoking = false): self
    {
        $this->Smoking = $smoking;
        
        return $this;
    }
    /**
     * Get Class value
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param string $class
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setClass(?string $class = null): self
    {
        $this->Class = $class;
        
        return $this;
    }
    /**
     * Get Position value
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param string $position
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setPosition(?string $position = null): self
    {
        $this->Position = $position;
        
        return $this;
    }
    /**
     * Get RowLocation value
     * @return string|null
     */
    public function getRowLocation(): ?string
    {
        return $this->RowLocation;
    }
    /**
     * Set RowLocation value
     * @param string $rowLocation
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setRowLocation(?string $rowLocation = null): self
    {
        $this->RowLocation = $rowLocation;
        
        return $this;
    }
    /**
     * Get PADISCode value
     * @return string|null
     */
    public function getPADISCode(): ?string
    {
        return $this->PADISCode;
    }
    /**
     * Set PADISCode value
     * @param string $pADISCode
     * @return \Travelport\Air\StructType\Characteristic
     */
    public function setPADISCode(?string $pADISCode = null): self
    {
        $this->PADISCode = $pADISCode;
        
        return $this;
    }
}
