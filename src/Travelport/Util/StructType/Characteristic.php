<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Characteristic StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the characteristics of the seat with seat type, value and description.
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
    protected string $Value;
    /**
     * The SeatType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatType = null;
    /**
     * The SeatDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatDescription = null;
    /**
     * The SeatValue
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatValue = null;
    /**
     * The SeatValueDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatValueDescription = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Position = null;
    /**
     * The RowLocation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $RowLocation = null;
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
    protected ?string $PADISCode = null;
    /**
     * Constructor method for Characteristic
     * @uses Characteristic::setValue()
     * @uses Characteristic::setSeatType()
     * @uses Characteristic::setSeatDescription()
     * @uses Characteristic::setSeatValue()
     * @uses Characteristic::setSeatValueDescription()
     * @uses Characteristic::setPosition()
     * @uses Characteristic::setRowLocation()
     * @uses Characteristic::setPADISCode()
     * @param string $value
     * @param string $seatType
     * @param string $seatDescription
     * @param string $seatValue
     * @param string $seatValueDescription
     * @param string $position
     * @param string $rowLocation
     * @param string $pADISCode
     */
    public function __construct(string $value, ?string $seatType = null, ?string $seatDescription = null, ?string $seatValue = null, ?string $seatValueDescription = null, ?string $position = null, ?string $rowLocation = null, ?string $pADISCode = null)
    {
        $this
            ->setValue($value)
            ->setSeatType($seatType)
            ->setSeatDescription($seatDescription)
            ->setSeatValue($seatValue)
            ->setSeatValueDescription($seatValueDescription)
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
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setSeatType(?string $seatType = null): self
    {
        // validation for constraint: string
        if (!is_null($seatType) && !is_string($seatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatType, true), gettype($seatType)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($seatType) && mb_strlen((string) $seatType) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $seatType)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($seatType) && mb_strlen((string) $seatType) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $seatType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setSeatDescription(?string $seatDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($seatDescription) && !is_string($seatDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatDescription, true), gettype($seatDescription)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($seatDescription) && mb_strlen((string) $seatDescription) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $seatDescription)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($seatDescription) && mb_strlen((string) $seatDescription) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $seatDescription)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setSeatValue(?string $seatValue = null): self
    {
        // validation for constraint: string
        if (!is_null($seatValue) && !is_string($seatValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatValue, true), gettype($seatValue)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($seatValue) && mb_strlen((string) $seatValue) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $seatValue)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($seatValue) && mb_strlen((string) $seatValue) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $seatValue)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setSeatValueDescription(?string $seatValueDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($seatValueDescription) && !is_string($seatValueDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatValueDescription, true), gettype($seatValueDescription)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($seatValueDescription) && mb_strlen((string) $seatValueDescription) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $seatValueDescription)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($seatValueDescription) && mb_strlen((string) $seatValueDescription) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $seatValueDescription)), __LINE__);
        }
        $this->SeatValueDescription = $seatValueDescription;
        
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
     * @uses \Travelport\Util\EnumType\TypePosition::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePosition::getValidValues()
     * @throws InvalidArgumentException
     * @param string $position
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setPosition(?string $position = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePosition::valueIsValid($position)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePosition', is_array($position) ? implode(', ', $position) : var_export($position, true), implode(', ', \Travelport\Util\EnumType\TypePosition::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeRowLocation::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeRowLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rowLocation
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setRowLocation(?string $rowLocation = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeRowLocation::valueIsValid($rowLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeRowLocation', is_array($rowLocation) ? implode(', ', $rowLocation) : var_export($rowLocation, true), implode(', ', \Travelport\Util\EnumType\TypeRowLocation::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Characteristic
     */
    public function setPADISCode(?string $pADISCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pADISCode) && !is_string($pADISCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pADISCode, true), gettype($pADISCode)), __LINE__);
        }
        // validation for constraint: maxLength(99)
        if (!is_null($pADISCode) && mb_strlen((string) $pADISCode) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 99', mb_strlen((string) $pADISCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($pADISCode) && mb_strlen((string) $pADISCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $pADISCode)), __LINE__);
        }
        $this->PADISCode = $pADISCode;
        
        return $this;
    }
}
