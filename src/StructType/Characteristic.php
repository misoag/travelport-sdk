<?php

declare(strict_types=1);

namespace StructType;

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
     * Constructor method for Characteristic
     * @uses Characteristic::setSeatType()
     * @uses Characteristic::setSeatDescription()
     * @uses Characteristic::setSeatValue()
     * @uses Characteristic::setSeatValueDescription()
     * @param string $seatType
     * @param string $seatDescription
     * @param string $seatValue
     * @param string $seatValueDescription
     */
    public function __construct(?string $seatType = null, ?string $seatDescription = null, ?string $seatValue = null, ?string $seatValueDescription = null)
    {
        $this
            ->setSeatType($seatType)
            ->setSeatDescription($seatDescription)
            ->setSeatValue($seatValue)
            ->setSeatValueDescription($seatValueDescription);
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
     * @return \StructType\Characteristic
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
     * @return \StructType\Characteristic
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
     * @return \StructType\Characteristic
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
     * @return \StructType\Characteristic
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
}
